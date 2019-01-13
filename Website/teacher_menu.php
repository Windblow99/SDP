<!DOCTYPE html>
<html>

<head>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>

<title>Teacher Main Menu</title>

  <style>
  	body{
  		background-image: url("/Pictures/6.jpg");
  		background-repeat: no-repeat;
  		background-size: 100%;
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
      TEACHERS NAME
      </p>
    </div>
    <div class="col-sm-8">
      <p class="text-center" style="font-size: 18px; color: fuchsia; padding-top: 18px; float: left;">
      ASIA PACIFIC UNIVERSITY | TEACHER
      </p>
    </div>
  </div>
</div>
<hr/>

  <div class="container">
  <div class="row">
    <div class="col-sm-3" style="background-color: fuchsia; color: white; text-align: center; 
                                           padding-top: 3px; height: 30px;"> 
      <p>CLASSES</p>
    </div>
  </div>
</div>

<br/><br/>

<table class="table table-hover" style="margin-left: 175px; max-width: 500px;">

  <tbody style="color: fuchsia; font-size: 18px; font-weight: bold;">
    <tr>

      <td>Class 1</td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" onclick="window.location.href='http://localhost/website/website/teacher/class_details.php'" type="submit" class="btn btn-primary">View Details</button></td>
    </tr>
    <tr>

      <td>Class 2</td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" onclick="window.location.href='http://localhost/website/website/teacher/class_details.php'" type="submit" class="btn btn-primary">View Details</button></td>
    </tr>
    <tr>

      <td>Class 3</td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" onclick="window.location.href='http://localhost/website/website/teacher/class_details.php'" type="submit" class="btn btn-primary">View Details</button></td>
    </tr>

  </tbody> <br/>
  <button style="width: 175px; height: 35px;  margin-right: 250px; background-color: #333333; margin-top: 10px; float: right;" type="submit" class="btn btn-primary" data-toggle="modal" data-target="#addclass">Add Class</button> 
  <label style="color: fuchsia; font-size: 18px; font-weight: bold; float: right; padding-right: 12px; padding-top: 15px;">Add a class here: </label>
  
</table>
<br/>
<hr/>

<div class="container">
  <div class="row">
    <div class="col-sm-3" style="background-color: fuchsia; color: white; text-align: center; 
                                           padding-top: 3px; height: 30px;"> 
      <p>QUESTIONS</p>
    </div>
  </div>
</div>

<br/><br/>

<button style="width: 175px; height: 35px; margin-left: 250px; background-color: #333333; margin-top: 10px; float: left;" type="submit" class="btn btn-primary">Add Question</button> 

<button style="width: 175px; height: 35px;  margin-right: 600px; background-color: #333333; margin-top: 10px; float: right;" type="submit" class="btn btn-primary">View Details</button> 

<br/><br/>

<div class="modal" style="color: maroon;" id="addclass" tabindex="-1" role="dialog" aria-labelledby="addclasslabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="background-color: beige; opacity: 0.9;">
      <div class="modal-header">
        <h5 class="modal-title" id="addclasslabel">ADD A CLASS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input class="form-control" type="text" placeholder="Class Name">
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