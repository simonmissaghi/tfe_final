<?php
include ('./php/connection.php');


// networks male q5 r1

$nq5f_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender="2" AND q5 LIKE "%[1],%") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender="2") AS pourcentage
  FROM networks_survey');
$nq5f_01->execute();
$rownq5f_01 = $nq5f_01->fetch();
$pourcentagenq5f_01 = $rownq5f_01['pourcentage'];

// networks male q5 r2

$nq5f_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender="2" AND q5 LIKE "%[2],%") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender="2") AS pourcentage
  FROM networks_survey');
$nq5f_02->execute();
$rownq5f_02 = $nq5f_02->fetch();
$pourcentagenq5f_02 = $rownq5f_02['pourcentage'];

// networks male q5 r3
$nq5f_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender="2" AND q5 LIKE "%[3],%") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender="2") AS pourcentage
  FROM networks_survey');
$nq5f_03->execute();
$rownq5f_03 = $nq5f_03->fetch();
$pourcentagenq5f_03 = $rownq5f_03['pourcentage'];


// networks male q5 r4

$nq5f_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender="2" AND q5 LIKE "%[4],%") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender="2") AS pourcentage
  FROM networks_survey');
$nq5f_04->execute();
$rownq5f_04 = $nq5f_04->fetch();
$pourcentagenq5f_04 = $rownq5f_04['pourcentage'];


// networks male q5 r5

$nq5f_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender="2" AND q5 LIKE "%[5],%") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender="2") AS pourcentage
  FROM networks_survey');
$nq5f_05->execute();
$rownq5f_05 = $nq5f_05->fetch();
$pourcentagenq5f_05 = $rownq5f_05['pourcentage'];



$nq5f = [$pourcentagenq5f_01, $pourcentagenq5f_02, $pourcentagenq5f_03, $pourcentagenq5f_04, $pourcentagenq5f_05];
?>
