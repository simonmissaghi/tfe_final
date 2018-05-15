<?php
include ('./php/connection.php');

// apps female q6 r1

$nq6m_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "1" AND q6 LIKE "%[1]%") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "1") AS pourcentage
  FROM networks_survey');
$nq6m_01->execute();
$rownq6m_01 = $nq6m_01->fetch();
$pourcentagenq6m_01 = $rownq6m_01['pourcentage'];

// apps female q6 r2

$nq6m_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "1" AND q6 LIKE "%[2]%") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "1") AS pourcentage
  FROM networks_survey');
$nq6m_02->execute();
$rownq6m_02 = $nq6m_02->fetch();
$pourcentagenq6m_02 = $rownq6m_02['pourcentage'];

// apps female q6 r3
$nq6m_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "1" AND q6 LIKE "%[3]%") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "1") AS pourcentage
  FROM networks_survey');
$nq6m_03->execute();
$rownq6m_03 = $nq6m_03->fetch();
$pourcentagenq6m_03 = $rownq6m_03['pourcentage'];


// apps female q6 r4

$nq6m_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "1" AND q6 LIKE "%[4]%") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "1") AS pourcentage
  FROM networks_survey');
$nq6m_04->execute();
$rownq6m_04 = $nq6m_04->fetch();
$pourcentagenq6m_04 = $rownq6m_04['pourcentage'];


// apps female q6 r5

$nq6m_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "1" AND q6 LIKE "%[5]%") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "1") AS pourcentage
  FROM networks_survey');
$nq6m_05->execute();
$rownq6m_05 = $nq6m_05->fetch();
$pourcentagenq6m_05 = $rownq6m_05['pourcentage'];


$nq6m = [$pourcentagenq6m_01, $pourcentagenq6m_02, $pourcentagenq6m_03, $pourcentagenq6m_04, $pourcentagenq6m_05];
?>
