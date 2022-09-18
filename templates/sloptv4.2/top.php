<?php
	$menu="community";
	include_once 'templantes/header.php';
?>
                        <div style="margin-top: 100px;">

<div class="grid_8">
        <div id="contentBox">
            <div class="title small" style="background: rgba(33, 33, 33, 0.5490196078431373);">
                Top Esmeraldas
            </div>
            <div class="padding">
                        <?php
									$belcr_get = $dbh->prepare("SELECT id,vip_points,username,look from users WHERE rank < 7 ORDER BY `vip_points` DESC  LIMIT 3");
									$belcr_get->execute();
									$increment=1;
									while ($belcr_row = $belcr_get->fetch())
									{
									?>
                                    <a href="/home/<?= filter($belcr_row['username']) ?>" class="waves-effect waves-light btn-large white blue-text text-darken-2" id="topuser">
                        <div class="topkeko">
                            <img src="<?= $config['lookUrl'];?><?=$belcr_row['look']?>&amp;direction=2&amp;head_direction=2&amp;size=l">
                        </div>
                                                    <div class="topname"><?= filter($belcr_row['username']) ?></div>
                        <div class="topmoneyicon" style="background: url(/templates/<?= $config['skin'] ?>/assets/images/esmeralda.png);"></div>
                        <div class="topmoney"><?= filter($belcr_row['vip_points']) ?> Esmeraldas</div>
                    </a>
					<?php
									}
					?>
                            </div>
        </div>


            </div>
			<div class="grid_8">
        <div id="contentBox">
            <div class="title small" style="background: rgba(33, 33, 33, 0.5490196078431373);">
                <?=$lang["topteme2"];?>
            </div>
            <div class="padding">
                        <?php
									$belcr_get = $dbh->prepare("SELECT id,credits,username,look from users WHERE rank < 7 ORDER BY `credits` DESC  LIMIT 3");
									$belcr_get->execute();
									$increment=1;
									while ($belcr_row = $belcr_get->fetch())
									{
									?>
                                    <a href="/home/<?= filter($belcr_row['username']) ?>" class="waves-effect waves-light btn-large white blue-text text-darken-2" id="topuser">
                        <div class="topkeko">
                            <img src="<?= $config['lookUrl'];?><?=$belcr_row['look']?>&amp;direction=2&amp;head_direction=2&amp;size=l">
                        </div>
                                                    <div class="topname"><?= filter($belcr_row['username']) ?></div>
                        <div class="topmoneyicon" style="background: url(/templates/<?= $config['skin'] ?>/assets/images/mini_credits.png);"></div>
                        <div class="topmoney"><?= filter($belcr_row['credits']) ?> <?=$lang["topcredits"]?></div>
                    </a>
					<?php
									}
					?>
                            </div>
        </div>


            </div>
			
			
			
            </div>
			<div class="grid_8">
        <div id="contentBox">
            <div class="title small" style="background: rgba(33, 33, 33, 0.5490196078431373);">
                Top Planetas
            </div>
            <div class="padding">
                        <?php
									$belcr_get = $dbh->prepare("SELECT id,activity_points,username,look from users WHERE rank < 7 ORDER BY `credits` DESC  LIMIT 3");
									$belcr_get->execute();
									$increment=1;
									while ($belcr_row = $belcr_get->fetch())
									{
									?>
                                    <a href="/home/<?= filter($belcr_row['username']) ?>" class="waves-effect waves-light btn-large white blue-text text-darken-2" id="topuser">
                        <div class="topkeko">
                            <img src="<?= $config['lookUrl'];?><?=$belcr_row['look']?>&amp;direction=2&amp;head_direction=2&amp;size=l">
                        </div>
                                                    <div class="topname"><?= filter($belcr_row['username']) ?></div>
                        <div class="topmoneyicon" style="background: url(/templates/<?= $config['skin'] ?>/assets/images/planeta.png);"></div>
                        <div class="topmoney"><?= filter($belcr_row['activity_points']) ?> Planetas</div>
                    </a>
					<?php
									}
					?>
                            </div>
        </div>


            </div>
			
				<div class="grid_8">
        <div id="contentBox">
            <div class="title small" style="background: rgba(33, 33, 33, 0.5490196078431373);">
              Top Games Wins
            </div>
            <div class="padding">
                        <?php
									$belcr_get = $dbh->prepare("SELECT id,vip_points,username,look from users WHERE rank < 7 ORDER BY `credits` DESC  LIMIT 3");
									$belcr_get->execute();
									$increment=1;
									while ($belcr_row = $belcr_get->fetch())
									{
									?>
                                    <a href="/home/<?= filter($belcr_row['username']) ?>" class="waves-effect waves-light btn-large white blue-text text-darken-2" id="topuser">
                        <div class="topkeko">
                            <img src="<?= $config['lookUrl'];?><?=$belcr_row['look']?>&amp;direction=2&amp;head_direction=2&amp;size=l">
                        </div>
                                                    <div class="topname"><?= filter($belcr_row['username']) ?></div>
                        <div class="topmoneyicon" style="background: url(/templates/<?= $config['skin'] ?>/assets/images/162162.png);"></div>
                        <div class="topmoney"><?= filter($belcr_row['vip_points']) ?> Juegos Ganados</div>
                    </a>
					<?php
									}
					?>
                            </div>
        </div>


            </div>
			
			
			
			
			<div class="grid_8">
        <div id="contentBox">
            <div class="title small" style="background: rgba(33, 33, 33, 0.5490196078431373);">
                <?=$lang["topteme3"];?>
            </div>
            <div class="padding">
									<?php 
							$belrs_get = $dbh->prepare("SELECT * FROM user_stats ORDER BY respect desc LIMIT 3");
							$belrs_get->execute();
							while ($belrs_row = $belrs_get->fetch())
							{
								$belrs2_get = $dbh->prepare("SELECT * FROM `users` WHERE `id` = '" . $belrs_row['id'] . "'");
								$belrs2_get->execute();
								$belrs2_row = $belrs2_get->fetch();
							?>

					
                                <a href="/home/<?= filter($belrs2_row['username']) ?>" class="waves-effect waves-light btn-large white blue-text text-darken-2" id="topuser">
                        <div class="topkeko">
                            <img src="<?= $config['lookUrl'];?><?=$belrs2_row['look']?>&amp;direction=2&amp;head_direction=2&amp;size=l">
                        </div>
                                                    <div class="topname"><?= filter($belrs2_row['username']) ?></div>
                        <div class="topmoneyicon" style="background: url(/templates/<?= $config['skin'] ?>/assets/images/icon.png);background-position: -0px 23px; width: 25px; margin-left: -5px;"></div>
                        <div class="topmoney"><?= filter($belrs_row[$emuUse['respect']]) ?> <?= $lang["toprespect"] ?></div>
                    </a>
							<?php
							}
						?>
		                            </div>
        </div>


            </div>	
			
			
			
			
			
					<div class="grid_8">
        <div id="contentBox">
            <div class="title small" style="background: rgba(33, 33, 33, 0.5490196078431373);">
                <?=$lang["topteme4"];?>
            </div>
            <div class="padding">
									<?php 
							$belrs_get = $dbh->prepare("SELECT * FROM user_stats ORDER BY OnlineTime desc LIMIT 3");
							$belrs_get->execute();
							while ($belrs_row = $belrs_get->fetch())
							{
								$belrs2_get = $dbh->prepare("SELECT * FROM `users` WHERE `id` = '" . $belrs_row['id'] . "'");
								$belrs2_get->execute();
								$belrs2_row = $belrs2_get->fetch();
								
								$d = floor($belrs_row['OnlineTime']/86400);
								$h = floor(($belrs_row['OnlineTime']-$d*86400)/3600);
								$time_str = $d.' '.$lang["topon1"].' '.$h.' '.$lang["topon2"].' ';
							?>

					
                                <a href="/home/<?= filter($belrs2_row['username']) ?>" class="waves-effect waves-light btn-large white blue-text text-darken-2" id="topuser">
                        <div class="topkeko">
                            <img src="<?= $config['lookUrl'];?><?=$belrs2_row['look']?>&amp;direction=2&amp;head_direction=2&amp;size=l">
                        </div>
                                                    <div class="topname"><?= filter($belrs2_row['username']) ?></div>
                        <div class="topmoneyicon" style="background: url(/templates/<?= $config['skin'] ?>/assets/images/icon.png);background-position: -0px 23px; width: 25px; margin-left: -5px;"></div>
                        <div class="topmoney"><?= $time_str;?></div>
                    </a>
							<?php
							}
						?>
		                            </div>
        </div>


            </div>		
			
			
			
			
			
			
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>