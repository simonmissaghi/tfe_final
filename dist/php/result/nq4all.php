<?php

// Networks female q4 r1

$nq4all_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q4 = "1") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq4all_01->execute();
$rownq4all_01 = $nq4all_01->fetch();
$pourcentagenq4all_01 = $rownq4all_01['pourcentage'];


// Networks female q4 r2

$nq4all_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q4 = "2") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq4all_02->execute();
$rownq4all_02 = $nq4all_02->fetch();
$pourcentagenq4all_02 = $rownq4all_02['pourcentage'];


// Networks female q4 r3
$nq4all_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q4 = "3") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq4all_03->execute();
$rownq4all_03 = $nq4all_03->fetch();
$pourcentagenq4all_03 = $rownq4all_03['pourcentage'];



// Networks female q4 r4

$nq4all_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q4 = "4") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq4all_04->execute();
$rownq4all_04 = $nq4all_04->fetch();
$pourcentagenq4all_04 = $rownq4all_04['pourcentage'];



// Networks female q4 r5

$nq4all_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q4 = "5") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq4all_05->execute();
$rownq4all_05 = $nq4all_05->fetch();
$pourcentagenq4all_05 = $rownq4all_05['pourcentage'];



$nq4all = [$pourcentagenq4all_01, $pourcentagenq4all_02, $pourcentagenq4all_03, $pourcentagenq4all_04, $pourcentagenq4all_05];
?>
