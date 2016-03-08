<?php
    $servername = "localhost";
    $username = "root";
    $password = "forest901219";

    // Create connection
    $dbCon = mysql_connect($servername, $username, $password);
    // Check connection
    if (!$dbCon) {
      die('Could not connect: ' . mysql_error());
      echo "shit went wrong";
    }
      echo "connected\n";
?>