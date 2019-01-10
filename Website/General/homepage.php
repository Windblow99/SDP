<!DOCTYPE html>
<html>

<head>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>

<title>Homepage</title>

  <style>
    body{
      background-image: url("/pictures/3.jpg");
    }
  </style>
</head>

<body>
<?php include($_SERVER["DOCUMENT_ROOT"].'/template/navbar.php'); ?>

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
      Academic Platform
      </p>
    </div>
  </div>

  <br/><br/><br/>

  <div class="row">
    <div class="col-sm-12">
      <p class="text-center" style="font-size: 30px; color: maroon; text-align: center;">
      A platform for students, made by students
      </p>
    </div>
  </div>

  <br/>

  <div class="row">
    <div class="col-sm-12" align="center">
      <button style="width: 165px; height: 40px; background-color: #333333;" onclick="window.location.href='http://localhost/website/website/general/role_selection.php'" type="submit" class="btn btn-primary">Enter Now</button>
    </div>
  </div>


<br/>

  <div class="row">
    <div class="col-sm-12" align="center">
<a href="aboutus.php" class="alert-link" style="font-size: 20px; color: #0E3F27;">Learn More</a>
    </div>
  </div>
</div>
</body>
</html>