<?php
//para verificar o login
include "login.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Home | Administração</title>
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
                                <a href="home.php">Informações</a>
                            </li>
                        </ul>
                    </div>
                    <div class="sortable row-fluid">
                        <?php
                        $db->query("select count(*) as count from usuario")->fetchAll();
                        $count = (int) $db->data[0]["count"];

                        $db->query("select count(*) as ultimo from visitas")->fetchAll();
                        $ultimo = (int) $db->data[0]["ultimo"];

                        $db->query("select count(*) as ultimo from messages")->fetchAll();
                        $messages = (int) $db->data[0]["ultimo"];

                        $db->query("select count(*) as ultimo from noticias")->fetchAll();
                        $noticias = (int) $db->data[0]["ultimo"];
                        ?>

                        <a data-rel="tooltip" <?php echo "title='$ultimo novas visitas.'"; ?> class="well span3 top-block" href="#">
                            <span class="icon32 icon-red icon-user"></span>
                            <div>Visitações</div>
                            <div><?php echo $ultimo; ?></div>
                            <span class="notification"><?php echo $ultimo; ?></span>
                        </a>

                        <a data-rel="tooltip" <?php echo "title='$count novos usuário'"; ?>class="well span3 top-block" href="usuario.php">
                            <span class="icon32 icon-color icon-star-on"></span>
                            <div>Usuários</div>
                            <div><?php echo $count; ?></div>
                            <span class="notification green"><?php echo $count; ?></span>
                        </a>
                        <a data-rel="tooltip"  <?php echo "title='$messages novas mensagens.'"; ?> class="well span3 top-block" href="mensagens.php">
                            <span class="icon32 icon-color icon-envelope-closed"></span>
                            <div>Mensagens</div>
                            <div><?php echo $messages; ?></div>
                            <span class="notification red"><?php echo $messages; ?></span>
                        </a>
                        <a data-rel="tooltip"  <?php echo "title='$noticias novas notícias.'"; ?> class="well span3 top-block" href="noticias.php">
                            <span class="icon32 icon-color icon-comment"></span>
                            <div>Notícias</div>
                            <div><?php echo $noticias; ?></div>
                            <span class="notification red"><?php echo $noticias; ?></span>
                        </a>
                    </div>
                    <!-- content ends -->
                    <div class="row-fluid sortable">
                       <div class="row-fluid sortable">
                        <div class="box span6">
                            <div class="box-header well" data-original-title>
                                <h2><i class="icon-list-alt"></i> Páginas mais visitadas</h2>
                                <div class="box-icon">
                                    <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                                    <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                                    <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                                </div>
                            </div>
                            <div class="box-content">
                                <div id="charvisitas" style="height:300px"></div>
                            </div>
                        </div> 
                    </div>

                    <div class="row-fluid sortable">
                        <div class="box span12">
                            <div class="box-header well">
                                <h2><i class="icon-list-alt"></i> Visitas nas últimas 20 semanas</h2>
                                <div class="box-icon">
                                    <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                                    <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                                    <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                                </div>
                            </div>
                            <div class="box-content">
                                <div id="sincos"  class="center" style="height:300px" ></div>
                            </div>
                        </div> 
                    </div>
                    </div>
                </div><!--/#content.span10-->
            </div><!--/fluid-row-->

            <?php include 'footer.php'; ?>

        </div><!--/.fluid-container-->
        <?php include 'importsjs.php'; ?>
    </body>
    <script type="text/javascript">
        $(document).ready(function() {
//pie chart
<?php
$db->query("SELECT pagina,count(*) as total FROM visitaspage group by pagina order by total")->fetchAll();
if ($db->rows > 0) {
    echo 'var data = [';
    $i=1;
    foreach ($db->data as $l) {
        echo '{';
        echo 'label: "'.$l['pagina'].'",';
        echo 'data: '.$l['total'];
        echo $db->rows > $i?'},':'}';
        $i++;
    }
    echo '];';
}
?>


            if ($("#charvisitas").length)
            {
                $.plot($("#charvisitas"), data,
                        {
                            series: {
                                pie: {
                                    show: true
                                }
                            },
                            grid: {
                                hoverable: true,
                                clickable: true
                            },
                            legend: {
                                show: false
                            }
                        });

                function pieHover(event, pos, obj)
                {
                    if (!obj)
                        return;
                    percent = parseFloat(obj.series.percent).toFixed(2);
                    $("#hover").html('<span style="font-weight: bold; color: ' + obj.series.color + '">' + obj.series.label + ' (' + percent + '%)</span>');
                }
                $("#charvisitas").bind("plothover", pieHover);
            }
        });
        
         
    if($("#sincos").length)
    {
        var sin = [];
<?php
$db->query("SELECT data AS datax, EXTRACT(YEAR FROM data) AS ano,EXTRACT(WEEK FROM data) AS semana,data, COUNT(*) AS tot FROM `visitas` GROUP BY ano,semana ORDER BY datax DESC LIMIT 55")->fetchAll();
if ($db->rows > 0) {
    $maior = 10;
    $i = 0;
    $l2="";
    foreach ($db->data as $l) {
       $l2[$l['ano'].''.(10+(int)$l['semana'])]=$l;
    }
    ksort($l2);
    //print_r($l2);
    foreach ($l2 as $key => $o) {
        echo 'sin.push([' .$i. ', ' . (int) $o['tot'] . ']);';
        $i++;
        if ((int) $o['tot'] > $maior) {
            $maior = (int) $o['tot'];
        }
    }
}
?>
        var plot = $.plot($("#sincos"),
        [ {
                data: sin, 
                label: "Visitas"
            }], {
            series: {
                lines: {
                    show: true
                },
                points: {
                    show: true
                }
            },
            legend :{
                show: true,
                labelFormatter: function(label, series) {
                    // series is the series object for the label
                    return '<a href="#' + label + '">' + label + '</a>';
                }   
            },
            grid: {
                hoverable: true, 
                clickable: true, 
                backgroundColor: {
                    colors: ["#fff", "#eee"]
                }
            }
<?php
echo ',
            yaxis: {';
echo 'min: 0';
echo ',max: ' . $maior + 10;
echo '},colors: ["#539F2E", "#3C67A5"]';
?>
        });

        function showTooltip(x, y, contents) {
            $('<div id="tooltip">' + contents + '</div>').css( {
                position: 'absolute',
                display: 'none',
                top: y + 5,
                left: x + 5,
                border: '1px solid #fdd',
                padding: '2px',
                'background-color': '#dfeffc',
                opacity: 0.80
            }).appendTo("body").fadeIn(200);
        }

        var previousPoint = null;
        $("#sincos").bind("plothover", function (event, pos, item) {
            $("#x").text(pos.x.toFixed(2));
            $("#y").text(pos.y.toFixed(2));

            if (item) {
                if (previousPoint != item.dataIndex) {
                    previousPoint = item.dataIndex;

                    $("#tooltip").remove();
                    var x = item.datapoint[0].toFixed(2),
                    y = item.datapoint[1].toFixed(2);

                    showTooltip(item.pageX, item.pageY,
                    item.series.label + " " + y+0);
                }
            }
            else {
                $("#tooltip").remove();
                previousPoint = null;
            }
        });
		


        $("#sincos").bind("plotclick", function (event, pos, item) {
            if (item) {
                $("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
                plot.highlight(item.series, item.datapoint);
            }
        });
    }
        </script>
</html>