<?php
if (!defined('BRAIN_CMS')) {
	die('Lo sentimos, pero no se puede acceder a este archivo.');
}

/* Database Setting - Configuración de Base de Datos.*/
$db['host'] = '127.0.0.1'; // Mysql's Host - Host (Alojamiento) MySql.
$db['port'] = '3306'; // Mysql's port - Puerto MySql.
$db['user'] = "root"; // Mysql's user - Usuario MySql.
$db['pass'] = ''; // Mysql's password - Contraseña MySql.
$db['db'] = "mezz"; // Mysql's database - Nombre de base de datos MySql. 

/* Emu Settings - Configuración de Emulador */
$config['hotelEmu'] = 'plusemu'; // plusemu // arcturus

/* Greetings and Credits - Saludos y Creditos */
$hotel['credits'] = 'Genaro Carrillo, Letex, Carlos Mota & Delevoped BrainCMS';
$hotel['version'] = 'Mezz CMS'; // CMS
$hotel['cache'] = '232323'; // Cache

/* Website Setting - Configuración del sitio web */
$config['hotelUrl'] = "http://mezz.localhost"; // Address of your hotel. Does not end with a "/" - Dirección de su hotel. no termina con "/".
$config['skin'] = "mezz"; // Skin/template of your website - Plantilla de tú sitio web.
$config['lang'] = "es"; // Language of your website en/nl/es - Lenguaje de tú sitio web en/es/es1/nl.
$config['hotelName'] = "Mezz"; // Name of your hotel - Nombre de tú hotel.
$config['favicon'] = "http://mezz.localhost/favicon.ico"; // Favicon of your website - Icono de tú sitio web.
$config['staffCheckHk'] = true; // Enable the staff pin in the housekeeping (true) or disable it (false) - Habilitar el pin del personal en el panel de administración (true) o deshabilitarlo (false).
$config['staffCheckHkMinimumRank'] = 15; // Minimum staff rank to get the staff pin in the housekeeping - Rango mínimo de personal para obtener el pin de personal en el panel de administración.
$config['maintenance'] = false; // Enable the maintenance of your website (true) or disable it (false) - Habilitar el mantenimiento de su sitio web (true) o deshabilitarlo (false).
$config['AvatarURL'] = "http://swfs.localhost/avatar/avatarimage.php?figure="; // Avatar style when you sign up - Estilo de avatar cuando se registra.
$config['userLikeEnable'] = true; // Enable user likes - Habilitar reacciones de usuario.
$config['newsCommandEnable'] = true; // Enable news commands - Habilitar comandos de noticias.
$config['newsCommandFilter'] = true; // Enable word filter on news commands (the filter use the db tables word filter and word filter characters) - Habilite el filtro de palabras en los comandos de noticias (el filtro usa las tablas de base de datos, el filtro de palabras y los caracteres del filtro de palabras).
$config['alertReferrer'] = false; // Referral alert - Habilitar alerta de referidos (true) o deshabilitarlo (false).
$config['alert'] = ''; // Alert message. If you don't want a alert, you do leave it blank - Mensaje de alerta. Si no desea una alerta, déjelo en blanco.
$config['brainversion'] = '1.9.1'; // Please do not change - Versión, inmodificable.
$config['RankMin'] = "12"; // Minimum authorization to enter the housekeeping - Minimum authorization to enter the administration panel.
$config['RankMax'] = "18"; // Website max rank - Rango máximo del sitio web.
$config['preciovip'] = "30"; // VIP price per month - Precio VIP por mes.
$config['precioloteria'] = "30"; // Lottery price month - Precio de lotería mes.
$config['homeRoom'] = "2104"; // Welcome Room - Sala de Bienvenida.
$config['onlineCounter'] = true; // Counter of users - Contador de usuarios. 
$config['groupBadgeURL'] = "http://mezz.localhost/habbo-imaging/badge.php?badge=";
$config['roomthumball'] = "http://mezz.localhost/newfoto/thumbnail/";
$config['roomphotos'] = "http://swfs.localhost/newfoto/photos/";
$config['badgeURL'] = "http://swfs.localhost/c_images/album1584/";
$config['badgeURLu'] = "http://mezz.localhost/swfs/c_images/placas/";
$hotel['swfLink'] = "http://swfs.localhost/c_images/album1584/";
$config['lookUrl'] = "http://swfs.localhost/avatar/avatarimage.php?figure=";
$config['pathswf'] = "http://swfs.localhost"; 

