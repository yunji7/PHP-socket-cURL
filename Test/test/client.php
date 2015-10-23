
<?php

header("Content-type:text/html;charset=utf-8");

$port = 5437;
$ip = "127.0.0.1";

  $sock = socket_create(AF_INET,SOCK_STREAM,SOL_TCP);

   socket_connect($sock,$ip,$port);

    $god[] = socket_read($sock,6);






?>

