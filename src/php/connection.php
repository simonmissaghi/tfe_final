<?php
$dsn = "mysql:host=localhost;dbname=db_tfe";
$dbUser = "root";
$dbPassword = "";
try {
    $connection = new PDO($dsn, $dbUser, $dbPassword);
    $connection->exec("SET NAMES utf8");

} catch (PDOException $e) {
    print "Erreur: " . $e->getMessage();
    exit();
}
?>
