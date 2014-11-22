<?php

//para verificar o login
include "login.php";

require_once 'database/mysql.php';
require_once 'class/Session.class.php';
require_once 'class/Upload.class.php';
$db = new Mysql;

$file_dst_name = "";
$album_id = $_GET['album_id'];

$dir_dest = '../assets/img/fotos';

$files = array();
$files = $_FILES['Filedata'];

foreach ($files as $file) {
    $handle = new Upload($file);
    if ($handle->uploaded) {
        $handle->file_overwrite = true;
        $handle->image_convert = 'jpg';
        //Configuracoes de redimensionamento retrato
        $lMax = 900; //largura maxima permitida
        $aMax = 700; // altura maxima permitida
        //Configuracoes de redimensionamento paisagem
        $plMax = 800; //largura maxima permitida
        $paMax = 600; // altura maxima permitida


        if ($handle->image_src_x > $handle->image_y) {
            if ($handle->image_src_x > $lMax || $handle->image_y > $aMax) {
                $handle->image_resize = true;
                $handle->image_ratio = true;
                $handle->image_x = ($lMax / 2);
                $handle->image_y = ($aMax / 2);
            }
        } else {
            if ($handle->image_src_x > $plMax || $handle->image_y > $paMax) {
                $handle->image_resize = true;
                $handle->image_ratio = true;
                $handle->image_x = ($plMax / 2);
                $handle->image_y = ($paMax / 2);
            }
        }

        $name = md5(uniqid($file['name']));
        $handle->file_new_name_body = $name;
        $handle->Process($dir_dest);
        if ($handle->processed) {
            $handle = new Upload($file);
            if ($handle->uploaded) {
                $handle->file_overwrite = true;
                $handle->image_resize = true;
                $handle->image_ratio = true;
                $handle->image_convert = 'jpg';
                $handle->image_x = 250;
                $handle->image_y = 200;
                $handle->file_new_name_body = $name . "_thumb";
                $handle->Process($dir_dest . "/thumb");
            }

//            carregaThumb($dir_dest."/".$file['imagem']['name'], $name, $dir_dest."/thumb/");

            $file_dst_name = $handle->file_dst_name;
            $foto_data = date('Y-m-d 00:00:00');
            $db->query("insert into fotos (foto_album,foto_url,foto_thumb,foto_data,foto_pos) values ($album_id,'" . $name . ".jpg','" . $name . "_thumb.jpg','$foto_data','999');");
            //$file_dst_name .= "?v=" . time();
            $last_id = mysql_insert_id();
            echo json_encode(array('url' => "$file_dst_name", 'id' => $last_id, 'time' => time()));
        } else {
            echo json_encode(array('url' => "error", 'id' => '', 'time' => time()));
        }
    }
}

function carregaThumb($imagem, $cod, $pasta) {
    //resize - aqui vc configura o tamanho das imagens que serao geradas
    $largura = 250;
    $altura = 180;
    //******************************************************************
    $imagem_gerada = explode(".", $imagem);
    $imagem_gerada = $pasta . "/" . $cod . "_thumb.jpg";
    $path = $imagem;
    $imagem_orig = ImageCreateFromJPEG($path);
    $pontoX = ImagesX($imagem_orig);
    $pontoY = ImagesY($imagem_orig);
    $imagem_fin = ImageCreateTrueColor($largura, $altura);
    ImageCopyResampled($imagem_fin, $imagem_orig, 0, 0, 0, 0, $largura + 1, $altura + 1, $pontoX, $pontoY);
    ImageJPEG($imagem_fin, $imagem_gerada);
    ImageDestroy($imagem_orig);
    ImageDestroy($imagem_fin);

    //apagar a imagem antiga
    unlink($imagem);
}
?>