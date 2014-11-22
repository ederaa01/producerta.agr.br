<?php

//diretório do projeto
if (!defined("PROJECT_DIR")) {
    if (strpos($_SERVER['HTTP_HOST'], '127.0.0.1') !== false || strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
        define("PROJECT_DIR", "producerta.agr.br");
    } else {
        define("PROJECT_DIR", ".");
    }
    define("PROJECT_PATH", "http://" . $_SERVER['HTTP_HOST'] . '/' . PROJECT_DIR);
}
// diretório da aplicacao
if (!defined("APPLICATION_DIR"))
    define("APPLICATION_DIR", "site");

// URL enviado
if (!defined("REQUEST_URI"))
    define("REQUEST_URI", str_replace("/" . PROJECT_DIR, "", $_SERVER["REQUEST_URI"]));

/**
 * Função Resposável pelo tratamento da URL
 *
 * @author Camilo Teixeira de Melo
 * @link http://www.camilotx.com.br
 * @param string $urlpatterns array com os modelos de url
 * @return void
 * */
function strip($buffer) {
//    return  utf8_encode(preg_replace(array("/<!--(.*)-->/Uis", "/\>[^\S ]+/s", "/[^\S ]+\</s", "/(\s)+/s"), array("", ">", "<", "\\1"), utf8_decode($buffer)));
//     return (str_replace("apples", "oranges", $buffer));
//    return utf8_encode(preg_replace(array("/<!--(.*)-->/Uis", "/\>[^\S ]+/s", "/[^\S ]+\</s", "/(\s)+/s"), array(" ", ">", "<", "\\1"), utf8_decode($buffer)));;
    return trim(preg_replace("/\n|\r|\t|/", "", $buffer));
}

function url_response($urlpatterns) {
    $flag = true;
    foreach ($urlpatterns as $pcre => $app) {
        if (strpos($app, '/adm') !== false) {
            $flag = false;
            exit();
        }
        if (preg_match("@^{$pcre}$@", REQUEST_URI, $_GET)) {
//            ob_start("strip");
//            ob_clean();
            try {
                ob_start();
                include(APPLICATION_DIR . "/" . $app);
                $data = ob_get_contents();
                ob_clean();
                echo utf8_encode(preg_replace(array('/<!--(.*)-->/Uis', '/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s'), array('', '>', '<', '\\1'), utf8_decode($data)));
                ob_end_flush();
                $flag = false;
                exit();
            } catch (Exception $ex) {
                $flag = true;
            }
        }
    }
    if ($flag) {
        ob_start("strip");
        ob_clean();
        include(APPLICATION_DIR . "/404.php");
        ob_end_flush();
    }
    return;
}

?>