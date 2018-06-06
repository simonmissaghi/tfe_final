<?php
session_start();
include ("./connection.php");
if (!isset($_SESSION['pseudo'])) {
  header ('Location: index.php');
  exit();
}

  $id = $_GET['id'];
    $preparedStatement = $connection->prepare('UPDATE temoignages SET statut = :statut WHERE id = :id');

    $statut = 'OK';

    $preparedStatement->execute(array(
        'statut' => $statut,
        'id' => $id
    ));

header("Location: ../moderateur.php");
exit();

?>
