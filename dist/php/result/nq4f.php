<?php
include ('./php/connection.php');

// apps female q4 r1

$nq4f_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2" AND q4 = "1") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2") AS pourcentage
  FROM apps_survey');
$nq4f_01->execute();
$rownq4f_01 = $nq4f_01->fetch();
$pourcentagenq4f_01 = $rownq4f_01['pourcentage'];

// apps female q4 r2

$nq4f_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2" AND q4 = "2") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2") AS pourcentage
  FROM apps_survey');
$nq4f_02->execute();
$rownq4f_02 = $nq4f_02->fetch();
$pourcentagenq4f_02 = $rownq4f_02['pourcentage'];

// apps female q4 r3
$nq4f_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2" AND q4 = "3") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2") AS pourcentage
  FROM apps_survey');
$nq4f_03->execute();
$rownq4f_03 = $nq4f_03->fetch();
$pourcentagenq4f_03 = $rownq4f_03['pourcentage'];


// apps female q4 r4

$nq4f_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2" AND q4 = "4") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2") AS pourcentage
  FROM apps_survey');
$nq4f_04->execute();
$rownq4f_04 = $nq4f_04->fetch();
$pourcentagenq4f_04 = $rownq4f_04['pourcentage'];


// apps female q4 r5

$nq4f_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2" AND q4 = "5") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2") AS pourcentage
  FROM apps_survey');
$nq4f_05->execute();
$rownq4f_05 = $nq4f_05->fetch();
$pourcentagenq4f_05 = $rownq4f_05['pourcentage'];



$nq4f = [$pourcentagenq4f_01, $pourcentagenq4f_02, $pourcentagenq4f_03, $pourcentagenq4f_04, $pourcentagenq4f_05];
?>
