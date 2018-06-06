<?php include ('./php/select_temoignage.php'); ?>


<ul class="vignettes-temoignages">
<?php foreach(array_slice($results, 0, 2) as $k => $vSingle): ?>
    <?php if($vSingle['statut'] == 'OK') { ?>
    <li class="container-single-temoignage single-temoignage-public">
      <div class="header" style="background-image: url('<?php echo $vSingle['img']?>')"></div>
      <div class="body">
        <h2><?php echo $vSingle["prenom"] ?>
        </h2>
        <span class="date"><?php echo $vSingle["date_publi"] ?></span>
        <div class="title-single--temoignage"><?php echo $vSingle["title_subject"] ?></div>
        <div class="txt-body"><?php echo make_summary($vSingle["subject"], 200) ?>
          <a class="links-temoignage--el" href="./fullstorie.php?id=<?php echo $vSingle["id"] ?>">Lire en entier</a>
        </div>
      </div>
      <div class="footer">
        <span class="author">Posté par <?php echo $vSingle["prenom"] ?></span>
        <a href="./php/like.php?id=<?php echo $vSingle["id"];?>" class="likes"><?php echo $vSingle["likes"] ?></a>
      </div>
    </li>
    <?php } ?>
  <?php endforeach; ?>
</ul>
