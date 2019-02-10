<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>
<title>Exams</title>
  <style>
  	body{
  		background-image: url("/Pictures/11.png");
  		background-repeat: no-repeat;
  		background-size: 100%;
  	}
  </style>
</head>

<body>

		<?php include($_SERVER["DOCUMENT_ROOT"].'/template/studentnavbar.php'); ?>

		<div class="container">
	
		<div class="row">

				<div class="col-sm" style="font-size: 36px; color: #953031; font-weight: bold;"><br/>
				<?php echo $_SESSION['user']; ?>'s Exam Performance
				</div>

				<div class="col-sm" style="color: #CC2865; font-size: 18px;"><br/><br/>
				<br/>ASIA PACIFIC UNIVERSITY | STUDENT
				</div>
				
		</div>


		<hr>

			<div class="row">

				<div class="col-sm">
				<h5 style=" box-sizing: border-box; background-color: #ff1a8c; color: white; width: 300px; padding: 10px"><center>EXAM PERFORMANCE</center></h5>
				</div>

				<div class="col-sm" style="padding-top: 18px;">
				<a href="#"><center>View marks for grade</center></a>
				</div>

				<div class="col-sm" style="padding-top: 18px;">
				<select>
					<option selected disabled>Select Difficulty</option>
					<option value="beginner">Beginner</option>
 					<option value="intermediate">Intermediate</option>
 					<option value="expert">Expert</option>
				</select>
				</div>
				
			</div>
		 
			<div class="row">

				<div class="col-sm" ><br/>
				<h5 style="color: #CC2865; font-weight: bold;">Overall Performance</h5>
				</div>

				<div class="col-sm" style="font-size: 30px;"><br/>
				<center>75 / 100</center>
				</div>

				<div class="col-sm">
				
				</div>
				
			</div>
		
		<hr>

			<div class="row">

				<div class="col-sm">
				<h5 style="color: #CC2865; font-weight: bold;">Chapter 1</h5>
				</div>

				<div class="col-sm" style="font-size: 20px;">
				75 / 100
				</div>

				<div class="col-sm">
				<a href="#">View detailed results</a>
				</div>
				
			</div><br/>

			<div class="row">

				<div class="col-sm">
				<h5 style="color: #CC2865; font-weight: bold;">Chapter 2</h5>
				</div>

				<div class="col-sm" style="font-size: 20px;">
				75 / 100
				</div>

				<div class="col-sm">
				<a href="#">View detailed results</a>
				</div>
				
			</div><br/>

			<div class="row">

				<div class="col-sm">
				<h5 style="color: #CC2865; font-weight: bold;">Chapter 3</h5>
				</div>

				<div class="col-sm" style="font-size: 20px;">
				PENDING COMPLETION
				</div>

				<div class="col-sm">
				<button class="btn btn-secondary">Take Exam</button>
				</div>
				
			</div><br/>

			<div class="row">

				<div class="col-sm">
				<h5 style="color: #CC2865; font-weight: bold;">Chapter 4</h5>
				</div>

				<div class="col-sm" style="font-size: 20px;">
				PENDING COMPLETION
				</div>

				<div class="col-sm">
				<button class="btn btn-secondary">Take Exam</button>
				</div>
				
			</div><br/>

			<div class="row">

				<div class="col-sm">
				<h5 style="color: #CC2865; font-weight: bold;">Chapter 5</h5>
				</div>

				<div class="col-sm" style="font-size: 20px;">
				PENDING COMPLETION
				</div>

				<div class="col-sm">
				<button class="btn btn-secondary">Take Exam</button>
				</div>
				
			</div><br/>

			<div class="row">

				<div class="col-sm">
				<h5 style="color: #CC2865; font-weight: bold;">Chapter 6</h5>
				</div>

				<div class="col-sm" style="font-size: 20px;">
				PENDING COMPLETION
				</div>

				<div class="col-sm">
				<button class="btn btn-secondary">Take Exam</button>
				</div>
				
			</div>

	
			</div>
		
		



</body>

</html>