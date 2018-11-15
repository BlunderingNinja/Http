<?php

namespace BlunderingNinja\Http\Parameters;

class Parameters
{
    /**
     * Contains the parameters.
     *
     * @var array
     */
    protected $parameters = array();

    /**
     * Construct Function
     *
     * @param array $parameters $_GET, $_POST, or $_COOKIE typically.
     */
    public function __construct(array $parameters)
    {
        $this->parameters = $parameters;
    }

    /**
     * Get the parameter by key.
     *
     * @param string $parameter The name of the key.
     * @return string The value associatied with the parameter key.
     */
    public function __get($parameter)
    {
        if (isset($this->parameters[$parameter])) {
            return $this->parameters[$parameter];
        }

        return null;
    }

    /**
     * Returns all parameter in an associative array.
     *
     * @return array Associative array of all parameters.
     */
    public function all()
    {
        return $this->parameters;
    }

    /**
     * Returns the number of parameters
     *
     * @return integer
     */
    public function count()
    {
        return count($this->parameters);
    }

    /**
     * Returns the value of the parameter it is passed as an argument.
     *
     * @param string $parameter The name of the parameter
     * @return string The value of the parameter being called.
     */
    public function get($parameter)
    {
        if (isset($this->parameters[$parameter])) {
            return $this->parameters[$parameter];
        }

        return null;
    }

}