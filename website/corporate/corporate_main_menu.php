<!DOCTYPE html>
<html>

<head>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>

<title>Corporate Main Menu</title>

  <style>
  	body{
  		background-image: url("/pictures/Corporate Background.png");
      background-repeat: no-repeat;
      background-size: 100%;
  	}
  </style>
</head>

<body>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/corporatenavbar.php'); ?>

<br/>

<div class="container">
  <div class="row">
    <div class="col-lg-4">
      <h4 class="float-left" style="font-size: 2em; color: #953031; font-weight: bold;">
      CORPORATE NAME
      </h4>
    </div>
    <div class="col-lg-8">
      <h4 class="float-left" style="font-size: 1em; color: #CC2865; padding-top: 18px;">
      CORPORATE NAME | EMPLOYEE
      </h4>
    </div>
  </div>
</div>

<hr/><br/>

<div class="container">
  <div class="row">
    <div class="col-sm-3" style="background-color: #CC2865; color: white; text-align: center; padding-top: 3px; height: 30px;"> 
      <p class="float-left">CERTIFICATES</p>
    </div>
  </div>

<br/>

  <div class="row">
    <div class="col-3">
      <h4 style="color: #F7478A; font-size: 1.5em; text-indent: 20px;">Certificate 1</h4>
    </div>
    <div class="col-2">
      <button class="btn btn-secondary">View Details</button>
    </div>
    <div class="col-2">
      <button class="btn btn-secondary">Modify Link</button>
    </div>
  </div>

<br/>

  <div class="row">
    <div class="col-3">
      <h4 style="color: #F7478A; font-size: 1.5em; text-indent: 20px;">Certificate 2</h4>
    </div>
    <div class="col-2">
      <button class="btn btn-secondary">View Details</button>
    </div>
    <div class="col-2">
      <button class="btn btn-secondary">Modify Link</button>
    </div>
  </div>

<br/>

  <div class="row">
    <div class="col-3">
      <h4 style="color: #F7478A; font-size: 1.5em; text-indent: 20px;">Certificate 3</h4>
    </div>
    <div class="col-2">
      <button class="btn btn-secondary">View Details</button>
    </div>
    <div class="col-2">
      <button class="btn btn-secondary">Modify Link</button>
    </div>
  </div>

<br/>

  <form method="post" action="add_certificate_function.php" enctype="multipart/form-data">
    <div class="row">
      <div class="col-3">
        <h4 style="color: #F7478A; font-size: 1.5em; text-indent: 20px;">Add Certificate</h4>
      </div>
      <div class="col-3">
          <input type="file" id="fileupload" name="fileupload" class="form-control-file form-control-sm">
      </div>
      <div class="col-2">
          <button type="submit" class="btn btn-secondary">Add Certificate</button>
      </div>
    </div>
  </form>

</div>

<br/><hr/><br/>

<div class="container">
  <div class="row">
    <div class="col-sm-3" style="background-color: #CC2865; color: white; text-align: center; padding-top: 3px; height: 30px;"> 
      <p class="float-left">CERTIFICATES</p>
    </div>
  </div>

<br/><br/>

<center>
  <div class="row">
    <div class="col-3">
      <button class="btn btn-secondary">Add Questions</button>
    </div>
    <div class="col-3">
      <button class="btn btn-secondary">View Details</button>
    </div>
  </div>
</center>

</div>  

</body>
</html>