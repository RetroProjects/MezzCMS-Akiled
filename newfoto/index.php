<?php
$servername = "localhost:3306";
$username = "root";
$password = "Lucia22++";
$database = "hionix";
$link = "https://hionix.es";
if (isset($_GET['id'])){
	$imageId = '';
	$miniature = true;
	
	if(strlen($_GET['id']) > 0){
		$imageId = $_GET['id'];
		$miniature = false;
	} else {
		$request = file_get_contents('php://input');
		$data = json_decode($request);
		$imageId = $data[0];
	}

	// Funsion de la parra de cuzton
	$link = mysql_connect($servername, $username, $password) or die('No se pudo conectar: ' . mysql_error());
	mysql_select_db($database) or die('No se pudo seleccionar la base de datos');
	//print_r( $_GET );exit;
	$query = "SELECT * FROM items_camera WHERE id = '" . $imageId . "' LIMIT 1";
	$dataTable = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

	$result = mysql_fetch_array($dataTable);

	// aqui el conpouser
	$response = array();
	$response[0]["previewUrl"] = '/newfoto/camera/' . $result['id'] . '.png';
	$response[0]["tags"] = [];
	$response[0]["creator_uniqueId"] = 'hhes-feb721f970adc77f91f8455a1bc0f193';
	$response[0]["type"] = 'PHOTO';
	$response[0]["version"] = 1;
	$response[0]["url"] = '/newfoto/camera/' . $result['id'] . '.png';
	$response[0]["creator_id"] = $result['creator_id'];
	$response[0]["creator_name"] = '' . $result['creator_name'];
	$response[0]["room_id"] = $result['room_id'];
	$response[0]["time"] = $result['time'];
	$response[0]["id"] = '' . $result['id'];

	// serrando
	mysql_close($link);

	// jota son
	header('Content-Type: application/json');
	echo json_encode($miniature ? $response : $response[0]);

} else {
	echo 'No se ha encontrado.';
}

?>