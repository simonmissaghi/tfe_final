<?php



// Smartphones female q1 r1

$sq1all_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q1 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq1all_01->execute();
$rowsq1all_01 = $sq1all_01->fetch();
$pourcentagesq1all_01 = $rowsq1all_01['pourcentage'];


// Smartphones female q1 r2

$sq1all_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q1 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq1all_02->execute();
$rowsq1all_02 = $sq1all_02->fetch();
$pourcentagesq1all_02 = $rowsq1all_02['pourcentage'];


// Smartphones female q1 r3
$sq1all_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q1 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq1all_03->execute();
$rowsq1all_03 = $sq1all_03->fetch();
$pourcentagesq1all_03 = $rowsq1all_03['pourcentage'];



// Smartphones female q1 r4

$sq1all_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q1 = "4") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq1all_04->execute();
$rowsq1all_04 = $sq1all_04->fetch();
$pourcentagesq1all_04 = $rowsq1all_04['pourcentage'];



// Smartphones female q1 r5

$sq1all_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q1 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq1all_05->execute();
$rowsq1all_05 = $sq1all_05->fetch();
$pourcentagesq1all_05 = $rowsq1all_05['pourcentage'];


$sq1all = [$pourcentagesq1all_01, $pourcentagesq1all_02, $pourcentagesq1all_03, $pourcentagesq1all_04, $pourcentagesq1all_05];
?>
