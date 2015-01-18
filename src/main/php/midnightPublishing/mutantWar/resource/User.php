<?php

namespace midnightPublishing\mutantWar\resource;

use Tonic\Resource as Resource;
use Tonic\Response as Response;

/**
 * Single Snippet Resource
 * @uri /rest/user
 */
class User extends Resource
{
    /**
     *
     * @method GET
     */
    function get()
    {
        return new Response ( Response::OK, 'Example response' );
    }
    
    /**
     *
     * @method POST
     */
    function post()
    {
        return new Response ( Response::OK, 'Post Return' );
    }
}