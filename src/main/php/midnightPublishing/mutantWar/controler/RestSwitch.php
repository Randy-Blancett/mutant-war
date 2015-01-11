<?php

namespace midnightPublishing\mutantWar\controler;

use Tonic\Application as Application;
use Tonic\Request as Request;
// use midnightPublishing\mutantWar\resource\User as User;

require_once (dirname(__DIR__)."/resource/User.php");

// print ("This is the RestSwitch") ;
$app = new Application ( array (
        'baseUri' => '/rest',
        'mount' => array (
                'User',
                '/rest/user' ),
        'load' => "../resource/*.php" ) );

print_r ( $app );

$request = new Request ( array (
        'baseUri' => '/rest' ) );

if (! strpos ( $request->uri, "rest" ))
{
    print ("bad Uri") ;
    return;
}

print ("New Uri") ;

$resource = $app->getResource ( $request );
$response = $resource->exec ();
$response->output ();

