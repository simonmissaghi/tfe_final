<?php

//Total réponses Networks survey
$prepareTotalAnswersNetworks = $connection->prepare("SELECT COUNT(id) AS total_answers FROM networks_survey");
$prepareTotalAnswersNetworks->execute();
$roww = $prepareTotalAnswersNetworks->fetch();
$totalAnswersNetworks = $roww['total_answers'];


//Total réponses Apps survey
$prepareTotalAnswersApps = $connection->prepare("SELECT COUNT(id) AS total_answers FROM apps_survey");
$prepareTotalAnswersApps->execute();
$roww = $prepareTotalAnswersApps->fetch();
$totalAnswersApps = $roww['total_answers'];


//Total réponses Smartphones survey
$prepareTotalAnswersSmartphones = $connection->prepare("SELECT COUNT(id) AS total_answers FROM smartphones_survey");
$prepareTotalAnswersSmartphones->execute();
$roww = $prepareTotalAnswersSmartphones->fetch();
$totalAnswersSmartphones = $roww['total_answers'];


//Total % Filles  smartphones
$preparePercentWomanSmartphones = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "2") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$preparePercentWomanSmartphones->execute();
$rowpercentWomanSmartphones = $preparePercentWomanSmartphones->fetch();
$percentWomanSmartphones = $rowpercentWomanSmartphones['pourcentage'];

//Total % filles apps
$preparePercentWomanApps = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "2") * 100 /
  (SELECT COUNT(*) FROM apps_survey) AS pourcentage
  FROM apps_survey');
$preparePercentWomanApps->execute();
$rowpercentWomanApps = $preparePercentWomanApps->fetch();
$percentWomanApps = $rowpercentWomanApps['pourcentage'];


//Total % filles networks
$preparePercentWomanNetworks = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "2") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$preparePercentWomanNetworks->execute();
$rowpercentWomanNetworks = $preparePercentWomanNetworks->fetch();
$percentWomanNetworks = $rowpercentWomanNetworks['pourcentage'];


//Total % homme  smartphones
$preparePercentManSmartphones = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM smartphones_survey WHERE gender = "1") * 100 /
  (SELECT COUNT(*) FROM smartphones_survey) AS pourcentage
  FROM smartphones_survey');
$preparePercentManSmartphones->execute();
$rowpercentManSmartphones = $preparePercentManSmartphones->fetch();
$percentManSmartphones = $rowpercentManSmartphones['pourcentage'];

//Total % homme apps
$preparePercentManApps = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM apps_survey WHERE gender = "1") * 100 /
  (SELECT COUNT(*) FROM apps_survey) AS pourcentage
  FROM apps_survey');
$preparePercentManApps->execute();
$rowpercentManApps = $preparePercentManApps->fetch();
$percentManApps = $rowpercentManApps['pourcentage'];


//Total % homme networks
$preparePercentManNetworks = $connection->prepare('SELECT
  (SELECT COUNT(*) FROM networks_survey WHERE gender = "1") * 100 /
  (SELECT COUNT(*) FROM networks_survey) AS pourcentage
  FROM networks_survey');
$preparePercentManNetworks->execute();
$rowpercentManNetworks = $preparePercentManNetworks->fetch();
$percentManNetworks = $rowpercentManNetworks['pourcentage'];



$totalPercentMan = ($percentManNetworks + $percentManApps + $percentManSmartphones) / 3;
$totalPercentWoman = ($percentWomanNetworks + $percentWomanApps + $percentWomanSmartphones) / 3;
$totalAnswersAll = $totalAnswersNetworks + $totalAnswersApps + $totalAnswersSmartphones;

?>
