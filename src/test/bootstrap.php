<?php
define ( 'BASE_PATH', dirname ( dirname ( __FILE__ ) ) . "/main/php/" );
define ( 'WWW_PATH', dirname ( dirname ( __FILE__ ) ) . "/main/www/" );
define ( 'TEST_PATH', dirname ( __FILE__ ) );
define ( 'CON_NAME', "mutant_war" );

// Include path
set_include_path ( '.' . PATH_SEPARATOR . BASE_PATH . PATH_SEPARATOR . TEST_PATH . PATH_SEPARATOR . get_include_path () );

use Propel\Runtime\Propel as Propel;

$serviceContainer = \Propel\Runtime\Propel::getServiceContainer ();
$serviceContainer->checkVersion ( '2.0.0-dev' );
$serviceContainer->setAdapterClass ( CON_NAME, 'mysql' );
$manager = new \Propel\Runtime\Connection\ConnectionManagerSingle ();
$manager->setConfiguration ( array (
        'classname' => 'Propel\\Runtime\\Connection\\ConnectionWrapper',
        'dsn' => 'sqlite::memory:',
        'user' => 'root',
        'password' => '' ) );
$manager->setName ( 'mutant_war' );
$serviceContainer->setConnectionManager ( CON_NAME, $manager );
$serviceContainer->setDefaultDatasource ( CON_NAME );

createDatabases ();
function createDatabases()
{
    $con = Propel::getWriteConnection ( CON_NAME );
    $sql = "CREATE TABLE `users` (`user_name` VARCHAR(20) NOT NULL, `password` VARCHAR(200) NOT NULL, `first_name` VARCHAR(20), `last_name` VARCHAR(20), PRIMARY KEY (`user_name`)) ";
    $stmt = $con->prepare ( $sql );
    $stmt->execute ();
}

