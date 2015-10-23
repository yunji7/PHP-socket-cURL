<?php
/**
 * Created by PhpStorm.
 * User: android
 * Date: 2015/10/23
 * Time: 21:50
 */

  var_dump($_FILES);

   $img = file_get_contents($_FILES['file']['tmp_name']);
var_dump($img);

$path = __DIR__.'\\'.$_FILES['file']['name'];
var_dump($path);
   file_put_contents($path,$img);