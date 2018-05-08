<?php
include ('connection.php');

// Smartphones male 1995 q2 r1

$sm95q2_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q2 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sm95q2_01->execute();
$rowsm95q2_01 = $sm95q2_01->fetch();
$pourcentagesm95q2_01 = $rowsm95q2_01['pourcentage'];

// Smartphones male 1995 q2 r2

$sm95q2_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q2 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sm95q2_02->execute();
$rowsm95q2_02 = $sm95q2_02->fetch();
$pourcentagesm95q2_02 = $rowsm95q2_02['pourcentage'];

// Smartphones male 1995 q2 r3
$sm95q2_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q2 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sm95q2_03->execute();
$rowsm95q2_03 = $sm95q2_03->fetch();
$pourcentagesm95q2_03 = $rowsm95q2_03['pourcentage'];


// Smartphones male 1995 q2 r4

$sm95q2_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q2 = "4") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sm95q2_04->execute();
$rowsm95q2_04 = $sm95q2_04->fetch();
$pourcentagesm95q2_04 = $rowsm95q2_04['pourcentage'];


// Smartphones male 1995 q2 r5

$sm95q2_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q2 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sm95q2_05->execute();
$rowsm95q2_05 = $sm95q2_05->fetch();
$pourcentagesm95q2_05 = $rowsm95q2_05['pourcentage'];

$data_smq2 = array($pourcentagesm95q2_01, $pourcentagesm95q2_02, $pourcentagesm95q2_03, $pourcentagesm95q2_04, $pourcentagesm95q2_05);
?>
