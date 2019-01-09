<!DOCTYPE html>
<html>

<head>

<?php include($_SERVER["DOCUMENT_ROOT"].'/Website/template/header.php'); ?>

<title>Account Security</title>

  <style>
    body{
      background-image: url("../Pictures/2.jpg");
    }
  </style>
</head>

<body>
<?php include($_SERVER["DOCUMENT_ROOT"].'/Website/template/navbar.php'); ?>

<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <p class="text-center" style="font-size: 35px; color: maroon; float: right; font-weight: bold;">
      ACCOUNT SETTINGS
      </p>
    </div>
    <div class="col-sm-3">
      <p class="text-center" style="font-size: 18px; color: fuchsia; padding-top: 18px;">
      ACCOUNT NAME
      </p>
    </div>
    <div class="col-sm-3">
      <p class="text-center" style="font-size: 18px; color: fuchsia; float: left; padding-top: 18px;">
      ACCOUNT TYPE
      </p>
    </div>
  </div>
  <hr/>

<div class="container">
  <div class="row">
    <div class="col-sm-3" style="background-color: fuchsia; color: white; text-align: center; 
                                           padding-top: 3px; height: 30px;"> 
      <p>ACCOUNT PASSWORD</p>
    </div>
  </div>
</div>

<br/><br/>

<form>
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
    <div class="col-sm-3" style="background-color: fuchsia; color: white; text-align: center; 
                                           padding-top: 3px; height: 30px;"> 
      <p>ACCOUNT EMAIL</p>
    </div>
  </div>
</div>

<br/><br/>

<form>
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

</div>

</body>
</html>
