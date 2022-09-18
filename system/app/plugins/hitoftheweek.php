<?php
	if(!defined('BRAIN_CMS')) 
	{ 
		die('Sorry but you cannot access this file!'); 
	}
	function hitOfTheWeek()
	{
		global $config,$dbh,$lang;
		if ($config['hvdwStatus'] == true) {
			echo '<div id="boxtrial" style="height:190px;color:white;">
					<iframe style="margin-left: 0px;" width="100%" height="100%" src="https://www.youtube.com/embed/'.$config['hvdwNumber'].'" frameborder="0" allowfullscreen></iframe>			
					</div>';
		}
	}