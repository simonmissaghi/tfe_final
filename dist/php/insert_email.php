<?php
include ("php/connection.php");
include ("php/function.php");

$ipErr = "";
$questionErr = "";
$emailValid = "";
$emailErr = "";
if (!empty($_POST['submit_email'])) {

  $email = strip_tags($_POST['email']);
  $prepareEmail = $connection->prepare("SELECT COUNT(*) AS email_adress FROM email_table WHERE email = '$email'");
  $prepareEmail->execute();
  $roww = $prepareEmail->fetch();
  $existingEmail = $roww['email_adress'];
  if($existingEmail != 0) {

    session_destroy();
    header("Location: plateforme-sondages.php");

    exit();
  }



  if(!empty($_POST['email'])) {

   if(!empty($_POST['privacy'])) {

    $preparedstatement = $connection->prepare('INSERT INTO email_table
      (
      email
      )
      VALUES (
      :email
    )');

    $email = strip_tags($_POST['email']);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $preparedstatement ->execute(array(
        'email' => $email
      ));

      $_SESSION = [];
      $emailValid = "C'est parfait ! Tu seras tenu au courant très prochainement !";
      header( "refresh:2;url=plateforme-sondages.php" );
    }


  }
  else {
    $emailErr = "Tu dois accepter les règles de confidentialité !";}
  }
  else {
    $emailErr = "Il faut rentrer une adresse email correcte !";
  }
}
?>
