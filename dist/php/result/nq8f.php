<?php

// apps female q8 r1

$nq8f_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2" AND q8 = "1") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2") AS pourcentage
  FROM networks_survey');
$nq8f_01->execute();
$rownq8f_01 = $nq8f_01->fetch();
$pourcentagenq8f_01 = $rownq8f_01['pourcentage'];


// apps female q8 r2

$nq8f_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2" AND q8 = "2") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2") AS pourcentage
  FROM networks_survey');
$nq8f_02->execute();
$rownq8f_02 = $nq8f_02->fetch();
$pourcentagenq8f_02 = $rownq8f_02['pourcentage'];


// apps female q8 r3
$nq8f_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2" AND q8 = "3") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2") AS pourcentage
  FROM networks_survey');
$nq8f_03->execute();
$rownq8f_03 = $nq8f_03->fetch();
$pourcentagenq8f_03 = $rownq8f_03['pourcentage'];



// apps female q8 r4

$nq8f_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2" AND q8 = "4") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2") AS pourcentage
  FROM networks_survey');
$nq8f_04->execute();
$rownq8f_04 = $nq8f_04->fetch();
$pourcentagenq8f_04 = $rownq8f_04['pourcentage'];



// apps female q8 r5

$nq8f_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2" AND q8 = "5") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2") AS pourcentage
  FROM networks_survey');
$nq8f_05->execute();
$rownq8f_05 = $nq8f_05->fetch();
$pourcentagenq8f_05 = $rownq8f_05['pourcentage'];




$nq8f = [$pourcentagenq8f_01, $pourcentagenq8f_02, $pourcentagenq8f_03, $pourcentagenq8f_04, $pourcentagenq8f_05];
?>
