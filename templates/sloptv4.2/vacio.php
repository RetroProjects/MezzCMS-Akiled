

<meta charset="utf-8">
<section class="news-contenedor" style="min-width: 380px;">
<div class="loading" id="loading" style="display: none;"></div>
<header>Ranking de Usuarios <img src="/templates/sloptv4.2/client/images/close-circle.png"  id="btn-contenido2" style="right: 1rem;
    position: absolute; cursor:pointer;"></header>
<section class="contenido">
<section class="ranking">
<center>
<strong>Top Esmeraldas</strong>
</center>
<hr style="margin-bottom: 4px;">
<div class="section">
  <?php
									$belcr_get = $dbh->prepare("SELECT id,vip_points,username,look from users WHERE rank < 7 ORDER BY `vip_points` DESC  LIMIT 3");
									$belcr_get->execute();
									$increment=1;
									while ($belcr_row = $belcr_get->fetch())
									{
									?>
									<article>
                                    <a style="text-decoration:none;" href="/home/<?= filter($belcr_row['username']) ?>"  target="_blank" class="waves-effect waves-light btn-large white blue-text text-darken-2" id="topuser">
                        <div class="topkeko">
                            <img src="<?= $config['lookUrl'];?><?=$belcr_row['look']?>&headonly=1&size=b&gesture=sml&direction=2&head_direction=2&action=std">
                        </div>
						<div class="content-amount">
                                                    <div class="topname" style=" color: #fff; "><span><b><?= filter($belcr_row['username']) ?></b></span></div>
												
                        <img src="/templates/<?= $config['skin'] ?>/assets/images/esmeralda.png" class="icon" style="margin-bottom: 8px;">
						</br>
                        <div class="topmoney"><strong style=" color: #fff; "><span><?= filter($belcr_row['vip_points']) ?> Esmeraldas </span></strong></div>
						</div>
                    </a>
					</article>
					<?php
									}
					?>
</div>
<center>
<strong>Top Creditos</strong>
</center>
<hr style="margin-bottom: 4px;">
<div class="section">
<?php
									$belcr_get = $dbh->prepare("SELECT id,credits,username,look from users WHERE rank < 7 ORDER BY `credits` DESC  LIMIT 3");
									$belcr_get->execute();
									$increment=1;
									while ($belcr_row = $belcr_get->fetch())
									{
									?>
									<article>
                                    <a style="text-decoration:none;" href="/home/<?= filter($belcr_row['username']) ?>"  target="_blank" class="waves-effect waves-light btn-large white blue-text text-darken-2" id="topuser">
                        <div class="topkeko">
                            <img src="<?= $config['lookUrl'];?><?=$belcr_row['look']?>&headonly=1&size=b&gesture=sml&direction=2&head_direction=2&action=std">
                        </div>
						<div class="content-amount">
                                                    <div class="topname" style=" color: #fff; "><span><b><?= filter($belcr_row['username']) ?></b></span></div>
												
                        <img src="/templates/<?= $config['skin'] ?>/assets/images/mini_credits.png" class="icon" style="margin-bottom: 8px;">
						</br>
                        <div class="topmoney"><strong style=" color: #fff; "><span><?= filter($belcr_row['vip_points']) ?> <?=$lang["topcredits"]?></span></strong></div>
						</div>
                    </a>
					</article>
					<?php
									}
					?>
</div>
<center>
<strong>Top Planetas</strong>
</center>
<hr style="margin-bottom: 4px;">
<div class="section">
<?php
									$belcr_get = $dbh->prepare("SELECT id,activity_points,username,look from users WHERE rank < 7 ORDER BY `credits` DESC  LIMIT 3");
									$belcr_get->execute();
									$increment=1;
									while ($belcr_row = $belcr_get->fetch())
									{
									?>
									<article>
                                    <a style="text-decoration:none;" href="/home/<?= filter($belcr_row['username']) ?>"  target="_blank" class="waves-effect waves-light btn-large white blue-text text-darken-2" id="topuser">
                        <div class="topkeko">
                            <img src="<?= $config['lookUrl'];?><?=$belcr_row['look']?>&headonly=1&size=b&gesture=sml&direction=2&head_direction=2&action=std">
                        </div>
						<div class="content-amount">
                                                    <div class="topname" style=" color: #fff; "><span><b><?= filter($belcr_row['username']) ?></b></span></div>
												
                        <img src="/templates/<?= $config['skin'] ?>/assets/images/planeta.png" class="icon" style="margin-bottom: 8px;">
						</br>
                        <div class="topmoney"><strong style=" color: #fff; "><span><?= filter($belcr_row['vip_points']) ?> Planetas </span></strong></div>
						</div>
                    </a>
					</article>
					<?php
									}
					?>
</div>
</section>
</section>
</section>
<script src="/templates/sloptv4.2/client/js/jquery.min.js"></script>
<script>
var modes_btn = document.querySelector("#btn-contenido2");
var modes = document.querySelector("#contenido");

var contenedor = document.querySelector(".news-contenedor");

modes_btn.addEventListener("click", function(){
var modes_position = modes.style.display;

if(modes_position !== "block"){
    modes.style.display="block";
}else{
    modes.style.display="none";

    $(contenedor).remove();
}
});
</script>