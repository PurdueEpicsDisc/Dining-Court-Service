<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="modal fade" id="admin-modal" tabindex="-1" role="dialog" aria-labelledby="admin-modal-label">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="admin-modal-label">Administrator Login</h4>
                    </div>
                    <div class="modal-body">
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
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">P<span>O</span>DG</a>
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menus <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="http://www.housing.purdue.edu/Menus/ERHT">Earhart</a></li>
                                <li><a href="http://www.housing.purdue.edu/Menus/FORD">Ford</a></li>
                                <li><a href="http://www.housing.purdue.edu/Menus/HILL">Hillenbrand</a></li>
                                <li><a href="http://www.housing.purdue.edu/Menus/WILY">Wiley</a></li>
                                <li><a href="http://www.housing.purdue.edu/Menus/WIND">Windsor</a></li>
                            </ul>
                        </li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a id="admin-login" href="#admin-login" ata-toggle="modal" data-target="#admin-modal">Administrator Login</a><li>
                    </ul>
                </div>
            </div>

        </nav>
    </header>
</html>