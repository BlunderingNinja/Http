<?php

namespace BlunderingNinja\Http;

/**
 * Crafts and sends an http response to the client.
 */
class Response
{
    /**
     * The body of the response to be sent to the client/browser.
     *
     * @var string
     */
    protected $body = '';

    /**
     * Sets a cookie.
     *
     * @param string $key The name of the cookie.
     * @param string $value The value of the cookie
     * @return Response
     */
    public function setCookie($key, $value)
    {
        setcookie($key, $value);
        return $this;
    }

    /**
     * Sets a raw header.
     *
     * @param string $header A raw header string.
     * @return Response
     */
    public function setHeader($header)
    {
        header($header);
        return $this;
    }
    
    /**
     * Sets the http response code.
     *
     * @param int $code Http response code. 301 or 404 for example.
     * @return Response
     */
    public function setResponceCode($code)
    {
        http_response_code($code);
        return $this;
    }

    /**
     * Prepare the body that will be returned to the client.
     *
     * @param string $content The content that will be added to body attribute that will be returned to the client.
     * @param boolean $append Determines if we should append to or replace the current body attribute.
     * @return Response
     */
    public function setBody($content, $append = true)
    {
        if ($append) {
            # Append the new content to the body attribute.
            $this->body .= $content . PHP_EOL;
        } else {
            $this->body = $content;
        }

        return $this;
    }
    
    /**
     * Returns/echos the body to the client. Should be last thing called.
     *
     * @return void
     */
    public function returnResponse()
    {
        echo $this->body;
    }

    /**
     * Redirect the client to a new location. Must be called before any other content/white space is sent to client.
     *
     * @param string $location URL to new location. For example, https://www.google.com
     * @param integer $responseCode Default is 302 which is temporary. Use 301 for permanent redirect.
     * @return void
     */
    public function redirect($location, $responseCode = 302)
    {
        $header = "Location: $location";
        
        header($header, true, $responseCode);
    }
}
