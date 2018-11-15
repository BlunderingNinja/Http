<?php

use PHPUnit\Framework\TestCase;
use BlunderingNinja\Http\Parameters\Parameters;

class ParametersTest extends TestCase
{

    public function testAllMethodReturnsArrayOfParameters()
    {
        $Parameters = new Parameters([
            'key' => 'This is a test key',
            'test-key' => 'This is my other test key'
        ]);
        
        $this->assertArrayHasKey('key', $Parameters->all());
        $this->assertArrayHasKey('test-key', $Parameters->all());
        $this->assertCount(2, $Parameters->all());
    }

    public function testCountMethodRetunsNumberOfParameters()
    {
        $parameters = new Parameters([
            'key' => 'This is a test key',
            'test-key' => 'This is my other test key'
        ]);

        $this->assertEquals(2, $parameters->count());

        $parameters = new Parameters([
            'key' => 'This is a test key',
            'test-key' => 'This is my other test key',
            'another-key' => 'This is a test key',
            'final-key' => 'This is my other test key'
        ]);

        $this->assertEquals(4, $parameters->count());
    }

    public function testGetMethodReturnsParameter()
    {
        $parameters = new Parameters([
            'key' => 'This is a test key',
            'test-key' => 'This is my other test key'
        ]);

        $this->assertEquals('This is a test key', $parameters->get('key'));
        $this->assertEquals('This is my other test key', $parameters->get('test-key'));
    }

    public function testGetMethodOnNonExistentParameterReturnsNull()
    {
        $parameters = new Parameters([
            'key' => 'This is a test key',
            'test-key' => 'This is my other test key'
        ]);

        $this->assertEquals(null, $parameters->get('not-there'));
        $this->assertEquals(null, $parameters->get('fake'));
    }

    public function testMagicGetMethodReturnsParameter()
    {
        $parameters = new Parameters([
            'key' => 'This is a test key',
            'test_key' => 'This is my other test key'
        ]);

        $this->assertEquals('This is a test key', $parameters->key);
        $this->assertEquals('This is my other test key', $parameters->test_key);
    }

    public function testMagicGetMethodOnNonExistentParameterReturnsNull()
    {
        $parameters = new Parameters([
            'key' => 'This is a test key',
            'test_key' => 'This is my other test key'
        ]);

        $this->assertEquals(null, $parameters->not_there);
        $this->assertEquals(null, $parameters->fake);
    }
}