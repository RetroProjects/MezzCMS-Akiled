<?php
/*=========================================================+
|| # HabboCMS - Sistema de administración de contenido Habbo.
|+=========================================================+
|| # Copyright © 2010 Kolesias123. All rights reserved.
|| # http://www.infosmart.com.mx
|| # Partes Copyright © 2009 Yifan Lu. All rights reserved.
|| # http://www.yifanlu.com
|| # Base Copyright © 2007-2008 Meth0d. All rights reserved.
|| # http://www.meth0d.org
|+=========================================================+
|| # InfoSmart 2010. The power of Proyects.
|| # Este es un Software de código libre, libre edición.
|+=========================================================+
|| # Todas las imagenes, scripts y temas
|| # Copyright (C) 2010 Sulake Ltd. All rights reserved.
|+=========================================================*/

$no_rea = true;
$no_maintenance = true;

require_once('../includes/core.php');
Header("Content-type: image/png");

$figure = $_GET['figure'];
$size = $_GET['size'];
$direction = $_GET['direction'];
$head_direction = $_GET['head_direction'];
$gesture = $_GET['gesture'];
$action = $_GET['action'];
$user = FilterText($_GET['user']);

if(!empty($figure))
{
	$real_figure = $figure;
} 
else if(!empty($user)) 
{
	$real_figure = userData("figure", $user);
}

if(empty($size))
{
	$size = "b";
}

if(empty($direction))
{
	$direction = "3";
}

if(empty($head_direction))
{
	$head_direction = "3";
}

if(empty($gesture))
{
	$gesture = "sml";
}
	

echo file_get_contents('http://www.habbo.com/habbo-imaging/avatarimage?figure='.$real_figure.'&size='.$size.'&direction='.$direction.'&head_direction='.$head_direction.'&gesture='.$gesture.'&action='.$action);
?> 