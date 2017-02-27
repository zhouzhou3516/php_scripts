<?php
/**
 * Created by PhpStorm.
 * User: qingzhli
 * Date: 26/02/2017
 * Time: 11:39 PM
 */

Class Zzf
{
    public function zzfggcx()
    {
        $base_url='http://www.bjjs.gov.cn';
        $tzgx_list_url='http://www.bjjs.gov.cn/bjjs/fwgl/zzxspzf/tzgg/index.shtml';
        $doc =  new DOMDocument();
        $doc->loadHTMLFile($tzgx_list_url);
        $all_li_items = $doc->getElementsByTagName("li");

        $res_string=null;
        Date_default_timezone_set("PRC");
        foreach ($all_li_items as $item){
            if($item->childNodes->length) {
                $firstNode=null;
                foreach($item->childNodes as $key=>$i) {
                    if($key==0 ){
                        $firstNode = $i;
                    }
                    //if($i -> nodeValue == date("Y-m-d")){
                    if($i -> nodeValue == '2017-02-22'){
                        //$ret = $ret . $firstNode->ownerDocument->saveXML($item).PHP_EOL;
                        $res_string = $res_string . $base_url.$firstNode->getAttributeNode('href')->value.PHP_EOL;
                        //print($firstNode->ownerDocument->saveXML($item) . PHP_EOL);
                    }

                }
            }
        }
        return $res_string;
    }
}