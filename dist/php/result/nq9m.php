<?php

// apps female q9 r1

$nq9m_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "1" AND q9 = "1") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "1") AS pourcentage
  FROM networks_survey');
$nq9m_01->execute();
$rownq9m_01 = $nq9m_01->fetch();
$pourcentagenq9m_01 = $rownq9m_01['pourcentage'];


// apps female q9 r2

$nq9m_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "1" AND q9 = "2") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "1") AS pourcentage
  FROM networks_survey');
$nq9m_02->execute();
$rownq9m_02 = $nq9m_02->fetch();
$pourcentagenq9m_02 = $rownq9m_02['pourcentage'];


// apps female q9 r3
$nq9m_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "1" AND q9 = "3") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "1") AS pourcentage
  FROM networks_survey');
$nq9m_03->execute();
$rownq9m_03 = $nq9m_03->fetch();
$pourcentagenq9m_03 = $rownq9m_03['pourcentage'];



// apps female q9 r4

$nq9m_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "1" AND q9 = "4") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "1") AS pourcentage
  FROM networks_survey');
$nq9m_04->execute();
$rownq9m_04 = $nq9m_04->fetch();
$pourcentagenq9m_04 = $rownq9m_04['pourcentage'];



// apps female q9 r5

$nq9m_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "1" AND q9 = "5") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "1") AS pourcentage
  FROM networks_survey');
$nq9m_05->execute();
$rownq9m_05 = $nq9m_05->fetch();
$pourcentagenq9m_05 = $rownq9m_05['pourcentage'];




$nq9m = [$pourcentagenq9m_01, $pourcentagenq9m_02, $pourcentagenq9m_03, $pourcentagenq9m_04, $pourcentagenq9m_05];
?>
