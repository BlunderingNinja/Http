<?php

namespace BlunderingNinja\Http\Parameters;

use BlunderingNinja\Http\Parameters\Parameters;
use BlunderingNinja\Http\FileFactory;

/**
 * A class to represent all the uploaded files to the server. Returns the file object as a parameter.
 */
class Files extends Parameters
{
    /**
     * Builds the class.
     *
     * @param array $parameters Usually from $_FILE.
     * @param FileFactory $factory
     */
    public function __construct(array $parameters, FileFactory $factory)
    {
        
        foreach ($parameters as $key => $values) {
            $this->parameters[$key] = $factory->makeFile($values);
        }
    }
}