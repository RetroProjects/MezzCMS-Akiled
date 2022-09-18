<html>

<head>
    <title>✨ <?= $config['hotelName'] ?> ✨ - <?= $lang["Itittle"]; ?></title>
    <meta property="og:title" content="  ✨ <?= $config['hotelName'] ?> Hotel " />
	<meta name="description" content="<?= $config['hotelName'] ?> Hotel, ¡Haz amig@s, únete a la diversión, pásalo genial en mayor Hotel virtual, con creditos y diamantes gratis, todo actualizado y lo mejor de este año ✅ !" />
	<link rel="stylesheet" type="text/css" href="/templates/<?= $config['skin'] ?>/assets/css/index.css?<?= $hotel['cache'];?>">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<link href="https://unpkg.com/webkul-micron@1.1.6/dist/css/micron.min.css" type="text/css" rel="stylesheet">
<script src="https://unpkg.com/webkul-micron@1.1.6/dist/script/micron.min.js" type="text/javascript"></script>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
				<script type="text/javascript">function siteUrl() {return "";}function showReg() {window.location = siteUrl() + "register";}  function fblogin() {window.location = siteUrl() + "/config/app/plugins/fblogin/fbconfig.php";}</script>

<style type="text/css">body, a, a:hover {cursor: url(http://cur.cursors-4u.net/holidays/hol-4/hol302.cur), progress;}</style>

<link href="cssanimation.min.css" rel="stylesheet">

<script data-ad-client="ca-pub-7025575112577172" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<style>

.hu__hu__ { animation: hu__hu__ infinite 2s ease-in-out }
@keyframes hu__hu__ {
    50% { transform: translateY(-10px) }
}

</style>
<body>

 

     <div class="heroic" style=" position: fixed; ">
        <div class="h-100 " >
            <div class="heroic-guest flex">
			
			<?php User::Login(); ?>
                <div class="heroic-guest-login flex flex-expand justify-center align-center login-left animate__animated animate__backInLeft">
                    <div class="left-inner ">
                        <h1 class="cssanimation hu__hu__ "><?=$lang["NameHotel"];?></h1>
						
					<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script> 
					<script type="text/javascript" src="cssanimation-gsap.js"></script> 
                        <p><?=$lang["Islogan2"];?></p>
						
						
                        <form action="" method="post">
						                        
										<?php
										if($config['facebookLogin'] == true)
										{
										?>
						
						<div onclick="fblogin();" class="submit" style="width: 40px;float: right;margin-top: -20px;border: 2px solid #224998;background: #4267b2;font-weight: 700;text-transform: inherit;font-size: 20px;padding: 12px;margin-bottom: 0;line-height: .8;margin-left: 126px;cursor: pointer;border-radius: 5px;padding-top: 0px;padding-left: 14px;line-height: 40px;height: 40px;">f</div>
										<?php 
										}
									?>
                            <div class="form-group animate__animated animate__fadeInLeftBig animate__delay-0.500s">
                                <label><?=$lang["Iusername"];?></label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group animate__animated animate__fadeInRightBig animate__delay-0.900s">
                                <label><?=$lang["Ipassword"];?></label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <button type="submit" name="login" class="btn btn-green w-100 " data-micron="bounce"><?=$lang["Itittle"];?></button>
                        </form><a href="/register" class="link"><?=$lang["Iolvide"];?></a></div>
                </div>
                <div class="flex flex-8 justify-center align-center login-right animate__animated animate__backInRight">
                    <div class="right-inner">
                        <h6><?= Game::usersOnline() ?> <?=$lang["Userson"];?></h6>
                        <h2><?=$lang["Imsj4"];?></h2>
                        <div class="flex flex-row flex-wrap">
                            <div class="flex flex-6 has-margin">
                                <div class="article"><img src="/templates/<?= $config['skin'] ?>/assets/images/new1.png">
                                    <h3><?=$lang["Imsj5"];?></h3>
                                    <p><?=$lang["Imsj6"];?></p>
                                </div>
                            </div>
                            <div class="flex flex-6 has-margin">
                                <div class="article"><img src="/templates/<?= $config['skin'] ?>/assets/images/new2.png">
                                    <h3><?=$lang["Imsj7"];?></h3>
                                    <p><?=$lang["Imsj8"];?></p>
                                </div>
                            </div>
                            <div class="flex flex-6 has-margin">
                                <div class="article"><img src="/templates/<?= $config['skin'] ?>/assets/images/new3.png">
                                    <h3><?=$lang["Imsj9"];?></h3>
                                    <p><?=$lang["Imsj10"];?></p>
                                </div>
                            </div>
                            <div class="flex flex-6 has-margin">
                                <div class="article"><img src="/templates/<?= $config['skin'] ?>/assets/images/new4.png">
                                    <h3><?=$lang["Imsj11"];?></h3>
                                    <p><?=$lang["Imsj12"];?></p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row">
                            <div class="jumbotron flex flex-column flex-7" style=" flex: 0 0 80%; ">
                                <h2>Ahora puedes entrar en modo invitado</h2>
                                <p>Podras ver últimas noticias y la interfaz que te espera al registrarte a esta comunidad.</p>
								                                    <a href="/invitado">
                                        <button class="btn btn-green w-100 " data-micron="bounce" style="padding: 10px;width: 300px !important;border-color: #105416;background-color: #2b6f31;margin-left: 25%;">
                                            Modo Invitado
                                        </button>
                                    </a>	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
            <div class="heroic-footer animate__animated animate__zoomInUp">
                <div class="footer-container"><span class="copyright">© <?=date("Y");?> <?=$lang["NameHotel"];?> | <?=$hotel['version'];?></span><a href="/privacidad" class="link" style=" color: #fff; "><?=$lang["Pcookies"];?></a><a href="/terminos" class="link" style=" color: #fff; "><?=$lang["Terminos"];?></a>
                    <div class="heroic-brand"><span class="framework"><?=$hotel['version'];?></span><span class="powered-by"><?=$hotel['credits'];?></span></div>
                </div>
            </div>
        </div>
    </div>
	
	
</body>

</html>