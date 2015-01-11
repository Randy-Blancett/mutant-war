<?php
require_once ("MP_Autoloader.php");

use midnightPublishing\mutantWar\controler\WebSwitch as WebSwitch;
class TestWebSwitch extends \PHPUnit_Framework_TestCase
{
    public function testSwitch()
    {
        $this->assertEquals ( "js/test123.js", WebSwitch::direct ( "js", "test123" ) );
        $this->assertEquals ( "css/test123.css", WebSwitch::direct ( "css", "test123" ) );
        $this->assertEquals ( "test123.php", WebSwitch::direct ( "php", "test123" ) );
        $this->assertEquals ( "test1234.php", WebSwitch::direct ( "", "test1234" ) );
        $this->assertEquals ( "midnightPublishing/mutantWar/controler/RestSwitch.php", WebSwitch::direct ( "rest", "test1234" ) );
    }
}
