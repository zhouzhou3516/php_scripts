<?php

namespace App\Services\Mail;

use App\Services\Config;

class SendCloud extends Base
{

  /**
   * @codeCoverageIgnore
   */
  public function __construct()
  {
    $this->config = $this->getConfig();
    $this->key = $this->config["key"];
    $this->user = $this->config["user"];
    $this->sender = $this->config["sender"];
  }

  /**
   * @codeCoverageIgnore
   */
  public function getConfig()
  {
    return [
      "key" => Config::get('sendcloud_key'),
        "user" => Config::get('sendcloud_user'),
        "sender" => Config::get('sendcloud_sender')
      ];
  }

  /**
   * @codeCoverageIgnore
   */
  public function send($to, $subject, $text, $file)
  {
    $url = 'http://api.sendcloud.net/apiv2/mail/send';

    $param = array(
      'apiUser' => $this->user, # 使用api_user和api_key进行验证
      'apiKey' => $this->key,
      'from' => $this->sender,
      'fromName' => '',
      'to' => $to,
      'subject' => $subject,
      'html' => $text,
      'respEmailId' => 'true'
    );


    $data = http_build_query($param);

    $options = array(
      'http' => array(
        'method' => 'POST',
        'header' => 'Content-Type: application/x-www-form-urlencoded',
        'content' => $data
      ));
    $context  = stream_context_create($options);
    $result = file_get_contents($url, FILE_TEXT, $context);
    //return $result;
  }
}
