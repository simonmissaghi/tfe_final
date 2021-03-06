<?php
session_start();
if (!isset($_SESSION['pseudo'])) {
  header ('Location: index.php');
  exit();
}
include ('./php/connection.php');
include ('./php/function.php');
include ('./php/select_temoignage.php');
include ('./php/dashboard-chiffres.php');
?>


<!DOCTYPE html>
<html class="page-front page-moderateur" lang="fr">

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
  <?php include('./header-pages.php');?>
  <?php include('./nav.php');?>
  <main>
    <div class="banner banner-dashboard">
      <div class="main-container">
        <h1 class="title-banner">Espace modérateur</h1>
      </div>
    </div>
    <div class="main-container">
      <div class="wrapper-section">
        <section class="intro">
          <h1>Dashboard</h1>
          <h2>Bienvenue sur l’espace de modération, <?php echo $_SESSION['pseudo'] ?> !</h2>
          <ul class="dashboard-chiffres">
            <li>
              <p>Nombre de sondages remplis</p>
              <span><?php echo $totalAnswersAll; ?></span>
              <ul>
                <li>
                  <p>Les smartphones</p>
                  <span><?php echo $totalAnswersSmartphones; ?></span>
                </li>
                <li>
                  <p>Les apps</p>
                  <span><?php echo $totalAnswersApps; ?></span>
                </li>
                <li>
                  <p>Les réseaux sociaux</p>
                  <span><?php echo $totalAnswersNetworks; ?></span>
                </li>
              </ul>
            </li>
            <li>
              <p>% de réponses de filles (tous sondages)</p>
              <span><?php echo number_format($totalPercentWoman, 1); ?>%</span>
              <ul>
                <li>
                  <p>Les smartphones</p>
                  <span><?php echo number_format($percentWomanSmartphones, 1); ?>%</span>
                </li>
                <li>
                  <p>Les apps</p>
                  <span><?php echo number_format($percentWomanApps, 1); ?>%</span>
                </li>
                <li>
                  <p>Les réseaux sociaux</p>
                  <span><?php echo number_format($percentWomanNetworks, 1); ?>%</span>
                </li>
              </ul>
            </li>
            <li>
              <p>% de réponses de garçons (tous sondages)</p>
              <span><?php echo number_format($totalPercentMan,1); ?>%</span>
              <ul>
                <li>
                  <p>Les smartphones</p>
                  <span><?php echo number_format($percentManSmartphones, 1); ?>%</span>
                </li>
                <li>
                  <p>Les apps</p>
                  <span><?php echo number_format($percentManApps, 1); ?>%</span>
                </li>
                <li>
                  <p>Les réseaux sociaux</p>
                  <span><?php echo number_format($percentManNetworks, 1); ?>%</span>
                </li>
              </ul>
            </li>
            <li>
            </li>
          </ul>

        </section>

        <section class="section-second">
          <ul class="vignettes-temoignages">
            <?php foreach($results as $result): ?>
              <li class="container-single-temoignage single-temoignage-mod">
                <div class="header" style="background-image: url('<?php echo $result['img']?>')">
                  <div class="edit-mod">
                    <span class="statut">
                      <?php if($result['statut'] == 'OK') {
                        echo "<img src='./images/valid_icon.svg'/>";
                      }elseif($result['statut'] == 'pending'){
                        echo "<img src='./images/pending_icon.svg' />";
                      }else{
                        echo "<img src='./images/rejected_icon.svg' />";
                      } ?>
                    </span>
                    <div class="links links-temoignage white">
                      <a class="white" href="./moderateur_fullstorie.php?id=<?php echo $result["id"] ?>">Lire en entier</a>
                      <a class="white" href="./php/approve.php?id=<?php echo $result["id"] ?>"><?php if($result['statut'] == "OK") { echo "Approuvé"; } else { echo "Approuver"; } ?></a>
                      <a class="white" href="./php/pending.php?id=<?php echo $result["id"] ?>">En attente</a>
                      <a class="confirmation white" href="./php/delete.php?id=<?php echo $result["id"] ?>" onclick="return confirm('Are you sure?')">Supprimer</a>
                    </div>
                  </div>
                </div>
                <div class="body">
                  <h2><?php echo $result["prenom"] ?>
                  </h2>
                  <span class="date"><?php echo $result["date_publi"] ?></span>
                  <div class="title-single--temoignage"><?php echo $result["title_subject"] ?></div>
                  <div class="txt-body"><?php echo make_summary($result["subject"], 200) ?>
                  </div>
                </div>
                <div class="footer">
                  <span class="author">Posté par <?php echo $result["prenom"] ?></span>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>
          <div class="pagination-container">
            <?php
            for($i=1;$i<=$totalPages;$i++) {
              if($i == $currentPage) {
                echo '<a class="pagination active">'.$i.'</a>';
              }else {
                echo '<a class="pagination" href="./moderateur.php?page='.$i.'">'.$i.'</a>';
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
