<?php

// apps female q2 r1

$aq2f_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2" AND q2 = "1") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2") AS pourcentage
  FROM apps_survey');
$aq2f_01->execute();
$rowaq2f_01 = $aq2f_01->fetch();
$pourcentageaq2f_01 = $rowaq2f_01['pourcentage'];


// apps female q2 r2

$aq2f_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2" AND q2 = "2") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2") AS pourcentage
  FROM apps_survey');
$aq2f_02->execute();
$rowaq2f_02 = $aq2f_02->fetch();
$pourcentageaq2f_02 = $rowaq2f_02['pourcentage'];


// apps female q2 r3
$aq2f_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2" AND q2 = "3") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2") AS pourcentage
  FROM apps_survey');
$aq2f_03->execute();
$rowaq2f_03 = $aq2f_03->fetch();
$pourcentageaq2f_03 = $rowaq2f_03['pourcentage'];



// apps female q2 r4

$aq2f_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2" AND q2 = "4") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2") AS pourcentage
  FROM apps_survey');
$aq2f_04->execute();
$rowaq2f_04 = $aq2f_04->fetch();
$pourcentageaq2f_04 = $rowaq2f_04['pourcentage'];



// apps female q2 r5

$aq2f_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2" AND q2 = "5") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2") AS pourcentage
  FROM apps_survey');
$aq2f_05->execute();
$rowaq2f_05 = $aq2f_05->fetch();
$pourcentageaq2f_05 = $rowaq2f_05['pourcentage'];


$aq2f = [$pourcentageaq2f_01, $pourcentageaq2f_02, $pourcentageaq2f_03, $pourcentageaq2f_04, $pourcentageaq2f_05];
?>
