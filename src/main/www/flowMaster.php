<?php
use midnightPublishing\mutantWar\controler\WebSwitch as WebSwitch;
if (! defined ( "MP_AUTOLOADER_SET" ))
{
    require_once __DIR__ . "/MP_Autoloader.php";
}

$strBaseRequest = trim ( substr ( $_SERVER ["REQUEST_URI"], strpos ( $_SERVER ["REQUEST_URI"], "/", 1 ) ), "/" );
$intEndOfType = strpos ( $strBaseRequest, "/", 1 );
$strType = substr ( $strBaseRequest, 0, $intEndOfType );
$strFile = substr ( $strBaseRequest, $intEndOfType );
$strFile = trim ( $strFile, "/" );

PSR0Autoloader::includeFile ( WebSwitch::direct ( $strType, $strFile ) );
