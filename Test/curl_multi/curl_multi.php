<?php
/**
 * Created by PhpStorm.
 * User: android
 * Date: 2015/10/23
 * Time: 22:55
 */


$c1 = curl_init();
$c2 = curl_init();


$options1 = array(
    CURLOPT_URL => 'http://localhost/Test/curl_multi/post.php',
    CURLOPT_RETURNTRANSFER => 1,
//    CURLOPT_HEADER => 1,
);

$options2 = array(
    CURLOPT_URL => 'http://localhost/Test/curl_multi/post.php',
    CURLOPT_RETURNTRANSFER => 1,
//    CURLOPT_HEADER => 1,
    CURLOPT_POST =>1,
    CURLOPT_POSTFIELDS=>array(
        'name'=>5234,
        'text'=>'asdfsdafsadfsdafsadf'
    ),
);


//    curl_setopt_array($c2,$options2);
//
// $data = curl_exec($c2);
//echo $data;
//
//var_dump($data);
//
curl_setopt_array($c1, $options2);
curl_setopt_array($c2, $options2);

     $multi = curl_multi_init();

   curl_multi_add_handle($multi,$c1);
   curl_multi_add_handle($multi,$c2);

$active  =  null ;
// 执行批处理句柄
do {
    $mrc  =  curl_multi_exec ( $multi ,  $active );

    var_dump($mrc);
    var_dump($active);

} while ( $mrc  ==  CURLM_CALL_MULTI_PERFORM );


while ( $active  &&  $mrc  ==  CURLM_OK ) {
    if ( curl_multi_select ( $multi ) != - 1 ) {
        do {
            $mrc  =  curl_multi_exec ( $multi ,  $active );
        } while ( $mrc  ==  CURLM_CALL_MULTI_PERFORM );
    }
}


curl_multi_remove_handle ( $multi ,  $c1 );
curl_multi_remove_handle ( $multi ,  $c2 );
curl_multi_close ( $multi );