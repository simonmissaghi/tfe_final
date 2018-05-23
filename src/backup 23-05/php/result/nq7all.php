<?php

// Networks female q7 r1

$nq7all_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q7 = "1") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq7all_01->execute();
$rownq7all_01 = $nq7all_01->fetch();
$pourcentagenq7all_01 = $rownq7all_01['pourcentage'];


// Networks female q7 r2

$nq7all_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q7 = "2") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq7all_02->execute();
$rownq7all_02 = $nq7all_02->fetch();
$pourcentagenq7all_02 = $rownq7all_02['pourcentage'];


// Networks female q7 r3
$nq7all_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q7 = "3") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq7all_03->execute();
$rownq7all_03 = $nq7all_03->fetch();
$pourcentagenq7all_03 = $rownq7all_03['pourcentage'];



// Networks female q7 r4

$nq7all_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q7 = "4") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq7all_04->execute();
$rownq7all_04 = $nq7all_04->fetch();
$pourcentagenq7all_04 = $rownq7all_04['pourcentage'];



// Networks female q7 r5

$nq7all_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q7 = "5") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq7all_05->execute();
$rownq7all_05 = $nq7all_05->fetch();
$pourcentagenq7all_05 = $rownq7all_05['pourcentage'];



$nq7all = [$pourcentagenq7all_01, $pourcentagenq7all_02, $pourcentagenq7all_03, $pourcentagenq7all_04, $pourcentagenq7all_05];
?>
