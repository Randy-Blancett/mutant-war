<?php

namespace midnightPublishing\mutantWar\controler;

use midnightPublishing\mutantWar\controler\RestSwitch as RestSwitch;

/**
 * This switch will control where web data will point to
 *
 * @author darkowl
 *        
 */
class WebSwitch
{
    private static $outputData = true;
    /**
     * This will switch the output based on the input
     *
     * @param String $strType
     *            Type of data you are looking for
     * @param String $strFile
     *            Name of the file you want to open
     *            
     * @return String return file location
     */
    public static function direct(
                                $strType, 
                                $strFile)
    {
        $strExt = "";
        switch ($strType)
        {
            case "js" :
                self::setHeader ( 'Content-Type: application/javascript' );
                $strFile = "js/" . $strFile;
                $strExt = ".js";
                break;
            case "css" :
                self::setHeader ( 'Content-Type: text/css' );
                $strFile = "css/" . $strFile;
                $strExt = ".css";
                break;
            case "php" :
                $strExt = ".php";
                break;
            case "rest" :
                RestSwitch::process ();
                RestSwitch::output ();
                return null;
            default :
                $strFile = trim ( $strType . "/" . $strFile, "/" );
                $strExt = ".php";
        }
        return $strFile . $strExt;
    }
    public static function setHeader(
                                    $strHeader)
    {
        if (self::$outputData)
        {
            header ( 'Content-Type: application/javascript' );
        }
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