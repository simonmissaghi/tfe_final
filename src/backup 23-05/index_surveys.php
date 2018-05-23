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
  <title>Sondages | #OURVOICE</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" href="css/swiper.css">
  <meta name="Author" lang="fr" content="#OURVOICE - La génération Z peut s'exprimer !">
  <meta name="Publisher" content="Simon MISSAGHI">
  <meta name="Reply-to" content="simon@simonmissaghi.be">
  <meta name="Description" content="Tu es né(e) entre 1995 et 2012 ? Tu es l'acteur principal de ce projet ! Donne ta voix à trois sondages sur les smartphones !">
  <meta name="Indentifier-URL" content="http://www.simonmissaghi.be">
  <meta name="Keywords" content="OURVOICE, young, people, genz, generation, generationZ, Z, adolescents, jeunes">
  <!-- Méta Google -->
  <meta name="title" content="#OURVOICE - La génération Z peut s'exprimer !" />
  <meta name="description" content="Tu es né(e) entre 1995 et 2012 ? Tu es l'acteur principal de ce projet ! Donne ta voix à trois sondages sur les smartphones !" />

  <!-- Métas Facebook Opengraph -->
  <meta property="og:title" content="#OURVOICE - La génération Z peut s'exprimer !" />
  <meta property="og:description" content="Tu es né(e) entre 1995 et 2012 ? Tu es l'acteur principal de ce projet ! Donne ta voix à trois sondages sur les smartphones !" />
  <meta property="og:url" content="http://www.simonmissaghi.be/projets/index.php" />
  <meta property="og:image" content="http://www.simonmissaghi.be/projets/OURVOICE/images/img_metatag.jpg" />
  <meta property="og:image:secure_url" content="images/img_metatag.jpg" />
  <meta property="og:type" content="website" />
  <meta property="og:type" content="website" />

  <!-- Métas Twitter Card -->
  <meta name="twitter:title" content="#OURVOICE - La génération Z peut s'exprimer !" />
  <meta name="twitter:description" content="Tu es né(e) entre 1995 et 2012 ? Tu es l'acteur principal de ce projet ! Donne ta voix à trois sondages sur les smartphones !" />
  <meta name="twitter:url" content="http://www.simonmissaghi.be/projets/index.php" />
  <meta name="twitter:image" content="images/img_metatag.jpg" />
</head>

<body>
  <header>
    <img class="logo" src="images/logo_OURVOICE.svg" alt="logo" />
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
              <span>Comprendre l'intérêt d'avoir un smartphone à notre époque.</span>
              <span> <?php echo $totalAnswersSmartphones; ?> Réponses</span>
            </a>
          </li>
          <li><a class="apps-link" href="./apps_sondage.php">Les apps
            <span>Qu'est ce qui attire sur ces apps ?</span>
            <span> <?php echo $totalAnswersApps; ?> Réponses</span>
          </a></li>
          <li><a class="socialn-link" href="./networks_sondage.php">Les réseaux sociaux
            <span>Questions sur tes habitudes sur tes réseaux sociaux.</span>
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
