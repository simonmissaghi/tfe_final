    <?php
    $articlePerPage = 5;

    $articleTotalReq = $connection->prepare('SELECT COUNT(*) AS articleTotal FROM temoignages');
    $articleTotalReq->execute();
    $rowarticleTotalReq = $articleTotalReq->fetch();
    $articleTotal = $rowarticleTotalReq['articleTotal'];

    $totalPages = ceil($articleTotal/$articlePerPage);
    $search = "";

    if (isset($_GET['page']) AND !empty($_GET['page'])) {
     $_GET['page'] = intval($_GET['page']);

     $currentPage = $_GET['page'];
 }
 else{
    $currentPage = 1;
}
$start = ($currentPage - 1) * $articlePerPage;


$preparedStatement = $connection->prepare('SELECT id, prenom, studies, title_subject, subject, sexe, age, date_publi, statut, img FROM temoignages WHERE id LIKE :id OR prenom LIKE :prenom OR studies LIKE :studies OR title_subject LIKE :title_subject OR subject LIKE :subject OR sexe LIKE :sexe OR age LIKE :age OR date_publi LIKE :date_publi OR statut LIKE :statut OR img LIKE :img ORDER BY date_publi DESC LIMIT '.$start.','.$articlePerPage.'');
$preparedStatement->execute(array(
    'id' => $search.'%',
    'prenom' => $search.'%',
    'studies' => $search.'%',
    'title_subject' => $search.'%',
    'subject' => $search.'%',
    'sexe' => $search.'%',
    'age' => $search.'%',
    'date_publi' => $search.'%',
    'statut' => $search.'%',
    'img' => $search.'%'
));


$results = $preparedStatement->fetchAll();
?>
<?php

$k = array_rand($results);
$v = $results[$k];

?>
<?php foreach($results as $result): ?>
<?php endforeach; ?>

