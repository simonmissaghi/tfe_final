<?php
session_start();
include ('./php/connection.php');
include ('./php/list-result.php');
include ('./php/insert_temoignage.php');
include ('./php/function.php');
include ('./php/login.php');
include ('./php/select_temoignage.php');
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

    <?php include('./header.php');?>
    <div class="login-box">
        <form action="" method="POST" class="form-login">
            <h1>Connection</h1>
            <input type="text" name="pseudo" placeholder="user">
            <input type="password" name="pass" placeholder="pass">
            <div class="alert-danger"><?php echo $erreurco ?></div>
            <input type="submit" name="btn_submit--login" value="Se connecter" />
        </form>
    </div>
    <?php include('./nav.php'); ?>
    <main>
        <div class="banner banner-main">
            <div class="main-container">
                <h1 class="title-banner"><img src="./images/logo_ourvoice.svg" alt="#OURVOICE" /></h1>
                <h2>comprendre les intérêts d’une génération ultra connectée</h2>
            </div>
        </div>
        <div class="main-container">
            <div class="wrapper-section">
                <section class="intro">
                    <h1>La génération <span>Z</span></h1>
                    <h2>Ceux qui sont nés avec les écrans</h2>
                    <p>Depuis l’arrivée de ces nouvelles technologies que sont les smartphones, beaucoup de polémiques se sont construites sur l’avenir que ceux-ci nous réservent.</p>

                    <p>La génération Z (1995-2012) est une génération ultra connectée. Elle est née avec les smartphones. Elle en fait une utilisation quotidienne plus importante que les autres générations. Est-ce mal ? Doit-on se soucier du futur ? Laissons la parole à chacune des personnes concernées, elles sont les plus à même de répondre à toutes ces questions.</p>

                    <p>Mettez-y votre grain de sel. Plus la communauté est large, plus les résultats seront probants.</p>
                </section>

                <section class="section-second random-question-survey">
                    <div class="swiper-container swiper-random-question">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="container-random-question">
                                    <h1 class="title-inner title-inner--surveys">Les supports utilisés pour répondre aux sondages<span>en %</span></h1>
                                    <canvas class="chartsjs" id="chartsq8all" width="" height=""></canvas>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <h1 class="title-inner title-inner--surveys">L’importance de socialiser via les réseaux sociaux<span>en %</span></h1>
                                <canvas class="chartsjs" id="chartnq7all" width="" height=""></canvas>
                            </div>
                            <div class="swiper-slide">
                                <h1 class="title-inner title-inner--surveys">La probabilité de se passer de son smartphone une journée entière<span>en %</span></h1>
                                <canvas class="chartsjs" id="chartsq4all" width="" height=""></canvas>
                            </div>

                        </div>
                        <div class="swiper-pagination random-question"></div>
                    </div>

                </section>
            </div>
            <section class="highlight-temoignage">
                <div class="wrapper-temoignage">
                    <div class="swiper-container swiper-temoignage">
                        <div class="swiper-wrapper">
                            <?php foreach($results as $result): ?>
                                <?php if($result['statut'] == 'OK') { ?>
                                <div class="swiper-slide">
                                    <div class="container-temoignage">
                                        <div class="body-temoignage">
                                            <h1 class="title-inner title-inner--temoignage">« <?php echo  $result["title_subject"] ?> »</h1>
                                            <button class="mic"></button>
                                            <p><?php make_summary($result["subject"], 350); ?></p>
                                            <p class="sign-temoignage"><?php echo $result["prenom"]; ?>, <?php echo $result["age"] ?> ans, <span>étudiant<?php if($result['sexe'] == "F"){echo "e"; }?> en <?php echo $result["studies"] ?></span></p>
                                            <a class="link-back" href="./fullstorie.php?id=<?php echo $result["id"] ?>">Lire en entier</a>
                                        </div>
                                        <div class="img-temoignage" style="background-image: url('<?php if($result['img'] != "") {echo $result['img'];}else{echo get_rand_img('./uploads/random/');}?>')"></div>
                                    </div>
                                </div>
                                <?php } ?>
                            <?php endforeach; ?>
                            <div class="swiper-slide" id="write-your-temoignage">
                                <div class="container-temoignage">
                                    <div class="body-temoignage write-temoignage">
                                        <h1 class="title-inner--temoignage">Exprime-toi !</h1>
                                        <div class="alert-danger"><?php echo $prenomErr; ?>
                                            <?php echo $titleErr; ?>
                                            <?php echo $subjectErr; ?>
                                            <?php echo $sexeErr; ?>
                                            <?php echo $ageErr; ?>
                                        </div>
                                        <form action="" method="POST" class="form-temoignage" enctype="multipart/form-data">
                                            <label for="prenom"><input type="text" name="prenom" placeholder="Prénom" class="focus-input" /></label>
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
                                    <div class="img-temoignage write-temoignage"></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination pagination-temoignage"></div>
                    </div>
                </div>
                <div class="wrapper-btn btn-temoignage">
                    <a class="write write-temoignage--btn" href="">Ecrire mon témoignage</a>
                    <a class="read" href="./temoignages.php">Lire les témoignages</a>
                </div>

            </section>
            <div class="wrapper-section section-survey">
                <div class="bg-header"></div>
                <section class="intro-surveys">
                    <h1>Les sondages</h1>
                    <h2>Ce qui met d’accord sur une façon de voir les choses.</h2>
                    <p>Nous avons questionné la génération Z sur leur rapport aux smartphones, aux applications et aux réseaux sociaux. Voici quelques chiffres.</p>
                    <div class="wrapper-btn btn-surveys">
                        <a class="write" href="./index.php">Remplir les sondages</a>
                        <a class="read" href="./results-surveys.php">Voir les résultats</a>
                    </div>
                </section>
            </div>
            <section class="surveys">

                <div class="highlight-result-surveys">
                    <div class="highlight-question-surveys">
                        <div class="container-question">
                            <h1 class="title-inner title-inner--surveys">La probabilité que les apps aident dans l'enseignement<span>en %</span></h1>
                            <div class="pie-container">
                                <canvas class="chartsjs" id="chartaq2all" width="" height=""></canvas>
                            </div>
                        </div>
                        <div class="container-question">
                            <h1 class="title-inner title-inner--surveys">La probabilité que les smartphones soient sources de manque de contacts en temps réel entre humains<span>en %</span></h1>
                            <canvas class="chartsjs" id="chartsq7all" width="" height=""></canvas>
                        </div>
                        <div class="container-question">
                            <h1 class="title-inner title-inner--surveys">L'intérêt de l'aspect technologique d'un nouveau smartphone<span>en %</span></h1>
                            <canvas class="chartsjs" id="chartsq2all" width="" height=""></canvas>
                        </div>
                    </div>
                </div>
            </section>
    <?php include ('./footer.php'); ?>
        </div>
    </main>
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="javascript/main.js"></script>
    <script src="javascript/swiper.js"></script>
    <script src="javascript/Chart.js"></script>
    <script src="javascript/charts.js"></script>
    <script src="results.json"></script>
    <script>
        var swiperSurvey = new Swiper('.swiper-random-question', {
          pagination: {
            el: '.swiper-pagination.random-question',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        allowTouchMove: true,
        fadeEffect: {
            crossFade: true
        }

    });

        var swiperTemoignage = new Swiper('.swiper-temoignage', {
          pagination: {
            el: '.swiper-pagination.pagination-temoignage',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        allowTouchMove: true

    });
</script>
</body>
</html>
