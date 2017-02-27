<?php
/**
 * Created by PhpStorm.
 * User: qingzhli
 * Date: 26/02/2017
 * Time: 7:48 PM
 */

use App\Services\Boot;

//  BASE_PATH
define('BASE_PATH', __DIR__ . '/../');
define('VERSION', '1.0.0');

// Vendor Autoload
require BASE_PATH . '/vendor/autoload.php';

Boot::loadEnv();
Boot::setDebug();
Boot::setVersion(VERSION);
// config time zone
Boot::setTimezone();
// Init db
//Boot::bootDb();
