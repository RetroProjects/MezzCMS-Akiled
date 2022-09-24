<div class="page-content-collider-content-news-right-side">
  <div class="page-content-collider-content-news-right-side-content">

    <?php
      if (empty($_GET['id'])) {
    ?>

    <h2 class="page-content-collider-content-news-right-side-content-title"><?= $lang["Nnotfoundheader"] ?> »</h2>
    <p><?= $lang["Nnotfoundtxt"] ?></p>

    <?php } ?>

    <?php
      if (!is_numeric($_GET['id'])) {
        exit('Nothing!');
      }

      $news = $dbh->prepare("SELECT id,title,category,problem,state,staff,time FROM cms_reports WHERE id = :newsid");
      $news->bindParam(':newsid', $_GET['id']);
      $news->execute();
      $user = $dbh->prepare("SELECT * FROM users JOIN cms_reports ON users.username = cms_reports.author");
      $user->execute();

      $user2 = $user->fetch();
        if ($news->RowCount() == 1) {
          while ($news2 = $news->fetch()) {
    ?>

      <?php include_once("getButtons.php"); ?>

    <h2 class="page-content-collider-content-news-right-side-content-title"><?= $lang["ReportTituloGet"] ?>: <?php echo filter($news2["title"]); ?></h2>

    <p><b><?= $lang["Reportcatetorias1get"] ?>: </b><?php echo filter($news2['category']); ?></p>
    <p><b><?= $lang["Reportcatetorias2get"] ?>: </b><?php echo filter($news2['problem']); ?></p>
    <p><b><?= $lang["Reportcatetorias3get"] ?>: </b><?php echo date('d/m/Y H:i:s', $news2['time']); ?></p>
    <p><b><?= $lang["Reportcatetorias4get"] ?>: </b><?php echo filter($news2['staff']); ?></p>

    <div class="page-content-collider-content-news-right-side-content-article-author">
      <span class="page-content-collider-content-news-right-side-content-article-author-figure" style="background-image: url(<?php echo $config['AvatarURL'] ?><?php echo filter($user2["look"]) ?>&action=std&direction=2&head_direction=3&img_format=undefined&gesture=sml&headonly=0&size=b);"></span>
      <a href="/profile/<?php echo filter($user2["username"]); ?>" class="page-content-collider-content-news-right-side-content-article-author-username">
        <?php echo filter($user2["username"]); ?>
      </a>
    </div>

    <?php
      }
      } else {
    ?>

    <h2 class="page-content-collider-content-news-right-side-content-title"><?= $lang["Reportnotfoundget"] ?> »</h2>
    <p><?= $lang["Reportnotexistget"] ?></p>

    <?php
      }
    ?>
  </div>

<div class="page-content-collider-content-news-right-side-content">

  <?php
    $idpage = $_GET['id'];
    $getArticles = $dbh->prepare("SELECT * FROM cms_reports_newquestion WHERE report_id = $idpage");
    $getArticles->execute();
  while ($news = $getArticles->fetch()) {
  ?>

  <h2 class="page-content-collider-content-news-right-side-content-title" style="margin-top: 30px;"><?= $lang["Reportnewquestget"] ?></h2>

  <p><b><?= $lang["Reportquest1get"] ?>: </b><?php echo filter($news['question']); ?></p>
  <p><b><?= $lang["Reportdateresponseget"] ?>: </b><?php echo date('d/m/Y H:i:s', $news['time']); ?></p>

  <div class="page-content-collider-content-news-right-side-content-article-author">
    <span class="page-content-collider-content-news-right-side-content-article-author-figure" style="background-image: url(<?php echo $config['AvatarURL'] ?><?php echo filter($user2["look"]) ?>&action=std&direction=2&head_direction=3&img_format=undefined&gesture=sml&headonly=0&size=b);"></span>
    <a href="/profile/<?php echo filter($user2["username"]); ?>" class="page-content-collider-content-news-right-side-content-article-author-username">
      <?php echo filter($user2["username"]); ?>
    </a>
  </div>

  <?php
  }
  ?>

</div>

