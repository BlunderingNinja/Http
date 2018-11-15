<?php

use PHPUnit\Framework\TestCase;
use BlunderingNinja\Http\Response;

class ResponseTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testIfWeCanSetCookieSuccessfully() {
        $response = new Response();

        $response->setCookie('id', '1001');
        $headers = xdebug_get_headers();
        
        $this->assertContains('Set-Cookie: id=1001', $headers);
    }

    /**
     * @runInSeparateProcess
     */
    public function testIfWeCanSetHeaders() {
        $response = new Response();

        $response->setHeader('Content-Type: text/csv; charset=utf-8');
        $response->setHeader('Content-Disposition: attachment; filename="filename.csv"');
        $headers = xdebug_get_headers();

        $this->assertContains('Content-Type: text/csv; charset=utf-8', $headers);
        $this->assertContains('Content-Disposition: attachment; filename="filename.csv"', $headers);
    }

    public function testAbleToSetResponseCode()
    {
        $response = new Response();

        $response->setResponceCode(404);
        $this->assertEquals(404, http_response_code());

        $response->setResponceCode(500);
        $this->assertEquals(500, http_response_code());
    }

    public function testAbleToSetAndAppendBodyAndSendResponse()
    {
        $response = new Response();

        $response->setBody('<html>');
        $response->setBody('</html>');
        $response->returnResponse();

        $this->expectOutputString('<html>' . PHP_EOL . '</html>' . PHP_EOL);
    }

    public function testAbleToSetAndReplaceBodyAndSendResponse()
    {
        $response = new Response();

        $response->setBody('<html>');
        $response->setBody('</html>');
        $response->setBody('<body></body>', false);
        $response->returnResponse();

        $this->expectOutputString('<body></body>');
    }

    /**
     * @runInSeparateProcess
     */
    public function testRedirectMethodSetsLocationHeader()
    {
        $response = new Response();

        $response->redirect("https://www.google.com");
        $headers = xdebug_get_headers();

        $this->assertContains('Location: https://www.google.com', $headers);
        $this->assertEquals(302, http_response_code());

        $response->redirect("https://www.msn.com", 301);
        $headers = xdebug_get_headers();

        $this->assertContains('Location: https://www.msn.com', $headers);
        $this->assertEquals(301, http_response_code());
    }
}