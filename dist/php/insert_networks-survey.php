<?php
include ("./php/connection.php");
include ("./php/function.php");
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
  header('refresh:2;url='.$previousPage);
}

if (!empty($_POST['submit__survey--networks'])) {
  $_SESSION['post-data'] = $_POST;
  $os = $_SESSION['post-data']['q3'];
  $os2 = $_SESSION['post-data']['q5'];
  $os3 = $_SESSION['post-data']['q6'];


  if(empty($_POST['gender']) || empty($_POST['age']) || empty($_POST['q1']) || empty($_POST['q2']) || empty($_POST['q3']) || empty($_POST['q4']) || empty($_POST['q5']) || empty($_POST['q6']) || empty($_POST['q7']) || empty($_POST['q8']) || empty($_POST['q9'])) {
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

if(!empty($_POST['submit__survey--apps-nosocial'])) {


  if(isset($_POST['q1'])) {
    if(($_POST['q1'] == '2') && !empty($_POST['gender']) && !empty($_POST['age'])) {
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
  }

}

?>
