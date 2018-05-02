<?php session_start(); ?>
<?php include ("php/connection.php");
include ("php/function.php");
$adressip = $_SERVER["REMOTE_ADDR"];
$prepareip = $connection->prepare("SELECT COUNT(*) AS ip_adress FROM networks_survey WHERE ip_adress = '$adressip'");
$prepareip->execute();
$roww = $prepareip->fetch();
$ip_final = $roww['ip_adress'];
$ipErr = "";
$questionErr = "";
if (!empty($_POST['submit__survey--apps'])) {
  if($ip_final != 0) {
    $ipErr = "Tu as déjà rempli ce formulaire ! Pourquoi ne pas répondre à un autre ?";
}
else if(empty($_POST['gender']) || empty($_POST['age']) || empty($_POST['q1']) || empty($_POST['q2']) || empty($_POST['q4'])) {
    $questionErr = "Tu as oublié une ou plusieurs questions...";
}

else {
    $preparedstatement = $connection->prepare('INSERT INTO networks_survey
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
      q8,
      q9,
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
      :q8,
      :q9,
      :ip_adress
  )');
    $gender = strip_tags($_POST['gender']);
    $age = strip_tags($_POST['age']);
    $q1 = strip_tags($_POST['q1']);
    $q2 = strip_tags($_POST['q2']);
    $q3 = strip_tags(implode(',', $_POST['q3']));
    $q4 = strip_tags($_POST['q4']);
    $q5 = strip_tags(implode(',', $_POST['q5']));
    $q6 = strip_tags(implode(',', $_POST['q6']));
    $q7 = strip_tags($_POST['q7']);
    $q8 = strip_tags($_POST['q8']);
    $q9 = strip_tags($_POST['q9']);
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
      'q8' => $q8,
      'q9' => $q9,
      'ip_adress' => $ip_adress
  ));

    header("Location: redirection_networks-survey.php");
    exit();
}
}

?>
<!DOCTYPE html>
<html class="page-surveys page-surveys-single" lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sondage - Les réseaux sociaux | #trustinme</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="css/swiper.css">
</head>

