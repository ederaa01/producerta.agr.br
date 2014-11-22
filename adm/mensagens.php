<?php
//para verificar o login
include "login.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Home | Mensagens</title>
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

        <!-- topbar ends -->
        <div class="container-fluid">
            <div class="row-fluid">

                <?php include 'menu.php'; ?>

                <div id="content" class="span10">
                    <!-- content starts -->
                    <div>
                        <ul class="breadcrumb">
                            <li>
                                <a href="home.php">Home</a> <span class="divider">/</span>
                            </li>
                            <li>
                                <a href="home.php">Informações</a> <span class="divider">/</span>
                            </li>
                            <li>
                                <a href="mensagens.php">Mensagens</a>
                            </li>
                        </ul>
                    </div>
                    <div class="sortable row-fluid">
                        <div class="box span12">
                            <div class="box-header well" data-original-title>
                                <h2><i class="icon-user"></i> Mensagens dos usuários do site</h2>
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
                                            <th>Data</th>
                                            <th>Nome</th>
                                            <th>Email</th>
                                            <th>Telefone</th>
                                            <th>Mensagem</th>
                                            <th>Ação</th>
                                        </tr>
                                    </thead>   
                                    <tbody>
                                        <?php
                                        $js = "";
                                        $db->query("select * from messages")->fetchAll();

                                        foreach ($db->data as $linha) {
                                            echo '<tr>';
                                            echo '<td>' . $linha["data"] . '</td>';
                                            echo '<td>' . $linha["nome"] . '</td>';
                                            echo '<td>' . $linha["email"] . '</td>';
                                            echo '<td>' . $linha["fone"] . '</td>';
                                            echo '<td>' . $linha["mensagem"] . '</td>';
                                            echo '<td class="center">
                                                <a class="btn btn-info btn-message' . $linha["id"] . ' " href="#">
                                                    <i class="icon-zoom-in icon-white"></i>  
                                                    Visualizar                                            
                                                </a>
                                            </td>';
                                            echo '</tr>';

                                            echo "<div class='modal hide fade' id='myModal" . $linha["id"] . "'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal'>×</button>
                    <h3>Mensagem do usuário do site</h3>
                </div>
                <div class='modal-body'>
                    <p><strong>Data:</strong> " . $linha["data"] . "</p>
                        <p><strong>Nome:</strong> " . $linha["nome"] . "</p>
                            <p><strong>Email:</strong> " . $linha["email"] . "</p>
                                <p><strong>Telefone:</strong> ".$linha["fone"]. "</p>
                                    <p><strong>Mensagem:</strong> ".$linha["mensagem"]. "</p>
                </div>
                <div class='modal-footer'>
                    <a href='#' class='btn' data-dismiss='modal'>Close</a>
                </div>
            </div>";
                                            $js = $js .
                                                    "$('.btn-message" . $linha["id"] . "').click(function(e){
                                                     e.preventDefault();
                                                     $('#myModal" . $linha["id"] . "').modal('show');
                                              });";
                                        }
                                        ?>
                                    </tbody>
                                </table>            
                            </div>
                        </div><!--/span-->

                    </div>
                    <!-- content ends -->
                </div><!--/#content.span10-->
            </div><!--/fluid-row-->

            <?php include 'footer.php'; ?>

        </div><!--/.fluid-container-->
        <?php
        include 'importsjs.php';
        echo "<script  type='text/javascript'>" . $js . "</script>";
        ?>

    </body>
</html>
