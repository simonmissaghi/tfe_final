<?php

// apps female q3 r1

$aq3m_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1" AND q3 = "1") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1") AS pourcentage
  FROM apps_survey');
$aq3m_01->execute();
$rowaq3m_01 = $aq3m_01->fetch();
$pourcentageaq3m_01 = $rowaq3m_01['pourcentage'];


// apps female q3 r2

$aq3m_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1" AND q3 = "2") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1") AS pourcentage
  FROM apps_survey');
$aq3m_02->execute();
$rowaq3m_02 = $aq3m_02->fetch();
$pourcentageaq3m_02 = $rowaq3m_02['pourcentage'];


// apps female q3 r3
$aq3m_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1" AND q3 = "3") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1") AS pourcentage
  FROM apps_survey');
$aq3m_03->execute();
$rowaq3m_03 = $aq3m_03->fetch();
$pourcentageaq3m_03 = $rowaq3m_03['pourcentage'];



// apps female q3 r4

$aq3m_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1" AND q3 = "4") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1") AS pourcentage
  FROM apps_survey');
$aq3m_04->execute();
$rowaq3m_04 = $aq3m_04->fetch();
$pourcentageaq3m_04 = $rowaq3m_04['pourcentage'];



// apps female q3 r5

$aq3m_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1" AND q3 = "5") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1") AS pourcentage
  FROM apps_survey');
$aq3m_05->execute();
$rowaq3m_05 = $aq3m_05->fetch();
$pourcentageaq3m_05 = $rowaq3m_05['pourcentage'];


$aq3m = [$pourcentageaq3m_01, $pourcentageaq3m_02, $pourcentageaq3m_03, $pourcentageaq3m_04, $pourcentageaq3m_05];
?>
