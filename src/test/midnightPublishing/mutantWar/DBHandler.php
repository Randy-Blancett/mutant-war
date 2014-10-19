<?php

namespace midnightPublishing\mutantWar;

use midnightPublishing\mutantWar\database\UserQuery;
use midnightPublishing\mutantWar\database\User;

class DBHandler extends \PHPUnit_Framework_TestCase
{
    static public function cleanDB()
    {
        UserQuery::create ()->deleteAll ();
    }
    
    /**
     * Create a user with the given information
     *
     * @param unknown $strFName            
     * @param unknown $strLName            
     * @param unknown $strUserName            
     * @param string $strPassword            
     * @return \midnightPublishing\mutantWar\database\User
     */
    static public function createUser(
                                    $strFName, 
                                    $strLName, 
                                    $strUserName, 
                                    $strPassword = "tst")
    
    {
        $obj = new User ();
        $obj->setfirstName ( $strFName );
        $obj->setlastName ( $strLName );
        $obj->setuserName ( $strUserName );
        $obj->setPassword ( $strPassword );
        $obj->save ();
        return $obj;
    }
    protected function setUp()
    {}
    protected function tearDown()
    {
        $this->cleanDB ();
    }
}