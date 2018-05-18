<?php

// Smartphones female 1995 q2 r1

$sfq2_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q2 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sfq2_01->execute();
$rowsfq2_01 = $sfq2_01->fetch();
$pourcentagesfq2_01 = $rowsfq2_01['pourcentage'];


// Smartphones female 1995 q2 r2

$sfq2_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q2 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sfq2_02->execute();
$rowsfq2_02 = $sfq2_02->fetch();
$pourcentagesfq2_02 = $rowsfq2_02['pourcentage'];


// Smartphones female 1995 q2 r3
$sfq2_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q2 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sfq2_03->execute();
$rowsfq2_03 = $sfq2_03->fetch();
$pourcentagesfq2_03 = $rowsfq2_03['pourcentage'];



// Smartphones female 1995 q2 r4

$sfq2_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q2 = "4") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sfq2_04->execute();
$rowsfq2_04 = $sfq2_04->fetch();
$pourcentagesfq2_04 = $rowsfq2_04['pourcentage'];



// Smartphones female 1995 q2 r5

$sfq2_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q2 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$sfq2_05->execute();
$rowsfq2_05 = $sfq2_05->fetch();
$pourcentagesfq2_05 = $rowsfq2_05['pourcentage'];


$data_sfq2 = array($pourcentagesfq2_01, $pourcentagesfq2_02, $pourcentagesfq2_03, $pourcentagesfq2_04, $pourcentagesfq2_05);
?>
