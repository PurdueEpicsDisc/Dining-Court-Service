<?php
	include_once("connect.php");
	//$sql = "SELECT ID, USERNAME, PASSWORD FROM USERS WHERE USERNAME = '$inputuser' LIMIT 1";
	mysql_select_db("epics_dining", $dbCon);
	date_default_timezone_set('America/New_York');
	$date = date('Y-m-d');
	$hour = date('H');
	$day = date('l');
	if($day == "Monday"||"Tuesday"||"Wednesday"||"Thursday"||"Friday"){
		echo $day ."\n";
		if(6 <= $hour && $hour < 10){
			$queryin = "SELECT * FROM Timestamp where camera_ID = '1' and time_stamp between '" . $date ." 6:30:00' and '" . $date ." 9:30:00'";
			$queryout = "SELECT * FROM Timestamp where camera_ID = '2' and time_stamp between '" . $date ." 6:30:00' and '" . $date ." 9:30:00'";
			//$innum = mysql_query($queryin);
			//$outnum = mysql_query($queryout);
			//$rownum = mysql_num_rows($innum) - mysql_num_rows($outnum) ;
			//$earhartcap = sprintf("Capacity: %0.2f",($rownum/900)*100) . ("%");
		}
		elseif(11<= $hour && $hour < 14){
			$queryin = "SELECT * FROM Timestamp where camera_ID = '1' and time_stamp between '" . $date ." 11:00:00' and '" . $date ." 14:00:00'";
			$queryout = "SELECT * FROM Timestamp where camera_ID = '2' and time_stamp between '" . $date ." 11:00:00' and '" . $date ." 14:00:00'";
			//$innum = mysql_query($queryin);
			//$outnum = mysql_query($queryout);
			//$rownum = mysql_num_rows($innum) - mysql_num_rows($outnum) ;
			//$earhartcap = sprintf("Capacity: %0.2f",($rownum/900)*100) . ("%");
		}
		elseif(17<= $hour && $hour < 20){
			$queryin = "SELECT * FROM Timestamp where camera_ID = '1' and time_stamp between '" . $date ." 17:00:00' and '" . $date ." 20:00:00'";
			$queryout = "SELECT * FROM Timestamp where camera_ID = '2' and time_stamp between '" . $date ." 17:00:00' and '" . $date ." 20:00:00'";
			//$innum = mysql_query($queryin);
			//$outnum = mysql_query($queryout);
			//$rownum = mysql_num_rows($innum) - mysql_num_rows($outnum) ;
			//$earhartcap = sprintf("Capacity: %0.2f",($rownum/900)*100) . ("%");
		}
		else{
			$earhartcap = sprintf("Capacity: 0%");
		}
	}
	elseif($day = "Saturday"){
		if(11<= $hour && $hour < 14){
			$queryin = "SELECT * FROM Timestamp where camera_ID = '1' and time_stamp between '" . $date ." 11:00:00' and '" . $date ." 14:00:00'";
			$queryout = "SELECT * FROM Timestamp where camera_ID = '2' and time_stamp between '" . $date ." 11:00:00' and '" . $date ." 14:00:00'";
			//$innum = mysql_query($queryin);
			//$outnum = mysql_query($queryout);
			//$rownum = mysql_num_rows($innum) - mysql_num_rows($outnum) ;
			//$earhartcap = sprintf("Capacity: %0.2f",($rownum/900)*100) . ("%");
		}
		elseif(17<= $hour && $hour < 20){
			$queryin = "SELECT * FROM Timestamp where camera_ID = '1' and time_stamp between '" . $date ." 17:00:00' and '" . $date ." 20:00:00'";
			$queryout = "SELECT * FROM Timestamp where camera_ID = '2' and time_stamp between '" . $date ." 17:00:00' and '" . $date ." 20:00:00'";
			//$innum = mysql_query($queryin);
			//$outnum = mysql_query($queryout);
			//$rownum = mysql_num_rows($innum) - mysql_num_rows($outnum) ;
			//$earhartcap = sprintf("Capacity: %0.2f",($rownum/900)*100) . ("%");
		}
		else{
			$earhartcap = sprintf("Capacity: 0%");
		}
	}
	else{
		if(11<= $hour && $hour < 14){
			$queryin = "SELECT * FROM Timestamp where camera_ID = '1' and time_stamp between '" . $date ." 11:00:00' and '" . $date ." 14:00:00'";
			$queryout = "SELECT * FROM Timestamp where camera_ID = '2' and time_stamp between '" . $date ." 11:00:00' and '" . $date ." 14:00:00'";
			//$innum = mysql_query($queryin);
			//$outnum = mysql_query($queryout);
			//$rownum = mysql_num_rows($innum) - mysql_num_rows($outnum) ;
			//$earhartcap = sprintf("Capacity: %0.2f",($rownum/900)*100) . ("%");
		}
		else{
			$earhartcap = sprintf("Capacity: 0%");
		}
	}

	echo $date . "\n";
	echo $queryin ."\n";
	//$innum = mysql_query($queryin);
	//$outnum = mysql_query($queryout);
	//$rownum = mysql_num_rows($innum) - mysql_num_rows($outnum) ;
	//echo $rownum ."\n";
	//$earhartcap = sprintf("Capacity: %0.2f",($rownum/900)*100) . ("%");
	//echo $earhartcap;


?>