<?php

// networks male q3 r1

$nq3all_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q3 LIKE "%[1],%") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq3all_01->execute();
$rownq3all_01 = $nq3all_01->fetch();
$pourcentagenq3all_01 = $rownq3all_01['pourcentage'];


// networks male q3 r2

$nq3all_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q3 LIKE "%[2],%") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq3all_02->execute();
$rownq3all_02 = $nq3all_02->fetch();
$pourcentagenq3all_02 = $rownq3all_02['pourcentage'];


// networks male q3 r3
$nq3all_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q3 LIKE "%[3],%") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq3all_03->execute();
$rownq3all_03 = $nq3all_03->fetch();
$pourcentagenq3all_03 = $rownq3all_03['pourcentage'];



// networks male q3 r4

$nq3all_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q3 LIKE "%[4],%") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq3all_04->execute();
$rownq3all_04 = $nq3all_04->fetch();
$pourcentagenq3all_04 = $rownq3all_04['pourcentage'];



// networks male q3 r5

$nq3all_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q3 LIKE "%[5],%") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq3all_05->execute();
$rownq3all_05 = $nq3all_05->fetch();
$pourcentagenq3all_05 = $rownq3all_05['pourcentage'];



$nq3all = [$pourcentagenq3all_01, $pourcentagenq3all_02, $pourcentagenq3all_03, $pourcentagenq3all_04, $pourcentagenq3all_05];
?>
