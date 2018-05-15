<?php
include ('./php/connection.php');

// Smartphones female 1995 q7 r1

$nmq7_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q7 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$nmq7_01->execute();
$rownmq7_01 = $nmq7_01->fetch();
$pourcentagenmq7_01 = $rownmq7_01['pourcentage'];

// Smartphones female 1995 q7 r2

$nmq7_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q7 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$nmq7_02->execute();
$rownmq7_02 = $nmq7_02->fetch();
$pourcentagenmq7_02 = $rownmq7_02['pourcentage'];

// Smartphones female 1995 q7 r3
$nmq7_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q7 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$nmq7_03->execute();
$rownmq7_03 = $nmq7_03->fetch();
$pourcentagenmq7_03 = $rownmq7_03['pourcentage'];


// Smartphones female 1995 q7 r4

$nmq7_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q7 = "4") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$nmq7_04->execute();
$rownmq7_04 = $nmq7_04->fetch();
$pourcentagenmq7_04 = $rownmq7_04['pourcentage'];


// Smartphones female 1995 q7 r5

$nmq7_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q7 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$nmq7_05->execute();
$rownmq7_05 = $nmq7_05->fetch();
$pourcentagenmq7_05 = $rownmq7_05['pourcentage'];

$data_nmq7 = array($pourcentagenmq7_01, $pourcentagenmq7_02, $pourcentagenmq7_03, $pourcentagenmq7_04, $pourcentagenmq7_05);

?>
