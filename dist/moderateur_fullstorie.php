<?php
session_start();
if (!isset($_SESSION['pseudo'])) {
  header ('Location: index_main.php');
  exit();
}
include ('./php/connection.php');
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

}
?>

<!DOCTYPE html>
<html class="page-front page-front-fullwidth-stories" lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
  <title>#trustinme | La génération Z peut s'exprimer</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <!-- <link rel="stylesheet" href="css/swiper.css"> -->
  <meta name="Author" lang="fr" content="#trustinme - La génération Z peut s'exprimer !">
  <meta name="Publisher" content="Simon MISSAGHI">
  <meta name="Reply-to" content="simon@simonmissaghi.be">
  <meta name="Description" content="Tu es né(e) entre 1995 et 2012 ? Tu es l'acteur principal de ce projet ! Donne ta voix à trois sondages sur les smartphones !">
  <meta name="Indentifier-URL" content="http://www.simonmissaghi.be">
  <meta name="Keywords" content="trustinme, young, people, genz, generation, generationZ, Z, adolescents, jeunes">
  <!-- Méta Google -->
  <meta name="title" content="#trustinme - La génération Z peut s'exprimer !" />
  <meta name="description" content="Tu es né(e) entre 1995 et 2012 ? Tu es l'acteur principal de ce projet ! Donne ta voix à trois sondages sur les smartphones !" />

  <!-- Métas Facebook Opengraph -->
  <meta property="og:title" content="#trustinme - La génération Z peut s'exprimer !" />
  <meta property="og:description" content="Tu es né(e) entre 1995 et 2012 ? Tu es l'acteur principal de ce projet ! Donne ta voix à trois sondages sur les smartphones !" />
  <meta property="og:url" content="http://www.simonmissaghi.be/projets/index.php" />
  <meta property="og:image" content="http://www.simonmissaghi.be/projets/trustinme/images/img_metatag.jpg" />
  <meta property="og:image:secure_url" content="images/img_metatag.jpg" />
  <meta property="og:type" content="website" />
  <meta property="og:type" content="website" />

  <!-- Métas Twitter Card -->
  <meta name="twitter:title" content="#trustinme - La génération Z peut s'exprimer !" />
  <meta name="twitter:description" content="Tu es né(e) entre 1995 et 2012 ? Tu es l'acteur principal de ce projet ! Donne ta voix à trois sondages sur les smartphones !" />
  <meta name="twitter:url" content="http://www.simonmissaghi.be/projets/index.php" />
  <meta name="twitter:image" content="images/img_metatag.jpg" />
</head>
<body>
  <div class="main-container">
    <?php include('./header.php');?>
    <?php include('./nav.php');?>
    <main>
     <div class="container-single-temoignage temoignage-full-stories">
      <?php foreach($results as $result): ?>
        <div class="links links-temoignage">
          <a href="./php/approve.php?id=<?php echo $result["id"] ?>"><?php if($result['statut'] == "OK") { echo "Approuvé"; } else { echo "Approuver"; } ?></a>
          <a href="./php/pending.php?id=<?php echo $result["id"] ?>">En attente</a>
          <a class="confirmation" href="./php/delete.php?id=<?php echo $result["id"] ?>" onclick="return confirm('Are you sure?')">Supprimer</a>
          <a href="<?php echo $previousPage; ?>">retour</a>
        </div>
        <div class="header">
          <h1><?php echo $result["prenom"] ?></h1><span><?php echo $result["age"] ?> ans</span><span class="thumb-img-temoignage" style="background-image: url('<?php echo $result['img']?>')"></span>
        </div>
        <div class="body"><p><?php echo nl2br($result["subject"]) ?></p></div>
      <?php endforeach; ?>
    </div>
  </main>
  <?php include('./footer.php'); ?>
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
