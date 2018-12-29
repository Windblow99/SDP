<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>educo</title>
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
  		background-image: url("Pictures/4.jpg");
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
      <a class="navbar-brand" href="#" style="margin-left: 50px;">educo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      </ul>
    </div>
  </div>
</nav>


		<div id="page-content">
			<center>

				<h1 style="color:#990000">Forget Password</h1><br/><br/>
				<h4>Forgot your password? You can reset it here with ease!</h4>
				<br/><br/><br/>
					<form method="post" action="loginfunction.php">
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

</html>