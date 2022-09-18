<?php
if(!empty($GLOBALS['HTTP_RAW_POST_DATA'])){
	$filename = md5($_GET['roomid'] . "-" . $_GET['time']);
	$file = $filename.'.png';
	$file_small = $filename.'_small.png';
	
	$fp = fopen($file, "wb");
	fwrite($fp, $GLOBALS['HTTP_RAW_POST_DATA']);
	fclose($fp);
	
	header("Content-Type: image/png");
	list($ancho, $alto) = getimagesize($file);
	$n_ancho = 100;
	$n_alto = 100;
	$thumb = imagecreatetruecolor($n_ancho, $n_alto);
	$origen = imagecreatefrompng($file);
	imagecopyresized($thumb, $origen, 0, 0, 0, 0, $n_ancho, $n_alto, $ancho, $alto);
	imagepng($thumb, $file_small);
} else {
	echo 'Not Found.';
}
?>