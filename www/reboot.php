<?php
	include_once("connect.php");
	mysql_select_db("epics_dining", $dbCon);
	set_include_path(get_include_path() . get_include_path().'/phpseclib');
	include('Net/SSH2.php');
	echo('if you are reading this, phpseclib has been included');
	$ssh = new Net_SSH2('ecegrid.ecn.purdue.edu');
	if (!$ssh->login('lin382', 'lalone901219')) {
	    exit('Login Failed');
	}

	echo $ssh->exec('ls');
?>