<?php

include "../login.php";

if ($_GET) {
    $theme = $_GET['theme'];
    if (!empty($theme)) {
        $db->query("update user_preferences set theme='$theme' where user_id=" . (int) $sid->getNode('user_id'));
    }
}
?>
