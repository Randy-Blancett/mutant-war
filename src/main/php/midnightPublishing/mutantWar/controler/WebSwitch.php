<?php

namespace midnightPublishing\mutantWar\controler;

/**
 * This switch will control where web data will point to
 *
 * @author darkowl
 *        
 */
class WebSwitch
{
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
                header ( 'Content-Type: application/javascript' );
                $strFile = "js/" . $strFile;
                $strExt = ".js";
                break;
            case "css" :
                header ( 'Content-Type: text/css' );
                $strFile = "css/" . $strFile;
                $strExt = ".css";
                break;
            case "php" :
                $strExt = ".php";
                break;
            case "rest" :
                return "midnightPublishing/mutantWar/controler/RestSwitch.php";
            default :
                $strFile = trim ( $strType . "/" . $strFile, "/" );
                $strExt = ".php";
        }
        return $strFile . $strExt;
    }
}