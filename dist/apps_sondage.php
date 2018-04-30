<?php session_start(); ?>
<?php include ("php/connection.php");
include ("php/function.php");
$adressip = $_SERVER["REMOTE_ADDR"];
$prepareip = $connection->prepare("SELECT COUNT(*) AS ip_adress FROM apps_survey WHERE ip_adress = '$adressip'");
$prepareip->execute();
$roww = $prepareip->fetch();
$ip_final = $roww['ip_adress'];
$ipErr = "";
$questionErr = "";
if (!empty($_POST['submit__survey--sm'])) {
  if($ip_final != 0) {
    $ipErr = "Tu as déjà rempli ce formulaire ! Pourquoi ne pas répondre à un autre ?";
}
elseif(empty($_POST['gender']) || empty($_POST['age']) || empty($_POST['q1']) || empty($_POST['q2']) || empty($_POST['q4']) || empty($_POST['q5']) || empty($_POST['q6']) || empty($_POST['q7'])) {
    $questionErr = "Vous avez oublié une ou plusieurs questions...";
}

else {
    $preparedstatement = $connection->prepare('INSERT INTO apps_survey
      (
      gender,
      age,
      q1,
      q2,
      q3,
      q3b,
      q4,
      q5,
      q6,
      q7,
      ip_adress
      )
      VALUES (
      :gender,
      :age,
      :q1,
      :q2,
      :q3,
      :q3b,
      :q4,
      :q5,
      :q6,
      :q7,
      :ip_adress
  )');
    $gender = strip_tags($_POST['gender']);
    $age = strip_tags($_POST['age']);
    $q1 = strip_tags($_POST['q1']);
    $q2 = strip_tags($_POST['q2']);
    $q3 = strip_tags($_POST['q3']);
    $q3b = strip_tags($_POST['q3b']);
    $q4 = strip_tags($_POST['q4']);
    $q5 = strip_tags($_POST['q5']);
    $q6 = strip_tags($_POST['q6']);
    $q7 = strip_tags($_POST['q7']);
    $ip_adress = strip_tags($_POST['ip_adress']);
    $preparedstatement ->execute(array(
      'gender' => $gender,
      'age' => $age,
      'q1' => $q1,
      'q2' => $q2,
      'q3' => $q3,
      'q3b' => $q3b,
      'q4' => $q4,
      'q5' => $q5,
      'q6' => $q6,
      'q7' => $q7,
      'ip_adress' => $ip_adress
  ));

    header("Location: redirection.php");
    exit();
}
}

?>
<!DOCTYPE html>
<html class="page-surveys page-surveys-single" lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sondage - Les smartphones | #trustinme</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="css/swiper.css">
</head>

<body>
    <header>
        <img class="logo" src="images/logo_trustinme.svg" alt="logo" />
        <nav></nav>
    </header>
    <main>

        <section class="container-surveys apps-survey">
            <div class="wrapper-link">
                <a class="back-to-list" href="./index.html">Retour à la liste</a>
            </div>
            <div class="swiper-pagination"></div>
            <div class="alert alert-danger"><?php echo $ipErr; ?></div>
            <div class="alert alert-danger"><?php echo $questionErr; ?></div>
            <!-- Grid beginning -->
            <div class="wrapper-survey">
                <div class="header-main">
                    <h1 class="title-intro">Les smartphones</h1>
                </div>
                <div class="body-main">
                    <form action="" method="POST">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <!-- Question préambule -->
                                <div class="swiper-slide">
                                    <div class="wrapper-question wrapper-question-intro">
                                        <div class="question">
                                            <h2 class="subtitle-intro">Qui es-tu ?</h2>
                                            <p>Les sondages sont destinés à la génération Z (1995-2012). Ils sont anonymes.</p>
                                        </div>
                                        <ul class="answers">
                                            <li class="answers--intro">
                                                <input type="radio" id="1" name="gender" value="1">
                                                <label class="genre male" for="1">garçon</label>
                                            </li>
                                            <li class="answers--intro">
                                                <input type="radio" id="2" name="gender" value="2">
                                                <label class="genre female" for="2">fille</label>
                                            </li>
                                            <li class="answers--intro">
                                                <label class="age" for="age">
                                                    <select name="age" id="age">
                                                        <option value="0">Année de naissance</option>
                                                        <option value="1">1995</option>
                                                        <option value="2">1996</option>
                                                        <option value="3">1997</option>
                                                        <option value="4">1998</option>
                                                        <option value="5">1999</option>
                                                        <option value="6">2000</option>
                                                        <option value="7">2001</option>
                                                        <option value="8">2002</option>
                                                        <option value="9">2003</option>
                                                        <option value="10">2004</option>
                                                        <option value="11">2005</option>
                                                        <option value="12">2006</option>
                                                        <option value="13">2007</option>
                                                        <option value="14">2008</option>
                                                        <option value="15">2009</option>
                                                        <option value="16">2010</option>
                                                        <option value="17">2011</option>
                                                        <option value="18">2012</option>
                                                    </select>
                                                </label>
                                            </li>
                                        </ul>
                                        <button class="btn-next swiper-button-next">Commencer le sondage</button>
                                    </div>
                                </div>
                                <!-- Question 1 -->
                                <div class="swiper-slide">
                                    <div class="wrapper-question">
                                        <div class="question">
                                            <h2 class="subtitle-question">Sur ton smartphone, quelle(s) catégorie(s) d’apps as-tu en majorité (plusieurs choix possibles)? </h2>
                                        </div>
                                        <ul class="answers">
                                            <li>
                                                <input type="radio" id="app_q1-1" name="q1" value="1">
                                                <label for="app_q1-1">Sport</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="app_q1-2" name="q1" value="2">
                                                <label for="app_q1-2">Musique</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="app_q1-3" name="q1" value="3">
                                                <label for="app_q1-3">Journaux, infos</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="app_q1-4" name="q1" value="4">
                                                <label for="app_q1-4">Streaming vidéos</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="app_q1-5" name="q1" value="5">
                                                <label for="app_q1-5">Education</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="app_q1-6" name="q1" value="6">
                                                <label for="app_q1-6">Réseaux sociaux, messageries</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="app_q1-7" name="q1" value="7">
                                                <label for="app_q1-7">Jeux</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="app_q1-8" name="q1" value="8">
                                                <label for="app_q1-8">Santé & fitness</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="app_q1-9" name="q1" value="9">
                                                <label for="app_q1-9">Voyages & navigation</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="app_q1-10" name="q1" value="10">
                                                <label for="app_q1-10">Shopping</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="app_q1-11" name="q1" value="11">
                                                <label for="app_q1-11">Autres ?</label>
                                            </li>
                                        </ul>
                                        <div class="btn-swiper btn-orange">
                                            <div class="wrapper-btn-swiper wrapper-btn-prev swiper-button-prev"><img src="./images/arrow-left-survey.svg" alt="<" /></div>
                                            <div class="wrapper-btn-swiper wrapper-btn-next swiper-button-next"><img src="./images/arrow-right-survey.svg" alt=">" /></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Question 2 -->
                                <div class="swiper-slide">
                                    <div class="wrapper-question">
                                        <div class="question">
                                            <h2 class="subtitle-question">Quelle est la probabilité pour que tes apps puissent t'aider à l’école/ à l’université/ au travail ?</h2></div>
                                            <ul class="answers">
                                                <li>
                                                    <input type="radio" id="app_q2-1" name="q2" value="1">
                                                    <label for="app_q2-1">Extrêmement probable</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="app_q2-2" name="q2" value="2">
                                                    <label for="app_q2-2">Très probable</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="app_q2-3" name="q2" value="3">
                                                    <label for="app_q2-3">Relativement probable</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="app_q2-4" name="q2" value="4">
                                                    <label for="app_q2-4">Pas très probable</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="app_q2-5" name="q2" value="5">
                                                    <label for="app_q2-5">Pas du tout probable</label>
                                                </li>
                                            </ul>
                                            <div class="btn-swiper btn-orange">
                                                <div class="wrapper-btn-swiper wrapper-btn-prev swiper-button-prev"><img src="./images/arrow-left-survey.svg" alt="<" /></div>
                                                <div class="wrapper-btn-swiper wrapper-btn-next swiper-button-next"><img src="./images/arrow-right-survey.svg" alt=">" /></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Question 3 -->
                                    <div class="swiper-slide">
                                        <div class="wrapper-question">
                                            <div class="question">
                                                <h2 class="subtitle-question">Quelle est l’importance pour toi d’apprendre via des tutoriels (vidéos, articles) sur tes apps ?</h2></div>
                                                <ul class="answers">
                                                    <li>
                                                        <input type="radio" id="app_q3-1" name="q3" value="1">
                                                        <label for="app_q3-1">Extrêmement important</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="app_q3-2" name="q3" value="2">
                                                        <label for="app_q3-2">Très important</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="app_q3-3" name="q3" value="3">
                                                        <label for="app_q3-3">Relativement important</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="app_q3-4" name="q3" value="4">
                                                        <label for="app_q3-4">Pas très important</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="app_q3-5" name="q3" value="5">
                                                        <label for="app_q3-5">Pas du tout important</label>
                                                    </li>
                                                </ul>
                                                <div class="btn-swiper btn-orange">
                                                    <div class="wrapper-btn-swiper wrapper-btn-prev swiper-button-prev"><img src="./images/arrow-left-survey.svg" alt="<" /></div>
                                                    <div class="wrapper-btn-swiper wrapper-btn-next swiper-button-next"><img src="./images/arrow-right-survey.svg" alt=">" /></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Question 4 -->
                                        <div class="swiper-slide">
                                            <div class="wrapper-question">
                                                <div class="question">
                                                    <h2 class="subtitle-question">Quel est pour toi l’importance de se tenir au courant des derniers buzz via Youtube ?</h2></div>
                                                    <ul class="answers">
                                                        <li>
                                                            <input type="radio" id="app_q4-1" name="q4" value="1">
                                                            <label for="app_q4-1">Extrêmement important</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="app_q4-2" name="q4" value="2">
                                                            <label for="app_q4-2">Très important</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="app_q4-3" name="q4" value="3">
                                                            <label for="app_q4-3">Relativement important</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="app_q4-4" name="q4" value="4">
                                                            <label for="app_q4-4">Pas très important</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="app_q4-5" name="q4" value="5">
                                                            <label for="app_q4-5">Pas du tout important</label>
                                                        </li>
                                                    </ul>
                                                    <input type="hidden" name="ip_adress" id="ip_adress" value="<?php echo $_SERVER['REMOTE_ADDR'] ?>" />
                                                    <input type="submit" name="submit__survey--sm" class="btn-next submit-survey" />
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
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
