<?php

// Smartphones female q5 r1

$sq5all_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q5 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq5all_01->execute();
$rowsq5all_01 = $sq5all_01->fetch();
$pourcentagesq5all_01 = $rowsq5all_01['pourcentage'];

// Smartphones female q5 r2

$sq5all_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q5 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq5all_02->execute();
$rowsq5all_02 = $sq5all_02->fetch();
$pourcentagesq5all_02 = $rowsq5all_02['pourcentage'];

// Smartphones female q5 r3
$sq5all_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q5 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq5all_03->execute();
$rowsq5all_03 = $sq5all_03->fetch();
$pourcentagesq5all_03 = $rowsq5all_03['pourcentage'];


// Smartphones female q5 r4

$sq5all_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q5 = "4") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq5all_04->execute();
$rowsq5all_04 = $sq5all_04->fetch();
$pourcentagesq5all_04 = $rowsq5all_04['pourcentage'];


// Smartphones female q5 r5

$sq5all_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q5 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq5all_05->execute();
$rowsq5all_05 = $sq5all_05->fetch();
$pourcentagesq5all_05 = $rowsq5all_05['pourcentage'];

$sq5all = [$pourcentagesq5all_01, $pourcentagesq5all_02, $pourcentagesq5all_03, $pourcentagesq5all_04, $pourcentagesq5all_05];
?>
