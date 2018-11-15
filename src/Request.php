<?php

namespace BlunderingNinja\Http;

use BlunderingNinja\Http\Parameters\Files;
use BlunderingNinja\Http\Parameters\Parameters;
use BlunderingNinja\Http\Parameters\ServerParameters;


/**
 * Gathers and contains the http request.
 */
class Request
{
    /**
     * The http cookies - $_COOKIE
     *
     * @var BlunderingNinja\Http\Parameters\Parameters
     */
    protected $cookies;

    /**
     * The uploaded file(s) - $_FILE
     *
     * @var BlunderingNinja\Http\Parameters\Files
     */
    protected $files;

    /**
     * Get query - $_GET
     *
     * @var BlunderingNinja\Http\Parameters\Parameters
     */
    protected $get;

    /**
     * The post request variables - $_POST
     *
     * @var BlunderingNinja\Http\Parameters\Parameters
     */
    protected $post;

    /**
     * The server and remote host parameters - $_SERVER
     *
     * @var BlunderingNinja\Http\Parameters\Parameters
     */
    protected $server;

    /**
     * Builds the class.
     *
     * @param Parameters $cookies
     * @param Files $files
     * @param Parameters $get
     * @param Parameters $post
     * @param ServerParameters $server
     */
    public function __construct(Parameters $cookies, Files $files, Parameters $get, Parameters $post, ServerParameters $server)
    {
        $this->cookies = $cookies;
        $this->files = $files;
        $this->get = $get;
        $this->post = $post;
        $this->server = $server;
    }

    /**
     * Gets the cookies sent in the request.
     *
     * @return BlunderingNinja\Http\Parameters\Parameters
     */
    public function cookies() {
        return $this->cookies;
    }

    /**
     * Gets the files sent in teh request.
     *
     * @return BlunderingNinja\Http\Parameters\Files
     */
    public function files() {
        return $this->files;
    }

    /**
     * Gets the parameters sent via the GET method.
     *
     * @return BlunderingNinja\Http\Parameters\Parameters
     */
    public function get() {
        return $this->get;
    }

    /**
     * Gets the parameters sent via the POST method.
     *
     * @return BlunderingNinja\Http\Parameters\Parameters
     */
    public function post() {
        return $this->post;
    }

    /**
     * Gets the server and remote host parameters.
     *
     * @return BlunderingNinja\Http\Parameters\ServerParameters
     */
    public function server() {
        return $this->server;
    }
    
}