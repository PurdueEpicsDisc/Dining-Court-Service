<?php
	$inputuser = $_POST['user'];
	$inputpass = $_POST['pass'];

	$servername = "localhost";
	$username = "root";
	$serverpass = "forest901219";
	$database = "pis";	
	$connect = mysql_close($servername, $username, $serverpass);
	if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  	} 

  	@mysql_select_db($database) or ("Database not found");

  	$queryuser = "SELECT * FROM 'users' WHERE 'user' = '$inputuser'";
  	$querypass = "SELECT * FROM 'users' WHERE 'password' = 'inputpass'";


	if($inputuser == "lin382@purdue.edu" && $inputpass == "forest901219")
	{
		echo "welcome";
		header('location: admin.php');
	}
	else
	{
		echo "Incorrect Login";
	}
?>