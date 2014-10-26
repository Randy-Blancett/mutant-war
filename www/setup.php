<?php
use midnightPublishing\mutantWar\PropelInit;
include "phar://MutantWar.phar/MP_Autoloader.php";
include "phar://MutantWar.phar/midnightPublishing/mutantWar/PropelInit.php";

PropelInit::init ();
print (__LINE__ . "\n") ;
PropelInit::init ();
print (__LINE__ . "\n") ;
PropelInit::init ();
print (__LINE__ . "\n") ;
PropelInit::createDatabases ();
print (__LINE__ . "\n") ;
