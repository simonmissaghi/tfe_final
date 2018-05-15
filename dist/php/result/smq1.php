<?php
include ('/../connection.php');

// Smartphones female q1 r1

$smq1_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q1 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$smq1_01->execute();
$rowsmq1_01 = $smq1_01->fetch();
$pourcentagesmq1_01 = $rowsmq1_01['pourcentage'];

// Smartphones female q1 r2

$smq1_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q1 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$smq1_02->execute();
$rowsmq1_02 = $smq1_02->fetch();
$pourcentagesmq1_02 = $rowsmq1_02['pourcentage'];

// Smartphones female q1 r3
$smq1_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q1 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$smq1_03->execute();
$rowsmq1_03 = $smq1_03->fetch();
$pourcentagesmq1_03 = $rowsmq1_03['pourcentage'];


// Smartphones female q1 r4

$smq1_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q1 = "4") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$smq1_04->execute();
$rowsmq1_04 = $smq1_04->fetch();
$pourcentagesmq1_04 = $rowsmq1_04['pourcentage'];


// Smartphones female q1 r5

$smq1_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q1 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$smq1_05->execute();
$rowsmq1_05 = $smq1_05->fetch();
$pourcentagesmq1_05 = $rowsmq1_05['pourcentage'];

$smq1 = [$pourcentagesmq1_01, $pourcentagesmq1_02, $pourcentagesmq1_03, $pourcentagesmq1_04, $pourcentagesmq1_05];
?>
