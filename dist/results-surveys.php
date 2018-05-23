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
  <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
  <title>#OURVOICE | La génération Z peut s'exprimer</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <!-- <link rel="stylesheet" href="css/swiper.css"> -->
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
  <?php include('./header.php');?>
  <div class="login-box">
    <form action="" method="POST" class="form-login">
      <h1>Connection</h1>
      <input type="text" name="pseudo" placeholder="pseudo">
      <input type="password" name="pass" placeholder="pass">
      <div class="alert-danger"><?php echo $erreurco ?></div>
      <input type="submit" name="btn_submit--login" value="Se connecter" />
    </form>
  </div>
  <?php include('./nav.php');?>
  <main>
    <div class="banner banner-inner-page banner-surveys">
      <div class="main-container">
        <h1 class="title-banner">Sondages</h1>
        <h2>Interpréter les réponses d’une génération entière concernant leurs smartphones</h2>
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
                  <li class="el-chart" id="defaultOpen" data-data1="sq1all" data-data2="sq1m" data-data3="sq1f" data-label="labels5">Quelle est la probabilité pour que vous achetiez le
                  tout nouveau smartphone, malgré que votre actuel fonctionne bien ?</li>
                  <li class="el-chart" data-data1="sq2all" data-data2="sq2m" data-data3="sq2f" data-label="labels5">Sur un nouveau smartphone, à quel point êtes-vous
                  intéressé par l’aspect technologique du produit ?</li>
                  <li class="el-chart" data-data1="sq3all" data-data2="sq3m" data-data3="sq3f" data-label="labelssq3">Si vous achetez un nouveau smartphone, c’est pour :
                  </li>
                  <li class="el-chart" data-data1="sq4all" data-data2="sq4m" data-data3="sq4f" data-label="labels5">Quelle est la probabilité pour que vous vous passiez de votre smartphone une journée entière ? </li>
                  <li class="el-chart" data-data1="sq5all" data-data2="sq5m" data-data3="sq5f" data-label="labels5">Quelle est l’importance pour vous d’avoir accès à internet
                    partout avec votre smartphone ?
                  </li>
                  <li class="el-chart" data-data1="sq6all" data-data2="sq6m" data-data3="sq6f" data-label="labels5">Quelle est l’importance pour vous d’avoir accès aux outils
                    de développeur sur votre smartphone ?
                  </li>
                  <li class="el-chart" data-data1="sq7all" data-data2="sq7m" data-data3="sq7f" data-label="labels5">Quelle est pour vous la probabilité que les smartphones
                    soient sources de manque de contacts en temps réel entre
                    humains ?
                  </li>
                  <li class="el-chart" data-data1="sq8all" data-data2="sq8m" data-data3="sq8f" data-label="labels3">Sur quel support as-tu répondu aux sondages ?
                  </li>
                </ul>
              </div>
              <div class="container-questions" id="apps">
                <ul class="list-questions" id="listingApps">
                  <li>Sur votre smartphone, quelle(s) catégorie(s) d’apps avez-vous en majorité (plusieurs choix possibles)? </li>
                  <li class="el-chart" data-data1="aq2all" data-data2="aq2m" data-data3="aq2f" data-label="labels5">Quelle est la probabilité pour que vos apps puissent vous aider à l’école/ à l’université ?
                  </li>
                  <li class="el-chart" data-data1="aq3all" data-data2="aq3m" data-data3="aq3f" data-label="labels5">Quelle est l’importance pour vous d’apprendre via des tutoriels (vidéos, articles) sur vos apps ?
                  </li>
                  <li class="el-chart" data-data1="aq4all" data-data2="aq4m" data-data3="aq4f" data-label="labels5">Quel est pour vous l’importance de se tenir au courant des derniers buzz via Youtube ?
                  </li>
                </ul>
              </div>
              <div class="container-questions" id="networks">
                <ul class="list-questions" id="listingNetworks">
                  <li class="el-chart" data-data1="nq2all" data-data2="nq2m" data-data3="nq2f" data-label="labelsnq2">À quelle fréquence consultes-tu tes réseaux sociaux par jour ?
                  </li>
                  <li class="el-chart" data-data1="nq3all" data-data2="nq3m" data-data3="nq3f" data-label="labelsnq3">En général, pour quelle(s) raison(s) vous connectez-vous sur vos réseaux sociaux ?
                  </li>
                  <li class="el-chart" data-data1="nq4all" data-data2="nq4m" data-data3="nq4f" data-label="labelsnq4">A quelle fréquence postez-vous des articles, des commentaires sur vos réseaux sociaux ?</li>
                  <li class="el-chart" data-data1="nq5all" data-data2="nq5m" data-data3="nq5f" data-label="labelsnq5">De manière générale, que postez-vous sur vos réseaux sociaux ?</li>
                  <li class="el-chart" data-data1="nq6all" data-data2="nq6m" data-data3="nq6f" data-label="labelsnq6">De manière générale, pourquoi postez-vous sur vos réseaux sociaux ?
                  </li>
                  <li class="el-chart" data-data1="nq7all" data-data2="nq7m" data-data3="nq7f" data-label="labels5">Quelle est l’importance pour vous de socialiser via les réseaux sociaux ?
                  </li>
                  <li class="el-chart" data-data1="nq8all" data-data2="nq8m" data-data3="nq8f" data-label="labelsnq8">Approximativement, combien de vos “amis” sur les réseaux sociaux avez-vous rencontrés en personne ?
                  </li>
                  <li class="el-chart" data-data1="nq9all" data-data2="nq9m" data-data3="nq9f" data-label="labelsnq9">Lorsque vous êtes sur les réseaux sociaux, combien de temps passez-vous à regarder ce que vos relations ont posté ?
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <section class="section-second results-surveys">
          <div class="container-results-explication-intro" id="resultsIntro">
            <h1 class="title-inner">Cliquez sur la question de votre choix pour voir les résultats</h1>
            <p>Ces résultats sont tous issus de sondages destinés à la Génération Z, une génération née entre 1995 et 2012.</p>
          </div>
          <h1 class="title-inner title-inner--surveys title-inner--surveys-no-border" id="titleQuestionChart"></h1>
          <canvas class="chartsjs" id="allCharts" width="" height=""></canvas>
          <div class="wrapper-btn btn-surveys btn-surveys-results">
            <a class="write write-result-surveys" href="./index.php">Plateforme des sondages</a>
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
  <script src="javascript/main.js"></script>
  <!-- <script src="javascript/swiper.js"></script> -->
  <script src="javascript/Chart.js"></script>
  <!-- <script src="javascript/charts.js"></script> -->
  <script src="results.json"></script>

</body>
</html>
