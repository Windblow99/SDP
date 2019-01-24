<!DOCTYPE html>
<html>

<head>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>

<title>About Us</title>

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
  <?php include($_SERVER["DOCUMENT_ROOT"].'/template/homenavbar.php'); ?>
<!--<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-lg sticky-top" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="index.php"><img src="/Pictures/e.png" height="35" width="35">duco</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item">      
        <a class="nav-link" href="index.php">Home</a>
      </li>
     <li class="nav-item active">
        <a class="nav-link" href="aboutus.php">About</a>
      </li>
  </ul>
      </div>

    <ul class="navbar-nav">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <li class="nav-item">
        <a class="nav-link" href="role_selection.php">Enter Now</a>
      </li>
  </ul>
      </div>
      </ul>


</nav>-->

<br/><br/>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <p class="text-center" style="font-size: 60px; color: #2B2B2B; text-align: center;">
      <img src="/Pictures/e(2).png" height="100" width="100">duco
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
      <p class="text-center" style="font-size: 30px; color: maroon; text-align: left;">
      Who are we?
      </p>
    </div>
  </div>

  <div class="card text-white mb-12 d-inline-block" style="background-color: gray; color: white;"">
    <div class="card-body">
        <h4 class="card-title">Here's something about what we stand for</h4>

        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ante turpis, fringilla nec dignissim vel, pellentesque quis lacus. Mauris et mi ornare, tincidunt justo ut, pulvinar nisl. Etiam sed lacinia ipsum, eu posuere tortor. Nulla facilisi. Duis sed mollis erat. Nunc consequat nulla in feugiat vestibulum. Cras nulla tortor, pretium sed ultrices et, hendrerit sed odio. Cras imperdiet, lectus vel iaculis fringilla, quam orci elementum lectus, et dignissim elit eros sit amet dui. Pellentesque vitae euismod tellus, a consequat metus. Morbi malesuada turpis sit amet est eleifend ornare sed non nisi. Mauris scelerisque sagittis quam, ac tincidunt dui venenatis et. Suspendisse a fermentum diam, at porta magna.</p>
      </div>
    </div>
  </div>
</div>
</section>
</body>
</html>