<?php

include "../login.php";

header("Content-Type: text/html; charset=UTF-8", true);

if ($_POST) {
    $id = trim($_POST["id"]);
    $razao = trim($_POST["razao"]);
    $fantasia = trim($_POST["fantasia"]);
    $email = trim($_POST["email"]);
    $cnpj = trim($_POST["cnpj"]);
    $ie = trim($_POST["ie"]);
    $fone = trim($_POST["fone"]);
    $endereco = trim($_POST["endereco"]);
    $cidade = trim($_POST["cidade"]);
    $uf = trim($_POST["uf"]);
    $cep = trim($_POST["cep"]);
    $ramos = trim($_POST["ramos"]);
    $dtlicenca = trim($_POST["dtlicenca"]);
    $dtultconsulta = trim($_POST["dtultconsulta"]);
    $modulosbloqueio = trim($_POST["modulosbloqueio"]);
    $msgcliente = trim($_POST["msgcliente"]);
    $diasExcederLicenca = trim($_POST["diasExcederLicenca"]);
    if (empty($cnpj)) {
        echo "<Erro ao salvar/atualizar registro, cnpj inválido!');history.back();</script>";
        exit();
    }
    if (!empty($dtlicenca)) {
        $dt = explode("/", $dtlicenca);
        $dtlicenca = $dt[2] . "-" . $dt[1] . "-" . $dt[0];
    } else {
        $dtlicenca = "2015-12-31";
    }

    if (empty($id) && !empty($cnpj)) {
        $sql = "select id from cliente where cnpj like '" . $cnpj . "' limit 1";
        $db->query($sql);
        if ($db->rows > 0) {
            $id = $db->data[0]['id'];
        }
    }
    if (empty($id)) {
        $sql = "insert into cliente (id, razao,fantasia,email,cnpj,ie,fone,endereco,cidade,uf,cep,ramos,
            dtlicenca,dtultconsulta,modulosbloqueio,diasExcederLicenca,msgcliente) values 
            (NULL,'"
                . $razao . "','"
                . $fantasia . "','"
                . $email . "','"
                . $cnpj . "','"
                . $ie . "','"
                . $fone . "','"
                . $endereco . "','"
                . $cidade . "','"
                . $uf . "','"
                . $cep . "','"
                . $ramos . "','"
                . $dtlicensa . "','"
                . $dtultconsulta . "','"
                . $modulosbloqueio . "','"
                .(int) $diasExcederLicenca."','"
                . $msgcliente . "')";
    } else {
        $sql = "update cliente set razao = '" . $razao
                . "', fantasia = '" . $fantasia
                . "',email = '" . $email
                . "',cnpj = '" . $cnpj
                . "',ie = '" . $ie
                . "',fone = '" . $fone
                . "',endereco = '" . $endereco
                . "',cidade = '" . $cidade
                . "',uf = '" . $uf
                . "',cep = '" . $cep
                . "',ramos = '" . $ramos
                . "',dtlicenca = '" . $dtlicenca
                . "',modulosbloqueio = '" . $modulosbloqueio
                . "',msgcliente = '" . $msgcliente
                . "',diasExcederLicenca = '".$diasExcederLicenca
                . "' where id = " . (int) $id;
    }
    $db->query($sql);
    if ($db->response == 'success') {
        header("Location: ../clientes.php");
    } else {
        echo "<Erro ao salvar/atualizar registro');history.back();</script>";
    }
} else {
    echo "<script>alert('Requisição Invalida');history.back();</script>";
    exit;
}
?>