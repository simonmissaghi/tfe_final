<?php

// Smartphones male q3 r1

$sq3m_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q3 = "[1],") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq3m_01->execute();
$rowsq3m_01 = $sq3m_01->fetch();
$pourcentagesq3m_01 = $rowsq3m_01['pourcentage'];


// Smartphones male q3 r2

$sq3m_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q3 = "[2],") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq3m_02->execute();
$rowsq3m_02 = $sq3m_02->fetch();
$pourcentagesq3m_02 = $rowsq3m_02['pourcentage'];


// Smartphones male q3 r3
$sq3m_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q3 = "[3],") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq3m_03->execute();
$rowsq3m_03 = $sq3m_03->fetch();
$pourcentagesq3m_03 = $rowsq3m_03['pourcentage'];



// Smartphones male q3 r4

$sq3m_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q3 = "[4],") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq3m_04->execute();
$rowsq3m_04 = $sq3m_04->fetch();
$pourcentagesq3m_04 = $rowsq3m_04['pourcentage'];



// Smartphones male q3 r5

$sq3m_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q3 = "[5],") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq3m_05->execute();
$rowsq3m_05 = $sq3m_05->fetch();
$pourcentagesq3m_05 = $rowsq3m_05['pourcentage'];


// Smartphones male q3 r6

// $sq3m_05 = $connection->prepare('SELECT
//   (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q3 = "[6]") * 100 /
//   (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
//   FROM smartphones_survey');
// $sq3m_05->execute();
// $rowsq3m_05 = $sq3m_05->fetch();
// $pourcentagesq3m_05 = $rowsq3m_05['pourcentage'];


$sq3m = [$pourcentagesq3m_01, $pourcentagesq3m_02, $pourcentagesq3m_03, $pourcentagesq3m_04, $pourcentagesq3m_05];
?>
