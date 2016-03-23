<?php
	session_start();
	if (isset($_POST['user'])) {
		include_once("connect.php");

		$inputuser = strip_tags($_POST['user']);
		$inputpass = strip_tags($_POST['pass']);
		$sql = "SELECT ID, USERNAME, PASSWORD FROM USERS WHERE USERNAME = '$inputuser' LIMIT 1";

		mysql_select_db("epics_dining", $dbCon);
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
	  	$uid = $row[0];
	  	$dbUsname = $row[1];
	  	$dbPassword = $row[2];
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
<?php $title = "Contact Us"; require "header.php"; ?>
	 <div class="modal fade" id="admin-modal" tabindex="-1" role="dialog" aria-labelledby="admin-modal-label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="admin-modal-label">Administrator Login</h4>
                </div>
                <div class="modal-body">
                    
                </div>
            </div>
        </div>
    </div>
    <form class="form-signin" action="login.php" method="post" enctype="multipart/form-data">
        <label for="inputEmail" class="sr-only">Admin Username</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Admin Username" name = "user" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name = "pass" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" id="signinbtn" type="submit">Sign in</button>
    </form>
<?php $jslib = ""; require "footer.php"; ?>
