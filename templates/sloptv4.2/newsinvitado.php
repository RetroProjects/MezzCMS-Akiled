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
</head>

<body>
<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=WWKXQPCYZDA3E&source=url"  target="_blank" style=" text-decoration: none; color: #fff; ">
<div style=" width: 163px; background-color: #145a96; position: absolute; right: 60px; bottom: 23px; z-index: 9999; font-size: 18px; padding: 10px; border-radius: 20px; padding: 11px 0px 11px 20px; ">Donar por <b style=" font-weight: 600; ">PayPal</b></div>
</a>
    <div class="heroic">
        <div class="h-100">
            <div class="heroic-guest flex" style=" height: 100%!important;position: fixed;">

                <div class="heroic-guest-login flex flex-expand justify-center home-left">
                    <div class="left-inner">

                        <table>

                            <tr style=" height: 200px; ">

                                <td colspan="2">
                                    <div style="background-image: url('<?=$config['lookUrl'];?>hr-115-1035.hd-180-10.lg-275-64.ch-215-62.sh-290-62&amp;size=l&amp;direction=2&amp;head_direction=2');width: 110px;height: 223px;background-repeat: no-repeat;-webkit-filter: drop-shadow(3px 1px 0 #fff) drop-shadow(-3px 2px 0 #fff) drop-shadow(0 -3px 0 #fff);    margin-top: -10px;"></div>
                                </td>

                                <td>
                                    <div style=" background: #222222e3; padding-left: 30px; padding-right: 30px; font-size: 30px; ">
									Invitado
                                    </div>
                                    <br>
                                    <div style="background: #222222e3;padding-left: 30px;padding-right: 30px;font-size: 18px;width: fit-content;font-weight: normal;font-family: inherit;position: fixed;max-width: 260px;">
                                        Estoy viendo el hotel
                                    </div>
                                </td>

                            </tr>
                        </table>
                        <table style="margin-top: 8px;" align="center">
                            <tr>

                                <td width="25%" style=" font-size: 18px; "><img src="/templates/<?= $config['skin'] ?>/assets/images/credits.png" style=" margin-right: 10px; ">
                                    ∞
                                </td>
                                <td width="25%" style=" font-size: 18px; "><img src="/templates/<?= $config['skin'] ?>/assets/images/diamonds.png" style=" margin-right: 10px; ">
                                    ∞
                                </td>

                            </tr>
                        </table>
                        <br>
                        <table>
                            <tr>

					            <td>
                                    <a href="/">
                                        <button class="btn btn-green w-100" style="padding: 10px;width: 300px !important;border-color: #193252;background-color: #294f6f;margin-left: 30px;">
                                            Iniciar sesión
                                        </button>
                                    </a>	

                            </tr>
                        </table>
                        <br>
                        <div style="padding: 10px;margin-top: -15px;" id="visibleg">
                            <div class="badges"></div>
                            <b style="font-weight: 700;font-size: 16px;font-family: arial;"><?=$lang["HeaderNewv41"];?></b>
                            <div style="margin-left: -31px;height: 2px;width: 104%;margin-top: 8px;padding: 0px 0px 0px 30px;background: #0a0a0a;"></div>

                            <div style="width: 350px;margin-bottom: 20px;">
                                <div style="width: auto;height: 61px;margin-left: -22px;overflow-y: hidden;overflow-x: auto;white-space: nowrap;margin-top: 5px;" id="style-2">


				Únete a esta gran comunidad para tener placas
				
                                </div>
                            </div>

                            <div class="friends"></div>
                            <b style="font-weight: 700;font-size: 16px;font-family: arial;"><?=$lang["HeaderNewv42"];?></b>
                            <div style="margin-left: -31px;height: 2px;width: 104%;margin-top: 8px;padding: 0px 0px 0px 30px;background: #0a0a0a;"></div>

                            <div style=" width: 350px ">
                                <div style="width: auto;height: 75px;margin-left: -22px;overflow-y: hidden;overflow-x: auto;white-space: nowrap;margin-top: -5px;" id="style-2">
				Únete a esta gran comunidad para tener amigos

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
                                            <a class="nav-link" href="/">Iniciar sesión</a>
                                        </li>
                                        <li class="nav-item">
                                            <div class="icon col-1" style="margin-left: -20px;margin-top: 11px;position: absolute;background-position: -85px -5px;"></div>
                                            <a class="nav-link" href="/register">Registrarme</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>

   <div style="margin-top: 33px;height: 40px;background: #1f1f1f;background-position: center;width: 66.7%;margin-left: -2.95%;position: fixed;z-index: 5;">
                            <div style="width: 100%; height: 100%; ">
                                <div style=" font-size: 16px; padding: 7px;float:right;margin-right:15%;">

                                    <a href="/invitado"><div style="float:left;color: #d0d0d0;">Volver a las noticias</div></a>
                                </div>
                            </div>
                        </div>
						
						
						
