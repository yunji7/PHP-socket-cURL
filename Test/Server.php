<?php
/**
 * Created by PhpStorm.
 * User: android
 * Date: 2015/10/23
 * Time: 9:14
 */

header("Content-type:text/html;charset=utf-8");

$dsn  =  'mysql:dbname=text;host=127.0.0.1' ;
$user  =  'god' ;
$password  =  'god' ;

try {
 $dbh  = new  PDO ( $dsn ,  $user ,  $password );

 $sth  =  $dbh -> prepare ( 'INSERT INTO `text`.`god` (`one`, `two`) VALUES (?, ?)' );


// var_dump($_SERVER);

 var_dump($_POST);
 print_r($_POST);
// var_dump($_GET);

 $sth -> execute (array( $_POST['name'] ,   $_POST['mail'] ));
// $red  =  $sth -> fetchAll ();

} catch ( PDOException $e ) {
 echo  'Connection failed: '  .  $e -> getMessage ();
}

?>

