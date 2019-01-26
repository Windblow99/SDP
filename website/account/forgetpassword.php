<!DOCTYPE html>
<html>

<head>
<link rel="icon" type="image/ico" href="/Pictures/e.png" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Forget Password</title>
<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>
<script>
	function viewpassword()
	{
		var x = document.getElementById("password");
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
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
  <style>
  	body{
  		background-image: url("/Pictures/Login.jpg");
  	}

  	#page-content{
	top: 0;
	margin-top: 100px;
	height: 100%;
	}
  </style>
</head>

<body>
<?php include($_SERVER["DOCUMENT_ROOT"].'/template/homenavbar.php'); ?>
<!--<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-lg sticky-top" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="/website/general/index.php"><img src="/Pictures/e.png" height="35" width="35">duco</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto">
    </ul>

    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/website/general/login.php" style="margin-right: 20px;">Log In</a>        
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/website/general/signup.php">Sign Up</a>        
      </li>
    </ul>
  </div>
</nav>-->
<!--<nav class="navbar navbar-default">
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
      	<li><a href="login_student.php"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
        <li><a href="signup_student.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      </ul>
    </div>
  </div>
</nav>-->


		<div id="page-content">
			<center>

				<h1 style="color:#990000"><b>Forget Password</b></h1><br/><br/>
				<h4>Forgot your password? You can reset it here with ease!</h4>
				<br/><br/><br/>
					<form method="post" action="forgetpassword_function.php">
						<table>
							<tr><th colspan="2"><br/><center><input id="email" type="email" name="email" placeholder="E-mail Address Registered" required="required" style="width: 300px; height: 25px; border-radius: 5px; padding: 20px 10px; font-weight: normal;"/></center></th></tr>
						<!--	<tr><th colspan="2"><br/><br/><br/><center><input id="name" type="text" name="name" placeholder="Your Real Name" required="required" style="width: 300px; height: 25px; border-radius: 5px; padding: 20px 10px; font-weight: normal;"/></center></th><td><br/><br/><br/></td></tr>-->
            <tr><th colspan="2"><br/><input id="password" type="password" name="password" placeholder="New Password" required="required" style="width: 300px; height: 25px; border-radius: 5px; padding: 20px 10px; font-weight: normal;"/><br/><input type="checkbox" onclick="viewpassword()"/>View Password</th>
							<tr><th colspan="2"><br/><br/><br/><center><a><input id="submit" type="submit" value="Submit Request" class="btn btn-default" role="button"/ style="padding: 10px 40px; background-color: #808080; color:white;"></a></center></th></tr>
						</table>
					</form>
			</center>
		</div>	


  </body>

</body>

</html>

<!--<!DOCTYPE html>
<html>

<head>
<link rel="icon" type="image/ico" href="/Pictures/e.png" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Forget Password</title>
<script>
	function viewpassword()
	{
		var x = document.getElementById("password");
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
  	}

  	#page-content{
	top: 0;
	margin-top: 100px;
	height: 100%;
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
      	<li><a href="/website/general/login.php"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
        <li><a href="/website/general/signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      </ul>
    </div>
  </div>
</nav>


		<div id="page-content">
			<center>

				<h1 style="color:#990000"><b>Forget Password</b></h1><br/><br/>
				<h4>Forgot your password? You can reset it here with ease!</h4>
				<br/><br/><br/>
					<form method="post" action="#">
						<table>
							<tr><th><br/>Email: </th><td><br/><input id="email" type="email" name="email" required="required" style="margin-left: 20px; width: 225px; height: 25px;"/></td></tr>
							<tr><th><br/><br/><br/>Your Real Name: </th><td><br/><br/><br/><input id="name" type="text" name="name" required="required" style="margin-left: 20px; width: 225px; height: 25px;"/></td></tr>
							<tr><th colspan="2"><br/><br/><br/><center><a><input id="submit" type="submit" value="Submit Request" class="btn btn-default" role="button"/ style="padding: 10px 40px; background-color: #808080; color:white;"></a></center></th></tr>
						</table>
					</form>
			</center>
		</div>	


  </body>

</body>

</html>-->
