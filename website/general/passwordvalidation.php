<?php

	//declare some variable to store output
	$response=array();
	
	if(isset($_POST['Password']) && !empty($_POST['Password']))
	{
		$password = $_POST['Password'];
		
		//form validation process
		if(strlen($password) <= 8 || strlen($password) >= 20)
		{
			$response['errorpassstatus'] = true;
			$response['errorpassmsg'] = "Password should be in 8 - 20 characters.";
		}
		else
		{
			$response['errorpassstatus'] = false; //This mean no error
			$response['errorpassmsg'] = "Valid Password";
		}
	}
	else
	{
		$response['errorpassstatus'] = true; //This mean got error
		$response['errorpassmsg'] = "Unable to get the Password!";
	}
	
	/*if(isset($_POST['CPassword']) && !empty($_POST['CPassword']))
	{
		$cpassword = $_POST['CPassword'];
		
		//form validation process
		if($password == $cpassword)
		{
			$response['errorcpassstatus'] = true;
			$response['errorcpassmsg'] = "Password is not matched.";
		}
		else
		{
			$response['errorcpassstatus'] = false; //This mean no error
			$response['errorcpassmsg'] = "Valid Password";
		}
	}
	else
	{
		$response['errorcpassstatus'] = true; //This mean got error
		$response['errorcpassmsg'] = "Unable to get the Password!";
	}*/
	//Create the JSON / XML text file to send back to Javascript
	
	echo json_encode($response);//Create the JSON File

?>