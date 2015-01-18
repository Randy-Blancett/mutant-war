<?php
require_once ("MP_Autoloader.php");

use midnightPublishing\mutantWar\controler\WebSwitch as WebSwitch;
use midnightPublishing\mutantWar\controler\RestSwitch;
class TestWebSwitch extends \PHPUnit_Framework_TestCase
{
    public function testSwitch()
    {
        RestSwitch::setShowOutput ( false );
        WebSwitch::setShowOutput ( false );
        $this->assertEquals ( null, WebSwitch::direct ( "rest", "test1234" ) );
        $this->assertEquals ( "js/test123.js", WebSwitch::direct ( "js", "test123" ) );
        $this->assertEquals ( "css/test123.css", WebSwitch::direct ( "css", "test123" ) );
        $this->assertEquals ( "test123.php", WebSwitch::direct ( "php", "test123" ) );
        $this->assertEquals ( "test1234.php", WebSwitch::direct ( "", "test1234" ) );
    }
}
