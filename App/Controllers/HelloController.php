<?php
namespace App\Controllers;

use App\Services\Mail;
/**
 * Created by PhpStorm.
 * User: qingzhli
 * Date: 26/02/2017
 * Time: 7:40 PM
 */

class HelloController extends BaseController{
    public function index($request, $response){
        $ret['msg']='Hello world123';
        $ret['ret']='1';
        print(Mail::sendSMTP('735338750@qq.com','hello email!',' hello body'));
        return $this->echoJson($response, $ret);
    }
}