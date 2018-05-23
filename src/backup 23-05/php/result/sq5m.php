<?php

// Smartphones female q5 r1

$sq5m_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q5 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq5m_01->execute();
$rowsq5m_01 = $sq5m_01->fetch();
$pourcentagesq5m_01 = $rowsq5m_01['pourcentage'];

// Smartphones female q5 r2

$sq5m_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q5 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq5m_02->execute();
$rowsq5m_02 = $sq5m_02->fetch();
$pourcentagesq5m_02 = $rowsq5m_02['pourcentage'];

// Smartphones female q5 r3
$sq5m_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q5 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq5m_03->execute();
$rowsq5m_03 = $sq5m_03->fetch();
$pourcentagesq5m_03 = $rowsq5m_03['pourcentage'];


// Smartphones female q5 r4

$sq5m_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q5 = "4") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq5m_04->execute();
$rowsq5m_04 = $sq5m_04->fetch();
$pourcentagesq5m_04 = $rowsq5m_04['pourcentage'];


// Smartphones female q5 r5

$sq5m_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q5 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq5m_05->execute();
$rowsq5m_05 = $sq5m_05->fetch();
$pourcentagesq5m_05 = $rowsq5m_05['pourcentage'];

$sq5m = [$pourcentagesq5m_01, $pourcentagesq5m_02, $pourcentagesq5m_03, $pourcentagesq5m_04, $pourcentagesq5m_05];
?>
