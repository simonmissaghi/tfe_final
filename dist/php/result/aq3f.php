<?php
include ('./php/connection.php');

// apps female q3 r1

$aq3f_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2" AND q3 = "1") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2") AS pourcentage
  FROM apps_survey');
$aq3f_01->execute();
$rowaq3f_01 = $aq3f_01->fetch();
$pourcentageaq3f_01 = $rowaq3f_01['pourcentage'];

// apps female q3 r2

$aq3f_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2" AND q3 = "2") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2") AS pourcentage
  FROM apps_survey');
$aq3f_02->execute();
$rowaq3f_02 = $aq3f_02->fetch();
$pourcentageaq3f_02 = $rowaq3f_02['pourcentage'];

// apps female q3 r3
$aq3f_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2" AND q3 = "3") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2") AS pourcentage
  FROM apps_survey');
$aq3f_03->execute();
$rowaq3f_03 = $aq3f_03->fetch();
$pourcentageaq3f_03 = $rowaq3f_03['pourcentage'];


// apps female q3 r4

$aq3f_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2" AND q3 = "4") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2") AS pourcentage
  FROM apps_survey');
$aq3f_04->execute();
$rowaq3f_04 = $aq3f_04->fetch();
$pourcentageaq3f_04 = $rowaq3f_04['pourcentage'];


// apps female q3 r5

$aq3f_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2" AND q3 = "5") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2") AS pourcentage
  FROM apps_survey');
$aq3f_05->execute();
$rowaq3f_05 = $aq3f_05->fetch();
$pourcentageaq3f_05 = $rowaq3f_05['pourcentage'];

$aq3f = [$pourcentageaq3f_01, $pourcentageaq3f_02, $pourcentageaq3f_03, $pourcentageaq3f_04, $pourcentageaq3f_05];
?>
