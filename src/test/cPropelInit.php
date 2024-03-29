<?php
use Propel\Runtime\Propel;
use Propel\Runtime\Connection\ConnectionManagerSingle;
/**
 * Include the MidnightPublishing Autoloader
 */
require_once 'Propel/autoload.php';
class cPropelInit
{
    public static function initPropel()
    {
        if (! defined ( "PROPEL_INIT" ))
        {
            define ( "PROPEL_INIT", TRUE );
            require_once 'propel/Propel.php';
            
            // Initialize Propel with the runtime configuration
            \Propel::setConfiguration ( self::getConfig () );
            \Propel::initialize ();
            
            // Add the generated 'classes' directory to the include path
            set_include_path ( "classes" . PATH_SEPARATOR . get_include_path () );
        }
    }
    public static function getConfig()
    {
        // // setup the autoloading
        // require_once '/path/to/vendor/autoload.php';
        $serviceContainer = Propel::getServiceContainer ();
        $serviceContainer->setAdapterClass ( 'bookstore', 'mysql' );
        $manager = new ConnectionManagerSingle ();
        $manager->setConfiguration ( array (
                'dsn' => 'mysql:host=localhost;dbname=my_db_name',
                'user' => 'my_db_user',
                'password' => 's3cr3t' ) );
        $serviceContainer->setConnectionManager ( 'bookstore', $manager );
    }
    
    // This file generated by Propel 1.6.6 convert-conf target
    // from XML runtime conf file /home/darkowl/git/do-php-user-manager/User_Manager/src/main/config/propel/runtime-conf.xml
}