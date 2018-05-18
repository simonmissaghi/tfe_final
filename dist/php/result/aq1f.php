<?php
include ('./php/connection.php');


// Apps male q1 r1

$aq1f_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender="2" AND q1 LIKE "%[1],%") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender="2") AS pourcentage
  FROM apps_survey');
$aq1f_01->execute();
$rowaq1f_01 = $aq1f_01->fetch();
$pourcentageaq1f_01 = $rowaq1f_01['pourcentage'];


// Apps male q1 r2

$aq1f_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender="2" AND q1 LIKE "%[2],%") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender="2") AS pourcentage
  FROM apps_survey');
$aq1f_02->execute();
$rowaq1f_02 = $aq1f_02->fetch();
$pourcentageaq1f_02 = $rowaq1f_02['pourcentage'];


// Apps male q1 r3
$aq1f_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender="2" AND q1 LIKE "%[3],%") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender="2") AS pourcentage
  FROM apps_survey');
$aq1f_03->execute();
$rowaq1f_03 = $aq1f_03->fetch();
$pourcentageaq1f_03 = $rowaq1f_03['pourcentage'];



// Apps male q1 r4

$aq1f_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender="2" AND q1 LIKE "%[4],%") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender="2") AS pourcentage
  FROM apps_survey');
$aq1f_04->execute();
$rowaq1f_04 = $aq1f_04->fetch();
$pourcentageaq1f_04 = $rowaq1f_04['pourcentage'];



// Apps male q1 r5

$aq1f_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender="2" AND q1 LIKE "%[5],%") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender="2") AS pourcentage
  FROM apps_survey');
$aq1f_05->execute();
$rowaq1f_05 = $aq1f_05->fetch();
$pourcentageaq1f_05 = $rowaq1f_05['pourcentage'];


// Apps male q1 r6

$aq1f_06 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender="2" AND q1 LIKE "[6],") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender="2") AS pourcentage
  FROM apps_survey');
$aq1f_06->execute();
$rowaq1f_06 = $aq1f_06->fetch();
$pourcentageaq1f_06 = $rowaq1f_06['pourcentage'];


// Apps male q1 r6

$aq1f_07 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender="2" AND q1 LIKE "%[7],%") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender="2") AS pourcentage
  FROM apps_survey');
$aq1f_07->execute();
$rowaq1f_07 = $aq1f_07->fetch();
$pourcentageaq1f_07 = $rowaq1f_07['pourcentage'];


// Apps male q1 r6

$aq1f_08 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender="2" AND q1 LIKE "%[8],%") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender="2") AS pourcentage
  FROM apps_survey');
$aq1f_08->execute();
$rowaq1f_08 = $aq1f_08->fetch();
$pourcentageaq1f_08 = $rowaq1f_08['pourcentage'];


// Apps male q1 r6

$aq1f_09 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender="2" AND q1 LIKE "%[9],%") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender="2") AS pourcentage
  FROM apps_survey');
$aq1f_09->execute();
$rowaq1f_09 = $aq1f_09->fetch();
$pourcentageaq1f_09 = $rowaq1f_09['pourcentage'];


// Apps male q1 r6

$aq1f_10 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender="2" AND q1 LIKE "%[10],%") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender="2") AS pourcentage
  FROM apps_survey');
$aq1f_10->execute();
$rowaq1f_10 = $aq1f_10->fetch();
$pourcentageaq1f_10 = $rowaq1f_10['pourcentage'];


$aq1f = [$pourcentageaq1f_01, $pourcentageaq1f_02, $pourcentageaq1f_03, $pourcentageaq1f_04, $pourcentageaq1f_05, $pourcentageaq1f_06, $pourcentageaq1f_07, $pourcentageaq1f_08, $pourcentageaq1f_09, $pourcentageaq1f_10];
?>
