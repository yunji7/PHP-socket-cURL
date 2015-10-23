<?php
/**
 * Created by PhpStorm.
 * User: android
 * Date: 2015/10/23
 * Time: 21:50
 */

    $url = curl_init();




   $options= array(
       CURLOPT_URL=>'http://localhost/Test/cURLFileServer.php',
       CURLOPT_RETURNTRANSFER=>1,
       CURLOPT_POST=>1,
       CURLOPT_POSTFIELDS=> array(
           'file'=>'@E:\23.jpg'
       )

   );

    @curl_setopt_array($url,$options);


 $data = curl_exec($url);

echo $data;

 var_dump($data);