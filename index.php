<?php
require_once 'class/iniparser.php';

$config = new iniparser();

$config->setIniLocation("config.ini");

$parser = $config->getIniFileData(true);
echo "<pre>";
var_dump($parser);


//echo $parser->Language->multilingual;


?>
