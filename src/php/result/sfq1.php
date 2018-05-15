<?php
include ('./php/connection.php');

// Smartphones male 1995 q1 r1

$sf95q1_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q1 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sf95q1_01->execute();
$rowsf95q1_01 = $sf95q1_01->fetch();
$pourcentagesf95q1_01 = $rowsf95q1_01['pourcentage'];

// Smartphones male 1995 q1 r2

$sf95q1_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q1 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sf95q1_02->execute();
$rowsf95q1_02 = $sf95q1_02->fetch();
$pourcentagesf95q1_02 = $rowsf95q1_02['pourcentage'];

// Smartphones male 1995 q1 r3
$sf95q1_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q1 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sf95q1_03->execute();
$rowsf95q1_03 = $sf95q1_03->fetch();
$pourcentagesf95q1_03 = $rowsf95q1_03['pourcentage'];


// Smartphones male 1995 q1 r4

$sf95q1_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q1 = "4") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sf95q1_04->execute();
$rowsf95q1_04 = $sf95q1_04->fetch();
$pourcentagesf95q1_04 = $rowsf95q1_04['pourcentage'];


// Smartphones male 1995 q1 r5

$sf95q1_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q1 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sf95q1_05->execute();
$rowsf95q1_05 = $sf95q1_05->fetch();
$pourcentagesf95q1_05 = $rowsf95q1_05['pourcentage'];

$data_sfq1 = array($pourcentagesf95q1_01, $pourcentagesf95q1_02, $pourcentagesf95q1_03, $pourcentagesf95q1_04, $pourcentagesf95q1_05);
?>
