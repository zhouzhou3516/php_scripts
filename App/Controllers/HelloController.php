<?php
namespace App\Controllers;

use App\Services\Mail;
use App\Services\Zzf;
use Aws\Api\Service;



class HelloController extends BaseController{

    public function index($request, $response){

        $ret['msg']='Hello world123';
        $ret['ret']='1';
        print(Mail::sendSMTP('735338750@qq.com','hello email!',' hello body'));
        return $this->echoJson($response, $ret);
    }

    public function zzfggcx($request,$response){
        $ret['ret']=1;
        $ret['msg']=Zzf::zzfggcx();
        Mail::sendSMTP('735338750@qq.com','hello email!',' hello body');
        return $this->echoJson($response,$ret);
    }
}