<?php
/**
 * Created by PhpStorm.
 * User: May
 * Date: 2015/6/3
 * Time: 19:32
 */

header("Content-type:text/html;charset=utf-8");

$port = 1935;
$ip = "127.0.0.1";

  $socket = socket_create(AF_INET,SOCK_STREAM,SOL_TCP);

  $result = socket_connect($socket,$ip,$port);

var_dump($result);

 $in = "hello ever body  is hi \r\n";
$out = '';

 socket_write($socket,$in,strlen($in));
 echo '发送的内容为'. $in ;
  while($out = socket_read($socket,100)){
      echo '接受到的内容为'.$out;
  }

  var_dump($result);

 socket_close($socket);


