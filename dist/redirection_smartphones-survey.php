<?php session_start(); ?>
<?php include ("php/connection.php");
include ("php/function.php");

$ipErr = "";
$questionErr = "";
$emailValid = "";
$emailErr = "";
if (!empty($_POST['submit_email--smartphones'])) {

  $email = strip_tags($_POST['email']);
  $prepareEmail = $connection->prepare("SELECT COUNT(*) AS email_adress FROM email_table WHERE email = '$email'");
  $prepareEmail->execute();
  $roww = $prepareEmail->fetch();
  $existingEmail = $roww['email_adress'];
  if($existingEmail != 0) {

    session_destroy();
    header("Location: index.php");

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
      header( "refresh:2;url=index.php" );
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

<!DOCTYPE html>
<html class="page-surveys page-surveys-single" lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sondage - Les smartphones | #trustinme</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
  <header>
    <img class="logo" src="images/logo_trustinme.svg" alt="logo" />
    <nav></nav>
  </header>
  <main class="smartphone-survey">
    <div class="alert alert-danger"><?php echo $ipErr; ?></div>
    <div class="alert alert-danger"><?php echo $questionErr; ?></div>
    <div class="alert alert-danger"><?php echo $emailErr; ?></div>
    <div class="alert alert-safe"><?php echo $emailValid; ?></div>
    <!-- Grid beginning -->
    <div class="wrapper-survey wrapper-survey-redirection smartphones-survey">
      <div class="header-main">
        <h1 class="title-intro">Les smartphones</h1>
      </div>
      <div class="body-main">
        <form action="" method="POST">
          <!-- Question préambule -->
          <div class="wrapper-question">
            <div class="question">
              <h2>Merci pour ta participation !</h2>
              <p class="smartphones-survey">Tu peux être tenu au courant de la suite des évènements en rentrant ton adresse email. C'est sans obligation.</p>
            </div>
            <div class="answers">
              <input type="email" class="smartphones-survey" name="email" value="" placeholder="email">
              <div class="checkbox">
                <input type="checkbox"  id="check-rules" name="privacy" value="1">
                <label class="checkbox apps-survey" for="check-rules">Accepter les <a href="/">règles de confidentialité</a></label>
              </div>
              <div class="redirect-skip"><a href="index.php">Passer cette étape</a></div>
            </div>
            <input type="submit" name="submit_email--smartphones" class="btn-full-bottom smartphones-survey" />
          </div>
        </form>
      </div>
    </div>
  </main>
  <footer></footer>
  <script src="javascript/main.js"></script>
</body>
</html>
