<?php session_start(); ?>
<?php include ("php/connection.php");
include ("php/function.php");

$prepareTotalAnswersNetworks = $connection->prepare("SELECT COUNT(id) AS total_answers FROM networks_survey");
$prepareTotalAnswersNetworks->execute();
$roww = $prepareTotalAnswersNetworks->fetch();
$totalAnswersNetworks = $roww['total_answers'];

$prepareTotalAnswersApps = $connection->prepare("SELECT COUNT(id) AS total_answers FROM apps_survey");
$prepareTotalAnswersApps->execute();
$roww = $prepareTotalAnswersApps->fetch();
$totalAnswersApps = $roww['total_answers'];

$prepareTotalAnswersSmartphones = $connection->prepare("SELECT COUNT(id) AS total_answers FROM smartphones_survey");
$prepareTotalAnswersSmartphones->execute();
$roww = $prepareTotalAnswersSmartphones->fetch();
$totalAnswersSmartphones = $roww['total_answers'];

?>

<!DOCTYPE html>
<html class="page-surveys" lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
  <title>Sondages | #trustinme</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" href="css/swiper.css">
</head>

<body>
  <header>
    <img class="logo" src="images/logo_trustinme.svg" alt="logo" />
    <nav></nav>
  </header>
  <main>
    <section class="container-surveys">
      <div class="wrapper-surveys">
        <div class="header-surveys">
          <h1>Choisis ton sondage</h1>
        </div>
        <div class="body-surveys">
          <ul class="surveys">
            <li><a class="smartphones-link" href="./smartphones_sondage.php">Les smartphones
              <span>Questions sur l'utilisation d'un smartphone</span>
              <span> <?php echo $totalAnswersSmartphones; ?> Réponses</span>
            </a>
          </li>
          <li><a class="apps-link" href="./apps_sondage.php">Les apps
            <span>Questions sur l'utilisation d'un smartphone</span>
            <span> <?php echo $totalAnswersApps; ?> Réponses</span>
          </a></li>
          <li><a class="socialn-link" href="./networks_sondage.php">Les réseaux sociaux
            <span>Questions sur l'utilisation d'un smartphone</span>
            <span> <?php echo $totalAnswersNetworks; ?> Réponses</span>
          </a></li>
        </ul>
      </div>
    </div>
  </section>
  <div class="credits">Photos - <a href="http://www.unsplash.com">Unsplash</a></div>
</main>
</body>
</html>
