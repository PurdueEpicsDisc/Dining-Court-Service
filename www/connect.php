<?php
	$servername = "mysql.ecn.purdue.edu";
  	$username = "epics_dining";
  	$password = "raspberry";

  	// Create connection
  	$dbCon = new mysqli($servername, $username, $password);
  	// Check connection
  	if ($dbCon->connect_error) {
      	die("Connection failed: " . $conn->connect_error);
  	}
  	echo "connected\n";
?>