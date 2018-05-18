<?php

// Networks female q6 r1

$nq6all_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q6 LIKE "%[1]%") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq6all_01->execute();
$rownq6all_01 = $nq6all_01->fetch();
$pourcentagenq6all_01 = $rownq6all_01['pourcentage'];


// Networks female q6 r2

$nq6all_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q6 LIKE "%[2]%") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq6all_02->execute();
$rownq6all_02 = $nq6all_02->fetch();
$pourcentagenq6all_02 = $rownq6all_02['pourcentage'];


// Networks female q6 r3
$nq6all_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q6 LIKE "%[3]%") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq6all_03->execute();
$rownq6all_03 = $nq6all_03->fetch();
$pourcentagenq6all_03 = $rownq6all_03['pourcentage'];



// Networks female q6 r4

$nq6all_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q6 LIKE "%[4]%") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq6all_04->execute();
$rownq6all_04 = $nq6all_04->fetch();
$pourcentagenq6all_04 = $rownq6all_04['pourcentage'];



// Networks female q6 r5

$nq6all_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q6 LIKE "%[5]%") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq6all_05->execute();
$rownq6all_05 = $nq6all_05->fetch();
$pourcentagenq6all_05 = $rownq6all_05['pourcentage'];




$nq6all = [$pourcentagenq6all_01, $pourcentagenq6all_02, $pourcentagenq6all_03, $pourcentagenq6all_04, $pourcentagenq6all_05];
?>
