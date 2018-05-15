<?php
include ('./php/connection.php');

// apps female q2 r1

$nq2m_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1" AND q2 = "1") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1") AS pourcentage
  FROM apps_survey');
$nq2m_01->execute();
$rownq2m_01 = $nq2m_01->fetch();
$pourcentagenq2m_01 = $rownq2m_01['pourcentage'];

// apps female q2 r2

$nq2m_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1" AND q2 = "2") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1") AS pourcentage
  FROM apps_survey');
$nq2m_02->execute();
$rownq2m_02 = $nq2m_02->fetch();
$pourcentagenq2m_02 = $rownq2m_02['pourcentage'];

// apps female q2 r3
$nq2m_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1" AND q2 = "3") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1") AS pourcentage
  FROM apps_survey');
$nq2m_03->execute();
$rownq2m_03 = $nq2m_03->fetch();
$pourcentagenq2m_03 = $rownq2m_03['pourcentage'];


// apps female q2 r4

$nq2m_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1" AND q2 = "4") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1") AS pourcentage
  FROM apps_survey');
$nq2m_04->execute();
$rownq2m_04 = $nq2m_04->fetch();
$pourcentagenq2m_04 = $rownq2m_04['pourcentage'];


// apps female q2 r5

$nq2m_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1" AND q2 = "5") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1") AS pourcentage
  FROM apps_survey');
$nq2m_05->execute();
$rownq2m_05 = $nq2m_05->fetch();
$pourcentagenq2m_05 = $rownq2m_05['pourcentage'];

// apps female q2 r6

$nq2m_06 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1" AND q2 = "6") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1") AS pourcentage
  FROM apps_survey');
$nq2m_06->execute();
$rownq2m_06 = $nq2m_06->fetch();
$pourcentagenq2m_06 = $rownq2m_06['pourcentage'];

$nq2m = [$pourcentagenq2m_01, $pourcentagenq2m_02, $pourcentagenq2m_03, $pourcentagenq2m_04, $pourcentagenq2m_05, $pourcentagenq2m_06];
?>
