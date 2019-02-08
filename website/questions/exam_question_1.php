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

<title>Exam</title>

</head>

<body>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/studentnavbar.php'); ?>

<br/>

<!--<div class="container-fluid">
	<div class="row-xl" style="text-indent: 80%;">
		<h4>59:00:00</h4>
	</div>
</div>-->

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
</div>

<hr>

<div class="container-fluid questiontitle">
  <div class="row-xl">
   Question 1
  </div>
</div>

<br/>

<form class="justify-content-center" method="post" action="exam_question_function.php">
	<div class="container-fluid question form-group">
  		<div class="col-12">
  			<br/>
  		<!--	<p>A 2-kg object is moving horizontally with a speed of 4 m/s. How much net force is required to keep the object moving at this speed and in this direction? Show your calculation.</p>-->

        <p><?php
            $conn = mysqli_connect("localhost","root","","educo")
            or die("<script>alert('error in db connection');<script>");
        
            $sql = "Select QuestionContent from question WHERE Q_No=41;";
            $result = mysqli_query($conn,$sql)
            or die("<script>alert('Maybe select wrong table / columns');</script>");
      
            $count = (mysqli_num_rows($result)>=1? true:
            die("<script>alert('No data available in the table!');</script>"));
            
            /*While($rows = mysqli_fetch_array($result))
            {
              echo .$rows['QuestionContent'].;
            }*/
          ?></p>
		  </div>
	</div>

	<div class="container-fluid form-group" style="width: 83%;">
    	<textarea class="form-control" id="exampleFormControlTextarea1" rows="7" placeholder="Enter your answer here..."></textarea>
  </div>

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
</div>

</form>



</body>

</html>
