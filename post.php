<?php
session_start();
$name = $_GET['name'];
$email = $_GET['email'];
$message = $_GET['message'];
$code = $_GET['code'];
$subject = 'Nova mensagem via website, de ' . $name;
if (strtolower($code) == strtolower($_SESSION['random_number'])) {
    $TO = "neax@neaxtecnologia.com.br";
    $h = "De: " . $email;
    $content = "$name ($email) mensagem do website :\n\n$message";
    mail($TO, $subject, $content, $h);
    echo 1;
} else {
    echo 0; // invalid code
}
?>