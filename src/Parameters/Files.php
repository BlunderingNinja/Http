<?php

namespace BlunderingNinja\Http\Parameters;

use BlunderingNinja\Http\Parameters\Parameters;
use BlunderingNinja\Http\FileFactory;

class Files extends Parameters
{
    public function __construct(array $parameters, FileFactory $factory)
    {
        
        foreach ($parameters as $key => $values) {
            $this->parameters[$key] = $factory->makeFile($values);
        }
    }
}