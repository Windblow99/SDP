<!DOCTYPE html>
<html>

<head>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>

<title>Account Security</title>

  <style>
    body{
      background-image: url("/pictures/2.jpg");
      background-repeat: no-repeat;
      background-size: 100%;
    }
  </style>
</head>

<body>
<?php include($_SERVER["DOCUMENT_ROOT"].'/template/homenavbar.php'); ?>

<br/>

<div class="container">
  <div class="row">
    <div class="col-lg-4">
      <h4 class="float-left" style="font-size: 2em; color: #953031; font-weight: bold;">
      ACCOUNT SETTINGS
      </h4>
    </div>
    <div class="col-lg-8">
      <h4 class="float-left" style="font-size: 1em; color: #CC2865; padding-top: 18px;">
      ACCOUNT NAME | ACCOUNT TYPE
      </h4>
    </div>
  </div>
</div>

<hr/>

<div class="container">
  <div class="row">
    <div class="col-sm-3" style="background-color: #CC2865; color: white; text-align: center; padding-top: 3px; height: 30px;"> 
      <p>ACCOUNT PASSWORD</p>
    </div>
  </div>
</div>

<br/><br/>

<center>

<form style="width: 80%;">
  <div class="form-group row">
    <label for="old_pass" class="col-sm-2 col-form-label">Old Password: </label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="old_pass" placeholder="Old Password">
    </div>
  </div>
  <div class="form-group row">
    <label for="new_pass" class="col-sm-2 col-form-label">New Password: </label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="new_pass" placeholder="New Password">
    </div>
  </div>
  <div class="form-group row">
    <label for="confirm_pass" class="col-sm-2 col-form-label">Confirm Password: </label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="confirm_pass" placeholder="Confirm New Password">
    </div>
  </div>
  <div class="form-group row" style="float: right;">
    <div class="col-sm-10 offset-sm-2">
      <button style="width: 150px; background-color: #333333;" type="submit" class="btn btn-primary">Confirm</button>
    </div>
  </div>
</form>

<br/><br/>
<hr><br/>

<div class="container">
  <div class="row">
    <div class="col-sm-3" style="background-color: #CC2865; color: white; text-align: center; padding-top: 3px; height: 30px;"> 
      <p>ACCOUNT EMAIL</p>
    </div>
  </div>
</div>

<br/><br/>

<form style="width: 80%;">
  <div class="form-group row">
    <label for="old_email" class="col-sm-2 col-form-label">Old Email: </label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="old_email" placeholder="Old Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="new_email" class="col-sm-2 col-form-label">New Email: </label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="new_email" placeholder="New Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="confirm_email" class="col-sm-2 col-form-label">Confirm Email: </label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="confirm_email" placeholder="Confirm New Email">
    </div>
  </div>
  <div class="form-group row" style="float: right;">
    <div class="col-sm-10 offset-sm-2">
      <button style="width: 150px; background-color: #333333;" type="submit" class="btn btn-primary">Confirm</button>
    </div>
  </div>
</form>

</center>

</div>

</body>
</html>
