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
<?php include($_SERVER["DOCUMENT_ROOT"].'/template/navbar.php'); ?>

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
        <div class="col-sm-10">
      <button style="width: 165px; height: 40px; background-color: #333333;" type="submit" class="btn btn-primary">Login</button>
      <br/><br/><br/>
      <button style="width: 165px; height: 40px; background-color: #333333;" type="submit" class="btn btn-primary">Sign Up</button>
      <br/><br/><br/>
      <a href="#" class="alert-link" style="font-size: 20px; color: #0E3F27;">Learn More</a>
        </div>
    </div>
  </div>

  <div class="card" style="max-width: 275px; background-color: #DDDDDD;">
    <div class="card-body">
      <h5 class="card-title">I'm a Teacher</h5><br/>
      <div class="col-sm-10">
      <button style="width: 165px; height: 40px; background-color: #333333;" type="submit" class="btn btn-primary">Login</button>
      <br/><br/><br/>
      <button style="width: 165px; height: 40px; background-color: #333333;" type="submit" class="btn btn-primary">Sign Up</button>
      <br/><br/><br/>
      <a href="#" class="alert-link" style="font-size: 20px; color: #0E3F27;">Learn More</a>
      </div>
    </div>
  </div>

  <div class="card" style="max-width: 275px; background-color: #DDDDDD;">
    <div class="card-body">
      <h5 class="card-title">I'm a Corporate</h5><br/>
      <div class="col-sm-10">
      <button style="width: 165px; height: 40px; background-color: #333333;" type="submit" class="btn btn-primary">Login</button>
      <br/><br/><br/>
      <button style="width: 165px; height: 40px; background-color: #333333;" type="submit" class="btn btn-primary">Sign Up</button>
      <br/><br/><br/>
      <a href="#" class="alert-link" style="font-size: 20px; color: #0E3F27;">Learn More</a>
      </div>
    </div>
  </div> 
</div>

</body>
</html>