<?php
function getDBConnection() {
    $db = new PDO('sqlite:' . __DIR__ . '/lab.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
}
?>
