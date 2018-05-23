<?php
session_start();
include ("./connection.php");
if (!isset($_SESSION['pseudo'])) {
  header ('Location: connection_membre.php');
  exit();
}

  $id = $_GET['id'];
    $preparedStatement = $connection->prepare('DELETE FROM temoignages WHERE id = :id');


    $preparedStatement->execute(array(
        'id' => $id
    ));

header("Location: ../moderateur.php");
exit();

?>
