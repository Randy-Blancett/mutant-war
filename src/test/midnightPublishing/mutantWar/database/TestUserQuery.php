<?php
require_once ("MP_Autoloader.php");

use midnightPublishing\mutantWar\database\UserQuery as UserQuery;
use midnightPublishing\mutantWar\database\User as User;
use Propel\Runtime\Propel as Propel;
use midnightPublishing\mutantWar\DBHandler;
class TestUserQuery extends DBHandler
{
    public function testConstructor()
    {
        $obj = new UserQuery ();
        $this->assertInstanceOf ( 'midnightPublishing\mutantWar\database\UserQuery', $obj );
        $this->assertInstanceOf ( 'midnightPublishing\mutantWar\database\Base\UserQuery', $obj );
    }
    public function testFind()
    {
        $objUsr1 = $this->createUser ( "fName", "lName", "UName" );
        $objReturn = UserQuery::create ()->findPK ( $objUsr1->getPrimaryKey () );
        
        $this->assertEquals ( "fName", $objReturn->getfirstName () );
        $this->assertEquals ( "lName", $objReturn->getlastName () );
        $this->assertEquals ( "UName", $objReturn->getuserName () );
        $this->assertEquals ( "tst", $objReturn->getPassword () );
    }
}
