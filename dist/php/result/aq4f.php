<?php

// apps female q4 r1

$aq4f_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2" AND q4 = "1") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2") AS pourcentage
  FROM apps_survey');
$aq4f_01->execute();
$rowaq4f_01 = $aq4f_01->fetch();
$pourcentageaq4f_01 = $rowaq4f_01['pourcentage'];


// apps female q4 r2

$aq4f_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2" AND q4 = "2") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2") AS pourcentage
  FROM apps_survey');
$aq4f_02->execute();
$rowaq4f_02 = $aq4f_02->fetch();
$pourcentageaq4f_02 = $rowaq4f_02['pourcentage'];


// apps female q4 r3
$aq4f_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2" AND q4 = "3") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2") AS pourcentage
  FROM apps_survey');
$aq4f_03->execute();
$rowaq4f_03 = $aq4f_03->fetch();
$pourcentageaq4f_03 = $rowaq4f_03['pourcentage'];



// apps female q4 r4

$aq4f_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2" AND q4 = "4") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2") AS pourcentage
  FROM apps_survey');
$aq4f_04->execute();
$rowaq4f_04 = $aq4f_04->fetch();
$pourcentageaq4f_04 = $rowaq4f_04['pourcentage'];



// apps female q4 r5

$aq4f_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2" AND q4 = "5") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2") AS pourcentage
  FROM apps_survey');
$aq4f_05->execute();
$rowaq4f_05 = $aq4f_05->fetch();
$pourcentageaq4f_05 = $rowaq4f_05['pourcentage'];


$aq4f = [$pourcentageaq4f_01, $pourcentageaq4f_02, $pourcentageaq4f_03, $pourcentageaq4f_04, $pourcentageaq4f_05];
?>
