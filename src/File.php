<?php

namespace BlunderingNinja\Http;

use Exception;

class File
{
    /**
     * Contains data about the file from $_FILES
     * 
     * $_FILES = [
     *      'name' => '4th of July Cookout.jpg'
     *      'type' => 'image/jpeg'
     *      'tmp_name' => 'C:\Users\wayne\AppData\Local\Temp\php8DEA.tmp'
     *      'error' => 0
     *      'size' => 587827
     * ]
     *
     * @var array
     */
    protected $fileData = array();

    public function __construct(array $data)
    {
        $this->fileData = $data;
    }

    /**
     * Returns the value of the property call if it exists in $fileData
     *
     * @param string $parameter
     * @return string
     */
    public function __get($parameter)
    {
        if (isset($this->fileData[$parameter])) {
            return $this->fileData[$parameter];
        }

        return null;
    }

    /**
     * Save the uploaded file to permanent storage.
     *
     * @param string $path Path to storage location. ex. /my/storage/path
     * @param string $newName The name you want the file to be saved as. Defaults to a unique, random name.
     * @return string|false Returns the full path of the saved file is successfull and false if not.
     */
    public function save($path, $newName)
    {
        # If a new name is not supplied, set to unique value.
        $newName = ($newName) ?: sha1(microtime());
        #Remove the trailing slash if there was one and manually add a new one.
        $path = rtrim($path, '/') . '/';
        $fullPath = $path . $newName;

        try {
            rename($this->tmp_name, $fullPath);
        } catch (Exception $e) {
            return false;
        }

        return $fullPath;
    }
}