<?php
define ( 'BASE_PATH', dirname ( dirname ( __FILE__ ) ) . "/main/php/" );
define ( 'TEST_PATH', dirname ( __FILE__ ) );
define ( 'CON_NAME', "mutant_war" );

// Include path
set_include_path ( '.' . PATH_SEPARATOR . BASE_PATH . PATH_SEPARATOR . get_include_path () );

// setup the autoloading
require_once 'Propel/autoload.php';
use Propel\Runtime\Propel;
use Propel\Runtime\Connection\ConnectionManagerSingle;
$serviceContainer = Propel::getServiceContainer ();
$serviceContainer->setAdapterClass ( CON_NAME, 'sqlite' );
$manager = new ConnectionManagerSingle ();
$manager->setConfiguration ( array (
        'dsn' => 'sqlite::memory:' ) );
$serviceContainer->setConnectionManager ( CON_NAME, $manager );

$objCon = Propel::getConnection ( CON_NAME );

// print_r ( $objCon );

// // $objCon->exec ( "show" );
// $tablesquery = $objCon->exec ( "CREATE DATABASE `test`;" );
// $tablesquery = $objCon->query ( "SELECT name FROM sqlite_master WHERE type='table';" );

// while ( $table = $tablesquery->fetch ( SQLITE3_ASSOC ) )
// {
//     echo $table ['name'] . '<br />';
// }
// $objCon->;

