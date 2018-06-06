<?php session_start();
include('./php/insert_apps-survey.php');
?>

<!DOCTYPE html>
<html class="page-surveys page-surveys-single" lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <title>Sondage - Les apps | #OURVOICE</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="css/swiper.css">
    <meta name="Author" lang="fr" content="#OURVOICE - La génération Z peut s'exprimer !">
    <meta name="Publisher" content="Simon MISSAGHI">
    <meta name="Reply-to" content="simon@simonmissaghi.be">
    <meta name="Description" content="Tu es né(e) entre 1995 et 2012 ? Tu es l'acteur principal de ce projet ! Donne ta voix à trois sondages sur les smartphones !">
    <meta name="Indentifier-URL" content="http://www.simonmissaghi.be/projets/ourvoice/index.php">
    <meta name="Keywords" content="OURVOICE, young, people, genz, generation, generationZ, Z, adolescents, jeunes">
    <!-- Méta Google -->
    <meta name="title" content="#OURVOICE - La génération Z peut s'exprimer !" />
    <meta name="description" content="Tu es né(e) entre 1995 et 2012 ? Tu es l'acteur principal de ce projet ! Donne ta voix à trois sondages sur les smartphones !" />

    <!-- Métas Facebook Opengraph -->
    <meta property="og:title" content="#OURVOICE - La génération Z peut s'exprimer !" />
    <meta property="og:description" content="Tu es né(e) entre 1995 et 2012 ? Tu es l'acteur principal de ce projet ! Donne ta voix à trois sondages sur les smartphones !" />
    <meta property="og:url" content="http://www.simonmissaghi.be/projets/ourvoice/index.php" />
    <meta property="og:image" content="http://www.simonmissaghi.be/projets/OURVOICE/images/img_metatag-surveys.jpg" />
    <meta property="og:image:secure_url" content="images/img_metatag-surveys.jpg" />
    <meta property="og:type" content="website" />
    <meta property="og:type" content="website" />

    <!-- Métas Twitter Card -->
    <meta name="twitter:title" content="#OURVOICE - La génération Z peut s'exprimer !" />
    <meta name="twitter:description" content="Tu es né(e) entre 1995 et 2012 ? Tu es l'acteur principal de ce projet ! Donne ta voix à trois sondages sur les smartphones !" />
    <meta name="twitter:url" content="http://www.simonmissaghi.be/projets/ourvoice/index.php" />
    <meta name="twitter:image" content="images/img_metatag-surveys.jpg" />
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
    <?php include('./header-pages.php'); ?>
    <?php include('./nav.php');?>
    <main>

        <section class="container-surveys apps-bg-color">
            <div class="wrapper-link">
                <a class="back-to-list" href="./plateforme-sondages.php">Retour à la liste</a>
            </div>
            <div class="swiper-pagination apps-survey"></div>
            <div class="alert alert-danger"><?php echo $ipErr; ?></div>
            <div class="alert alert-danger"><?php echo $questionErr; ?></div>
            <!-- Grid beginning -->
            <div class="wrapper-survey">
                <div class="header-main">
                    <h1 class="title-intro">Les apps</h1>
                </div>
                <div class="body-main">
                    <form action="" method="POST">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="wrapper-question wrapper-question-intro">
                                        <div class="question">
                                            <h2 class="subtitle-intro">Qui es-tu ?</h2>
                                            <p class="apps-survey">Les sondages sont destinés à la génération Z (1995-2012). Ils sont anonymes.</p>
                                        </div>
                                        <ul class="answers answers-intro">
                                            <li class="answers--intro">
                                                <input type="radio" class="apps-survey" id="1" name="gender" value="1" <?php if (!empty($_SESSION['post-data']['gender'])){ if ($_SESSION['post-data']['gender'] == "1") {echo 'checked="checked"';}}?>>
                                                <label class="genre apps-survey male" for="1">garçon</label>
                                            </li>
                                            <li class="answers--intro">
                                                <input type="radio" class="apps-survey" id="2" name="gender" value="2" <?php if (!empty($_SESSION['post-data']['gender'])){ if ($_SESSION['post-data']['gender'] == "2") {echo 'checked="checked"';}}?>>
                                                <label class="genre apps-survey female" for="2">fille</label>
                                            </li>
                                            <li class="answers--intro">
                                                <label class="age" for="age">
                                                    <select class="apps-survey" name="age" id="age">
                                                        <option value="0">Année de naissance</option>
                                                        <option value="1" <?php if (!empty($_SESSION['post-data']['age'])){ if ($_SESSION['post-data']['age'] == "1") {echo 'selected';}}?>>1995</option>
                                                        <option value="2" <?php if (!empty($_SESSION['post-data']['age'])){ if ($_SESSION['post-data']['age'] == "2") {echo 'selected';}}?>>1996</option>
                                                        <option value="3" <?php if (!empty($_SESSION['post-data']['age'])){ if ($_SESSION['post-data']['age'] == "3") {echo 'selected';}}?>>1997</option>
                                                        <option value="4" <?php if (!empty($_SESSION['post-data']['age'])){ if ($_SESSION['post-data']['age'] == "4") {echo 'selected';}}?>>1998</option>
                                                        <option value="5" <?php if (!empty($_SESSION['post-data']['age'])){ if ($_SESSION['post-data']['age'] == "5") {echo 'selected';}}?>>1999</option>
                                                        <option value="6" <?php if (!empty($_SESSION['post-data']['age'])){ if ($_SESSION['post-data']['age'] == "6") {echo 'selected';}}?>>2000</option>
                                                        <option value="7" <?php if (!empty($_SESSION['post-data']['age'])){ if ($_SESSION['post-data']['age'] == "7") {echo 'selected';}}?>>2001</option>
                                                        <option value="8" <?php if (!empty($_SESSION['post-data']['age'])){ if ($_SESSION['post-data']['age'] == "8") {echo 'selected';}}?>>2002</option>
                                                        <option value="9" <?php if (!empty($_SESSION['post-data']['age'])){ if ($_SESSION['post-data']['age'] == "9") {echo 'selected';}}?>>2003</option>
                                                        <option value="10" <?php if (!empty($_SESSION['post-data']['age'])){ if ($_SESSION['post-data']['age'] == "10") {echo 'selected';}}?>>2004</option>
                                                        <option value="11" <?php if (!empty($_SESSION['post-data']['age'])){ if ($_SESSION['post-data']['age'] == "11") {echo 'selected';}}?>>2005</option>
                                                        <option value="12" <?php if (!empty($_SESSION['post-data']['age'])){ if ($_SESSION['post-data']['age'] == "12") {echo 'selected';}}?>>2006</option>
                                                        <option value="13" <?php if (!empty($_SESSION['post-data']['age'])){ if ($_SESSION['post-data']['age'] == "13") {echo 'selected';}}?>>2007</option>
                                                        <option value="14" <?php if (!empty($_SESSION['post-data']['age'])){ if ($_SESSION['post-data']['age'] == "14") {echo 'selected';}}?>>2008</option>
                                                        <option value="15" <?php if (!empty($_SESSION['post-data']['age'])){ if ($_SESSION['post-data']['age'] == "15") {echo 'selected';}}?>>2009</option>
                                                        <option value="16" <?php if (!empty($_SESSION['post-data']['age'])){ if ($_SESSION['post-data']['age'] == "16") {echo 'selected';}}?>>2010</option>
                                                        <option value="17" <?php if (!empty($_SESSION['post-data']['age'])){ if ($_SESSION['post-data']['age'] == "17") {echo 'selected';}}?>>2011</option>
                                                        <option value="18" <?php if (!empty($_SESSION['post-data']['age'])){ if ($_SESSION['post-data']['age'] == "18") {echo 'selected';}}?>>2012</option>
                                                    </select>
                                                </label>
                                            </li>
                                        </ul>
                                        <button class="btn-full-bottom apps-survey swiper-button-next">Commencer le sondage</button>
                                    </div>
                                </div>
                                <!-- Question 1 -->
                                <div class="swiper-slide">
                                    <div class="wrapper-question">
                                        <div class="question">
                                            <h2 class="subtitle-question  apps-survey">Sur ton smartphone, quelle(s) catégorie(s) d’apps as-tu en majorité (plusieurs choix possibles)? </h2>
                                        </div>
                                        <ul class="answers">
                                            <li>
                                                <input type="checkbox" class="apps-survey" id="app_q1-1" name="q1[]" value="[1]"  <?php if (isset($os)){ if (in_array("[1]", $os)) {echo 'checked';}}?>>
                                                <label class="checkbox apps-survey" for="app_q1-1">Sport</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" class="apps-survey" id="app_q1-2" name="q1[]" value="[2]" <?php if (isset($os)){ if (in_array("[2]", $os)) {echo 'checked';}}?>>
                                                <label class="checkbox apps-survey" for="app_q1-2">Musique</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" class="apps-survey" id="app_q1-3" name="q1[]" value="[3]" <?php if (isset($os)){ if (in_array("[3]", $os)) {echo 'checked';}}?>>
                                                <label class="checkbox apps-survey" for="app_q1-3">Journaux, infos</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" class="apps-survey" id="app_q1-4" name="q1[]" value="[4]" <?php if (isset($os)){ if (in_array("[4]", $os)) {echo 'checked';}}?>>
                                                <label class="checkbox apps-survey" for="app_q1-4">Streaming vidéos</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" class="apps-survey" id="app_q1-5" name="q1[]" value="[5]" <?php if (isset($os)){ if (in_array("[5]", $os)) {echo 'checked';}}?>>
                                                <label class="checkbox apps-survey" for="app_q1-5">Education</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" class="apps-survey" id="app_q1-6" name="q1[]" value="[6]" <?php if (isset($os)){ if (in_array("[6]", $os)) {echo 'checked';}}?>>
                                                <label class="checkbox apps-survey" for="app_q1-6">Réseaux sociaux, messageries</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" class="apps-survey" id="app_q1-7" name="q1[]" value="[7]" <?php if (isset($os)){ if (in_array("[7]", $os)) {echo 'checked';}}?>>
                                                <label class="checkbox apps-survey" for="app_q1-7">Jeux</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" class="apps-survey" id="app_q1-8" name="q1[]" value="[8]" <?php if (isset($os)){ if (in_array("[8]", $os)) {echo 'checked';}}?>>
                                                <label class="checkbox apps-survey" for="app_q1-8">Santé & fitness</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" class="apps-survey" id="app_q1-9" name="q1[]" value="[9]" <?php if (isset($os)){ if (in_array("[9]", $os)) {echo 'checked';}}?>>
                                                <label class="checkbox apps-survey" for="app_q1-9">Voyages & navigation</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" class="apps-survey" id="app_q1-10" name="q1[]" value="[10]" <?php if (isset($os)){ if (in_array("[10]", $os)) {echo 'checked';}}?>>
                                                <label class="checkbox apps-survey" for="app_q1-10">Shopping</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" class="apps-survey other__choice" id="app_q1-11" name="q1[]" value="">
                                                <label class="checkbox apps-survey other__choice--label" for="app_q1-11">Autre :
                                                    <input type="text" class="other__choice--text" id="app_q1-11" name="q1[]" value="" onchange="changeradioother()">
                                                </label>
                                            </li>
                                        </ul>
                                        <div class="btn-swiper btn-full-bottom apps-survey">
                                            <div class="wrapper-btn-swiper wrapper-btn-prev swiper-button-prev"><img src="./images/arrow-left-survey.svg" alt="<" /></div>
                                            <div class="wrapper-btn-swiper wrapper-btn-next swiper-button-next"><img src="./images/arrow-right-survey.svg" alt=">" /></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Question 2 -->
                                <div class="swiper-slide">
                                    <div class="wrapper-question">
                                        <div class="question">
                                            <h2 class="subtitle-question apps-survey">Quelle est la probabilité pour que tes apps puissent t'aider à l’école/ à l’université/ au travail ?</h2></div>
                                            <ul class="answers">
                                                <li>
                                                    <input type="radio" class="apps-survey" id="app_q2-1" name="q2" value="1" <?php if (!empty($_SESSION['post-data']['q2'])){ if ($_SESSION['post-data']['q2'] == "1") {echo 'checked="checked"';}}?>>
                                                    <label class="apps-survey" for="app_q2-1">Extrêmement probable</label>
                                                </li>
                                                <li>
                                                    <input type="radio" class="apps-survey" id="app_q2-2" name="q2" value="2" <?php if (!empty($_SESSION['post-data']['q2'])){ if ($_SESSION['post-data']['q2'] == "2") {echo 'checked="checked"';}}?>>
                                                    <label class="apps-survey" for="app_q2-2">Très probable</label>
                                                </li>
                                                <li>
                                                    <input type="radio" class="apps-survey" id="app_q2-3" name="q2" value="3" <?php if (!empty($_SESSION['post-data']['q2'])){ if ($_SESSION['post-data']['q2'] == "3") {echo 'checked="checked"';}}?>>
                                                    <label class="apps-survey" for="app_q2-3">Relativement probable</label>
                                                </li>
                                                <li>
                                                    <input type="radio" class="apps-survey" id="app_q2-4" name="q2" value="4" <?php if (!empty($_SESSION['post-data']['q2'])){ if ($_SESSION['post-data']['q2'] == "4") {echo 'checked="checked"';}}?>>
                                                    <label class="apps-survey" for="app_q2-4">Pas très probable</label>
                                                </li>
                                                <li>
                                                    <input type="radio" class="apps-survey" id="app_q2-5" name="q2" value="5" <?php if (!empty($_SESSION['post-data']['q2'])){ if ($_SESSION['post-data']['q2'] == "5") {echo 'checked="checked"';}}?>>
                                                    <label class="apps-survey" for="app_q2-5">Pas du tout probable</label>
                                                </li>
                                            </ul>
                                            <div class="btn-swiper btn-full-bottom apps-survey">
                                                <div class="wrapper-btn-swiper wrapper-btn-prev swiper-button-prev"><img src="./images/arrow-left-survey.svg" alt="<" /></div>
                                                <div class="wrapper-btn-swiper wrapper-btn-next swiper-button-next"><img src="./images/arrow-right-survey.svg" alt=">" /></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Question 3 -->
                                    <div class="swiper-slide">
                                        <div class="wrapper-question">
                                            <div class="question">
                                                <h2 class="subtitle-question apps-survey">Quelle est l’importance pour toi d’apprendre via des tutoriels (vidéos, articles) sur tes apps ?</h2></div>
                                                <ul class="answers">
                                                    <li>
                                                        <input type="radio" class="apps-survey" id="app_q3-1" name="q3" value="1" <?php if (!empty($_SESSION['post-data']['q3'])){ if ($_SESSION['post-data']['q3'] == "1") {echo 'checked="checked"';}}?>>
                                                        <label class="apps-survey" for="app_q3-1">Extrêmement important</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" class="apps-survey" id="app_q3-2" name="q3" value="2" <?php if (!empty($_SESSION['post-data']['q3'])){ if ($_SESSION['post-data']['q3'] == "2") {echo 'checked="checked"';}}?>>
                                                        <label class="apps-survey" for="app_q3-2">Très important</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" class="apps-survey" id="app_q3-3" name="q3" value="3" <?php if (!empty($_SESSION['post-data']['q3'])){ if ($_SESSION['post-data']['q3'] == "3") {echo 'checked="checked"';}}?>>
                                                        <label class="apps-survey" for="app_q3-3">Relativement important</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" class="apps-survey" id="app_q3-4" name="q3" value="4" <?php if (!empty($_SESSION['post-data']['q3'])){ if ($_SESSION['post-data']['q3'] == "4") {echo 'checked="checked"';}}?>>
                                                        <label class="apps-survey" for="app_q3-4">Pas très important</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" class="apps-survey" id="app_q3-5" name="q3" value="5" <?php if (!empty($_SESSION['post-data']['q3'])){ if ($_SESSION['post-data']['q3'] == "5") {echo 'checked="checked"';}}?>>
                                                        <label class="apps-survey" for="app_q3-5">Pas du tout important</label>
                                                    </li>
                                                </ul>
                                                <div class="btn-swiper btn-full-bottom apps-survey">
                                                    <div class="wrapper-btn-swiper wrapper-btn-prev swiper-button-prev"><img src="./images/arrow-left-survey.svg" alt="<" /></div>
                                                    <div class="wrapper-btn-swiper wrapper-btn-next swiper-button-next"><img src="./images/arrow-right-survey.svg" alt=">" /></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Question 4 -->
                                        <div class="swiper-slide">
                                            <div class="wrapper-question">
                                                <div class="question">
                                                    <h2 class="subtitle-question apps-survey">Quelle est pour toi l’importance de se tenir au courant des derniers buzz via Youtube ?</h2></div>
                                                    <ul class="answers">
                                                        <li>
                                                            <input type="radio" class="apps-survey" id="app_q4-1" name="q4" value="1" <?php if (!empty($_SESSION['post-data']['q4'])){ if ($_SESSION['post-data']['q4'] == "1") {echo 'checked="checked"';}}?>>
                                                            <label class="apps-survey" for="app_q4-1">Extrêmement important</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" class="apps-survey" id="app_q4-2" name="q4" value="2" <?php if (!empty($_SESSION['post-data']['q4'])){ if ($_SESSION['post-data']['q4'] == "2") {echo 'checked="checked"';}}?>>
                                                            <label class="apps-survey" for="app_q4-2">Très important</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" class="apps-survey" id="app_q4-3" name="q4" value="3" <?php if (!empty($_SESSION['post-data']['q4'])){ if ($_SESSION['post-data']['q4'] == "3") {echo 'checked="checked"';}}?>>
                                                            <label class="apps-survey" for="app_q4-3">Relativement important</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" class="apps-survey" id="app_q4-4" name="q4" value="4" <?php if (!empty($_SESSION['post-data']['q4'])){ if ($_SESSION['post-data']['q4'] == "4") {echo 'checked="checked"';}}?>>
                                                            <label class="apps-survey" for="app_q4-4">Pas très important</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" class="apps-survey" id="app_q4-5" name="q4" value="5" <?php if (!empty($_SESSION['post-data']['q4'])){ if ($_SESSION['post-data']['q4'] == "5") {echo 'checked="checked"';}}?>>
                                                            <label class="apps-survey" for="app_q4-5">Pas du tout important</label>
                                                        </li>
                                                    </ul>
                                                    <input type="hidden" name="ip_adress" id="ip_adress" value="<?php echo $_SERVER['REMOTE_ADDR'] ?>" />
                                                    <input type="submit" name="submit__survey--apps" class="btn-full-bottom apps-survey submit-survey" />
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                        <div class="credits">Photos - <a href="http://www.unsplash.com">Unsplash</a></div>
                    </main>
                    <footer></footer>
                    <script src="javascript/main.js"></script>
                    <script src="javascript/swiper.min.js"></script>
                    <script>
                        var swiper = new Swiper('.swiper-container', {
                            pagination: {
                                el: '.swiper-pagination',
                                type: 'progressbar',
                            },
                            navigation: {
                                nextEl: '.swiper-button-next',
                                prevEl: '.swiper-button-prev',
                            },
                        });
                    </script>
                </body>

                </html>
