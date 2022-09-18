<?php
	$menu="me";
	include_once 'templantes/header.php';
	if(empty($_GET['user']))
	{
	header("Location:/");
	}
	$news = $dbh->prepare("SELECT * FROM users WHERE username = :name");
	$news->bindParam(':name', $_GET['user']);
	$news->execute();
	if ($news->RowCount() == 0)
	{
	header("Location:/");
	}
?>
            <script type="text/javascript" src="/templates/<?= $config['skin']; ?>/assets/js/app.js?<?=$hotel['cache']; ?>"></script>
                <div style="margin-top: 100px;">
						
						<div style=" padding: 30px;margin-top:60px; z-index: 33;">




<div class="profile">
<div style="background: url(<?= $config['lookUrl'];?><?=userHome('look')?>&amp;gender=M&amp;direction=2&amp;head_direction=2&amp;size=l&amp;img_format=png) -0px -40px no-repeat;width: 200px;height: 78px;margin-left: 50px;-webkit-filter: drop-shadow(1px 1px 0 #fff) drop-shadow(-2px 1px 0 #fff) drop-shadow(1px -2px 0 #fff);"></div>

<div class="homeusername"><?= userHome('username'); ?></div>
					</div>

				



<div class="profile__section" style="">
    <!---->
    <div class="profile__card__wrapper--badges">
        <section class="profile__card__aligner">
            <div class="profile__card">
                <h2 class="profile__card__title"><?=$lang["HomeTab3"];?> <?= userHome('username'); ?></h2>
                <div class="item-list--grid">
                    <ul>
				<?php
				//Arcturus emulador placas
				if ($config['hotelEmu'] == 'arcturus')
				{
					$userId = userHome('id');
					$stmt = $dbh->prepare("SELECT * FROM users_badges WHERE user_id = :userid LIMIT 3");
					$stmt->bindParam(':userid', $userId);
					$stmt->execute();
					if (!$stmt->RowCount() == 0)
					{
						while($badge = $stmt->fetch())
						{
							echo'
							                        <li class="item item--small item--badge">
                            <div class="item__content">
                                <div class="item__icon">
                                    <div class="item__icon__aligner">
                                       <img src="'.$config['badgeURL'].''.filter($badge["badge_code"]).'.gif">
                                    </div>
                                </div>
                                <div class="item__text">
                                    <h6 class="item__title item__title--multi-line">'.filter($badge["badge_code"]).'</h6>
                                    <p class="item__description"></p>
                                </div>
                            </div>
                        </li>
						';
							
						}
					}
					else
					{
						echo'
						
						<div class="col">
                                            <div class="alert alert-danger" role="alert">
                                                <strong>'.userHome('username').', </strong> '.$lang["errorhome1"].'
                                            </div>
                                        </div>
						
						';
					}
				}
				else
				{
					//Plus emulador u otros Placas
					$userId = userHome('id');
					$stmt = $dbh->prepare("SELECT * FROM user_badges WHERE user_id = :userid LIMIT 3");
					$stmt->bindParam(':userid', $userId);
					$stmt->execute();
					if (!$stmt->RowCount() == 0)
					{
						while($badge = $stmt->fetch())
						{
							echo'
							                        <li class="item item--small item--badge">
                            <div class="item__content">
                                <div class="item__icon">
                                    <div class="item__icon__aligner">
                                       <img src="'.$config['badgeURL'].''.filter($badge["badge_id"]).'.gif">
                                    </div>
                                </div>
                                <div class="item__text">
                                    <h6 class="item__title item__title--multi-line">'.filter($badge["badge_id"]).'</h6>
                                    <p class="item__description"></p>
                                </div>
                            </div>
                        </li>
						';
						}
					}
					else
					{
						echo'
						
						<div class="col">
                                            <div class="alert alert-danger" role="alert">
                                                <strong>'.userHome('username').', </strong> '.$lang["errorhome1"].'
                                            </div>
                                        </div>
						
						';
					}
				}
				?>
                    </ul>
					 </div>
                <div class="profile__card__footer">
                    <button class="btn btn-lg btn-block btn-primary mt-2" data-toggle="modal" data-target="#badgesModal" style=" background: #294f6f; border: 2px solid #193252; "><?=$lang["Homeboton"];?></button>
                </div>
            </div>
        </section>
    </div>
    <!---->
    <!---->
    <div ng-if="ProfileController.items.friends.length > 0" class="profile__card__wrapper--friends">
        <section class="profile__card__aligner">
            <div class="profile__card">
                <h2 class="profile__card__title"><?=$lang["HomeTab4"];?> <?= userHome('username'); ?></h2>
                <div class="item-list--grid">
                    <ul>
					
					<?php
						$userId = userHome('id');
						$sql = $dbh->prepare("SELECT * FROM messenger_friendships WHERE user_one_id=:userid OR user_two_id=:userid ORDER BY RAND() LIMIT 3");
						$sql->bindParam(':userid', $userId);
						$sql->execute();
						if (!$sql->RowCount() == 0)
						{
							while($news = $sql->fetch())
							{
								$id = (userHome('id') == $news['user_two_id'] ? $news['user_one_id'] : $news['user_two_id']);
								$getUser = $dbh->prepare("SELECT * FROM users WHERE id = :id");
								$getUser->bindParam(':id', $id);
								$getUser->execute();
								$getUserData = $getUser->fetch();
								echo'
                        <li class="item item--friend" style=" height: 150px; margin-top: -20px; ">
                            <a class="item__content" href="/home/'.filter($getUserData['username']).'">
                                <div class="item__icon">
                                    <!---->
                                    <img width="64" height="110" class="imager" src="'. $config['lookUrl'].''.filter($getUserData['look']).'&direction=4&head_direction=4&gesture=sml&size=b&headonly=0" style="min-width: 64px;">
                                    <!---->
                                    <!---->
                                </div>
                                <div class="item__text">
                                    <h6 class="item__title item__title--single-line">'.filter($getUserData['username']).'</h6>
                                </div>
                            </a>
                        </li>
								';
							}
						}
						else
						{
							echo '						
							<div class="col">
                                            <div class="alert alert-danger" role="alert">
                                                <strong>'.userHome('username').', </strong> '.$lang["errorhome4"].'
                                            </div>
                                        </div>';
						}
					?>
                        <!---->


                    </ul>
                </div>
                <div class="profile__card__footer">
                   <button class="btn btn-lg btn-block btn-primary mt-2" data-toggle="modal" data-target="#friendsModal" style=" background: #294f6f; border: 2px solid #193252; "><?=$lang["Homeboton"];?></button>
                </div>
            </div>
        </section>
    </div>
    <!---->
    <!---->
    <div ng-if="ProfileController.items.rooms.length > 0" class="profile__card__wrapper--rooms">
        <section class="profile__card__aligner">
            <div class="profile__card">
                <h2 translate="PROFILE_ROOMS_TITLE" class="profile__card__title"><?=$lang["HomeTab1"];?> <?= userHome('username'); ?></h2>
                <div class="item-list--grid" >
                    <ul>
    <?php
					$sqlidsala = $dbh->prepare("SELECT * FROM rooms WHERE owner=".userHome('id')."  LIMIT 3");
				$sqlidsala->execute();
				if (!$sqlidsala->RowCount() == 0)
				{
					while ($getUsersDev = $sqlidsala->fetch())
					{ 
					?>
                        <!---->
                        <li class="item item--room">
                            <a class="item__content">
                                    <div class="room-icon"><div class="room-icon__thumbnail" style="height: 110px;width: 110px;background: url('<?=$config['roomthumball'];?><?= filter($getUsersDev['id']) ?>.png'),url(/templates/<?= $config['skin']; ?>/assets/images/room-thumbnail.png);" style="display: inline;"></div></div>
                                <div class="item__text">
                                    <h6 class="item__title item__title--single-line"><?= filter($getUsersDev['caption']) ?></h6>
                                    <!---->
                                </div>
                            </a>
                        </li>
                        <!---->
					<?php
					}
				}
				else
				{
					echo'
					</ul>
					</div>
					                <div class="item-list--grid" style="height: 63px;">
                    <ul>
						<div class="col">
                                            <div class="alert alert-danger" role="alert">
                                                <strong>'.userHome('username').', </strong> '.$lang["errorhome3"].'
                                            </div>
                                        </div><br><br><br>
					';
				}
		?>		
                    </ul>
                </div>
                <div class="profile__card__footer">
                   <button class="btn btn-lg btn-block btn-primary mt-2" data-toggle="modal" data-target="#roomsModal" style=" background: #294f6f; border: 2px solid #193252; "><?=$lang["Homeboton"];?></button>
                </div>
            </div>
        </section>
    </div>
    <!---->
    <!---->
    <div class="profile__card__wrapper--groups">
        <section class="profile__card__aligner">
            <div class="profile__card">
                <h2 class="profile__card__title"><?=$lang["HomeTab2"];?> <?= userHome('username'); ?></h2>
                <div class="item-list--grid">
                    <ul>
					<?php
			   //Plus emu u otros Grupos
				$sqlidsala = $dbh->prepare("SELECT * FROM groups WHERE owner_id=".userHome('id')." LIMIT 3");
				$sqlidsala->execute();
				if (!$sqlidsala->RowCount() == 0)
				{
					while ($getUsersDev = $sqlidsala->fetch())
					{
			?>	            
            <!---->
                        <li class="item item--small item--group">
                            <a class="item__content">
                                <div class="item__icon">
                                    <div class="item__icon__aligner">
                                        <img src="<?= $config['groupBadgeURL'] ?><?= filter($getUsersDev['badge']) ?>.gif">
                                    </div>
                                </div>
                                <div class="item__text">
                                    <h6 class="item__title item__title--multi-line"><?= filter($getUsersDev['name']) ?></h6>
                                    <!---->
                                </div>
                            </a>
                        </li>
                        <!---->
					
		 <?php
					}
		 
				}
				else
				{
					echo'
						<div class="col">
                                            <div class="alert alert-danger" role="alert">
                                                <strong>'.userHome('username').', </strong> '.$lang["errorhome2"].'
                                            </div>
                                        </div>
					';
				}
				?>


                    </ul>
                </div>
                <div class="profile__card__footer">
                   <button class="btn btn-lg btn-block btn-primary mt-2" data-toggle="modal" data-target="#groupsModal" style=" background: #294f6f; border: 2px solid #193252; "><?=$lang["Homeboton"];?></button>
                </div>
            </div>
        </section>
    </div>
    <!---->
