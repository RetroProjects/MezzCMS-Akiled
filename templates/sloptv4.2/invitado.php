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

                                    <a href="/"><div style="float:left;color: #d0d0d0;">Inicia sesión para poder acceder a todas las opciones</div></a>
                                </div>
                            </div>
                        </div>
						
						
						
						
						
                        <div style="margin-top: 90px;">				
<div style=" padding: 30px;margin-top:-20px; z-index: 33;">

					<?php
					$sql = $dbh->prepare("SELECT id,title,image,shortstory,date FROM cms_news ORDER BY id DESC LIMIT 5");
					$sql->execute();
					while ($news = $sql->fetch())
					{
					    $getMessageUser = $dbh->prepare("SELECT id,username,look FROM users WHERE username = :username");
					    $getMessageUser->bindParam(':username', $news['username']);
					    $getMessageUser->execute();
					    $user = $getMessageUser->fetch();
						echo'
						
<article class="news-header news-header--column">
        <a href="/newsinvitado/'.filter($news["id"]).'" class="news-header__link news-header__banner">
            <figure class="news-header__viewport">
                <img src="'.$news["image"].'?'. $hotel['cache'].'" class="news-header__image news-header__image--featured">
                <img src="'.$news["image"].'?'. $hotel['cache'].'" class="news-header__image news-header__image--thumbnail" style=" transform: scale(3); image-rendering: pixelated; right: 100px; ">
            </figure>
        </a>
        <a href="/newsinvitado/'.filter($news["id"]).'" class="news-header__link news-header__wrapper">
            <h2 class="news-header__title">'.filter($news["title"]).'</h2>
        </a>
        <aside class="news-header__wrapper news-header__info">
            <time class="news-header__date" style=" color: #efefef; ">'.filter(gmdate("d-m-y", $news["date"])).'</time>
        </aside>
         <a href="/newsinvitado/'.filter($news["id"]).'" style=" color: #fff; "><p class="news-header__wrapper news-header__summary" >'.substr(filter($news["shortstory"]), 0, 95).'... '.$lang["leermas"].'</p>	</a>
    </article>

						';
					}
					?>    
	

					
            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>