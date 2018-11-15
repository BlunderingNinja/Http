<?php

use BlunderingNinja\Http\File;
use PHPUnit\Framework\TestCase;
use BlunderingNinja\Http\FileFactory;
use BlunderingNinja\Http\Parameters\Files;

class FilesTest extends TestCase
{
    public function testMagicPropertyReturnsFileObject()
    {
        $files = $this->makeFiles();
        
        $this->assertInstanceOf('BlunderingNinja\Http\File', $files->myFile);
    }

    public function testNonExistantFileReturnsNull()
    {
        $files = $this->makeFiles();
        
        $this->assertNull($files->doesNotExist);
    }

    protected function makeFiles()
    {
        $data = [
            'myFile' => [
                "name" => "file.pdf",
                "type" => "application/pdf",
                "tmp_name" => "/my/path/php97AC.tmp",
                "error" => 0,
                "size" => 26718,
            ]
        ];

        return new Files($data, new FileFactory());
    }
}