/* Email Settings - Configuración de correo electronico */
$email['mailServerHost'] = 'smtp.gmail.com'; // Email Server Host - Correo de servidor de Alojamiento.
$email['mailServerPort'] = 587; // Email Post Server - Puerto de correo de servidor.
$email['SMTPSecure'] = 'TLS'; // Secure SMTP - Seguridad SMTP.
$email['mailUsername'] = 'gmail@gmail.com'; // Email user - Correo de usuario.
$email['mailPassword'] = '*****'; // Email password - Contraseña de correo.
$email['mailLogo'] = 'http://127.0.0.1/templates/brain/style/images/logo/logo.png'; // Email Logo - Logotipo de Correo.
$email['mailTemplate'] = '/system/app/plugins/PHPmailer/temp/resetpassword.html'; // Email Template - Plantilla de Correo.

/* Social settings - Configuración de redes sociales. */
$config['instagram'] = 'https://www.instagram.com/comunidad_hionix/'; // URL Account Instagram - URL Cuenta de instragram.
$config['radio'] = ''; // URL Radio.
$config['snapchat'] = '#'; // URL Account SnapChat - URL Cuanta de SnapChat.
$config['discord'] = 'https://discord.gg/uJJFauQ3pa'; // URL Guild Discord - URL Servidor de Discord.
$config['facebook'] = 'https://www.facebook.com/Comunidad_hionix-101414134972034/'; // URL Page Facebook - URL Página de Facebook.
$config['facebookEnable'] = false; // Enable Facebook display (true) or disable (false).
$config['twitter'] = '#'; // URL Account Twitter - URL Cuenta de Twitter.
$config['twitterEnable'] = false; // Enable Twitter display (true) or disable (false).

/* Register Setting - Configuracióon de Registro */
$config['startMotto'] = "Soy nuevo en Mezz"; // Register start motto - Regístro de lema de registro.
$config['credits']	= "0"; // Credits - Créditos.
$config['duckets']	= "0"; // Duckets
$config['diamonds']	= "0"; // Diamonds - Diamantes.
$config['diamondsRef']	= "0"; // Referral diamonds - Diamantes de referido.
$config['registerEnable'] = true; // Enable register (true) or disable (false) - Habilitar registro (true) o deshabilitar (false).
$config['look'] = "ch-3668-110-100.fa-3276-72.cc-3867-73-73.ha-3478-110.lg-30061-82-92.sh-290-92.hd-180-1.hr-3163-1404"; // Avatar style when you sign up - Estilo de avatar cuando se registra. 

/* Google recaptcha Site Key  
	Go to this website to create a recaptcha Site Key: https://www.google.com/recaptcha/intro/index.html	*/
/* Google clave de sitio de recaptcha
	Diríjase a este sitio web para crear una clave de sitio de recaptcha: https://www.google.com/recaptcha/intro/index.html */
$config['recaptchaSiteKey'] = ""; // URL recaptcha Site Key - URL de clase de sitio repcaptcha.
$config['recaptchaSiteKeyEnable'] = false; // Enable recaptcha in website (true) or disable (false).

/* App - Aplicación */
$config['urlApp'] = "https://google.com"; // URL App - Url de aplicación.
$config['urlAppWindows'] = "https://www.microsoft.com/pt-br/software-download/windows11"; // URL App Windows - URl de aplicación Windows.
$config['urlAppMac'] = "https://support.apple.com/pt_BR/downloads/macos"; // URL App MacOS - URl de aplicación MacOS.

/* Buy VIP Settings - Configuración de compra VIP */
$config['vipCost'] = "25"; // Cost VIP - Costo VIP.
$config['vipRankToGet'] = "2"; // Get rank per buy (id rank) - Obtener rango por compra (id rango).
$config['vipBadge'] = "vip"; // Get badge per buy (badge code) - Obtener insignia por compra (código de insigna).

/* Ftp Setting - Configuración de FTP */
$config['IP'] = ""; // IP FTP - Ip FTP.
$config['usuario']	= ""; // User account FTP - Cuento de usuario FTP.
$config['password']	= ""; // Password account FTP - Contraseña de usuario FTP.

switch ($config['hotelEmu']) {
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
