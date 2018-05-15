<?php
include ('./php/connection.php');

// Smartphones female q8 r1

$sq8all_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q8 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq8all_01->execute();
$rowsq8all_01 = $sq8all_01->fetch();
$pourcentagesq8all_01 = $rowsq8all_01['pourcentage'];

// Smartphones female q8 r2

$sq8all_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q8 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq8all_02->execute();
$rowsq8all_02 = $sq8all_02->fetch();
$pourcentagesq8all_02 = $rowsq8all_02['pourcentage'];

// Smartphones female q8 r3
$sq8all_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q8 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq8all_03->execute();
$rowsq8all_03 = $sq8all_03->fetch();
$pourcentagesq8all_03 = $rowsq8all_03['pourcentage'];


$sq8all = [$pourcentagesq8all_01, $pourcentagesq8all_02, $pourcentagesq8all_03];
?>
