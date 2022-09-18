<?php
	$menu="community";
	include_once 'templantes/header.php';
?>
    <link rel="stylesheet" type="text/css" href="/templates/<?= $config['skin']; ?>/assets/css/app.css?<?=$hotel['cache'] ;?>">
    <link rel="stylesheet" type="text/css" href="/templates/<?= $config['skin']; ?>/assets/css/index.css?<?=$hotel['cache'] ;?>">
    <div style="height: 77%;margin-bottom: 140px;">
        <div style=" width: 72%; color: #fff; margin-left: 5%;margin-top:100px; padding: 5px; ">






                        <?php
									$belcr_get = $dbh->prepare("SELECT * from cms_furnis");
									$belcr_get->execute();
									while ($belcr_row = $belcr_get->fetch())
									{
									?>
					

<div class="furni-box" style="background-image:url('/adminpan/catalogue/<?=$belcr_row['codigo'];?>.png');">
						<a>
							<div class="name"><?=$belcr_row['nombre'];?></div>
							<div class="data">
							<?php
							if($belcr_row['creditos']>=1)
							{?>
								<div class="price" style="padding-top: 9px;"><?=$belcr_row['creditos'];?><img src="/templates/<?= $config['skin']; ?>/assets/images/credits.png?0" style=" margin-left: 10px; "></div>
							<?php
							}
							if($belcr_row['diamantes']>=1)
							{
							?>
							
								<div class="price" style="padding-top: 9px;"><?=$belcr_row['diamantes'];?><img src="/templates/<?= $config['skin']; ?>/assets/images/diamonds.png?0" style=" margin-left: 10px; "></div>
							<?php
							}
							if($belcr_row['thrones']>=1)
							{
							?>
								<div class="price"><?=$belcr_row['thrones'];?><img src="/templates/<?= $config['skin']; ?>/assets/images/throne.png?0"></div>
								<?php
							}
							?>
							</div>
						</a>
					</div>
					
					
					<?php
									}
					?>





            </div>

		
		
		
		
			
			</div>

        </div>
		
    </div>
</body>

</html>


<style>


.furni-box {
    width: calc(100% / 2 - 5px);
    height: 200px;
    margin: 0 5px 5px 0;
    background-color: rgba(23, 23, 23, 0.72);
    background-repeat: no-repeat;
    background-position: 50%;
    border-radius: 3px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
    float: left;
}
.furni-box>a>.name {
    width: 100%;
    height: 25px;
    font-size: 19px;
    padding-top: 10px;
    margin-left: 20px;
    text-align: left;
    color: #fff !important;
}
.furni-box>a>.data {
    margin: 118px 0 0;
    display: flex;
}
.furni-box>a>.data>.icon, .furni-box>a>.data>.price {
    height: 40px;
    border-radius: 3px;
    padding: 4px;
    background: #ffffff2b;
	margin-left: 20px;
}
.furni-box>a>.data>.icon {
    width: 35%;
    background-color: #fff;
    background-repeat: no-repeat;
    background-position: 50%;
}
#content .box>.body img {
    max-width: 100%;
}
</style>