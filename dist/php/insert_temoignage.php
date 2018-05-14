<?php
include ('./php/connection.php');
include ('./php/function.php');

$prenomErr = $titleErr = $subjectErr = "";


if(!empty($_POST['btn_submit--temoignage'])){
  if(empty($_POST['prenom'])) {
    $prenomErr = "Il faut rentrer un prénom";
  }
  elseif(strlen($_POST['prenom']) > 25 ) {
    $prenomErr = "Il faut maximum 25 caractères";
  }
  elseif(strlen($_POST['prenom']) < 3 ) {
    $prenomErr = "Il faut minimum 3 caractères";
  }
  elseif(empty($_POST['title_subject'])) {
    $titleErr = "Il faut rentrer un titre";
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
    echo "tu es un robot";
  }
  else {
    $preparedStatement = $connection->prepare('INSERT INTO temoignages
      (
      prenom,
      title_subject,
      subject,
      sexe,
      age,
      studies,
      date_publi,
      statut

      )
      VALUES (
      :prenom,
      :title_subject,
      :subject,
      :sexe,
      :age,
      :studies,
      :date_publi,
      :statut)');

    $date = date("Y.m.d");
    $prenom =  strip_tags($_POST['prenom']);
    $title_subject =  strip_tags($_POST['title_subject']);
    $subject =  strip_tags($_POST['subject']);
    $sexe =  strip_tags($_POST['sexe']);
    $age =  strip_tags($_POST['age']);
    $studies =  strip_tags($_POST['studies']);
    $date_publi = $date;
    $statut = "pending";

    $preparedStatement->execute(array(
      'prenom' => $prenom,
      'title_subject' => $title_subject,
      'subject' => $subject,
      'sexe' => $sexe,
      'age' => $age,
      'studies' => $studies,
      'date_publi' => $date_publi,
      'statut' => $statut
    ));


    // header("Location: list__temoignages.php");
    // exit();
  }
}

?>
