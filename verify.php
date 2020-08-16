<?php
session_start();
if(isset($_SESSION["id"])) {
    header("Location:addnewTicket.php");
}
else
header("Location:login.php");
?>