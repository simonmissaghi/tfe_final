<?php session_start(); ?>
<?php include ("php/connection.php");
include ("php/function.php");
$adressip = $_SERVER["REMOTE_ADDR"];
$prepareip = $connection->prepare("SELECT COUNT(*) AS ip_adress FROM smartphones_survey WHERE ip_adress = '$adressip'");
$prepareip->execute();
$roww = $prepareip->fetch();
$ip_final = $roww['ip_adress'];
$ipErr = "";
$questionErr = "";
$emailValid = "";
$emailErr = "";
if (!empty($_POST['submit_email'])) {
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
    $emailValid = "C'est parfait ! Tu seras tenu au courant prochainement !";
    header( "refresh:3;url=index.html" );
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
    <div class="wrapper-survey wrapper-survey-redirection smartphone-survey">
      <div class="header-main">
        <h1 class="title-intro">Les smartphones</h1>
      </div>
      <div class="body-main">
        <form action="" method="POST">
          <!-- Question préambule -->
          <div class="wrapper-question">
            <div class="question">
              <h2>Merci pour ta participation !</h2>
              <p>Tu peux être tenu au courant de la suite des évènements en rentrant ton adresse email. C'est sans obligation.</p>
            </div>
            <div class="answers">
              <input type="email" name="email" value="" placeholder="email">
              <div class="redirect-skip"><a href="index.html">Passer cette étape</a></div>
            </div>
            <input type="submit" name="submit_email" class="btn-next" />
          </div>
        </form>
      </div>
    </div>
  </main>
  <footer></footer>
  <script src="javascript/main.js"></script>
</body>
</html>
