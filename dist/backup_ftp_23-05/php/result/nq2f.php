<?php

// apps female q2 r1

$nq2f_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2" AND q2 = "1") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2") AS pourcentage
  FROM apps_survey');
$nq2f_01->execute();
$rownq2f_01 = $nq2f_01->fetch();
$pourcentagenq2f_01 = $rownq2f_01['pourcentage'];


// apps female q2 r2

$nq2f_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2" AND q2 = "2") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2") AS pourcentage
  FROM apps_survey');
$nq2f_02->execute();
$rownq2f_02 = $nq2f_02->fetch();
$pourcentagenq2f_02 = $rownq2f_02['pourcentage'];


// apps female q2 r3
$nq2f_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2" AND q2 = "3") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2") AS pourcentage
  FROM apps_survey');
$nq2f_03->execute();
$rownq2f_03 = $nq2f_03->fetch();
$pourcentagenq2f_03 = $rownq2f_03['pourcentage'];



// apps female q2 r4

$nq2f_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2" AND q2 = "4") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2") AS pourcentage
  FROM apps_survey');
$nq2f_04->execute();
$rownq2f_04 = $nq2f_04->fetch();
$pourcentagenq2f_04 = $rownq2f_04['pourcentage'];



// apps female q2 r5

$nq2f_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2" AND q2 = "5") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2") AS pourcentage
  FROM apps_survey');
$nq2f_05->execute();
$rownq2f_05 = $nq2f_05->fetch();
$pourcentagenq2f_05 = $rownq2f_05['pourcentage'];


// apps female q2 r6

$nq2f_06 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2" AND q2 = "6") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2") AS pourcentage
  FROM apps_survey');
$nq2f_06->execute();
$rownq2f_06 = $nq2f_06->fetch();
$pourcentagenq2f_06 = $rownq2f_06['pourcentage'];


$nq2f = [$pourcentagenq2f_01, $pourcentagenq2f_02, $pourcentagenq2f_03, $pourcentagenq2f_04, $pourcentagenq2f_05, $pourcentagenq2f_06];
?>
