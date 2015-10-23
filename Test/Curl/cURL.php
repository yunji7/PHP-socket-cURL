<?php
/**
 * Created by PhpStorm.
 * User: android
 * Date: 2015/10/23
 * Time: 19:48
 */

//header("Content-type:text/html;charset=utf-8");



    $ch  =  curl_init ();

    // 设置URL和相应的选项

$option = array(
    CURLOPT_URL=>'http://localhost/Test/Server.php',

    //流信息并不直接输出
    CURLOPT_RETURNTRANSFER=>1,

    //头信息输出
    CURLOPT_HEADER=>1,

    CURLOPT_POST=>1,
    CURLOPT_POSTFIELDS=> array(
        'name'=>5,
        'mail'=>34123,
    )
);

    curl_setopt_array($ch ,  $option);



    // 抓取URL并把它传递给浏览器
for ($i = 0; $i < 10; $i++) {
    $data =    curl_exec ( $ch );
}


echo $data;



 $info = curl_getinfo($ch);



var_dump($data );
var_dump($info );
    // 关闭cURL资源，并且释放系统资源
    curl_close ( $ch );
