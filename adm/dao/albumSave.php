<?php

include "../login.php";
header("Content-Type: text/html; charset=UTF-8", true);

if ($_POST) {
    $id = trim($_POST["id"]);
    $descricao = trim($_POST["descricao"]);

    if (empty($id)) {
        $date = gmdate("Y-m-d H:i:s");
        $sql = "insert into albuns (album_id, album_name,data) values (NULL,'$descricao','$date')";
    } else {
        $sql = "update albuns set album_name = '" . $descricao . "' where album_id = " . (int) $id;
    }
    $db->query($sql);
    if ($db->response == 'success') {
        header("Location: ../albuns.php");
    } else {
        echo "<script>alert('Erro ao salvar/atualizar registro');history.back();</script>";
    }
} else {
    echo "<script>alert('Requisição Invalida');history.back();</script>";
    exit;
}
?>