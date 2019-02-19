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