</div>




				
            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
    <div class="modal fade" id="badgesModal" tabindex="-1" role="dialog" aria-labelledby="#badgesModal" aria-hidden="true">
	
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title"><?=$lang["Homelist3"];?></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style=" font-size: 45px; position: absolute; margin-left: -30px; margin-top: -10px; ">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
					
					


				<?php
				//Arcturus emulador placas
				if ($config['hotelEmu'] == 'arcturus')
				{
					$userId = userHome('id');
					$stmt = $dbh->prepare("SELECT * FROM users_badges WHERE user_id = :userid");
					$stmt->bindParam(':userid', $userId);
					$stmt->execute();
					if (!$stmt->RowCount() == 0)
					{
						while($badge = $stmt->fetch())
						{
						?>
										
							      <div class="col mb-2">
                                <div class="d-flex align-items-center">
                                    <div class="rounded" style="background-color: rgba(218, 218, 218, 0.17)">
                                        <div class="avatar-lg rounded" style="height: 50px;width: 50px;background: url(<?=$config['badgeURL']."".filter($badge["badge_code"])?>.gif) center no-repeat;"></div>
                                    </div>
                                </div>
                            </div>
							<?php
						}
					}
					else
					{
						echo'
						
						<div class="col">
                                            <div class="alert alert-danger" role="alert">
                                                <strong>'.userHome('username').', </strong> '.$lang["errorhome1"].'
                                            </div>
                                        </div>
						
						';
					}
				}
				else
				{
					//Plus emulador u otros Placas
					$userId = userHome('id');
					$stmt = $dbh->prepare("SELECT * FROM user_badges WHERE user_id = :userid");
					$stmt->bindParam(':userid', $userId);
					$stmt->execute();
					if (!$stmt->RowCount() == 0)
					{
						while($badge = $stmt->fetch())
						{
						?>
				
										
						     <div class="col mb-2">
                                <div class="d-flex align-items-center">
                                    <div class="rounded" style="background-color: rgba(218, 218, 218, 0.17)">
                                        <div class="avatar-lg rounded" style="height: 50px;width: 50px;background: url(<?=$config['badgeURL']."".filter($badge["badge_id"])?>.gif) center no-repeat;"></div>
                                    </div>
                                </div>
                            </div>
							
							
							<?php
						}
					}
					else
					{
						echo'
						
						<div class="col">
                                            <div class="alert alert-danger" role="alert">
                                                <strong>'.userHome('username').', </strong> '.$lang["errorhome1"].'
                                            </div>
                                        </div>
						
						';
					}
				}
				?>

				

                                            </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="modal fade" id="roomsModal" tabindex="-1" role="dialog" aria-labelledby="#roomsModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title"><?=$lang["Homelist1"];?></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style=" font-size: 45px; position: absolute; margin-left: -30px; margin-top: -10px; ">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="list-group">
					
					
					
	  <?php
	       if ($config['hotelEmu'] == 'arcturus')
		   {
				$sqlidsala = $dbh->prepare("SELECT * FROM rooms WHERE owner_id=".userHome('id')."");
				$sqlidsala->execute();
				if (!$sqlidsala->RowCount() == 0)
				{
					while ($getUsersDev = $sqlidsala->fetch())
					{
					?>	
					
	                                             <div class="list-group-item d-flex flex-row align-items-center mb-1">
                                                <div class="avatar avatar-lg rounded roomdefault" style="height: 110px;width: 110px;background: url('<?=$config['roomthumball'];?><?= filter($getUsersDev['id']) ?>.png'),url(/templates/<?= $config['skin']; ?>/assets/images/room-thumbnail.png);"></div>
                                            <div class="flex-column" style=" margin-left: 20px; ">
                                               <h4 class="ml-3" style=" font-family: arial; "><?= filter($getUsersDev['name']) ?></h4>
                                               <small class="ml-3" style=" font-family: arial; "><?= filter($getUsersDev['description']) ?></small>
                                            </div>                                            </div>								
		 <?php
					}
				}
				else
				{
					echo'
						<div class="col">
                                            <div class="alert alert-danger" role="alert">
                                                <strong>'.userHome('username').', </strong> '.$lang["errorhome3"].'
                                            </div>
                                        </div><br><br><br>
					';
				}
		   }
		   else
		   {
				$sqlidsala = $dbh->prepare("SELECT * FROM rooms WHERE owner=".userHome('id')."");
				$sqlidsala->execute();
				if (!$sqlidsala->RowCount() == 0)
				{
					while ($getUsersDev = $sqlidsala->fetch())
					{ 
					?>
                                             <div class="list-group-item d-flex flex-row align-items-center mb-1">
                                            <div class="avatar avatar-lg rounded roomdefault" style="height: 110px;width: 110px;background: url('<?=$config['roomthumball'];?><?= filter($getUsersDev['id']) ?>.png'),url(/templates/<?= $config['skin']; ?>/assets/images/room-thumbnail.png);"></div>
                                            <div class="flex-column" style=" margin-left: 20px; ">
                                               <h4 class="ml-3" style=" font-family: arial; "><?= filter($getUsersDev['caption']) ?></h4>
                                               <small class="ml-3" style=" font-family: arial; "><?= filter($getUsersDev['description']) ?></small>
                                            </div>

                                            </div>

    
					<?php
					}
				}
				else
				{
					echo'
						<div class="col">
                                            <div class="alert alert-danger" role="alert">
                                                <strong>'.userHome('username').', </strong> '.$lang["errorhome3"].'
                                            </div>
                                        </div><br><br><br>
					';
				}
		   }
		?>	
                     </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="groupsModal" tabindex="-1" role="dialog" aria-labelledby="#groupsModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title"><?=$lang["Homelist2"];?></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style=" font-size: 45px; position: absolute; margin-left: -30px; margin-top: -10px; ">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="list-group">
					


		  <?php
		  //Arcturus Grupos 
	       if ($config['hotelEmu'] == 'arcturus')
		   {
				$sqlidsala = $dbh->prepare("SELECT * FROM guilds WHERE user_id=".userHome('id')."");
				$sqlidsala->execute();
				if (!$sqlidsala->RowCount() == 0)
				{
					while ($getUsersDev = $sqlidsala->fetch())
					{
					?>	  

					<div class="list-group-item d-flex flex-row align-items-center mb-1">
                                <div class="rounded" style="background-color: rgba(218, 218, 218, 0.17)">
                                    <div class="avatar avatar-lg rounded" style="height: 50px;width: 50px;background: url('<?= $config['groupBadgeURL'] ?><?= filter($getUsersDev['badge']) ?>') center center no-repeat;"></div>
                                </div>
                                <div class="flex-column justify-content-end">
                                    <h4 class="ml-3" style=" font-family: arial; "><?= filter($getUsersDev['name']) ?></h4>
                                    <small class="ml-3" style=" font-family: arial; "><?= filter($getUsersDev['description']) ?>.</small>
                                </div>
                            </div>
		 <?php
					}
				}
				else
				{
					echo'
					<div class="list-group-item d-flex flex-row align-items-center mb-1">
						<div class="col">
                                            <div class="alert alert-danger" role="alert">
                                                <strong>'.userHome('username').', </strong> '.$lang["errorhome2"].'
                                            </div>
                                        </div>
					</div>
					';
				}
		   }
		   else
		   {
			   //Plus emu u otros Grupos
				$sqlidsala = $dbh->prepare("SELECT * FROM groups WHERE owner_id=".userHome('id')."");
				$sqlidsala->execute();
				if (!$sqlidsala->RowCount() == 0)
				{
					while ($getUsersDev = $sqlidsala->fetch())
					{
			?>	
					<div class="list-group-item d-flex flex-row align-items-center mb-1">
                                <div class="rounded" style="background-color: rgba(218, 218, 218, 0.17)">
                                    <div class="avatar avatar-lg rounded" style="height: 50px;width: 50px;background: url('<?= $config['groupBadgeURL'] ?><?= filter($getUsersDev['badge']) ?>') center center no-repeat;"></div>
                                </div>
                                <div class="flex-column justify-content-end">
                                    <h4 class="ml-3" style=" font-family: arial; "><?= filter($getUsersDev['name']) ?></h4>
                                    <small class="ml-3" style=" font-family: arial; "><?= filter($getUsersDev['desc']) ?>.</small>
                                </div>
                            </div>
					
		 <?php
					}
		 
				}
				else
				{
					echo'
					<div class="list-group-item d-flex flex-row align-items-center mb-1">
						<div class="col">
                                            <div class="alert alert-danger" role="alert">
                                                <strong>'.userHome('username').', </strong> '.$lang["errorhome2"].'
                                            </div>
                                        </div>
					</div>
					';
				}
		   }
		 ?>

							
							
							
                     </div>
                </div>
            </div>
        </div>
    </div>
     
    <div class="modal fade" id="friendsModal" tabindex="-1" role="dialog" aria-labelledby="#friendsModal" aria-hidden="true">
	         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title"><?=$lang["Homelist4"];?></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style=" font-size: 45px; position: absolute; margin-left: -30px; margin-top: -10px; ">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="list-group">
					
			                <div class="item-list--grid">
                    <ul>
					<?php
						$userId = userHome('id');
						$sql = $dbh->prepare("SELECT * FROM messenger_friendships WHERE user_one_id=:userid OR user_two_id=:userid ORDER BY RAND()");
						$sql->bindParam(':userid', $userId);
						$sql->execute();
						if (!$sql->RowCount() == 0)
						{
							while($news = $sql->fetch())
							{
								$id = (userHome('id') == $news['user_two_id'] ? $news['user_one_id'] : $news['user_two_id']);
								$getUser = $dbh->prepare("SELECT * FROM users WHERE id = :id");
								$getUser->bindParam(':id', $id);
								$getUser->execute();
								$getUserData = $getUser->fetch();
								echo'
                        <li class="item item--friend" style=" width: 90px; ">
                            <a class="item__content" href="/home/'.filter($getUserData['username']).'">
                                <div class="item__icon">
                                    <!---->
                                    <img width="64" height="110" class="imager" src="'. $config['lookUrl'].''.filter($getUserData['look']).'&direction=4&head_direction=4&gesture=sml&size=b&headonly=0" style="min-width: 64px;">
                                    <!---->
                                    <!---->
                                </div>
                                <div class="item__text">
                                    <h6 class="item__title item__title--single-line">'.filter($getUserData['username']).'</h6>
                                </div>
                            </a>
                        </li>
								';
							}
						}
						else
						{
							echo '						
							<div class="col">
                                            <div class="alert alert-danger" role="alert">
                                                <strong>'.userHome('username').', </strong> '.$lang["errorhome4"].'
                                            </div>
                                        </div>';
						}
					?>
                        <!---->

</ul>

</div>
							
							
							
                     </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>