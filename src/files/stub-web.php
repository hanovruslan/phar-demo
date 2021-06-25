<?php

Phar::webPhar($alias = 'web.phar');

require 'phar://' . $alias . '/src/apps/web/web.php';

__HALT_COMPILER();