<style>
.errorSucces { background: #4c4c4c; padding: 10px; margin-bottom: 10px;}
.error{z-index: 9;position: inherit;margin-top: 0;margin-left: 0;}}
</style>
                        <div style="margin-top: 100px;">
<div style="margin-top:60px; z-index: 33;">

	
		
		<?php
		
			if (empty($_GET['id']))
			{
				header("Location:/");
			}
			else
			{
				if (!is_numeric($_GET['id']))
				{
				header("Location:/");
				}
				$news = $dbh->prepare("SELECT * FROM cms_news WHERE id = :newsid");
				$news->bindParam(':newsid', $_GET['id']);
				$news->execute();
				if ($news->RowCount() == 1)
				{
					while ($news2 = $news->fetch())
					{
					    $getMessageUser = $dbh->prepare("SELECT id,username,look FROM users WHERE id = :id");
						$getMessageUser->bindParam(':id', $news2['author']);
						$getMessageUser->execute();
						$user = $getMessageUser->fetch();
						echo'					 
						
            <div class="card shadow" style=" max-width: 100%; "> 
        <div class="card-header bg-bris">
           '.filter($news2["title"]).'
            <div class="float-right"><div class="avatar rounded-0 bg-transparent" style="background-image:url('.$config['lookUrl'].''. filter($user['look']) .'&amp;size=b&amp;direction=3&amp;head_direction=2);width: 63px;height: 59px;position: absolute;margin-left: -70px;margin-top: -30px;"></div>'.$lang["newspubli"].' '. filter($user['username']) .' '.$lang["newspubli2"].' '.filter(gmdate("d-m-y", $news2["date"])).'</div>
        </div>
        <div class="card-body">
'.html_entity_decode($news2['longstory']).'

        </div>
    </div>
	
	

	

	
				';
					}
				}
				else
				{
					header("Location:/");
				}
			}
		?>
		<br>
				<?php
					$getMessage = $dbh->prepare("SELECT id,userid,newsid,date,message,hash FROM cms_news_message WHERE newsid = :id");
					$getMessage->bindParam(':id', $_GET['id']);
					$getMessage->execute();
					if ($getMessage->RowCount() > 0)
					{
						while ($getMessageData = $getMessage->fetch())
						{
							$getMessageUser = $dbh->prepare("SELECT id,username,look FROM users WHERE id = :id");
							$getMessageUser->bindParam(':id', $getMessageData['userid']);
							$getMessageUser->execute();
							$user = $getMessageUser->fetch();
							echo'
							
                       <a href="/home/'.filter($user["username"]).'" class="staff-box rounded d-block text-decoration-none mb-3">

                <div class="bg-white p-3 rounded-bottom" style="color: #fff;background: rgba(33, 33, 33, 0.5490196078431373)!important;">
									 <div class="avatar rounded-0 bg-transparent" style="background-image:url('.$config['lookUrl'].''.$user["look"].'&amp;size=b&amp;direction=3&amp;head_direction=2);height: 60px; width: 60px; background-repeat: no-repeat; float: left; margin-top: -20px; margin-left: -10px; margin-right: 20px;"></div>

                    <div class="d-flex flex-row align-items-center justify-content-between">
                        <div class="d-flex flex-column">
                            <span class="text-darker mr-3 text-truncate">'.filter($user["username"]).'</span>
                            <small>'.filter(html_entity_decode($getMessageData["message"])).'</small>
                        </div>
                        <div class="mr-3">'.filter(gmdate("d-m-y", $getMessageData["date"])).'</div>
                    </div>
                </div>
            </a>
		  ';
		  
		  		if ($getMessageData['userid'] == User::userData('id') || User::userData('rank') >= 7)
				{
					echo'
					<form method="post">
					<button name="deletecommand" type="submit" style="border: 0; background: transparent">
					<img src="/templates/'. $config['skin'] .'/assets/images/trash.png" width="16" height="16"/ style="margin-left: 200px;margin-top: -80px;">
			<input type="hidden" name="hashid" value="'.filter($getMessageData['hash']).'">
					</button>
					</form>
					';
				}
						}
					}
				?>	
            </div>
        </div>
    </div>
</body>

</html>