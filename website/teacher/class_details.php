<!DOCTYPE html>
<html>

<head>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>

<title>Class Details</title>

  <style>
    body{
      background-image: url("../Pictures/6.jpg");
    }
  </style>
</head>

<body>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/navbar.php'); ?>
<br/>

<a style="color: fuchsia; font-weight: bold; font-size: 17px;" href="<script>window.history.go(-1)</script>">< BACK</a>

<br/>
<div class="container">
  <div class="row">
    <div class="col-sm-3">
      <p class="text-center" style="font-size: 35px; color: maroon; float: left; font-weight: bold;">
      CLASS DETAILS
      </p>
    </div>
    <div class="col-sm-9">
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
      <p>ACADEMIC PERFORMANCE</p>
    </div>
  </div>
</div>

<br/><br/>

<table class="table table-hover" style="margin-left: 175px; max-width: 700px;">

  <tbody style="color: fuchsia; font-size: 18px; font-weight: bold;">
    <tr>

      <td>Overall Performance</td>
      <td>75/100</td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">View Details</button></td>
    </tr>
    <tr>

      <td>Chapter 1</td>
      <td>75/100</td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">View Details</button></td>
    </tr>
    <tr>

      <td>Chapter 2</td>
      <td>75/100</td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">View Details</button></td>
    </tr>
    <tr>

      <td>Chapter 3</td>
      <td>75/100</td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">View Details</button></td>
    </tr>

  </tbody> <br/>
</table>
<br/>
<hr/>

<div class="container">
  <div class="row">
    <div class="col-sm-3" style="background-color: fuchsia; color: white; text-align: center; 
                                           padding-top: 3px; height: 30px;"> 
      <p>MANAGE</p>
    </div>
  </div>
</div>

<br/><br/>

<button style="width: 175px; height: 35px; margin-left: 250px; background-color: #333333; margin-top: 10px; float: left;" type="submit" class="btn btn-primary" data-toggle="modal" data-target="#addstudent">Add Students</button> 

<button style="width: 175px; height: 35px;  margin-right: 600px; background-color: #333333; margin-top: 10px; float: right;" onclick="window.location.href='http://localhost/website/manage_students.php'" type="submit" class="btn btn-primary">Manage Students</button> 

<br/><br/>

<div class="modal" style="color: maroon;" id="addstudent" tabindex="-1" role="dialog" aria-labelledby="addstudentlabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="background-color: beige; opacity: 0.9;">
      <div class="modal-header">
        <h5 class="modal-title" id="addstudentlabel">ADD STUDENT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input class="form-control" type="text" placeholder="Student Name">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>