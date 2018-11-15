<?php
header("Content-Type:text/html;charset=UTF-8");


chdir(realpath(__DIR__.'/../'));


require_once ('Components/Autoload.php');

$router = new Components_Router();
$router->run();