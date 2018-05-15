<?php
include ('./php/connection.php');

// apps female q6 r1

$nq6f_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2" AND q6 LIKE "%[1]%") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2") AS pourcentage
  FROM networks_survey');
$nq6f_01->execute();
$rownq6f_01 = $nq6f_01->fetch();
$pourcentagenq6f_01 = $rownq6f_01['pourcentage'];

// apps female q6 r2

$nq6f_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2" AND q6 LIKE "%[2]%") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2") AS pourcentage
  FROM networks_survey');
$nq6f_02->execute();
$rownq6f_02 = $nq6f_02->fetch();
$pourcentagenq6f_02 = $rownq6f_02['pourcentage'];

// apps female q6 r3
$nq6f_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2" AND q6 LIKE "%[3]%") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2") AS pourcentage
  FROM networks_survey');
$nq6f_03->execute();
$rownq6f_03 = $nq6f_03->fetch();
$pourcentagenq6f_03 = $rownq6f_03['pourcentage'];


// apps female q6 r4

$nq6f_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2" AND q6 LIKE "%[4]%") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2") AS pourcentage
  FROM networks_survey');
$nq6f_04->execute();
$rownq6f_04 = $nq6f_04->fetch();
$pourcentagenq6f_04 = $rownq6f_04['pourcentage'];


// apps female q6 r5

$nq6f_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2" AND q6 LIKE "%[5]%") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2") AS pourcentage
  FROM networks_survey');
$nq6f_05->execute();
$rownq6f_05 = $nq6f_05->fetch();
$pourcentagenq6f_05 = $rownq6f_05['pourcentage'];

// apps female q6 r6

$nq6f = [$pourcentagenq6f_01, $pourcentagenq6f_02, $pourcentagenq6f_03, $pourcentagenq6f_04, $pourcentagenq6f_05];
?>
