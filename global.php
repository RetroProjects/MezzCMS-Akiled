<?php
	if(!defined('BRAIN_CMS')) 
	{ 
		die('Sorry but you cannot access this file!'); 
	}
	
	session_start();
	ob_start();
	error_reporting(E_ALL);

	define('Z', $_SERVER['DOCUMENT_ROOT'].'/');
	define('A', Z . 'system/');
	define('B', 'app/');
	define('C', 'classes/');
	define('E', 'languages/');
	define('H', 'templates/');
	define('I', 'maintenance/');
	define('J', Z . 'adminpan/');
	define('K', 'plugins/');

	require_once A . '/brain-config.php';

	foreach (glob(A . B . C . '/*.php') as $className) {
		require_once $className;
	}

	require_once A . E . '/'.$config['lang'].'.php';

	define('S', $config['skin']);

	html::loadPlugins();
?>
	
	
	
	
	
