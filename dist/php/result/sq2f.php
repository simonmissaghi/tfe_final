<?php
include ('./php/connection.php');

// Smartphones female q2 r1

$sq2f_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q2 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq2f_01->execute();
$rowsq2f_01 = $sq2f_01->fetch();
$pourcentagesq2f_01 = $rowsq2f_01['pourcentage'];

// Smartphones female q2 r2

$sq2f_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q2 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq2f_02->execute();
$rowsq2f_02 = $sq2f_02->fetch();
$pourcentagesq2f_02 = $rowsq2f_02['pourcentage'];

// Smartphones female q2 r3
$sq2f_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q2 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq2f_03->execute();
$rowsq2f_03 = $sq2f_03->fetch();
$pourcentagesq2f_03 = $rowsq2f_03['pourcentage'];


// Smartphones female q2 r4

$sq2f_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q2 = "4") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq2f_04->execute();
$rowsq2f_04 = $sq2f_04->fetch();
$pourcentagesq2f_04 = $rowsq2f_04['pourcentage'];


// Smartphones female q2 r5

$sq2f_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q2 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sq2f_05->execute();
$rowsq2f_05 = $sq2f_05->fetch();
$pourcentagesq2f_05 = $rowsq2f_05['pourcentage'];

$sq2f = [$pourcentagesq2f_01, $pourcentagesq2f_02, $pourcentagesq2f_03, $pourcentagesq2f_04, $pourcentagesq2f_05];
?>
