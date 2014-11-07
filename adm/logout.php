<?php
require_once 'class/Session.class.php';

$sid = new Session;
$sid->destroy();
//redirecionar para o index
header("Location: index.php");
?>