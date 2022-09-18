
<?php
ini_set('error_reporting', E_STRICT);
define('BRAIN_CMS', 1);
include_once $_SERVER['DOCUMENT_ROOT'].'/global.php';

$mid=User::userData('id');
$rank=User::userData('rank');
echo $mid;
?>