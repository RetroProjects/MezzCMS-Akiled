<?php
if(!empty($GLOBALS['HTTP_RAW_POST_DATA'])){
	$file = $_GET['roomid'].'.png';
	$fp = fopen($file, "wb");
	fwrite($fp, $GLOBALS['HTTP_RAW_POST_DATA']);
	fclose($fp);
} else {
	echo 'Not Found.';
}
?>