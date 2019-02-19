<!DOCTYPE html>
<html>

<head>
<link rel="icon" type="image/ico" href="/Pictures/e.png" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Sign Up</title>
<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>
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



  <style>
  	body{
  		background-image: url("/Pictures/Login.jpg");
  		background-repeat: no-repeat;
  		background-size: 100%;
  	}
  </style>
</head>

<body>
<?php include($_SERVER["DOCUMENT_ROOT"].'/template/homenavbar.php'); ?>
	
	<div class="container" style="margin-top: 30px;">
		<center>
	
		<h1 style="color:#990000"><b>Sign Up</b></h1><br/>
		<h4>We welcome you to the community, your journey begins here!</h4>
		<br/><hr style="border:none; height: 3px; background-color: #cc66ff;"><br/>
		<h4 style="color:#800080">Let's start with the basic...</h4>
		
		<form method="post" action="signup_function.php">
			<table>
				<tr><th><br/>Role: </th>
					<td><br/>
						<select name="position" style="margin-left: 15px;">
							<option value="student">Student</option>
							<option value="teacher">Teacher</option>
							<option value="corporate">Corporate</option>
						</select></td></tr>


						
				<tr><th><br/>E-mail: </th><td><br/><input id="email" type="email" placeholder=" E-mail" name="email" required="required" style="margin-left: 15px; padding: 12px 5px; width: 300px;"></td></tr>
				<tr><th><br/>Password: </th><td><br/><input type="password" placeholder=" Password" id="password" name="password" maxlength="15" required="required" style="margin-left: 15px; padding: 12px 5px; width: 300px;"> &nbsp; &nbsp; <input type="checkbox" onclick="viewpassword()"/> View Password<br/><span id="checkpassword"></span></td></tr>
				<!--<tr><th><br/>Confirm Password: </th><td><br/><input type="password" placeholder=" Confirm Password" id="password2" name="password2" required="required" style="margin-left: 20px;padding-top: 5px; padding-bottom: 5px; width: 300px;"> &nbsp; &nbsp; <input type="checkbox" onclick="viewpassword2()"/> View Password<br/><span id="checkpassword"></span></td></tr>	-->			
				<tr><th><br/>Name: </th><td><br/><input id="name" type="text" placeholder=" Name" name="name" required="required" style="margin-left: 15px; padding: 12px 5px; width: 300px;"></td></tr>
				<!--<tr><th><br/>Date of Birth: </th><td><br/><input id="dob" type="date" name="dob" required="required" style="margin-left: 20px; padding-top: 5px; padding-bottom: 5px; width: 300px;"></td></tr>-->
				<tr><th><br/>Contact Number: </th><td><br/><input type="tel" placeholder=" ex. 0123456789" id="contact" name="contact" maxlength="11" required="required" style="margin-left: 15px; padding: 12px 5px; width: 300px;"></td></tr>

				<tr><th colspan="2"><br/><center><a><input id="submit" type="submit" value="Sign Up" class="btn btn-default" role="button"/ style="padding: 10px 40px; background-color: #808080; color:white;"></a></center></th></tr>
			</table>
		</form>
		<br/><br/><br/>
					
				
		</center>	
		</div>

		

</body>

</html>
