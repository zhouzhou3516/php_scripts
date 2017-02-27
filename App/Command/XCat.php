<?php

namespace App\Command;

/***
 * Class XCat
 * @package App\Command
 */

use App\Services\Config;
use App\Utils\Hash;
use App\Utils\Tools;
use App\Services\Mail;
use App\Services\Zzf;


class XCat
{

    public $argv;

    public function __construct($argv)
    {
        $this->argv = $argv;
    }

    public function boot()
    {
        switch ($this->argv[1]) {
            case("install"):
                return $this->install();
            case("zzfggcx"):
                return $this->zzfggcx();
            default:
                return $this->defaultAction();
        }
    }

    public function defaultAction()
    {
    }

    public function install()
    {
        echo "x cat will install ss-panel v3...../n";
    }

    public function zzfggcx()
    {
        $ret = Zzf::zzfggcx();
        Mail::sendSMTP('735338750@qq.com','自住房公告更新了',$ret);
        echo 'sent email';
    }

}
