<?php
	$inputuser = $_POST['user'];
	$inputpass = $_POST['pass'];

	$connect = mysql_close("localhost","root","forest901219");
	if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  	} 
  	@mysql_select_db($database) or ("Database not found");

  	$queryuser = "SELECT * FROM 'users' WHERE 'user' = '$inputuser'";
  	$querypass = "SELECT * FROM 'users' WHERE 'password' = 'inputpass'";


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