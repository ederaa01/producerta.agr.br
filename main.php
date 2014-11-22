<?php
require_once 'adm/dao/visitaSave.php';
include("url_response.php");
$urlpatterns = array(
    "/main.php" => "index.php",
    "/main" => "index.php",
    "/site" => "index.php", 
    "/" => "index.php",
    "" => "index.php",
    "/empresa.php" => "index.php",
    "/index" => "index.php",
    "/home" => "index.php",
    "/blog(?P<post>\d+)" => "blog.php",
    "/blog" => "blog.php",
    "/vendas" => "vendas.php",
    "/contato" => "contato.php",
    "/regiao-de-atuacao" => "empresa/regiaoatuacao.php",
    "/foco-de-atuacao" => "empresa/focoatuacao.php",
    "/trabalhe-conosco" => "empresa/trabalheconosco.php",
    "/vendas" => "vendas.php",
    "/servicos/implantacao" => "servicos/implantacao.php",
    "/servicos/assessoria" => "servicos/assessoria.php",
    "/servicos/customizacao" => "servicos/customizacao.php",
    "/servicos/suporte-tecnico" => "servicos/suportetecnico.php",
    "/servicos/treinamento" => "servicos/treinamento.php"
    
//    "/noticias" => "noticias.php",
//    "/noticia/(?P<id_noticia>\d+)" => "noticias.php",
);
url_response($urlpatterns);
?>