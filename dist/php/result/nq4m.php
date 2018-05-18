<?php

// apps female q4 r1

$nq4m_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1" AND q4 = "1") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1") AS pourcentage
  FROM apps_survey');
$nq4m_01->execute();
$rownq4m_01 = $nq4m_01->fetch();
$pourcentagenq4m_01 = $rownq4m_01['pourcentage'];


// apps female q4 r2

$nq4m_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1" AND q4 = "2") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1") AS pourcentage
  FROM apps_survey');
$nq4m_02->execute();
$rownq4m_02 = $nq4m_02->fetch();
$pourcentagenq4m_02 = $rownq4m_02['pourcentage'];


// apps female q4 r3
$nq4m_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1" AND q4 = "3") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1") AS pourcentage
  FROM apps_survey');
$nq4m_03->execute();
$rownq4m_03 = $nq4m_03->fetch();
$pourcentagenq4m_03 = $rownq4m_03['pourcentage'];



// apps female q4 r4

$nq4m_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1" AND q4 = "4") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1") AS pourcentage
  FROM apps_survey');
$nq4m_04->execute();
$rownq4m_04 = $nq4m_04->fetch();
$pourcentagenq4m_04 = $rownq4m_04['pourcentage'];



// apps female q4 r5

$nq4m_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1" AND q4 = "5") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1") AS pourcentage
  FROM apps_survey');
$nq4m_05->execute();
$rownq4m_05 = $nq4m_05->fetch();
$pourcentagenq4m_05 = $rownq4m_05['pourcentage'];




$nq4m = [$pourcentagenq4m_01, $pourcentagenq4m_02, $pourcentagenq4m_03, $pourcentagenq4m_04, $pourcentagenq4m_05];
?>
