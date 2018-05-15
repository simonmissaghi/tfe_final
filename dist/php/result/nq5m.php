<?php
include ('./php/connection.php');


// networks male q5 r1

$nq5m_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender="1" AND q5 LIKE "%[1],%") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender="1") AS pourcentage
  FROM networks_survey');
$nq5m_01->execute();
$rownq5m_01 = $nq5m_01->fetch();
$pourcentagenq5m_01 = $rownq5m_01['pourcentage'];

// networks male q5 r2

$nq5m_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender="1" AND q5 LIKE "%[2],%") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender="1") AS pourcentage
  FROM networks_survey');
$nq5m_02->execute();
$rownq5m_02 = $nq5m_02->fetch();
$pourcentagenq5m_02 = $rownq5m_02['pourcentage'];

// networks male q5 r3
$nq5m_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender="1" AND q5 LIKE "%[3],%") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender="1") AS pourcentage
  FROM networks_survey');
$nq5m_03->execute();
$rownq5m_03 = $nq5m_03->fetch();
$pourcentagenq5m_03 = $rownq5m_03['pourcentage'];


// networks male q5 r4

$nq5m_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender="1" AND q5 LIKE "%[4],%") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender="1") AS pourcentage
  FROM networks_survey');
$nq5m_04->execute();
$rownq5m_04 = $nq5m_04->fetch();
$pourcentagenq5m_04 = $rownq5m_04['pourcentage'];


// networks male q5 r5

$nq5m_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender="1" AND q5 LIKE "%[5],%") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender="1") AS pourcentage
  FROM networks_survey');
$nq5m_05->execute();
$rownq5m_05 = $nq5m_05->fetch();
$pourcentagenq5m_05 = $rownq5m_05['pourcentage'];



$nq5m = [$pourcentagenq5m_01, $pourcentagenq5m_02, $pourcentagenq5m_03, $pourcentagenq5m_04, $pourcentagenq5m_05];
?>
