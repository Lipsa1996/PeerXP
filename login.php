<?php include ('configuration\config.php');?>
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
<div style="background:#e4eaef">
<div class="container-fluid d-inline-block " style="height:230px;
background:url('images/unnamed.png')no-repeat center center/cover;position: relative;">
<div class="layer">
<div class="row" style="margin-top:10px;">
<div class="col-sm-2">
<nav class="navbar navbar-light">
  <a class="navbar-brand text-white" href="#" style="font-size:20px;margin-left:60px;">
  <b> PeerXP Support</b>
  </a>
  </div>
  <div class="col-sm-8"style="margin-left:200px;">
</nav>
<nav class="navbar navbar-expand-lg navbar-light float-right ">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link text-white" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="verify.php">Add Ticket</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Knowledge Base</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="login.php">Sign In</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Sign Up</a>
      </li>
    </ul>
  </div>
  </nav>
</div>
</div>
<div class="row" style="margin-top:70px">
<div class="col-sm-10">
<form>
   <div>
    <input type="text" class="form-control" placeholder="Search articles" >
    </div>
</form >
</div>
<div class="col-sm-2 float-right" >
<button style="border:none;border-radius:3px;padding-bottom:3px;padding-top:3px;
margin-top:10px;margin-left:40px"class="px-3 bg-white" ><a href="verify.php" style="color:#3c3939"><b>Add Ticket</b></a></button>
</div>
</div>
<div style="color:white; margin-left:50px; font-size:15px;margin-top:10px;"  >Sign In</div>
</div>
</div>

<div class="card" >
  <div class="card-body">
    <div class="row" style="margin-left:10px;">
    <div class="col-sm-6" style="margin-top:60px;">
    <div class="container">
     <h5 ><b>Already Applied ?</b></h5><br>
     <p>Sign In</p><br>
     <div style="color:red;margin-left:80px;">
     <?php echo $message; ?></div><br>
     <form method="post">
     <input class="form-control" type="text" placeholder="Email Address" name="email"><br>
     <input class="form-control" type="text"placeholder="Password" name="password"><br>
     <div class="row">
     <div class="col-sm-8">
     <input type="checkbox" >Remember me
     </div>
     <div class="col-sm-4" style="" >
     <input type="submit" value="Sign In" style="background:#302f33;color:white;border:none;padding:4px;" class="rounded">
     </div>
     </form>
     </div>
    </div>
    </div>
    <div class="col-sm-6" style="margin-top:60px;">
    <div class="container">
    <div class="user">
    <div class="row">
    <div class="col-sm-1">
    <i class="fa fa-user" style="font-size:40px;margin-top:5px;"></i></div>
    <div class="col-sm-10" style="margin-left:20px">
     New User?<a href="#" style="font-size:14px;color:#512dab"> Sign Up</a>
  <p style="font-size:12px;color:#7b7979">Create an account to submit tickets, read articles and engage in our community.</p></div>
     </div>
    </div><br>
    <div class="lock">
    <div class="row">
    <div class="col-sm-1">
    <i class="fa fa-lock" style="font-size:40px;"></i></div>
    <div class="col-sm-10" style="margin-left:20px">
    Forgot Password?<a href="#"  style="font-size:14px;color:#512dab"> Reset</a>
     <p style="font-size:12px;color:#7b7979">We will send a password reset link to your email address.</p></div>
      </div>
    </div><br>
    <div class="agent">
    <div class="row">
    <div class="col-sm-1">
    <i class="fas fa-headset" style="font-size:40px;"></i>
    </div>
    <div class="col-sm-10" style="margin-left:20px" >
    Are you an Agent? <a href="#" style="font-size:14px;color:#512dab">Log in here</a><br>
    <p style="font-size:12px;color:#7b7979">You will be taken to the agent interface.</p></div>
    </div>
    </div>
    </div>
    </div>
    </div>
  </div>
</div>
<br>
<br><br>
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
.card{
    width:80%;
    margin-left:auto;
    margin-right:auto;
    margin-top:30px;
    background-color:white;
    height:600px;
    border:1px solid #cac7c7;
}
.layer {
    background-color:#512dab;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height:230px;
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
.form-control{
  width:400px;
  height:45px;
}
</style>
</html>