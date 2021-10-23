<?php

$host = 'localhost';
$user = 'root';
$password ='';
$db = 'climate';


$connect = mysqli_connect($host , $user , $password, $db);
if( $connect == false){
    echo "connection failed";
}
?>