<?php
include ('/../connection.php');

// Smartphones female 1995 q1 r1

$nfq7_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q1 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$nfq7_01->execute();
$rownfq7_01 = $nfq7_01->fetch();
$pourcentagenfq7_01 = $rownfq7_01['pourcentage'];

// Smartphones female 1995 q1 r2

$nfq7_02 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q1 = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$nfq7_02->execute();
$rownfq7_02 = $nfq7_02->fetch();
$pourcentagenfq7_02 = $rownfq7_02['pourcentage'];

// Smartphones female 1995 q1 r3
$nfq7_03 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q1 = "3") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$nfq7_03->execute();
$rownfq7_03 = $nfq7_03->fetch();
$pourcentagenfq7_03 = $rownfq7_03['pourcentage'];


// Smartphones female 1995 q1 r4

$nfq7_04 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q1 = "4") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$nfq7_04->execute();
$rownfq7_04 = $nfq7_04->fetch();
$pourcentagenfq7_04 = $rownfq7_04['pourcentage'];


// Smartphones female 1995 q1 r5

$nfq7_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q1 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$nfq7_05->execute();
$rownfq7_05 = $nfq7_05->fetch();
$pourcentagenfq7_05 = $rownfq7_05['pourcentage'];

$data_sfq1 = array($pourcentagenfq7_01, $pourcentagenfq7_02, $pourcentagenfq7_03, $pourcentagenfq7_04, $pourcentagenfq7_05);
?>
