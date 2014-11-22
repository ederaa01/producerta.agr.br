<?php
$page = "404";
$desc = "404 - Página não encontrada";
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

                <!-- page-intro start -->
                <div class="page-intro">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="page-title">404 - Página não encontrada</h1>
                            </div>
                            <div class="col-md-6">
                                <div class="breadcrumb-wrapper">
                                    <ol class="breadcrumb">
                                        <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                                        <li class="active">404 - Página não encontrada</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- page-intro end -->

                <!-- main-content-wrapper start -->
                <div class="main-content-wrapper">
                    <div class="container">
                        <div class="row">

                            <!-- main-content start -->
                            <section class="main-content col-md-8">
                                <div class="icon-box-2 pt-clear">
                                    <i class="fa fa-file"></i>
                                </div>
                                <h2 class="title">Nós não conseguimos encontrar o que você estava procurando.</h2>
                                <p>Infelizmente, a página que você estava procurando não pode ser encontrado. Ela pode estar temporariamente indisponível, movido ou não existem mais.</p>
                                <p>Verifique a URL digitada por quaisquer erros e tente novamente. Como alternativa, procurar o que está faltando ou dar uma olhada no nosso site.</p>
                                <a href="home" class="btn btn-lg btn-white">Ir ao início</a>
                            </section>
                            <!-- main-content end -->

                            <!-- sidebar start -->
                            <aside class="sidebar col-md-4">
                                <div class="side vertical-divider-left">
                                    <div class="block bb-clear">
                                        <h3>Links</h3>
                                        <nav>
                                            <ul class="nav nav-pills nav-stacked">
                                                <li><a href="index">Home</a></li>
                                                <li><a href="sobre">Sobre</a></li>
                                                <li><a href="noticias">Noticias</a></li>
                                                <li><a href="servicos">Serviços</a></li>
                                                <li><a href="negocios">Negócios</a></li>
                                                <li><a href="parceiros">Parceiros</a></li>
                                                <li><a href="contato">Contato</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </aside>
                            <!-- sidebar end -->

                        </div>
                    </div>
                </div>
                <!-- main-content-wrapper end -->

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

        <!-- Contact form -->
        <script src="plugins/jquery.validate.js"></script>

        <!-- Initialization of Plugins -->
        <script type="text/javascript" src="js/template.js"></script>

    </body>
</html>
