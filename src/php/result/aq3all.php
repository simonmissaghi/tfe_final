<?php

// Smartphones female q3 r1

$aq3all_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE q3 = "1") * 100 /
  (SELECT COUNT(*) FROM apps_survey) AS pourcentage
  FROM apps_survey');
$aq3all_01->execute();
$rowaq3all_01 = $aq3all_01->fetch();
$pourcentageaq3all_01 = $rowaq3all_01['pourcentage'];


// Smartphones female q3 r2

$aq3all_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE q3 = "2") * 100 /
  (SELECT COUNT(*) FROM apps_survey) AS pourcentage
  FROM apps_survey');
$aq3all_02->execute();
$rowaq3all_02 = $aq3all_02->fetch();
$pourcentageaq3all_02 = $rowaq3all_02['pourcentage'];


// Smartphones female q3 r3
$aq3all_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE q3 = "3") * 100 /
  (SELECT COUNT(*) FROM apps_survey) AS pourcentage
  FROM apps_survey');
$aq3all_03->execute();
$rowaq3all_03 = $aq3all_03->fetch();
$pourcentageaq3all_03 = $rowaq3all_03['pourcentage'];



// Smartphones female q3 r4

$aq3all_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE q3 = "4") * 100 /
  (SELECT COUNT(*) FROM apps_survey) AS pourcentage
  FROM apps_survey');
$aq3all_04->execute();
$rowaq3all_04 = $aq3all_04->fetch();
$pourcentageaq3all_04 = $rowaq3all_04['pourcentage'];



// Smartphones female q3 r5

$aq3all_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE q3 = "5") * 100 /
  (SELECT COUNT(*) FROM apps_survey) AS pourcentage
  FROM apps_survey');
$aq3all_05->execute();
$rowaq3all_05 = $aq3all_05->fetch();
$pourcentageaq3all_05 = $rowaq3all_05['pourcentage'];

$aq3all = [$pourcentageaq3all_01, $pourcentageaq3all_02, $pourcentageaq3all_03, $pourcentageaq3all_04, $pourcentageaq3all_05];
?>
