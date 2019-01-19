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
    <div class="col-lg-10">
      <h4 class="float-left" style="font-size: 2.5em; color: #953031; font-weight: bold;">
      CERTIFICATE PERFORMANCE&nbsp;&nbsp;&nbsp;
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
    <div class="col-sm-3" style="background-color: #CC2865; color: white; text-align: center; padding-top: 3px; height: 30px;"> 
      <p class="float-left">OVERVIEW</p>
    </div>
    <div class="col-sm-5">
      <select class="custom-select" id="inputGroupSelect01">
        <option selected disabled>Filter By</option>
        <option value="1">Marks-"Highest to Loweset"</option>
        <option value="2">Marks-"Lowest to Highest"</option>
        <option value="3">PASSED</option>
        <option value="4">NOT GRADED</option>
      </select>
    </div>
  </div>

<br/><br/>

  <div class="row">
    <div class="col-3">
      <h4 style="color: #F7478A; font-size: 1.5em; text-indent: 20px;">Student 1</h4>
    </div>
    <div class="col-2">
      <h4 style="font-size: 1.8em; text-indent: 20px; font-weight: bold;">75/100</h4>
    </div>
    <div class="col-2">
      <h4 style="font-size: 1.8em; text-indent: 20px; font-weight: bold; color: #77D353;">PASSED</h4>
    </div>
    <div class="col-2">
      <button class="btn btn-secondary">View Details</button>
    </div>
    <div class="col-2">
      <button class="btn btn-secondary">Assign Certificate</button>
    </div>
  </div>

<br/>

  <div class="row">
    <div class="col-3">
      <h4 style="color: #F7478A; font-size: 1.5em; text-indent: 20px;">Student 2</h4>
    </div>
    <div class="col-2">
      <h4 style="font-size: 1.8em; text-indent: 20px; font-weight: bold;">75/100</h4>
    </div>
    <div class="col-2">
      <h4 style="font-size: 1.8em; text-indent: 20px; font-weight: bold; color: #77D353;">PASSED</h4>
    </div>
    <div class="col-2">
      <button class="btn btn-secondary">View Details</button>
    </div>
    <div class="col-2">
      <button class="btn btn-secondary">Assign Certificate</button>
    </div>
  </div>

<br/>

  <div class="row">
    <div class="col-3">
      <h4 style="color: #F7478A; font-size: 1.5em; text-indent: 20px;">Student 3</h4>
    </div>
    <div class="col-2">
      <h4 style="font-size: 1.8em; text-indent: 20px; font-weight: bold;">75/100</h4>
    </div>
    <div class="col-2">
      <h4 style="font-size: 1.8em; text-indent: 20px; font-weight: bold; color: #77D353;">PASSED</h4>
    </div>
    <div class="col-2">
      <button class="btn btn-secondary">View Details</button>
    </div>
    <div class="col-2">
      <button class="btn btn-secondary">Assign Certificate</button>
    </div>
  </div>

<br/>

  <div class="row">
    <div class="col-3">
      <h4 style="color: #F7478A; font-size: 1.5em; text-indent: 20px;">Student 4</h4>
    </div>
    <div class="col-2">
      <h4 style="font-size: 1.8em; text-indent: 20px; font-weight: bold;"></h4>
    </div>
    <div class="col-2">
      <h4 style="font-size: 1.3em; text-indent: 20px; font-weight: bold; color: #F95F62;">NOT GRADED</h4>
    </div>
    <div class="col-2">
      <button class="btn btn-secondary">View Details</button>
    </div>
    <div class="col-2">
      <button class="btn btn-secondary">Assign Certificate</button>
    </div>
  </div>

</div>

</body>
</html>