<?php

namespace BlunderingNinja\Http;

use BlunderingNinja\Http\File;

/**
 * The purpose of this clase is to generate file objects.
 */
class FileFactory
{
    public function makeFile(array $fileData)
    {
        return new File($fileData);
    }
}