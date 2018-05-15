<?php
include ('./php/connection.php');


// networks male q3 r1

$nq3m_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender="1" AND q3 LIKE "%[1],%") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender="1") AS pourcentage
  FROM networks_survey');
$nq3m_01->execute();
$rownq3m_01 = $nq3m_01->fetch();
$pourcentagenq3m_01 = $rownq3m_01['pourcentage'];

// networks male q3 r2

$nq3m_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender="1" AND q3 LIKE "%[2],%") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender="1") AS pourcentage
  FROM networks_survey');
$nq3m_02->execute();
$rownq3m_02 = $nq3m_02->fetch();
$pourcentagenq3m_02 = $rownq3m_02['pourcentage'];

// networks male q3 r3
$nq3m_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender="1" AND q3 LIKE "%[3],%") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender="1") AS pourcentage
  FROM networks_survey');
$nq3m_03->execute();
$rownq3m_03 = $nq3m_03->fetch();
$pourcentagenq3m_03 = $rownq3m_03['pourcentage'];


// networks male q3 r4

$nq3m_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender="1" AND q3 LIKE "%[4],%") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender="1") AS pourcentage
  FROM networks_survey');
$nq3m_04->execute();
$rownq3m_04 = $nq3m_04->fetch();
$pourcentagenq3m_04 = $rownq3m_04['pourcentage'];


// networks male q3 r5

$nq3m_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender="1" AND q3 LIKE "%[5],%") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender="1") AS pourcentage
  FROM networks_survey');
$nq3m_05->execute();
$rownq3m_05 = $nq3m_05->fetch();
$pourcentagenq3m_05 = $rownq3m_05['pourcentage'];



$nq3m = [$pourcentagenq3m_01, $pourcentagenq3m_02, $pourcentagenq3m_03, $pourcentagenq3m_04, $pourcentagenq3m_05];
?>
