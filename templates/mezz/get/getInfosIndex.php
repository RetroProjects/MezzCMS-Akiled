<div class="page-content-collider-item">
    <div class="page-content-collider-head">
        <span class="page-content-collider-head-icon news"></span>
        <div class="page-content-collider-head-column">
            <h2 class="page-content-collider-head-title"><?=$lang["Iinfo1"]?></h2>
            <p class="page-content-collider-head-description"><?=$lang["Iinfo2"]?></p>
        </div>
    </div>

    <div class="page-content-collider-content">

    <?php
          $sql = $dbh->prepare("SELECT * FROM cms_infosindex ORDER BY id ASC LIMIT 4");
          $sql->execute();
          while ($getInfo = $sql->fetch())
          {
      ?>

        <div class="page-content-collider-content-article">
            <h2 class="page-content-collider-content-infoindex-title"><?php echo filter($getInfo["title"]) ?></h2>
            <span class="page-content-collider-content-article-promo pixelated" style="background-image: url('<?php echo filter($getInfo["image"]) ?>')"></span>
            <h2 class="page-content-collider-content-infoindex2-title"><?php echo filter($getInfo["information"]) ?></h2>
            <div class="page-content-collider-content-article-bottom-side">
                <div class="page-content-collider-content-article-bottom-side-avatar">
                    <span class="page-content-collider-content-article-bottom-side-avatar-username"><?php echo filter($news["title"]); ?></span>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
</div>