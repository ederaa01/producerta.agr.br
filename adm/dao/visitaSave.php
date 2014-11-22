<?php

function visitaSave($page) {
    if (1 == 0) {
        require_once 'adm/class/Session.class.php';
        $sid = new Session;
        require_once 'adm/database/mysql.php';
        $db = new Mysql;
        $date = gmdate("Y-m-d H:i:s");
        if (!$sid->checkVisit()) {
            $sid->start();
            $sid->initVisit(null);
            $sid->addNode('startVisit', $date);
            $ip = $_SERVER["REMOTE_ADDR"];
            $sql = 'insert into visitas (id, data,sessionId,ip,host,browser,pagestart,queryString) values (NULL,"' . $date .
                    '","' . $sid->getId() . '","' . $ip . '",
                    "' . gethostbyaddr($ip) . '","' . $_SERVER["HTTP_USER_AGENT"] . '",
                        "' . $_SERVER["PHP_SELF"] . '","' . $_SERVER["QUERY_STRING"] . '")';
            //echo "<script>alert('$sql');</script>";

            $db->query($sql);

            $db->query('select max(id) as ultimo from visitas')->fetchAll();
            $sid->addNode('idVisita', $db->data[0]["ultimo"]);
        }
        $db->query('insert into visitaspage (sequencia,idVisita,pagina,dataHora) values (NULL,' . $sid->getNode("idVisita") . ',"' . $page . '","' . $date . '")');
    }
}

?>