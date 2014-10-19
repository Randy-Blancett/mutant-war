<?php
require_once ("MP_Autoloader.php");

use midnightPublishing\mutantWar\database\User as User;
use midnightPublishing\mutantWar\DBHandler;
class TestUser extends DBHandler
{
    public function testConstructor()
    {
        $obj = new User ();
        $this->assertInstanceOf ( 'midnightPublishing\mutantWar\database\User', $obj );
        $this->assertInstanceOf ( 'midnightPublishing\mutantWar\database\Base\User', $obj );
    }
    public function testDelete()
    {
        $obj = new User ();
        $obj->setfirstName ( "fName" );
        $obj->setlastName ( "lName" );
        $obj->setuserName ( "UserName 1" );
        $obj->setPassword ( "Password1" );
        $obj->save ();
        $obj->delete ();
    }
    public function testSetterGetter()
    {
        $obj = new User ();
        
        $obj->setfirstName ( "fName" );
        $this->assertEquals ( "fName", $obj->getfirstName () );
        
        $obj->setlastName ( "lName" );
        $this->assertEquals ( "lName", $obj->getlastName () );
        
        $obj->setuserName ( "UserName 1" );
        $this->assertEquals ( "UserName 1", $obj->getuserName () );
        
        $obj->setPassword ( "Password1" );
        $this->assertEquals ( "Password1", $obj->getPassword () );
    }
    public function testSave()
    {
        $obj = new User ();
        $obj->setfirstName ( "fName" );
        $obj->setlastName ( "lName" );
        $obj->setuserName ( "UserName 1" );
        $obj->setPassword ( "Password1" );
        $obj->save ();
    }
}
