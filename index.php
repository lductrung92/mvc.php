<?php
/**
 * define root path
 */

define('__PATH__', __DIR__);
define('__VIEW__', __DIR__ . '/resources/views/');
define('__CTR__', __DIR__ . '/app/controllers/');
define('__MOD__', __DIR__ . '/app/models/');

require_once __PATH__.'/config/autoload.php';
require_once __PATH__.'/routes/web.php';