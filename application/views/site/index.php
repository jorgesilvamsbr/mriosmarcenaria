<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>xone - One page Parallax</title>

        <!-- plugins -->
        <link href="<?php echo base_url();?>assets/site/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/site/ionicons/css/ionicons.min.css" rel="stylesheet">        
        <link href="<?php echo base_url();?>assets/site/bower_components/flexslider/flexslider.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/site/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css">
        <link rel='stylesheet' type="text/css" href="<?php echo base_url();?>assets/site/dzsparallaxer/dzsparallaxer.css"/>
        <link href="<?php echo base_url();?>assets/site/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet">
        <!--main css file-->
        <link href="<?php echo base_url();?>assets/site/css/style.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body data-spy="scroll">
           <div id="preloader">
            <div id="preloader-inner"></div>
        </div><!--/preloader-->
        <!--top bar start-->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 hidden-sm-down">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#"><i class="ion-ios-telephone"></i> +01 555-5554</a></li>
                            <li class="list-inline-item"><a href="#"><i class="ion-ios-email"></i> support@xone.com</a></li>
                        </ul>
                    </div><!--top left col end-->
                    <div class="col-sm-6 text-right">
                        <ul class="list-inline top-socials">
                            <li class="list-inline-item"><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="ion-social-linkedin"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="ion-social-instagram"></i></a></li>
                        </ul>
                    </div><!--top social col end-->
                </div><!--row-->
            </div><!--container-->
        </div>
        <!--top bar end-->
        <section id="home" class="intro-ytp">
            <div class="video-overlay"></div>
            <div id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=668nUCeBHyY',containment:'#home',showControls:false,autoPlay:true,loop:true,mute:true, startAt:1, opacity:1,quality:'default'}"></div>
            <div class="hero-inner">
                <div class="hero-content">
                    <div class="container text-center">
                        <div class="flexslider">
                            <ul class="slides">
                                <li><h1>we are <span class="text-color">xone</span></h1><p>Minimal One Page Template</p></li>
                                <li><h1>Pixel perfect <span class="text-color">design</span></h1> <p>Smooth parallax effects</p></li>
                                <li><h1>digital <span class="text-color">agency</span> </h1><p>This text easy to change</p></li>
                            </ul><!--slides-->
                        </div><!--flex slider-->
                    </div><!--container-->
                </div><!--hero content-->
            </div><!--hero inner-->
            <div class="mouse-down"><a data-scroll href="#agency"><i class="ion-mouse"></i></a></div>
        </section>
        <!--intro youtube section end-->

        <!--  navbar -->
        <nav class="navbar navbar-toggleable-sm  navbar-default header-fullscreen sticky-header navbar-light bg-faded">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="<?php echo base_url();?>assets/site/images/logo.png" alt="logo"></a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto scroll-to">
                        <li class="nav-item"><a data-scroll href="#home" class="nav-link active">Home</a></li>
                        <li class=" nav-item"><a data-scroll href="#agency" class="nav-link">Agency</a></li>
                        <li class=" nav-item"><a data-scroll href="#services" class="nav-link">Services</a></li>
                        <li class=" nav-item"><a data-scroll href="#work" class="nav-link">Portfolio</a></li>
                        <li class=" nav-item"><a data-scroll href="#contact" class="nav-link">contact</a></li>
                        <li class="dropdown nav-item">
                            <span class="dropdown-toggle menu-drop-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More</span>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a class="dropdown-item" href="blog-standard.html">Blog Standard</a></li>
                                <li><a class="dropdown-item" href="blog-masonry.html">Blog Masonry</a></li>
                                <li><a class="dropdown-item" href="blog-single.html">blog-post</a></li>
                                <li><a class="dropdown-item" href="typography.html">Typography</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <!--end navigation-->


        <section id="agency">
            <div class="space-100"></div>
            <div class="container">
                <h2 class="center-title scrollReveal sr-bottom">Who we are</h2>
                <div class="center-border"></div>
                <div class="space-40"></div>
                <div>
                    <!-- Nav tabs -->
                    <ul class="list-inline text-center about-tabs justify-content-center nav margin-b-40" role="tablist">
                        <li role="presentation" class="nav-item"><a class="nav-link active" href="#about-agency" aria-controls="about-agency" role="tab" data-toggle="tab">About</a></li>
                        <li role="presentation" class=" nav-item"><a class="nav-link" href="#skills" aria-controls="skills" role="tab" data-toggle="tab">Skills</a></li>
                        <li role="presentation" class=" nav-item"><a class="nav-link" href="#process" aria-controls="process" role="tab" data-toggle="tab">Process</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="about-agency">
                            <div class="row">
                                <div class="col-md-8 offset-md-2 text-center">
                                    <p class="lead">
                                        We are <span class="text-color">Minimal Web agency</span> based In Sydney. We create awesome stuff for web & App Designs. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="skills">
                            <div class="col-md-8 offset-md-2 text-center">
                                <div class="progress clearfix">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                        <span class="skill-name">HTML5 / CSS3</span>  <span class="float-right value">80%</span>
                                    </div>
                                </div><!--progress bar-->
                                <div class="progress clearfix">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                        <span class="skill-name">Photoshop</span>  <span class="float-right value">70%</span>
                                    </div>
                                </div><!--progress bar-->
                                <div class="progress clearfix">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                        <span class="skill-name">Jquery</span>  <span class="float-right value">90%</span>
                                    </div>
                                </div><!--progress bar-->
                                <div class="progress clearfix">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:97%">
                                        <span class="skill-name">Tea</span>  <span class="float-right value">97%</span>
                                    </div>
                                </div><!--progress bar-->
                            </div>
                        </div><!--tab panel end-->
                        <div role="tabpanel" class="tab-pane" id="process">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 margin-b-30">
                                    <div class="process-box">
                                        <h2><span class="text-color">1.</span> idea</h2>
                                        <p>
                                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 margin-b-30">
                                    <div class="process-box">
                                        <h2><span class="text-color">2.</span> Design</h2>
                                        <p>
                                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 margin-b-30">
                                    <div class="process-box">
                                        <h2><span class="text-color">3.</span> Develop</h2>
                                        <p>
                                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 margin-b-30">
                                    <div class="process-box">
                                        <h2><span class="text-color">4.</span> Launch</h2>
                                        <p>
                                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div><!--tab panel end-->
                    </div><!--tab content end-->
                </div>
            </div><!--container end-->
            <div class="space-80"></div>
        </section>
        <!--end about section-->


        <!-- Parallax -->
        <div class="dzsparallaxer auto-init" data-options='{   direction: "reverse"}' style="height: 350px;">

            <div class="divimage dzsparallaxer--target " style="width: 101%; height: 600px; background-image: url(assets/site/assets/images/bg-2.jpg)">
            </div>
            <div class=" parallax-text text-center center-it">
                <h2>" A Super Simple Minimal One Page for Creative & Small Agencies "</h2>
            </div>
        </div>
        <!-- End Parallax -->

        <!--our team start-->
        <div class="team-wrapper">
            <div class="space-100"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3 margin-b-30">
                        <div class="person-col scrollReveal sr-bottom sr-ease-in-out-quad sr-delay-1">
                            <img src="<?php echo base_url();?>assets/site/images/team1.png" alt="" class="img-fluid">
                            <div class="person-overlay">
                                <div class="person-inner">
                                    <h4 class="text-uppercase">Carlos Smith</h4>
                                    <span>Project Manager</span>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#"><i class="ion-social-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="ion-social-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div><!--person overlay end-->
                        </div><!--person col end-->
                    </div><!--col-->
                    <div class="col-md-6 col-lg-3 margin-b-30">
                        <div class="person-col person-col scrollReveal sr-bottom sr-ease-in-out-quad sr-delay-2">
                            <img src="<?php echo base_url();?>assets/site/images/team2.png" alt="" class="img-fluid">
                            <div class="person-overlay">
                                <div class="person-inner">
                                    <h4 class="text-uppercase">Emily Doe</h4>
                                    <span>Cms-Developer</span>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#"><i class="ion-social-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="ion-social-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div><!--person overlay end-->
                        </div><!--person col end-->
                    </div><!--col-->
                    <div class="col-md-6 col-lg-3 margin-b-30">
                        <div class="person-col person-col scrollReveal sr-bottom sr-ease-in-out-quad sr-delay-3">
                            <img src="<?php echo base_url();?>assets/site/images/team3.png" alt="" class="img-fluid">
                            <div class="person-overlay">
                                <div class="person-inner">
                                    <h4 class="text-uppercase">Emily Doe</h4>
                                    <span>Co-founder</span>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#"><i class="ion-social-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="ion-social-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div><!--person overlay end-->
                        </div><!--person col end-->
                    </div><!--col-->
                    <div class="col-md-6 col-lg-3 margin-b-30">
                        <div class="person-col person-col scrollReveal sr-bottom sr-ease-in-out-quad sr-delay-4">
                            <img src="<?php echo base_url();?>assets/site/images/team4.png" alt="" class="img-fluid">
                            <div class="person-overlay">
                                <div class="person-inner">
                                    <h4 class="text-uppercase">John Doe</h4>
                                    <span>UI / UX Designer</span>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#"><i class="ion-social-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="ion-social-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div><!--person overlay end-->
                        </div><!--person col end-->
                    </div><!--col-->
                </div><!--row-->
            </div>
            <div class="space-70"></div>
        </div>
        <!--our team end-->

        <!--video tour-->
        <div class="dzsparallaxer auto-init" data-options='{   direction: "reverse"}' style="height: 350px;">

            <div class="divimage dzsparallaxer--target " style="width: 101%; height: 600px; background-image: url(assets/site/images/bg-2.jpg)">
            </div>
            <div class=" parallax-text text-center center-it">
                <h2>Take a video tour</h2>
                <a href="#" class="video-link" data-toggle="modal" data-target="#video-popup"><i class="ion-ios-play-outline"></i></a>
            </div>
        </div>
        <!--end vide tour-->

        <!--start services-->
        <section id="services">
            <div class="space-100"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 margin-b-50">
                        <h2 class="center-title">What we do</h2>
                        <div class="center-border"></div>
                    </div>
                </div><!--row end-->
                <div class="row">

                    <div class="col-md-8 offset-md-2">
                        <ul class="row list-unstyled services-list">
                            <li class="col-md-6 clearfix scrollReveal sr-bottom">
                                <i class="ion-ios-briefcase-outline"></i>
                                <div class="content">
                                    <h4>Marketing</h4>
                                    <p>
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                    </p>
                                </div>
                            </li><!--service col end with li-->
                            <li class="col-md-6 clearfix  scrollReveal sr-bottom sr-delay-1">
                                <i class="ion-images"></i>
                                <div class="content">
                                    <h4>Web Design</h4>
                                    <p>
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                    </p>
                                </div>
                            </li><!--service col end with li-->
                            <li class="col-md-6 clearfix scrollReveal sr-bottom sr-delay-2">
                                <i class="ion-bag"></i>
                                <div class="content">
                                    <h4>E-commerce</h4>
                                    <p>
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                    </p>
                                </div>
                            </li><!--service col end with li-->
                            <li class="col-md-6 clearfix scrollReveal sr-bottom sr-delay-3">
                                <i class="ion-hammer"></i>
                                <div class="content">
                                    <h4>Web Development</h4>
                                    <p>
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                    </p>
                                </div>
                            </li><!--service col end with li-->
                            <li class="col-md-6 clearfix scrollReveal sr-bottom sr-delay-4">
                                <i class="ion-ios-people-outline"></i>
                                <div class="content">
                                    <h4>Free Support</h4>
                                    <p>
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                    </p>
                                </div>
                            </li><!--service col end with li-->
                            <li class="col-md-6 clearfix scrollReveal sr-bottom sr-delay-5">
                                <i class="ion-iphone"></i>
                                <div class="content">
                                    <h4>App Development</h4>
                                    <p>
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                    </p>
                                </div>
                            </li><!--service col end with li-->
                        </ul><!--service list end-->
                    </div>
                </div><!--row end-->
                <hr>
                <div class="space-60"></div>
                <div class="text-center scrollReveal sr-bottom">
                    <h1 class="margin-b-20">Want to work with us</h1>
                    <a href="#" class="btn btn-dark-border btn-lg">Our Portfolio</a>
                </div>
            </div>
        </section>
        <!--end services-->

        <div class="space-70"></div>

        <!-- Parallax -->
        <div class="dzsparallaxer auto-init" data-options='{   direction: "reverse"}' style="height: 350px;">

            <div class="divimage dzsparallaxer--target " style="width: 101%; height: 600px; background-image: url(assets/images/bg-3.jpg)">
            </div>
            <div class=" parallax-text text-center center-it">
                <div class="testi-slider">
                    <ul class="slides">
                        <li>
                            <i class="ion-quote"></i>
                            <p>
                                " Great work done. Very clean design and super easy code help me to launch my site quickly. "
                            </p>
                            <h5>John Doe</h5>
                        </li><!--li-->
                        <li>
                            <i class="ion-quote"></i>
                            <p>
                                " A super clean full pack one page theme. great work. "
                            </p>
                            <h5>Emily</h5>
                        </li><!--li-->
                        <li>
                            <i class="ion-quote"></i>
                            <p>
                                " It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. "
                            </p>
                            <h5>Alex</h5>
                        </li><!--li-->
                    </ul>
                </div>
            </div><!--parallax text-->
        </div>
        <!-- End Parallax -->


        <!--pricing start-->
        <section class="pricing-wrapper">
            <div class="container">
                <div class="row flex-box">
                    <div class="col-md-4 d-flex align-middle margin-b-30">
                        <div class="price-box scrollReveal sr-scaleDown sr-ease-in-out-back">
                            <h3>Starter</h3>
                            <h1><sup>$</sup> 6</h1>
                            <ul class="list-unstyled">
                                <li>6 Months Support</li>
                                <li>2 Demos</li>
                                <li>Mailchimp Form</li>
                                <li>Php Contact Form</li>
                                <li>1 Domain</li>
                            </ul>
                            <div class="price-footer">
                                <a href="#" class="btn btn-lg btn-dark-border">Buy Now</a>
                            </div>
                        </div><!--price box-->
                    </div><!--price col-->
                    <div class="col-md-4 d-flex  align-middle margin-b-30">
                        <div class="price-box  scrollReveal sr-scaleDown sr-ease-in-out-back sr-delay-1">
                            <h3>Business</h3>
                            <span class="best-label">Best Value</span>
                            <h1><sup>$</sup> 21</h1>
                            <ul class="list-unstyled">
                                <li>12 Months Support</li>
                                <li>10 Demos</li>
                                <li>Mailchimp Form</li>
                                <li>Php Contact Form</li>
                                <li>5 Domain</li>
                            </ul>
                            <div class="price-footer">
                                <a href="#" class="btn btn-lg btn-dark-border">Buy Now</a>
                            </div>
                        </div><!--price box-->
                    </div><!--price col-->
                    <div class="col-md-4 d-flex  align-middle margin-b-30">
                        <div class="price-box scrollReveal sr-scaleDown sr-ease-in-out-back sr-delay-2">
                            <h3>Advanced</h3>
                            <h1><sup>$</sup> 49</h1>
                            <ul class="list-unstyled">
                                <li>Unlimited Support</li>
                                <li>20 Demos</li>
                                <li>Mailchimp Form</li>
                                <li>Php Contact Form</li>
                                <li>Unlimited Domain</li>
                            </ul>
                            <div class="price-footer">
                                <a href="#" class="btn btn-lg btn-dark-border">Buy Now</a>
                            </div>
                        </div><!--price box-->
                    </div><!--price col-->
                </div>

                <div class="row scrollReveal sr-bottom sr-delay-2">
                    <div class="col-md-8 offset-md-2 text-center">
                        <p class="margin-b-30">Get the latest offer from us <a data-toggle="collapse"  href="#newsletter" aria-expanded="false" aria-controls="newsletter">Subscribe</a></p>
                        <div class="collapse" id="newsletter">
                            <div class="newsletter-form">
                                <form role="form" method="post" action="#" class="subscribe-form  xone-newsletter">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="email" placeholder="Enter email to subscribe">
                                    </div>
                                    <div>
                                        <button class="btn btn-skin-border btn-lg" name="submit" type="submit">Notify me</button>
                                    </div>                          
                                </form>

                            </div>
                        </div>
                    </div>
                </div><!--row-->
            </div><!--container-->
        </section>
        <!--pricing end-->

        <div class="space-50"></div>

        <!--portfolio start-->
        <section id="work">
            <div class="work-header">
                <div class="container">
                    <h2 class="center-title person-col">Portfolio</h2>
                    <div class="center-border"></div>
                    <p class="text-center margin-b-20">Present your work in beautiful way </p>
                </div>
            </div><!--work header-->
            <!--filter start-->
            <div class="container">  
                <div id="js-filters-awesome-work" class="cbp-l-filters-work">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                        SHOW ALL
                    </div>
                    <div data-filter=".identity" class="cbp-filter-item">
                        IDENTITY <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".web-design" class="cbp-filter-item">
                        WEB DESIGN <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".graphic" class="cbp-filter-item">
                        GRAPHIC <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".logos" class="cbp-filter-item">
                        LOGO <div class="cbp-filter-counter"></div>
                    </div>
                </div><!--filter nav end-->

                <div id="js-grid-awesome-work" class="cbp cbp-l-grid-work">
                    <div class="cbp-item identity">
                        <a href="<?php echo base_url();?>assets/site/ajax-awesome-work/project1.html" class="cbp-caption cbp-singlePage" rel="nofollow">
                            <div class="cbp-caption-defaultWrap">
                                <img src="<?php echo base_url();?>assets/site/images/w1.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap"></div>
                        </a>
                        <a href="<?php echo base_url();?>assets/site/ajax-awesome-work/project1.html" class="cbp-l-grid-work-title cbp-singlePage" rel="nofollow">Project Title</a>
                        <div class="cbp-l-grid-work-desc">Web Design / Graphic</div>
                    </div><!--work item-->
                    <div class="cbp-item web-design logos">
                        <a href="<?php echo base_url();?>assets/site/ajax-awesome-work/project2.html" class="cbp-caption cbp-singlePage" rel="nofollow">
                            <div class="cbp-caption-defaultWrap">
                                <img src="<?php echo base_url();?>assets/site/images/w2.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap"></div>
                        </a>
                        <a href="<?php echo base_url();?>assets/site/ajax-awesome-work/project2.html" class="cbp-l-grid-work-title cbp-singlePage" rel="nofollow">Project Title</a>
                        <div class="cbp-l-grid-work-desc">Logo / Web Design</div>
                    </div><!--work item-->
                    <div class="cbp-item graphic logos">
                        <a href="<?php echo base_url();?>assets/site/ajax-awesome-work/project3.html" class="cbp-caption cbp-singlePage" rel="nofollow">
                            <div class="cbp-caption-defaultWrap">
                                <img src="<?php echo base_url();?>assets/site/images/w3.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap"></div>
                        </a>
                        <a href="<?php echo base_url();?>assets/site/ajax-awesome-work/project3.html" class="cbp-l-grid-work-title cbp-singlePage" rel="nofollow">Project Title</a>
                        <div class="cbp-l-grid-work-desc">Graphic / Logo</div>
                    </div><!--work item-->
                    <div class="cbp-item web-design graphic">
                        <a href="<?php echo base_url();?>assets/site/ajax-awesome-work/project4.html" class="cbp-caption cbp-singlePage" rel="nofollow">
                            <div class="cbp-caption-defaultWrap">
                                <img src="<?php echo base_url();?>assets/site/images/w4.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap"></div>
                        </a>
                        <a href="<?php echo base_url();?>assets/site/ajax-awesome-work/project4.html" class="cbp-l-grid-work-title cbp-singlePage" rel="nofollow">Project Title</a>
                        <div class="cbp-l-grid-work-desc">Web Design / Graphic</div>
                    </div><!--work item-->
                    <div class="cbp-item identity web-design">
                        <a href="<?php echo base_url();?>assets/site/ajax-awesome-work/project5.html" class="cbp-caption cbp-singlePage" rel="nofollow">
                            <div class="cbp-caption-defaultWrap">
                                <img src="<?php echo base_url();?>assets/site/images/w5.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap"></div>
                        </a>
                        <a href="<?php echo base_url();?>assets/site/ajax-awesome-work/project5.html" class="cbp-l-grid-work-title cbp-singlePage" rel="nofollow">Project Title</a>
                        <div class="cbp-l-grid-work-desc">Web Design / Identity</div>
                    </div><!--work item-->
                    <div class="cbp-item identity web-design">
                        <a href="<?php echo base_url();?>assets/site/ajax-awesome-work/project6.html" class="cbp-caption cbp-singlePage" rel="nofollow">
                            <div class="cbp-caption-defaultWrap">
                                <img src="<?php echo base_url();?>assets/site/images/w6.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap"></div>
                        </a>
                        <a href="<?php echo base_url();?>assets/site/ajax-awesome-work/project6.html" class="cbp-l-grid-work-title cbp-singlePage" rel="nofollow">Project Title</a>
                        <div class="cbp-l-grid-work-desc">Identity / Web Design</div>
                    </div><!--work item-->
                </div><!--grid end-->

                <div id="js-loadMore-awesome-work" class="cbp-l-loadMore-button">
                    <a href="<?php echo base_url();?>assets/site/ajax-awesome-work/loadMore.html" class="cbp-l-loadMore-link" rel="nofollow">
                        <span class="cbp-l-loadMore-defaultText">LOAD MORE</span>
                        <span class="cbp-l-loadMore-loadingText">LOADING...</span>
                        <span class="cbp-l-loadMore-noMoreLoading">NO MORE WORKS</span>
                    </a>
                </div><!--work load more-->               
            </div><!--container end-->
        </section>
        <!--portfolio end-->
        <div class="space-100"></div>
        <!--partners-->
        <section class="partners">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-xs-6 scrollReveal sr-bottom">
                        <a href="#">
                            <img src="<?php echo base_url();?>assets/site/images/cl-1.png" alt="" class="img-fluid">
                        </a>
                    </div><!--partner col-->
                    <div class="col-lg-2 col-md-4 col-xs-6  scrollReveal sr-bottom sr-delay-1">
                        <a href="#">
                            <img src="<?php echo base_url();?>assets/site/images/cl-2.png" alt="" class="img-fluid">
                        </a>
                    </div><!--partner col-->
                    <div class="col-lg-2 col-md-4 col-xs-6  scrollReveal sr-bottom sr-delay-2">
                        <a href="#">
                            <img src="<?php echo base_url();?>assets/site/images/cl-3.png" alt="" class="img-fluid">
                        </a>
                    </div><!--partner col-->
                    <div class="col-lg-2 col-md-4 col-xs-6  scrollReveal sr-bottom sr-delay-3">
                        <a href="#">
                            <img src="<?php echo base_url();?>assets/site/images/cl-4.png" alt="" class="img-fluid">
                        </a>
                    </div><!--partner col-->
                    <div class="col-lg-2 col-md-4 col-xs-6  scrollReveal sr-bottom sr-delay-4">
                        <a href="#">
                            <img src="<?php echo base_url();?>assets/site/images/cl-1.png" alt="" class="img-fluid">
                        </a>
                    </div><!--partner col-->
                    <div class="col-lg-2 col-md-4 col-xs-6  scrollReveal sr-bottom sr-delay-5">
                        <a href="#">
                            <img src="<?php echo base_url();?>assets/site/images/cl-2.png" alt="" class="img-fluid">
                        </a>
                    </div><!--partner col-->
                </div>
            </div>
        </section>
        <!--end partners-->

        <!--contact start-->
        <section id="contact" class="contact-section">
            <div class="space-100"></div>
            <div class="container">
                <div class="row margin-b-50">
                    <div class="col-sm-12 scrollReveal sr-bottom">
                        <h2 class="center-title">Say Hello!</h2>
                        <div class="center-border"></div>
                    </div>
                </div><!--row-->
                <div class="row">
                    <div class="col-md-5 offset-md-1 margin-b-30 scrollReveal sr-left">
                        <form method="post" action="#" class="xone-contact">
                            <div class="row">
                                <div class="col-sm-12">                                 
                                    <div class=" margin-b-20">
                                        <input type="text" name="name" class="form-control" placeholder="Full Name...." />
                                    </div>
                                    <div class=" margin-b-20">
                                        <input type="text" name="email" class="form-control" placeholder="Email Address...." />
                                    </div>                          
                                </div>
                                <div class="col-sm-12">
                                    <textarea name="message" class="form-control margin-b-20" rows="5" placeholder="Message...."></textarea>                                  
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <div class="data-status"></div> <!-- data submit status -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <button type="submit" name="submit" class="btn btn-lg btn-skin-border btn-block margin-b-20">Send Message</button>
                                </div>
                            </div>
                        </form><!--form end-->
                    </div><!--form col end-->
                    <div class="col-md-5 offset-md-1 scrollReveal sr-right sr-delay-1">
                        <div class="contact-details">
                            <p class="lead">Lorem Ipsum Street, <br> Park Ave.<br>(245) 485-493</p>
                            <p class="lead"><a href="#">hello@xone.com</a></p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="ion-social-linkedin-outline"></i></a></li>
                            </ul>
                        </div><!--contact detail-->
                    </div><!--contact detail col end-->
                </div>
            </div>
            <div class="space-40"></div>
            <!-- Google Map -->
            <section id="map">            
                <!-- Google Map ID -->
                <div id="google-map" style="width: 100%; height: 400px;"></div>
            </section>
            <!-- End Google Map -->
        </section>
        <!--contact end-->


        <!--footer start-->
        <footer class="footer">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-5 margin-b-30">
                        <span>&copy; Copyright 2017. xone by Design_mylife</span>
                    </div><!--copyright col-->
                    <div class="col-md-7 text-right">
                        <ul class="list-inline margin-b-30">
                            <li class="list-inline-item"><a href="#">Home</a></li>
                            <li class="list-inline-item"><a href="#">About</a></li>
                            <li class="list-inline-item"><a href="#">News</a></li>
                            <li class="list-inline-item"><a href="#">FAQ</a></li>
                            <li class="list-inline-item"><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div><!--footer nav col-->
                </div><!--row-->
            </div><!--container-->
        </footer>
        <!--footer end-->

        <!--modal of video-->
        <div class="modal video-modal fade" id="video-popup" tabindex="-1" role="dialog" aria-labelledby="video-popup">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="ion-close"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe id="vimeo-video" src="http://player.vimeo.com/video/57175742"></iframe>
                        </div>
                    </div><!--modal body-->
                </div><!--modal content-->
            </div><!--modal dialog-->
        </div>
        <!--end the modal of video-->

        <!--back to top-->
        <a href="#" class="scrollToTop"><i class="ion-android-arrow-dropup-circle"></i></a>
        <!--back to top end-->

        <!-- jQuery plugins-->
        <script src="<?php echo base_url();?>assets/site/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/site/bower_components/tether/dist/js/tether.min.js"></script>
        <script src="<?php echo base_url();?>assets/site/js/jquery-migrate.min.js"></script>
        <script src="<?php echo base_url();?>assets/site/js/jquery.easing.min.js"></script>
        <script src="<?php echo base_url();?>assets/site/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/site/bower_components/flexslider/jquery.flexslider-min.js"></script>
        <script src="<?php echo base_url();?>assets/site/js/modernizr.custom.97074.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/site/js/jquery.sticky.js"></script>
        <script src="<?php echo base_url();?>assets/site/js/smooth-scroll.min.js"></script>
        <script src="<?php echo base_url();?>assets/site/js/jquery.preloader.min.js"></script>
        <script src="<?php echo base_url();?>assets/site/bower_components/scrollreveal/dist/scrollreveal.min.js"></script>
        <script src="<?php echo base_url();?>assets/site/dzsparallaxer/dzsparallaxer.js" type="text/javascript"></script>      
        <script src="<?php echo base_url();?>assets/site/js/template-custom.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/site/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
        <script src="<?php echo base_url();?>assets/site/js/cube-awesome-work.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/site/js/scroll-reavel-custom.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="<?php echo base_url();?>assets/site/js/google-map.js"></script>
        <script src="<?php echo base_url();?>assets/site/js/contact.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/site/yt-player/jquery.mb.YTPlayer.js" type="text/javascript"></script>
        <script>
            $(function () {
                jQuery("#bgndVideo").YTPlayer();
            });
        </script>
    </body>
</html>
