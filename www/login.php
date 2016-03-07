<?php
	session_start();
	if (isset($_POST['user'])) {

		$servername = "mysql.ecn.purdue.edu";
	  	$username = "epics_dining";
	  	$password = "raspberry";

	  	// Create connection
	  	$dbCon = mysql_connect($servername, $username, $password);
	  	// Check connection
	  	if (!$dbCon) {
  			die('Could not connect: ' . mysql_error());
  			echo "shit went wrong";
		}
	  	echo "connected\n";

		//include_once("connect.php");

		$inputuser = strip_tags($_POST['user']);
		$inputpass = strip_tags($_POST['pass']);
		

		$sql = "SELECT ID, USERNAME, PASSWORD FROM USERS WHERE USERNAME = '$inputuser' LIMIT 1";

		mysql_select_db("epics_dining", $dbCon);
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);


	  	
	  	$uid = $row[0];
	  	$dbUsname = $row[1];
	  	$dbPassword = $row[2];
	  	echo "id";
	  	echo $uid;

	  	echo $dbUsname;
	  	echo $dbPassword;
		if($inputuser == $dbUsname && $inputpass == $dbPassword)
		{
			//set session
			$_SESSION['user'] = $inputuser;
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