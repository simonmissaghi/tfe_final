<?php include('./php/insert_temoignage.php'); ?>
<div class="alert-danger">
  <?php echo $prenomErr; ?>
  <?php echo $titleErr; ?>
  <?php echo $subjectErr; ?>
  <?php echo $sexeErr; ?>
  <?php echo $ageErr; ?>
</div>
<form action="#" method="POST" class="form-temoignage" enctype="multipart/form-data">
  <label for="prenom"><input type="text" name="prenom" id="prenom" placeholder="Prénom" class="focus-input" /></label>
  <div class="wrapper-sm-input">
    <label for="age" class="age-temoignage">
      <select name="age" id="age" class="temoignage">
        <option value="">Age</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
      </select>
    </label>
    <div class="radio-btn">
      <input type="radio" id="m" name="sexe" value="M" /><label for="m" class="wrapper-radio-btn">M</label>
      <input type="radio" id="f" name="sexe" value="F" /><label for="f" class="wrapper-radio-btn">F</label>
    </div>
  </div>
  <label for="studies"><input type="text" placeholder="Etudes/Profession" name="studies" id="studies"/></label>
  <label for="title_subject" class="accroche">
    <input type="text" placeholder="Titre" name="title_subject" id="title_subject" />
  </label>
  <textarea placeholder="Témoignage" name="subject" id="editor"></textarea>
  <input type="hidden" name="MAX_FILE_SIZE" value="1054854" />
  <input type="file" name="img" id="img" />
  <input type="hidden" />
  <input type="submit" name="btn_submit--temoignage" value="Envoyer" />
</form>
<script src="javascript/ckeditor/ckeditor.js"></script>
<script>

  CKEDITOR.replace( 'editor',  {
    format_tags: 'p;h1;h2;pre;div',

  });
</script>
