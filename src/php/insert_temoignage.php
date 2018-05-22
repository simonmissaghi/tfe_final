<?php
include ('./php/connection.php');

$prenomErr = $titleErr = $subjectErr = $sexeErr = $ageErr = "";


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
  elseif(empty($_POST['studies'])) {
    $prenomErr = "Il faut rentrer ton domaine";
  }
  elseif(empty($_POST['title_subject'])) {
    $titleErr = "Il faut rentrer un titre";
  }
  elseif(empty($_POST['subject'])){
    $subjectErr = "Il faut écrire un témoignage";
  }
  elseif( empty($_POST['sexe'])) {
    $sexeErr = "Il faut rentrer ton genre";
  }
  elseif( empty($_POST['age'])) {
    $ageErr = "Tu dois rentrer ton age";
  }
  elseif(!empty($_POST['hidd'])) {
    echo "tu es un robot";
  }
  else {


    $_FILES['img']['name'];
    $_FILES['img']['type'];
    $_FILES['img']['size'];
    $_FILES['img']['tmp_name'];
    $_FILES['img']['error'];


    $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
    $extension_upload = strtolower(  substr(  strrchr($_FILES['img']['name'], '.')  ,1)  );
    if ( in_array($extension_upload,$extensions_valides) ) echo "Extension correcte";
    if(isset($_FILES['img'])){
      $target_dir = "./uploads/";
      $uniqName = uniqid();
      $target_file = $target_dir . basename($uniqName. '.' .$extension_upload);
    }
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
// Check file size
    if ($_FILES["img"]["size"] > 5000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }


    if ($_FILES['img']['error'] > 0) $erreur = "Erreur lors du transfert";

    $resultat = move_uploaded_file($_FILES['img']['tmp_name'],$target_file);
    if ($resultat) {echo "Transfert réussi";}else {
      echo "erreur";
    }
    var_dump($_FILES);
    $preparedStatement = $connection->prepare('INSERT INTO temoignages
      (
      prenom,
      title_subject,
      subject,
      sexe,
      age,
      studies,
      date_publi,
      statut,
      img

      )
      VALUES (
      :prenom,
      :title_subject,
      :subject,
      :sexe,
      :age,
      :studies,
      :date_publi,
      :statut,
      :img)');

    $date = date("Y.m.d");
    $prenom =  strip_tags($_POST['prenom']);
    $title_subject =  strip_tags($_POST['title_subject']);
    $subject =  strip_tags($_POST['subject']);
    $sexe =  strip_tags($_POST['sexe']);
    $age =  strip_tags($_POST['age']);
    $studies =  strip_tags($_POST['studies']);
    $date_publi = $date;
    $statut = "pending";
    if(isset($_FILES['img'])){
      $img = $target_file;
    }else {
      $img = "";
    }

    $preparedStatement->execute(array(
      'prenom' => $prenom,
      'title_subject' => $title_subject,
      'subject' => $subject,
      'sexe' => $sexe,
      'age' => $age,
      'studies' => $studies,
      'date_publi' => $date_publi,
      'statut' => $statut,
      'img' => $img
    ));
  }
}

?>
