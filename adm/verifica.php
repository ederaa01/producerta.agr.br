<?php

require_once 'database/mysql.php';
require_once 'class/Session.class.php';

//verificar se os dados vieram de um POST
if ($_POST) {
    //recuperar a variaveis vindas do formulario
    $login = trim($_POST["username"]);
    $senha = trim($_POST["password"]);
    //trim retira espaços em branco
    //validar os campos em branco
    if (empty($login)) {
        //se o login estiver em branco
        echo "<script>alert('Preencha o Login');history.back();</script>";
    } else if (empty($senha)) {
        //se a senha estiver em branco	
        echo "<script>alert('Preencha o campo senha');history.back();</script>";
    } else {
        //se os campos estiverem preenchidos - valida usuario
        //comando sql - consulta para verificar se o 
        //usuario existe no banco
        $db = new Mysql;
        $db->query("select * from usuario where login = '$login' limit 1")->fetchAll();
        if ($db->rows <= 0) {
            ?>

            <script> 
                window.onload = function()
                {
                    notify('<h1>Login/Senha incorretos!</h1>');
                }
            </script>
            <?php

            echo "<script>alert('Usuario nao existe');history.back();</script>";
        } else if ($db->data[0]['senha'] != $senha) {
            ?>

            <script> 
                window.onload = function()
                {
                    notify('<h1>Login/Senha incorretos!</h1>');
                }
            </script>
            <?php

            //se a senha digitada for diferente da senha do banco
            echo "<script>alert('Senha invalida');history.back();</script>";
        } else {
            $sid = new Session;
            $sid->start();
            $sid->init(36000);
            $sid->addNode('start', date('d/m/Y - h:i'));
            $sid->addNode('user_id', $db->data[0]['id']);
            $sid->addNode('user_login', $db->data[0]['login']);
            $sid->addNode('nome', $db->data[0]['nome']);

            $db->query("select * from user_preferences where user_id = " . (int) $sid->getNode('user_id'))->fetchAll();

            if ($db->rows > 0) {
                //

               // include 'importsjs.php';
                if (!empty($db->data[0]['theme'])) {
               //     setcookie("current_theme", $db->data[0]['theme'], 365);
                } else {
                 //   setcookie("current_theme", 'cerulean', 365);
                }
                $db->query("update user_preferences set dataUltAcesso='" . gmdate("Y-m-d") . "' where user_id=" . (int) $sid->getNode('user_id'));
                @header("Location: home.php");
            } else {
                $db->query("insert into user_preferences(user_id,dataUltAcesso,theme) values(" . (int) $sid->getNode('user_id') . ",'" . gmdate("Y-m-d") . "','cerulean')");
                 @header("Location: home.php");
            }

            @header("Location: home.php");
        }
    }
} else {
    echo "Requisição inválida!";
    exit;
}
?>