<?php


// Apps male q1 r1

$aq1m_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender="1" AND q1 LIKE "%[1],%") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender="1") AS pourcentage
  FROM apps_survey');
$aq1m_01->execute();
$rowaq1m_01 = $aq1m_01->fetch();
$pourcentageaq1m_01 = $rowaq1m_01['pourcentage'];


// Apps male q1 r2

$aq1m_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender="1" AND q1 LIKE "%[2],%") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender="1") AS pourcentage
  FROM apps_survey');
$aq1m_02->execute();
$rowaq1m_02 = $aq1m_02->fetch();
$pourcentageaq1m_02 = $rowaq1m_02['pourcentage'];


// Apps male q1 r3
$aq1m_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender="1" AND q1 LIKE "%[3],%") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender="1") AS pourcentage
  FROM apps_survey');
$aq1m_03->execute();
$rowaq1m_03 = $aq1m_03->fetch();
$pourcentageaq1m_03 = $rowaq1m_03['pourcentage'];



// Apps male q1 r4

$aq1m_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender="1" AND q1 LIKE "%[4],%") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender="1") AS pourcentage
  FROM apps_survey');
$aq1m_04->execute();
$rowaq1m_04 = $aq1m_04->fetch();
$pourcentageaq1m_04 = $rowaq1m_04['pourcentage'];



// Apps male q1 r5

$aq1m_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender="1" AND q1 LIKE "%[5],%") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender="1") AS pourcentage
  FROM apps_survey');
$aq1m_05->execute();
$rowaq1m_05 = $aq1m_05->fetch();
$pourcentageaq1m_05 = $rowaq1m_05['pourcentage'];


// Apps male q1 r6

$aq1m_06 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender="1" AND q1 LIKE "%[6],%") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender="1") AS pourcentage
  FROM apps_survey');
$aq1m_06->execute();
$rowaq1m_06 = $aq1m_06->fetch();
$pourcentageaq1m_06 = $rowaq1m_06['pourcentage'];


// Apps male q1 r6

$aq1m_07 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender="1" AND q1 LIKE "%[7],%") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender="1") AS pourcentage
  FROM apps_survey');
$aq1m_07->execute();
$rowaq1m_07 = $aq1m_07->fetch();
$pourcentageaq1m_07 = $rowaq1m_07['pourcentage'];


// Apps male q1 r6

$aq1m_08 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender="1" AND q1 LIKE "%[8],%") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender="1") AS pourcentage
  FROM apps_survey');
$aq1m_08->execute();
$rowaq1m_08 = $aq1m_08->fetch();
$pourcentageaq1m_08 = $rowaq1m_08['pourcentage'];


// Apps male q1 r6

$aq1m_09 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender="1" AND q1 LIKE "%[9],%") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender="1") AS pourcentage
  FROM apps_survey');
$aq1m_09->execute();
$rowaq1m_09 = $aq1m_09->fetch();
$pourcentageaq1m_09 = $rowaq1m_09['pourcentage'];


// Apps male q1 r6

$aq1m_10 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender="1" AND q1 LIKE "%[10],%") * 100 /
  (SELECT COUNT(*) FROM apps_survey WHERE gender="1") AS pourcentage
  FROM apps_survey');
$aq1m_10->execute();
$rowaq1m_10 = $aq1m_10->fetch();
$pourcentageaq1m_10 = $rowaq1m_10['pourcentage'];


$aq1m = [$pourcentageaq1m_01, $pourcentageaq1m_02, $pourcentageaq1m_03, $pourcentageaq1m_04, $pourcentageaq1m_05, $pourcentageaq1m_06, $pourcentageaq1m_07, $pourcentageaq1m_08, $pourcentageaq1m_09, $pourcentageaq1m_10];
?>
