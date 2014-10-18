<?php
require_once ("MP_Autoloader.php");

use midnightPublishing\mutantWar\database\UserQuery as UserQuery;
use midnightPublishing\mutantWar\database\User as User;
use Propel\Runtime\Propel as Propel;
class TestUserQuery extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $obj = new UserQuery ();
        $this->assertInstanceOf ( 'midnightPublishing\mutantWar\database\UserQuery', $obj );
        $this->assertInstanceOf ( 'midnightPublishing\mutantWar\database\Base\UserQuery', $obj );
        
        $con = Propel::getWriteConnection ( "mutant_war" );
        $sql = "CREATE TABLE `users` (`user_name` VARCHAR(20) NOT NULL, `password` VARCHAR(200) NOT NULL, `first_name` VARCHAR(20), `last_name` VARCHAR(20), PRIMARY KEY (`user_name`)) ";
        $stmt = $con->prepare ( $sql );
        $stmt->execute ();
        
        $user = new User ();
        $user->setuserName ( "t123" );
        $user->setfirstName ( "Randy" );
        $user->setlastName ( "B" );
        $user->setPassword ( "p1" );
        $user->save ();
        
        $sql = "SELECT * from users";
        $stmt = $con->prepare ( $sql );
        print_r ( $stmt->fetchAll () );
    }
}
