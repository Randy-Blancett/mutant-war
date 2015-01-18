<?php

namespace midnightPublishing\mutantWar\controler;

use Tonic\Application as Application;
use Tonic\Request as Request;
use Tonic\Response;

require_once (dirname ( __DIR__ ) . "/resource/User.php");
/**
 * Object to handle rest data processing
 *
 * @author darkowl
 *        
 */
class RestSwitch
{
    private static $app = null;
    private static $request = null;
    private static $resource = null;
    private static $response = null;
    private static $outputData = true;
    
    /**
     * Initialize application
     */
    public static function init()
    {
        self::$app = new Application ( array (
                'baseUri' => '/rest',
                'load' => "../resource/*.php" ) );
    }
    /**
     * Process the current rest data
     */
    public static function process()
    {
        self::$request = new Request ();
        if (! strpos ( self::$request->uri, "rest" ))
        {
            return;
        }
        try
        {
            self::$resource = self::$app->getResource ( self::$request );
            self::$response = self::$resource->exec ();
        }
        catch ( Exception $e )
        {
            print ("has Exception") ;
            self::$response = new Response ( Response::BADREQUEST, $e->getMessage () );
        }
    }
    /**
     * Output the Resource
     */
    public static function output()
    {
        if (self::$outputData)
        {
            self::$response->output ();
        }
    }
    /**
     * Get the response
     */
    public static function getResponse()
    {
        return self::$response;
    }
    /**
     * Get the application object
     */
    public static function getApp()
    {
        return self::$app;
    }
    /**
     * Get set this to false if you do not want data output
     */
    public static function setShowOutput(
                                        $boolShow = true)
    {
        self::$outputData = $boolShow;
    }
}

RestSwitch::init ();