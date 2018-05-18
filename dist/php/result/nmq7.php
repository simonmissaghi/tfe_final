<?php

// Smartphones female 1995 q7 r1

$nmq7_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q7 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$nmq7_01->execute();
$rownmq7_01 = $nmq7_01->fetch();
$pourcentagenmq7_01 = $rownmq7_01['pourcentage'];



$nmq7_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q7 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$nmq7_05->execute();
$rownmq7_05 = $nmq7_05->fetch();
$pourcentagenmq7_05 = $rownmq7_05['pourcentage'];


$data_nmq7 = array($pourcentagenmq7_01, $pourcentagenmq7_05);

?>
