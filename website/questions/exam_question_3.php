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
  border: 3px solid;
  color: black !important;
  font-weight: bold !important;
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
    <b>Lab Exam 1</b>
</div>

<div class="container-fluid title3">
  <div class="row-xl">
   This section consists of 5 questions. Please answer them all.
</div>

<hr>

<div class="container-fluid questiontitle">
  <div class="row-xl">
   Question 2
</div>

<br/>

<form class="justify-content-center needs-validation" novalidate>

  <div class="row">
    <div class="col-4">
      <img src="/Pictures/Lab.jpg">
    </div>
    <div class="col-8">
      <div class="question">
        A 2-kg object is moving horizontally with a speed of 4 m/s. How much net force is required to keep the object moving at this speed and in this direction? Show your calculation.
      </div>
      <br/>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" placeholder="Enter your answer here..."></textarea>
    </div>
  </div>

<br/>

<div class="container-fluid questionbuttons">
  <div class="row">
    <div class="col-1">
      <a href=""><i class="fas fa-angle-left" style="font-size: 45px;"></i></a>
    </div>
    <div class="col-1">
      <a href=""><i class="fas fa-angle-right" style="font-size: 45px;"></i></a>
    </div>
    <div class="col-1">
      <button type="button" class="btn btn-secondary">Submit</button>
    </div>
</div>
</form>

</body>

</html>
