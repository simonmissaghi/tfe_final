<?php
session_start();
include ('./php/connection.php');
include ('./php/select_temoignage.php');
include ('./php/function.php');
?>
<!DOCTYPE html>
<html class="page-front page-temoignage" lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Les témoignages | #OURVOICE</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
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
    <div class="banner banner-inner-page banner-temoignages">
      <div class="main-container">
        <h1 class="title-banner">Témoignages</h1>
        <h2>Laisser la Génération Z s'exprimer</h2>
      </div>
    </div>
    <div class="main-container">
      <div class="wrapper-section">
        <section class="intro intro-temoignage">
          <p>Nous avons interviewé plusieurs jeunes de manière spontanée au sujet de leur utilisation du smartphone en général. En parlant de leurs habitudes, de ce qu’ils pensent du futur, de l’évolution. Nous avons retranscrit ces interviews.
          Si tu fais partie de la génération Z (1995-2012), tu peux aussi t’exprimer librement et anonymement. </p>
          <p>Nous avons voulu être proches de nos partenaires dans ce projet. En les écoutant, en percevant leur spontanéité, nous avons pu capter des arguments sincères ! Ecoutez-les, lisez-les ! Ils ont beaucoup à apprendre !</p>
          <div class="body-temoignage write-temoignage" id="write-temoignage">
            <h2 class="title-inner--temoignage">Exprime-toi !</h2>
            <?php include('./php/form_temoignage-html.php'); ?>
          </div>
        </section>
        <section class="section-second section-second--vignettes">
          <ul class="vignettes-temoignages">
            <?php foreach($results as $result): ?>
              <?php if($result['statut'] == 'OK') { ?>
              <li class="container-single-temoignage single-temoignage-public">
                <div class="header" style="background-image: url('<?php echo $result['img']?>')"></div>
                <div class="body">
                  <h2><?php echo $result["prenom"] ?>
                  </h2>
                  <span class="date"><?php echo $result["date_publi"] ?></span>
                  <div class="title-single--temoignage"><?php echo $result["title_subject"] ?></div>
                  <div class="txt-body"><?php echo make_summary($result["subject"], 200) ?>
                    <a class="links-temoignage--el" href="./fullstorie.php?id=<?php echo $result["id"] ?>">Lire en entier</a>
                  </div>
                </div>
                <div class="footer">
                  <span class="author">Posté par <?php echo $result["prenom"] ?></span>
                  <a href="./php/like.php?id=<?php echo $result["id"];?>" class="likes"><?php echo $result["likes"] ?></a>
                </div>
              </li>

              <?php } ?>
            <?php endforeach; ?>
          </ul>
          <div class="pagination-container">
            <?php
            for($i=1;$i<=$totalPages;$i++) {
              if($i == $currentPage) {
                echo '<a class="pagination active">'.$i.'</a>';
              }else {
                echo '<a class="pagination" href="temoignages.php?page='.$i.'">'.$i.'</a>';
              }
            }
            ?>
          </div>
        </section>
      </div>
      <?php include ('./footer.php'); ?>
    </div>
  </main>
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="javascript/main.js"></script>
  <!-- <script src="javascript/swiper.js"></script> -->
  <!-- <script src="javascript/Chart.js"></script> -->
  <!-- <script src="javascript/charts.js"></script> -->
  <!-- <script src="results.json"></script> -->
</body>
</html>
