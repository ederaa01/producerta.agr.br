<?php
function save_message($nome,$sobrenome,$fone,$email,$endereco,$mensagem){
    require '../adm/database/mysql.php';
    $db = new Mysql;
    $date = gmdate("Y-m-d H:i:s");
    $sql = "insert into messages (id, nome,sobrenome,data,fone,email,endereco,mensagem) values 
            (NULL,'$nome','$sobrenome','$date','$fone','$email','$endereco','$mensagem')";
    $db->query($sql);
} 
?>