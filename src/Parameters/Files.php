<?php

namespace BlunderingNinja\Http\Parameters;

use BlunderingNinja\Http\Parameters\Parameters;
use BlunderingNinja\Http\FileFactory;

class Files extends Parameters
{
    /**
     * Builds the class.
     *
     * @param array $parameters Usuall from $_FILE.
     * @param BlunderingNinja\Http\FileFactory $factory
     */
    public function __construct(array $parameters, FileFactory $factory)
    {
        
        foreach ($parameters as $key => $values) {
            $this->parameters[$key] = $factory->makeFile($values);
        }
    }
}