<h3 class="page-content-collider-content-settings-right-side-item-title" style="align-self: left;">Abierto</h3>

<?php
  $getArticles = $dbh->prepare("SELECT * FROM cms_reports WHERE state = 'Abierto' ORDER BY id DESC");
  $getArticles->execute();
    if ($getArticles->RowCount() > 0) {
?>

  <h2 style="  font-size: 100%;"><?=filter($sectionName)?></h2>

    <?php
      while ($a = $getArticles->fetch()) {
        $username = $a['author'];
          if(User::userData('username') == $username) {
    ?>

    <a href="/myreports/<?=filter($a['id'])?>" 
      class="<?php if($_GET['id']==filter($a['id'])){echo 'active';}else{echo'noactive';}?>">
        <?=filter($a['title'])?>&nbsp;&raquo;
    </a>

    <?php
      }
      }
      }
    ?>

    <br>

<h3 class="page-content-collider-content-settings-right-side-item-title" style="align-self: left;">Tratamiento</h3>

<?php
  $getArticles = $dbh->prepare("SELECT * FROM cms_reports WHERE state = 'Tratamiento' ORDER BY id DESC");
  $getArticles->execute();
    if ($getArticles->RowCount() > 0) {
?>

  <h2 style="  font-size: 100%;"><?=filter($sectionName)?></h2>

    <?php
      while ($a = $getArticles->fetch()) {
        $username = $a['author'];
          if(User::userData('username') == $username) {
    ?>

    <a href="/myreports/<?=filter($a['id'])?>" 
      class="<?php if($_GET['id']==filter($a['id'])){echo 'active';}else{echo'noactive';}?>">
        <?=filter($a['title'])?>&nbsp;&raquo;
    </a>

    <?php
      }
      }
      }
    ?>

    <br>

    <h3 class="page-content-collider-content-settings-right-side-item-title" style="align-self: left;">Cerrado</h3>

    <?php
      $getArticles = $dbh->prepare("SELECT * FROM cms_reports WHERE state = 'Cerrado' ORDER BY id DESC");
      $getArticles->execute();
        if ($getArticles->RowCount() > 0) {
    ?>

    <?php
      while ($a = $getArticles->fetch()) {
        $username = $a['author'];
          if(User::userData('username') == $username) {
    ?>

    <a href="/myreports/<?=filter($a['id'])?>" 
      class="<?php if($_GET['id']==filter($a['id'])){echo 'active';}else{echo'noactive';}?>">
        <?=filter($a['title'])?>&nbsp;&raquo;
    </a>

    <?php
      }
      }
      }
    ?>

<style>
a {
color: black;
}

.active {
color: #cf8f01;
}
</style>