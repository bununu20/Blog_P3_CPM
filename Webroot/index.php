<?php
$debut  = microtime(true);
ini_set('display_errors',1);
define("WEBROOT", dirname(__FILE__));
define("DS", DIRECTORY_SEPARATOR);
define("ROOT", dirname(WEBROOT));


define("APP", ROOT.DS."App");
define("CORE", ROOT.DS."Core");
/*var_dump($_SERVER);
die();*/
define("BASE_URL", $_SERVER['SERVER_NAME']);
define("DOMAINE", $_SERVER['SERVER_NAME']);
 //print_r(DOMAINE) ;
require(CORE.DS."includes.php");

 new Dispatcher();
echo 'page generee en '.round((microtime(true) - $debut),5);
?>



