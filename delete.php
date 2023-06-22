<?php 

error_reporting(0);

session_start();
if(!isset($_SESSION['useremail'])){
  header('Location: login.php');
}

require 'includes/header.php';

if(isset($_GET['id'])){
    $userid = $_GET['id'];
    $query = "DELETE FROM users WHERE id ='$userid'"
     $run = mysqli_query($connection, $query);
    if($run>0){
        header('Location: users.php');
    }
} 
