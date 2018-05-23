<?php

// Smartphones female 1995 q4 r1

$sfq4_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q4 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sfq4_01->execute();
$rowsfq4_01 = $sfq4_01->fetch();
$pourcentagesfq4_01 = $rowsfq4_01['pourcentage'];

// Smartphones female 1995 q4 r2

$sfq4_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q4 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sfq4_03->execute();
$rowsfq4_03 = $sfq4_03->fetch();
$pourcentagesfq4_03 = $rowsfq4_03['pourcentage'];

// Smartphones female 1995 q4 r5

$sfq4_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q4 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sfq4_05->execute();
$rowsfq4_05 = $sfq4_05->fetch();
$pourcentagesfq4_05 = $rowsfq4_05['pourcentage'];

$data_sfq4 = array($pourcentagesfq4_01, $pourcentagesfq4_03, $pourcentagesfq4_05);
?>
