<!DOCTYPE html>
<html>

<head>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>

<title>Corporate Main Menu</title>

  <style>
  	body{
  		background-image: url("../Pictures/Corporate Background.png");
  	}
  </style>
</head>

<body>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/navbar.php'); ?>

<br/>

<div class="container">
  <div class="row">
    <div class="col-lg-10">
      <h4 class="float-left" style="font-size: 2.5em; color: #953031; font-weight: bold;">
      SUBMITTED QUESTIONS&nbsp;&nbsp;&nbsp;
      </h4>
      <p class="float-left" style="font-size: 1em; color: #CC2865; padding-top: 18px;float: left;">
      CERTIFICATE 1
      </p>
    </div>
  </div>
</div>

<hr/><br/>

<div class="container">
  <div class="row">
    <div class="col-sm-3"> 
      <select class="custom-select" id="inputGroupSelect01">
        <option selected disabled>Filter By</option>
        <option value="1">Approved</option>
        <option value="2">Pending</option>
      </select>
    </div>
    <div class="col-sm-3">
      <select class="custom-select" id="inputGroupSelect01">
        <option selected disabled>Select A Certificate</option>
        <option value="1">Certificate 1</option>
        <option value="2">Certificate 2</option>
      </select>
    </div>
  </div>

<br/><br/>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Questions</th>
      <th scope="col">Status</th>
      <th scope="col">Certificate</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Question 1</th>
      <td>Approved</td>
      <td>1</td>
      <td><button class="btn btn-secondary">Modify</button></td>
      <td><button class="btn btn-secondary">Remove</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

</div>

</body>
</html>