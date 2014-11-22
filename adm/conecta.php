<?php

//conectar no banco de dados
//mysql_connect ( servidor, usuario, senha);
//mysql_connect("localhost","root","");
mysql_connect("127.0.0.1", "neaxt783", "Neax159248");
//mysql_select_db (banco de dados) or die (mensagem de erro);
mysql_select_db("neaxt783_site_agroexata") or die("Erro ao conectar no banco");
?>