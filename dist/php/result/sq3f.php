<?php
include ('./php/connection.php');

// Smartphones female q3 r1

$sq3f_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q3 = "[1],") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq3f_01->execute();
$rowsq3f_01 = $sq3f_01->fetch();
$pourcentagesq3f_01 = $rowsq3f_01['pourcentage'];

// Smartphones female q3 r2

$sq3f_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q3 = "[2],") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq3f_02->execute();
$rowsq3f_02 = $sq3f_02->fetch();
$pourcentagesq3f_02 = $rowsq3f_02['pourcentage'];

// Smartphones female q3 r3
$sq3f_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q3 = "[3],") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq3f_03->execute();
$rowsq3f_03 = $sq3f_03->fetch();
$pourcentagesq3f_03 = $rowsq3f_03['pourcentage'];


// Smartphones female q3 r4

$sq3f_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q3 = "[4],") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq3f_04->execute();
$rowsq3f_04 = $sq3f_04->fetch();
$pourcentagesq3f_04 = $rowsq3f_04['pourcentage'];


// Smartphones female q3 r5

$sq3f_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q3 = "[5],") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq3f_05->execute();
$rowsq3f_05 = $sq3f_05->fetch();
$pourcentagesq3f_05 = $rowsq3f_05['pourcentage'];

// Smartphones female q3 r6

// $sq3f_05 = $connection->prepare('SELECT
//   (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q3 = "[6]") * 100 /
//   (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
//   FROM smartphones_survey');
// $sq3f_05->execute();
// $rowsq3f_05 = $sq3f_05->fetch();
// $pourcentagesq3f_05 = $rowsq3f_05['pourcentage'];

$sq3f = [$pourcentagesq3f_01, $pourcentagesq3f_02, $pourcentagesq3f_03, $pourcentagesq3f_04, $pourcentagesq3f_05];
?>
