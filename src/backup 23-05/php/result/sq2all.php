<?php

// Smartphones female q2 r1

$sq2all_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q2 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq2all_01->execute();
$rowsq2all_01 = $sq2all_01->fetch();
$pourcentagesq2all_01 = $rowsq2all_01['pourcentage'];


// Smartphones female q2 r2

$sq2all_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q2 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq2all_02->execute();
$rowsq2all_02 = $sq2all_02->fetch();
$pourcentagesq2all_02 = $rowsq2all_02['pourcentage'];


// Smartphones female q2 r3
$sq2all_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q2 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq2all_03->execute();
$rowsq2all_03 = $sq2all_03->fetch();
$pourcentagesq2all_03 = $rowsq2all_03['pourcentage'];



// Smartphones female q2 r4

$sq2all_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q2 = "4") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq2all_04->execute();
$rowsq2all_04 = $sq2all_04->fetch();
$pourcentagesq2all_04 = $rowsq2all_04['pourcentage'];



// Smartphones female q2 r5

$sq2all_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q2 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq2all_05->execute();
$rowsq2all_05 = $sq2all_05->fetch();
$pourcentagesq2all_05 = $rowsq2all_05['pourcentage'];


$sq2all = [$pourcentagesq2all_01, $pourcentagesq2all_02, $pourcentagesq2all_03, $pourcentagesq2all_04, $pourcentagesq2all_05];
?>
