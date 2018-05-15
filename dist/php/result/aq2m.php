<?php
include ('./php/connection.php');

// apps female q2 r1

$aq2m_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1" AND q2 = "1") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1") AS pourcentage
  FROM apps_survey');
$aq2m_01->execute();
$rowaq2m_01 = $aq2m_01->fetch();
$pourcentageaq2m_01 = $rowaq2m_01['pourcentage'];

// apps female q2 r2

$aq2m_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1" AND q2 = "2") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1") AS pourcentage
  FROM apps_survey');
$aq2m_02->execute();
$rowaq2m_02 = $aq2m_02->fetch();
$pourcentageaq2m_02 = $rowaq2m_02['pourcentage'];

// apps female q2 r3
$aq2m_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1" AND q2 = "3") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1") AS pourcentage
  FROM apps_survey');
$aq2m_03->execute();
$rowaq2m_03 = $aq2m_03->fetch();
$pourcentageaq2m_03 = $rowaq2m_03['pourcentage'];


// apps female q2 r4

$aq2m_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1" AND q2 = "4") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1") AS pourcentage
  FROM apps_survey');
$aq2m_04->execute();
$rowaq2m_04 = $aq2m_04->fetch();
$pourcentageaq2m_04 = $rowaq2m_04['pourcentage'];


// apps female q2 r5

$aq2m_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1" AND q2 = "5") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1") AS pourcentage
  FROM apps_survey');
$aq2m_05->execute();
$rowaq2m_05 = $aq2m_05->fetch();
$pourcentageaq2m_05 = $rowaq2m_05['pourcentage'];

$aq2m = [$pourcentageaq2m_01, $pourcentageaq2m_02, $pourcentageaq2m_03, $pourcentageaq2m_04, $pourcentageaq2m_05];
?>
