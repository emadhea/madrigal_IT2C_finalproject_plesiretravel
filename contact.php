
<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="utf-8">
    <title>Plesire | Travel</title>
    <meta content="" name="description">
    <meta content="" name="author">
    <meta content="" name="keywords">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <!-- favicon -->
    <link href="img/favicon.gif" rel="icon" sizes="32x32" type="image/png">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- font themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- date picker CSS -->
    <link href="css/datepicker.min.css" rel="stylesheet">
    <!-- revolution slider css -->
    <link rel="stylesheet" type="text/css" href="css/fullwidth.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" href="css/rev-settings.css" type="text/css">
    <!-- on3step CSS -->
    <link href="css/animated-on3step.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/on3step-style.css" rel="stylesheet">
    <link href="css/queries-on3step.css" media="all" rel="stylesheet">
  </head>
  
  <body>
  
    <?php
echo '<!-- preloader -->';
echo '<div class="bg-preloader-white"></div>';
echo '<div class="preloader-white">';
echo '<div class="mainpreloader">';
echo '<span></span>';
echo '</div>';
echo '</div>';
echo '<!-- preloader end -->';
echo '';
echo '<!-- content wraper -->';
echo '<div class="content-wrapper">';
echo '';
echo '<header class="init">';
echo '';
echo '<!-- subnav -->';
echo '<div class="container-fluid m-5-hor">';
echo '<div class="row">';
echo '<div class="subnav">';
echo '';
echo '<div class="col-md-6">';
echo '<div class="left">';
echo '<div class="social-icons-subnav hidden-sm hidden-xs">';
echo '<div>Call Us : +63927 6073 941</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '';
echo '<div class="col-md-6">';
echo '<div class="right">';
echo '<div id="sub-icon" class="social-icons-subnav">';
echo '<a href="#"><span class="ti-facebook"></span></a>';
echo '<a href="#"><span class="ti-dribbble"></span></a>';
echo '<a href="#"><span class="ti-twitter"></span></a>';
echo '<a href="#"><span class="ti-instagram"></span></a>';
echo '<a href="#"><span class="ti-linkedin"></span></a>';
echo '</div>';
echo '<div class="social-icons-subnav">';
echo '<a data-toggle="modal" data-target="#fLogin"><span class="ti-lock"></span> Login</a>';
echo '</div>';
echo '<div class="social-icons-subnav hidden-sm hidden-xs">';
echo '<a data-toggle="modal" data-target="#fsignUp"><span class="ti-user"></span> Sign up</a>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<!-- subnav end -->';
echo '';
echo '<!-- nav -->';
echo '<div class="navbar-default-white navbar-fixed-top">';
echo '<div class="container-fluid m-5-hor">';
echo '<div class="row">';
echo '';
echo '<!-- menu mobile display -->';
echo '<button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">';
echo '<span class="icon icon-bar"></span>';
echo '<span class="icon icon-bar"></span>';
echo '<span class="icon icon-bar"></span></button>';
echo '';
echo '<!-- logo -->';
echo '<a class="navbar-brand white" href="index.html">';
echo '<img class="white" alt="logo" src="img/logo.png">';
echo '<img class="black" alt="logo" src="img/logo-white.png">';
echo '</a>';
echo '<!-- logo end -->';
echo '';
echo '<!-- mainmenu start -->';
echo '<div class="white menu-init" id="main-menu">';
echo '<nav id="menu-center">';
echo '<ul>';
echo '<li><a  href="index.php">Home</a></li>';
echo '<li><a href="#">Gallery <i class="fa fa-angle-down"></i></a> <ul>';
echo '<li><a href="alltours.php">All Tours</a></li>';
echo '<li><a href="ourgallery.php">Our Gallery</a></li>';
echo '</ul>';
echo '</li>';
echo '<li><a  href="#">Destination <i class="fa fa-angle-down"></i></a>';
echo '<ul>';
echo '<li><a href="island.php">Island</a></li>';
echo '<li><a href="falls.php">Falls</a></li>';
echo '<li><a href="cave.php">Cave</a></li>';
echo '<li><a href="beach.php">Beach</a></li>';
echo '<li><a href="cathedral.php">Cathedral</a></li>';
echo '<li><a href="mountain.php">Mountain</a></li>';
echo '<li><a href="resort.php">Resort</a></li>';
echo '</ul>';
echo '</li>';
echo '<li><a  href="#">Blog <i class="fa fa-angle-down"></i></a>';
echo '<ul>';
echo '<li><a href="blog.php">Blog Post</a></li>';
echo '</ul>';
echo '</li>';
echo '<li><a  href="contact.php">Contact</a></li>';
echo '<li><a href="#">About <i class="fa fa-angle-down"></i></a>';
echo '<ul>';
echo '<li><a href="about.php">About Us</a></li>';
echo '</li>';
echo '</ul>';
echo '</nav>';
echo '</div>';
echo '<!-- mainmenu end -->';
echo '';
echo '</div>';
echo '</div>';
echo '<!-- container -->';
echo '</div>';
echo '<!-- nav end -->';
echo '</header>';
echo '';
echo '<!-- subheader -->';
echo '<section id="subheader">';
echo '<div class="container-fluid m-5-hor">';
echo '<div class="row">';
echo '<div class="col-md-12">';
echo '<h1 class="big-heading">';
echo 'Contact Us';
echo '</h1>';
echo '<p>See information below</p>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
echo '<!-- subheader end -->';
echo '';
echo '<!-- section contact -->';
echo '<section aria-label="contact" class="whitepage">';
echo '<div class="container-fluid m-5-hor">';
echo '<div class="row">';
echo '';
echo '<div class="col-md-8">';
echo '<form id="form-contact1">';
echo '<div class="form-group user-name">';
echo '<input type="text" class="form-control" required="" id="name-contact-1" placeholder="Your Name">';
echo '</div>';
echo '';
echo '<div class="form-group user-email">';
echo '<input type="email" class="form-control" required="" id="email-contact" placeholder="Your Email">';
echo '</div>';
echo '';
echo '<div class="form-group user-message">';
echo '<textarea class="form-control" required="" id="message-contact" placeholder="Your Message"></textarea>';
echo '<div class="success" id="mail_success">Thank you. Your message has been sent</div>';
echo '<div class="error" id="mail_failed">Error, email not sent</div>';
echo '</div>';
echo '<button type="submit" id="send-contact-1" class="btn-contact">Send Now</button>';
echo '</form>';
echo '</div>';
echo '';
echo '<!-- address -->';
echo '<div class="col-md-3 col-md-offset-1">';
echo '<h3 class="heading-cont">Contact Information</h3>';
echo '<address class="cont-1">';
echo '<span>';
echo 'Dili, Gasan, Marinduque</span>';
echo '<span><strong>PHONE:</strong> +63927 6073 941</span>';
echo '<span><strong>EMAIL:</strong><a href="#"> plesiretravel@gmail.com</a></span>';
echo '<span><strong>WEB:</strong><a href="#"> www.plesiretravel.com</a></span>';
echo '</address>';
echo '</div>';
echo '<!-- address end -->';
echo '';
echo '';
echo '</div>';
echo '</div>';
echo '</section>';
echo '<!-- section contact end -->';
echo '';
echo '<!-- footer -->';
echo '<footer class="main text-center">';
echo '<div class="container-fluid m-5-hor">';
echo '<div class="row">';
echo '';
echo '<div class="onStep" data-animation="fadeInUp" data-time="300">';
echo '<div class="col-md-4 text-left">';
echo '<span><a href="#">Email: plesiretravel@gmail.com</a></span>';
echo '<span>Copyright - 2022 Plesire Travel All Right Reserved</span>';
echo '</div>';
echo '';
echo '<div class="col-md-4">';
echo '<span class="logo">';
echo '<img alt="logo" src="img/logo-white.png">';
echo '</span>';
echo '</div>';
echo '';
echo '<div class="col-md-4 text-right">';
echo '<span>Dili, Gasan, Marinduque</span>';
echo '<span>Phone: +63927 6073 941</span>';
echo '</div>';
echo '</div>';
echo '';
echo '';
echo '</div>';
echo '</div>';
echo '</footer>';
echo '<!-- footer end -->';
echo '';
echo '';
echo '<!-- ScrolltoTop -->';
echo '<div id="totop" class="init">';
echo '<span class="ti-angle-up"></span>';
echo '</div>';
echo '';
echo '<!-- modal login -->';
echo '<div id="fLogin" class="modal fade">';
echo '<div class="modal-dialog modal-login">';
echo '<div class="modal-content">';
echo '<div class="modal-header">';
echo '<h4 class="modal-title">Member Log In</h4>';
echo '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
echo '</div>';
echo '<div class="modal-body">';
echo '<form action="#" method="post">';
echo '<div class="form-group">';
echo '<label>User Name</label>';
echo '<input type="text" class="form-control" required="required">';
echo '</div>';
echo '<div class="form-group">';
echo '<label>Password</label>';
echo '<input type="password" class="form-control" required="required">';
echo '</div>';
echo '<div class="form-group">';
echo '<input type="submit" class="btn btn-primary btn-block btn-lg" value="Log In">';
echo '</div>';
echo '</form>';
echo '';
echo '</div>';
echo '<div class="modal-footer">';
echo '<a href="#">or Sign Up</a>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<!-- modal login end -->';
echo '';
echo '<!-- modal registration -->';
echo '<div id="fsignUp" class="modal fade">';
echo '<div class="modal-dialog modal-login">';
echo '<div class="modal-content">';
echo '<div class="modal-header">';
echo '<h4 class="modal-title">Member Registration</h4>';
echo '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
echo '</div>';
echo '<div class="modal-body">';
echo '<form>';
echo '<div class="form-group">';
echo '<label>First Name</label>';
echo '<input type="text" name="firstname" class="form-control" required="required">';
echo '</div>';
echo '<div class="form-group">';
echo '<label>Last Name</label>';
echo '<input type="text" name="lastname" class="form-control" required="required">';
echo '</div>';
echo '<div class="form-group">';
echo '<label>Email Address</label>';
echo '<input type="email" name="email" class="form-control" required="required">';
echo '</div>';
echo '<div class="form-group">';
echo '<label>Username</label>';
echo '<input type="text" name="username" class="form-control" required="required">';
echo '</div>';
echo '<div class="form-group">';
echo '<label>Password</label>';
echo '<input type="password" name="password" class="form-control" required="required">';
echo '</div>';
echo '<div class="form-group">';
echo '<label><input type="checkbox" name="terms"> I agree with the <a href="#">Terms and Conditions</a>.</label>';
echo '</div>';
echo '<div class="form-group"><input type="submit" value="Sign up" class="btn btn-primary btn-block btn-lg"></div>';
echo '<div class="clearfix"></div>';
echo '</form>';
echo '';
echo '</div>';
echo '<div class="modal-footer">';
echo '<a href="#">or Log In</a>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<!-- modal registration end -->';
echo '';
echo '';
echo '</div>';
?>
    <!-- content wraper end --> 

    <!-- plugin JS -->
    <script src="plugin/pluginson3step.js"></script> 
    <script src="plugin/bootstrap.min.js"></script>
    <script src='plugin/bootstrap-datepicker.min.js'></script>
    <script src="plugin/sticky.js"></script> 
    <!-- slider revolution  -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script  src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <!--  map google  -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCQ5KODzqooIP496GPLRaMAsZ4eN8Vro_U"></script> 
    <script src="js/map-1.js" type="text/javascript"></script>
    <!-- on3step JS -->
    <script src="js/on3step.js"></script>
    <script src="js/plugin-set.js"></script>
  </body>
</html>