<div class="page-content-collider-content-news-right-side-content" style="margin-top: 50px;">

  <?php
    if (empty($_GET['id'])) {
  ?>

  <h2 class="page-content-collider-content-news-right-side-content-title"><?= $lang["Nnotfoundheader"] ?> »</h2>
  <p><?= $lang["Nnotfoundtxt"] ?></p>

  <?php
    } else {
    if (!is_numeric($_GET['id'])) {
      exit('Nothing!');
    }

    $news = $dbh->prepare("SELECT * FROM cms_reportsreply WHERE id = :newsid");
    $news->bindParam(':newsid', $_GET['id']);
    $news->execute();
    $user = $dbh->prepare("SELECT * FROM cms_reportsreply JOIN cms_reports ON cms_reportsreply.report_id = cms_reports.id");
    $user->execute();

    $user = $dbh->prepare("SELECT * FROM cms_reportsreply JOIN users ON cms_reportsreply.staff = users.username");
    $user->execute();

    $user2 = $user->fetch();
      if ($news->RowCount() == 1) {
        while ($news2 = $news->fetch()) {
  ?>

  <h2 class="page-content-collider-content-news-right-side-content-title"><?= $lang["Reportresponsesget"] ?></h2>

  <p><b>Solución: </b><?php echo filter($news2['reply']); ?></p>
  <p><b>Fecha de Respuesta: </b><?php echo date('d/m/Y H:i:s', $news2['time']); ?></p>
  <p><b>Staff Responsable: </b><?php echo filter($news2['staff']); ?></p>

  <div class="page-content-collider-content-news-right-side-content-article-author">
    <span class="page-content-collider-content-news-right-side-content-article-author-figure" style="background-image: url(<?php echo $config['AvatarURL'] ?><?php echo filter($user2["look"]) ?>&action=std&direction=2&head_direction=3&img_format=undefined&gesture=sml&headonly=0&size=b);"></span>
    <a href="/profile/<?php echo filter($user2["username"]); ?>" class="page-content-collider-content-news-right-side-content-article-author-username">
      <?php echo filter($user2["username"]); ?>
    </a>
  </div>

  <?php
    }
    } else {
  ?>

  <h2 class="page-content-collider-content-news-right-side-content-title"><?= $lang["Reportresponsesget"] ?> »</h2>
  <p><?= $lang["Reportresponsesdescget"] ?></p>

  <?php
  }
  }
  ?>

</div>

  <?php
    $news = $dbh->prepare("SELECT * FROM cms_reports WHERE id = :newsid");
    $news->bindParam(':newsid', $_GET['id']);
    $news->execute();

      if ($news->RowCount() == 1) {
        while ($news2 = $news->fetch()) {
  ?>

  <?php if ($news2['state'] == 'Abierto' || $news2['state'] == 'Tratamiento') { ?>

  <div class="page-content-collider-content-news-right-side-content" style="margin-top: 50px;">
    <div class="page-content-collider-content-settings-right-side-item">
      <div class="page-content-collider-content-settings-right-side-item-column">

        <h3 class="page-content-collider-content-settings-right-side-item-title"><?= $lang["Reportrespondereportget"] ?></h3>

        <?php User::ReportNewQuestion(); ?>
<form action="" method="POST">

        <textarea type="text" name="question" id="newquestion" class="page-content-collider-content-settings-right-side-item-input" placeholder="Escribe tu nueva pregunta" style="color: #2c3039; font-size: 15px; font-weight: 500; padding: 5px 10px; box-shadow: 0px 0px 0px 1px #00000042; border-radius: 3px; margin: 3px 0 10px 0; width: 500px; height: 100px;"></textarea>

        <p class="page-content-collider-content-settings-right-side-item-description"><?= $lang["Reportquestionuserget"] ?></p>

      </div>
    </div>

    <input type="hidden" name="report_id" id="newquestion" value="<?=$news2['id']?>">

    <button type="submit" name="newquestion" id="newquestion" autocomplete="off" class="page-content-collider-content-settings-right-side-default-button fill save" style="background-color: #00813e; border-radius: 3px;padding: 10px 30px; color: #fff; font-size: 14px; font-weight: 500; margin-bottom: 15px;"><?= $lang["SettingsButton"] ?></button>

</form>
</div>

<?php } ?>
<?php } ?>
<?php } ?>

</div>