<?php
require_once ("MP_Autoloader.php");

use midnightPublishing\mutantWar\database\User as User;
class TestUser extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $obj = new User ();
        $this->assertInstanceOf ( 'midnightPublishing\mutantWar\database\User', $obj );
        $this->assertInstanceOf ( 'midnightPublishing\mutantWar\database\Base\User', $obj );
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
}
