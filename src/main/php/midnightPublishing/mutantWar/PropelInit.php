<?php

namespace midnightPublishing\mutantWar;

use Propel\Runtime\Propel as Propel;
use Propel\Runtime\Connection\ConnectionManagerSingle as ConnectionManagerSingle;

class PropelInit
{
    public static $CONNECTION_NAME = "mutant_war";
    public static $DB_TYPE = "mysql";
    public static function init()
    {
        if (defined ( 'PROPEL' ))
        {
            print ("Propel Aready assigned.") ;
            return;
        }
        $serviceContainer = Propel::getServiceContainer ();
        $serviceContainer->checkVersion ( '2.0.0-dev' );
        $serviceContainer->setAdapterClass ( self::$CONNECTION_NAME, self::$DB_TYPE );
        $manager = new ConnectionManagerSingle ();
        $manager->setConfiguration ( array (
                'classname' => 'Propel\\Runtime\\Connection\\ConnectionWrapper',
                'dsn' => 'mysql:host=localhost;dbname=mutant_war',
                'user' => 'root',
                'password' => '' ) );
        $manager->setName ( 'mutant_war' );
        $serviceContainer->setConnectionManager ( self::$CONNECTION_NAME, $manager );
        $serviceContainer->setDefaultDatasource ( self::$CONNECTION_NAME );
        define ( "PROPEL", TRUE );
        
        print ("Propel just assigned.") ;
    }
}