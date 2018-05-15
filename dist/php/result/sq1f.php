<?php
include ('./php/connection.php');

// Smartphones female q1 r1

$sq1f_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q1 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq1f_01->execute();
$rowsq1f_01 = $sq1f_01->fetch();
$pourcentagesq1f_01 = $rowsq1f_01['pourcentage'];

// Smartphones female q1 r2

$sq1f_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q1 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq1f_02->execute();
$rowsq1f_02 = $sq1f_02->fetch();
$pourcentagesq1f_02 = $rowsq1f_02['pourcentage'];

// Smartphones female q1 r3
$sq1f_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q1 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq1f_03->execute();
$rowsq1f_03 = $sq1f_03->fetch();
$pourcentagesq1f_03 = $rowsq1f_03['pourcentage'];


// Smartphones female q1 r4

$sq1f_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q1 = "4") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq1f_04->execute();
$rowsq1f_04 = $sq1f_04->fetch();
$pourcentagesq1f_04 = $rowsq1f_04['pourcentage'];


// Smartphones female q1 r5

$sq1f_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q1 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq1f_05->execute();
$rowsq1f_05 = $sq1f_05->fetch();
$pourcentagesq1f_05 = $rowsq1f_05['pourcentage'];

$sq1f = [$pourcentagesq1f_01, $pourcentagesq1f_02, $pourcentagesq1f_03, $pourcentagesq1f_04, $pourcentagesq1f_05];
?>
