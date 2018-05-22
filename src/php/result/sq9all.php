<?php

// Smartphones female 1995 q1 r1

$sq9_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q8 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq9_01->execute();
$rowsq9_01 = $sq9_01->fetch();
$pourcentagesq9_01 = $rowsq9_01['pourcentage'];


$sq9_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q8 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq9_02->execute();
$rowsq9_02 = $sq9_02->fetch();
$pourcentagesq9_02 = $rowsq9_02['pourcentage'];


$sq9_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q8 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq9_03->execute();
$rowsq9_03 = $sq9_03->fetch();
$pourcentagesq9_03 = $rowsq9_03['pourcentage'];

var_dump($pourcentagesq9_01, $pourcentagesq9_02, $pourcentagesq9_03);




$data_sq8 = array($pourcentagesq9_01, $pourcentagesq9_02, $pourcentagesq9_03);
?>
