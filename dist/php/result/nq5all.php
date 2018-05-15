<?php
include ('./php/connection.php');


// networks male q5 r1

$nq5all_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q5 LIKE "%[1],%") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq5all_01->execute();
$rownq5all_01 = $nq5all_01->fetch();
$pourcentagenq5all_01 = $rownq5all_01['pourcentage'];

// networks male q5 r2

$nq5all_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q5 LIKE "%[2],%") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq5all_02->execute();
$rownq5all_02 = $nq5all_02->fetch();
$pourcentagenq5all_02 = $rownq5all_02['pourcentage'];

// networks male q5 r3
$nq5all_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q5 LIKE "%[3],%") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq5all_03->execute();
$rownq5all_03 = $nq5all_03->fetch();
$pourcentagenq5all_03 = $rownq5all_03['pourcentage'];


// networks male q5 r4

$nq5all_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q5 LIKE "%[4],%") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq5all_04->execute();
$rownq5all_04 = $nq5all_04->fetch();
$pourcentagenq5all_04 = $rownq5all_04['pourcentage'];


// networks male q5 r5

$nq5all_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE q5 LIKE "%[5],%") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$nq5all_05->execute();
$rownq5all_05 = $nq5all_05->fetch();
$pourcentagenq5all_05 = $rownq5all_05['pourcentage'];



$nq5all = [$pourcentagenq5all_01, $pourcentagenq5all_02, $pourcentagenq5all_03, $pourcentagenq5all_04, $pourcentagenq5all_05];
?>
