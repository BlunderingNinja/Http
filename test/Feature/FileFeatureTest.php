<?php

use PHPUnit\Framework\TestCase;
use BlunderingNinja\Http\File;

class FileFeatureTest extends TestCase
{
    public function testFileCanBeSaved()
    {
        # Creating directories to hold temporary file and new file.
        mkdir($_ENV['PATH_TO_STORAGE'] . 'temp');
        mkdir($_ENV['PATH_TO_STORAGE'] . 'storage');
        $file = fopen($_ENV['PATH_TO_STORAGE'] . 'temp/temp_file.txt', 'w');
        fwrite($file, '');
        fclose($file);

        $file = new File([
            'name' => 'testfile.txt',
            'type' => 'image/txt',
            'tmp_name' => $_ENV['PATH_TO_STORAGE'] . 'temp\temp_file.txt',
            'error' => 0,
            'size' => 100
        ]);

        $fileName = $file->save($_ENV['PATH_TO_STORAGE'] . 'storage', 'my_new_file.txt');

        $this->assertEquals($_ENV['PATH_TO_STORAGE'] . 'storage/my_new_file.txt', $fileName);
        $this->assertFileExists($_ENV['PATH_TO_STORAGE'] . 'storage/my_new_file.txt');

        unlink($_ENV['PATH_TO_STORAGE'] . 'storage/my_new_file.txt');
        rmdir($_ENV['PATH_TO_STORAGE'] . 'storage');
        rmdir($_ENV['PATH_TO_STORAGE'] . 'temp');
    }

    public function testFileCanBeSavedWithGeneratedName()
    {
        # Creating directories to hold temporary file and new file.
        mkdir($_ENV['PATH_TO_STORAGE'] . 'temp');
        mkdir($_ENV['PATH_TO_STORAGE'] . 'storage');
        $file = fopen($_ENV['PATH_TO_STORAGE'] . 'temp/temp_file.txt', 'w');
        fwrite($file, '');
        fclose($file);

        $file = new File([
            'name' => 'testfile.txt',
            'type' => 'image/txt',
            'tmp_name' => $_ENV['PATH_TO_STORAGE'] . 'temp\temp_file.txt',
            'error' => 0,
            'size' => 100
        ]);

        $fileName = $file->save('/this/path/does/not/exist/so/this/file/cant/be/saved', 'my_new_file.txt');

        $this->assertFalse($fileName);

        unlink($_ENV['PATH_TO_STORAGE'] . 'temp/temp_file.txt');
        rmdir($_ENV['PATH_TO_STORAGE'] . 'storage');
        rmdir($_ENV['PATH_TO_STORAGE'] . 'temp');
    }
}