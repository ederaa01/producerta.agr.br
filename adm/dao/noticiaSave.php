<?php

include "../login.php";
header("Content-Type: text/html; charset=UTF-8", true);
//print_r($_POST);
if ($_POST) {

    $id = trim($_POST["id"]);
    $titulo = trim($_POST["titulo"]);
    $fonte = trim($_POST["fonte"]);
    $noticia = trim($_POST["noticia"]);
    $destaque = trim($_POST["destaque"]);
    $categoria = trim($_POST["categoria"]);

    $noticia = str_replace('"', "'", $noticia);
    $noticia = htmlspecialchars($noticia);
    if (empty($id)) {
        $date = gmdate("Y-m-d");

        $sql = 'insert into noticias (id, titulo,fonte,data,noticia,destaquenoticia,idCategoria,idUsuario) values 
            (NULL,"' . $titulo . '","' . $fonte . '","' . $date . '","' . $noticia . '","' . $destaque . '",' . (int) $categoria . ',' . (int) $sid->getNode("user_id") . ')';
    } else {
        $sql = 'update noticias set titulo = "' . $titulo . '", fonte = "' . $fonte . '"
            ,noticia = "' . $noticia . '",destaquenoticia = "' . $destaque . '",idCategoria = ' . $categoria . ' where id = ' . (int) $id;
    }
    $db->query($sql);
    if ($db->response == 'success') {
        header("Location: ../noticias.php");
    } else {
        echo "<script>alert('Erro ao salvar/atualizar registro');history.back();</script>";
    }
} else {
    echo "<script>alert('Requisição Invalida');history.back();</script>";
    exit;
}
?>