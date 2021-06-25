<?php

Phar::webPhar($alias = 'module.phar');

require 'phar://' . $alias . '/src/index.php';

__HALT_COMPILER();
