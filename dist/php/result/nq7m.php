<?php
include ('./php/connection.php');

// apps female q7 r1

$nq7m_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2" AND q7 = "1") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2") AS pourcentage
  FROM networks_survey');
$nq7m_01->execute();
$rownq7m_01 = $nq7m_01->fetch();
$pourcentagenq7m_01 = $rownq7m_01['pourcentage'];

// apps female q7 r2

$nq7m_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2" AND q7 = "2") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2") AS pourcentage
  FROM networks_survey');
$nq7m_02->execute();
$rownq7m_02 = $nq7m_02->fetch();
$pourcentagenq7m_02 = $rownq7m_02['pourcentage'];

// apps female q7 r3
$nq7m_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2" AND q7 = "3") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2") AS pourcentage
  FROM networks_survey');
$nq7m_03->execute();
$rownq7m_03 = $nq7m_03->fetch();
$pourcentagenq7m_03 = $rownq7m_03['pourcentage'];


// apps female q7 r4

$nq7m_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2" AND q7 = "4") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2") AS pourcentage
  FROM networks_survey');
$nq7m_04->execute();
$rownq7m_04 = $nq7m_04->fetch();
$pourcentagenq7m_04 = $rownq7m_04['pourcentage'];


// apps female q7 r5

$nq7m_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2" AND q7 = "5") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2") AS pourcentage
  FROM networks_survey');
$nq7m_05->execute();
$rownq7m_05 = $nq7m_05->fetch();
$pourcentagenq7m_05 = $rownq7m_05['pourcentage'];



$nq7m = [$pourcentagenq7m_01, $pourcentagenq7m_02, $pourcentagenq7m_03, $pourcentagenq7m_04, $pourcentagenq7m_05];
?>
