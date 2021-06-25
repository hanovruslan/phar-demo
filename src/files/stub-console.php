#!/usr/bin/env php
<?php

Phar::mapPhar($alias = 'module.phar');

require 'phar://' . $alias . '/src/apps/console/console.php';

__HALT_COMPILER();