<body>
    <header>
        <a class="back-to-list" href="./index.php">Liste</a><img class="logo" src="images/logo_trustinme.svg" alt="logo" />
        <nav></nav>
    </header>
    <main>

        <section class="container-surveys networks-bg-color">
            <div class="wrapper-link">
                <a class="back-to-list" href="./index.php">Retour à la liste</a>
            </div>
            <div class="swiper-pagination networks-survey"></div>
            <div class="alert alert-danger"><?php echo $ipErr; ?></div>
            <div class="alert alert-danger"><?php echo $questionErr; ?></div>
            <!-- Grid beginning -->
            <div class="wrapper-survey">
                <div class="header-main">
                    <h1 class="title-intro">Les réseaux sociaux</h1>
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
                                            <p class="networks-survey">Les sondages sont destinés à la génération Z (1995-2012). Ils sont anonymes.</p>
                                        </div>
                                        <ul class="answers answers-intro">
                                            <li class="answers--intro">
                                                <input type="radio" class="networks-survey" id="1" name="gender" value="1">
                                                <label class="genre networks-survey male" for="1">garçon</label>
                                            </li>
                                            <li class="answers--intro">
                                                <input type="radio" class="networks-survey" id="2" name="gender" value="2">
                                                <label class="genre networks-survey female" for="2">fille</label>
                                            </li>
                                            <li class="answers--intro">
                                                <label class="age" for="age">
                                                    <select class="networks-survey" name="age" id="age">
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
                                        <button class="btn-full-bottom networks-survey swiper-button-next">Commencer le sondage</button>
                                    </div>
                                </div>
                                <!-- Question 1 -->
                                <div class="swiper-slide">
                                    <div class="wrapper-question">
                                        <div class="question">
                                            <h2 class="subtitle-question  networks-survey">As-tu un compte sur des réseaux sociaux ?</h2>
                                        </div>
                                        <ul class="answers">
                                            <li>
                                                <input type="radio" class="networks-survey" id="networks_q1-1" onclick="OnSocialNetworks();" name="q1" value="1">
                                                <label class="networks-survey" for="networks_q1-1">oui</label>
                                            </li>
                                            <li>
                                                <input type="radio" class="networks-survey" id="networks_q1-2" onclick="OnSocialNetworks();" name="q1" value="2">
                                                <label class="networks-survey" for="networks_q1-2" id="no-social-media">non</label>
                                            </li>
                                        </ul>
                                        <div class="btn-swiper btn-full-bottom networks-survey question-on-social-media">
                                            <input type="submit" name="submit__survey--apps" class="btn-full-bottom networks-survey submit-survey no-on-social-media" id="no-social-media-btn">
                                            <div class="wrapper-btn-swiper wrapper-btn-prev swiper-button-prev"><img src="./images/arrow-left-survey.svg" alt="<" /></div>
                                            <div class="wrapper-btn-swiper wrapper-btn-next swiper-button-next"><img src="./images/arrow-right-survey.svg" alt=">" /></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Question 2 -->
                                <div class="swiper-slide">
                                    <div class="wrapper-question">
                                        <div class="question">
                                            <h2 class="subtitle-question networks-survey">À quelle fréquence vous connectez-vous sur vos réseaux sociaux ?</h2></div>
                                            <ul class="answers">
                                                <li>
                                                    <input type="radio" class="networks-survey" id="networks_q2-1" name="q2" value="1">
                                                    <label class="networks-survey" for="networks_q2-1">1h par jour</label>
                                                </li>
                                                <li>
                                                    <input type="radio" class="networks-survey" id="networks_q2-2" name="q2" value="2">
                                                    <label class="networks-survey" for="networks_q2-2">2h par jour</label>
                                                </li>
                                                <li>
                                                    <input type="radio" class="networks-survey" id="networks_q2-3" name="q2" value="3">
                                                    <label class="networks-survey" for="networks_q2-3">3h par jour</label>
                                                </li>
                                                <li>
                                                    <input type="radio" class="networks-survey" id="networks_q2-4" name="q2" value="4">
                                                    <label class="networks-survey" for="networks_q2-4">4h par jour</label>
                                                </li>
                                                <li>
                                                    <input type="radio" class="networks-survey" id="networks_q2-5" name="q2" value="5">
                                                    <label class="networks-survey" for="networks_q2-5">5h par jour</label>
                                                </li>
                                                <li>
                                                    <input type="radio" class="networks-survey" id="networks_q2-6" name="q2" value="6">
                                                    <label class="networks-survey" for="networks_q2-6">+ de 5h par jour</label>
                                                </li>
                                            </ul>
                                            <div class="btn-swiper btn-full-bottom networks-survey">
                                                <div class="wrapper-btn-swiper wrapper-btn-prev swiper-button-prev"><img src="./images/arrow-left-survey.svg" alt="<" /></div>
                                                <div class="wrapper-btn-swiper wrapper-btn-next swiper-button-next"><img src="./images/arrow-right-survey.svg" alt=">" /></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Question 3 -->
                                    <div class="swiper-slide">
                                        <div class="wrapper-question">
                                            <div class="question">
                                                <h2 class="subtitle-question networks-survey">En général, pour quelle(s) raison(s) te connectes-tu sur tes réseaux sociaux ?</h2></div>
                                                <ul class="answers">
                                                    <li>
                                                        <input type="checkbox" class="networks-survey" id="networks_q3-1" name="q3[]" value="[1]">
                                                        <label class="checkbox networks-survey" for="networks_q3-1">pour passer le temps</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" class="networks-survey" id="networks_q3-2" name="q3[]" value="[2]">
                                                        <label class="checkbox networks-survey" for="networks_q3-2">pour rechercher une information</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" class="networks-survey" id="networks_q3-3" name="q3[]" value="[3]">
                                                        <label class="checkbox networks-survey" for="networks_q3-3">pour faire de la publicité pour mon profil/ma page</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" class="networks-survey" id="networks_q3-4" name="q3[]" value="[4]">
                                                        <label class="checkbox networks-survey" for="networks_q3-4">pour être au courant des dernières tendances</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" class="other__choice networks-survey" id="networks_q3-5" name="q3[]" value="">
                                                        <label class="checkbox networks-survey other__choice--label" for="networks_q3-5">autre :
                                                            <input type="text" class="other__choice--text" id="networks_q3-5" name="q3[]" value="" onchange="changeradioother()">
                                                        </label>
                                                    </li>
                                                </ul>
                                                <div class="btn-swiper btn-full-bottom networks-survey">
                                                    <div class="wrapper-btn-swiper wrapper-btn-prev swiper-button-prev"><img src="./images/arrow-left-survey.svg" alt="<" /></div>
                                                    <div class="wrapper-btn-swiper wrapper-btn-next swiper-button-next"><img src="./images/arrow-right-survey.svg" alt=">" /></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Question 4 -->
                                        <div class="swiper-slide">
                                            <div class="wrapper-question">
                                                <div class="question">
                                                    <h2 class="subtitle-question networks-survey">A quelle fréquence postes-tu des articles, des commentaires sur tes réseaux sociaux ?</h2></div>
                                                    <ul class="answers">
                                                        <li>
                                                            <input type="radio" class="networks-survey" id="networks_q4-1" name="q4" value="1">
                                                            <label class="networks-survey" for="networks_q4-1">Tout le temps</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" class="networks-survey" id="networks_q4-2" name="q4" value="2">
                                                            <label class="networks-survey" for="networks_q4-2">Très souvent</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" class="networks-survey" id="networks_q4-3" name="q4" value="3">
                                                            <label class="networks-survey" for="networks_q4-3">Assez souvent</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" class="networks-survey" id="networks_q4-4" name="q4" value="4">
                                                            <label class="networks-survey" for="networks_q4-4">Peu souvent</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" class="networks-survey" id="networks_q4-5" name="q4" value="5">
                                                            <label class="networks-survey" for="networks_q4-5">Jamais</label>
                                                        </li>
                                                    </ul>
                                                    <div class="btn-swiper btn-full-bottom networks-survey">
                                                        <div class="wrapper-btn-swiper wrapper-btn-prev swiper-button-prev"><img src="./images/arrow-left-survey.svg" alt="<" /></div>
                                                        <div class="wrapper-btn-swiper wrapper-btn-next swiper-button-next"><img src="./images/arrow-right-survey.svg" alt=">" /></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="wrapper-question">
                                                    <div class="question">
                                                        <h2 class="subtitle-question networks-survey">De manière générale, que postes-tu sur tes réseaux sociaux ?</h2></div>
                                                        <ul class="answers">
                                                            <li>
                                                                <input type="checkbox" class="networks-survey" id="networks_q5-1" name="q5[]" value="[1]">
                                                                <label class="checkbox networks-survey" for="networks_q5-1">Des articles que je trouve pertinents</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" class="networks-survey" id="networks_q5-2" name="q5[]" value="[2]">
                                                                <label class="checkbox networks-survey" for="networks_q5-2">Des images/vidéos de moi/ ma famille/ mes amis</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" class="networks-survey" id="networks_q5-3" name="q5[]" value="[3]">
                                                                <label class="checkbox networks-survey" for="networks_q5-3">Des annonces à vendre</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" class="networks-survey" id="networks_q5-4" name="q5[]" value="[4]">
                                                                <label class="checkbox networks-survey" for="networks_q5-4">Rien</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" class="other__choice networks-survey" id="networks_q5-5" name="q5[]" value="">
                                                                <label class="checkbox networks-survey other__choice--label" for="networks_q5-5">autre :
                                                                    <input type="text" class="other__choice--text" id="networks_q5-5" name="q5[]" value="" onchange="changeradioother()">
                                                                </label>
                                                            </li>
                                                        </ul>
                                                        <div class="btn-swiper btn-full-bottom networks-survey">
                                                            <div class="wrapper-btn-swiper wrapper-btn-prev swiper-button-prev"><img src="./images/arrow-left-survey.svg" alt="<" /></div>
                                                            <div class="wrapper-btn-swiper wrapper-btn-next swiper-button-next"><img src="./images/arrow-right-survey.svg" alt=">" /></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                <div class="wrapper-question">
                                                    <div class="question">
                                                        <h2 class="subtitle-question networks-survey">De manière générale, pourquoi postes-tu sur tes réseaux sociaux ?</h2></div>
                                                        <ul class="answers">
                                                            <li>
                                                                <input type="checkbox" class="networks-survey" id="networks_q6-1" name="q6[]" value="[1]">
                                                                <label class="checkbox networks-survey" for="networks_q6-1">Pour montrer ce que je fais</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" class="networks-survey" id="networks_q6-2" name="q6[]" value="[2]">
                                                                <label class="checkbox networks-survey" for="networks_q6-2">Pour attirer plus de monde sur mes pages</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" class="networks-survey" id="networks_q6-3" name="q6[]" value="[3]">
                                                                <label class="checkbox networks-survey" for="networks_q6-3">Pour gagner de l’argent</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" class="networks-survey" id="networks_q6-4" name="q6[]" value="[4]">
                                                                <label class="checkbox networks-survey" for="networks_q6-4">Pour faire de la propagande sur un sujet</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" class="other__choice networks-survey" id="networks_q6-5" name="q6[]" value="">
                                                                <label class="checkbox networks-survey other__choice--label" for="networks_q6-5">autre :
                                                                    <input type="text" class="other__choice--text" id="networks_q6-5" name="q6[]" value="" onchange="changeradioother()">
                                                                </label>
                                                            </li>
                                                        </ul>
                                                        <div class="btn-swiper btn-full-bottom networks-survey">
                                                            <div class="wrapper-btn-swiper wrapper-btn-prev swiper-button-prev"><img src="./images/arrow-left-survey.svg" alt="<" /></div>
                                                            <div class="wrapper-btn-swiper wrapper-btn-next swiper-button-next"><img src="./images/arrow-right-survey.svg" alt=">" /></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                <div class="wrapper-question">
                                                    <div class="question">
                                                        <h2 class="subtitle-question networks-survey">Quelle est l’importance pour toi de socialiser via les réseaux sociaux ?</h2></div>
                                                        <ul class="answers">
                                                            <li>
                                                                <input type="radio" class="networks-survey" id="networks_q7-1" name="q7" value="1">
                                                                <label class="networks-survey" for="networks_q7-1">Extrêmement important</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" class="networks-survey" id="networks_q7-2" name="q7" value="2">
                                                                <label class="networks-survey" for="networks_q7-2">Très important</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" class="networks-survey" id="networks_q7-3" name="q7" value="3">
                                                                <label class="networks-survey" for="networks_q7-3">Relativement important</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" class="networks-survey" id="networks_q7-4" name="q7" value="4">
                                                                <label class="networks-survey" for="networks_q7-4">Pas très important</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" class="networks-survey" id="networks_q7-5" name="q7" value="5">
                                                                <label class="networks-survey" for="networks_q7-5">Pas du tout important</label>
                                                            </li>
                                                        </ul>
                                                        <div class="btn-swiper btn-full-bottom networks-survey">
                                                            <div class="wrapper-btn-swiper wrapper-btn-prev swiper-button-prev"><img src="./images/arrow-left-survey.svg" alt="<" /></div>
                                                            <div class="wrapper-btn-swiper wrapper-btn-next swiper-button-next"><img src="./images/arrow-right-survey.svg" alt=">" /></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                <div class="wrapper-question">
                                                    <div class="question">
                                                        <h2 class="subtitle-question networks-survey">Approximativement, combien de tes “amis” sur les réseaux sociaux as-tu rencontrés en personne ?</h2>
                                                    </div>
                                                        <ul class="answers">
                                                            <li>
                                                                <input type="radio" class="networks-survey" id="networks_q8-1" name="q8" value="1">
                                                                <label class="networks-survey" for="networks_q8-1">La totalité</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" class="networks-survey" id="networks_q8-2" name="q8" value="2">
                                                                <label class="networks-survey" for="networks_q8-2">La majorité</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" class="networks-survey" id="networks_q8-3" name="q8" value="3">
                                                                <label class="networks-survey" for="networks_q8-3">Approximativement la moitié</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" class="networks-survey" id="networks_q8-4" name="q8" value="4">
                                                                <label class="networks-survey" for="networks_q8-4">Quelque-uns</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" class="networks-survey" id="networks_q8-5" name="q8" value="5">
                                                                <label class="networks-survey" for="networks_q8-5">Aucun</label>
                                                            </li>
                                                        </ul>
                                                        <div class="btn-swiper btn-full-bottom networks-survey">
                                                            <div class="wrapper-btn-swiper wrapper-btn-prev swiper-button-prev"><img src="./images/arrow-left-survey.svg" alt="<" /></div>
                                                            <div class="wrapper-btn-swiper wrapper-btn-next swiper-button-next"><img src="./images/arrow-right-survey.svg" alt=">" /></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                <div class="wrapper-question">
                                                    <div class="question">
                                                        <h2 class="subtitle-question networks-survey">Lorsque vous êtes sur les réseaux sociaux, combien de temps passez-vous à regarder ce que vos relations ont posté ?</h2>
                                                    </div>
                                                        <ul class="answers">
                                                            <li>
                                                                <input type="radio" class="networks-survey" id="networks_q9-1" name="q9" value="1">
                                                                <label class="networks-survey" for="networks_q9-1">La totalité du temps</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" class="networks-survey" id="networks_q9-2" name="q9" value="2">
                                                                <label class="networks-survey" for="networks_q9-2">La plus grande partie du temps</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" class="networks-survey" id="networks_q9-3" name="q9" value="3">
                                                                <label class="networks-survey" for="networks_q9-3">A peu près la moitié du temps</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" class="networks-survey" id="networks_q9-4" name="q9" value="4">
                                                                <label class="networks-survey" for="networks_q9-4">Une petite partie du temps</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" class="networks-survey" id="networks_q9-5" name="q9" value="5">
                                                                <label class="networks-survey" for="networks_q9-5">Aucun temps</label>
                                                            </li>
                                                        </ul>
                                                        <div class="btn-swiper btn-full-bottom networks-survey">
                                                            <input type="hidden" name="ip_adress" id="ip_adress" value="<?php echo $_SERVER['REMOTE_ADDR'] ?>" />
                                                            <input type="submit" name="submit__survey--apps" class="btn-full-bottom networks-survey submit-survey" />
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
                                noSwiping: 'false'

                            });



                        </script>
                    </body>

                    </html>



