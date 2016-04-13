<?php
	include_once("connect.php");
	mysql_select_db("epics_dining", $dbCon);
	$query = "SELECT IP_address FROM Camera WHERE camera_ID = '2' LIMIT 1";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	$ip = $row[0];
	echo $ip . "\n";
	set_include_path(get_include_path() . get_include_path().'/phpseclib');
	include('Net/SSH2.php');
	$ssh = new Net_SSH2($ip);
	if (!$ssh->login('pi', 'raspberry')) {
	    exit('Login Failed');
	}
	echo $ssh->exec('sudo reboot');
	header('location: admin.php');
	//echo $ssh->exec('sudo reboot');
?>