<?php
/**
 * Created by PhpStorm.
 * User: android
 * Date: 2015/10/24
 * Time: 10:16
 */

 $curl = curl_init();

 $option = array(
     //url
     CURLOPT_URL => 'http://localhost/File/response.php',
     // �� curl_exec() ��ȡ����Ϣ���ļ�������ʽ���أ�������ֱ�������
     CURLOPT_RETURNTRANSFER => 1,
     //post �ύ
     CURLOPT_POST => 1,
     //����ʱ�Ὣͷ�ļ�����Ϣ��Ϊ�����������
     CURLOPT_HEADER => 1,

     //���Ϊ���ַ���""������ͷ�ᷢ������֧�ֵı������͡�
     CURLOPT_ENCODING =>'',

     //��HTTP����ͷ��"Referer: "�����ݡ�
     CURLOPT_REFERER=>'http://www.baidu.com',


     //��������ͷ��Ϣ
     CURLOPT_HTTPHEADER =>array(
         'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
         'User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.89 Safari/537.36',
         'Accept-Language: zh-CN,zh;q=0.8',
         'Cookie: admin_username=admin; PHPSESSID=u41o7gee7qllq911umkg9n93s5; xystate=1; xytime=1445606743967; CoupletMedia-349806715=1',
         'Connection: keep-alive',
         'yse: asdfasdfasdf', //�Զ�����Ϣͷ
     ),
     CURLOPT_NOBODY=>1,

 );
 //����
 curl_setopt_array($curl, $option);
 //ִ��
 $data = curl_exec($curl);
 echo $data;
 var_dump($data);

 //�ر�
 curl_close($curl);

//  $data = file_get_contents('http://localhost/File/response.php');

  var_dump(get_headers('http://localhost/File/response.php',1));


