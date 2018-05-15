<?php
include ('./php/connection.php');


// networks male q3 r1

$nq3f_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender="2" AND q3 LIKE "%[1],%") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender="2") AS pourcentage
  FROM networks_survey');
$nq3f_01->execute();
$rownq3f_01 = $nq3f_01->fetch();
$pourcentagenq3f_01 = $rownq3f_01['pourcentage'];

// networks male q3 r2

$nq3f_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender="2" AND q3 LIKE "%[2],%") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender="2") AS pourcentage
  FROM networks_survey');
$nq3f_02->execute();
$rownq3f_02 = $nq3f_02->fetch();
$pourcentagenq3f_02 = $rownq3f_02['pourcentage'];

// networks male q3 r3
$nq3f_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender="2" AND q3 LIKE "%[3],%") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender="2") AS pourcentage
  FROM networks_survey');
$nq3f_03->execute();
$rownq3f_03 = $nq3f_03->fetch();
$pourcentagenq3f_03 = $rownq3f_03['pourcentage'];


// networks male q3 r4

$nq3f_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender="2" AND q3 LIKE "%[4],%") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender="2") AS pourcentage
  FROM networks_survey');
$nq3f_04->execute();
$rownq3f_04 = $nq3f_04->fetch();
$pourcentagenq3f_04 = $rownq3f_04['pourcentage'];


// networks male q3 r5

$nq3f_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender="2" AND q3 LIKE "%[5],%") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender="2") AS pourcentage
  FROM networks_survey');
$nq3f_05->execute();
$rownq3f_05 = $nq3f_05->fetch();
$pourcentagenq3f_05 = $rownq3f_05['pourcentage'];



$nq3f = [$pourcentagenq3f_01, $pourcentagenq3f_02, $pourcentagenq3f_03, $pourcentagenq3f_04, $pourcentagenq3f_05];
?>
