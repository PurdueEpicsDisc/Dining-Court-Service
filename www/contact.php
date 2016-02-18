<?php $title = "Contact Us"; require "header.php"; ?>
    <div class="banner" id="contact-banner">
        <div class="container">
            <div class="col-sm-offset-3 col-sm-6">
                <h1>Contact</h1>
                <p class="description">We value your feedback! If you have any questions, comments, or concerns, you can contact us using the form below!</p>
            </div>
            <p class="photo-credit">Dave Umberger / Purdue News Service</p>
        </div>
    </div>
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="contact-name" class="col-sm-2 control-label" style="text-align: left;">Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="contact-name" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-email" class="col-sm-2 control-label" style="text-align: left;">Email:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="contact-email" placeholder="Email">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label for="contact-message" class="col-sm-2 control-label" style="text-align: left;">Message:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="8" style="resize: none;" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button class="btn btn-default btn-block" type="submit">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-4" id="contact-us">
                    <h3>Contact Us</h3>
                    <ul>
                        <li>
                            <h4>Zhiyang Lin</h4>
                            <p>Design Lead</p>
                            <a href="mailto:zhiyang@purdue.edu">zhiyang@purdue.edu</a>
                        </li>
                        <li>
                            <h4>Marlo Delatorre</h4>
                            <p>Project Partner Liaison</p>
                            <a href="mailto:delatorm@purdue.edu">delatorm@purdue.edu</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php $jslib = ""; require "footer.php"; ?>