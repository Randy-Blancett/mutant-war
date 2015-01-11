<?php

namespace midnightPublishing\mutantWar\resource;

use Tonic\Resource as Resource;

/**
 * Single Snippet Resource
 * @uri /user
 */
class User extends Resource
{
    function get(
                $request)
    {
        $response = new Response ( $request );
        $response->code = Response::OK;
        $response->addHeader ( 'content-type', 'text/plain' );
        
        $response->body = "user resource";
        
        return $response;
    }
}