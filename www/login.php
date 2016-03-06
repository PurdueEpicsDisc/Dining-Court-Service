<?php

	session_start();
	if (isset($_POST['user'])) {

		include_once("connect.php");

		$inputuser = strip_tags($_POST['user']);
		$inputpass = strip_tags($_POST['pass']);

		$uid = "1111"; 
		$sql = "SELECT id, username, password FROM members WHERE username = '$usname' AND activated = '1' LIMIT 1";
		
	  	

	  	//$queryuser = "SELECT * FROM 'users' WHERE 'user' = '$inputuser'";
	  	//$querypass = "SELECT * FROM 'users' WHERE 'password' = 'inputpass'";


		if($inputuser == "lin382@purdue.edu" && $inputpass == "forest901219")
		{
			//set session
			$_SESSION['username'] = $inputuser;
			$_SESSION['id'] = $uid;
			echo "welcome";
			//direct to users feed
			header('location: admin.php');
		}
		else
		{
			echo "Incorrect Login";
		}
	}
?>