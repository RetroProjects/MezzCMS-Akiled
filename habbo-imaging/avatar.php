<?php
    if(!isset($_GET["figure"]) || empty($_GET["figure"])) {
        echo "No fig request";
        exit;
    }
 
   $get = $_GET;
   if($_GET["direction"] == NULL)
	   {
		   $direction = '2';
		   }else{
			   $direction = $_GET["direction"];}
			   
			      if($_GET["head_direction"] == NULL)
	   {
		   $head_direction = '2';
		   }else{
			   $head_direction = $_GET["head_direction"];}
header('Content-Type: image/png');

    $ch = curl_init("http://habbo.city/habbo-imaging/avatarimage?figure=" . $get['figure'] . "&size=" . $get['size'] . "&direction=" . $direction . "&head_direction=" . $head_direction . "&gesture=" . $get['gesture'] . "&action=" . $get['action'] . "&headonly=" . $get['headonly'] . "");
 
    curl_setopt_array($ch, array(
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER         => false,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING       => "",
        CURLOPT_USERAGENT      => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.75 Safari/537.36",
        CURLOPT_AUTOREFERER    => true,
        CURLOPT_SSL_VERIFYPEER => false
    ));
 
    $content = curl_exec($ch);
    $type = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
 
    curl_close($ch);
 
    if(!isset($content) || empty($content) || strpos($content, 'Not Found') !== false) {
        echo "Not found!";
        exit;
    }
     
    header("Content-Type: {$type}");
 
    echo $content;
?>