<?php
include ('./php/connection.php');

// Smartphones female q1 r1

$sq1m_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q1 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq1m_01->execute();
$rowsq1m_01 = $sq1m_01->fetch();
$pourcentagesq1m_01 = $rowsq1m_01['pourcentage'];

// Smartphones female q1 r2

$sq1m_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q1 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq1m_02->execute();
$rowsq1m_02 = $sq1m_02->fetch();
$pourcentagesq1m_02 = $rowsq1m_02['pourcentage'];

// Smartphones female q1 r3
$sq1m_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q1 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq1m_03->execute();
$rowsq1m_03 = $sq1m_03->fetch();
$pourcentagesq1m_03 = $rowsq1m_03['pourcentage'];


// Smartphones female q1 r4

$sq1m_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q1 = "4") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq1m_04->execute();
$rowsq1m_04 = $sq1m_04->fetch();
$pourcentagesq1m_04 = $rowsq1m_04['pourcentage'];


// Smartphones female q1 r5

$sq1m_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q1 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq1m_05->execute();
$rowsq1m_05 = $sq1m_05->fetch();
$pourcentagesq1m_05 = $rowsq1m_05['pourcentage'];

$sq1m = [$pourcentagesq1m_01, $pourcentagesq1m_02, $pourcentagesq1m_03, $pourcentagesq1m_04, $pourcentagesq1m_05];
?>
