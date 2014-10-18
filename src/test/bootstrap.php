<?php
define ( 'BASE_PATH', dirname ( dirname ( __FILE__ ) ) . "/main/php/" );
define ( 'TEST_PATH', dirname ( __FILE__ ) );
define ( 'CON_NAME', "mutant_war" );

// Include path
set_include_path ( '.' . PATH_SEPARATOR . BASE_PATH . PATH_SEPARATOR . get_include_path () );

// setup the autoloading
// require_once 'Propel/autoload.php';
use Propel\Runtime\Propel as Propel;
use Propel\Runtime\Connection\ConnectionManagerSingle;
// $serviceContainer = Propel::getServiceContainer ();
// $serviceContainer->setAdapterClass ( CON_NAME, 'sqlite' );
// $manager = new ConnectionManagerSingle ();
// $manager->setConfiguration ( array (
// 'dsn' => 'sqlite::memory:' ) );
// $serviceContainer->setConnectionManager ( CON_NAME, $manager );

$serviceContainer = \Propel\Runtime\Propel::getServiceContainer ();
$serviceContainer->checkVersion ( '2.0.0-dev' );
$serviceContainer->setAdapterClass ( 'mutant_war', 'mysql' );
$manager = new \Propel\Runtime\Connection\ConnectionManagerSingle ();
$manager->setConfiguration ( array (
        'classname' => 'Propel\\Runtime\\Connection\\ConnectionWrapper',
        'dsn' => 'sqlite:/tmp/tst.db',
        'user' => 'root',
        'password' => '' ) );
$manager->setName ( 'mutant_war' );
$serviceContainer->setConnectionManager ( 'mutant_war', $manager );
$serviceContainer->setDefaultDatasource ( 'mutant_war' );

