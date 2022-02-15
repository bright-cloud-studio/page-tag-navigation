<?php

// start a session
session_start();
error_reporting(E_ALL ^ E_NOTICE);

try {
    $dbh = new PDO("mysql:host=localhost;dbname=ampersan_cms49", 'ampersan_dbadmin', 'Y06ZCg9BiAh2Uv#@', array(
    PDO::ATTR_PERSISTENT => true
));
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
