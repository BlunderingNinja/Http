<?php

namespace BlunderingNinja\Http;

use BlunderingNinja\Http\File;

/**
 * The purpose of this clase is to generate file objects.
 */
class FileFactory
{
    /**
     * Return a file object representing an uploaded file.
     *
     * @param array $fileData An array of data representing the file, usually from $_FILE.
     * @return BlunderingNinja\Http\File
     */
    public function makeFile(array $fileData)
    {
        return new File($fileData);
    }
}