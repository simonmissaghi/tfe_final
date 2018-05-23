<?php

// apps female q7 r1

$nq7f_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2" AND q7 = "1") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2") AS pourcentage
  FROM networks_survey');
$nq7f_01->execute();
$rownq7f_01 = $nq7f_01->fetch();
$pourcentagenq7f_01 = $rownq7f_01['pourcentage'];


// apps female q7 r2

$nq7f_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2" AND q7 = "2") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2") AS pourcentage
  FROM networks_survey');
$nq7f_02->execute();
$rownq7f_02 = $nq7f_02->fetch();
$pourcentagenq7f_02 = $rownq7f_02['pourcentage'];


// apps female q7 r3
$nq7f_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2" AND q7 = "3") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2") AS pourcentage
  FROM networks_survey');
$nq7f_03->execute();
$rownq7f_03 = $nq7f_03->fetch();
$pourcentagenq7f_03 = $rownq7f_03['pourcentage'];



// apps female q7 r4

$nq7f_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2" AND q7 = "4") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2") AS pourcentage
  FROM networks_survey');
$nq7f_04->execute();
$rownq7f_04 = $nq7f_04->fetch();
$pourcentagenq7f_04 = $rownq7f_04['pourcentage'];



// apps female q7 r5

$nq7f_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2" AND q7 = "5") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2") AS pourcentage
  FROM networks_survey');
$nq7f_05->execute();
$rownq7f_05 = $nq7f_05->fetch();
$pourcentagenq7f_05 = $rownq7f_05['pourcentage'];




$nq7f = [$pourcentagenq7f_01, $pourcentagenq7f_02, $pourcentagenq7f_03, $pourcentagenq7f_04, $pourcentagenq7f_05];
?>
