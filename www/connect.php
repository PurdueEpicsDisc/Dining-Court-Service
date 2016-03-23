<?php
    $servername = "mysql.ecn.purdue.edu";
    $username = "epics_dining";
    $password = "raspberry";

    // Create connection
    $dbCon = mysql_connect($servername, $username, $password);
    // Check connection
    if (!$dbCon) {
      die('Could not connect: ' . mysql_error());
      //echo "shit went wrong";
    }
      //echo "connected\n";