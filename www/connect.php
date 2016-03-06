<?php
	$servername = "localhost";
  	$username = "root";
  	$password = "forest901219";

  	// Create connection
  	$dbcon = new mysqli($servername, $username, $password);
  	// Check connection
  	if ($dbcon->connect_error) {
      	die("Connection failed: " . $conn->connect_error);
  	} 
?>