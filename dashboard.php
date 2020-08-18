
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<title>PeerXp Customer Support</title>
</head>
<body>
<div style="background:#e4eaef;height:1500px">
<div class="container-fluid d-inline-block " style="height:400px;
background:url('images/unnamed.png')no-repeat center center/cover;position: relative;">
<div class="layer">
<div class="row" style="margin-top:10px;">
<div class="col-sm-2">
<nav class="navbar navbar-light">
  <a class="navbar-brand text-white " style="font-size:20px;margin-left:60px;" href="#">
   <b> PeerXP Support</b>
  </a>
</nav>
</div>
<div class="col-sm-8" style="margin-left:200px;">
<nav class="navbar navbar-expand-lg navbar-light float-right ">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link text-white" href="#">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="verify.php">Add Ticket </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Knowledge Base</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="logout.php">Sign Out</a>
      </li>
    </ul>
  </div>
</nav>
</div>
</div>
<div style="text-align:center;margin-top:60px;">
<h2 class="text-white"><b>Welcome To PeerXP Support</b></h2><br>
<p class="text-white">Search our knowledge base or submit a ticket.</p><br>
<form >
    <input type="text" class="form-control" placeholder="Search articles" style="margin-left:auto;margin-right:auto" >
</form >
</div>
</div>
</div>
<div style="text-align:center;margin-top:25px;">
<button style="border:none;background:#512dab;color:white;" class="px-2 py-2 rounded" >Knowledge Base</button>
</div>
 <br>
 <?php
 session_start();
 if($_SESSION["message"]){
   echo '<div class="alert alert-success" style="width:80%;margin-left:auto;margin-right:auto" role="alert">
   <strong>'.$_SESSION["message"].'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
 </button></strong></div>';
   
   $_SESSION["message"] = null;
 }
 ?>
 </div>  
</body>
<style>
.nav-item a{
  font-size:15px;
  margin-right:5px;
}
body{
    font-family: Roboto, Arial, helvetica, sans-serif;
}
.layer {
    background-color:#512dab;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height:400px;
    opacity: 0.9;
}
.layer .form-control{
    opacity:10;
    background-color:white;
    position: relative;
    display: flex;
    width:850px;
    height:50px;
    margin-left:50px;
}
</style>
</html>