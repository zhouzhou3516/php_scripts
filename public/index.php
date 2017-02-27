<?php

// index.php->app.php->Boot.php->config.php
//  PUBLIC_PATH
define('PUBLIC_PATH', __DIR__);

// Bootstrap
require PUBLIC_PATH . '/../bootstrap/app.php';

// Build Slim App
$app = require BASE_PATH . '/App/routes.php';

// Run ButterFly!
$app->run();
