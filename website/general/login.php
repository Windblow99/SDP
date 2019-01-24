<!DOCTYPE html>
<html>

<head>
<link rel="icon" type="image/ico" href="/Pictures/e.png" />
<title>Log In</title>
<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>
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
</head>

<body>
<?php include($_SERVER["DOCUMENT_ROOT"].'/template/homenavbar.php'); ?>
<!--<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-lg sticky-top" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="index.php"><img src="/Pictures/e.png" height="35" width="35">duco</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto">
    </ul>

    <ul class="navbar-nav">
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
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      </ul>
    </div>
  </div>
</nav>-->

		<div id="page-content">
			<center>

				<h1 style="color:#990000"><b>Log In</b></h1><br/><br/>
				<h4>Hello there! We are excited to see you again!</h4>
				<br/>
          <form method="post" action="login_function.php">
            <table>
              <tr><th><br/>E-mail: </th><td><br/><input id="email" type="text" name="email" placeholder=" E-mail" required="required" style="margin-left: 20px; width: 300px; height: 25px; padding: 20px 5px;"/></td></tr>
              <tr><th><br/><br/>Password: </th><td><br/><br/><input id="password" type="password" name="password" placeholder=" Password" maxlength="15" required="required" style="margin-left: 20px; width: 300px; height: 25px; padding: 20px 5px;"/> &nbsp; &nbsp; <input type="checkbox" onclick="viewpassword()"/> View Password</td></tr>
              <tr><th colspan="2"><br/><br/><br/><center><a><input id="submit" type="submit" value="Login" class="btn btn-default" role="button"/ style="padding: 10px 40px; background-color: #808080; color:white;"></a></center></th></tr>
              <tr><th colspan="2"><br/><br/><center><a href="/website/account/forgetpassword.php">Forget Password</a></center></th></tr>
            </table>
          </form>
			</center>
		</div>	


  </body>

</body>

</html>
