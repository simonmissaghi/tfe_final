<?php
$prepareTotalAnswersNetworks = $connection->prepare("SELECT COUNT(id) AS total_answers FROM networks_survey");
$prepareTotalAnswersNetworks->execute();
$roww = $prepareTotalAnswersNetworks->fetch();
$totalAnswersNetworks = $roww['total_answers'];

$prepareTotalAnswersApps = $connection->prepare("SELECT COUNT(id) AS total_answers FROM apps_survey");
$prepareTotalAnswersApps->execute();
$roww = $prepareTotalAnswersApps->fetch();
$totalAnswersApps = $roww['total_answers'];

$prepareTotalAnswersSmartphones = $connection->prepare("SELECT COUNT(id) AS total_answers FROM smartphones_survey");
$prepareTotalAnswersSmartphones->execute();
$roww = $prepareTotalAnswersSmartphones->fetch();
$totalAnswersSmartphones = $roww['total_answers'];

$totalAnswersAll = $totalAnswersNetworks + $totalAnswersApps + $totalAnswersSmartphones;

var_dump($totalAnswersAll);
?>
