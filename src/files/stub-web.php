<?php

Phar::webPhar($alias = 'module.phar');

require 'phar://' . $alias . '/src/apps/web/web.php';

__HALT_COMPILER();
