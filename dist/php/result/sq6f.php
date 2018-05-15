<?php
include ('./php/connection.php');

// Smartphones female q6 r1

$sq6f_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q6 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq6f_01->execute();
$rowsq6f_01 = $sq6f_01->fetch();
$pourcentagesq6f_01 = $rowsq6f_01['pourcentage'];

// Smartphones female q6 r2

$sq6f_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q6 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq6f_02->execute();
$rowsq6f_02 = $sq6f_02->fetch();
$pourcentagesq6f_02 = $rowsq6f_02['pourcentage'];

// Smartphones female q6 r3
$sq6f_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q6 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq6f_03->execute();
$rowsq6f_03 = $sq6f_03->fetch();
$pourcentagesq6f_03 = $rowsq6f_03['pourcentage'];


// Smartphones female q6 r4

$sq6f_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q6 = "4") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq6f_04->execute();
$rowsq6f_04 = $sq6f_04->fetch();
$pourcentagesq6f_04 = $rowsq6f_04['pourcentage'];


// Smartphones female q6 r5

$sq6f_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q6 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq6f_05->execute();
$rowsq6f_05 = $sq6f_05->fetch();
$pourcentagesq6f_05 = $rowsq6f_05['pourcentage'];

$sq6f = [$pourcentagesq6f_01, $pourcentagesq6f_02, $pourcentagesq6f_03, $pourcentagesq6f_04, $pourcentagesq6f_05];
?>
