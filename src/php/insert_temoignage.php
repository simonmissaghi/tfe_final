<?php $pseudoErr = $titleErr = $subjectErr = "";
function mot_captcha() {
  $list = array('genz', 'genx', 'geny', 'typo');
  return $list[array_rand($list)];
}

function captcha() {
  $mot = mot_captcha();
  $_SESSION['captcha'] = $mot;
  return $mot;
}




if(!empty($_POST['btn_submit'])){
  if(empty($_POST['pseudo'])) {
    $pseudoErr = "Il te faut un pseudo";
  }
  elseif(strlen($_POST['pseudo']) > 25 ) {
    $pseudoErr = "Il faut maximum 25 caractères";
  }
  elseif(strlen($_POST['pseudo']) < 3 ) {
    $pseudoErr = "Il faut minimum 3 caractères";
  }
  elseif(empty($_POST['title_subject'])) {
    $titleErr = "Ecris un titre";
  }
  elseif(empty($_POST['subject'])){
    $subjectErr = "Ben faut écrire ton témoignage...";
  }
  elseif( $_POST['sexe'] == '0') {
    echo "Tu es hermaphrodite ?";
  }
  elseif( $_POST['age'] == '0') {
    echo "Tu es trop petit pour écrire";
  }
  elseif(!empty($_POST['hidd'])) {

  }
  elseif( $_POST['captcha'] != $_SESSION['captcha']) {
    echo "Tu es un robot ?";
  }
  else {
    $preparedStatement = $connection->prepare('INSERT INTO temoignages
      (
      pseudo,
      title_subject,
      subject,
      sexe,
      age,
      studies,
      date_publi,
      statut

      )
      VALUES (
      :pseudo,
      :title_subject,
      :subject,
      :sexe,
      :age,
      :studies,
      :date_publi,
      :statut)');

    $date = date("Y.m.d");
    $pseudo =  strip_tags($_POST['pseudo']);
    $title_subject =  strip_tags($_POST['title_subject']);
    $subject =  strip_tags($_POST['subject']);
    $sexe =  strip_tags($_POST['sexe']);
    $age =  strip_tags($_POST['age']);
    $studies =  strip_tags($_POST['studies']);
    $date_publi = $date;
    $statut = "pending";
    $mot_captcha =  strip_tags($_POST['captcha']);

    $preparedStatement->execute(array(
      'pseudo' => $pseudo,
      'title_subject' => $title_subject,
      'subject' => $subject,
      'sexe' => $sexe,
      'age' => $age,
      'studies' => $studies,
      'date_publi' => $date_publi,
      'statut' => $statut
    ));


    header("Location: index_main.php");
    exit();
  }
}

?>
