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
    $ipErr = "Vous avez déjà rempli ce formulaire ! Pourquoi ne pas répondre à un autre ?";
  }
  elseif(empty($_POST['gender']) || empty($_POST['age']) || empty($_POST['q1']) || empty($_POST['q2']) || empty($_POST['q4']) || empty($_POST['q5']) || empty($_POST['q6']) || empty($_POST['q7'])) {
    $questionErr = "Vous avez oublié une ou plusieurs questions...";
  }

  else {
    $preparedstatement = $connection->prepare('INSERT INTO smartphones_survey
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
<html class="page-surveys page-single-survey" lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" href="css/swiper.css">
  <title>Smartphones - Sondage</title>
</head>
<body>
  <header>
    <img class="logo" src="images/logo_trustinme.svg" alt="logo" />
  </header>
  <main>
    <div class="alert alert-danger"><?php echo $ipErr; ?></div>
    <div class="alert alert-danger"><?php echo $questionErr; ?></div>
    <form action="" method="POST">
      <div class="swiper-container">
        <h1 class="title-survey">Les smartphones</h1>
        <div class="swiper-wrapper">


          <!-- Question préambule -->


          <div class="swiper-slide">
            <div class="question-wrapper question-wrapper-intro">
              <div class="question">
                <h2 class="title-question">Qui es-tu ?</h2>
                <p>Les sondages sont destinés à la génération Z (1995-2012). Ils sont tous anonymes.</p>
              </div>
              <ul class="answers">
                <li class="answers-intro">
                  <input type="radio" id="1" name="gender" value="1">
                  <label class="genre male" for="1">homme</label>
                </li>
                <li class="answers-intro">
                  <input type="radio" id="2" name="gender" value="2">
                  <label class="genre female" for="2">femme</label>
                </li>
                <li class="answers-intro">
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
            <div class="question-wrapper">
              <div class="question">Quelle est la probabilité que tu achètes le nouveau smartphone, malgré que ton actuel fonctionne bien ?</div>
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
              <button class="btn-next swiper-button-next">Suivant</button>
            </div>
          </div>

          <!-- Question 2 -->
          <div class="swiper-slide">
            <div class="question-wrapper">
              <div class="question">Sur un nouveau smartphone, à quel point êtes-vous intéressé par l’aspect technologique du produit ?</div>
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
              <button class="btn-next swiper-button-next">Suivant</button>
            </div>
          </div>


          <!-- Question 3 -->
          <div class="swiper-slide">
            <div class="question-wrapper">
              <div class="question">Si vous achetez un nouveau smartphone, c’est pour : </div>
              <ul class="answers">
                <li>
                  <input type="radio" id="sm_q3-1" name="q3" value="1">
                  <label for="sm_q3-1">ses nouvelles technologies</label>
                </li>
                <li>
                  <input type="radio" id="sm_q3-2" name="q3" value="2">
                  <label for="sm_q3-2">ses performances (processeur, …)</label>
                </li>
                <li>
                  <input type="radio" id="sm_q3-3" name="q3" value="3">
                  <label for="sm_q3-3">son côté esthétique</label>
                </li>
                <li>
                  <input type="radio" id="sm_q3-4" name="q3" value="4">
                  <label for="sm_q3-4">son côté pratique</label>
                </li>
                <li>
                  <input type="radio" id="sm_q3-5" name="q3" value="5">
                  <label for="sm_q3-5">parce que vous en avez besoin</label>
                </li>
                <li>
                  <input type="radio" class="other__choice" id="sm_q3-6" name="q3" value="">
                  <label class="other__choice--label" for="sm_q3-6">autre : <input type="text" class="other__choice--text" id="sm_q3-6" name="q3b" value="" onchange="changeradioother()"></label>
                </li>
              </ul>
              <button class="btn-next swiper-button-next">Suivant</button>
            </div>
          </div>


          <!-- Question 4 -->
          <div class="swiper-slide">
            <div class="question-wrapper">
              <div class="question">Quelle est la probabilité pour que vous vous passiez de votre smartphone une journée entière ?</div>
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
              <button class="btn-next swiper-button-next">Suivant</button>
            </div>
          </div>


          <!-- Question 5 -->
          <div class="swiper-slide">
            <div class="question-wrapper">
              <div class="question">Quelle est l’importance pour vous d’avoir accès à internet partout avec votre smartphone ?</div>
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
              <button class="btn-next swiper-button-next">Suivant</button>
            </div>
          </div>


          <!-- Question 6 -->
          <div class="swiper-slide">
            <div class="question-wrapper">
              <div class="question">Quelle est l’importance pour vous d’avoir accès aux outils de développeur sur votre smartphone ?</div>
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
              <button class="btn-next swiper-button-next">Suivant</button>
            </div>
          </div>


          <!-- Question 7 -->
          <div class="swiper-slide">
            <div class="question-wrapper">
              <div class="question">Quelle est pour vous la probabilité que les smartphones soient sources de manque de contacts en temps réel entre humains ?</div>
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
              <input type="submit" name="submit__survey--sm" class="btn-next submit-survey">Terminer</button>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

      <!-- Add Pagination -->

      <!-- Add Arrows -->
<!--     <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div> -->

</form>
</main>
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
