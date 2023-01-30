<?php

  for ($i = 0; $i < 6; $i++)
  {
      $sectionName = "";
      $sectionCutoffMax = 0;
      $sectionCutoffMin = 0;
      switch ($i)
      {
          case 0:
          $sectionName = ''.$lang["Ntoday"].'';
          $sectionCutoffMax = time();
          $sectionCutoffMin = time() - 86400;
          break;
          case 1:
          $sectionName = ''.$lang["Nyesterday"].'';
          $sectionCutoffMax = time() - 86400;
          $sectionCutoffMin = time() - 172800;
          break;
          case 2:
          $sectionName = ''.$lang["Nthisweek"].'';
          $sectionCutoffMax = time() - 172800;
          $sectionCutoffMin = time() - 604800;
          break;
          case 3:
          $sectionName = ''.$lang["Nlastweek"].'';
          $sectionCutoffMax = time() - 604800;
          $sectionCutoffMin = time() - 1209600;
          break;
          case 4:
          $sectionName = ''.$lang["Nthismonth"].'';
          $sectionCutoffMax = time() - 1209600;
          $sectionCutoffMin = time() - 2592000;
          break;
          case 5:
          $sectionName = ''.$lang["Nlastmonth"].'';
          $sectionCutoffMax = time() - 2592000;
          $sectionCutoffMin = time() - 5184000;
          break;
      }
      $getArticles = $dbh->prepare("SELECT id,date,title FROM cms_news WHERE date >= :sectionCutoffMin AND date <= :sectionCutoffMax ORDER BY date DESC");
      $getArticles->bindParam(':sectionCutoffMin', $sectionCutoffMin);
      $getArticles->bindParam(':sectionCutoffMax', $sectionCutoffMax);
      $getArticles->execute();
      if ($getArticles->RowCount() > 0)
      {

?>
          <h2 style="  font-size: 100%;"><?=filter($sectionName)?></h2>
          <?php
          while ($a = $getArticles->fetch())
          {
          ?>
              <a 
                href="/articles/<?=filter($a['id'])?>" class="
                <?php if($_GET['id']==filter($a['id'])){echo 'active';}else{echo'noactive';}?>">
                <?=filter($a['title'])?>&nbsp;&raquo;
              </a>
          <?php
          }
      }
  }
?>

<style>


.active {
  color: #cf8f01;
}
</style>