<?php

use BlunderingNinja\Http\File;
use PHPUnit\Framework\TestCase;
use BlunderingNinja\Http\FileFactory;

class FileFactoryTest extends TestCase
{
    public function testIfFileObjectIsReturned()
    {
        $factory = new FileFactory;
        $file = $factory->makeFile([
            "name" => "file.pdf",
            "type" => "application/pdf",
            "tmp_name" => "/my/path/php97AC.tmp",
            "error" => 0,
            "size" => 26718,
        ]);

        $this->assertInstanceOf('BlunderingNinja\Http\File', $file);
    }
}