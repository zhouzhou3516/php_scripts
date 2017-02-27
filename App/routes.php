<?php
/**
 * Created by PhpStorm.
 * User: qingzhli
 * Date: 26/02/2017
 * Time: 6:10 PM
 */

use Slim\App;
use Zeuxisoo\Whoops\Provider\Slim\WhoopsMiddleware;
/***
 * The slim documents: http://www.slimframework.com/docs/objects/router.html
 */

// config
$debug = false;
if (defined("DEBUG")) {
    $debug = true;
}
// Make a Slim App
// $app = new App($c)
$app = new App([
    'settings' => [
        'debug' => $debug,
        'whoops.editor' => 'sublime'
    ]
]);
$app->add(new WhoopsMiddleware);
// Home
$app->get('/hello', 'App\Controllers\HelloController:index');
$app->get('/zzfcx', 'App\Controllers\HelloController:zzfggcx');
return $app;