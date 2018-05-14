<?php
include ('./php/connection.php');

// Smartphones female 1995 q8 r1

$smq8_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q8 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$smq8_01->execute();
$rowsmq8_01 = $smq8_01->fetch();
$pourcentagesmq8_01 = $rowsmq8_01['pourcentage'];

// Smartphones female 1995 q8 r2

$smq8_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q8 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$smq8_02->execute();
$rowsmq8_02 = $smq8_02->fetch();
$pourcentagesmq8_02 = $rowsmq8_02['pourcentage'];

// Smartphones female 1995 q8 r3
$smq8_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q8 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$smq8_03->execute();
$rowsmq8_03 = $smq8_03->fetch();
$pourcentagesmq8_03 = $rowsmq8_03['pourcentage'];


$data_sfq8 = array($pourcentagesmq8_01, $pourcentagesmq8_02, $pourcentagesmq8_03);
?>
