<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>QuikBake</title>

        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- custom css-->
        <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">

        <!-- font awesome for icons -->
        <link href="font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- flex slider css -->
        <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
        <!-- animated css  -->
        <link href="css/animate.css" rel="stylesheet" type="text/css" media="screen"> 
        <!--Revolution slider css-->
        <link href="rs-plugin/css/settings.css" rel="stylesheet" type="text/css" media="screen">
        <link href="css/rev-style.css" rel="stylesheet" type="text/css" media="screen">
        <!--google fonts-->


        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic' rel='stylesheet' type='text/css'>
        <!--owl carousel css-->
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
        <link href="css/owl.theme.css" rel="stylesheet" type="text/css" media="screen">
        <!--mega menu -->
        <link href="css/yamm.css" rel="stylesheet" type="text/css">
        <!--popups css-->
        <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

        <div id="header-top">
            <div class="container">
                <div class="top-bar">
                    <div class="pull-left sample-1right hidden-xs">
                        <a><i class="fa fa-phone"></i> Call us: <span class="colored-text">+02 34543454</span> </a> 
                        <a><i class="fa fa-envelope"></i> Mail us: <span class="colored-text">quikbake@domain.com</span> </a>
                    </div>
                    <div class="pull-right">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="search...">

                                <button type="button"><i class="fa fa-search"></i></button>

                            </div><!--input group-->
                        </form><!--form-->
                    </div>
                </div>
            </div>
        </div><!--top bar end hidden in small devices-->
        <!--navigation -->
        <!-- Static navbar -->
        <div class="navbar navbar-default navbar-static-top yamm sticky" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="img/logo.jpg" alt=“QuikBake”></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown active ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">home - revolution </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.html">Full width</a></li>
                                        <li><a href="home-revolution-boxed.html">Revolution Boxed</a></li>
                                        <li><a href="home-revolution-fullscreen.html">Revolution Fullscreen</a></li>
                                        <li><a href="ken-burns.html">Ken burns Slider</a></li>
                                    </ul>
                                </li>
                                <li><a href="home-carousel.html">Home - Carousel</a></li>
                                <li><a href="home-2.html">Home - Flex slider</a></li>
                                <li><a href="home-parallax.html">Home - Parallax</a></li>
                                <li><a href="home-video.html">Home - Video</a></li>
                                <li><a href="home-boxed.html">Home - Boxed</a></li>
                                <li><a href="home-events.html">Home - Events</a></li>                                 
                                <li><a href="home-shop.html">Home - Shop</a></li>
                                <li><a href="one-page/index.html">One page layout</a></li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Multi level menu </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"> menu level 2</a></li>
                                        <li class="dropdown-submenu">
                                            <a tabindex="-1" href="#">menu level 2 </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#"> menu level 3</a></li>
                                                <li><a href="#"> menu level 3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class=" dropdown-toggle" data-toggle="dropdown"><i class="fa fa-lock"></i> Sign In</a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-login-box animated fadeInUp">
                                <form role="form">
                                    <h4>Signin</h4>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="checkbox pull-left">
                                            <label>
                                                <input type="checkbox"> Remember me
                                            </label>
                                        </div>
                                        <a class="btn btn-theme-bg pull-right">Login</a>
                                        <!--                                        <button type="submit" class="btn btn-theme pull-right">Login</button>                 -->
                                        <div class="clearfix"></div>
                                        <hr>
                                        <p>Don't have an account! <a href="#">Register Now</a></p>
                                    </div>
                                </form>
                            </div>
                        </li> <!--menu login li end here-->
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--container-->
        </div><!--navbar-default-->


        <!--rev slider start-->

        <div class="fullwidthbanner">
            <div class="tp-banner">
                <ul>
                    <!-- SLIDE -->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 1">
                        <!-- MAIN IMAGE -->
                        <img src="rev-images/slider-5.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYER NR. 1 -->
                        <div class="caption modern_big_bluebg sfr tp-resizeme"
                             data-x="40"
                             data-y="70" 
                             data-speed="600"
                             data-start="1200"
                             data-end="9400"
                             data-endspeed="600">  Bringing baked goods to your doorstep
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="caption medium_bg_darkblue sfl medium tp-resizeme"
                             data-x="40"
                             data-y="170" 
                             data-speed="600"
                             data-start="1600"
                             data-end="9400"
                             data-endspeed="600"><i class="fa fa-check"></i>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="caption modern_big_redbg sfb medium tp-resizeme"
                             data-x="90"
                             data-y="170" 
                             data-speed="600"
                             data-start="1600"
                             data-end="9400"
                             data-endspeed="600">60+ Bakeries
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="caption medium_bg_darkblue sfl medium tp-resizeme"
                             data-x="40"
                             data-y="220" 
                             data-speed="600"
                             data-start="1800"
                             data-end="9400"
                             data-endspeed="600"><i class="fa fa-check"></i>
                        </div>

                        <!-- LAYER NR. 5 -->
                        <div class="caption modern_big_redbg sfb medium tp-resizeme"
                             data-x="90"
                             data-y="220" 
                             data-speed="600"
                             data-start="1800"
                             data-end="9400"
                             data-endspeed="600">100% Customer Satisfaction
                        </div>

                        <!-- LAYER NR. 6 -->
                        <div class="caption medium_bg_darkblue sfl medium tp-resizeme"
                             data-x="40"
                             data-y="270" 
                             data-speed="600"
                             data-start="2000"
                             data-end="9400"
                             data-endspeed="600"><i class="fa fa-check"></i>
                        </div>

                        <!-- LAYER NR. 7 -->
                        <div class="caption modern_big_redbg sfb medium tp-resizeme"
                             data-x="90"
                             data-y="270" 
                             data-speed="600"
                             data-start="2000"
                             data-end="9400"
                             data-endspeed="600">Easy access
                        </div>

                        <!-- LAYER NR. 8 -->
                        <div class="caption medium_bg_darkblue sfl medium tp-resizeme"
                             data-x="40"
                             data-y="320" 
                             data-speed="600"
                             data-start="2200"
                             data-end="9400"
                             data-endspeed="600"><i class="fa fa-check"></i>
                        </div>

                        <!-- LAYER NR. 9 -->
                        <div class="caption modern_big_redbg sfb medium tp-resizeme"
                             data-x="90"
                             data-y="320" 
                             data-speed="600"
                             data-start="2200"
                             data-end="9400"
                             data-endspeed="600">Flexibility
                        </div>

                        <!-- LAYER NR. 10 -->
                        <div class="caption modern_big_redbg sfb medium tp-resizeme"
                             data-x="40"
                             data-y="370" 
                             data-speed="600"
                             data-start="2400"
                             data-end="9400"
                             data-endspeed="600">And Much More...
                        </div>

                        <!-- LAYER NR. 11 -->
                        <div class="caption sfr tp-resizeme"
                             data-x="right"
                             data-y="center" 
                             data-speed="600"
                             data-start="2700"
                             data-end="9400"
                             data-endspeed="600"><img src="img/qb.jpg" alt="">
                        </div>
                    </li>
                    <!-- SLIDE -->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2">
                        <!-- MAIN IMAGE -->
                        <img src="rev-images/home-slide-2.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <div class="caption title-2 sft"
                             data-x="50"
                             data-y="110"
                             data-speed="1000"
                             data-start="1000"
                             data-easing="easeOutExpo">
                           Bringing baked goods <br>
                            to your doorstep
                        </div>



                        <div class="caption text sfl"
                             data-x="50"
                             data-y="250"
                             data-speed="1000"
                             data-start="1800"
                             data-easing="easeOutExpo">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.  <br>
                            lectus. Cras porta nisl at tincidunt tincidunt.  
                        </div>
                        <div class="caption sfb rev-buttons tp-resizeme"
                             data-x="50"
                             data-y="330"
                             data-speed="500"
                             data-start="1800"
                             data-easing="Sine.easeOut">
                            <a href="#" class="btn btn-theme-bg btn-lg">Purchase Now</a>
                        </div>

                        <div class="caption sfb rev-buttons tp-resizeme"
                             data-x="250"
                             data-y="330"
                             data-speed="500"
                             data-start="2100"
                             data-easing="Sine.easeOut">
                            <a href="#" class="btn border-white btn-lg">View features</a>
                        </div>

                    </li>
                    <!-- SLIDE -->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 3">
                        <!-- MAIN IMAGE -->
                        <img src="rev-images/slider-2.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <div class="caption sfb"
                             data-x="280"
                             data-y="295"
                             data-speed="1000"
                             data-start="1000"
                             data-easing="easeOutExpo">
                            <img src="rev-images/html5.png" alt="">
                        </div>

                        <div class="caption sfb"
                             data-x="700"
                             data-y="295"
                             data-speed="1000"
                             data-start="1400"
                             data-easing="easeOutExpo">
                            <img src="rev-images/bootstrap.png" alt="">
                        </div>

                        <div class="caption sfb"
                             data-x="480"
                             data-y="295"
                             data-speed="1000"
                             data-start="1800"
                             data-easing="easeOutExpo">
                            <img src="rev-images/css3.png" alt="">
                        </div>

                        <div class="caption title sft"
                             data-x="290"
                             data-y="70"
                             data-speed="1000"
                             data-start="2200"
                             data-easing="easeOutExpo">
                            Quikbake
                        </div>

                        <div class="caption subtitle sfr"
                             data-x="550"
                             data-y="80"
                             data-speed="1000"
                             data-start="2600"
                             data-easing="easeOutExpo">
                            <strong>Used latest<br>
                                technologies</strong>
                        </div>
                    </li>
                </ul>
            </div>
        </div><!--full width banner-->

        <!--end-->
        <!--end-->

        </div>

        <section class="fun-fact-wrap fun-facts-bg">
            <div class="container">               
                <div class="row">
                    <div class="col-md-3 margin20 facts-in">
                        <h3><span class="counter">500</span> +</h3>
                        <h4>Downloads</h4>
                    </div><!--facts in-->
                    <div class="col-md-3 margin20 facts-in">
                        <h3><span class="counter">2000</span></h3>
                        <h4>Happy Customers</h4>
                    </div><!--facts in-->
                    <div class="col-md-3 margin20 facts-in">
                        <h3><span class="counter">60</span> +</h3>
                        <h4>Valid layouts </h4>
                    </div><!--facts in-->
                    <div class="col-md-3 margin20 facts-in">
                        <h3><span class="counter">2500</span></h3>
                        <h4>Cups of tea</h4>
                    </div><!--facts in-->
                </div>
            </div>
        </section><!--fun facts-->
        <div class="divide70"></div>
        <div class="assan-features">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="center-heading">
                            <h2>Awesome features</h2>
                            <span class="center-line"></span>
                        </div>
                    </div>                   
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 margin20">
                        <div class="services-box wow animated fadeIn" data-wow-duration="700ms" data-wow-delay="100ms">
                            <div class="services-box-icon">
                                <i class="fa fa-image"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>Sliders</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.
                                </p>
                            </div>
                        </div><!--services box-->
                    </div><!--services col-->
                    <div class="col-md-4 col-sm-6 margin20">
                        <div class="services-box wow animated fadeIn" data-wow-duration="700ms" data-wow-delay="200ms">
                            <div class="services-box-icon">
                                <i class="fa fa-envelope"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>Advanced Forms</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.
                                </p>
                            </div>
                        </div><!--services box-->
                    </div><!--services col-->
                    <div class="col-md-4 col-sm-6 margin20">
                        <div class="services-box wow animated fadeIn" data-wow-duration="700ms" data-wow-delay="300ms">
                            <div class="services-box-icon">
                                <i class="fa fa-users"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>Customer Support</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.
                                </p>
                            </div>
                        </div><!--services box-->
                    </div><!--services col-->

                    <div class="col-md-4 col-sm-6 margin20">
                        <div class="services-box wow animated fadeIn" data-wow-duration="700ms" data-wow-delay="400ms">
                            <div class="services-box-icon">
                                <i class="fa fa-crop"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>Pixel perfect design</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.
                                </p>
                            </div>
                        </div><!--services box-->
                    </div><!--services col-->
                    <div class="col-md-4 col-sm-6 margin20">
                        <div class="services-box wow animated fadeIn" data-wow-duration="700ms" data-wow-delay="500ms">
                            <div class="services-box-icon">
                                <i class="fa fa-twitter"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>Bootstrap 3.3.2</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.
                                </p>
                            </div>
                        </div><!--services box-->
                    </div><!--services col-->
                    <div class="col-md-4 col-sm-6 margin20">
                        <div class="services-box wow animated fadeIn" data-wow-duration="700ms" data-wow-delay="600ms">
                            <div class="services-box-icon">
                                <i class="fa fa-flag"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>Font Awesome icons</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.

                                </p>

                            </div>
                        </div><!--services box-->
                    </div><!--services col-->
                </div><!--services row-->
            </div>
        </div><!--assan features-->
       
        <footer id="footer">
            <div class="container">

                <div class="row">
                    <div class="col-md-3 col-sm-6 margin30">
                        <div class="footer-col">
                            <h3>About assan</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.
                            </p>
                            <ul class="list-inline social-1">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>                        
                    </div><!--footer col-->
                    <div class="col-md-3 col-sm-6 margin30">
                        <div class="footer-col">
                            <h3>Contact</h3>

                            <ul class="list-unstyled contact">
                                <li><p><strong><i class="fa fa-map-marker"></i> Address:</strong> vaisahali, jaipur, 302012</p></li> 
                                <li><p><strong><i class="fa fa-envelope"></i> Mail Us:</strong> <a href="#">Support@designmylife.com</a></p></li>
                                <li> <p><strong><i class="fa fa-phone"></i> Phone:</strong> +91 1800 2345 2132</p></li>
                                <li> <p><strong><i class="fa fa-print"></i> Fax</strong> 1800 2345 2132</p></li>
                                <li> <p><strong><i class="fa fa-skype"></i> Skype</strong> assan.856</p></li>

                            </ul>
                        </div>                        
                    </div><!--footer col-->
                    <div class="col-md-3 col-sm-6 margin30">
                        <div class="footer-col">
                            <h3>Newsletter</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, 
                            </p>
                            <form role="form" class="subscribe-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter email to subscribe">
                                    <span class="input-group-btn">
                                        <button class="btn  btn-theme-dark btn-lg" type="submit">Ok</button>
                                    </span>
                                </div>
                            </form>
                        </div>                        
                    </div><!--footer col-->

                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="footer-btm">
                            <span>&copy;2015. QuikBake /span>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!--default footer end here-->
        <!--scripts and plugins -->
        <!--must need plugin jquery-->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate.min.js"></script> 
        <!--bootstrap js plugin-->
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>       
        <!--easing plugin for smooth scroll-->
        <script src="js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <!--sticky header-->
        <script type="text/javascript" src="js/jquery.sticky.js"></script>
        <!--flex slider plugin-->
        <script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
        <!--parallax background plugin-->
        <script src="js/jquery.stellar.min.js" type="text/javascript"></script>
        <!--very easy to use portfolio filter plugin -->
        <script src="js/jquery.mixitup.min.js" type="text/javascript"></script>
        <!--digit countdown plugin-->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <!--digit countdown plugin-->
        <script src="js/jquery.counterup.min.js" type="text/javascript"></script>
        <!--on scroll animation-->
        <script src="js/wow.min.js" type="text/javascript"></script> 


        <!--owl carousel slider-->
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>
        <!--popup js-->
        <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <!--you tube player-->
        <script src="js/jquery.mb.YTPlayer.min.js" type="text/javascript"></script>        
        <!--customizable plugin edit according to your needs-->
        <script src="js/custom.js" type="text/javascript"></script>

        <!--revolution slider plugins-->
        <script src="rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
        <script src="rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
        <script src="js/revolution-custom.js" type="text/javascript"></script>

    </body>
</html>
