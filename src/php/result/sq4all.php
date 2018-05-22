<?php

// Smartphones female q4 r1

$sq4all_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q4 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq4all_01->execute();
$rowsq4all_01 = $sq4all_01->fetch();
$pourcentagesq4all_01 = $rowsq4all_01['pourcentage'];


// Smartphones female q4 r2

$sq4all_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q4 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq4all_02->execute();
$rowsq4all_02 = $sq4all_02->fetch();
$pourcentagesq4all_02 = $rowsq4all_02['pourcentage'];


// Smartphones female q4 r3
$sq4all_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q4 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq4all_03->execute();
$rowsq4all_03 = $sq4all_03->fetch();
$pourcentagesq4all_03 = $rowsq4all_03['pourcentage'];



// Smartphones female q4 r4

$sq4all_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q4 = "4") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq4all_04->execute();
$rowsq4all_04 = $sq4all_04->fetch();
$pourcentagesq4all_04 = $rowsq4all_04['pourcentage'];



// Smartphones female q4 r5

$sq4all_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q4 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq4all_05->execute();
$rowsq4all_05 = $sq4all_05->fetch();
$pourcentagesq4all_05 = $rowsq4all_05['pourcentage'];


$sq4all = [$pourcentagesq4all_01, $pourcentagesq4all_02, $pourcentagesq4all_03, $pourcentagesq4all_04, $pourcentagesq4all_05];
?>
