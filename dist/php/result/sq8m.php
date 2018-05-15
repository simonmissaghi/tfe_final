<?php
include ('./php/connection.php');

// Smartphones female q8 r1

$sq8m_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q8 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq8m_01->execute();
$rowsq8m_01 = $sq8m_01->fetch();
$pourcentagesq8m_01 = $rowsq8m_01['pourcentage'];

// Smartphones female q8 r2

$sq8m_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q8 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq8m_02->execute();
$rowsq8m_02 = $sq8m_02->fetch();
$pourcentagesq8m_02 = $rowsq8m_02['pourcentage'];

// Smartphones female q8 r3
$sq8m_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" AND q8 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
  FROM smartphones_survey');
$sq8m_03->execute();
$rowsq8m_03 = $sq8m_03->fetch();
$pourcentagesq8m_03 = $rowsq8m_03['pourcentage'];


$sq8m = [$pourcentagesq8m_01, $pourcentagesq8m_02, $pourcentagesq8m_03];
?>
