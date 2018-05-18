<?php

// Smartphones female q1 r1

$sfq1_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q1 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sfq1_01->execute();
$rowsfq1_01 = $sfq1_01->fetch();
$pourcentagesfq1_01 = $rowsfq1_01['pourcentage'];


// Smartphones female q1 r2

$sfq1_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q1 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sfq1_02->execute();
$rowsfq1_02 = $sfq1_02->fetch();
$pourcentagesfq1_02 = $rowsfq1_02['pourcentage'];


// Smartphones female q1 r3
$sfq1_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q1 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sfq1_03->execute();
$rowsfq1_03 = $sfq1_03->fetch();
$pourcentagesfq1_03 = $rowsfq1_03['pourcentage'];



// Smartphones female q1 r4

$sfq1_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q1 = "4") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sfq1_04->execute();
$rowsfq1_04 = $sfq1_04->fetch();
$pourcentagesfq1_04 = $rowsfq1_04['pourcentage'];



// Smartphones female q1 r5

$sfq1_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q1 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sfq1_05->execute();
$rowsfq1_05 = $sfq1_05->fetch();
$pourcentagesfq1_05 = $rowsfq1_05['pourcentage'];


$sfq1 = [$pourcentagesfq1_01, $pourcentagesfq1_02, $pourcentagesfq1_03, $pourcentagesfq1_04, $pourcentagesfq1_05];
?>
