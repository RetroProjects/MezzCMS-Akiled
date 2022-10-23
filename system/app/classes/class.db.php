<?php
	if(!defined('BRAIN_CMS')) 
		{ 
		die('Lo sentimos, pero no puedes acceder a este archivo'); 
	}
	try {
		$dbh = new PDO('mysql:host='.$db['host'].':'.$db['port'].';dbname='.$db['db'].'', $db['user'], $db['pass']);
	}
	catch (PDOException $e) {
		echo ("
		<br><br>
<div style='background-repeat: no-repeat;background-position: 10px 50%;padding: 10px 10px 10px 10px;-moz-border-radius: 5px;border-radius: 5px;-moz-box-shadow: 0 1px 1px #fff inset;box-shadow: 0 1px 1px #fff inset;color: #7b7b7b;background: #f3f3f3;display: table;padding: 50px 100px;width: 320px;margin: 0 auto;font-size: 15px;font-family: Tahoma;'><b style=' margin-left: 70px; '>
	Ocurrio un error</b><br>No fue posible conectarse a la base de datos.</div>
	<br>
<div style='background-repeat: no-repeat;background-position: 10px 50%;padding: 10px 10px 10px 10px;-moz-border-radius: 5px;border-radius: 5px;-moz-box-shadow: 0 1px 1px #fff inset;box-shadow: 0 1px 1px #fff inset;color: #7b7b7b;background: #f3f3f3;display: table;padding: 50px 100px;width: 320px;margin: 0 auto;font-size: 15px;font-family: Tahoma;'><b style=' margin-left: 70px; '>
	An error occurred</b><br>It is not possible to connect to the database.</div>
	<br>
<div style='background-repeat: no-repeat;background-position: 10px 50%;padding: 10px 10px 10px 10px;-moz-border-radius: 5px;border-radius: 5px;-moz-box-shadow: 0 1px 1px #fff inset;box-shadow: 0 1px 1px #fff inset;color: #7b7b7b;background: #f3f3f3;display: table;padding: 50px 100px;width: 320px;margin: 0 auto;font-size: 15px;font-family: Tahoma;'><b style=' margin-left: 70px; '>
	Ocorreu um erro</b><br>Não foi possível conectar-se ao banco de dados.</div>	
		"); 
		die();
	}
	$confighk = $dbh->prepare("SELECT * FROM slopt_cms");
	$confighk->execute();
	$conhk = $confighk->fetch();
	
	$config['badgescont'] = $conhk["badges"]; 
	$config['startMotto'] = $conhk["motto"]; //Regsiter start motto
	$config['credits']	= $conhk["credits"];
	$config['diamonds']	= $conhk["diamonds"];
	$hotel['homeRoom'] = $conhk["home_room"]; //Establezca la habitación de inicio cuando llegue al hotel
	$hotel['RadioClient'] = $conhk["radio"];
	$config['RCONIP'] = $conhk["rcon_ip"];
	$config['RCONPORT'] = $conhk["rcon_port"];
	$config['payclient_id'] = $conhk["payclient_id"];
	if($conhk["maintenance"]=="true"){ $config['maintenance']=true; } else { $config['maintenance']=false;} //Enable the maintenance of your website (true) or disable it (false)
	$config['maintenancekMinimumRankLogin'] = $conhk["rank_maintenance"]; //Minium staff rank to login when the website is in maintenance
?>			