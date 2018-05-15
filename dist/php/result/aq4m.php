<?php
include ('./php/connection.php');

// apps female q4 r1

$aq4m_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1" AND q4 = "1") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1") AS pourcentage
  FROM apps_survey');
$aq4m_01->execute();
$rowaq4m_01 = $aq4m_01->fetch();
$pourcentageaq4m_01 = $rowaq4m_01['pourcentage'];

// apps female q4 r2

$aq4m_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1" AND q4 = "2") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1") AS pourcentage
  FROM apps_survey');
$aq4m_02->execute();
$rowaq4m_02 = $aq4m_02->fetch();
$pourcentageaq4m_02 = $rowaq4m_02['pourcentage'];

// apps female q4 r3
$aq4m_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1" AND q4 = "3") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1") AS pourcentage
  FROM apps_survey');
$aq4m_03->execute();
$rowaq4m_03 = $aq4m_03->fetch();
$pourcentageaq4m_03 = $rowaq4m_03['pourcentage'];


// apps female q4 r4

$aq4m_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1" AND q4 = "4") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1") AS pourcentage
  FROM apps_survey');
$aq4m_04->execute();
$rowaq4m_04 = $aq4m_04->fetch();
$pourcentageaq4m_04 = $rowaq4m_04['pourcentage'];


// apps female q4 r5

$aq4m_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1" AND q4 = "5") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1") AS pourcentage
  FROM apps_survey');
$aq4m_05->execute();
$rowaq4m_05 = $aq4m_05->fetch();
$pourcentageaq4m_05 = $rowaq4m_05['pourcentage'];

$aq4m = [$pourcentageaq4m_01, $pourcentageaq4m_02, $pourcentageaq4m_03, $pourcentageaq4m_04, $pourcentageaq4m_05];
?>
