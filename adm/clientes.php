<?php
//para verificar o login
include "login.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Clientes | Administração</title>
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
                                <a href="clientes.php">Clientes</a>
                            </li>
                        </ul>
                    </div>

                    <div class="row-fluid sortable">
                        <div class="box span12">
                            <div class="box-header well" data-original-title>
                                <h2><i class="icon-edit"></i> Cadastro de Clientes</h2>
                                <div class="box-icon">
                                    <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                                    <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                                    <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                                </div>
                            </div>
                            <div class="box-content">
                                <form id="form_cliente" name="form_cliente"class="form-horizontal" action="dao/clienteSave.php" method="POST">
                                    <fieldset>
                                        <?php
                                        $id = "";
                                        $razao = "";
                                        $fantasia = "";
                                        $email = "";
                                        $cnpj = "";
                                        $ie = "";
                                        $fone = "";
                                        $endereco = "";
                                        $cidade = "";
                                        $uf = "";
                                        $cep = "";
                                        $ramos = "";
                                        $dtlicenca = "";
                                        $dtultconsulta = "";
                                        $modBloq = "";
                                        $msgcliente = "";
                                        $ip = "";
                                        $diasExcederLicenca = "";
                                        if ($_GET) {
                                            $db->query("select * from cliente where id = " . (int) $_GET["id"] . " limit 1")->fetchAll();
                                            if ($db->rows > 0) {
                                                $id = $db->data[0]['id'];
                                                $razao = $db->data[0]['razao'];
                                                $fantasia = $db->data[0]['fantasia'];
                                                $email = $db->data[0]['email'];
                                                $cnpj = $db->data[0]['cnpj'];
                                                $ie = $db->data[0]['ie'];
                                                $endereco = $db->data[0]['endereco'];
                                                $cidade = $db->data[0]['cidade'];
                                                $uf = $db->data[0]['uf'];
                                                $cep = $db->data[0]['cep'];
                                                $fone = $db->data[0]['fone'];
                                                $ramos = $db->data[0]['ramos'];
                                                $dtlicenca = $db->data[0]['dtlicenca'];
                                                $dtultconsulta = $db->data[0]['dtultconsulta'];
                                                $modBloq = $db->data[0]['modulosbloqueio'];
                                                $msgcliente = $db->data[0]['msgcliente'];
                                                $ip = $db->data[0]['ip'];
                                                $diasExcederLicenca = $db->data[0]['diasExcederLicenca'];
                                                if (!empty($dtlicenca)) {
                                                    $dt = explode("-", $dtlicenca);
                                                    $dtlicenca = $dt[2] . "/" . $dt[1] . "/" . $dt[0];
                                                }
                                                if (!empty($dtultconsulta)) {
                                                    $dt = date_parse($dtultconsulta);
                                                    $dia = $dt["day"]+100;
                                                    $dia = substr($dia,1,2);
                                                    $mes = $dt["month"]+100;
                                                    $mes = substr($mes,1,2);
                                                    $dtultconsulta = $dia . "/" . $mes . "/" . $dt["year"];
                                                }
                                            }
                                        }
                                        ?>
                                        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
                                        <div class="control-group">
                                            <label class="control-label" for="razao">Razão Social</label>
                                            <div class="controls">
                                                <input type="text" class="span6" name="razao" id="nome" value="<?php echo $razao; ?>">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="fantasia">Nome Fantasia</label>
                                            <div class="controls">
                                                <input type="text" class="span6" name="fantasia" id="fantasia" value="<?php echo $fantasia; ?>">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="cnpj">CNPJ</label>
                                            <div class="controls">
                                                <input type="text" class="span4" maxlength="20" name="cnpj" id="cnpj" value="<?php echo $cnpj; ?>">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="ie">Inscrição Est.</label>
                                            <div class="controls">
                                                <input type="text" class="span4" maxlength="20" name="ie" id="ie" value="<?php echo $ie; ?>">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="cep">CEP</label>
                                            <div class="controls">
                                                <input class="span2" name="cep" id="cep" maxlength="10" type="text" value="<?php echo $cep; ?>">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="endereco">Endereço</label>
                                            <div class="controls">
                                                <input class="span6" name="endereco" id="endereco" maxlength="80" type="text" value="<?php echo $endereco; ?>">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="cidade">Cidade</label>
                                            <div class="controls">
                                                <input class="span6" name="cidade" id="cidade" maxlength="50" type="text" value="<?php echo $cidade; ?>">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="uf">UF</label>
                                            <div class="controls">
                                                <div class="input-prepend">
                                                    <input name="uf" class="span3" id="uf" maxlength="16" type="text" value="<?php echo $uf; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="email">Email</label>
                                            <div class="controls">
                                                <div class="input-prepend">
                                                    <span class="add-on">@</span>
                                                    <input name="email" id="email" maxlength="16" type="text" value="<?php echo $email; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="fone">Telefone</label>
                                            <div class="controls">
                                                <input type="text" class="span3" name="fone" id="fone" value="<?php echo $fone; ?>">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="ramos">Ramo(s) Atividade</label>
                                            <div class="controls">
                                                <input type="text"  name="ramos" id="ramos" value="<?php echo $ramos; ?>">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="dtlicenca">Dt. Exp. Licença</label>
                                            <div class="controls">
                                                <input class="input-xlarge datepicker" type="text"  name="dtlicenca" id="dtlicenca" value="<?php echo $dtlicenca; ?>">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="diasExcederLicenca">Dias após Exp.</label>
                                            <div class="controls">
                                                <input class="span2" maxlength="2" type="text"  name="diasExcederLicenca" id="diasExcederLicenca" value="<?php echo $diasExcederLicenca; ?>">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="modulosbloqueio">Bloquear</label>
                                            <div class="controls">
                                                <select class="span12" id="modulosbloqueio" name="modulosbloqueio" multiple="multiple" data-rel="chosen">
                                                    <option <?php echo strstr($modBloq, "TODOS") != NULL ? "selected='selected'" : ""; ?> value="TODOS">Todos os módulos</option>
                                                    <option <?php echo strstr($modBloq, "FATU1008") != NULL ? "selected='selected'" : ""; ?> value="FATU1008">Emissor de NF-e</option>
                                                    <option <?php echo strstr($modBloq, "FATURA") != NULL ? "selected='selected'" : ""; ?> value="FATURA">Faturamento</option>
                                                    <option <?php echo strstr($modBloq, "CARPED") != NULL ? "selected='selected'" : ""; ?> value="CARPED">Pedido de Venda</option>
                                                    <option <?php echo strstr($modBloq, "CONREC") != NULL ? "selected='selected'" : ""; ?> value="CONREC">Contas à Receber</option>
                                                    <option <?php echo strstr($modBloq, "CONPAG") != NULL ? "selected='selected'" : ""; ?> value="CONPAG">Contas à Pagar</option>
                                                    <option <?php echo strstr($modBloq, "ESTOQUE") != NULL ? "selected='selected'" : ""; ?> value="ESTOQUE">Nota de Entrada</option>
                                                    <option <?php echo strstr($modBloq, "CAIXA") != NULL ? "selected='selected'" : ""; ?> value="CAIXA">Caixa</option>
                                                    <option <?php echo strstr($modBloq, "AGRICOLA") != NULL ? "selected='selected'" : ""; ?> value="AGRICOLA">Agrícola</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="dtultconsulta">Dt. Ult. Consulta</label>
                                            <div class="controls">
                                                <input class="input-xlarge datepicker disabled" type="text" name="dtultconsulta" id="dtultconsulta" value="<?php echo $dtultconsulta; ?>">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="dtultconsulta">IP</label>
                                            <div class="controls">
                                                <input class="span3" name="ip" id="ip" maxlength="50" type="text" value="<?php echo $ip; ?>">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="msgcliente">Mensagem p/ Cliente</label>
                                            <div class="controls">
                                                <textarea class="cleditor" maxlength="300" id="msgcliente" name="msgcliente" rows="3"><?php echo $msgcliente; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button id="btSaveCliente" class="btn btn-primary">Salvar</button>
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
                                <h2><i class="icon-user"></i> Clientes</h2>
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
                                            <th>Razão</th>
                                            <th>Fantasia</th>
                                            <th>cnpj</th>
                                            <th>Licença</th>
                                            <th>Cidade - UF</th>
                                            <th>Fone</th>
                                            <th>Acões</th>
                                        </tr>
                                    </thead>   
                                    <tbody>
                                        <?php
                                        $db->query("select * from cliente")->fetchAll();
                                        if (!empty($db->data)) {
                                            foreach ($db->data as $linha) {
                                                $dtL = $linha["dtlicenca"];
                                                if (!empty($dtL)) {
                                                    $dt = explode("-", $dtL);
                                                    $dtL = $dt[2] . "/" . $dt[1] . "/" . $dt[0];
                                                }
                                                echo '<tr>';
                                                echo '<td>' . $linha["razao"] . '</td>';
                                                echo '<td>' . $linha["fantasia"] . '</td>';
                                                echo '<td>' . $linha["cnpj"] . '</td>';
                                                echo '<td>' . $dtL . '</td>';
                                                echo '<td>' . $linha["cidade"] . "-" . $linha["uf"] . '</td>';
                                                echo '<td>' . $linha["fone"] . '</td>';
                                                echo '<td class="center">
                                                <a class="btn btn-info" href="clientes.php?id=' . $linha["id"] . '">
                                                    <i class="icon-edit icon-white"></i>               
                                                </a>
                                                <a class="btn btn-danger" href="dao/clienteDel.php?id=' . $linha["id"] . '">
                                                    <i class="icon-trash icon-white"></i> 
                                                </a>
                                            </td>';
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