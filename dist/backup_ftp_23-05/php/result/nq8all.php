<?php

// Networks female q8 r1

$nq8all_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q8 = "1") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq8all_01->execute();
$rownq8all_01 = $nq8all_01->fetch();
$pourcentagenq8all_01 = $rownq8all_01['pourcentage'];


// Networks female q8 r2

$nq8all_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q8 = "2") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq8all_02->execute();
$rownq8all_02 = $nq8all_02->fetch();
$pourcentagenq8all_02 = $rownq8all_02['pourcentage'];


// Networks female q8 r3
$nq8all_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q8 = "3") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq8all_03->execute();
$rownq8all_03 = $nq8all_03->fetch();
$pourcentagenq8all_03 = $rownq8all_03['pourcentage'];



// Networks female q8 r4

$nq8all_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q8 = "4") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq8all_04->execute();
$rownq8all_04 = $nq8all_04->fetch();
$pourcentagenq8all_04 = $rownq8all_04['pourcentage'];



// Networks female q8 r5

$nq8all_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q8 = "5") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq8all_05->execute();
$rownq8all_05 = $nq8all_05->fetch();
$pourcentagenq8all_05 = $rownq8all_05['pourcentage'];



$nq8all = [$pourcentagenq8all_01, $pourcentagenq8all_02, $pourcentagenq8all_03, $pourcentagenq8all_04, $pourcentagenq8all_05];
?>
