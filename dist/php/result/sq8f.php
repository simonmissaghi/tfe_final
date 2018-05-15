<?php
include ('./php/connection.php');

// Smartphones female q8 r1

$sq8f_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q8 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq8f_01->execute();
$rowsq8f_01 = $sq8f_01->fetch();
$pourcentagesq8f_01 = $rowsq8f_01['pourcentage'];

// Smartphones female q8 r2

$sq8f_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q8 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq8f_02->execute();
$rowsq8f_02 = $sq8f_02->fetch();
$pourcentagesq8f_02 = $rowsq8f_02['pourcentage'];

// Smartphones female q8 r3
$sq8f_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q8 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq8f_03->execute();
$rowsq8f_03 = $sq8f_03->fetch();
$pourcentagesq8f_03 = $rowsq8f_03['pourcentage'];


$sq8f = [$pourcentagesq8f_01, $pourcentagesq8f_02, $pourcentagesq8f_03];
?>
