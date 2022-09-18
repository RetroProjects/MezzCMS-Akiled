<html>

<head>
    <title><?= $config['hotelName'] ?> - <?= $lang["Rtittle"]; ?></title>
    <link rel="stylesheet" type="text/css" href="/templates/<?= $config['skin'] ?>/assets/css/index.css?<?= $hotel['cache'];?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<link href="https://unpkg.com/webkul-micron@1.1.6/dist/css/micron.min.css" type="text/css" rel="stylesheet">
	<script src="https://unpkg.com/webkul-micron@1.1.6/dist/script/micron.min.js" type="text/javascript"></script>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<style type="text/css">body, a, a:hover {cursor: url(http://cur.cursors-4u.net/holidays/hol-4/hol302.cur), progress;}</style>

</head>

<Style>
.hu__hu__ { animation: hu__hu__ infinite 2s ease-in-out }
@keyframes hu__hu__ {
    50% { transform: translateY(-10px) }
}
</Style>

<?php
$security=rand(100000, 900000);
?>
<body>
    <div class="heroic" style=" position: fixed; ">
        <div class="h-100">
            <div class="heroic-guest flex">
			<?php User::Register(); ?>
                <div class="heroic-guest-login flex flex-expand justify-center align-center login-left animate__animated animate__zoomInLeft">
                    <div class="left-inner">
                        <h1 class="cssanimation hu__hu__"><?=$lang["NameHotel"];?></h1>
						 <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script> 
						<script type="text/javascript" src="cssanimation-gsap.js"></script> 
                        <form action="" method="post">
                            <div class="form-group animate__animated animate__fadeInLeftBig animate__delay-0.500s" style=" margin-bottom: 2px; ">
                                <label style=" margin-bottom: 0; "><?=$lang["Iusername"];?></label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group animate__animated animate__fadeInRightBig animate__delay-0.900s" style=" margin-bottom: 2px; ">
                                <label style=" margin-bottom: 0; "><?=$lang["Remail"];?></label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="form-group animate__animated animate__fadeInLeftBig animate__delay-0.500s" style=" margin-bottom: 2px; ">
                                <label style=" margin-bottom: 0; "><?=$lang["Ipassword"];?></label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group animate__animated animate__fadeInRightBig animate__delay-0.900s" style=" margin-bottom: 2px; ">
                                <label style=" margin-bottom: 0; "><?=$lang["Rrepeatpassword"];?></label>
                                <input type="password" name="password_repeat" class="form-control">
                            </div>
                            <div class="form-group animate__animated animate__fadeInLeftBig animate__delay-0.500s" >
                                <label style=" margin-bottom: 0; "><?=$lang["Rcodigo"];?>: <?=$security;?></label>
                                <input type="text" name="code" class="form-control">
								<input type="text" name="codebueno" value="<?=$security;?>" style="visibility: hidden;width: 0;height: 0;">
                            </div>
                            <button type="submit" name="register" class="btn btn-green w-100"><?=$lang["Rbuton"];?></button>
                        </form><a href="/" class="link" style="margin-left: 60px;"><?=$lang["Rbinicio"];?></a></div>
                </div>
                <div class="flex flex-8 justify-center align-center login-right animate__animated animate__zoomInUp">
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
                                <h2><?=$lang["NameHotel"];?></h2>
                                <p><?=$lang["Imsj13"];?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="heroic-footer animate__animated animate__zoomInUp">
                <div class="footer-container"><span class="copyright">© <?=date("Y");?> <?=$lang["NameHotel"];?> | <?=$hotel['version'];?></span><a href="/privacidad" class="link"><?=$lang["Pcookies"];?></a>
                    <div class="heroic-brand"><span class="framework"><?=$hotel['version'];?></span><span class="powered-by"><?=$hotel['credits'];?></span></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>