<?php
session_start();

include ('./php/connection.php');
include ('./php/login.php');
include ('./php/function.php');
include ('./php/select_temoignage.php');
?>
<?php
$id = $_GET['id'];
if(isset($_GET['id'])) {

  $preparedStatement = $connection->prepare('SELECT id, prenom, studies, title_subject, subject, sexe, age, date_publi, statut, img FROM temoignages WHERE id LIKE :id');


  $preparedStatement->execute(array(
    'id' => $id
  ));


  $results = $preparedStatement->fetchAll();

}else {
  header ('Location: ' . $previousPage);
  exit();
}

?>

<!DOCTYPE html>
<html class="page-front page-front-fullwidth-stories" lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
  <title>Témoignage | #OURVOICE</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <!-- <link rel="stylesheet" href="css/swiper.css"> -->
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
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
</head>
<body>
  <?php include('./header-pages.php');?>
  <?php include('./nav.php');?>
  <div class="main-container">
    <main>
     <div class="container-single-temoignage single-temoignage-fullwidth temoignage-full-stories">
      <div class="links-temoignage-full">
        <a class="link-back" href="<?php echo $previousPage; ?>">retour</a>
      </div>
      <?php foreach($results as $result): ?>
        <?php if($result['statut'] == 'OK'){ ?>
        <div class="header">
          <h1><?php echo $result["prenom"] ?></h1>
          <span class="thumb-img-temoignage" style="background-image: url('<?php echo $result['img']?>')"></span>
          <span class="infos"><?php echo $result["age"] ?> ans, étudiant<?php if($result['sexe'] == "F"){echo "e"; }?> en <?php echo $result["studies"] ?></span>
          <span class="date">Publié le <?php echo $result["date_publi"] ?></span>
        </div>
        <div class="body"><p><?php echo nl2br($result["subject"]) ?></p></div>
        <?php } ?>
      <?php endforeach; ?>
    </div>
    <div class="container-random-temoignage">
      <?php include('./php/random-temoignage.php'); ?>
    </div>
  </div>
</main>
<div class="main-container">
  <?php include('./footer.php'); ?>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script src="javascript/main.js"></script>
<!-- <script src="javascript/swiper.js"></script> -->
<!-- <script src="javascript/Chart.js"></script> -->
<!-- <script src="javascript/charts.js"></script> -->
<!-- <script src="results.json"></script> -->

</div>
</body>
</html>
