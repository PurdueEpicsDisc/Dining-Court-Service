<?php
	include_once("connect.php");
	//$sql = "SELECT ID, USERNAME, PASSWORD FROM USERS WHERE USERNAME = '$inputuser' LIMIT 1";
	mysql_select_db("epics_dining", $dbCon);
	date_default_timezone_set('America/New_York');
	$date = date('Y-m-d');
	//echo $date . "\n";
	$queryin = "SELECT * FROM Timestamp where camera_ID = '1' and time_stamp between '" . $date ." 00:00:00' and '" . $date ." 23:59:59'";
	$queryout = "SELECT * FROM Timestamp where camera_ID = '23' and time_stamp between '" . $date ." 00:00:00' and '" . $date ." 23:59:59'";
	//echo $query ."\n";
	$innum = mysql_query($queryin);
	$outnum = mysql_query($queryout);
	$rownum = mysql_num_rows($innum) - mysql_num_rows($outnum) ;
	//echo $rownum ."\n";
	$earhartcap = sprintf("Capacity: %0.2f",($rownum/900)*100) . ("%");
	//echo $earhartcap;


?>