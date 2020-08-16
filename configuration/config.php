<?php
session_start();
$message="";
if(count($_POST)>0) {
 $con = mysqli_connect('localhost','root','','peerxp') or die('Unable To connect');
 $password = $_POST["password"];
$result = mysqli_query($con,"SELECT * FROM users WHERE email='" . $_POST["email"] . "' and password = md5('$password')");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['id'];
$_SESSION["name"] = $row['email'];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["id"])) {
header("Location:dashboard.php");
}
?>