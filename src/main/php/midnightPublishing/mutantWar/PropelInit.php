<?php

namespace midnightPublishing\mutantWar;

use Propel\Runtime\Propel as Propel;
use Propel\Runtime\Connection\ConnectionManagerSingle as ConnectionManagerSingle;

class PropelInit
{
    public static $CONNECTION_NAME = "mutant_war";
    public static $DB_TYPE = "mysql";
    public static $DB_NAME = "mutant_war";
    
    /**
     * This will ensure that the propel connection is created calling multiple times will only create it once.
     */
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
                'dsn' => 'mysql:host=localhost;' . self::$DB_NAME . ';',
                'user' => 'root',
                'password' => '' ) );
        $manager->setName ( self::$CONNECTION_NAME );
        $serviceContainer->setConnectionManager ( self::$CONNECTION_NAME, $manager );
        $serviceContainer->setDefaultDatasource ( self::$CONNECTION_NAME );
        define ( "PROPEL", TRUE );
        
        print ("Propel just assigned.") ;
    }
    /**
     * This will create the database schema
     */
    public static function createDatabases()
    {
        $con = Propel::getWriteConnection ( self::$CONNECTION_NAME );
        
        print ("Createing Database\n") ;
        $sql = "CREATE DATABASE IF NOT EXISTS " . self::$DB_NAME . ";";
        $stmt = $con->prepare ( $sql );
        $stmt->execute ();
        
        print ("Use Database\n") ;
        $sql = "USE " . self::$DB_NAME . ";";
        $stmt = $con->prepare ( $sql );
        $stmt->execute ();
        
        print ("Createing Table\n") ;
        $sql = "CREATE TABLE `users` (`user_name` VARCHAR(20) NOT NULL,`password` VARCHAR(200) NOT NULL,`first_name` VARCHAR(20),`last_name` VARCHAR(20),PRIMARY KEY (`user_name`)) ENGINE=InnoDB;";
        $stmt = $con->prepare ( $sql );
        $stmt->execute ();
    }
}