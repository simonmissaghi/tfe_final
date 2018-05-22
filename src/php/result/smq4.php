<?php

// Smartphones female 1995 q4 r1

$smq4_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q4 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$smq4_01->execute();
$rowsmq4_01 = $smq4_01->fetch();
$pourcentagesmq4_01 = $rowsmq4_01['pourcentage'];


// Smartphones female 1995 q4 r2

// Smartphones female 1995 q4 r5

$smq4_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q4 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$smq4_05->execute();
$rowsmq4_05 = $smq4_05->fetch();
$pourcentagesmq4_05 = $rowsmq4_05['pourcentage'];


$data_smq4 = array($pourcentagesmq4_01, $pourcentagesmq4_05);
?>
