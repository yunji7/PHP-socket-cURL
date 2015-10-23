<?php
set_time_limit(0);
$ip = '127.0.0.1';
$part = 7569;
$clients = array();


$sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

socket_bind($sock,$ip,$part);


socket_listen($sock);
$sss = 'abdf';
 $new = socket_accept($sock);

$s = socket_read($new,10040 );
var_dump($s);
$aaa  = json_decode($s, TRUE ) ;

var_dump( $aaa );


socket_write($new,$sss, strlen($sss));


 socket_close($new);

socket_close($sock);

