<?php
include ('./php/connection.php');

// Smartphones female q7 r1

$sq7m_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q7 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq7m_01->execute();
$rowsq7m_01 = $sq7m_01->fetch();
$pourcentagesq7m_01 = $rowsq7m_01['pourcentage'];

// Smartphones female q7 r2

$sq7m_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q7 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq7m_02->execute();
$rowsq7m_02 = $sq7m_02->fetch();
$pourcentagesq7m_02 = $rowsq7m_02['pourcentage'];

// Smartphones female q7 r3
$sq7m_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q7 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq7m_03->execute();
$rowsq7m_03 = $sq7m_03->fetch();
$pourcentagesq7m_03 = $rowsq7m_03['pourcentage'];


// Smartphones female q7 r4

$sq7m_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q7 = "4") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq7m_04->execute();
$rowsq7m_04 = $sq7m_04->fetch();
$pourcentagesq7m_04 = $rowsq7m_04['pourcentage'];


// Smartphones female q7 r5

$sq7m_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q7 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq7m_05->execute();
$rowsq7m_05 = $sq7m_05->fetch();
$pourcentagesq7m_05 = $rowsq7m_05['pourcentage'];

$sq7m = [$pourcentagesq7m_01, $pourcentagesq7m_02, $pourcentagesq7m_03, $pourcentagesq7m_04, $pourcentagesq7m_05];
?>
