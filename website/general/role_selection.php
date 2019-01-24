<!DOCTYPE html>
<html>

<head>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>

<title>Role Selection</title>

  <style>
    body{
      background-image: url("/Pictures/10.jpg");
      background-repeat: no-repeat;
      background-size: 100%;
    }
  </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-lg sticky-top" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="index.php"><img src="/Pictures/e.png" height="35" width="35">duco</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php">About</a>
      </li>
  </ul>
      </div>
</nav>

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

<div class="row">
    <div class="col-sm-12">
      <p class="text-center" style="font-size: 30px; color: maroon; text-align: center; font-weight: bold;">
      Mind telling us who is joining?
      </p>
    </div>
  </div>

  <br/>

<div class="card-deck justify-content-around" align="center">
  <div class="card" style="max-width: 275px; background-color: #DDDDDD;">
    <div class="card-body">
      <h5 class="card-title">I'm a Student</h5><br/>
        <div class="col-sm-12">
     <a href="login.php"><button style="width: 165px; height: 40px; background-color: #333333;" type="submit" class="btn btn-primary">Login</button></a>
      <br/><br/><br/>
      <a href="signup.php"><button style="width: 165px; height: 40px; background-color: #333333;" type="submit" class="btn btn-primary">Sign Up</button></a>
      <br/><br/><br/>
      <a href="aboutus.php" class="alert-link" style="font-size: 20px; color: #0E3F27;">Learn More</a>
        </div>
    </div>
  </div>

  <div class="card" style="max-width: 275px; background-color: #DDDDDD;">
    <div class="card-body">
      <h5 class="card-title">I'm a Teacher</h5><br/>
      <div class="col-sm-12">
      <a href="login.php"><button style="width: 165px; height: 40px; background-color: #333333;" type="submit" class="btn btn-primary">Login</button></a>
      <br/><br/><br/>
      <a href="signup.php"><button style="width: 165px; height: 40px; background-color: #333333;" type="submit" class="btn btn-primary">Sign Up</button></a>
      <br/><br/><br/>
      <a href="aboutus.php" class="alert-link" style="font-size: 20px; color: #0E3F27;">Learn More</a>
      </div>
    </div>
  </div>

  <div class="card" style="max-width: 275px; background-color: #DDDDDD;">
    <div class="card-body">
      <h5 class="card-title">I'm a Corporate</h5><br/>
      <div class="col-sm-12">
      <a href="login.php"><button style="width: 165px; height: 40px; background-color: #333333;" type="submit" class="btn btn-primary">Login</button></a>
      <br/><br/><br/>
      <a href="signup.php"><button style="width: 165px; height: 40px; background-color: #333333;" type="submit" class="btn btn-primary">Sign Up</button></a>
      <br/><br/><br/>
      <a href="aboutus.php" class="alert-link" style="font-size: 20px; color: #0E3F27;">Learn More</a>
      </div>
    </div>
  </div> 
</div>
<br/><br/><br/>

</body>
</html>