<?php

// Smartphones female q7 r1

$sq7f_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q7 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq7f_01->execute();
$rowsq7f_01 = $sq7f_01->fetch();
$pourcentagesq7f_01 = $rowsq7f_01['pourcentage'];

// Smartphones female q7 r2

$sq7f_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q7 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq7f_02->execute();
$rowsq7f_02 = $sq7f_02->fetch();
$pourcentagesq7f_02 = $rowsq7f_02['pourcentage'];

// Smartphones female q7 r3
$sq7f_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q7 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq7f_03->execute();
$rowsq7f_03 = $sq7f_03->fetch();
$pourcentagesq7f_03 = $rowsq7f_03['pourcentage'];


// Smartphones female q7 r4

$sq7f_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q7 = "4") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq7f_04->execute();
$rowsq7f_04 = $sq7f_04->fetch();
$pourcentagesq7f_04 = $rowsq7f_04['pourcentage'];


// Smartphones female q7 r5

$sq7f_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q7 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq7f_05->execute();
$rowsq7f_05 = $sq7f_05->fetch();
$pourcentagesq7f_05 = $rowsq7f_05['pourcentage'];

$sq7f = [$pourcentagesq7f_01, $pourcentagesq7f_02, $pourcentagesq7f_03, $pourcentagesq7f_04, $pourcentagesq7f_05];
?>
