<?php
include "../login.php";
@header("Content-Type: text/html; charset=UTF-8", true);
$id = trim($_GET["id"]);
if (empty($id)) {
    echo "<script>alert('Não foi possivel excluir o registro selecionado');history.back();</script>";
    exit;
} else {
    $db->query("delete from noticias where id = " . (int) $id);
    if ($db->response == 'success') {
        @header("Location: ../noticias.php");
    } else {
        echo "<script>alert('Não foi possivel excluir o registro selecionado');history.back();</script>";
        exit;
    }
}
?>