
<!-- Calcul de pourcentages -->

<?php
$preparePercentage = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM sondage_adulte WHERE preambule_1 = "1" AND question_1 = "1") * 100 /
  (SELECT COUNT(*) FROM sondage_adulte WHERE preambule_1 = "1") AS pourcentage
  FROM sondage_adulte');
$preparePercentage->execute();
$row = $preparePercentage->fetch();
$pourcentage = $row['pourcentage'];
// var_dump($row);

?>
