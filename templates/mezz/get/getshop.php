<div class="page-content-collider-content">
    <?php
    $sql = $dbh->prepare("SELECT * FROM  mezz_shop ORDER BY mezz_shop.id asc");
    $sql->execute();
    while ($news = $sql->fetch()) {
    ?>

        <a href="/articleshop/<?php echo filter($news["id"]); ?>" class="page-content-collider-content-article">
           <span class="page-content-collider-content-article-promo pixelated" style="background-image: url('<?php echo filter($news["image"]); ?>')"></span>
                            <h2 class="page-content-collider-content-article-title" style=" text-align: center; "><?php echo filter($news["price"]); ?>$</h2>
                            <div class="page-content-collider-content-article-bottom-side">
                                <div class="page-content-collider-content-article-bottom-side-avatar">
<span class="page-content-collider-content-article-bottom-side-avatar-figure pixelated" style="background-image: url(/assets/images/shop/esmeralda.png);background-size: 16px;image-rendering: pixelated;"></span>                                  
  <span class="page-content-collider-content-article-bottom-side-avatar-username"><?php echo filter($news["esmeraldas"]); ?> esmeraldas</span>
                                </div>
                                <div class="page-content-collider-content-article-bottom-side-avatar">
<span class="page-content-collider-content-article-bottom-side-avatar-figure pixelated" style="background-image: url(/assets/images/user-space/planeta.png);background-size: 16px;image-rendering: pixelated;"></span>   
                                 <span class="page-content-collider-content-article-bottom-side-avatar-username"><?php echo filter($news["planetas"]); ?> planetas</span>
                </div>
            </div>
        </a>
    <?php } ?>
</div>