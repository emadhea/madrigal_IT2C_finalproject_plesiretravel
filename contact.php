
<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="utf-8">
    <title>Plesire | Interactive Travel Template</title>
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
  
    <!-- preloader -->
    <div class="bg-preloader-white"></div>
    <div class="preloader-white">
      <div class="mainpreloader">
        <span></span>
      </div>
    </div>
    <!-- preloader end -->
    
    <!-- content wraper -->
   <div class="content-wrapper">
    
   <header class="init">
    
    <!-- subnav -->
    <div class="container-fluid m-5-hor">
    <div class="row">
        <div class="subnav">

         <div class="col-md-6">
          <div class="left">
            <div class="social-icons-subnav hidden-sm hidden-xs">
                <div>Call Us : +63927 6073 941</div>
            </div>
          </div>
         </div>
         
         <div class="col-md-6">
          <div class="right">
            <div id="sub-icon" class="social-icons-subnav">
                <a href="#"><span class="ti-facebook"></span></a>
                <a href="#"><span class="ti-dribbble"></span></a>
                <a href="#"><span class="ti-twitter"></span></a>
                <a href="#"><span class="ti-instagram"></span></a>
                <a href="#"><span class="ti-linkedin"></span></a>
            </div>
            <div class="social-icons-subnav">
              <a data-toggle="modal" data-target="#fLogin"><span class="ti-lock"></span> Login</a>
            </div>    
            <div class="social-icons-subnav hidden-sm hidden-xs">
              <a data-toggle="modal" data-target="#fsignUp"><span class="ti-user"></span> Sign up</a>
            </div>
          </div>
         </div>
        
        </div>
    </div>
    </div>
    <!-- subnav end -->
    
      <!-- nav -->
      <div class="navbar-default-white navbar-fixed-top">
        <div class="container-fluid m-5-hor">
        <div class="row">
        
           <!-- menu mobile display -->
           <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
           <span class="icon icon-bar"></span> 
           <span class="icon icon-bar"></span> 
           <span class="icon icon-bar"></span></button> 
          
          <!-- logo --> 
          <a class="navbar-brand white" href="index.html">
          <img class="white" alt="logo" src="img/logo.png">
          <img class="black" alt="logo" src="img/logo-white.png">
          </a> 
          <!-- logo end -->
          
          <!-- mainmenu start -->
          <div class="white menu-init" id="main-menu">
            <nav id="menu-center">
              <ul>
                <li><a  href="index.php">Home</a></li>
                <li><a href="#">Gallery <i class="fa fa-angle-down"></i></a> <ul>
                    <li><a href="alltours.php">All Tours</a></li>
                    <li><a href="ourgallery.php">Our Gallery</a></li>
                  </ul>
                </li>
                <li><a  href="#">Destination <i class="fa fa-angle-down"></i></a>
                <ul>
                    <li><a href="island.php">Island</a></li>
                    <li><a href="falls.php">Falls</a></li>
                    <li><a href="cave.php">Cave</a></li>
                    <li><a href="beach.php">Beach</a></li>
                    <li><a href="cathedral.php">Cathedral</a></li>
                    <li><a href="mountain.php">Mountain</a></li>
                    <li><a href="resort.php">Resort</a></li>
                    </ul>
                </li>
                <li><a  href="#">Blog <i class="fa fa-angle-down"></i></a>
                  <ul>
                    <li><a href="blog.php">Blog Post</a></li>
                  </ul>
                </li>
                <li><a  href="contact.php">Contact</a></li>
                <li><a href="#">About <i class="fa fa-angle-down"></i></a>
                <ul>
                    <li><a href="about.php">About Us</a></li>
                </li>
              </ul>
            </nav>
          </div>
          <!-- mainmenu end -->
          
        </div>
        </div>
        <!-- container -->
      </div>
      <!-- nav end -->
      </header>
      
      <!-- subheader -->
      <section id="subheader">
        <div class="container-fluid m-5-hor">
          <div class="row">
            <div class="col-md-12">
              <h1 class="big-heading">
                Contact Us
              </h1>
              <p>See information below</p>
            </div>
        </div>
       </div>
      </section>
      <!-- subheader end -->
      
      <!-- section contact -->
      <section aria-label="contact" class="whitepage">
        <div class="container-fluid m-5-hor">
          <div class="row">
          
            <div class="col-md-8">
                <form id="form-contact1">
                            <div class="form-group user-name">
                                <input type="text" class="form-control" required="" id="name-contact-1" placeholder="Your Name">
                            </div>

                            <div class="form-group user-email">
                                <input type="email" class="form-control" required="" id="email-contact" placeholder="Your Email">
                            </div>
                        
                            <div class="form-group user-message">
                                <textarea class="form-control" required="" id="message-contact" placeholder="Your Message"></textarea>
                                <div class="success" id="mail_success">Thank you. Your message has been sent</div>
                                <div class="error" id="mail_failed">Error, email not sent</div>
                            </div>
                    <button type="submit" id="send-contact-1" class="btn-contact">Send Now</button>
                </form>
            </div>
            
            <!-- address -->
              <div class="col-md-3 col-md-offset-1">
                <h3 class="heading-cont">Contact Information</h3>
                  <address class="cont-1">
                    <span>
                    Dili, Gasan, Marinduque</span> 
                    <span><strong>PHONE:</strong> +63927 6073 941</span> 
                    <span><strong>EMAIL:</strong><a href="#"> plesiretravel@gmail.com</a></span> 
                    <span><strong>WEB:</strong><a href="#"> www.plesiretravel.com</a></span>
                  </address>
              </div>
              <!-- address end -->
            
            
          </div>
        </div>
      </section>
      <!-- section contact end -->

       <!-- footer -->
      <footer class="main text-center">
        <div class="container-fluid m-5-hor">
          <div class="row">
          
          <div class="onStep" data-animation="fadeInUp" data-time="300">
          <div class="col-md-4 text-left">
          <span><a href="#">Email: plesiretravel@gmail.com</a></span>
          <span>Copyright - 2022 Plesire Travel All Right Reserved</span>
          </div>
          
          <div class="col-md-4">
                <span class="logo">
                <img alt="logo" src="img/logo-white.png">
                </span>
            </div>
            
            <div class="col-md-4 text-right">
              <span>Dili, Gasan, Marinduque</span>
              <span>Phone: +63927 6073 941</span>
            </div>
            </div>

            
          </div>
        </div>
      </footer>
      <!-- footer end -->
      
      
      <!-- ScrolltoTop -->
      <div id="totop" class="init">
        <span class="ti-angle-up"></span>
      </div>  

              <!-- modal login -->
              <div id="fLogin" class="modal fade">
                <div class="modal-dialog modal-login">
                  <div class="modal-content">
                    <div class="modal-header">      
                      <h4 class="modal-title">Member Log In</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                      <form action="#" method="post">
                        <div class="form-group">
                          <label>User Name</label>
                          <input type="text" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <input type="password" class="form-control" required="required">         
                        </div>
                        <div class="form-group">
                          <input type="submit" class="btn btn-primary btn-block btn-lg" value="Log In">
                        </div>
                      </form>       
                      
                    </div>
                    <div class="modal-footer">
                      <a href="#">or Sign Up</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal login end -->

              <!-- modal registration -->
              <div id="fsignUp" class="modal fade">
                <div class="modal-dialog modal-login">
                  <div class="modal-content">
                    <div class="modal-header">      
                      <h4 class="modal-title">Member Registration</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="firstname" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="lastname" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                        <label><input type="checkbox" name="terms"> I agree with the <a href="#">Terms and Conditions</a>.</label>
                        </div>
                        <div class="form-group"><input type="submit" value="Sign up" class="btn btn-primary btn-block btn-lg"></div>
                        <div class="clearfix"></div>
                      </form>       
                      
                    </div>
                    <div class="modal-footer">
                      <a href="#">or Log In</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal registration end -->      

     
    </div>
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