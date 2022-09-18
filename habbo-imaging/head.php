<?php
if(!isset($_GET['figure']))
	exit;

$headDirection = isset($_GET['head_direction']) && is_numeric($_GET['head_direction']) ? $_GET['head_direction'] : 2;
$src = imagecreatefrompng('https://www.habbo.com/habbo-imaging/avatarimage?figure=' . str_replace('ch-', 'ch-9999', $_GET['figure']) . '&size=s&head_direction=' . $headDirection);
imagealphablending($src, true);
imagesavealpha($src, true);
$dest = imagecreate(27, 30);
imagecopy($dest, $src, 3, 3, 5, 10, 20, 20);
imagealphablending($dest, true);
imagesavealpha($dest, true);

header('Content-Type: image/png');
imagepng($dest);  

imagedestroy($dest);
imagedestroy($src);
?>