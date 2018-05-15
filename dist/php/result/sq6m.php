<?php
include ('./php/connection.php');

// Smartphones female q6 r1

$sq6m_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q6 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq6m_01->execute();
$rowsq6m_01 = $sq6m_01->fetch();
$pourcentagesq6m_01 = $rowsq6m_01['pourcentage'];

// Smartphones female q6 r2

$sq6m_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q6 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq6m_02->execute();
$rowsq6m_02 = $sq6m_02->fetch();
$pourcentagesq6m_02 = $rowsq6m_02['pourcentage'];

// Smartphones female q6 r3
$sq6m_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q6 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq6m_03->execute();
$rowsq6m_03 = $sq6m_03->fetch();
$pourcentagesq6m_03 = $rowsq6m_03['pourcentage'];


// Smartphones female q6 r4

$sq6m_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q6 = "4") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq6m_04->execute();
$rowsq6m_04 = $sq6m_04->fetch();
$pourcentagesq6m_04 = $rowsq6m_04['pourcentage'];


// Smartphones female q6 r5

$sq6m_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q6 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq6m_05->execute();
$rowsq6m_05 = $sq6m_05->fetch();
$pourcentagesq6m_05 = $rowsq6m_05['pourcentage'];

$sq6m = [$pourcentagesq6m_01, $pourcentagesq6m_02, $pourcentagesq6m_03, $pourcentagesq6m_04, $pourcentagesq6m_05];
?>
