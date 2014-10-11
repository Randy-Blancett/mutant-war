<?php
require_once ("MP_Autoloader.php");

use midnightPublishing\mutantWar\database\UserQuery as UserQuery;
class TestUserQuery extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $obj = new UserQuery ();
        $this->assertInstanceOf ( 'midnightPublishing\mutantWar\database\UserQuery', $obj );
        $this->assertInstanceOf ( 'midnightPublishing\mutantWar\database\Base\UserQuery', $obj );
    }
}
