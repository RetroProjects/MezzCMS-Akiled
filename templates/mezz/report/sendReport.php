<form action="" method="POST">

<?php 
User::CreateReport();

$getReport = $dbh->prepare("SELECT * FROM cms_reports WHERE id = :id");
$getReport->bindParam(':id', $_SESSION['id']);
$getReport->execute();
$report = $getReport->fetch(); 
?>

<div class="page-content-collider-content-settings-right-side" style="width: 800px; border: solid 1px grey;">

  <input type="hidden" id="content" name="author" value="<?php echo User::userData("username") ?>">

  <div class="page-content-collider-content-settings-right-side-item">
    <div class="page-content-collider-content-settings-right-side-item-column">
      <h3 class="page-content-collider-content-settings-right-side-item-title"><?= $lang["TitutloReport"] ?>:</h3>
      <input type="text" name="title" id="report" class="page-content-collider-content-settings-right-side-item-input" placeholder="Título del Report">
      <p class="page-content-collider-content-settings-right-side-item-description"><?= $lang["Descriporeport"] ?></p>
    </div>
  </div>

  <div class="page-content-collider-content-settings-right-side-item">
    <div class="page-content-collider-content-settings-right-side-item-column">
      <h3 class="page-content-collider-content-settings-right-side-item-title"><?= $lang["TituloReportCategoria"] ?></h3>
        <select name="category" id="report" class="page-content-collider-content-settings-right-side-item-input">
              <option class="page-content-collider-content-settings-right-side-item-input" <?php if ($report['category'] == "Problema tecnico") echo 'selected'; ?> value="Problema tecnico"><?= $lang["ReportOption1"] ?>
              </option>
              <option class="page-content-collider-content-settings-right-side-item-input" <?php if ($report['category'] == "Problema en la tienda") echo 'selected'; ?> value="Problema en la tienda"><?= $lang["ReportOption1"] ?></option>
              <option class="page-content-collider-content-settings-right-side-item-input" <?php if ($report['category'] == "Problema de Moderación") echo 'selected'; ?> value="Problema de Moderación"><?= $lang["ReportOption2"] ?></option>
              <option class="page-content-collider-content-settings-right-side-item-input" <?php if ($report['category'] == "Problema con los furnis") echo 'selected'; ?> value="Problema con los furnis"><?= $lang["ReportOption3"] ?></option>
              <option class="page-content-collider-content-settings-right-side-item-input" <?php if ($report['category'] == "Furnis faltantes") echo 'selected'; ?> value="Furnis faltantes"><?= $lang["ReportOption4"] ?></option>
              <option class="page-content-collider-content-settings-right-side-item-input" <?php if ($report['category'] == "Reportar un Staff") echo 'selected'; ?> value="Reportar un Staff"><?= $lang["ReportOption5"] ?></option>
              <option class="page-content-collider-content-settings-right-side-item-input" <?php if ($report['category'] == "Sugerencias") echo 'selected'; ?> value="Sugerencias"><?= $lang["ReportOption6"] ?></option>
        </select>
        <p class="page-content-collider-content-settings-right-side-item-description"><?= $lang["ReportDescOptions"] ?></p>
    </div>
  </div>

  <div class="page-content-collider-content-settings-right-side-item">
    <div class="page-content-collider-content-settings-right-side-item-column">
      <h3 class="page-content-collider-content-settings-right-side-item-title"><?= $lang["ReportTituloComent"] ?></h3>
        <textarea type="text" name="problem" id="report" class="page-content-collider-content-settings-right-side-item-input" placeholder="<?= $lang["ReportTituloComent"] ?>"></textarea>
        <p class="page-content-collider-content-settings-right-side-item-description"><?= $lang["ReportDescDetail"] ?></p>
    </div>
  </div>

    <button type="submit" name="report" id="report" autocomplete="off" class="page-content-collider-content-settings-right-side-default-button fill save" style="float:right;"><?= $lang["SettingsButton"] ?></button>

</div>

</form>