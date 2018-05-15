<?php
include ('./php/connection.php');

// Smartphones female 1995 q2 r1

$smq2_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q2 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$smq2_01->execute();
$rowsmq2_01 = $smq2_01->fetch();
$pourcentagesmq2_01 = $rowsmq2_01['pourcentage'];

// Smartphones female 1995 q2 r2

$smq2_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q2 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$smq2_02->execute();
$rowsmq2_02 = $smq2_02->fetch();
$pourcentagesmq2_02 = $rowsmq2_02['pourcentage'];

// Smartphones female 1995 q2 r3
$smq2_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q2 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$smq2_03->execute();
$rowsmq2_03 = $smq2_03->fetch();
$pourcentagesmq2_03 = $rowsmq2_03['pourcentage'];


// Smartphones female 1995 q2 r4

$smq2_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q2 = "4") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$smq2_04->execute();
$rowsmq2_04 = $smq2_04->fetch();
$pourcentagesmq2_04 = $rowsmq2_04['pourcentage'];


// Smartphones female 1995 q2 r5

$smq2_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q2 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$smq2_05->execute();
$rowsmq2_05 = $smq2_05->fetch();
$pourcentagesmq2_05 = $rowsmq2_05['pourcentage'];

$data_smq2 = array($pourcentagesmq2_01, $pourcentagesmq2_02, $pourcentagesmq2_03, $pourcentagesmq2_04, $pourcentagesmq2_05);
?>
