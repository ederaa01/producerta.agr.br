<?php
$page = "contato";
$desc = "Contato";
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
        <link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
        <link href="css/animations.css" rel="stylesheet">
        <link href="plugins/owl-carousel/owl.carousel.css" rel="stylesheet">

        <!-- iVega core CSS file -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
        <link href="css/skins/green.css" rel="stylesheet">

        <!-- Custom css --> 
        <link href="css/custom.css" rel="stylesheet">
        <?php include APPLICATION_DIR . '/include/icons.php'; ?>
    </head>

    <body class="not-front preload">

        <!-- page wrapper start (Add "boxed" class to page-wrapper in order to enable boxed layout mode) -->
        <div class="page-wrapper">
            <?php include APPLICATION_DIR . '/include/header.php'; ?>

            <!-- main start -->
            <section class="main">

                <!-- page intro start -->
                <div class="page-intro">

                    <!-- google maps start -->
                    <div id="map-canvas"></div>
                    <!-- google maps end -->

                </div>
                <!--  page intro end -->

                <!-- main content wrapper start -->
                <div class="main-content-wrapper">
                    <div class="container">
                        <div class="row">

                            <!-- main content start -->
                            <section class="main-content col-md-8">
                                <h1 class="title">Deixe sua mensagem</h1>
                                <p>Deixe aqui o seu recado ou sugestão:</p>
                                <div class="alert alert-success hidden" id="contactSuccess">
                                    <strong>Sucesso!</strong> Sua mensgem foi enviada.
                                </div>
                                <div class="alert alert-error hidden" id="contactError">
                                    <strong>Erro!</strong> Houve um erro ao enviar a sua mensagem.
                                </div>
                                <div class="contact-form">
                                    <form id="contact-form" role="form">
                                        <div class="form-group name">
                                            <label for="name">Nome*</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="">
                                        </div>
                                        <div class="form-group email">
                                            <label for="email">Email*</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="">
                                        </div>
                                        <div class="form-group subject">
                                            <label for="subject">Assunto*</label>
                                            <input type="text" class="form-control" id="subject" name="subject" placeholder="">
                                        </div>
                                        <div class="form-group message">
                                            <label for="message">Mensagem*</label>
                                            <textarea class="form-control" rows="6" id="message" name="message" placeholder=""></textarea>
                                        </div>
                                        <input type="submit" value="Enviar" class="btn btn-default">
                                    </form>
                                </div>
                            </section>
                            <!-- main content end -->

                            <!-- sidebar start -->
                            <aside class="sidebar col-md-4">
                                <div class="side vertical-divider-left">
                                    <h3 class="title">Faça-nos uma visita</h3>
                                    <ul class="list">
                                        <li><strong>Producerta Ltda.</strong></li>
                                        <li><i class="fa fa-home pr-10"></i> Av. Getúlio Vargas, 559<br>Pitanga, PR</li>
                                        <li><i class="fa fa-phone pr-10"></i><abbr title="Telefone">Fone:</abbr> (42) 3646-1088</li>
                                    </ul>
                                    <ul class="list">
                                        <li><strong>Email</strong></li>
                                        <li><i class="fa fa-envelope pr-10"></i><a href="mailto:#">contato@producerta.agr.br</a></li>
                                    </ul>
                                    <ul class="social-links large">
                                        <li><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                        <li><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                        <li><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </aside>
                            <!-- sidebar end -->

                        </div>
                    </div>
                </div>
                <!-- main content wrapper end -->

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

        <!-- Google Maps javascript -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>       

        <!-- Contact form -->
        <script src="plugins/jquery.validate.js"></script>

        <!-- Initialization of Plugins -->
        <script type="text/javascript" src="js/template.js"></script>

    </body>
</html>
