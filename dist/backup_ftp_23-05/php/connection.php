<?php
$dsn = "mysql:host=simonmisrn27.mysql.db;dbname=simonmisrn27";
$dbUser = "simonmisrn27";
$dbPassword = "Freedom589092";
try {
    $connection = new PDO($dsn, $dbUser, $dbPassword);
    $connection->exec("SET NAMES utf8");

} catch (PDOException $e) {
    print "Erreur: " . $e->getMessage();
    exit();
}
?>
