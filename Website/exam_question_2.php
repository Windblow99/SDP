<html>

<head>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>

<style>
.questiontitle{
	text-indent: 10%;
	font-size: 1.9em;
	color: #8190A5;
}

.question{
  background-color: #f0f0f5;
  opacity: 0.3;
  font-size: 14px;
  height: 100px;
  text-align: center;
  vertical-align: middle;
  border: 3px solid;
  width: 80%;
  color: black;
  font-weight: bold;
}

.questionbuttons{
	text-indent: 65%;
}
</style>

<title>Log In</title>

</head>

<body>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/navbar.php'); ?>

<br/>

<div class="container-fluid">
	<div class="row-xl" style="text-indent: 80%;">
		<h4>59:00:00</h4>
	</div>
</div>

<div class="container-fluid title">
  <div class="row-xl">
    <b>Chapter 1: Inertia</b>
</div>

<div class="container-fluid title2">
  <div class="row-xl">
    <b>Section A</b>
</div>

<div class="container-fluid title3">
  <div class="row-xl">
   This section consists of 30 questions. Please answer them all.
</div>

<hr>

<div class="container-fluid questiontitle">
  <div class="row-xl">
   Question 2
</div>

<br/>

<form class="justify-content-center">
	<div class="container-fluid question form-group">
  		<div class="col-12">
  			<br/>
  			<p>A 2-kg object is moving horizontally with a speed of 4 m/s. How much net force is required to keep the object moving at this speed and in this direction? Show your calculation.</p>
		</div>
	</div>

  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">1</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">2</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
  <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
</div>
</form>

<div class="container-fluid questionbuttons">
  <div class="row">
  	<div class="col-1">
   		<i class="fas fa-angle-left" style="font-size: 45px;"></i>
   	</div>
   	<div class="col-1">
   		<i class="fas fa-angle-right" style="font-size: 45px;"></i>
   	</div>
   	<div class="col-1">
   		<button type="button" class="btn btn-secondary">Submit</button>
   	</div>
</div>

</body>

</html>
