<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<link rel="icon" type="image/ico" href="/pictures/logo.jpg" />
<title>educo</title>
<script>
	function viewpassword()
	{
		var y = document.getElementById("password");
		if (y.type === "password")
		{
			y.type = "text"
		}
		else
		{
			y.type = "password"
		}
	}
</script>
<script>
	function viewpassword2()
	{
		var x = document.getElementById("password2");
		if (x.type === "password")
		{
			x.type = "text"
		}
		else
		{
			x.type = "password"
		}
	}
</script>

<link rel="stylesheet" type="text/css" href="CSS/Main CSS.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  	body{
  		background-image: url("/Pictures/Login.jpg");
  		background-repeat: no-repeat;
  		background-size: 100%;
  		height: 725px;
  	}
  </style>
</head>

<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php" style="margin-left: 50px;">educo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
      </ul>
    </div>
  </div>
</nav>
	
	<div class="container">
		<div id="page-content">
		<center>
	
		<h1 style="color:#990000"><b>Sign Up</b></h1><br/>
		<h4>We welcome you to the community, your journey begins here!</h4>
		<br/><hr style="border:none; height: 3px; background-color: #cc66ff;"><br/>
		<h4 style="color:#800080">Let's start with the basic...</h4>
		
		<form method="post" action="#">
			<table>
				<tr><th><br/>Name: </th><td><br/><input id="name" type="text" placeholder=" Name" name="name" required="required" style="padding-top: 5px; padding-bottom: 5px; width: 300px;"></td></tr>
				<tr><th><br/>IC: </th><td><br/><input id="name" type="text" placeholder=" IC number" name="name" required="required" style="padding-top: 5px; padding-bottom: 5px; width: 300px;"></td></tr>
				<tr><th><br/>Date of Birth: </th><td><br/><input id="dob" type="date" name="dob" required="required" style="padding-top: 5px; padding-bottom: 5px; width: 300px;"></td></tr>
				<tr><th><br/>Contact Number: </th><td><br/><input type="number" placeholder=" Contact Number" id="contact" name="contact" required="required" style="padding-top: 5px; padding-bottom: 5px; width: 300px;"></td></tr>
				<tr><th><br/>E-mail: </th><td><br/><input id="email" type="text" placeholder=" E-mail" name="email" required="required" style="padding-top: 5px; padding-bottom: 5px; width: 300px;"></td></tr>
				<tr><th><br/>Password: </th><td><br/><input type="password" placeholder=" Password" id="password" name="password" required="required" style="padding-top: 5px; padding-bottom: 5px; width: 300px;"> &nbsp; &nbsp; <input type="checkbox" onclick="viewpassword()"/> View Password<br/><span id="checkpassword"></span></td></tr>
				<tr><th><br/>Confirm Password: </th><td><br/><input type="password" placeholder=" Confirm Password" id="password2" name="password2" required="required" style="padding-top: 5px; padding-bottom: 5px; width: 300px;"> &nbsp; &nbsp; <input type="checkbox" onclick="viewpassword2()"/> View Password<br/><span id="checkpassword"></span></td></tr>
				<!--<tr><th>Confirm Password: </th><td><input type="password" id="cpassword" name="cpassword" required="required"/><br/><span id="checkcpassword"></span></td></tr>-->

				<tr><th colspan="2"><br/><center><a><input id="submit" type="submit" value="Sign Up" class="btn btn-default" role="button"/ style="padding: 10px 40px; background-color: #808080; color:white;"></a></center></th></tr>
			</table>
		</form>
		<br/><br/><br/>
	
		</center>	
		</div>
		</div>

		

</body>

</html>
