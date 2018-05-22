<?php

// apps female q9 r1

$nq9f_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2" AND q9 = "1") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2") AS pourcentage
  FROM networks_survey');
$nq9f_01->execute();
$rownq9f_01 = $nq9f_01->fetch();
$pourcentagenq9f_01 = $rownq9f_01['pourcentage'];


// apps female q9 r2

$nq9f_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2" AND q9 = "2") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2") AS pourcentage
  FROM networks_survey');
$nq9f_02->execute();
$rownq9f_02 = $nq9f_02->fetch();
$pourcentagenq9f_02 = $rownq9f_02['pourcentage'];


// apps female q9 r3
$nq9f_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2" AND q9 = "3") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2") AS pourcentage
  FROM networks_survey');
$nq9f_03->execute();
$rownq9f_03 = $nq9f_03->fetch();
$pourcentagenq9f_03 = $rownq9f_03['pourcentage'];



// apps female q9 r4

$nq9f_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2" AND q9 = "4") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2") AS pourcentage
  FROM networks_survey');
$nq9f_04->execute();
$rownq9f_04 = $nq9f_04->fetch();
$pourcentagenq9f_04 = $rownq9f_04['pourcentage'];



// apps female q9 r5

$nq9f_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2" AND q9 = "5") * 100 /
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2") AS pourcentage
  FROM networks_survey');
$nq9f_05->execute();
$rownq9f_05 = $nq9f_05->fetch();
$pourcentagenq9f_05 = $rownq9f_05['pourcentage'];




$nq9f = [$pourcentagenq9f_01, $pourcentagenq9f_02, $pourcentagenq9f_03, $pourcentagenq9f_04, $pourcentagenq9f_05];
?>
