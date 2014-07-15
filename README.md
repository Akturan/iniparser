iniparser
=========

Iniparser is a simple parser for complex INI files.


<b>Example</b>
<br>Standard INI file:
<pre>
[Language]
;Use of multilingual system true / false
multilingual = true
;System default language
default = english
;Language translator in file / database
type = file
[Database]
user = root
host = localhost
pass = 
type = mysql
name = test
</pre>

<br>INI parsing<br>

<b>Array</b>
<pre>
require_once 'class/iniparser.php';

$config = new iniparser();

$config->setIniLocation("config.ini");

$parser = $config->getIniFileData(false);
</pre>

<pre>
array(2) {
  ["Language"]=>
  array(3) {
    ["multilingual"]=>
    string(1) "1"
    ["default"]=>
    string(7) "english"
    ["type"]=>
    string(4) "file"
  }
  ["Database"]=>
  array(5) {
    ["user"]=>
    string(4) "root"
    ["host"]=>
    string(9) "localhost"
    ["pass"]=>
    string(0) ""
    ["type"]=>
    string(5) "mysql"
    ["name"]=>
    string(4) "test"
  }
}
</pre>


<b>ArrayObject</b>

<pre>
require_once 'class/iniparser.php';

$config = new iniparser();

$config->setIniLocation("config.ini");

$parser = $config->getIniFileData(true);
</pre>

<pre>
object(stdClass)#2 (2) {
  ["Language"]=>
  object(stdClass)#3 (3) {
    ["multilingual"]=>
    string(1) "1"
    ["default"]=>
    string(7) "english"
    ["type"]=>
    string(4) "file"
  }
  ["Database"]=>
  object(stdClass)#4 (5) {
    ["user"]=>
    string(4) "root"
    ["host"]=>
    string(9) "localhost"
    ["pass"]=>
    string(0) ""
    ["type"]=>
    string(5) "mysql"
    ["name"]=>
    string(4) "test"
  }
}
</pre>

<pre>echo $parser->Language->multilingual;</pre>
