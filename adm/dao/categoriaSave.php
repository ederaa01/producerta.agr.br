<?php
include "../login.php";
header("Content-Type: text/html; charset=UTF-8", true);

if ($_POST) {
    $id = trim($_POST["id"]);
    $descricao = trim($_POST["descricao"]);

    if (empty($id)) {
        $sql = "insert into categoria (id, descricao) values (NULL,'$descricao')";
    } else {
        $sql = "update categoria set descricao = '" . $descricao . "' where id = " . (int) $id;
    }
    $db->query($sql);
    if ($db->response == 'success') {
        header("Location: ../categorias.php");
    } else {
        echo "<script>alert('Erro ao salvar/atualizar registro');history.back();</script>";
    }
} else {
    echo "<script>alert('Requisição Invalida');history.back();</script>";
    exit;
}
?>