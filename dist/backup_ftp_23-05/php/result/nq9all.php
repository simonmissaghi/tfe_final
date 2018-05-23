<?php

// Networks female q9 r1

$nq9all_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q9 = "1") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq9all_01->execute();
$rownq9all_01 = $nq9all_01->fetch();
$pourcentagenq9all_01 = $rownq9all_01['pourcentage'];


// Networks female q9 r2

$nq9all_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q9 = "2") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq9all_02->execute();
$rownq9all_02 = $nq9all_02->fetch();
$pourcentagenq9all_02 = $rownq9all_02['pourcentage'];


// Networks female q9 r3
$nq9all_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q9 = "3") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq9all_03->execute();
$rownq9all_03 = $nq9all_03->fetch();
$pourcentagenq9all_03 = $rownq9all_03['pourcentage'];



// Networks female q9 r4

$nq9all_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q9 = "4") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq9all_04->execute();
$rownq9all_04 = $nq9all_04->fetch();
$pourcentagenq9all_04 = $rownq9all_04['pourcentage'];



// Networks female q9 r5

$nq9all_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q9 = "5") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq9all_05->execute();
$rownq9all_05 = $nq9all_05->fetch();
$pourcentagenq9all_05 = $rownq9all_05['pourcentage'];



$nq9all = [$pourcentagenq9all_01, $pourcentagenq9all_02, $pourcentagenq9all_03, $pourcentagenq9all_04, $pourcentagenq9all_05];
?>
