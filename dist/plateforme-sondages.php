<?php session_start();
include ("./php/connection.php");
include ("./php/function.php");
include ("./php/totalanswers.php");
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
  <meta name="Indentifier-URL" content="http://www.simonmissaghi.be/projets/ourvoice/plateforme-sondages.php">
  <meta name="Keywords" content="OURVOICE, young, people, genz, generation, generationZ, Z, adolescents, jeunes">
  <!-- Méta Google -->
  <meta name="title" content="#OURVOICE - La génération Z peut s'exprimer !" />
  <meta name="description" content="Tu es né(e) entre 1995 et 2012 ? Tu es l'acteur principal de ce projet ! Donne ta voix à trois sondages sur les smartphones !" />

  <!-- Métas Facebook Opengraph -->
  <meta property="og:title" content="#OURVOICE - La génération Z peut s'exprimer !" />
  <meta property="og:description" content="Tu es né(e) entre 1995 et 2012 ? Tu es l'acteur principal de ce projet ! Donne ta voix à trois sondages sur les smartphones !" />
  <meta property="og:url" content="http://www.simonmissaghi.be/projets/ourvoice/plateforme-sondages.php" />
  <meta property="og:image" content="http://www.simonmissaghi.be/projets/OURVOICE/images/img_metatag-surveys.jpg" />
  <meta property="og:image:secure_url" content="images/img_metatag-surveys.jpg" />
  <meta property="og:type" content="website" />
  <meta property="og:type" content="website" />

  <!-- Métas Twitter Card -->
  <meta name="twitter:title" content="#OURVOICE - La génération Z peut s'exprimer !" />
  <meta name="twitter:description" content="Tu es né(e) entre 1995 et 2012 ? Tu es l'acteur principal de ce projet ! Donne ta voix à trois sondages sur les smartphones !" />
  <meta name="twitter:url" content="http://www.simonmissaghi.be/projets/ourvoice/plateforme-sondages.php" />
  <meta name="twitter:image" content="images/img_metatag-surveys.jpg" />
    <!--  Favicon -->
  <link rel="apple-touch-icon" sizes="57x57" href="./images/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="./images/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="./images/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="./images/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="./images/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="./images/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="./images/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="./images/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="./images/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="./images/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
</head>
<body>
  <?php include('./header-pages.php');?>
  <?php include('./nav.php'); ?>
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
<script src="javascript/main.js"></script>
</body>
</html>
