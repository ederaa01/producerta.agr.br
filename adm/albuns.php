<?php
include "login.php";

if (isset($_GET['create']) && !empty($_POST['new'])) {
    $album_name = trim(preg_replace('/\s+/', ' ', $_POST['new']));
    if ($album_name != "") {
        $db->query("insert into albuns (album_name) values ('$album_name');");
        $album_id = mysql_insert_id();
        @header("Location: albuns.php?edit=$album_id");
    }
}

if (isset($_GET['delete']) && !empty($_GET['delete'])) {
    $album_id = $_GET['delete'];
    $db->query("select * from fotos where foto_album = $album_id")->fetchAll();
    if ($db->rows >= 1) {
        foreach ($db->data as $foto) {
            $f = (object) $foto;
            $file = "../assets/img/fotos/$f->foto_url";
            if (file_exists($file)) {
                @unlink($file);
            }
            $file = "../assets/img/fotos/thumb/$f->foto_thumb";
            if (file_exists($file)) {
                @unlink($file);
            }
        }
    }
    $db->query("delete from albuns where album_id = $album_id");
    @header("Location: albuns.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Albuns | Administração</title>
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
        <link href="css/admin.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <link href="css/charisma-app.css" rel="stylesheet">
        <link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
        <link href='css/fullcalendar.css' rel='stylesheet'>
        <link href='css/fullcalendar.print.css' rel='stylesheet'  media='print'>
        <link href='css/chosen.css' rel='stylesheet'>
        <!--        <link href='css/uniform.default.css' rel='stylesheet'>-->
        <link href='css/colorbox.css' rel='stylesheet'>
        <link href='css/jquery.cleditor.css' rel='stylesheet'>
        <link href='css/jquery.noty.css' rel='stylesheet'>
        <link href='css/noty_theme_default.css' rel='stylesheet'>
        <link href='css/elfinder.min.css' rel='stylesheet'>
        <link href='css/elfinder.theme.css' rel='stylesheet'>
        <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
        <link href='css/opa-icons.css' rel='stylesheet'>
        <link href='css/uploadify.css' rel='stylesheet'>
        <!--Generic libs--> 
        <script type="text/javascript" src="tpl/js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="tpl/js/html5.js"></script>
        <script type="text/javascript" src="tpl/js/old-browsers.js"></script>
        <!--Template core functions--> 
        <!--<script type="text/javascript" src="tpl/js/common.js"></script>-->
        <script type="text/javascript" src="tpl/js/jquery.tip.js"></script>
        <!--<script type="text/javascript" src="tpl/js/standard.js"></script>-->

        <!-- jQuery -->
        <script src="js/jquery-1.7.2.min.js"></script>
        <!-- jQuery UI -->
        <script src="js/jquery-ui-1.8.21.custom.min.js"></script>
        <!-- transition / effect library -->
        <script src="js/bootstrap-transition.js"></script>
        <!-- alert enhancer library -->
        <script src="js/bootstrap-alert.js"></script>
        <!-- modal / dialog library -->
        <script src="js/bootstrap-modal.js"></script>
        <!-- custom dropdown library -->
        <script src="js/bootstrap-dropdown.js"></script>
        <!-- scrolspy library -->
        <script src="js/bootstrap-scrollspy.js"></script>
        <!-- library for creating tabs -->
        <script src="js/bootstrap-tab.js"></script>
        <!-- library for advanced tooltip -->
        <script src="js/bootstrap-tooltip.js"></script>
        <!-- popover effect library -->
        <script src="js/bootstrap-popover.js"></script>
        <!-- button enhancer library -->
        <script src="js/bootstrap-button.js"></script>
        <!-- accordion library (optional, not used in demo) -->
        <script src="js/bootstrap-collapse.js"></script>
        <!-- carousel slideshow library (optional, not used in demo) -->
        <script src="js/bootstrap-carousel.js"></script>
        <!-- autocomplete library -->
        <script src="js/bootstrap-typeahead.js"></script>
        <!-- tour library -->
        <script src="js/bootstrap-tour.js"></script>
        <!-- library for cookie management -->
        <script src="js/jquery.cookie.js"></script>
        <!-- calander plugin -->
        <script src='js/fullcalendar.min.js'></script>
        <!-- data table plugin -->
        <script src='js/jquery.dataTables.min.js'></script>

        <!-- chart libraries start -->
        <script src="js/excanvas.js"></script>
        <script src="js/jquery.flot.min.js"></script>
        <script src="js/jquery.flot.pie.min.js"></script>
        <script src="js/jquery.flot.stack.js"></script>
        <script src="js/jquery.flot.resize.min.js"></script>
        <!-- chart libraries end -->

        <!-- select or dropdown enhancer -->
        <script src="js/jquery.chosen.min.js"></script>
        <!-- checkbox, radio, and file input styler -->
        <script src="js/jquery.uniform.min.js"></script>
        <!-- plugin for gallery image view -->
        <script src="js/jquery.colorbox.min.js"></script>
        <!-- rich text editor library -->
        <script src="js/jquery.cleditor.min.js"></script>
        <!-- notification plugin -->
        <script src="js/jquery.noty.js"></script>
        <!-- file manager library -->
        <script src="js/jquery.elfinder.min.js"></script>
        <!-- star rating plugin -->
        <script src="js/jquery.raty.min.js"></script>
        <!-- for iOS style toggle switch -->
        <script src="js/jquery.iphone.toggle.js"></script>
        <!-- autogrowing textarea plugin -->
        <script src="js/jquery.autogrow-textarea.js"></script>
        <!-- multiple file upload plugin -->
        <script src="js/jquery.uploadify-3.1.min.js"></script>
        <!-- history.js for cross-browser state change on ajax -->
        <script src="js/jquery.history.js"></script>
        <script src="js/jquery.session.js"></script>
        <!-- application script for Charisma demo -->
        <script src="js/charisma.js"></script>

        <link href="uploadfy/css/uploadify.css" type="text/css" rel="stylesheet" />
        <script type="text/javascript" src="uploadfy/js/swfobject.js"></script>
        <script type="text/javascript" src="uploadfy/js/jquery.uploadify.v2.1.4.min.js"></script>
        <script src="js/jquery.scrollto.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/album.js"></script>


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
                                <a href="albuns.php">Álbuns</a>
                            </li>
                        </ul>
                    </div>
                    <div  id="home" class="row-fluid sortable">
                        <?php
                        if (isset($_GET['edit'])) {
                            $album_id = $_GET['edit'];
                            ?>
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#fupload').uploadify({
                                        'uploader': 'uploadfy/js/uploadify.swf',
                                        'script': 'upload.php?album_id=<?= $album_id ?>',
                                        'cancelImg': 'uploadfy/js/cancel.png',
                                        'folder': '../assets/img/fotos',
                                        'auto': true,
                                        'multi': true,
                                        'buttonText': 'Upload',
                                        'sizeLimit': 10000024000,
                                        'width': 286,
                                        'height': 125,
                                        'queueSizeLimit': 30,
                                        'uploadLimit': 30,
                                        'fileExt': '*.jpg;*.gif;*.png;*.bmp;*.jpeg',
                                        'fileDesc': 'Imagens (JPG, GIF, PNG, BMP)',
                                        'buttonImg': 'img/upload.png',
                                        'onAllComplete': function(event, queueID, fileObj, response) {
                                            //'onComplete': function(event, queueID, fileObj,response){
                                            //var response = JSON.parse(response);
                                            //alert(response.url)
                                            //window.location = baseUri+'/admin/campanha/cliente/<!--{cliente_id}-->/#&tab-mini&'+response.time ;
                                            window.location = 'albuns.php?edit=<?= $album_id ?>';
                                            //$('#banner_mini_img').html('<img src="<!--{baseUri}-->/application/banners/'+response.url+'" id="'+response.id+'" />');
                                            //$("#mini .info").show();
                                        }
                                    })
                                })
                            </script>                            
                            <?php
                            $db->query("select * from albuns  where album_id = $album_id")->fetchAll();
                            if ($db->rows >= 1) {
                                $album_name = $db->data[0]['album_name'];
                                $album_id = $db->data[0]['album_id'];
                                ?>
                                <div class="row-fluid sortable">
                                    <div class="box-album box span12">
                                        <div class="box-header well" data-original-title>
                                            <h2><i class="icon-edit"></i> Cadastro de álbuns</h2>
                                            <div class="box-icon">
                                                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                                                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                                                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                                            </div>
                                        </div>             
                                        <div class="box-content">
                                            <div class="control-group">
                                                <label class="control-label" for="<?= $album_id ?>">Nome do álbum</label>
                                                <div class="controls">
                                                    <input type="text" class="span6 album_name with-tip" name="album_name" maxlength="30" id="<?= $album_id ?>" title="Nome do Álbum" value="<?php echo $album_name; ?>">
                                                </div>
                                            </div>

                                            <div class="form-actions">
                                                <button type="submit" class="btn btn-primary updateAlbumName">Salvar</button>
                                                <button type="reset" id="btnCancel" class="btn">Cancelar</button>
                                            </div>
                                            <!--<div class="form-actions">-->
                                            <span class="align-right btn-upload">
                                                <input id="fupload" name="upload" type="file" class="hides btn-upload" />
                                            </span>
                                            <!--</div>-->
                                        </div>
                                    </div> 
                                </div>         
                                <?php
                                $db->query("select * from fotos join albuns on (album_id = foto_album) where foto_album = $album_id order by foto_pos asc")->fetchAll();
                                if ($db->rows >= 1) {
                                    $fotos = $db->data;
                                    echo "<ul class=\"sortable\" style=\"list-style-type: none; margin: 0; padding: 0;\">";
                                    foreach ($fotos as $foto) {
                                        $f = (object) $foto;
                                        echo "<li class=\"lisort\" id=\"item_$f->foto_id\" class=\"div_$f->foto_id\">";
                                        if ($f->foto_caption == "") {
                                            $f->foto_caption = "";
                                        }
                                        $f->foto_caption = utf8_decode($f->foto_caption);
                                        echo '<ul class="box-foto-edit extended-list div_' . $f->foto_id . '">' . "\n";
                                        echo "<li class=\"div_$f->foto_id\">" . "\n";
                                        ?>
                                        <ul class="mini-menu with-children-tip">
                                            <li>
                                                <a href="javascript:void(0)" title="Atualizar" id="<?= $f->foto_id ?>" album="<?= $album_id ?>" class="refresh">
                                                    <img src="tpl/images/icons/refresh.png" width="16" height="16">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" title="Definir Capa" id="<?= $f->foto_id ?>" album="<?= $album_id ?>" class="cover">
                                                    <img src="tpl/images/icons/photo.png" width="16" height="16">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" title="Remover" id="<?= $f->foto_id ?>" class="delete">
                                                    <img src="tpl/images/cross-circle.png" width="16" height="16">
                                                </a>
                                            </li>
                                        </ul>   
                                        <img class="pic with-tip tip-bottom" title="mover posição" src="http://agroexata.com/agro/thumb.php?img=assets/img/fotos/<?= $f->foto_url ?>" width="174" height="136" />
                                        <input type="text" class="with-tip foto_caption" id="f_<?= $f->foto_id ?>"  value="<?= $f->foto_caption ?>" maxlength="74" title="Info 1" />
                                        <input type="text" class="with-tip tip-bottom foto_info" id="if_<?= $f->foto_id ?>"  value="<?= $f->foto_info ?>" maxlength="15" title="Info 2" />
                                        <?php
                                        echo "</li>\n";
                                        echo "</ul>\n";
                                        echo '</li>' . "\n";
                                    }
                                    echo '</ul>';
                                }
                            }
                        } else {
                            ?>
                            <div class="row-fluid sortable">
                                <div class="box-album box span12"> 
                                    <div class="box-header well" data-original-title>
                                        <h2><i class="icon-edit"></i> Cadastro de álbuns</h2>
                                        <div class="box-icon">
                                            <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                                            <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                                            <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                                        </div>
                                    </div>             
                                    <div class="box-content">
                                        <div class="control-group">
                                            <form name="f" action="albuns.php?create=true" method="post">
                                                <label class="control-label" for="new">Nome do Álbum</label>
                                                <div class="controls">
                                                    <input type="text" name="new" id="new" class="span6 album_name with-tip" title="Nome do Álbum" />
                                                </div>
                                                <div class="form-actions">
                                                    <button type="submit" class="btn btn-primary">Criar</button>
                                                    <button type="reset" class="btn">Cancelar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="row-fluid sortable">		
                                <div class="box span12">
                                    <div class="box-header well" data-original-title>
                                        <h2><i class="icon-user"></i> Álbuns</h2>
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
                                        <table class="table table-striped table-bordered bootstrap-datatable datatable w-all" id="tbl_list_serv" style="width: 100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th width="10">ID</th>
                                                    <th>Álbum</th>
                                                    <th width="60">Fotos</th>
                                                    <th>Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>                             
                                                <?php
                                                $db->query("select * from albuns order by album_name asc")->fetchAll();
                                                if ($db->rows >= 1) {
                                                    $albuns = $db->data;
                                                    foreach ($albuns as $album) {
                                                        $alb = (object) $album;
                                                        $alb->album_name = $alb->album_name;
                                                        $db->query("select * from fotos where foto_album = $alb->album_id")->fetchAll();
                                                        echo "<tr>";
                                                        echo "<td> $alb->album_id </td>";
                                                        echo "<td> $alb->album_name </td>";
                                                        echo "<td> $db->rows </td>";
                                                        ?>
                                                    <td> 
                                                        <a class="btn btn-info with-tip edit" title="editar Álbum" href="albuns.php?edit=<?= $alb->album_id ?>">
                                                            <i class="icon-edit icon-white"></i>  
                                                            Alterar 
                                                        </a> 
                                                        &nbsp;
                                                        <a class="btn btn-danger with-tip deleteAlbum" title="remover Álbum"  id="<?= $alb->album_id ?>" href="javascript:void(0)">
                                                            <i class="icon-trash icon-white"></i> 
                                                            Excluir
                                                        </a> 
                                                    </td>
                                                    <?php
                                                    echo "</tr>";
                                                }
                                            }
                                            ?>
                                            <tfoot>
                                                <tr>
                                                    <th>&nbsp;</th>
                                                    <th>&nbsp;</th>
                                                    <th>&nbsp;</th>
                                                    <th>&nbsp;</th>
                                                </tr>
                                            </tfoot>                                        
                                        </table>    
                                    </div>
                                </div>
                            </div>
                            <div class="row-fluid sortable">
                                <div class="box span12">
                                    <div class="box-header well" data-original-title>
                                        <h2><i class="icon-picture"></i> Imagens do site</h2>
                                        <div class="box-icon">
                                            <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                                            <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                                            <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div class="file-manager"></div>
                                    </div>
                                </div><!--/span-->
                            </div><!--/row-->
                            <?php
                        }
                        ?>
                    </div>
                    <p>&nbsp;</p>
                </div>
                <!-- content ends -->
            </div><!--/#content.span10-->
        </div><!--/fluid-row-->

        <?php include 'footer.php'; ?>

    </div><!--/.fluid-container-->
    <?php //include 'importsjs.php'; ?>

</body>
<!--<link href="tpl/css/simple-lists.css" rel="stylesheet" type="text/css">
<link href="tpl/css/block-lists.css" rel="stylesheet" type="text/css" />-->

<link href="tpl/css/all.css" rel="stylesheet" type="text/css">
<link href="tpl/css/960_12.css" rel="stylesheet" type="text/css">
<link href="tpl/css/reset.css" rel="stylesheet" type="text/css">
<link href="tpl/css/common.css" rel="stylesheet" type="text/css">
<link href="tpl/css/standard.css" rel="stylesheet" type="text/css">
<link href="tpl/css/form.css" rel="stylesheet" type="text/css" />
<!--<link href="tpl/css/table.css" rel="stylesheet" type="text/css" />-->
 [if lte IE 8]><script type="text/javascript" src="tpl/js/standard.ie.js"></script><![endif]

</html>