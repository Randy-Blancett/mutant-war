<?php
require_once "phar://MutantWar.phar/MP_Autoloader.php";

$file = trim ( substr ( $_SERVER [REQUEST_URI], strpos ( $_SERVER [REQUEST_URI], "/", 1 ) ), "/" );

require_once "phar://MutantWar.phar/" . $file . ".php";

print $file;

//require "MutantWar.phar";