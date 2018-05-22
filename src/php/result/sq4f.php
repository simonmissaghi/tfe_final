<?php

// Smartphones female q4 r1

$sq4f_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q4 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq4f_01->execute();
$rowsq4f_01 = $sq4f_01->fetch();
$pourcentagesq4f_01 = $rowsq4f_01['pourcentage'];


// Smartphones female q4 r2

$sq4f_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q4 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq4f_02->execute();
$rowsq4f_02 = $sq4f_02->fetch();
$pourcentagesq4f_02 = $rowsq4f_02['pourcentage'];


// Smartphones female q4 r3
$sq4f_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q4 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq4f_03->execute();
$rowsq4f_03 = $sq4f_03->fetch();
$pourcentagesq4f_03 = $rowsq4f_03['pourcentage'];



// Smartphones female q4 r4

$sq4f_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q4 = "4") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq4f_04->execute();
$rowsq4f_04 = $sq4f_04->fetch();
$pourcentagesq4f_04 = $rowsq4f_04['pourcentage'];



// Smartphones female q4 r5

$sq4f_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q4 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq4f_05->execute();
$rowsq4f_05 = $sq4f_05->fetch();
$pourcentagesq4f_05 = $rowsq4f_05['pourcentage'];


$sq4f = [$pourcentagesq4f_01, $pourcentagesq4f_02, $pourcentagesq4f_03, $pourcentagesq4f_04, $pourcentagesq4f_05];
?>
