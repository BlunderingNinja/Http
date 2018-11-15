<?php

namespace BlunderingNinja\Http\Parameters;

use BlunderingNinja\Http\Parameters\Parameters;

class ServerParameters extends Parameters
{
    /**
     * Get the parameter by key. Key is the camel case version of the $_SERVER key.
     * For example, HTTP_USER_AGENT is accessed by httpUserAgent.
     *
     * @param string $parameter The name of the key.
     * @return string The value associatied with the parameter key.
     */
    public function __get($parameter)
    {
        $key = $this->camelCaseToDashedCaps($parameter);

        if (isset($this->parameters[$key])) {
            return $this->parameters[$key];
        }

        return null;
    }

    /**
     * Takes a camel case string and converts it to all caps with dashes.
     * For example: documentRoot becomes DOCUMENT_ROOT
     *
     * @param string $string
     * @return string
     */
    protected function camelCaseToDashedCaps(string $string)
    {
        $words = preg_split('/(?=[A-Z])/', $string);
        return strtoupper(implode('_',$words));
    }
}