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
  <div class="main-container">
    <main>
     <div class="container-single-temoignage temoignage-full-stories">
      <div class="links-temoignage">
        <a class="link-back" href="<?php echo $previousPage; ?>">retour</a>
      </div>
      <?php foreach($results as $result): ?>
        <?php if($result['statut'] == 'OK'){ ?>
        <div class="header">
          <h1><?php echo $result["prenom"] ?></h1>
          <span class="thumb-img-temoignage" style="background-image: url('<?php echo $result['img']?>')"></span>
          <span class="infos"><?php echo $result["age"] ?> ans, étudiant<?php if($result['sexe'] == "F"){echo "e"; }?> en <?php echo $result["studies"] ?></span>
        </div>
        <div class="body"><p><?php echo nl2br($result["subject"]) ?></p></div>
        <?php } ?>
      <?php endforeach; ?>
    </div>
      <?php if($v['statut'] == 'OK') { ?>
      <div class="container-single-temoignage single-temoignage-public">
        <div class="header">
          <h1><?php echo $v["prenom"] ?></h1><span><?php echo $v["age"] ?> ans<span class="thumb-img-temoignage" style="background-image: url('<?php echo $v['img']?>')"></span>
        <div class="body">
          <h2>"<?php echo $v["title_subject"] ?>"</h2>
          <p><?php echo make_summary($v["subject"], 200) ?></p>
        </div>
        <div class="footer">
          <span>étudiant<?php if($v['sexe'] == "F"){echo "e"; }?> en <?php echo $v["studies"] ?></span>
        </div>
        <a href="./fullstorie.php?id=<?php echo $v["id"] ?>">Lire en entier</a>
      </div>
      <?php } ?>
    </div>
  </main>
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
