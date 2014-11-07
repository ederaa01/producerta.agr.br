<?php
include "../login.php";
header("Content-Type: text/html; charset=UTF-8", true);

if ($_POST) {

    $id = trim($_POST["id"]);
    $nome = trim($_POST["nome"]);
    $email = trim($_POST["email"]);
    $login = trim($_POST["login"]);
    $senha = trim($_POST["senha"]);

    if (empty($id)) {
        $sql = "insert into usuario (id, nome,email,login,senha,tpUsuario) values 
            (NULL,'" . $nome . "','" . $email . "','" . $login . "','" . $senha . "','A')";
    } else {
        $sql = "update usuario set nome = '" . $nome . "', email = '" . $email . "'
            ,login = '" . $login . "',senha = '" . $senha . "' where id = " . (int) $id;
    }
    $db->query($sql);
    if ($db->response == 'success') {
        header("Location: ../usuario.php");
    } else {
        echo "<script>alert('Erro ao salvar/atualizar registro');history.back();</script>";
    }
} else {
    echo "<script>alert('Requisição Invalida');history.back();</script>";
    exit;
}
?>