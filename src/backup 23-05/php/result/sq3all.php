<?php


// Smartphones male q3 r1

$sq3all_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q3 = "[1],") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq3all_01->execute();
$rowsq3all_01 = $sq3all_01->fetch();
$pourcentagesq3all_01 = $rowsq3all_01['pourcentage'];


// Smartphones male q3 r2

$sq3all_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q3 = "[2],") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq3all_02->execute();
$rowsq3all_02 = $sq3all_02->fetch();
$pourcentagesq3all_02 = $rowsq3all_02['pourcentage'];


// Smartphones male q3 r3
$sq3all_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q3 = "[3],") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq3all_03->execute();
$rowsq3all_03 = $sq3all_03->fetch();
$pourcentagesq3all_03 = $rowsq3all_03['pourcentage'];



// Smartphones male q3 r4

$sq3all_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q3 = "[4],") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq3all_04->execute();
$rowsq3all_04 = $sq3all_04->fetch();
$pourcentagesq3all_04 = $rowsq3all_04['pourcentage'];



// Smartphones male q3 r5

$sq3all_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q3 = "[5],") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq3all_05->execute();
$rowsq3all_05 = $sq3all_05->fetch();
$pourcentagesq3all_05 = $rowsq3all_05['pourcentage'];


// Smartphones male q3 r6

// $sq3all_05 = $connection->prepare('SELECT
//   (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1" WHERE q3 = "[6]") * 100 /
//   (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") AS pourcentage
//   FROM smartphones_survey');
// $sq3all_05->execute();
// $rowsq3all_05 = $sq3all_05->fetch();
// $pourcentagesq3all_05 = $rowsq3all_05['pourcentage'];


$sq3all = [$pourcentagesq3all_01, $pourcentagesq3all_02, $pourcentagesq3all_03, $pourcentagesq3all_04, $pourcentagesq3all_05];
?>
