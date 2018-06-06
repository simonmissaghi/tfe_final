<?php
$erreurco = "";

if(!empty($_POST['btn_submit--login'])) {
  $preparedStatement = $connection->prepare('SELECT id, pass FROM membres WHERE pseudo = :pseudo');
  $pseudo =  strip_tags($_POST['pseudo']);
  $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);

  $preparedStatement->execute(array(
    'pseudo' => $pseudo));
  $resultat = $preparedStatement->fetch();

  $isPasswordCorrect = password_verify($_POST['pass'], $resultat['pass']);

  // if (!$resultat)
  // {

  // // }
  // else
  {
    if ($isPasswordCorrect) {
      session_start();
      $_SESSION['id'] = $resultat['id'];
      $_SESSION['pseudo'] = $pseudo;

      header('Location:./moderateur.php');
      exit;
    }
    else {
      $erreurco = "Identifiant et/ou mot de passe incorrect";
    }
  }
}
?>
