<?php

define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__));
define("APP",ROOT.DS."app");
define("CORE",APP.DS."core".DS);
define("CONTROLLERS",APP.DS."controllers".DS);
define("VIEWS",APP.DS."views".DS);
define("MODELS",APP.DS."models".DS);
define("CONFIG",APP.DS."config".DS);


//Config
define("SERVER","localhost");
define("DOMAIN_NAME","http://localhost/two/public/");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","ownweb");
define("DATABASE_TYPE","mysql");

require_once "../vendor/autoload.php";

$app = new TWO\core\app();