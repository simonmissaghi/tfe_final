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
$q1 = "";
if($ip_final != 0) {
  $ipErr = "Tu as déjà rempli ce formulaire ! Pourquoi ne pas répondre à un autre ?";
  header( "refresh:2;url=index.php" );
}

if (!empty($_POST['submit__survey--networks'])) {
  $_SESSION['post-data'] = $_POST;
  $os = $_SESSION['post-data']['q3'];
  $os2 = $_SESSION['post-data']['q5'];
  $os3 = $_SESSION['post-data']['q6'];



  if(isset($_POST['q1']) == '2' && !empty($_POST['gender']) && !empty($_POST['age'])) {
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
    $q2 = "";
    $q3 = strip_tags(implode(',', $_POST['q3']));
    $q4 = "";
    $q5 = strip_tags(implode(',', $_POST['q5']));
    $q6 = strip_tags(implode(',', $_POST['q6']));
    $q7 = "";
    $q8 = "";
    $q9 = "";
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
    session_destroy();
    unset($_SESSION['post-data']);
    header("Location: redirection_networks-survey.php");
    exit();
  }

  elseif(empty($_POST['gender']) || empty($_POST['age']) || empty($_POST['q1']) || empty($_POST['q2']) || empty($_POST['q3']) || empty($_POST['q4']) || empty($_POST['q5']) || empty($_POST['q6']) || empty($_POST['q7']) || empty($_POST['q8']) || empty($_POST['q9'])) {
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
  <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
  <title>Sondage - Les réseaux sociaux | #trustinme</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" href="css/swiper.css">
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
  <meta name="twitter:image" content="http://img_metatag.jpg" />
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
                        <input type="radio" class="networks-survey" id="1" name="gender" value="1" <?php if (!empty($_SESSION['post-data']['gender'])){ if ($_SESSION['post-data']['gender'] == "1") {echo 'checked="checked"';}}?>>
                        <label class="genre networks-survey male" for="1">garçon</label>
                      </li>
                      <li class="answers--intro">
                        <input type="radio" class="networks-survey" id="2" name="gender" value="2" <?php if (!empty($_SESSION['post-data']['gender'])){ if ($_SESSION['post-data']['gender'] == "2") {echo 'checked="checked"';}}?>>
                        <label class="genre networks-survey female" for="2">fille</label>
                      </li>
                      <li class="answers--intro">
                        <label class="age" for="age">
                          <select class="networks-survey" name="age" id="age">
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
                      <input type="radio" class="networks-survey" id="networks_q1-1" onclick="OnSocialNetworks();" name="q1" value="1" <?php if (!empty($_SESSION['post-data']['q1'])){ if ($_SESSION['post-data']['q1'] == "1") {echo 'checked="checked"';}}?>>
                      <label class="networks-survey" for="networks_q1-1">oui</label>
                    </li>
                    <li>
                      <input type="radio" class="networks-survey" id="networks_q1-2" onclick="OnSocialNetworks();" name="q1" value="2" <?php if (!empty($_SESSION['post-data']['q1'])){ if ($_SESSION['post-data']['q1'] == "2") {echo 'checked="checked"';}}?>>
                      <label class="networks-survey" for="networks_q1-2" id="no-social-media">non <span class="done-survey">(ceci finit le sondage)</span></label>
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
                    <h2 class="subtitle-question networks-survey">À quelle fréquence consultes-tu tes réseaux sociaux ?</h2></div>
                    <ul class="answers">
                      <li>
                        <input type="radio" class="networks-survey" id="networks_q2-1" name="q2" value="1" <?php if (!empty($_SESSION['post-data']['q2'])){ if ($_SESSION['post-data']['q2'] == "1") {echo 'checked="checked"';}}?>>
                        <label class="networks-survey" for="networks_q2-1">1h par jour</label>
                      </li>
                      <li>
                        <input type="radio" class="networks-survey" id="networks_q2-2" name="q2" value="2" <?php if (!empty($_SESSION['post-data']['q2'])){ if ($_SESSION['post-data']['q2'] == "2") {echo 'checked="checked"';}}?>>
                        <label class="networks-survey" for="networks_q2-2">2h par jour</label>
                      </li>
                      <li>
                        <input type="radio" class="networks-survey" id="networks_q2-3" name="q2" value="3" <?php if (!empty($_SESSION['post-data']['q2'])){ if ($_SESSION['post-data']['q2'] == "3") {echo 'checked="checked"';}}?>>
                        <label class="networks-survey" for="networks_q2-3">3h par jour</label>
                      </li>
                      <li>
                        <input type="radio" class="networks-survey" id="networks_q2-4" name="q2" value="4" <?php if (!empty($_SESSION['post-data']['q2'])){ if ($_SESSION['post-data']['q2'] == "4") {echo 'checked="checked"';}}?>>
                        <label class="networks-survey" for="networks_q2-4">4h par jour</label>
                      </li>
                      <li>
                        <input type="radio" class="networks-survey" id="networks_q2-5" name="q2" value="5" <?php if (!empty($_SESSION['post-data']['q2'])){ if ($_SESSION['post-data']['q2'] == "5") {echo 'checked="checked"';}}?>>
                        <label class="networks-survey" for="networks_q2-5">5h par jour</label>
                      </li>
                      <li>
                        <input type="radio" class="networks-survey" id="networks_q2-6" name="q2" value="6" <?php if (!empty($_SESSION['post-data']['q2'])){ if ($_SESSION['post-data']['q2'] == "6") {echo 'checked="checked"';}}?>>
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
                          <input type="checkbox" class="networks-survey" id="networks_q3-1" name="q3[]" value="[1]" <?php if (isset($os)){ if (in_array("[1]", $os)) {echo 'checked';}}?>>
                          <label class="checkbox networks-survey" for="networks_q3-1">Pour passer le temps</label>
                        </li>
                        <li>
                          <input type="checkbox" class="networks-survey" id="networks_q3-2" name="q3[]" value="[2]" <?php if (isset($os)){ if (in_array("[2]", $os)) {echo 'checked';}}?>>
                          <label class="checkbox networks-survey" for="networks_q3-2">Pour rechercher une information</label>
                        </li>
                        <li>
                          <input type="checkbox" class="networks-survey" id="networks_q3-3" name="q3[]" value="[3]" <?php if (isset($os)){ if (in_array("[3]", $os)) {echo 'checked';}}?>>
                          <label class="checkbox networks-survey" for="networks_q3-3">Pour faire de la publicité pour mon profil/ma page</label>
                        </li>
                        <li>
                          <input type="checkbox" class="networks-survey" id="networks_q3-4" name="q3[]" value="[4]" <?php if (isset($os)){ if (in_array("[4]", $os)) {echo 'checked';}}?>>
                          <label class="checkbox networks-survey" for="networks_q3-4">Pour être au courant des dernières tendances</label>
                        </li>
                        <li>
                          <input type="checkbox" class="other__choice networks-survey" id="networks_q3-5" name="q3[]" value="" <?php if (isset($os)){ if (in_array("[5]", $os)) {echo 'checked';}}?>>
                          <label class="checkbox networks-survey other__choice--label" for="networks_q3-5">Autre :
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
                            <input type="radio" class="networks-survey" id="networks_q4-1" name="q4" value="1" <?php if (!empty($_SESSION['post-data']['q4'])){ if ($_SESSION['post-data']['q4'] == "1") {echo 'checked="checked"';}} ?>>
                            <label class="networks-survey" for="networks_q4-1">Tout le temps</label>
                          </li>
                          <li>
                            <input type="radio" class="networks-survey" id="networks_q4-2" name="q4" value="2" <?php if (!empty($_SESSION['post-data']['q4'])){ if ($_SESSION['post-data']['q4'] == "2") {echo 'checked="checked"';}} ?>>
                            <label class="networks-survey" for="networks_q4-2">Très souvent</label>
                          </li>
                          <li>
                            <input type="radio" class="networks-survey" id="networks_q4-3" name="q4" value="3" <?php if (!empty($_SESSION['post-data']['q4'])){ if ($_SESSION['post-data']['q4'] == "3") {echo 'checked="checked"';}} ?>>
                            <label class="networks-survey" for="networks_q4-3">Assez souvent</label>
                          </li>
                          <li>
                            <input type="radio" class="networks-survey" id="networks_q4-4" name="q4" value="4" <?php if (!empty($_SESSION['post-data']['q4'])){ if ($_SESSION['post-data']['q4'] == "4") {echo 'checked="checked"';}} ?>>
                            <label class="networks-survey" for="networks_q4-4">Peu souvent</label>
                          </li>
                          <li>
                            <input type="radio" class="networks-survey" id="networks_q4-5" name="q4" value="5" <?php if (!empty($_SESSION['post-data']['q4'])){ if ($_SESSION['post-data']['q4'] == "5") {echo 'checked="checked"';}} ?>>
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
                              <input type="checkbox" class="networks-survey" id="networks_q5-1" name="q5[]" value="[1]" <?php if (isset($os2)){ if (in_array("[1]", $os2)) {echo 'checked';}}?>>
                              <label class="checkbox networks-survey" for="networks_q5-1">Des articles que je trouve pertinents</label>
                            </li>
                            <li>
                              <input type="checkbox" class="networks-survey" id="networks_q5-2" name="q5[]" value="[2]" <?php if (isset($os2)){ if (in_array("[2]", $os2)) {echo 'checked';}}?>>
                              <label class="checkbox networks-survey" for="networks_q5-2">Des images/vidéos de moi/ ma famille/ mes amis</label>
                            </li>
                            <li>
                              <input type="checkbox" class="networks-survey" id="networks_q5-3" name="q5[]" value="[3]" <?php if (isset($os2)){ if (in_array("[3]", $os2)) {echo 'checked';}}?>>
                              <label class="checkbox networks-survey" for="networks_q5-3">Des annonces à vendre</label>
                            </li>
                            <li>
                              <input type="checkbox" class="networks-survey" id="networks_q5-4" name="q5[]" value="[4]" <?php if (isset($os2)){ if (in_array("[4]", $os2)) {echo 'checked';}}?>>
                              <label class="checkbox networks-survey" for="networks_q5-4">Rien</label>
                            </li>
                            <li>
                              <input type="checkbox" class="other__choice networks-survey" id="networks_q5-5" name="q5[]" value="" <?php if (isset($os2)){ if (in_array("[5]", $os2)) {echo 'checked';}}?>>
                              <label class="checkbox networks-survey other__choice--label" for="networks_q5-5">Autre :
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
                                <input type="checkbox" class="networks-survey" id="networks_q6-1" name="q6[]" value="[1]" <?php if (isset($os3)){ if (in_array("[1]", $os3)) {echo 'checked';}}?>>
                                <label class="checkbox networks-survey" for="networks_q6-1">Pour montrer ce que je fais</label>
                              </li>
                              <li>
                                <input type="checkbox" class="networks-survey" id="networks_q6-2" name="q6[]" value="[2]" <?php if (isset($os3)){ if (in_array("[2]", $os3)) {echo 'checked';}}?>>
                                <label class="checkbox networks-survey" for="networks_q6-2">Pour attirer plus de monde sur mes pages</label>
                              </li>
                              <li>
                                <input type="checkbox" class="networks-survey" id="networks_q6-3" name="q6[]" value="[3]" <?php if (isset($os3)){ if (in_array("[3]", $os3)) {echo 'checked';}}?>>
                                <label class="checkbox networks-survey" for="networks_q6-3">Pour gagner de l’argent</label>
                              </li>
                              <li>
                                <input type="checkbox" class="networks-survey" id="networks_q6-4" name="q6[]" value="[4]" <?php if (isset($os3)){ if (in_array("[4]", $os3)) {echo 'checked';}}?>>
                                <label class="checkbox networks-survey" for="networks_q6-4">Pour faire de la propagande sur un sujet</label>
                              </li>
                              <li>
                                <input type="checkbox" class="other__choice networks-survey" id="networks_q6-5" name="q6[]" value="" <?php if (isset($os3)){ if (in_array("[5]", $os3)) {echo 'checked';}}?>>
                                <label class="checkbox networks-survey other__choice--label" for="networks_q6-5">Autre :
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
                                  <input type="radio" class="networks-survey" id="networks_q7-1" name="q7" value="1" <?php if (!empty($_SESSION['post-data']['q7'])){ if ($_SESSION['post-data']['q7'] == "1") {echo 'checked="checked"';}}?>>
                                  <label class="networks-survey" for="networks_q7-1">Extrêmement important</label>
                                </li>
                                <li>
                                  <input type="radio" class="networks-survey" id="networks_q7-2" name="q7" value="2" <?php if (!empty($_SESSION['post-data']['q7'])){ if ($_SESSION['post-data']['q7'] == "2") {echo 'checked="checked"';}}?>>
                                  <label class="networks-survey" for="networks_q7-2">Très important</label>
                                </li>
                                <li>
                                  <input type="radio" class="networks-survey" id="networks_q7-3" name="q7" value="3" <?php if (!empty($_SESSION['post-data']['q7'])){ if ($_SESSION['post-data']['q7'] == "3") {echo 'checked="checked"';}}?>>
                                  <label class="networks-survey" for="networks_q7-3">Relativement important</label>
                                </li>
                                <li>
                                  <input type="radio" class="networks-survey" id="networks_q7-4" name="q7" value="4" <?php if (!empty($_SESSION['post-data']['q7'])){ if ($_SESSION['post-data']['q7'] == "4") {echo 'checked="checked"';}}?>>
                                  <label class="networks-survey" for="networks_q7-4">Pas très important</label>
                                </li>
                                <li>
                                  <input type="radio" class="networks-survey" id="networks_q7-5" name="q7" value="5" <?php if (!empty($_SESSION['post-data']['q7'])){ if ($_SESSION['post-data']['q7'] == "5") {echo 'checked="checked"';}}?>>
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
                                  <input type="radio" class="networks-survey" id="networks_q8-1" name="q8" value="1" <?php if (!empty($_SESSION['post-data']['q8'])){ if ($_SESSION['post-data']['q8'] == "1") {echo 'checked="checked"';}}?>>
                                  <label class="networks-survey" for="networks_q8-1">La totalité</label>
                                </li>
                                <li>
                                  <input type="radio" class="networks-survey" id="networks_q8-2" name="q8" value="2" <?php if (!empty($_SESSION['post-data']['q8'])){ if ($_SESSION['post-data']['q8'] == "2") {echo 'checked="checked"';}}?>>
                                  <label class="networks-survey" for="networks_q8-2">La majorité</label>
                                </li>
                                <li>
                                  <input type="radio" class="networks-survey" id="networks_q8-3" name="q8" value="3" <?php if (!empty($_SESSION['post-data']['q8'])){ if ($_SESSION['post-data']['q8'] == "3") {echo 'checked="checked"';}}?>>
                                  <label class="networks-survey" for="networks_q8-3">Approximativement la moitié</label>
                                </li>
                                <li>
                                  <input type="radio" class="networks-survey" id="networks_q8-4" name="q8" value="4" <?php if (!empty($_SESSION['post-data']['q8'])){ if ($_SESSION['post-data']['q8'] == "4") {echo 'checked="checked"';}}?>>
                                  <label class="networks-survey" for="networks_q8-4">Quelques-uns</label>
                                </li>
                                <li>
                                  <input type="radio" class="networks-survey" id="networks_q8-5" name="q8" value="5" <?php if (!empty($_SESSION['post-data']['q8'])){ if ($_SESSION['post-data']['q8'] == "5") {echo 'checked="checked"';}}?>>
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
                                <h2 class="subtitle-question networks-survey">Lorsque tu es sur les réseaux sociaux, combien de temps passes-tu à regarder ce que te srelations ont posté ?</h2>
                              </div>
                              <ul class="answers">
                                <li>
                                  <input type="radio" class="networks-survey" id="networks_q9-1" name="q9" value="1" <?php if (!empty($_SESSION['post-data']['q9'])){ if ($_SESSION['post-data']['q9'] == "1") {echo 'checked="checked"';}}?>>
                                  <label class="networks-survey" for="networks_q9-1">La totalité du temps</label>
                                </li>
                                <li>
                                  <input type="radio" class="networks-survey" id="networks_q9-2" name="q9" value="2" <?php if (!empty($_SESSION['post-data']['q9'])){ if ($_SESSION['post-data']['q9'] == "2") {echo 'checked="checked"';}}?>>
                                  <label class="networks-survey" for="networks_q9-2">La plus grande partie du temps</label>
                                </li>
                                <li>
                                  <input type="radio" class="networks-survey" id="networks_q9-3" name="q9" value="3" <?php if (!empty($_SESSION['post-data']['q9'])){ if ($_SESSION['post-data']['q9'] == "3") {echo 'checked="checked"';}}?>>
                                  <label class="networks-survey" for="networks_q9-3">A peu près la moitié du temps</label>
                                </li>
                                <li>
                                  <input type="radio" class="networks-survey" id="networks_q9-4" name="q9" value="4" <?php if (!empty($_SESSION['post-data']['q9'])){ if ($_SESSION['post-data']['q9'] == "4") {echo 'checked="checked"';}}?>>
                                  <label class="networks-survey" for="networks_q9-4">Une petite partie du temps</label>
                                </li>
                                <li>
                                  <input type="radio" class="networks-survey" id="networks_q9-5" name="q9" value="5" <?php if (!empty($_SESSION['post-data']['q9'])){ if ($_SESSION['post-data']['q9'] == "5") {echo 'checked="checked"';}}?>>
                                  <label class="networks-survey" for="networks_q9-5">Aucun temps</label>
                                </li>
                              </ul>
                              <div class="btn-swiper btn-full-bottom networks-survey">
                                <input type="hidden" name="ip_adress" id="ip_adress" value="<?php echo $_SERVER['REMOTE_ADDR'] ?>" />
                                <input type="submit" name="submit__survey--networks" class="btn-full-bottom networks-survey submit-survey" />
                              </div>
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
                  allowTouchMove: true

                });



              </script>
            </body>

            </html>



