<?php session_start(); ?>
<?php include ("php/connection.php");
include ("php/function.php");
$adressip = $_SERVER["REMOTE_ADDR"];
$prepareip = $connection->prepare("SELECT COUNT(*) AS ip_adress FROM smartphones_survey WHERE ip_adress = '$adressip'");
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
    $questionErr = "Tu as oublié une ou plusieurs questions...";
}

else {
    $preparedstatement = $connection->prepare('INSERT INTO smartphones_survey
      (
      gender,
      age,
      q1,
      q2,
      q3,
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
    $q3 = strip_tags(implode(',', $_POST['q3']));
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
      'q4' => $q4,
      'q5' => $q5,
      'q6' => $q6,
      'q7' => $q7,
      'ip_adress' => $ip_adress
  ));

    header("Location: redirection_smartphones-survey.php");
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
        <a class="back-to-list" href="./index.php">Liste</a><img class="logo" src="images/logo_trustinme.svg" alt="logo" />
        <nav></nav>
    </header>
    <main>

        <section class="container-surveys smartphones-bg-color">
            <div class="wrapper-link">
                <a class="back-to-list" href="./index.php">Retour à la liste</a>
            </div>
            <div class="swiper-pagination smartphones-survey"></div>
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
                                        <ul class="answers answers-intro">
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
                                        <button class="btn-full-bottom swiper-button-next">Commencer le sondage</button>
                                    </div>
                                </div>
                                <!-- Question 1 -->
                                <div class="swiper-slide">
                                    <div class="wrapper-question">
                                        <div class="question">
                                            <h2 class="subtitle-question">Quelle est la probabilité que tu achètes le nouveau smartphone, malgré que ton actuel fonctionne bien ?</h2>
                                        </div>
                                        <ul class="answers">
                                            <li>
                                                <input type="radio" id="sm_q1-1" name="q1" value="1">
                                                <label for="sm_q1-1">Extrêmement probable</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="sm_q1-2" name="q1" value="2">
                                                <label for="sm_q1-2">Très probable</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="sm_q1-3" name="q1" value="3">
                                                <label for="sm_q1-3">Relativement probable</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="sm_q1-4" name="q1" value="4">
                                                <label for="sm_q1-4">Pas très probable</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="sm_q1-5" name="q1" value="5">
                                                <label for="sm_q1-5">Pas du tout probable</label>
                                            </li>
                                        </ul>
                                        <div class="btn-swiper btn-full-bottom">
                                            <div class="wrapper-btn-swiper wrapper-btn-prev swiper-button-prev"><img src="./images/arrow-left-survey.svg" alt="<" /></div>
                                            <div class="wrapper-btn-swiper wrapper-btn-next swiper-button-next"><img src="./images/arrow-right-survey.svg" alt=">" /></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Question 2 -->
                                <div class="swiper-slide">
                                    <div class="wrapper-question">
                                        <div class="question">
                                            <h2 class="subtitle-question">Sur un nouveau smartphone, à quel point es-tu intéressé par l’aspect technologique du produit ?</h2></div>
                                            <ul class="answers">
                                                <li>
                                                    <input type="radio" id="sm_q2-1" name="q2" value="1">
                                                    <label for="sm_q2-1">Extrêmement intéressé</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="sm_q2-2" name="q2" value="2">
                                                    <label for="sm_q2-2">Très intéressé</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="sm_q2-3" name="q2" value="3">
                                                    <label for="sm_q2-3">Relativement intéressé</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="sm_q2-4" name="q2" value="4">
                                                    <label for="sm_q2-4">Pas très intéressé</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="sm_q2-5" name="q2" value="5">
                                                    <label for="sm_q2-5">Pas du tout intéressé</label>
                                                </li>
                                            </ul>
                                            <div class="btn-swiper btn-full-bottom">
                                                <div class="wrapper-btn-swiper wrapper-btn-prev swiper-button-prev"><img src="./images/arrow-left-survey.svg" alt="<" /></div>
                                                <div class="wrapper-btn-swiper wrapper-btn-next swiper-button-next"><img src="./images/arrow-right-survey.svg" alt=">" /></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Question 3 -->
                                    <div class="swiper-slide">
                                        <div class="wrapper-question">
                                            <div class="question">
                                                <h2 class="subtitle-question">Si tu achètes un nouveau smartphone, c’est pour : </h2></div>
                                                <ul class="answers">
                                                    <li>
                                                        <input type="checkbox" id="sm_q3-1" name="q3[]" value="[1]">
                                                        <label class="checkbox" for="sm_q3-1">ses nouvelles technologies</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="sm_q3-2" name="q3[]" value="[2]">
                                                        <label class="checkbox" for="sm_q3-2">ses performances</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="sm_q3-3" name="q3[]" value="[3]">
                                                        <label class="checkbox" for="sm_q3-3">son côté esthétique</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="sm_q3-4" name="q3[]" value="[4]">
                                                        <label class="checkbox" for="sm_q3-4">son côté pratique</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="sm_q3-5" name="q3[]" value="[5]">
                                                        <label class="checkbox" for="sm_q3-5">parce que tu en as besoin</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" class="other__choice" id="sm_q3-6" name="q3[]" value="">
                                                        <label class="checkbox other__choice--label" for="sm_q3-6">autre :
                                                            <input type="text" class="other__choice--text" id="sm_q3-6" name="q3[]" value="" onchange="changeradioother()">
                                                        </label>
                                                    </li>
                                                </ul>
                                                <div class="btn-swiper btn-full-bottom">
                                                    <div class="wrapper-btn-swiper wrapper-btn-prev swiper-button-prev"><img src="./images/arrow-left-survey.svg" alt="<" /></div>
                                                    <div class="wrapper-btn-swiper wrapper-btn-next swiper-button-next"><img src="./images/arrow-right-survey.svg" alt=">" /></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Question 4 -->
                                        <div class="swiper-slide">
                                            <div class="wrapper-question">
                                                <div class="question">
                                                    <h2 class="subtitle-question">Quelle est la probabilité pour que tu te passes de ton smartphone une journée entière ?</h2></div>
                                                    <ul class="answers">
                                                        <li>
                                                            <input type="radio" id="sm_q4-1" name="q4" value="1">
                                                            <label for="sm_q4-1">Extrêmement probable</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="sm_q4-2" name="q4" value="2">
                                                            <label for="sm_q4-2">Très probable</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="sm_q4-3" name="q4" value="3">
                                                            <label for="sm_q4-3">Relativement probable</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="sm_q4-4" name="q4" value="4">
                                                            <label for="sm_q4-4">Pas très probable</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="sm_q4-5" name="q4" value="5">
                                                            <label for="sm_q4-5">Pas du tout probable</label>
                                                        </li>
                                                    </ul>
                                                    <div class="btn-swiper btn-full-bottom">
                                                        <div class="wrapper-btn-swiper wrapper-btn-prev swiper-button-prev"><img src="./images/arrow-left-survey.svg" alt="<" /></div>
                                                        <div class="wrapper-btn-swiper wrapper-btn-next swiper-button-next"><img src="./images/arrow-right-survey.svg" alt=">" /></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Question 5 -->
                                            <div class="swiper-slide">
                                                <div class="wrapper-question">
                                                    <div class="question">
                                                        <h2 class="subtitle-question">Quelle est l’importance pour toi d’avoir accès à internet partout avec ton smartphone ?</h2></div>
                                                        <ul class="answers">
                                                            <li>
                                                                <input type="radio" id="sm_q5-1" name="q5" value="1">
                                                                <label for="sm_q5-1">Extrêmement important</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" id="sm_q5-2" name="q5" value="2">
                                                                <label for="sm_q5-2">Très important</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" id="sm_q5-3" name="q5" value="3">
                                                                <label for="sm_q5-3">Relativement important</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" id="sm_q5-4" name="q5" value="4">
                                                                <label for="sm_q5-4">Pas très important</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" id="sm_q5-5" name="q5" value="5">
                                                                <label for="sm_q5-5">Pas du tout important</label>
                                                            </li>
                                                        </ul>
                                                        <div class="btn-swiper btn-full-bottom">
                                                            <div class="wrapper-btn-swiper wrapper-btn-prev swiper-button-prev"><img src="./images/arrow-left-survey.svg" alt="<" /></div>
                                                            <div class="wrapper-btn-swiper wrapper-btn-next swiper-button-next"><img src="./images/arrow-right-survey.svg" alt=">" /></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Question 6 -->
                                                <div class="swiper-slide">
                                                    <div class="wrapper-question">
                                                        <div class="question">
                                                            <h2 class="subtitle-question">Quelle est l’importance pour toi d’avoir accès aux outils de développeur sur ton smartphone ?</h2></div>
                                                            <ul class="answers">
                                                                <li>
                                                                    <input type="radio" id="sm_q6-1" name="q6" value="1">
                                                                    <label for="sm_q6-1">Extrêmement important</label>
                                                                </li>
                                                                <li>
                                                                    <input type="radio" id="sm_q6-2" name="q6" value="2">
                                                                    <label for="sm_q6-2">Très important</label>
                                                                </li>
                                                                <li>
                                                                    <input type="radio" id="sm_q6-3" name="q6" value="3">
                                                                    <label for="sm_q6-3">Relativement important</label>
                                                                </li>
                                                                <li>
                                                                    <input type="radio" id="sm_q6-4" name="q6" value="4">
                                                                    <label for="sm_q6-4">Pas très important</label>
                                                                </li>
                                                                <li>
                                                                    <input type="radio" id="sm_q6-5" name="q6" value="5">
                                                                    <label for="sm_q6-5">Pas du tout important</label>
                                                                </li>
                                                            </ul>
                                                            <div class="btn-swiper btn-full-bottom">
                                                                <div class="wrapper-btn-swiper wrapper-btn-prev swiper-button-prev"><img src="./images/arrow-left-survey.svg" alt="<" /></div>
                                                                <div class="wrapper-btn-swiper wrapper-btn-next swiper-button-next"><img src="./images/arrow-right-survey.svg" alt=">" /></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Question 7 -->
                                                    <div class="swiper-slide">
                                                        <div class="wrapper-question">
                                                            <div class="question">
                                                                <h2 class="subtitle-question">Quelle est pour toi la probabilité que les smartphones soient sources de manque de contacts en temps réel entre humains ?</h2></div>
                                                                <ul class="answers">
                                                                    <li>
                                                                        <input type="radio" id="sm_q7-1" name="q7" value="1">
                                                                        <label for="sm_q7-1">Extrêmement probable</label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="radio" id="sm_q7-2" name="q7" value="2">
                                                                        <label for="sm_q7-2">Très probable</label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="radio" id="sm_q7-3" name="q7" value="3">
                                                                        <label for="sm_q7-3">Relativement probable</label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="radio" id="sm_q7-4" name="q7" value="4">
                                                                        <label for="sm_q7-4">Pas très probable</label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="radio" id="sm_q7-5" name="q7" value="5">
                                                                        <label for="sm_q7-5">Pas du tout probable</label>
                                                                    </li>
                                                                </ul>
                                                                <input type="hidden" name="ip_adress" id="ip_adress" value="<?php echo $_SERVER['REMOTE_ADDR'] ?>" />
                                                                <input type="submit" name="submit__survey--sm" class="btn-full-bottom submit-survey" />
                                                            </div>
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
