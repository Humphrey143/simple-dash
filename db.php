<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'ourreg';

$connection = mysqli_connect($host, $user, $password, $db);

if(!$connection){
 echo 'DATABASE CONNECTION FAILED';
}

?>