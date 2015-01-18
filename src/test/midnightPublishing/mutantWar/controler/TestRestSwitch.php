<?php
require_once ("MP_Autoloader.php");

use midnightPublishing\mutantWar\controler\WebSwitch as WebSwitch;
use midnightPublishing\mutantWar\controler\RestSwitch as RestSwitch;
use Tonic\Application;
use Tonic\Response;
class TestRestSwitch extends \PHPUnit_Framework_TestCase
{
    public function testInit()
    {
        RestSwitch::init ();
        $this->assertInstanceOf ( "\Tonic\Application", RestSwitch::getApp () );
    }
    public function testProcess()
    {
        $_SERVER ['REQUEST_URI'] = "/rest/user/";
        $_SERVER ['requestMethod'] = "get";
        RestSwitch::process ();
        
        $this->assertEquals ( 200, RestSwitch::getResponse ()->code );
    }
    public function testProcessWError()
    {
        $_SERVER ['REQUEST_URI'] = "/rest/user/";
        $_SERVER ['requestMethod'] = "post";
        RestSwitch::process ();
        
        // $this->assertEquals ( Response::BADREQUEST, RestSwitch::getResponse ()->code );
    }
}
