<?php
	if(!defined('BRAIN_CMS')) 
	{ 
		die('Sorry but you cannot access this file!'); 
	}
	
	/* Database Setting */
	$db['host'] = '127.0.0.1'; //Mysql's Host
	$db['port'] = '3306'; //Mysql's port
	$db['user'] = "root"; //Mysql's user
	$db['pass'] = ''; //Mysql's password
	$db['db'] = "akiled2"; //Mysql's database
	
	/* Emu Settings */
	$config['hotelEmu'] = 'plusemu'; // plusemu // arcturus
	/*Creditos */
	$hotel['credits'] = 'Genaro Carrillo, Letex & Carlos Mota';
	$hotel['version'] = 'Slopt CMS'; //CMS
	$hotel['cache'] = '232323'; //Cache

	/* Website Setting */
    $config['hotelUrl'] = "http://mezz.localhost";//Address of your hotel. Does not end with a "/"
    $config['skin'] = "mezz"; //Skin/template of your website
    $config['lang'] = "es"; //Language of your website en/nl/es
    $config['hotelName'] = "Hionix"; //Name of your hotel
    $config['favicon'] = "http://mezz.localhost/favicon.ico";
    $config['staffCheckHk'] = true; //Enable the staff pin in the housekeeping (true) or disable it (false)
    $config['staffCheckHkMinimumRank'] = 15; //Minium staff rank to get the staff pin in the housekeeping
    $config['maintenance'] = false; //Enable the maintenance of your website (true) or disable it (false)
    $config['AvatarURL'] = "http://swfs.localhost/avatar/avatarimage.php?figure=";
    $config['userLikeEnable'] = true; // Enable user likes
    $config['newsCommandEnable'] = true; //Enable news commands
    $config['newsCommandFilter'] = true; //Enable wordfilter on news commands (the filter use the db tabels wordfilter and wordfilter_characters)
    $config['alertReferrer'] = false;
    $config['alert'] = ''; //Alert message. If you don't want a alert, you do leave it blank.
    $config['brainversion'] = '1.9.1'; // Please do not change.
	$config['alertReferrer'] = true;
	$config['RankMin'] = "12"; //Autoridad para entrar a la hk
	$config['RankMax'] = "18"; //Todos los pluggin de la hk
	$config['preciovip'] = "30";//Precio VIP mes
	$config['precioloteria'] = "30";//Precio loteria mes
	$config['homeRoom'] = "2104";
	$config['onlineCounter'] = true;	
	$config['groupBadgeURL'] = "http://mezz.localhost/habbo-imaging/badge.php?badge=";
	$config['roomthumball'] = "http://mezz.localhost/newfoto/thumbnail/"; 
	$config['roomphotos'] = "http://swfs.localhost/photos/"; 
	$config['badgeURL'] = "http://swfs.localhost/c_images/album1584/"; 
	$config['badgeURLu'] = "http://mezz.localhost/swfs/c_images/placas/"; 
	$hotel['swfLink'] = "http://swfs.localhost/c_images/album1584/"; 
	$config['lookUrl'] = "http://swfs.localhost/avatar/avatarimage.php?figure="; 
	$config['pathswf'] = "http://swfs.localhost";
	
	/* Email Settings */
	$email['mailServerHost'] = 'smtp.gmail.com';
	$email['mailServerPort'] = 587;
	$email['SMTPSecure'] = 'TLS';
	$email['mailUsername'] = 'gmail@gmail.com';
	$email['mailPassword'] = '*****';
	$email['mailLogo'] = 'http://127.0.0.1/templates/brain/style/images/logo/logo.png';
	$email['mailTemplate'] = '/system/app/plugins/PHPmailer/temp/resetpassword.html';
	
	/* Social settings */
	$config['instagram'] = 'https://www.instagram.com/comunidad_hionix/';
	$config['radio'] = '';
	$config['snapchat'] = '#';
	$config['discord'] = 'https://discord.gg/uJJFauQ3pa';
	$config['facebook'] = 'https://www.facebook.com/Comunidad_hionix-101414134972034/';
	$config['facebookEnable'] = false;
	$config['twitter'] = '#';
	$config['twitterEnable'] = false;
	
	/* Register Setting */
	$config['startMotto'] = "Hola Soy Nuevo En hionix"; //Register start motto
	$config['credits']	= "1000";
	$config['duckets']	= "0";
	$config['diamonds']	= "0";
	$config['diamondsRef']	= "0";
	$config['registerEnable'] = true;
	$config['look'] = "ch-3668-110-100.fa-3276-72.cc-3867-73-73.ha-3478-110.lg-30061-82-92.sh-290-92.hd-180-1.hr-3163-1404";
	
	/* Google recaptcha Site Key  
	   Go to this website to create a recaptcha Site Key: https://www.google.com/recaptcha/intro/index.html	*/
	$config['recaptchaSiteKey'] = "";
	$config['recaptchaSiteKeyEnable'] = false;

	/* App */

	$config['urlApp'] = "https://google.com";
	$config['urlAppWindows'] = "https://www.microsoft.com/pt-br/software-download/windows11";
	$config['urlAppMac'] = "https://support.apple.com/pt_BR/downloads/macos";
	
	/* Buy VIP Settings */
	$config['vipCost'] = "25";
	$config['vipRankToGet'] = "2";
	$config['vipBadge'] = "vip";
	
		/* Ftp Setting */
	$config['IP'] = "";
	$config['usuario']	= "";
	$config['password']	= "";
	
	switch($config['hotelEmu'])
	{
		case "arcturus":
		$emuUse['user_wardrobe']  = 'users_wardrobe ';
		$emuUse['ip_last'] = 'ip_current';
		$emuUse['respect'] = 'respects_received';
		$emuUse['user_stats'] = 'users_settings';
		$emuUse['user_stats_user_id'] = 'user_id';
		$emuUse['OnlineTime'] = 'online_time';
		break;
		case "plusemu":
		$emuUse['user_wardrobe']  = 'user_wardrobe ';
		$emuUse['ip_last'] = 'ip_last';
		$emuUse['respect'] = 'Respect';
		$emuUse['user_stats'] = 'user_stats';
		$emuUse['user_stats_user_id'] = 'id';
		$emuUse['OnlineTime'] = 'OnlineTime';
		break;
		default:
		//Nothing
		break;
	}