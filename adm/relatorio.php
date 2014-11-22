<?php
//para verificar o login
include "login.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Relatórios | Administração</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Adminstração do site">
        <meta name="author" content="Neax Tecnologia">

        <!-- The styles -->
        <link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }
        </style>
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <link href="css/charisma-app.css" rel="stylesheet">
        <link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
        <link href='css/fullcalendar.css' rel='stylesheet'>
        <link href='css/fullcalendar.print.css' rel='stylesheet'  media='print'>
        <link href='css/chosen.css' rel='stylesheet'>
        <link href='css/uniform.default.css' rel='stylesheet'>
        <link href='css/colorbox.css' rel='stylesheet'>
        <link href='css/jquery.cleditor.css' rel='stylesheet'>
        <link href='css/jquery.noty.css' rel='stylesheet'>
        <link href='css/noty_theme_default.css' rel='stylesheet'>
        <link href='css/elfinder.min.css' rel='stylesheet'>
        <link href='css/elfinder.theme.css' rel='stylesheet'>
        <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
        <link href='css/opa-icons.css' rel='stylesheet'>
        <link href='css/uploadify.css' rel='stylesheet'>

        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- The fav icon -->
        <link rel="shortcut icon" href="img/favicon.ico">

    </head>

    <body>
        <?php include 'header.php'; ?>
        <div class="container-fluid">
            <div class="row-fluid">
                <?php include 'menu.php'; ?>

                <div id="content" class="span10">
                    <!-- content starts -->
                    <div>
                        <ul class="breadcrumb">
                            <li>
                                <a href="home.php">Relatórios</a> <span class="divider">/</span>
                            </li>
                            <li>
                                <a href="categorias.php">Estoque</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row-fluid sortable">		
                        <div class="box span12">
                            <div class="box-header well" data-original-title>
                                <h2><i class="icon-user"></i> Relatório de estoque</h2>
                                <div class="box-icon">
                                    <a href="#" class="btn btn-setting btn-round">
                                        <i class="icon-cog"></i></a>
                                    <a href="#" class="btn btn-minimize btn-round">
                                        <i class="icon-chevron-up"></i></a>
                                    <a href="#" class="btn btn-close btn-round">
                                        <i class="icon-remove"></i></a>
                                </div>
                            </div>
                            <div class="box-content">
                                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                                    <thead>
                                        <tr>
                                            <th>Produto</th>
                                            <th>R$ Unitário</th>
                                            <th>Físico</th>
                                            <th>Compra</th>
                                            <th>Ent. Futura</th>
                                            <th>Pedidos</th>
                                            <th>Saldo</th>
                                        </tr>
                                    </thead>   
                                    <tbody>
                                        <?php
                                        $url = "http://localhost:8080/AGROEXATA/site2/adm/cls.xml";
                                        $estq = simplexml_load_file($url);
                                        if (count($estq) > 0) {
                                            foreach ($estq as $l) {
                                                echo '<tr>';
                                                echo "<td>$l->dsProduto($l->cdProduto)</td>";
                                                echo "<td>$l->vlUnitario</td>";
                                                echo "<td>$l->qtEstoque</td>";
                                                echo "<td>$l->qtCompra</td>";
                                                echo "<td>$l->entreFutura</td>";
                                                echo "<td>$l->qtVenda</td>";
                                                $vl = str_replace('.','',$l->saldo);
                                                echo "<td>".(str_replace(',','.',$vl))."</td>";
                                                echo '</tr>';
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>            
                            </div>
                        </div><!--/span-->

                    </div><!--/row-->

                    <!-- content ends -->
                </div><!--/#content.span10-->
            </div><!--/fluid-row-->

            <?php include 'footer.php'; ?>

        </div><!--/.fluid-container-->

        <?php include 'importsjs.php'; ?>

    </body>
</html>
