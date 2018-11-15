<?php

use PHPUnit\Framework\TestCase;
use BlunderingNinja\Http\File;

class FileTest extends TestCase
{
    public function testFileHasName() {
        $file = $this->makeFile();

        $this->assertEquals('file.pdf', $file->name);
    }

    public function testFileHasType() {
        $file = $this->makeFile();

        $this->assertEquals('application/pdf', $file->type);
    }

    public function testFileHasTmpName() {
        $file = $this->makeFile();

        $this->assertEquals('/my/path/php97AC.tmp', $file->tmp_name);
    }

    public function testFileHasError() {
        $file = $this->makeFile();

        $this->assertEquals(0, $file->error);
    }

    public function testFileHasSize() {
        $file = $this->makeFile();

        $this->assertEquals(26718, $file->size);
    }

    public function testInvalidPropertyReturnsNull()
    {
        $file = $this->makeFile();

        $this->assertEquals(null, $file->unknown);
    }

    protected function makeFile(array $override = null)
    {
        $file_data = [
            "name" => "file.pdf",
            "type" => "application/pdf",
            "tmp_name" => "/my/path/php97AC.tmp",
            "error" => 0,
            "size" => 26718,
        ];

        if ($override) {
            $file_data = array_replace($file_data, $override);
        }

        return new File($file_data);
    }
}