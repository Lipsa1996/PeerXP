<?php include('configuration\config2.php') ?>
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
<a class="navbar-brand text-white " style="font-size:20px;margin-left:60px;" href="#">
   <b> PeerXP Support</b>
  </a>
  </div>
  <div class="col-sm-8"  style="margin-left:200px;">
</nav>
<nav class="navbar navbar-expand-lg navbar-light float-right ">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link text-white" href="dashboard.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Add Ticket </a>
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
<div class="row" style="margin-top:70px">
<div class="col-sm-10">
<form>
   <div>
    <input type="text" class="form-control" placeholder="Search articles" >
    </div>
</form >
</div>
<div class="col-sm-2 float-right" >

</div>
</div>
<div style="color:white; margin-left:50px; font-size:15px;margin-top:10px;"  > Submit a Ticket</div>
</div>
</div>
<div class="card" >
  <div class="card-body">
    <div class="row" style="margin-left:10px;">
    <div class="container">
     <h5 style="margin-top:30px;"><b>Submit a Ticket</b></h5><br>
     <p>Ticket Information</p><br>
     <form method="post" action="checkAPI.php">
     <label for="dept">Department</label>

<select name="dept" id="dept" class="form-control">
  <option value="7189000000051431">PWSLab DevOps Support</option>
  <option value="7189000001062045">i Support</option>
  <option value="7189000001896319">Naveena</option>
  <option value="7189000002187084">dept4</option>
</select><br>
<label for="category">Category</label>

<select name="category" id="category" class="form-control" required>
  <option value="7189000002218007">category1</option>
  <option value="7189000002222001">category2</option>
  <option value="7189000002197802">category3</option>
  <option value="7189000002179003">category4</option>
</select><br>
<label for="url">PWSLab Project URL</label>
<input class="form-control" type="text" name="url"><br>
<label for="sub">Subject</label>
<input class="form-control" type="text" name="subject" required><br>
<label for="descr">Description </label><br>
<textarea type="text"class="form-control" required>
</textarea><br>
<label for="name">Contact Name</label>
     <input class="form-control" type="text" name="name" value= " <?php echo $row[1]; ?> "><br>
<label for="email">Email Address</label>
     <input class="form-control" type="email" name="email" value= " <?php echo $row[2]; ?> " ><br>
     <label for="cars">Phone</label>
     <input class="form-control" type="text" name="phone" value= " <?php echo $row[3]; ?> "><br>
     <h6>Additional Information</h6><br>
     <label for="priority">Priority</label>
<select name="priority" id="priority" class="form-control" required>
  <option value="priority1">priority1</option>
  <option value="priority2">priority2</option>
  <option value="priority3">priority3</option>
  <option value="priority4">priority4</option>
</select><br>
     <label for="file">Attach a file</label>
     <input type="file" name="file"><br><br>
     <input type="submit" value="Submit" class="rounded" style="background:#512dab;color:white;border:none;">
     <a href="">Discard</a>
     </form>
     <br>
     </div>
    </div>
    </div>
  </div>
<br><br><br>
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
    width:60%;
    margin-left:70px;
    margin-top:50px;
    background-color:white;
    height:auto;
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
</style>
</html>