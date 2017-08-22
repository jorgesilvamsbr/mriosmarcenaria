<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MRios Marcenaria</title>

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
                            <li class="list-inline-item"><a href="#"><i class="ion-ios-telephone"></i> (67) 3388-7625</a></li>
                            <li class="list-inline-item"><a href="#"><i class="ion-ios-email"></i> contato@mriosmarcenaria.com.br</a></li>
                        </ul>
                    </div><!--top left col end-->
                    <div class="col-sm-6 text-right">
                        <ul class="list-inline top-socials">
                            <li class="list-inline-item"><a href="https://www.facebook.com/mrios.marcenaria" target="_blank"><i class="ion-social-facebook"></i></a></li>
                        </ul>
                    </div><!--top social col end-->
                </div><!--row-->
            </div><!--container-->
        </div>
        <!--top bar end-->
        <section id="home" class="intro-ytp">
            <div class="video-overlay"></div>
            <div id="bgndVideo" class="player" data-property="{videoURL:'https://youtu.be/JGtj0g1iqPE',containment:'#home',showControls:false,autoPlay:true,loop:true,mute:true, startAt:1, opacity:1,quality:'default'}"></div>
            <div class="hero-inner">
                <div class="hero-content">
                    <div class="container text-center">
                        <div>
                            <img src="<?php echo base_url();?>assets/site/images/logo_grande.png" style="width: 160px;" />
                        </div>
                        <div class="flexslider">
                            <ul class="slides">
                                <li><h1>Eficiência e <span class="text-color">design</span></h1><p>Movéis pensados exclusivamente para você</p></li>
                                <li><h1>Entregas no  <span class="text-color">prazo</span></h1><p>Transformando o seu <b>sonho</b> em realidade</p></li>
                                <li><h1>Ambientes <span class="text-color">planejados</span></h1></li>
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
                <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/site/images/logo_grande.png" alt="logo" style="width: 50px;"></a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto scroll-to">
                        <li class="nav-item"><a data-scroll href="#home" class="nav-link active">Home</a></li>
                        <li class=" nav-item"><a data-scroll href="#agency" class="nav-link">Sobre</a></li>
                        <li class=" nav-item"><a data-scroll href="#services" class="nav-link">Serviços</a></li>
                        <li class=" nav-item"><a data-scroll href="#work" class="nav-link">Portfolio</a></li>
                        <li class=" nav-item"><a data-scroll href="#contact" class="nav-link">Contato</a></li>
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
                <h2 class="center-title scrollReveal sr-bottom">Quem nós somos</h2>
                <div class="center-border"></div>
                <div class="space-40"></div>
                <div>
                    <!-- Nav tabs -->
                    <ul class="list-inline text-center about-tabs justify-content-center nav margin-b-40" role="tablist">
                        <li role="presentation" class="nav-item"><a class="nav-link active" href="#about-agency" aria-controls="about-agency" role="tab" data-toggle="tab">Sobre nós</a></li>
                        <li role="presentation" class=" nav-item"><a class="nav-link" href="#process" aria-controls="process" role="tab" data-toggle="tab">Processo de criação</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="about-agency">
                            <div class="row">
                                <div class="col-md-8 offset-md-2 text-center">
                                    <p class="lead">
                                        Com mais de <span class="text-color">10 anos</span> de mercado a MRios Marcenaria é referência em produção de móveis planejados de alto padrão. A relação com os profissionais da área também é uma das grandes preocupações da empresa. Para que sempre tenhamos um bom relacionamento e principalmente um bom entendimento das necessidades locais, realizamos reuniões mensais de forma descontraída com arquitetos, decoradores, engenheiros e designers.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="process">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 margin-b-30">
                                    <div class="process-box">
                                        <h2><span class="text-color">1.</span> idea</h2>
                                        <p>
                                            Primeiro sentamos para discutir a ideia e elaboramos lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget suscipit neque, et feugiat nunc. Ut rutrum diam in tellus gravida viverra eu ut erat. Vivamus feugiat suscipit ex ut mattis.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 margin-b-30">
                                    <div class="process-box">
                                        <h2><span class="text-color">2.</span> Design</h2>
                                        <p>
                                            Primeiro sentamos para discutir a ideia e elaboramos lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget suscipit neque, et feugiat nunc. Ut rutrum diam in tellus gravida viverra eu ut erat. Vivamus feugiat suscipit ex ut mattis
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 margin-b-30">
                                    <div class="process-box">
                                        <h2><span class="text-color">3.</span> Desenvolvimento</h2>
                                        <p>
                                            Primeiro sentamos para discutir a ideia e elaboramos lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget suscipit neque, et feugiat nunc. Ut rutrum diam in tellus gravida viverra eu ut erat. Vivamus feugiat suscipit ex ut mattis
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 margin-b-30">
                                    <div class="process-box">
                                        <h2><span class="text-color">4.</span> Montagem</h2>
                                        <p>
                                            Primeiro sentamos para discutir a ideia e elaboramos lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget suscipit neque, et feugiat nunc. Ut rutrum diam in tellus gravida viverra eu ut erat. Vivamus feugiat suscipit ex ut mattis
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
        <div class="dzsparallaxer auto-init" data-options='{direction: "reverse"}' style="height: 350px;">

            <div class="divimage dzsparallaxer--target " style="width: 101%; height: 600px; background-image: url(<?php echo base_url();?>assets/site/images/bg-2.jpg)">
            </div>
            <div class=" parallax-text text-center center-it">
                <h2>" Aquele que trabalha é o homem feliz. O homem que é ocioso é o homem infeliz. "</h2>
            </div>
        </div>
        <!-- End Parallax -->

        <!--start services-->
        <section id="services">
            <div class="space-100"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 margin-b-50">
                        <h2 class="center-title">Como nós trabalhamos</h2>
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
                                        É um fato há muito estabelecido que um leitor será distraído pelo conteúdo legível de uma página ao olhar seu layout.
                                    </p>
                                </div>
                            </li><!--service col end with li-->
                            <li class="col-md-6 clearfix  scrollReveal sr-bottom sr-delay-1">
                                <i class="ion-images"></i>
                                <div class="content">
                                    <h4>Design</h4>
                                    <p>
                                        É um fato há muito estabelecido que um leitor será distraído pelo conteúdo legível de uma página ao olhar seu layout.
                                    </p>
                                </div>
                            </li><!--service col end with li-->
                            <li class="col-md-6 clearfix scrollReveal sr-bottom sr-delay-2">
                                <i class="ion-bag"></i>
                                <div class="content">
                                    <h4>E-commerce</h4>
                                    <p>
                                        É um fato há muito estabelecido que um leitor será distraído pelo conteúdo legível de uma página ao olhar seu layout.
                                    </p>
                                </div>
                            </li><!--service col end with li-->
                            <li class="col-md-6 clearfix scrollReveal sr-bottom sr-delay-3">
                                <i class="ion-hammer"></i>
                                <div class="content">
                                    <h4>Web Development</h4>
                                    <p>
                                        É um fato há muito estabelecido que um leitor será distraído pelo conteúdo legível de uma página ao olhar seu layout.
                                    </p>
                                </div>
                            </li><!--service col end with li-->
                            <li class="col-md-6 clearfix scrollReveal sr-bottom sr-delay-4">
                                <i class="ion-ios-people-outline"></i>
                                <div class="content">
                                    <h4>Free Support</h4>
                                    <p>
                                        É um fato há muito estabelecido que um leitor será distraído pelo conteúdo legível de uma página ao olhar seu layout.
                                    </p>
                                </div>
                            </li><!--service col end with li-->
                            <li class="col-md-6 clearfix scrollReveal sr-bottom sr-delay-5">
                                <i class="ion-iphone"></i>
                                <div class="content">
                                    <h4>App Development</h4>
                                    <p>
                                        É um fato há muito estabelecido que um leitor será distraído pelo conteúdo legível de uma página ao olhar seu layout.
                                    </p>
                                </div>
                            </li><!--service col end with li-->
                        </ul><!--service list end-->
                    </div>
                </div><!--row end-->
                <hr>
            </div>
        </section>
        <!--end services-->

        <div class="space-70"></div>

        <!--portfolio start-->
        <section id="work">
            <div class="work-header">
                <div class="container">
                    <h2 class="center-title person-col">Portfolio</h2>
                    <div class="center-border"></div>
                    <p class="text-center margin-b-20">Transformando sonhos em realidade </p>
                </div>
            </div><!--work header-->
            <!--filter start-->
            <div class="container">  
                <div id="js-filters-awesome-work" class="cbp-l-filters-work">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                        Todos
                    </div>
                    <div data-filter=".identity" class="cbp-filter-item">
                        Cozinhas <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".web-design" class="cbp-filter-item">
                        Quartos <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".graphic" class="cbp-filter-item">
                        Banheiros <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".logos" class="cbp-filter-item">
                        Salas <div class="cbp-filter-counter"></div>
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
                        <a href="<?php echo base_url();?>assets/site/ajax-awesome-work/project1.html" class="cbp-l-grid-work-title cbp-singlePage" rel="nofollow">Cozinha</a>
                        <div class="cbp-l-grid-work-desc">Cozinha</div>
                    </div><!--work item-->
                    <div class="cbp-item web-design logos">
                        <a href="<?php echo base_url();?>assets/site/ajax-awesome-work/project2.html" class="cbp-caption cbp-singlePage" rel="nofollow">
                            <div class="cbp-caption-defaultWrap">
                                <img src="<?php echo base_url();?>assets/site/images/w2.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap"></div>
                        </a>
                        <a href="<?php echo base_url();?>assets/site/ajax-awesome-work/project1.html" class="cbp-l-grid-work-title cbp-singlePage" rel="nofollow">Cozinha</a>
                        <div class="cbp-l-grid-work-desc">Cozinha</div>
                    </div><!--work item-->
                    <div class="cbp-item graphic logos">
                        <a href="<?php echo base_url();?>assets/site/ajax-awesome-work/project3.html" class="cbp-caption cbp-singlePage" rel="nofollow">
                            <div class="cbp-caption-defaultWrap">
                                <img src="<?php echo base_url();?>assets/site/images/w3.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap"></div>
                        </a>
                        <a href="<?php echo base_url();?>assets/site/ajax-awesome-work/project1.html" class="cbp-l-grid-work-title cbp-singlePage" rel="nofollow">Cozinha</a>
                        <div class="cbp-l-grid-work-desc">Cozinha</div>
                    </div><!--work item-->
                    <div class="cbp-item web-design graphic">
                        <a href="<?php echo base_url();?>assets/site/ajax-awesome-work/project4.html" class="cbp-caption cbp-singlePage" rel="nofollow">
                            <div class="cbp-caption-defaultWrap">
                                <img src="<?php echo base_url();?>assets/site/images/w4.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap"></div>
                        </a>
                        <a href="<?php echo base_url();?>assets/site/ajax-awesome-work/project1.html" class="cbp-l-grid-work-title cbp-singlePage" rel="nofollow">Cozinha</a>
                        <div class="cbp-l-grid-work-desc">Cozinha</div>
                    </div><!--work item-->
                    <div class="cbp-item identity web-design">
                        <a href="<?php echo base_url();?>assets/site/ajax-awesome-work/project5.html" class="cbp-caption cbp-singlePage" rel="nofollow">
                            <div class="cbp-caption-defaultWrap">
                                <img src="<?php echo base_url();?>assets/site/images/w5.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap"></div>
                        </a>
                        <a href="<?php echo base_url();?>assets/site/ajax-awesome-work/project1.html" class="cbp-l-grid-work-title cbp-singlePage" rel="nofollow">Cozinha</a>
                        <div class="cbp-l-grid-work-desc">Cozinha</div>
                    </div><!--work item-->
                    <div class="cbp-item identity web-design">
                        <a href="<?php echo base_url();?>assets/site/ajax-awesome-work/project6.html" class="cbp-caption cbp-singlePage" rel="nofollow">
                            <div class="cbp-caption-defaultWrap">
                                <img src="<?php echo base_url();?>assets/site/images/w6.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap"></div>
                        </a>
                        <a href="<?php echo base_url();?>assets/site/ajax-awesome-work/project1.html" class="cbp-l-grid-work-title cbp-singlePage" rel="nofollow">Cozinha</a>
                        <div class="cbp-l-grid-work-desc">Cozinha</div>
                    </div><!--work item-->
                </div><!--grid end-->

                <div id="js-loadMore-awesome-work" class="cbp-l-loadMore-button">
                    <a href="<?php echo base_url();?>assets/site/ajax-awesome-work/loadMore.html" class="cbp-l-loadMore-link" rel="nofollow">
                        <span class="cbp-l-loadMore-defaultText">Carregar Mais</span>
                        <span class="cbp-l-loadMore-loadingText">Carregando...</span>
                        <span class="cbp-l-loadMore-noMoreLoading">Não existem mais imagens</span>
                    </a>
                </div><!--work load more-->               
            </div><!--container end-->
        </section>
        <!--portfolio end-->
        <div class="space-100"></div>
        <hr>    
        <!--contact start-->
        <section id="contact" class="contact-section">
            <div class="space-100"></div>
            <div class="container">
                <div class="row margin-b-50">
                    <div class="col-sm-12 scrollReveal sr-bottom">
                        <h2 class="center-title">Fale conosco</h2>
                        <div class="center-border"></div>
                    </div>
                </div><!--row-->
                <div class="row">
                    <div class="col-md-5 offset-md-1 margin-b-30 scrollReveal sr-left">
                        <form method="post" action="#" class="xone-contact">
                            <div class="row">
                                <div class="col-sm-12">                                 
                                    <div class=" margin-b-20">
                                        <input type="text" name="name" class="form-control" placeholder="Nome completo...." />
                                    </div>
                                    <div class=" margin-b-20">
                                        <input type="text" name="email" class="form-control" placeholder="E-mail...." />
                                    </div>                          
                                </div>
                                <div class="col-sm-12">
                                    <textarea name="message" class="form-control margin-b-20" rows="5" placeholder="Menssagem...."></textarea>                                  
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <div class="data-status"></div> <!-- data submit status -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <button type="submit" name="submit" class="btn btn-lg btn-skin-border btn-block margin-b-20">Enviar Menssagem</button>
                                </div>
                            </div>
                        </form><!--form end-->
                    </div><!--form col end-->
                    <div class="col-md-5 offset-md-1 scrollReveal sr-right sr-delay-1">
                        <div class="contact-details">
                            <p class="lead">Rua da Divisão,  175<br> Parati.<br>(67) 99221-7861</p>
                            <p class="lead"><a href="#">contato@mriosmarcenaria.com.br</a></p>
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
                <div style="width: 100%; height: 400px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3736.3227365194116!2d-54.63186198507557!3d-20.533971886268493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9486e5749342cef1%3A0x2105badb158105c2!2sR.+da+Divis%C3%A3o%2C+475+-+Jardim+Parati%2C+Campo+Grande+-+MS!5e0!3m2!1spt-BR!2sbr!4v1503434792147" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </section>
            <!-- End Google Map -->
        </section>
        <!--contact end-->


        <!--footer start-->
        <footer class="footer">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-5 margin-b-30">
                        <span style="font-size:8px">&copy; Copyright 2017. xone by Design_mylife</span>
                    </div><!--copyright col-->
                    <div class="col-md-7 text-right">
                        <ul class="list-inline margin-b-30">
                            <li class="list-inline-item"><a href="#home">Home</a></li>
                            <li class="list-inline-item"><a href="#agency">Sobre</a></li>
                            <li class="list-inline-item"><a href="#services">Serviços</a></li>
                            <li class="list-inline-item"><a href="#work">Portfolio</a></li>
                            <li class="list-inline-item"><a href="#contact">Contato</a></li>
                        </ul>
                    </div><!--footer nav col-->
                </div><!--row-->
            </div><!--container-->
        </footer>
        <!--footer end-->

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
