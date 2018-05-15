<?php
include ('./php/connection.php');

// Smartphones female q4 r1

$sq4m_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q4 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq4m_01->execute();
$rowsq4m_01 = $sq4m_01->fetch();
$pourcentagesq4m_01 = $rowsq4m_01['pourcentage'];

// Smartphones female q4 r2

$sq4m_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q4 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq4m_02->execute();
$rowsq4m_02 = $sq4m_02->fetch();
$pourcentagesq4m_02 = $rowsq4m_02['pourcentage'];

// Smartphones female q4 r3
$sq4m_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q4 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq4m_03->execute();
$rowsq4m_03 = $sq4m_03->fetch();
$pourcentagesq4m_03 = $rowsq4m_03['pourcentage'];


// Smartphones female q4 r4

$sq4m_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q4 = "4") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq4m_04->execute();
$rowsq4m_04 = $sq4m_04->fetch();
$pourcentagesq4m_04 = $rowsq4m_04['pourcentage'];


// Smartphones female q4 r5

$sq4m_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q4 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq4m_05->execute();
$rowsq4m_05 = $sq4m_05->fetch();
$pourcentagesq4m_05 = $rowsq4m_05['pourcentage'];

$sq4m = [$pourcentagesq4m_01, $pourcentagesq4m_02, $pourcentagesq4m_03, $pourcentagesq4m_04, $pourcentagesq4m_05];
?>
