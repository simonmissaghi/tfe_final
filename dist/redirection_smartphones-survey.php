<?php session_start();
include('./php/insert_email');
?>

<!DOCTYPE html>
<html class="page-surveys page-surveys-single" lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sondage - Les smartphones | #OURVOICE</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">

</head>

<body>
    <?php include('./header-pages.php'); ?>
    <?php include('./nav.php');?>
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
                <label class="checkbox apps-survey" for="check-rules">Accepter les <a href="/" class="privacy-btn">règles de confidentialité</a></label>
              </div>
              <div class="redirect-skip"><a href="plateforme-sondages.php">Passer cette étape</a></div>
            </div>
            <input type="submit" name="submit_email" class="btn-full-bottom smartphones-survey" />
          </div>
        </form>
      </div>
      <div class="privacy-rules">
        <div class="cross-exit"></div>
        <h2>Les présentes règles de confidentialité visent à vous indiquer quelles informations nous collectons, pour quelle raison, et comment nous les utilisons.</h2>
        <p>Nous récoltons juste votre adresse de courriel, sans obligation. Elle nous servira dans le seul but de vous envoyer un email lorsque le projet sera abouti et de cette manière, vous pourrez voir ce à quoi vous avez contribué.</p>
        <p>En aucun cas, une utilisation autre que celle décrite ci-dessus ne sera faite avec votre adresse de courriel.</p>
      </div>
    </div>
    <div class="credits">Photos - <a href="http://www.unsplash.com">Unsplash</a></div>
  </main>
  <footer></footer>
  <script src="javascript/main.js"></script>
</body>
</html>
