    <footer>
        <div class="modal fade" id="admin-modal" tabindex="-1" role="dialog" aria-labelledby="admin-modal-label">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="admin-modal-label">Administrator Login</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-signin" action="login.php" method="post">
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
        <p id="copyright">&copy; 2016 EPICS DISC Team. All Rights Reserved.</p>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <?php echo $jslib; ?>
</body>
</html>