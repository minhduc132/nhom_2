<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Restaurant</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style-portfolio.css">
    <link rel="stylesheet" href="css/picto-foundry-food.css" />
    <link rel="stylesheet" href="css/jquery-ui.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="favicon-1.ico" type="image/x-icon">
</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="row">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Restaurant</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav main-nav  clear navbar-right ">
                    <li><a class="navactive color_animation" href="#top">WELCOME</a></li>
                    <li><a class="color_animation" href="#story">ABOUT</a></li>
                    <li><a class="color_animation" href="#pricing">PRICING</a></li>
                    <li><a class="color_animation" href="#beer">BEER</a></li>
                    <li><a class="color_animation" href="#bread">BREAD</a></li>
                    <li><a class="color_animation" href="#featured">FEATURED</a></li>
                    <li><a class="color_animation" href="#reservation">RESERVATION</a></li>
                    <li><a class="color_animation" href="#contact">CONTACT</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </div><!-- /.container-fluid -->
</nav>

<div id="top" class="starter_container bg">
    <div class="follow_container">
        <div class="col-md-6 col-md-offset-3">
            <h2 class="top-title"> Restaurant</h2>
            <h2 class="white second-title">" Best in the city "</h2>
            <hr>
        </div>
    </div>
</div>



<section id="contact">
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.664063989472!2d91.8316103150038!3d24.909437984030877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37505558dd0be6a1%3A0x65c7e47c94b6dc45!2sTechnext!5e0!3m2!1sen!2sbd!4v1444461079802" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner contact">
                    <!-- Form Area -->
                    <div class="contact-form">
                        <!-- Form -->
                        <form id="contact-us" method="post" action="contact.php">
                            <!-- Left Inputs -->
                            <div class="col-md-6 ">
                                <!-- Name -->
                                <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
                                <!-- Email -->
                                <input type="email" name="email" id="email" required="required" class="form" placeholder="Email" />
                                <!-- Subject -->
                                <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject" />
                            </div><!-- End Left Inputs -->
                            <!-- Right Inputs -->
                            <div class="col-md-6">
                                <!-- Message -->
                                <textarea name="message" id="message" class="form textarea"  placeholder="Message"></textarea>
                            </div><!-- End Right Inputs -->
                            <!-- Bottom Submit -->
                            <div class="relative fullwidth col-xs-12">
                                <!-- Send Button -->
                                <button type="submit" id="submit" name="submit" class="form-btn">Send Message</button>
                            </div><!-- End Bottom Submit -->
                            <!-- Clear -->
                            <div class="clear"></div>
                        </form>
                    </div><!-- End Contact Form Area -->
                </div><!-- End Inner -->
            </div>
        </div>
    </div>
</section>

<!-- ============ Footer Section  ============= -->

<footer class="sub_footer">
    <div class="container">
        <div class="col-md-4"><p class="sub-footer-text text-center">&copy; Restaurant 2014, Theme by <a href="https://themewagon.com/">ThemeWagon</a></p></div>
        <div class="col-md-4"><p class="sub-footer-text text-center">Back to <a href="#top">TOP</a></p>
        </div>
        <div class="col-md-4"><p class="sub-footer-text text-center">Built With Care By <a href="#" target="_blank">Us</a></p></div>
    </div>
</footer>


<script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
<script type="text/javascript" src="js/bootstrap.min.js" ></script>
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
<script type="text/javascript" src="js/main.js" ></script>

</body>
</html>
