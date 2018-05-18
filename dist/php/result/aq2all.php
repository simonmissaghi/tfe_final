<?php

// Smartphones female q2 r1

$aq2all_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE q2 = "1") * 100 /
  (SELECT COUNT(*) FROM apps_survey) AS pourcentage
  FROM apps_survey');
$aq2all_01->execute();
$rowaq2all_01 = $aq2all_01->fetch();
$pourcentageaq2all_01 = $rowaq2all_01['pourcentage'];


// Smartphones female q2 r2

$aq2all_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE q2 = "2") * 100 /
  (SELECT COUNT(*) FROM apps_survey) AS pourcentage
  FROM apps_survey');
$aq2all_02->execute();
$rowaq2all_02 = $aq2all_02->fetch();
$pourcentageaq2all_02 = $rowaq2all_02['pourcentage'];


// Smartphones female q2 r3
$aq2all_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE q2 = "3") * 100 /
  (SELECT COUNT(*) FROM apps_survey) AS pourcentage
  FROM apps_survey');
$aq2all_03->execute();
$rowaq2all_03 = $aq2all_03->fetch();
$pourcentageaq2all_03 = $rowaq2all_03['pourcentage'];



// Smartphones female q2 r4

$aq2all_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE q2 = "4") * 100 /
  (SELECT COUNT(*) FROM apps_survey) AS pourcentage
  FROM apps_survey');
$aq2all_04->execute();
$rowaq2all_04 = $aq2all_04->fetch();
$pourcentageaq2all_04 = $rowaq2all_04['pourcentage'];



// Smartphones female q2 r5

$aq2all_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE q2 = "5") * 100 /
  (SELECT COUNT(*) FROM apps_survey) AS pourcentage
  FROM apps_survey');
$aq2all_05->execute();
$rowaq2all_05 = $aq2all_05->fetch();
$pourcentageaq2all_05 = $rowaq2all_05['pourcentage'];


$aq2all = [$pourcentageaq2all_01, $pourcentageaq2all_02, $pourcentageaq2all_03, $pourcentageaq2all_04, $pourcentageaq2all_05];
?>
