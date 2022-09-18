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

function TicketRefresh(){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 10; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }

    return "Akiled-".md5($randomString)."-Akiled";
}

if(isset($mid) && is_numeric($mid))
{
	$DB = new PDO('mysql:host=localhost;dbname=akiled2', 'root','');
	$rank=User::userData('rank');

	if($rank >15) 
	{	
	$isstaff = 1; 
	}
	else
	{		
	$isstaff = 0;
	}
	
	$id = $_SESSION['id'];
	$monticketweb=TicketRefresh();
	
	$sql2 = $DB->prepare("REPLACE INTO user_websocket (user_id, auth_ticket, is_staff) VALUES (:userid, :ticket, :staff);");
	$sql2->bindParam(':userid', $id);
	$sql2->bindParam(':ticket', $monticketweb);
	$sql2->bindParam(':staff', $isstaff);
	$sql2->execute();
	
	

	

	echo json_encode(array(
	'id' => $id, 
	'SSOTicketweb' => $monticketweb,
	'Radiofm' => $Radiofm,
	
));

} else {
	echo json_encode(array(
	'error' => "Id incorrect"
));
}
?>