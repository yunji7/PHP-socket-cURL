<?php
/**
 * Created by PhpStorm.
 * User: android
 * Date: 2015/10/23
 * Time: 23:11
 */

//var_dump($_POST);

    file_put_contents($_POST['name'].'.txt',$_POST['text']);

  var_dump($_POST);