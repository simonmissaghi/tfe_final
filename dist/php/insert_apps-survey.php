<?php
include ("./php/connection.php");
include ("./php/function.php");
$adressip = $_SERVER["REMOTE_ADDR"];
$prepareip = $connection->prepare("SELECT COUNT(*) AS ip_adress FROM apps_survey WHERE ip_adress = '$adressip'");
$prepareip->execute();
$roww = $prepareip->fetch();
$ip_final = $roww['ip_adress'];
$ipErr = "";
$questionErr = "";
if($ip_final != 0) {
  $ipErr = "Tu as déjà rempli ce formulaire ! Pourquoi ne pas répondre à un autre ?";
  header('refresh:2;url='.$previousPage);
}
if (!empty($_POST['submit__survey--apps'])) {

  $_SESSION['post-data'] = $_POST;
  $os = $_SESSION['post-data']['q1'];

  if(empty($_POST['gender']) || empty($_POST['age']) || empty($_POST['q1']) || empty($_POST['q2']) || empty($_POST['q4'])) {
    $questionErr = "Tu as oublié une ou plusieurs questions...";
  }

  else {
    $preparedstatement = $connection->prepare('INSERT INTO apps_survey
      (
      gender,
      age,
      q1,
      q2,
      q3,
      q4,
      ip_adress
      )
      VALUES (
      :gender,
      :age,
      :q1,
      :q2,
      :q3,
      :q4,
      :ip_adress
    )');
    $gender = strip_tags($_POST['gender']);
    $age = strip_tags($_POST['age']);
    $q1 = strip_tags(implode(',', $_POST['q1']));
    $q2 = strip_tags($_POST['q2']);
    $q3 = strip_tags($_POST['q3']);
    $q4 = strip_tags($_POST['q4']);
    $ip_adress = strip_tags($_POST['ip_adress']);
    $preparedstatement ->execute(array(
      'gender' => $gender,
      'age' => $age,
      'q1' => $q1,
      'q2' => $q2,
      'q3' => $q3,
      'q4' => $q4,
      'ip_adress' => $ip_adress
    ));
    session_destroy();
    unset($_SESSION['post-data']);
    header("Location: redirection_apps-survey.php");
    exit();
  }
}

?>
