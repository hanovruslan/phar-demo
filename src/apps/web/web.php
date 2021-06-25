<?php

namespace Hanovruslan\Phar\Demo;

require_once dirname(__DIR__, 3) . '/vendor/autoload.php';

$faker = \Faker\Factory::create();

echo '<h1>Hello, web!</h1>';

echo '<table>';
echo '<tr>';
echo '<th>name</th>';
echo '<th>email</th>';
echo '<th>text</th>';
echo '</tr>';
for ($i = 0; $i < 10; $i++) {
    echo '<tr>';
    echo '<td>' . $faker->name(). '</td>';
    echo '<td>' . $faker->email(). '</td>';
    echo '<td>' . $faker->sentence(). '</td>';
    echo '</tr>';
}
echo '</table>';
