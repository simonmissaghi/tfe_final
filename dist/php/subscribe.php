<?php
include ("connection.php");

if(!empty($_POST['btn_submit'])) {
  $preparedStatement = $connection->prepare('INSERT INTO membres
    (
    pseudo,
    pass,
    email

    )
    VALUES (
    :pseudo,
    :pass,
    :email)');
  $pseudo =  strip_tags($_POST['pseudo']);
  $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);
  $email =  strip_tags($_POST['email']);

 var_dump( $preparedStatement->execute(array(
    'pseudo' => $pseudo,
    'pass' => $pass_hache,
    'email' => $email
  )));
}

?>

<form action="" method="POST">
  <label for="pseudo">Pseudo :
    <input type="text" name="pseudo">
  </label>

  <label for="pass">password :
    <input type="password" name="pass">
  </label>


  <label for="email">email :
    <input type="email" name="email">
  </label>

  <input type="submit" name="btn_submit"/>
</form>
