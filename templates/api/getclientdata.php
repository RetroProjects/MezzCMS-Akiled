<?php
ini_set('error_reporting', E_STRICT);
define('BRAIN_CMS', 1);
include_once $_SERVER['DOCUMENT_ROOT'].'/global.php';

$mid=User::userData('id');
$Authorization = get_header("Authorization");

function get_header( $headerKey )
{
	$headerValue = "";
     $test = getallheaders();
    if ( array_key_exists($headerKey, $test) ) {
        $headerValue = $test[ $headerKey ];
    }
    return $headerValue;
}


if($Authorization != "t5rZR4h7")
{
	echo json_encode(array(
	'error' => "No Autorizado"
	));
	return;
}

if(isset($mid) && is_numeric($mid))
{

	
	global $dbh,$config;
	$sessionKey  = 'Brain-'.$config['brainversion'].'-'.substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 25).'-SSO';
	$stmt = $dbh->prepare("UPDATE users SET auth_ticket = :sso , last_online = :timenow WHERE id = :id");
	$stmt->bindParam(':timenow',  strtotime("now"));
	$stmt->bindParam(':id', $_SESSION['id']);
	$stmt->bindParam(':sso', $sessionKey);
	$stmt->execute();
				
	$monticket = User::userData('auth_ticket');
	$id = $_SESSION['id'];
	

	$WSUrl = "ws://webscks.localhost:2053";

	echo json_encode(array(
	'id' => $id, 
	'SSOTicket' => $monticket, 
	'WSUrl' => $WSUrl,
	'RoomId' => "0",
	'token' => $Authorization
));

// else {
	//echo json_encode(array(
	//'error' => "Id incorrect 2"
//));
}
?>