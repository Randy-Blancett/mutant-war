<?php
require_once ("MP_Autoloader.php");

use midnightPublishing\mutantWar\database\UserQuery as UserQuery;
use midnightPublishing\mutantWar\database\User as User;
class TestUserQuery extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $obj = new UserQuery ();
        $this->assertInstanceOf ( 'midnightPublishing\mutantWar\database\UserQuery', $obj );
        $this->assertInstanceOf ( 'midnightPublishing\mutantWar\database\Base\UserQuery', $obj );
        
        $this->getConnection ();
        $this->getDataSet ();
        
        $user = new User ();
        $user->setfirstName ( "Randy" );
        $user->setlastName ( "B" );
        $user->save ();
    }
    
    /**
     *
     * @return PHPUnit_Extensions_Database_DB_IDatabaseConnection
     */
    public function getConnection()
    {
        $objCon = Propel::getConnection ( 'mutant_war' );
        return $this->createDefaultDBConnection ( $objCon, ':memory:' );
    }
    
    /**
     *
     * @return PHPUnit_Extensions_Database_DataSet_IDataSet
     */
    public function getDataSet()
    {
        return $this->createFlatXMLDataSet ( dirname ( __FILE__ ) . '/tst.xml' );
    }
}
