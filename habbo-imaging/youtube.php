<?php

Header("Content-type: image/png");

if(isset($_GET['img']))
	$linkYT = $_GET['img'];
	
echo file_get_contents('http://i1.ytimg.com/vi/'. $linkYT .'/default.jpg');
?> 