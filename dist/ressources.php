<?php
session_start();
include('./php/connection.php');
include('./php/function.php');
?>
<!DOCTYPE html>
<html class="page-front page-ressources" lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
  <title>Ressources - #OURVOICE | La génération Z peut s'exprimer</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <meta name="Author" lang="fr" content="#OURVOICE - La génération Z peut s'exprimer !">
  <meta name="Publisher" content="Simon MISSAGHI">
  <meta name="Reply-to" content="simon@simonmissaghi.be">
  <meta name="Description" content="#OURVOICE est une passerelle intergénérationnelle, une plateforme qui permet de comprendre le comportement de la Génération Z par rapport à son utilisation du smartphone via des témoignages et des sondages.">
  <meta name="Indentifier-URL" content="http://www.simonmissaghi.be">
  <meta name="Keywords" content="OURVOICE, young, people, genz, generation, generationZ, Z, adolescents, jeunes">
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
    <div class="banner banner-inner-page banner-ressources">
      <div class="main-container">
        <h1 class="title-banner">Ressources</h1>
        <h2>On ne crée rien sans rien. Les ressources et les différents articles importants liés au projet sont regroupés ici. </h2>
      </div>
    </div>
    <div class="main-container">
      <div class="wrapper-section">
        <section class="intro ">
          <h2>Principaux supports qui ont permis de se documenter sur le sujet</h2>
          <ul class="list-ressources">
            <li>
              <a href="https://people.howstuffworks.com/culture-traditions/generation-gaps/generation-z1.htm" target="_blank">HowStuffWorks</a>
              <p><span>article (en)</span>Point de vue psychologique</p>
            </li>
            <li>
              <a href="https://www.thinkwithgoogle.com/interactive-report/gen-z-a-look-inside-its-mobile-first-mindset/" target="_blank">Think with Google</a>
              <p><span>article (en)</span>Explications de la Gen Z et ses habitudes</p>
            </li>
            <li>
              <a href="http://blog.core-ed.org/blog/2016/02/conversations-with-a-gen-z-teen.html" target="_blank">Converser avec la Gen Z</a>
              <p><span>article (en)</span>Questions posées à un jeune concerné</p>
            </li>
            <li>
              <a href="https://assets.documentcloud.org/documents/4165473/n-gen-White-Paper-Gen-Z.pdf" target="_blank">Le comportement de la Gen Z</a>
              <p><span>PDF (en)</span>Interprétations diverses</p>
            </li>
            <li>
              <a href="#">C'est compliqué</a>
              <p><span>Livre</span>Ecrit par danah boyd</p>
            </li>
          </ul>
        </section>

        <section class="section-second section-second--ressources">
          <h2 class="title-inner title-inner--big">Le projet</h2>
          <p>La génération Z a une manière bien à elle d’exploiter les nouvelles technologies, ayant grandi avec. Les générations X et Y n’ont pas toujours les mêmes intérêts pour ces machines. Ils s’y connaissent aussi mais d’une autre manière. Pas meilleure, ni moins bien, mais différente.
            On a souvent tendance à croire que les plus jeunes générations ne savent pas ce qu’elles font, avançant tête baissée avec ce qu’on leur donne entre les mains. Mais pourquoi ne pas leur demander directement ce que eux en pense.
          Il est sûr qu’on entend beaucoup d’échos négatifs quant au cyber harcèlement, aux téléphones addicts, … Mais il ne faut pas se limiter à ces aspects-là. Il y a peut-être quelque chose de très instructif qui peut venir de la bouche de ces jeunes concernés. Quand on s’adonne à temps plein à un domaine, on en apprend les ficelles. Donnons-leur aussi la parole. </p>
          <?php include('./php/random-temoignage.php'); ?>

        </section>
        <?php include('./footer.php');?>
      </div>
    </div>
  </main>
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="javascript/main.js"></script>
  <!-- <script src="javascript/Chart.js"></script> -->
  <!-- <script src="javascript/charts.js"></script> -->
  <!-- <script src="results.json"></script> -->
  <script type="text/javascript">
    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
      if (!confirm('Veux-tu vraiment supprimer ce témoignage ?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
      elems[i].addEventListener('click', confirmIt, false);
    }
  </script>

</body>
</html>
