<?php

// Smartphones female 1995 q7 r1

$nfq7_01 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q7 = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$nfq7_01->execute();
$rownfq7_01 = $nfq7_01->fetch();
$pourcentagenfq7_01 = $rownfq7_01['pourcentage'];




// Smartphones female 1995 q7 r5

$nfq7_05 = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2" AND q7 = "5") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") AS pourcentage
  FROM smartphones_survey');
$nfq7_05->execute();
$rownfq7_05 = $nfq7_05->fetch();
$pourcentagenfq7_05 = $rownfq7_05['pourcentage'];


$data_nfq7 = array($pourcentagenfq7_01, $pourcentagenfq7_05);

?>
