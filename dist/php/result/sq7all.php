<?php
include ('./php/connection.php');

// Smartphones female q7 r1

$sq7all_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q7 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq7all_01->execute();
$rowsq7all_01 = $sq7all_01->fetch();
$pourcentagesq7all_01 = $rowsq7all_01['pourcentage'];

// Smartphones female q7 r2

$sq7all_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q7 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq7all_02->execute();
$rowsq7all_02 = $sq7all_02->fetch();
$pourcentagesq7all_02 = $rowsq7all_02['pourcentage'];

// Smartphones female q7 r3
$sq7all_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q7 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq7all_03->execute();
$rowsq7all_03 = $sq7all_03->fetch();
$pourcentagesq7all_03 = $rowsq7all_03['pourcentage'];


// Smartphones female q7 r4

$sq7all_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q7 = "4") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq7all_04->execute();
$rowsq7all_04 = $sq7all_04->fetch();
$pourcentagesq7all_04 = $rowsq7all_04['pourcentage'];


// Smartphones female q7 r5

$sq7all_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q7 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq7all_05->execute();
$rowsq7all_05 = $sq7all_05->fetch();
$pourcentagesq7all_05 = $rowsq7all_05['pourcentage'];

$sq7all = [$pourcentagesq7all_01, $pourcentagesq7all_02, $pourcentagesq7all_03, $pourcentagesq7all_04, $pourcentagesq7all_05];
?>
