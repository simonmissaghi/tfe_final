<?php
include ('./php/connection.php');

// Smartphones female 1995 q1 r1

// header('Content-type: application/json');

$sq8_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q8 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq8_01->execute();
$rowsq8_01 = $sq8_01->fetch();
$pourcentagesq8_01 = $rowsq8_01['pourcentage'];


$sq8_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q8 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq8_02->execute();
$rowsq8_02 = $sq8_02->fetch();
$pourcentagesq8_02 = $rowsq8_02['pourcentage'];


$sq8_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q8 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$sq8_03->execute();
$rowsq8_03 = $sq8_03->fetch();
$pourcentagesq8_03 = $rowsq8_03['pourcentage'];


$data_sq8All = array($pourcentagesq8_01, $pourcentagesq8_02, $pourcentagesq8_03);

?>
