<?php
if (!defined('BRAIN_CMS')) {
	die('Sorry but you cannot access this file!');
}
/* 
Functions list functions.
--------------- 
filter();
checkVersion();
brainCmsAnnouncement();
loggedIn();
userIp();
callback();
*/

// Filter data
function filter($data)
{
	return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}
function filterInpute($data)
{
	$filter            = new Filter();
	$allowed_protocols = array(
		'',
		'',
		'mailto'
	);
	$allowed_tags      = array(
		'a',
		'i',
		'b',
		'em',
		'span',
		'strong',
		'ul',
		'ol',
		'li',
		'table',
		'tr',
		'td',
		'thead',
		'th',
		'tbody'
	);
	$filter->addAllowedProtocols($allowed_protocols);
	$filter->addAllowedTags($allowed_tags);
	$filtered_string = $filter->xss($data);
}

// Check version of BrainCMS
function checkVersion()
{
	global $config;
	$script  = file_get_contents("https://retroripper.com/braincms/version");
	$update  = file_get_contents("https://retroripper.com/braincms/update");
	$version = $config['brainversion'];
	if ($version == $script) {
		echo '<div style = "width: 100%;
            background-color: green;
            border-radius: 5px;
            padding: 10px;
            color: white;
            margin-bottom: 10px;
            font-size: 17px;">This version of BrainCMS is up to date! You have the V' . $script . '</div>';
	} else {
		echo '<div style = "width: 100%;
            background-color: red;
            border-radius: 5px;
            padding: 10px;
            color: white;
            margin-bottom: 10px;
            font-size: 17px;">There is a new version of BrainCMS available! You have V' . $version . ' and the latest version is V' . $script . '</div>
            <div style = "width: 100%;
            background-color: green;
            border-radius: 5px;
            padding: 10px;
            color: white;
            margin-bottom: 10px;
            font-size: 17px;">' . $update . '</div>';
	}
}

//BrainCMS News
function brainCmsAnnouncement()
{
	global $config;
	$news = file_get_contents("https://retroripper.com/braincms/announcement");
	echo '<div style = "width: 100%;
    background-color: rgb(57, 67, 92);
    border-radius: 5px;
    padding: 5px;
    color: white;
    margin-bottom: 10px;">
    <span style="font-size: 19px;
    font-weight: bold;
    color: #009fff;">BrainCMS News:</span>
    <hr style="margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #fff;">' . $news . '</div>';
}



function fecha_dat($a)
{
	$day = date("d", $a);
	$dname = date("m", $a);
	$year = date("Y", $a);
	$ampm = date("a", $a);
	$hour = date("g", $a);
	$minuts = date("i", $a);

	switch ($dname) {
		case 1:
			$dname = "enero";
			break;
		case 2:
			$dname = "febrero";
			break;
		case 3:
			$dname = "marzo";
			break;
		case 4:
			$dname = "abril";
			break;
		case 5:
			$dname = "mayo";
			break;
		case 6:
			$dname = "jun";
			break;
		case 7:
			$dname = "julio";
			break;
		case 8:
			$dname = "agosto";
			break;
		case 9:
			$dname = "septiembre";
			break;
		case 10:
			$dname = "octubre";
			break;
		case 11:
			$dname = "noviembre";
			break;
		case 12:
			$dname = "diciembre";
			break;
	}
	return $day . " de " . $dname . " del " . $year . " a la(s) " . $hour . ":" . $minuts . " " . $ampm;
}
// Check if user is logged in
function loggedIn()
{
	if (isset($_SESSION['id'])) {
		return true;
	}
	return false;
}

function IsEven($intNumber)
{
	if ($intNumber % 2 == 0) {
		return true;
	} else {
		return false;
	}
}

// Check user real IP
function userIp()
{
	$ipaddress = '';
	if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
		$_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
	}
	return $_SERVER['REMOTE_ADDR'];
}
function callback($buffer)
{
	return (str_replace("{online}", "cool", $buffer));
}
function GetLast($stamp)
{
	if (!empty($stamp) || !$stamp == '') {
		$stamp = time() - $stamp;
		$x = '';
		if ($stamp >= 604800) {
			$x = 'Hace ' . ceil($stamp / 604800) . ' semanas';
		} else if ($stamp > 86400) {
			$x = 'Hace ' . ceil($stamp / 86400) . ' d&iacute;as';
		} else if ($stamp >= 3600) {
			$x = 'Hace ' . ceil($stamp / 3600) . ' horas';
		} else if ($stamp >= 120) {
			$x  = 'Hace ' . ceil($stamp / 60) . ' minutos';
		} else {
			$x = 'Hace ' . $stamp . ' segundos';
		}

		return $x;
	} else {
		return 'Aún no se ha conectado';
	}
}
