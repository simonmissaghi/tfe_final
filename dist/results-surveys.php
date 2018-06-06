<?php
session_start();
include ('./php/connection.php');
include ('./php/function.php');
include ('./php/login.php');
?>


<!DOCTYPE html>
<html class="page-front page-results" lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Résultats des sondages | #OURVOICE</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <!-- <link rel="stylesheet" href="css/swiper.css"> -->
  <meta name="Author" lang="fr" content="#OURVOICE - La génération Z peut s'exprimer !">
  <meta name="Publisher" content="Simon MISSAGHI">
  <meta name="Reply-to" content="simon@simonmissaghi.be">
  <meta name="Description" content="#OURVOICE est une passerelle intergénérationnelle, une plateforme qui permet de comprendre le comportement de la Génération Z par rapport à son utilisation du smartphone via des témoignages et des sondages.">
  <meta name="Indentifier-URL" content="http://www.simonmissaghi.be">
  <meta name="Keywords" content="OURVOICE, young, people, genz, generation, generationZ, Z, adolescents, jeunes, sondages, témoignages, survey, surveys, teen, statistiques, statistics">
  <!-- Méta Google -->
  <meta name="title" content="#OURVOICE - La génération Z peut s'exprimer !" />
  <meta name="description" content="#OURVOICE est une passerelle intergénérationnelle, une plateforme qui permet de comprendre le comportement de la Génération Z par rapport à son utilisation du smartphone via des témoignages et des sondages." />

  <!-- Métas Facebook Opengraph -->
  <meta property="og:title" content="#OURVOICE - La génération Z peut s'exprimer !" />
  <meta property="og:description" content="#OURVOICE est une passerelle intergénérationnelle, une plateforme qui permet de comprendre le comportement de la Génération Z par rapport à son utilisation du smartphone via des témoignages et des sondages." />
  <meta property="og:url" content="http://www.simonmissaghi.be/projets/index.php" />
  <meta property="og:image" content="http://www.simonmissaghi.be/projets/OURVOICE/images/img_metatag.jpg" />
  <meta property="og:image:secure_url" content="images/img_metatag.jpg" />
  <meta property="og:type" content="website" />
  <meta property="og:type" content="website" />

  <!-- Métas Twitter Card -->
  <meta name="twitter:title" content="#OURVOICE - La génération Z peut s'exprimer !" />
  <meta name="twitter:description" content="#OURVOICE est une passerelle intergénérationnelle, une plateforme qui permet de comprendre le comportement de la Génération Z par rapport à son utilisation du smartphone via des témoignages et des sondages." />
  <meta name="twitter:url" content="http://www.simonmissaghi.be/projets/index.php" />
  <meta name="twitter:image" content="images/img_metatag.jpg" />

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
  <?php include('./nav.php');?>
  <main>
    <div class="banner banner-inner-page banner-surveys">
      <div class="main-container">
        <h1 class="title-banner">Sondages</h1>
        <h2>Interpréter les réponses d’une génération entière</h2>
      </div>
    </div>
    <div class="main-container">
      <div class="wrapper-section wrapper-section--results">
        <section class="intro intro-sondages">
          <div class="container-listing">
            <div class="wrapper-tabs">
              <ul class="tabs-questions">
                <li class="tabs-surveys smartphones active" id="tabSmartphones" onclick="changeTabs(event, 'smartphones', 'listingSmartphone')"><h2>Les smartphones</h2></li>
                <li class="tabs-surveys apps" id="tabApps" onclick="changeTabs(event, 'apps', 'listingApps')"><h2>Les apps</h2></li>
                <li class="tabs-surveys networks" id="tabNetworks" onclick="changeTabs(event, 'networks', 'listingNetworks')"><h2>Les réseaux sociaux</h2></li>
              </ul>
              <div class="container-questions" id="smartphones"><ul class="list-questions" id="listingSmartphone">
                <li class="el-chart active-question" id="defaultOpen" data-data1="sq1all" data-data2="sq1m" data-data3="sq1f" data-label="labels5">Quelle est la probabilité que tu achètes le
                tout nouveau smartphone, malgré que ton actuel fonctionne bien ?</li>
                <li class="el-chart" data-data1="sq2all" data-data2="sq2m" data-data3="sq2f" data-label="labels5">Sur un nouveau smartphone, à quel point es-tu
                intéressé.e par l’aspect technologique du produit ?</li>
                <li class="el-chart" data-data1="sq3all" data-data2="sq3m" data-data3="sq3f" data-label="labelssq3">Si tu achètes un nouveau smartphone, c’est pour :
                </li>
                <li class="el-chart" data-data1="sq4all" data-data2="sq4m" data-data3="sq4f" data-label="labels5">Quelle est la probabilité que tu te passes de ton smartphone une journée entière ?</li>
                <li class="el-chart" data-data1="sq5all" data-data2="sq5m" data-data3="sq5f" data-label="labels5">Quelle est l’importance pour toi d’avoir accès à internet
                  partout avec ton smartphone ?</li>
                <li class="el-chart" data-data1="sq6all" data-data2="sq6m" data-data3="sq6f" data-label="labels5">Quelle est l’importance pour toi d’avoir accès aux outils
                  de développeur sur ton smartphone ?
                </li>
                <li class="el-chart" data-data1="sq7all" data-data2="sq7m" data-data3="sq7f" data-label="labels5">Quelle est pour toi la probabilité que les smartphones
                  soient sources de manque de contacts en temps réel entre humains ?</li>
                <li class="el-chart" data-data1="sq8all" data-data2="sq8m" data-data3="sq8f" data-label="labels3">Sur quel support as-tu répondu aux sondages ?
                </li>
              </ul>
            </div>
            <div class="container-questions" id="apps">
              <ul class="list-questions" id="listingApps">
                <li class="el-chart" data-data1="aq1all" data-data2="aq1m" data-data3="aq1f" data-label="labelsaq1">Sur ton smartphone, quelle(s) catégorie(s) d’apps as-tu en majorité <span>(plusieurs choix possibles)</span> ?</li>
                <li class="el-chart" data-data1="aq2all" data-data2="aq2m" data-data3="aq2f" data-label="labels5">Quelle est la probabilité que tes apps puissent t'aider à l’école/ à l’université ?
                </li>
                <li class="el-chart" data-data1="aq3all" data-data2="aq3m" data-data3="aq3f" data-label="labels5">Quelle est l’importance pour toi d’apprendre via des tutoriels (vidéos, articles) sur tes apps ?
                </li>
                <li class="el-chart" data-data1="aq4all" data-data2="aq4m" data-data3="aq4f" data-label="labels5">Quelle est l’importance pour toi de se tenir au courant des derniers buzz via Youtube ?
                </li>
              </ul>
            </div>
            <div class="container-questions" id="networks">
              <ul class="list-questions" id="listingNetworks">
                <li class="el-chart" data-data1="nq2all" data-data2="nq2m" data-data3="nq2f" data-label="labelsnq2">À quelle fréquence consultes-tu tes réseaux sociaux par jour ?
                </li>
                <li class="el-chart" data-data1="nq3all" data-data2="nq3m" data-data3="nq3f" data-label="labelsnq3">En général, pour quelle(s) raison(s) te connectes-tu sur tes réseaux sociaux ?
                </li>
                <li class="el-chart" data-data1="nq4all" data-data2="nq4m" data-data3="nq4f" data-label="labelsnq4">A quelle fréquence postes-tu des articles, des commentaires sur tes réseaux sociaux ?</li>
                <li class="el-chart" data-data1="nq5all" data-data2="nq5m" data-data3="nq5f" data-label="labelsnq5">De manière générale, que postes-tu sur tes réseaux sociaux ?</li>
                <li class="el-chart" data-data1="nq6all" data-data2="nq6m" data-data3="nq6f" data-label="labelsnq6">De manière générale, pourquoi postes-tu sur tes réseaux sociaux ?
                </li>
                <li class="el-chart" data-data1="nq7all" data-data2="nq7m" data-data3="nq7f" data-label="labels5">Quelle est l’importance pour toi de socialiser via les réseaux sociaux ?
                </li>
                <li class="el-chart" data-data1="nq8all" data-data2="nq8m" data-data3="nq8f" data-label="labelsnq8">Approximativement, combien de tes “amis” sur les réseaux sociaux as-tu rencontrés en personne ?
                </li>
                <li class="el-chart" data-data1="nq9all" data-data2="nq9m" data-data3="nq9f" data-label="labelsnq9">Lorsque tu es sur les réseaux sociaux, combien de temps passes-tu à regarder ce que tes relations ont posté ?
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="section-second results-surveys">
        <div class="container-results-explication-intro" id="resultsIntro">

        </div>
        <h2 class="title-inner title-inner--surveys title-inner--results title-inner--surveys-no-border" id="titleQuestionChart"> </h2>
        <canvas class="chartsjs" id="allCharts"></canvas>
        <div class="wrapper-btn btn-surveys btn-surveys-results">
          <a class="write write-result-surveys" href="./plateforme-sondages.php">Répondre aux sondages</a>
        </div>
      </section>
    </div>
    <?php include('./footer.php'); ?>
  </div>
</main>
<script
src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script src="results.json"></script>
<script src="javascript/Chart.js"></script>
<script src="javascript/main.js"></script>
<!-- <script src="javascript/swiper.js"></script> -->
<!-- <script src="javascript/charts.js"></script> -->

</body>
</html>
