<?php
	session_start();
	session_destroy(); 
	if (isset($_SESSION['id'])) { 
		$msg = "You are now logged out";
		header("location:index.php");
	} else {
		$msg = "<h2>Could not log you out</h2>";
	} 
?> 
<html>
<body>
<?php echo $msg; ?><br>
<p><a href="/login-test">Click here</a> to return to our home page </p>
</body>
</html>