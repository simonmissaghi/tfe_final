<?php

// Networks female q2 r1

$nq2all_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q2 = "1") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq2all_01->execute();
$rownq2all_01 = $nq2all_01->fetch();
$pourcentagenq2all_01 = $rownq2all_01['pourcentage'];


// Networks female q2 r2

$nq2all_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q2 = "2") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq2all_02->execute();
$rownq2all_02 = $nq2all_02->fetch();
$pourcentagenq2all_02 = $rownq2all_02['pourcentage'];


// Networks female q2 r3
$nq2all_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q2 = "3") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq2all_03->execute();
$rownq2all_03 = $nq2all_03->fetch();
$pourcentagenq2all_03 = $rownq2all_03['pourcentage'];



// Networks female q2 r4

$nq2all_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q2 = "4") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq2all_04->execute();
$rownq2all_04 = $nq2all_04->fetch();
$pourcentagenq2all_04 = $rownq2all_04['pourcentage'];



// Networks female q2 r5

$nq2all_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q2 = "5") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq2all_05->execute();
$rownq2all_05 = $nq2all_05->fetch();
$pourcentagenq2all_05 = $rownq2all_05['pourcentage'];


// Networks female q2 r6

$nq2all_06 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q2 = "6") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq2all_06->execute();
$rownq2all_06 = $nq2all_06->fetch();
$pourcentagenq2all_06 = $rownq2all_06['pourcentage'];


$nq2all = [$pourcentagenq2all_01, $pourcentagenq2all_02, $pourcentagenq2all_03, $pourcentagenq2all_04, $pourcentagenq2all_05, $pourcentagenq2all_06];
?>
