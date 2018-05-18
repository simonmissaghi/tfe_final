<?php

// apps female q8 r1

$nq8m_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2" AND q8 = "1") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2") AS pourcentage
  FROM networks_survey');
$nq8m_01->execute();
$rownq8m_01 = $nq8m_01->fetch();
$pourcentagenq8m_01 = $rownq8m_01['pourcentage'];


// apps female q8 r2

$nq8m_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2" AND q8 = "2") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2") AS pourcentage
  FROM networks_survey');
$nq8m_02->execute();
$rownq8m_02 = $nq8m_02->fetch();
$pourcentagenq8m_02 = $rownq8m_02['pourcentage'];


// apps female q8 r3
$nq8m_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2" AND q8 = "3") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2") AS pourcentage
  FROM networks_survey');
$nq8m_03->execute();
$rownq8m_03 = $nq8m_03->fetch();
$pourcentagenq8m_03 = $rownq8m_03['pourcentage'];



// apps female q8 r4

$nq8m_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2" AND q8 = "4") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2") AS pourcentage
  FROM networks_survey');
$nq8m_04->execute();
$rownq8m_04 = $nq8m_04->fetch();
$pourcentagenq8m_04 = $rownq8m_04['pourcentage'];



// apps female q8 r5

$nq8m_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2" AND q8 = "5") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2") AS pourcentage
  FROM networks_survey');
$nq8m_05->execute();
$rownq8m_05 = $nq8m_05->fetch();
$pourcentagenq8m_05 = $rownq8m_05['pourcentage'];




$nq8m = [$pourcentagenq8m_01, $pourcentagenq8m_02, $pourcentagenq8m_03, $pourcentagenq8m_04, $pourcentagenq8m_05];
?>
