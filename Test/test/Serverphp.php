
<?php

header("Content-type:text/html;charset=utf-8");

//phpinfo();
//确保在连接客户端时不会超时
set_time_limit(0);
$ip = '127.0.0.1';
$port = 1935;
/*
 +-------------------------------
 *    @socket通信整个过程
 +-------------------------------
 *    @socket_create
 *    @socket_bind
 *    @socket_listen
 *    @socket_accept
 *    @socket_read
 *    @socket_write
 *    @socket_close
 +--------------------------------
 */







/*----------------    核心    -------------------*/
$sent  = '5555';
  $sock =  socket_create(AF_INET,SOCK_STREAM,SOL_TCP);
  socket_bind($sock,$ip,$port);
  socket_listen($sock,4);



  $msgsock = socket_accept($sock);
  $buf = socket_read($msgsock,8111);
echo '接收到的'.$buf;
var_dump($msgsock);
  socket_write($msgsock,$sent,strlen($sent));


  socket_close($msgsock);


  socket_close($sock);
