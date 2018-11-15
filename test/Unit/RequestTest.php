<?php

use PHPUnit\Framework\TestCase;
use BlunderingNinja\Http\File;
Use BlunderingNinja\Http\Request;
use BlunderingNinja\Http\FileFactory;
use BlunderingNinja\Http\Parameters\Files;
use BlunderingNinja\Http\Parameters\Parameters;
use BlunderingNinja\Http\Parameters\ServerParameters;

class RequestTest extends TestCase
{
    public function testCookiesMethodReturnsParametersObject()
    {
        $request = $this->makeRequest();
        $this->assertInstanceOf(Parameters::class, $request->cookies());
    }

    public function testFilesMethodReturnsFilesObject()
    {
        $request = $this->makeRequest();
        $this->assertInstanceOf(Files::class, $request->files());
    }

    public function testPostMethodReturnsParametersObject()
    {
        $request = $this->makeRequest();
        $this->assertInstanceOf(Parameters::class, $request->post());
    }

    public function testGetMethodReturnsParametersObject()
    {
        $request = $this->makeRequest();
        $this->assertInstanceOf(Parameters::class, $request->get());
    }

    public function testServerMethodReturnsServerParametersObject()
    {
        $request = $this->makeRequest();
        $this->assertInstanceOf(ServerParameters::class, $request->server());
    }

    protected function makeRequest()
    {
        $cookies = new Parameters(array());
        $files = new Files(array(), new FileFactory());
        $get = new Parameters(array());
        $post = new Parameters(array());
        $server = new ServerParameters(array());

        return new Request($cookies, $files, $get, $post, $server);
    }
}