<?php
$page = "home";
$desc = "Home";
visitaSave($page);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php include APPLICATION_DIR . '/include/metatags.php'; ?>
        <!-- Web Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Font Awesome CSS -->
        <link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
        <!-- Plugins -->
        <link href="plugins/flexslider/flexslider.css" rel="stylesheet">
        <link href="css/animations.css" rel="stylesheet">
        <link href="plugins/owl-carousel/owl.carousel.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">
        <link href="css/skins/green.css" rel="stylesheet">

        <!-- Custom css --> 
        <link href="css/custom.css" rel="stylesheet">
        <?php include APPLICATION_DIR . '/include/icons.php'; ?>
    </head>

    <body class="front preload">
        <!-- page wrapper start (Add "boxed" class to page-wrapper in order to enable boxed layout mode) -->
        <div class="page-wrapper">
            <?php include APPLICATION_DIR . '/include/header.php'; ?>

            <!-- banner start -->
            <div class="banner">

                <!-- slideshow start -->
                <div class="slideshow fullwidth">

                    <!-- flexslider start -->
                    <div class="flexslider loading">
                        <ul class="slides">

                            <!-- first slide start -->
                            <li style="background-image:url('images/slider-1-slide-2.jpg');">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="caption-wrapper">
                                                <div class="caption caption-non-visible" data-caption-effect="fadeInDownSmall">
                                                    <h1>PRODUCERTA</h1>
                                                    <p>Do plantio a colheita. Conheça as vantagens de ser nosso parceiro.</p>
                                                    <a href="valores" class="btn btn-default btn-lg"> Vamos lá</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- first slide end -->

                            <!-- second slide start -->
                            <li style="background-image:url('images/slider-1-slide-3.jpg');">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="caption-wrapper">
                                                <div class="caption caption-non-visible" data-caption-effect="fadeInDownSmall">
                                                    <h1>MELHORES PREÇOS </h1>
                                                    <p>Estamos com excelente preços.</p>
                                                    <a href="insumos-produtos" class="btn btn-default btn-lg"> Vamos fazer negócio</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- second slide end -->

                            <!-- third slide start -->
                            <li style="background-image:url('images/slider-1-slide-1.jpg');">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="caption-wrapper">
                                                <div class="caption caption-non-visible" data-caption-effect="fadeInDownSmall">
                                                    <h1>POLÍTICA DE QUALIDADE</h1>
                                                    <p>Fornecer produtos e serviços com excelência em qualidade, atendendo às regulamentações 
                                                        aplicáveis, por meio de colaboradores treinados, promovendo o crescimento contínuo e 
                                                        sustentável para servir a seus clientes e fornecedores.</p>
                                                    <a href="nossa-equipe" class="btn btn-default btn-lg"> Nossa equipe</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>											
                            </li>
                            <!-- third slide start -->

                        </ul>
                    </div>
                    <!-- flexslider end -->

                </div>
                <!-- slideshow end -->

            </div>
            <!-- banner end -->

            <!-- main start -->
            <section class="main">

                <!-- section start -->
                <div class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="text-center">O que oferecemos</h1>
                                <div class="separator"></div>
                                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="icon-box">
                                            <i class="fa fa-arrows-alt object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="0"></i>
                                            <h2>Acompanhamento do plantio a colheita.</h2>
                                            <p>Voluptatem. ad provident non <a href="#">repudiandae</a> veritatis beatae cupiditate amet reiciendis.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="icon-box">
                                            <i class="fa fa-laptop object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200"></i>
                                            <h2>Assistência técnica</h2>
                                            <p>Iure sequi unde hic. Sapiente quaerat labore sequi inventore veritatis cumque.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="icon-box">
                                            <i class="fa fa-sitemap object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="400"></i>
                                            <h2>Profissionais altamente treinados.</h2>
                                            <p>Inventore dolores aut laboriosam cum consequuntur delectus sequi! Eum est.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- section end -->

                <!-- section start -->
                <div class="section bg-color-light">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-responsive center-block" src="images/section-image-1.png" alt="iVega">
                            </div>
                            <div class="col-md-6">
                                <h2>PRODUSHOW</h2>
                                <p class="space">Evento referência em novidades para o homem do campo da região central do Paraná.</p>
                                <a href="produshow" class="btn btn-default btn-lg">Ver mais</a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="bg-color-gray call-to-action">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <h2 class="text-center">Oferecemos mais , para atender todas as suas necessidades !</h2>
                                </div>
                                <div class="col-md-4 text-center">
                                    <a href="insumos-agricolas" class="btn btn-lg btn-white">Nossos produtos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="container">
                        <h1 class="text-center">Nossos serviços</h1>
                        <div class="separator"></div>
                        <p class="text-center">Nosso objetivo é atender da melhor forma possível a demanda do produtor rural.</p>
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <div class="icon-box-3 icon-right clearfix object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="0">
                                    <i class="fa fa-desktop"></i>
                                    <div class="text">
                                        <h4>Revenda de Insumos</h4>
                                        <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.</p>
                                    </div>
                                </div>
                                <div class="icon-box-3 icon-right clearfix object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="100">
                                    <i class="fa fa-bold"></i>
                                    <div class="text">
                                        <h4>Acompanhamento prévio de plantio</h4>
                                        <p class="small">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                                    </div>
                                </div>
                                <div class="icon-box-3 icon-right clearfix object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="200">
                                    <i class="fa fa-leaf"></i>
                                    <div class="text">
                                        <h4>Agricultura de precisão</h4>
                                        <p class="small">Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                                <div class="icon-box-3 icon-right clearfix object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="300">
                                    <i class="fa fa-cog"></i>
                                    <div class="text">
                                        <h4>Venda de todos os insumos agrícolas</h4>
                                        <p class="small">Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <img src="images/section-image-4.png" alt="ivega" class="object-non-visible center-block" data-animation-effect="fadeInDownSmall" data-effect-delay="400">
                            </div>							
                            <div class="col-sm-12 col-md-4">
                                <div class="icon-box-3 icon-left clearfix object-non-visible" data-animation-effect="fadeInRightSmall" data-effect-delay="0">
                                    <i class="fa fa-html5"></i>
                                    <div class="text">
                                        <h4>Venda de produtos veterinários </h4>
                                        <p class="small">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                                    </div>
                                </div>
                                <div class="icon-box-3 icon-left clearfix object-non-visible" data-animation-effect="fadeInRightSmall" data-effect-delay="100">
                                    <i class="fa fa-rocket"></i>
                                    <div class="text">
                                        <h4>Venda de máquinas e implementos agrícolas</h4>
                                        <p class="small">Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                                <div class="icon-box-3 icon-left clearfix object-non-visible" data-animation-effect="fadeInRightSmall" data-effect-delay="200">
                                    <i class="fa fa-file-o"></i>
                                    <div class="text">
                                        <h4>Assistência técnica de máquinas e implementos</h4>
                                        <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.</p>
                                    </div>
                                </div>
                                <div class="icon-box-3 icon-left clearfix object-non-visible" data-animation-effect="fadeInRightSmall" data-effect-delay="300">
                                    <i class="fa fa-gift"></i>
                                    <div class="text">
                                        <h4>Compra de cereais </h4>
                                        <p class="small">Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- section end -->

                <!-- section start -->
                <div class="section pb-clear">
                    <h1 class="text-center">Latest Projects</h1>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Voluptatum, eius, accusantium, inventore, in tempora alias ea</p>
                    <div class="img-boxes owl-carousel carousel">
                        <a href="portfolio-item.html" class="mask-wrapper">
                            <img src="images/portfolio-1.jpg" alt="">
                            <div class="mask">
                                <p>Lorem ipsum dolor sit amet</p>
                                <span>web desing</span>
                                <span class="triangle"><i class="fa fa-link"></i></span>
                            </div>
                        </a>
                        <a href="portfolio-item.html" class="mask-wrapper">
                            <img src="images/portfolio-2.jpg" alt="">
                            <div class="mask">
                                <p>Lorem ipsum dolor sit amet</p>
                                <span>web desing</span>
                                <span class="triangle"><i class="fa fa-link"></i></span>
                            </div>
                        </a>
                        <a href="portfolio-item.html" class="mask-wrapper">
                            <img src="images/portfolio-3.jpg" alt="">
                            <div class="mask">
                                <p>Lorem ipsum dolor sit amet</p>
                                <span>web desing</span>
                                <span class="triangle"><i class="fa fa-link"></i></span>
                            </div>
                        </a>
                        <a href="portfolio-item.html" class="mask-wrapper">
                            <img src="images/portfolio-4.jpg" alt="">
                            <div class="mask">
                                <p>Lorem ipsum dolor sit amet</p>
                                <span>web desing</span>
                                <span class="triangle"><i class="fa fa-link"></i></span>
                            </div>
                        </a>
                        <a href="portfolio-item.html" class="mask-wrapper">
                            <img src="images/portfolio-5.jpg" alt="">
                            <div class="mask">
                                <p>Lorem ipsum dolor sit amet</p>
                                <span>web desing</span>
                                <span class="triangle"><i class="fa fa-link"></i></span>
                            </div>
                        </a>
                        <a href="portfolio-item.html" class="mask-wrapper">
                            <img src="images/portfolio-6.jpg" alt="">
                            <div class="mask">
                                <p>Lorem ipsum dolor sit amet</p>
                                <span>web desing</span>
                                <span class="triangle"><i class="fa fa-link"></i></span>
                            </div>
                        </a>
                        <a href="portfolio-item.html" class="mask-wrapper">
                            <img src="images/portfolio-7.jpg" alt="">
                            <div class="mask">
                                <p>Lorem ipsum dolor sit amet</p>
                                <span>web desing</span>
                                <span class="triangle"><i class="fa fa-link"></i></span>
                            </div>
                        </a>
                        <a href="portfolio-item.html" class="mask-wrapper">
                            <img src="images/portfolio-8.jpg" alt="">
                            <div class="mask">
                                <p>Lorem ipsum dolor sit amet</p>
                                <span>web desing</span>
                                <span class="triangle"><i class="fa fa-link"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- section end -->

                <!-- section start -->
                <div class="section pb-clear pt-clear">
                    <div class="testimonials parallax">

                        <!-- flexslider start -->
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="testimonial">
                                                    <img src="images/testimonial-1.png" alt="">
                                                    <blockquote>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, ratione, nostrum amet saepe eum impedit adipisci inventore quisquam esse quasi reprehenderit quaerat.</p>
                                                    </blockquote>
                                                    <p class="author">-Lorem Ipsum, The Company</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="testimonial">
                                                    <img src="images/testimonial-2.png" alt="">
                                                    <blockquote>
                                                        <p>Vero, facilis, doloremque, voluptate, ab quisquam provident officia minima dolores perferendis quibusdam laborum.</p>
                                                    </blockquote>
                                                    <p class="author">-Uisquam Esse Quasi, The Big Company</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="testimonial">
                                                    <img src="images/testimonial-3.png" alt="">
                                                    <blockquote>
                                                        <p>Sit totam saepe natus ratione perspiciatis consequatur nam doloribus hic quaerat illum at animi accusantium.</p>
                                                    </blockquote>
                                                    <p class="author">-Maria Doe, The Company</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- flexslider end -->

                    </div>
                </div>
                <!-- section end -->

                <!-- section start -->
                <div class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="text-center">Why Choose Us</h1>
                                <div class="separator"></div>
                                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, voluptas, obcaecati <br> cumque ad voluptatibus molestiae minus architecto voluptatum provident.</p>
                                <br>
                                <div class="row">
                                    <div class="col-md-6 col-md-push-6">
                                        <img class="img-responsive center-block pb object-non-visible" data-animation-effect="fadeInUpSmall" src="images/section-image-2.png" alt="iVega">
                                    </div>
                                    <div class="col-md-6 col-md-pull-6">
                                        <h3>Uspendisse id sem elementum condimentum lorem</h3>
                                        <p>Sed eget pulvinar quam, vel feugiat enim. Aliquam erat volutpat. Phasellus eu porta ipsum. Suspendisse aliquet imperdiet commodo. Aenean vel lacinia elit. Class aptent taciti sociosqu ad litora torquent per. Vestibulum velmo.</p>
                                        <ul class="list-triangle">
                                            <li class="object-non-visible" data-animation-effect="fadeInUpSmall">Etiam sed dolor ac diam volutpat </li>
                                            <li class="object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">Sed eget pulvinar quam, vel feugiat enim aliquam </li>
                                            <li class="object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">Erat volutpat. Phasellus eu porta ipsum suspendisse aliquet imperdiet </li>
                                            <li class="object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="300">Phasellus eu porta ipsum. Suspendisse aliquet imperdiet commodo </li>
                                            <li class="object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="300">Quas voluptas obcaecati.</li>
                                            <li class="object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="300">aliquet imperdiet commodo.</li>
                                        </ul>
                                        <a href="page-about.html" class="btn btn-white btn-lg object-non-visible" data-animation-effect="flipInX"  data-effect-delay="200">Learn More</a>
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <h1 class="text-center space-top">Skills &amp; Stats</h1>
                                <div class="separator"></div>
                                <p class="text-center">Incidunt, mollitia, laboriosam, officiis adipisci ipsum ipsam ab ducimus dolor <br> omnis facere minus vero illo officia commodi voluptatem voluptate aliquam dicta suscipit.</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="space-top space-bottom">
                                            <h4>HTML5</h4>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-default" role="progressbar" data-animate-width="80%">
                                                    <span class="object-non-visible" data-animation-effect="fadeInLeftBig" data-effect-delay="700">80%</span>
                                                </div>
                                            </div>
                                            <h4>CSS3</h4>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-default" role="progressbar" data-animate-width="90%">
                                                    <span class="object-non-visible" data-animation-effect="fadeInLeftBig" data-effect-delay="700">90%</span>
                                                </div>
                                            </div>
                                            <h4>JQUERY</h4>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-default" role="progressbar" data-animate-width="75%">
                                                    <span class="object-non-visible" data-animation-effect="fadeInLeftBig" data-effect-delay="700">75%</span>
                                                </div>
                                            </div>
                                            <h4>PHP</h4>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-default" role="progressbar" data-animate-width="85%">
                                                    <span class="object-non-visible" data-animation-effect="fadeInLeftBig" data-effect-delay="700">85%</span>
                                                </div>
                                            </div>
                                            <h4>DESIGN</h4>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-default" role="progressbar" data-animate-width="80%">
                                                    <span class="object-non-visible" data-animation-effect="fadeInLeftBig" data-effect-delay="700">80%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="stats">
                                            <div class="stat-box bt-clear">
                                                <i class="fa fa-cloud-download"></i>
                                                <h5>downloads</h5>
                                                <span data-to="1525" data-speed="3000">0</span>
                                            </div>
                                            <div class="stat-box bt-clear br-clear">
                                                <i class="fa fa-user"></i>
                                                <h5>Users</h5>
                                                <span data-to="2651" data-speed="3000">0</span>
                                            </div>
                                            <div class="stat-box">
                                                <i class="fa fa-briefcase"></i>
                                                <h5>purchases</h5>
                                                <span data-to="1320" data-speed="3000">0</span>
                                            </div>
                                            <div class="stat-box br-clear">
                                                <i class="fa fa-thumbs-o-up"></i>
                                                <h5>likes</h5>
                                                <span data-to="3509" data-speed="3000">0</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- section end -->

            </section>
            <!-- main end -->
            <?php include APPLICATION_DIR . '/include/footer.php'; ?>
        </div>
        <!-- page wrapper end -->

        <!-- JavaScript files placed at the end of the document so the pages load faster
        ================================================== -->
        <!-- Jquery and Bootstap core js files -->
        <script type="text/javascript" src="plugins/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

        <!-- Modernizr javascript -->
        <script type="text/javascript" src="plugins/modernizr.js"></script>

        <!-- Flexslider javascript -->
        <script type="text/javascript" src="plugins/flexslider/jquery.flexslider.js"></script>

        <!-- Owl carousel javascript -->
        <script type="text/javascript" src="plugins/owl-carousel/owl.carousel.js"></script>

        <!-- Magnific Popup javascript -->
        <script type="text/javascript" src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- Appear javascript -->
        <script type="text/javascript" src="plugins/jquery.appear.js"></script>

        <!-- Count To javascript -->
        <script type="text/javascript" src="plugins/jquery.countTo.js"></script>

        <!-- Flowtype javascript -->
        <script type="text/javascript" src="plugins/flowtype.js"></script>   

        <!-- Parallax javascript -->
        <script src="plugins/jquery.parallax-1.1.3.js"></script>

        <!-- Contact form -->
        <script src="plugins/jquery.validate.js"></script>

        <!-- Initialization of Plugins -->
        <script type="text/javascript" src="js/template.js"></script>

    </body>
</html>
