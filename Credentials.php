<?php

/**
 * PrintNode_Credentials
 *
 * Credential store used by PrintNode_Request
 * when communicating with API server.
 */
class PrintNode_Credentials
{
    private $username;
    private $password;

    /**
     * Constructor
     * @param mixed $username
     * @param mixed $password
     * @return PrintNode_Credentials
     */
    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * Convert object into a string
     * @param void
     * @return string
     */
    public function __toString()
    {
        return $this->password . ':';
    }

    /**
     * Set property on object
     * @param mixed $propertyName
     * @param mixed $value
     * @return void
     */
    public function __set($propertyName, $value)
    {
        if (!property_exists($this, $propertyName)) {

            throw new InvalidArgumentException(
                sprintf(
                    '%s does not have a property named %s',
                    get_class($this),
                    $propertyName
                )
            );
        }

        $this->$propertyName = $value;
    }

    /**
     * Get property from object
     * @param mixed $propertyName
     * @return mixed
     */
    public function __get($propertyName)
    {
        if (!property_exists($this, $propertyName)) {

            throw new InvalidArgumentException(
                sprintf(
                    '%s does not have a property named %s',
                    get_class($this),
                    $propertyName
                )
            );
        }

        return $this->$propertyName;
    }
}