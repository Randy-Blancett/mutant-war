<?php
if (! defined ( "MP_AUTOLOADER_SET" ))
{
    require_once __DIR__ . "/MP_Autoloader.php";
}

$strBaseRequest = trim ( substr ( $_SERVER ["REQUEST_URI"], strpos ( $_SERVER ["REQUEST_URI"], "/", 1 ) ), "/" );
$intEndOfType = strpos ( $strBaseRequest, "/", 1 );
$strType = substr ( $strBaseRequest, 0, $intEndOfType );
$strFile = substr ( $strBaseRequest, $intEndOfType );
$strFile = trim ( $strFile, "/" );

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
    default :
        $strFile = trim ( $strType . "/" . $strFile, "/" );
        $strExt = ".php";
}

// print ("file var: " . $strFile . "<br/>\n") ;

PSR0Autoloader::includeFile ( $strFile . $strExt );
