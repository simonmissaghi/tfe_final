<?php
session_start();
include('./connection.php');

var_dump($_GET['id']);

$id = $_GET['id'];

var_dump($id);

if(isset($_GET['id']) AND !empty($_GET['id'])) {
    $preparedUpdate = $connection->prepare('UPDATE temoignages SET likes = likes+1 WHERE id LIKE :id');

  $preparedUpdate->execute(array(
    'id' => $id
  ));

  header('Location: ../temoignages.php');
  exit();
}

?>
