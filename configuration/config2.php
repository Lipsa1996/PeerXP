<?php
session_start();
 $con = mysqli_connect('localhost','root','','peerxp') or die('Unable To connect');
 if(isset($_SESSION["id"]) && $_SESSION["name"]) {
 $email = $_SESSION["name"];
 $id = $_SESSION["id"];
$result = mysqli_query($con,"SELECT * FROM users WHERE email= '$email' and id = '$id' ");
$row  = mysqli_fetch_row($result);
 }
?>