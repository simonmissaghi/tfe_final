<?php
include ('/../connection.php');

// Smartphones female 1995 q7 r1

$nq7All_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q7 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$nq7All_01->execute();
$rownq7All_01 = $nq7All_01->fetch();
$pourcentagenq7All_01 = $rownq7All_01['pourcentage'];

// Smartphones female 1995 q7

$nq7All_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE q7 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$nq7All_05->execute();
$rownq7All_05 = $nq7All_05->fetch();
$pourcentagenq7All_05 = $rownq7All_05['pourcentage'];

$data_nq7All = array($pourcentagenq7All_01, $pourcentagenq7All_05);
?>
