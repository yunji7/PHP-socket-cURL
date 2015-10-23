<?php
/**
 * Created by PhpStorm.
 * User: android
 * Date: 2015/10/24
 * Time: 0:37
 */

 $curl = curl_init();

 $option = array(
     //url
     CURLOPT_URL => 'http://yunji7.oss-cn-qingdao.aliyuncs.com/21.jpg',
     // 将 curl_exec() 获取的信息以文件流的形式返回，而不是直接输出。
     CURLOPT_RETURNTRANSFER => 1,
     //post 提交
     CURLOPT_POST => 1,
     //启用时会将头文件的信息作为数据流输出。
     CURLOPT_HEADER => 1,

     //如果为空字符串""，请求头会发送所有支持的编码类型。
     CURLOPT_ENCODING =>'',

     //在HTTP请求头中"Referer: "的内容。
     CURLOPT_REFERER=>'http://www.baidu.com',


     //用来设置头信息
     CURLOPT_HTTPHEADER =>array(
         'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
         'User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.89 Safari/537.36',
         'Accept-Language: zh-CN,zh;q=0.8',
         'Cookie: admin_username=admin; PHPSESSID=u41o7gee7qllq911umkg9n93s5; xystate=1; xytime=1445606743967; CoupletMedia-349806715=1',
         'Connection: keep-alive',
         'yse: asdfasdfasdf', //自定义消息头
     ),

 );
 //配置
 curl_setopt_array($curl, $option);
 //执行
 $data = curl_exec($curl);
 echo $data;
 var_dump($data);

 //关闭
 curl_close($curl);