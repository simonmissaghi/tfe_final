<?php
include ('./php/connection.php');

// Smartphones male q2 r1

$sq2m_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q2 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq2m_01->execute();
$rowsq2m_01 = $sq2m_01->fetch();
$pourcentagesq2m_01 = $rowsq2m_01['pourcentage'];

// Smartphones male q2 r2

$sq2m_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q2 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq2m_02->execute();
$rowsq2m_02 = $sq2m_02->fetch();
$pourcentagesq2m_02 = $rowsq2m_02['pourcentage'];

// Smartphones male q2 r3
$sq2m_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q2 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq2m_03->execute();
$rowsq2m_03 = $sq2m_03->fetch();
$pourcentagesq2m_03 = $rowsq2m_03['pourcentage'];


// Smartphones male q2 r4

$sq2m_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q2 = "4") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq2m_04->execute();
$rowsq2m_04 = $sq2m_04->fetch();
$pourcentagesq2m_04 = $rowsq2m_04['pourcentage'];


// Smartphones male q2 r5

$sq2m_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q2 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq2m_05->execute();
$rowsq2m_05 = $sq2m_05->fetch();
$pourcentagesq2m_05 = $rowsq2m_05['pourcentage'];

$sq2m = [$pourcentagesq2m_01, $pourcentagesq2m_02, $pourcentagesq2m_03, $pourcentagesq2m_04, $pourcentagesq2m_05];
?>
