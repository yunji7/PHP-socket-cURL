<?php

header("Content-type:text/html;charset=utf-8");

$port = 7569;
$ip = "127.0.0.1";

$sock = socket_create(AF_INET,SOCK_STREAM,SOL_TCP);

socket_connect($sock,$ip,$port);
$aa = array(
    'x'=>5,
    'd'=>5,
);


$a = json_encode($aa);
var_dump($a);

socket_write($sock,$a,1000);

$god = socket_read($sock,6);


var_dump($god);
