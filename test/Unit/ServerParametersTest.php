<?php

use PHPUnit\Framework\TestCase;
use BlunderingNinja\Http\Parameters\ServerParameters;

class ServerParametersTest extends TestCase
{

    public function testStudlyCaseMethodReturnsDashedCapsKeyFromArray()
    {
        $serverParameters = new ServerParameters([
            'TEST_KEY' => 'This is a test key',
            'ANOTHER_TEST_KEY' => 'This is my other test key'
            ]);

        $this->assertEquals('This is a test key', $serverParameters->testKey);
        $this->assertEquals('This is my other test key', $serverParameters->anotherTestKey);

    }

    public function testNonExistentStudlyCaseMethodReturnsNull()
    {
        $serverParameters = new ServerParameters([
            'TEST_KEY' => 'This is a test key',
            'ANOTHER_TEST_KEY' => 'This is my other test key'
            ]);

        $this->assertEquals(null, $serverParameters->keyNotThere);
    }
}