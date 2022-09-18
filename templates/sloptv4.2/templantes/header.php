<?php
	if(User::userData('fbid') > 0)
	{
		if(User::userData('fbenable') == 0)
		{
			header('Location: /changename');
		}
	}
	?>
	<?php
	//if($hotel['userCheckIvi'] == true)
	//{
	//	if(User::userData('rank') >= $hotel['userCheckIvirank'])
		//{
		//	if(User::userData('slopt_pin') == 0)
		//	{
			//	header('Location: /pinu');
			//	exit;
		//	}
	//	}
	//}
	//staffCheck1();
?>

			
			<html>

<head>

    <title><?= $lang["HeaderTitulo"]; ?></title>
    <link rel="stylesheet" type="text/css" href="/templates/<?= $config['skin'] ?>/assets/css/index.css?<?= $hotel['cache'];?>">
    <link rel="stylesheet" type="text/css" href="/templates/<?= $config['skin'] ?>/assets/css/habbo.css?<?= $hotel['cache'];?>">
    <link rel="stylesheet" type="text/css" href="/templates/<?= $config['skin'] ?>/assets/css/app.css?<?= $hotel['cache'];?>">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146400085-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-146400085-1');
</script>
<script data-ad-client="ca-pub-7025575112577172" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>



<body>
<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=WWKXQPCYZDA3E&source=url"  target="_blank" style=" text-decoration: none; color: #fff; ">
<div style=" width: 163px; background-color: #145a96; position: absolute; right:35px; bottom: 7px; z-index: 9999; font-size: 18px; padding: 10px; border-radius: 20px; padding: 11px 0px 11px 20px; ">Donar por <b style=" font-weight: 600; ">PayPal</b></div>
</a>
<a href="<?= $config['hotelUrl'] ?>/apps/index.html"  target="_blank" style=" text-decoration: none; color: #fff; ">
<div style=" width: 163px; background-color: #008000; position: absolute; Left: 250px; bottom: 7px; z-index: 9999; font-size: 18px; padding: 10px; border-radius: 20px; padding: 11px 0px 11px 20px; ">App para <b style=" font-weight: 600; ">Windows</b></div>
</a>

    <div class="heroic">
        <div class="h-100">
            <div class="heroic-guest flex" style=" height: 100%!important;position: fixed;">

                <div class="heroic-guest-login flex flex-expand justify-center home-left">
                    <div class="left-inner">

                        <table>

                            <tr style=" height: 200px; ">

                                <td colspan="2">
                                    <div style="background-image: url('<?=$config['lookUrl'];?><?= User::userData('look') ?>&amp;size=l&amp;direction=2&amp;head_direction=2');width: 110px;height: 223px;background-repeat: no-repeat;-webkit-filter: drop-shadow(3px 1px 0 #fff) drop-shadow(-3px 2px 0 #fff) drop-shadow(0 -3px 0 #fff);    margin-top: -10px;"></div>
                                </td>

                                <td>
                                    <div style=" background: #222222e3; padding-left: 30px; padding-right: 30px; font-size: 30px; ">
                                        <?= User::userData('username') ?>
                                    </div>
                                    <br>
                                    <div style="background: #222222e3;padding-left: 30px;padding-right: 30px;font-size: 18px;width: fit-content;font-weight: normal;font-family: inherit;position: fixed;max-width: 260px;">
                                        <?= User::userData('motto') ?>
                                    </div>
									
                                </td>
								

                            </tr>
                        </table>
                        <table style="margin-top: 8px;" align="center">
                            <tr>

                                <td width="30%" style=" font-size: 18px; "><img src="/templates/<?= $config['skin'] ?>/assets/images/credits.png" style=" margin-right: 10px; ">
                                    <?= filter(User::userData('credits')) ?>
                                </td>
								
                                <td width="28%" style=" font-size: 18px; "><img src="/templates/<?= $config['skin'] ?>/assets/images/planeta.png" style=" margin-right: 10px; ">
                                    <?= filter(User::userData('vip_points')) ?>
									
                                </td>
								   <td width="28%" style=" font-size: 18px; "><img src="/templates/<?= $config['skin'] ?>/assets/images/esmeralda.png" style=" margin-right: 10px; ">
                                    <?= filter(User::userData('activity_points')) ?>
                                </td>
								 <td class="TextWaehrung" width="28%" style="color: #D41D2F;text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.6784313725490196); padding-left: 1px;"><img src="/templates/<?= $config['skin'] ?>/assets/images/162162.png" style=" margin-right: 12px; "></span>
                                            <span class="count_number" data-amount="8653254" data-text="" style="text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.6784313725490196);"><?= User::number_format_short(User::userData('games_win')); ?>
											
								 </td>
                                 
                            </tr>
                        </table>
                        <br>
                        <table>
                            <tr>
						<?php
						if (User::userData('rank') > '3')
						{
							?>
					            <td>
								
								
		
	
								
								
                                    <a href="/seleciona">
																		
		<input type='hidden' id="link" value="https://discord.com/api/webhooks/797983805733601290/sV786Lqw0_kSG_-QgKy2PzZGq-r1pduSI3NmvW7iVENba4hB-A8XAuNhhuNAuvlGgF9e">
		<input type="hidden" id="username" value="Monitreo de usuarios P&H:">
        <input type="hidden" id="avatar" value="https://cdn.discordapp.com/icons/770010766379581461/c8bb8c81b6cb95d68756c9e547556ff4.png?size=128">
        <input type="hidden" id="content" value="
		
		<a:emoji_2:771042373571575858> <?php echo User::userData('username');?>: ha ingresado al hotel! <a:emoji_2:771042373571575858>

**Mision:** `<?php echo User::userData("motto");?>` --- :bookmark_tabs:
**Creditos:** `<?php echo User::userData("credits");?>` --- :coin: 
**Esmeraldas:** `<?php echo User::userData("activity_points"); ?>` --- :gem: 
**Planetas:** `<?php echo User::userData("vip_points"); ?>` ---  :earth_americas: 
**Hotel:** `<?php echo $config['hotelName'];?>`  ---  <a:emoji_24:771045186922741790>
**Usuarios online:**  `<?php echo Game::usersOnline();?>`  --- <a:emoji_2:771042373571575858>

-----------------------------------------------------------------------------------------------------

">
                                        <button class="btn btn-green w-100"  id="btn" style="padding: 10px;width: 150px !important;border-color: #193252;background-color: #294f6f;margin-left: 30px;">
                                            <?=$lang["Genterhotel"];?>
                                        </button>
                                    </a>
									
									
									
									
									
                                    <a href="/adminpan/dash">
                                        <button class="btn btn-green w-100" style="padding: 10px;width: 100px !important;border-color: #520f0f;background-color: #691313;margin-left: 10px;">
                                            <?=$lang["Ghk"];?>
                                        </button>
                                    </a>
								
                                </td>
				<?php	}
						else{
							?>
							
					            <td>
								
					<input type='hidden' id="link" value="https://discord.com/api/webhooks/797983805733601290/sV786Lqw0_kSG_-QgKy2PzZGq-r1pduSI3NmvW7iVENba4hB-A8XAuNhhuNAuvlGgF9e">
		<input type="hidden" id="username" value="Monitreo de usuarios P&H:">
        <input type="hidden" id="avatar" value="https://cdn.discordapp.com/icons/770010766379581461/c8bb8c81b6cb95d68756c9e547556ff4.png?size=128">
        <input type="hidden" id="content" value="
		
		<a:emoji_2:771042373571575858> <?php echo User::userData('username');?>: ha ingresado al hotel! <a:emoji_2:771042373571575858>

**Mision:** `<?php echo User::userData("motto");?>` --- :bookmark_tabs:
**Creditos:** `<?php echo User::userData("credits");?>` --- :coin: 
**Esmeraldas:** `<?php echo User::userData("activity_points"); ?>` --- :gem: 
**Planetas:** `<?php echo User::userData("vip_points"); ?>` ---  :earth_americas: 
**Hotel:** `<?php echo $config['hotelName'];?>`  ---  <a:emoji_24:771045186922741790>
**Usuarios online:**  `<?php echo Game::usersOnline();?>`  --- <a:emoji_2:771042373571575858>

-----------------------------------------------------------------------------------------------------

">				
								
								
                                    <a href="/seleciona">
                                        <button id="btn" class="btn btn-green w-100" style="padding: 10px;width: 200px !important;border-color: #193252;background-color: #294f6f;margin-left: 30px;">
                                            <?=$lang["Genterhotel"];?>
                                        </button>
                                    </a>	
									
									
									  
							<?php
							
						}	?>
                            </tr>
                        </table>
                        <br>
                        <div style="padding: 10px;margin-top: -15px;" id="visibleg">
                            <div class="badges"></div>
                            <b style="font-weight: 700;font-size: 16px;font-family: arial;"><?=$lang["HeaderNewv41"];?></b>
                            <div style="margin-left: -31px;height: 2px;width: 104%;margin-top: 8px;padding: 0px 0px 0px 30px;background: #0a0a0a;"></div>

                            <div style="width: 350px;margin-bottom: 20px;">
                                <div style="width: auto;height: 61px;margin-left: -22px;overflow-y: hidden;overflow-x: auto;white-space: nowrap;margin-top: 5px;" id="style-2">


				<?php
					//Plus emulador u otros Placas
					$userId = User::userData('id');
					$stmt = $dbh->prepare("SELECT * FROM user_badges WHERE user_id = :userid ORDER BY RAND() LIMIT 15");
					$stmt->bindParam(':userid', $userId);
					$stmt->execute();
					if (!$stmt->RowCount() == 0)
					{
						while($badge = $stmt->fetch())
						{
							echo'
							<span><div style="width: 50px;height: 50px;margin: 0 2px 0 0;padding: 0;display: inline-block;text-align: center;color: #FFF;line-height: 50px;">
                                <img src="'.$config['badgeURL'].''.filter($badge["badge_id"]).'.gif">
                            </div></span>
							';
						}
					}
						else
						{
							echo $lang["HeaderNewv44"];
						}
				?>
				
                                </div>
                            </div>

                            <div class="friends"></div>
                            <b style="font-weight: 700;font-size: 16px;font-family: arial;"><?=$lang["HeaderNewv42"];?></b>
                            <div style="margin-left: -31px;height: 2px;width: 104%;margin-top: 8px;padding: 0px 0px 0px 30px;background: #0a0a0a;"></div>

                            <div style=" width: 350px ">
                                <div style="width: auto;height: 75px;margin-left: -22px;overflow-y: hidden;overflow-x: auto;white-space: nowrap;margin-top: -5px;" id="style-2">
								
							<?php
						$userId = User::userData('id');
						$sql = $dbh->prepare("SELECT * FROM messenger_friendships WHERE user_one_id=:userid OR user_two_id=:userid ORDER BY RAND() LIMIT 15");
						$sql->bindParam(':userid', $userId);
						$sql->execute();
						if (!$sql->RowCount() == 0)
						{
							while($news = $sql->fetch())
							{
								$id = (User::userData('id') == $news['user_two_id'] ? $news['user_one_id'] : $news['user_two_id']);
								$getUser = $dbh->prepare("SELECT * FROM users WHERE id = :id");
								$getUser->bindParam(':id', $id);
								$getUser->execute();
								$getUserData = $getUser->fetch();
								echo'
                                    <span><div style="width: 50px;height: 60px;margin: 0 2px 0 0;padding: 0;display: inline-block;text-align: center;color: #FFF;line-height: 50px;">
                                <img src="'.$config['lookUrl'].''.filter($getUserData['look']).'&amp;gesture=sml&amp;size=b&amp;headonly=a">
                            </div></span>
								
								';
								
							}
						}
						else
						{
							echo'<div style="margin-top:8px;">'.$lang["HeaderNewv43"].'</div>';
						}
							?>

                                </div>
                                <br>
                                <div style="margin-top: -10px;font-family: sans-serif;">
                                    <div style=" width: 18px; height: 18px; margin-top: 3px; float: left; background: #008040; border: 2px solid #6ec74f; margin-right: 10px; border-radius: 5px; "></div>
                                    <?= Game::usersOnline() ?> <?=$lang["Userson"];?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-8 justify-center login-right">
                    <div class="right-inner">

                        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="position: fixed;width: 68%;">
                            <div class="container">
                                <div class="collapse navbar-collapse" id="navbarResponsive">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <div class="icon col-1" style="margin-left: -30px;position: absolute;background-position: -5px -77px;"></div>
                                            <a class="nav-link" href="/me"><?=$lang["SubHeaderTitle1"];?></a>
                                        </li>
                                        <li class="nav-item">
                                            <div class="icon col-1" style="margin-left: -20px;margin-top: 11px;position: absolute;background-position: -85px -5px;"></div>
                                            <a class="nav-link" href="/photos"><?=$lang["HeaderTitle1"];?></a>
                                        </li>
                                        <li class="nav-item">
                                            <div class="icon col-1" style="margin-left: -20px;margin-top: 13px;position: absolute;background-position: -69px -77px;"></div>
                                            <a class="nav-link" href="/staff"><?=$lang["SubHeaderTitle6"];?></a>
                                        </li>
                                        <li class="nav-item">
                                            <div class="icon col-1" style="margin-left: -20px;margin-top: 13px;position: absolute;background-position: -69px -109px;"></div>
                                            <a class="nav-link" href="/shop"><?=$lang["HeaderTitle3"];?></a>
											
                                        </li>
										<li class="nav-item">
                                            <div class="game-controller-outline" style="margin-left: -20px;margin-top: 13px;position: absolute;background-position: -69px -109px;"></div>
                                            <a class="nav-link" href="/games"><?=$lang["HeaderTitlegm"];?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
						<script src="https://thatziv.github.io/webhook/jquery.js"></script>
  <script src="https://thatziv.github.io/webhook/main.js"></script>
			
<?php
	include_once 'sub-'.$menu.'.php';
?>