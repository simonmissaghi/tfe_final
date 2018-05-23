<?php
include ('connection.php');

// Smartphones male 1995 q1 r1

$sm95q1_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q1 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sm95q1_01->execute();
$rowsm95q1_01 = $sm95q1_01->fetch();
$pourcentagesm95q1_01 = $rowsm95q1_01['pourcentage'];

// Smartphones male 1995 q1 r2

$sm95q1_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q1 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sm95q1_02->execute();
$rowsm95q1_02 = $sm95q1_02->fetch();
$pourcentagesm95q1_02 = $rowsm95q1_02['pourcentage'];

// Smartphones male 1995 q1 r3
$sm95q1_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q1 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sm95q1_03->execute();
$rowsm95q1_03 = $sm95q1_03->fetch();
$pourcentagesm95q1_03 = $rowsm95q1_03['pourcentage'];


// Smartphones male 1995 q1 r4

$sm95q1_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q1 = "4") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sm95q1_04->execute();
$rowsm95q1_04 = $sm95q1_04->fetch();
$pourcentagesm95q1_04 = $rowsm95q1_04['pourcentage'];


// Smartphones male 1995 q1 r5

$sm95q1_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q1 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sm95q1_05->execute();
$rowsm95q1_05 = $sm95q1_05->fetch();
$pourcentagesm95q1_05 = $rowsm95q1_05['pourcentage'];

$data_smq1 = array($pourcentagesm95q1_01, $pourcentagesm95q1_02, $pourcentagesm95q1_03, $pourcentagesm95q1_04, $pourcentagesm95q1_05);
?>
