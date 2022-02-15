<?php

try {
    $dbh = new PDO("mysql:host=localhost;dbname=oces_contao_4_9", 'oces_user', 'cnLtU3L0fD8PNurD)R', array(
    PDO::ATTR_PERSISTENT => true
));
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
