<?php
require_once ("MP_Autoloader.php");
require_once (BASE_PATH . "/midnightPublishing/mutantWar/controler/RestSwitch.php");

use midnightPublishing\mutantWar\resource\User as User;
use midnightPublishing\mutantWar\controler\RestSwitch as RestSwitch;
class TestUserResource extends \PHPUnit_Framework_TestCase
{
    public function testGet()
    {
        $_SERVER ['REQUEST_URI'] = "/rest/user/";
        $_SERVER ['requestMethod'] = "get";
        RestSwitch::process ();
        
//         print (RestSwitch::getResponse ()) ;
        
        $this->assertEquals ( 200, RestSwitch::getResponse ()->code );
    }
}