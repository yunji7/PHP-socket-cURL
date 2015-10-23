<?php
/**
 * Created by PhpStorm.
 * User: android
 * Date: 2015/10/24
 * Time: 2:27
 */


 $curl = curl_init();

 $option = array(
     //url
     CURLOPT_URL => 'http://yunji7.oss-cn-qingdao.aliyuncs.com/21.jpg',
     // 将 curl_exec() 获取的信息以文件流的形式返回，而不是直接输出。
     CURLOPT_RETURNTRANSFER => 1,
     //post 提交
     CURLOPT_HTTPGET => 1,
     //启用时会将头文件的信息作为数据流输出。
//     CURLOPT_HEADER => 1,

     //如果为空字符串""，请求头会发送所有支持的编码类型。
     CURLOPT_ENCODING =>'',

     //在HTTP请求头中"Referer: "的内容。


     //用来设置头信息


 );
 //配置
 curl_setopt_array($curl, $option);
 //执行
 $data = curl_exec($curl);

header("Content-Type: image/jpeg");
echo $data;
  $ss =  file_get_contents($data);
  file_put_contents('123.jpg',$data);


 var_dump($data);

 //关闭
 curl_close($curl);