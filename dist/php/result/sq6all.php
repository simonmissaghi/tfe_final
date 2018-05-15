<?php
include ('./php/connection.php');

// Smartphones female q6 r1

$sq6all_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q6 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq6all_01->execute();
$rowsq6all_01 = $sq6all_01->fetch();
$pourcentagesq6all_01 = $rowsq6all_01['pourcentage'];

// Smartphones female q6 r2

$sq6all_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q6 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq6all_02->execute();
$rowsq6all_02 = $sq6all_02->fetch();
$pourcentagesq6all_02 = $rowsq6all_02['pourcentage'];

// Smartphones female q6 r3
$sq6all_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q6 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq6all_03->execute();
$rowsq6all_03 = $sq6all_03->fetch();
$pourcentagesq6all_03 = $rowsq6all_03['pourcentage'];


// Smartphones female q6 r4

$sq6all_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q6 = "4") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq6all_04->execute();
$rowsq6all_04 = $sq6all_04->fetch();
$pourcentagesq6all_04 = $rowsq6all_04['pourcentage'];


// Smartphones female q6 r5

$sq6all_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q6 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq6all_05->execute();
$rowsq6all_05 = $sq6all_05->fetch();
$pourcentagesq6all_05 = $rowsq6all_05['pourcentage'];

$sq6all = [$pourcentagesq6all_01, $pourcentagesq6all_02, $pourcentagesq6all_03, $pourcentagesq6all_04, $pourcentagesq6all_05];
?>
