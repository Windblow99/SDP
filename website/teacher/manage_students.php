<!DOCTYPE html>
<html>

<head>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>

<title>Manage Students</title>

  <style>
    body{
      background-image: url("../Pictures/6.jpg");
    }
  </style>
</head>

<body>
<?php include($_SERVER["DOCUMENT_ROOT"].'/template/navbar.php'); ?>

<br/>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center" style="font-size: 35px; color: maroon; float: left; font-weight: bold;">
      STUDENTS LIST
      </p>
    </div>
    <div class="col-sm-8">
      <p class="text-center" style="font-size: 18px; color: fuchsia; padding-top: 18px; float: left;">
      CLASS 1
      </p>
    </div>
  </div>
</div>
<hr/>

  <div class="container">
  <div class="row">
    <div class="col-sm-3" style="background-color: fuchsia; color: white; text-align: center; 
                                           padding-top: 3px; height: 30px;"> 
      <p>CURRENT IN-CLASS STUDENTS</p>
    </div>
  </div>
</div>

<br/><br/>

<table class="table table-hover" style="margin-left: 175px; max-width: 500px;">

  <tbody style="color: fuchsia; font-size: 18px; font-weight: bold;">
    <tr>

      <td>Student 1</td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">Remove</button></td>
    </tr>
    <tr>

      <td>Student 2</td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">Remove</button></td>
    </tr>
    <tr>

      <td>Student 3</td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">Remove</button></td>
    </tr>
    <tr>

      <td>Student 4</td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">Remove</button></td>
    </tr>
    <tr>

      <td>Student 5</td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">Remove</button></td>
    </tr>
    <tr>

      <td>Student 6</td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">Remove</button></td>
    </tr>
    <tr>

      <td>Student 7</td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">Remove</button></td>
    </tr>
    <tr>

      <td>Student 8</td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">Remove</button></td>
    </tr>
  </tbody> <br/>
  
</table>
</body>
</html>