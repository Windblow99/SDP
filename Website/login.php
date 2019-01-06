<!DOCTYPE html>
<html>

<head>

<?php include ('../template/header.php'); ?>

<title>Log In</title>

<style>
  	body{
  		background-image: url("SDP/Pictures/4.jpg");
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

<?php include ('../template/navbar.php'); ?>

		<div id="page-content">
			<center>

				<h1 style="color:#990000"><b>Log In</b></h1><br/><br/>
				<h4>Hello there! We are excited to see you again!</h4>
				<br/><br/><br/>
					<form method="post" action="#">
						<table>
							<tr><th><br/>E-mail: </th><td><br/><input id="id" type="text" name="userid" required="required" style="margin-left: 20px; width: 225px; height: 25px;"/></td></tr>
							<tr><th><br/><br/><br/>Password: </th><td><br/><br/><br/><input id="password" type="password" name="password" required="required" style="margin-left: 20px; width: 225px; height: 25px;"/> &nbsp; &nbsp; <input type="checkbox" onclick="viewpassword()"/> View Password</td></tr>
							<tr><th></th><td><a href="#" style="margin-left: 20px;">Forget Password</a></td></tr>
							<tr><th colspan="2"><br/><br/><br/><center><a><input id="submit" type="submit" value="Login" class="btn btn-default" role="button"/ style="padding: 10px 40px; background-color: #808080; color:white;"></a></center></th></tr>
						</table>
					</form>
			</center>
		</div>	


  </body>

</body>

</html>
