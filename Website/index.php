<!DOCTYPE html>
<html>

<head>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>

<title>Homepage</title>

  <style>
    body{
      background-image: url("/Pictures/3.jpg");
    }

    section.layer{
	background-color: rgba(255,255,255, 0.4);
	position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
  </style>
</head>

<body>
<section class="layer">
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-lg sticky-top" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="studentmainpage.php"><img src="/Pictures/e.png" height="35" width="35">duco</a>
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

    <ul class="navbar-nav">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <li class="nav-item">
        <a class="nav-link" href="login.php">Log In</a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="signup.php">Sign Up</a>
      </li>
  </ul>
      </div>
      </ul>


</nav>


<br/><br/>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <p class="text-center" style="font-size: 60px; color: #2B2B2B; text-align: center;">
      educo
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <p class="text-center" style="font-size: 30px; color: #2B2B2B; text-align: center;">
      <b>Academic Platform</b>
      </p>
    </div>
  </div>

  <br/><br/><br/>

  <div class="row">
    <div class="col-sm-12">
      <p class="text-center" style="font-size: 30px; color: maroon; text-align: center;">
      <b>A platform for students, made by students</b>
      </p>
    </div>
  </div>

  <br/>

  <div class="row">
    <div class="col-sm-12" align="center">
      <a href="role_selection.php"><button style="width: 165px; height: 40px; background-color: #333333;" type="submit" class="btn btn-primary">Enter Now</button></a>
    </div>
  </div>


<br/>

  <div class="row">
    <div class="col-sm-12" align="center">
<a href="aboutus.php" class="alert-link" style="font-size: 20px; color: #0E3F27;">Learn More</a>
    </div>
  </div>
</div>
</section>
</body>
</html>