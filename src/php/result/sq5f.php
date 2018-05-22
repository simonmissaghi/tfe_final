<?php

// Smartphones female q5 r1

$sq5f_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q5 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq5f_01->execute();
$rowsq5f_01 = $sq5f_01->fetch();
$pourcentagesq5f_01 = $rowsq5f_01['pourcentage'];

// Smartphones female q5 r2

$sq5f_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q5 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq5f_02->execute();
$rowsq5f_02 = $sq5f_02->fetch();
$pourcentagesq5f_02 = $rowsq5f_02['pourcentage'];

// Smartphones female q5 r3
$sq5f_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q5 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq5f_03->execute();
$rowsq5f_03 = $sq5f_03->fetch();
$pourcentagesq5f_03 = $rowsq5f_03['pourcentage'];


// Smartphones female q5 r4

$sq5f_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q5 = "4") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq5f_04->execute();
$rowsq5f_04 = $sq5f_04->fetch();
$pourcentagesq5f_04 = $rowsq5f_04['pourcentage'];


// Smartphones female q5 r5

$sq5f_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q5 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq5f_05->execute();
$rowsq5f_05 = $sq5f_05->fetch();
$pourcentagesq5f_05 = $rowsq5f_05['pourcentage'];

$sq5f = [$pourcentagesq5f_01, $pourcentagesq5f_02, $pourcentagesq5f_03, $pourcentagesq5f_04, $pourcentagesq5f_05];
?>
