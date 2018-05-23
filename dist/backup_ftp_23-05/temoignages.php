<?php
session_start();
include ('./php/connection.php');
include ('./php/insert_temoignage.php');
include ('./php/select_temoignage.php');
include ('./php/function.php');
include ('./php/login.php');
?>


<!DOCTYPE html>
<html class="page-front" lang="fr">

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
  <div class="main-container">
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
      <div class="banner">
        <h1>#OUR<span>VOICE</span></h1>
        <h2>comprendre les intérêts d’une génération ultra connectée</h2>
      </div>
      <div class="wrapper-section">
        <section class="intro intro-temoignage">
          <h1>Les témoignages</h1>
          <h2>Laissons s’exprimer les personnes concernées</h2>
          <p>Nous avons interviewé plusieurs jeunes de manière spontanée au sujet de leur utilisation du smartphone en général. En parlant de leurs habitudes, de ce qu’ils pensent du futur, de l’évolution. Nous avons retranscrit ces interviews.
          Si tu fais partie de la génération Z (1995-2012), tu peux aussi t’exprimer librement et anonymement. </p>
          <p>Nous avons voulu être proches de nos partenaires dans ce projet. En les écoutant, en percevant leur spontanéité, nous avons pu capter des arguments sincères ! Ecoutez-les, lisez-les ! Ils ont beaucoup à apprendre !</p>
          <div class="body-temoignage write-temoignage">
            <h1>Exprime-toi !</h1>
            <div class="alert-danger"><?php echo $prenomErr; ?>
              <?php echo $titleErr; ?>
              <?php echo $subjectErr; ?>
              <?php echo $sexeErr; ?>
              <?php echo $ageErr; ?>
            </div>
            <form action="" method="POST" class="form-temoignage" enctype="multipart/form-data">
              <label for="prenom"><input type="text" name="prenom" placeholder="Prénom" /></label>
              <div class="wrapper-sm-input">
                <label for="age" class="age-temoignage">
                  <select name="age" id="age" class="temoignage">
                    <option value="">Age</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                  </select>
                </label>
                <div class="radio-btn">
                  <input type="radio" id="m" name="sexe" value="M" /><label for="m" class="wrapper-radio-btn">M</label>
                  <input type="radio" id="f" name="sexe" value="F" /><label for="f" class="wrapper-radio-btn">F</label>
                </div>
              </div>
              <label for="studies"><input type="text" placeholder="Etudes/Profession" name="studies" id="studies"/></label>
              <label for="title_subject" class="accroche">
                <input type="text" placeholder="Titre" name="title_subject" id="title_subject" />
              </label>
              <textarea placeholder="Témoignage" name="subject" id="subject"></textarea>
              <input type="hidden" name="MAX_FILE_SIZE" value="1054854" />
              <input type="file" name="img" id="img" />
              <input type="hidden" />
              <input type="submit" name="btn_submit--temoignage" value="Envoyer" />
            </form>
          </div>
        </section>
        <section class="section-second dashboard-temoignage public-temoignage">
          <?php foreach($results as $result): ?>
            <?php if($result['statut'] == 'OK') { ?>
            <div class="container-single-temoignage">
              <div class="header">
                <h1><?php echo $result["prenom"] ?></h1><span><?php echo $result["age"] ?> ans<span class="thumb-img-temoignage" style="background-image: url('<?php echo $result['img']?>')"></span>
              </div>
              <div class="body">
                <h2>"<?php echo $result["title_subject"] ?>"</h2>
                <p><?php echo make_summary($result["subject"], 200) ?></p>
              </div>
              <div class="footer">
                <span>étudiant<?php if($result['sexe'] == "F"){echo "e"; }?> en <?php echo $result["studies"] ?></span>
              </div>
              <a href="./fullstorie.php?id=<?php echo $result["id"] ?>">Lire en entier</a>
            </div>
            <?php } ?>
          <?php endforeach; ?>

          <?php
          for($i=1;$i<=$totalPages;$i++) {
            if($i == $currentPage) {
              echo '<a class="pagination active">'.$i.'</a>';
            }else {
              echo '<a href="./temoignage.php?page='.$i.'">'.$i.'</a>';
            }
          }
          ?>
        </section>
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

  </div>
</body>
</html>
