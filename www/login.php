<?php
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	if($user == "lin382@purdue.edu" && $pass == "forest901219")
	{
		echo "welcome";
		header('location: admin.php');
	}
	else
	{
		echo "Incorrect Login";
	}
?>