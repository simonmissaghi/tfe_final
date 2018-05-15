<?php
include ('./php/connection.php');


// Apps male q1 r1

$aq1all_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE q1 LIKE "%[1],%") * 100 /
  (SELECT COUNT(*) FROM apps_survey) AS pourcentage
  FROM apps_survey');
$aq1all_01->execute();
$rowaq1all_01 = $aq1all_01->fetch();
$pourcentageaq1all_01 = $rowaq1all_01['pourcentage'];

// Apps male q1 r2

$aq1all_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE q1 LIKE "%[2],%") * 100 /
  (SELECT COUNT(*) FROM apps_survey) AS pourcentage
  FROM apps_survey');
$aq1all_02->execute();
$rowaq1all_02 = $aq1all_02->fetch();
$pourcentageaq1all_02 = $rowaq1all_02['pourcentage'];

// Apps male q1 r3
$aq1all_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE q1 LIKE "%[3],%") * 100 /
  (SELECT COUNT(*) FROM apps_survey) AS pourcentage
  FROM apps_survey');
$aq1all_03->execute();
$rowaq1all_03 = $aq1all_03->fetch();
$pourcentageaq1all_03 = $rowaq1all_03['pourcentage'];


// Apps male q1 r4

$aq1all_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE q1 LIKE "%[4],%") * 100 /
  (SELECT COUNT(*) FROM apps_survey) AS pourcentage
  FROM apps_survey');
$aq1all_04->execute();
$rowaq1all_04 = $aq1all_04->fetch();
$pourcentageaq1all_04 = $rowaq1all_04['pourcentage'];


// Apps male q1 r5

$aq1all_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE q1 LIKE "%[5],%") * 100 /
  (SELECT COUNT(*) FROM apps_survey) AS pourcentage
  FROM apps_survey');
$aq1all_05->execute();
$rowaq1all_05 = $aq1all_05->fetch();
$pourcentageaq1all_05 = $rowaq1all_05['pourcentage'];

// Apps male q1 r6

$aq1all_06 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE q1 LIKE "%[6],%") * 100 /
  (SELECT COUNT(*) FROM apps_survey) AS pourcentage
  FROM apps_survey');
$aq1all_06->execute();
$rowaq1all_06 = $aq1all_06->fetch();
$pourcentageaq1all_06 = $rowaq1all_06['pourcentage'];

// Apps male q1 r6

$aq1all_07 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE q1 LIKE "%[7],%") * 100 /
  (SELECT COUNT(*) FROM apps_survey) AS pourcentage
  FROM apps_survey');
$aq1all_07->execute();
$rowaq1all_07 = $aq1all_07->fetch();
$pourcentageaq1all_07 = $rowaq1all_07['pourcentage'];

// Apps male q1 r6

$aq1all_08 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE q1 LIKE "%[8],%") * 100 /
  (SELECT COUNT(*) FROM apps_survey) AS pourcentage
  FROM apps_survey');
$aq1all_08->execute();
$rowaq1all_08 = $aq1all_08->fetch();
$pourcentageaq1all_08 = $rowaq1all_08['pourcentage'];

// Apps male q1 r6

$aq1all_09 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE q1 LIKE "%[9],%") * 100 /
  (SELECT COUNT(*) FROM apps_survey) AS pourcentage
  FROM apps_survey');
$aq1all_09->execute();
$rowaq1all_09 = $aq1all_09->fetch();
$pourcentageaq1all_09 = $rowaq1all_09['pourcentage'];

// Apps male q1 r6

$aq1all_10 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE q1 LIKE "%[10],%") * 100 /
  (SELECT COUNT(*) FROM apps_survey) AS pourcentage
  FROM apps_survey');
$aq1all_10->execute();
$rowaq1all_10 = $aq1all_10->fetch();
$pourcentageaq1all_10 = $rowaq1all_10['pourcentage'];

$aq1all = [$pourcentageaq1all_01, $pourcentageaq1all_02, $pourcentageaq1all_03, $pourcentageaq1all_04, $pourcentageaq1all_05, $pourcentageaq1all_06, $pourcentageaq1all_07, $pourcentageaq1all_08, $pourcentageaq1all_09, $pourcentageaq1all_10];
?>
