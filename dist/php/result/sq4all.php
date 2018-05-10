<?php
include ('/../connection.php');

// Smartphones female 1995 q4 r1

$sq4All_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q4 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq4All_01->execute();
$rowsq4All_01 = $sq4All_01->fetch();
$pourcentagesq4All_01 = $rowsq4All_01['pourcentage'];

// Smartphones female 1995 q4 r2

// Smartphones female 1995 q4 r5

$sq4All_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q4 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq4All_05->execute();
$rowsq4All_05 = $sq4All_05->fetch();
$pourcentagesq4All_05 = $rowsq4All_05['pourcentage'];

$data_sq4All = array($pourcentagesq4All_01, $pourcentagesq4All_05);
?>
