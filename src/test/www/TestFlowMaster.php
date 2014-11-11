<?php
require_once ("MP_Autoloader.php");
class TestFlowMaster extends \PHPUnit_Framework_TestCase
{
    public function testRun()
    {
        $_SERVER ["REQUEST_URI"] = "/index";
        require WWW_PATH . "flowMaster.php";
    }
}