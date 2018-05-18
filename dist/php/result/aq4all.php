<?php

// Smartphones female q4 r1

$aq4all_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE q4 = "1") * 100 /
  (SELECT COUNT(*) FROM apps_survey) AS pourcentage
  FROM apps_survey');
$aq4all_01->execute();
$rowaq4all_01 = $aq4all_01->fetch();
$pourcentageaq4all_01 = $rowaq4all_01['pourcentage'];


// Smartphones female q4 r2

$aq4all_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE q4 = "2") * 100 /
  (SELECT COUNT(*) FROM apps_survey) AS pourcentage
  FROM apps_survey');
$aq4all_02->execute();
$rowaq4all_02 = $aq4all_02->fetch();
$pourcentageaq4all_02 = $rowaq4all_02['pourcentage'];


// Smartphones female q4 r3
$aq4all_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE q4 = "3") * 100 /
  (SELECT COUNT(*) FROM apps_survey) AS pourcentage
  FROM apps_survey');
$aq4all_03->execute();
$rowaq4all_03 = $aq4all_03->fetch();
$pourcentageaq4all_03 = $rowaq4all_03['pourcentage'];



// Smartphones female q4 r4

$aq4all_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE q4 = "4") * 100 /
  (SELECT COUNT(*) FROM apps_survey) AS pourcentage
  FROM apps_survey');
$aq4all_04->execute();
$rowaq4all_04 = $aq4all_04->fetch();
$pourcentageaq4all_04 = $rowaq4all_04['pourcentage'];



// Smartphones female q4 r5

$aq4all_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE q4 = "5") * 100 /
  (SELECT COUNT(*) FROM apps_survey) AS pourcentage
  FROM apps_survey');
$aq4all_05->execute();
$rowaq4all_05 = $aq4all_05->fetch();
$pourcentageaq4all_05 = $rowaq4all_05['pourcentage'];


$aq4all = [$pourcentageaq4all_01, $pourcentageaq4all_02, $pourcentageaq4all_03, $pourcentageaq4all_04, $pourcentageaq4all_05];
?>
