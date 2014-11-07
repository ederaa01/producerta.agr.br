<?php
//para verificar o login
include "login.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Usuário | Administração</title>
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
                                <a href="home.php">Home</a> <span class="divider">/</span>
                            </li>
                            <li>
                                <a href="usuario.php">Usuários</a>
                            </li>
                        </ul>
                    </div>

                    <div class="row-fluid sortable">
                        <div class="box span12">
                            <div class="box-header well" data-original-title>
                                <h2><i class="icon-edit"></i> Cadastro de usuários</h2>
                                <div class="box-icon">
                                    <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                                    <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                                    <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                                </div>
                            </div>
                            <div class="box-content">
                                <form class="form-horizontal" action="dao/usuarioSave.php" method="post">
                                    <fieldset>
                                        <?php
                                        $id = "";
                                        $nome = "";
                                        $email = "";
                                        $login = "";
                                        $senha = "";
                                        if ($_GET) {
                                            $db->query("select * from usuario where id = " . (int) $_GET["id"] . " limit 1")->fetchAll();
                                            if ($db->rows > 0) {
                                                $id = $db->data[0]['id'];
                                                $nome = $db->data[0]['nome'];
                                                $email = $db->data[0]['email'];
                                                $login = $db->data[0]['login'];
                                                $senha = $db->data[0]['senha'];
                                            }
                                        }
                                        ?>
                                        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
                                        <div class="control-group">
                                            <label class="control-label" for="nome">Nome completo</label>
                                            <div class="controls">
                                                <input type="text" class="span6" name="nome" id="nome" value="<?php echo $nome; ?>">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="email">Email</label>
                                            <div class="controls">
                                                <div class="input-prepend">
                                                    <span class="add-on">@</span>
                                                    <input name="email" id="email" size="16" type="text" value="<?php echo $email; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="login">Usuário</label>
                                            <div class="controls">
                                                <input type="text" class="span3" name="login" id="login" value="<?php echo $login; ?>">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="senha">Senha</label>
                                            <div class="controls">
                                                <input type="password" class="span3" name="senha" id="senha" value="<?php echo $senha; ?>">
                                            </div>
                                        </div>

                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-primary">Salvar</button>
                                            <button type="reset" class="btn">Cancelar</button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div><!--/span-->
                    </div><!--/row-->
                    <div class="row-fluid sortable">		
                        <div class="box span12">
                            <div class="box-header well" data-original-title>
                                <h2><i class="icon-user"></i> Usuários</h2>
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
                                            <th>Nome</th>
                                            <th>Email</th>
                                            <th>Usuário</th>
                                            <th>Senha</th>
                                            <th>Acões</th>
                                        </tr>
                                    </thead>   
                                    <tbody>
                                        <?php
                                        $db->query("select * from usuario")->fetchAll();
                                        foreach ($db->data as $linha) {
                                            echo '<tr>';
                                            echo '<td>' . $linha["nome"] . '</td>';
                                            echo '<td>' . $linha["email"] . '</td>';
                                            echo '<td>' . $linha["login"] . '</td>';
                                            echo '<td>' . (empty($linha["senha"]) ? '<span class="label label-warning">Indefinida</span>' : '<span class="label label-success">Definida</span>') . '</td>';
                                            echo '<td class="center">
                                                <a class="btn btn-info" href="usuario.php?id=' . $linha["id"] . '">
                                                    <i class="icon-edit icon-white"></i>  
                                                    Alterar                                            
                                                </a>
                                                <a class="btn btn-danger" href="dao/usuarioDel.php?id=' . $linha["id"] . '">
                                                    <i class="icon-trash icon-white"></i> 
                                                    Excluir
                                                </a>
                                            </td>';
                                            echo '</tr>';
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
