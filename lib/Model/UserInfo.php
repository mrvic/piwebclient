<?php
/**
 * UserInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  PIWebAPI\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PI Web API 2017 Swagger Spec
 *
 * Swagger Spec file that describes PI Web API
 *
 * OpenAPI spec version: 1.9.0.235
 * Contact: techsupport@osisoft.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace PIWebAPI\Client\Model;

use \ArrayAccess;

/**
 * UserInfo Class Doc Comment
 *
 * @category    Class */
/**
 * @package     PIWebAPI\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UserInfo implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UserInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'identity_type' => 'string',
        'name' => 'string',
        'is_authenticated' => 'bool',
        'sid' => 'string',
        'impersonation_level' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'identity_type' => 'IdentityType',
        'name' => 'Name',
        'is_authenticated' => 'IsAuthenticated',
        'sid' => 'SID',
        'impersonation_level' => 'ImpersonationLevel'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'identity_type' => 'setIdentityType',
        'name' => 'setName',
        'is_authenticated' => 'setIsAuthenticated',
        'sid' => 'setSid',
        'impersonation_level' => 'setImpersonationLevel'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'identity_type' => 'getIdentityType',
        'name' => 'getName',
        'is_authenticated' => 'getIsAuthenticated',
        'sid' => 'getSid',
        'impersonation_level' => 'getImpersonationLevel'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['identity_type'] = isset($data['identity_type']) ? $data['identity_type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['is_authenticated'] = isset($data['is_authenticated']) ? $data['is_authenticated'] : null;
        $this->container['sid'] = isset($data['sid']) ? $data['sid'] : null;
        $this->container['impersonation_level'] = isset($data['impersonation_level']) ? $data['impersonation_level'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets identity_type
     * @return string
     */
    public function getIdentityType()
    {
        return $this->container['identity_type'];
    }

    /**
     * Sets identity_type
     * @param string $identity_type
     * @return $this
     */
    public function setIdentityType($identity_type)
    {
        $this->container['identity_type'] = $identity_type;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets is_authenticated
     * @return bool
     */
    public function getIsAuthenticated()
    {
        return $this->container['is_authenticated'];
    }

    /**
     * Sets is_authenticated
     * @param bool $is_authenticated
     * @return $this
     */
    public function setIsAuthenticated($is_authenticated)
    {
        $this->container['is_authenticated'] = $is_authenticated;

        return $this;
    }

    /**
     * Gets sid
     * @return string
     */
    public function getSid()
    {
        return $this->container['sid'];
    }

    /**
     * Sets sid
     * @param string $sid
     * @return $this
     */
    public function setSid($sid)
    {
        $this->container['sid'] = $sid;

        return $this;
    }

    /**
     * Gets impersonation_level
     * @return string
     */
    public function getImpersonationLevel()
    {
        return $this->container['impersonation_level'];
    }

    /**
     * Sets impersonation_level
     * @param string $impersonation_level
     * @return $this
     */
    public function setImpersonationLevel($impersonation_level)
    {
        $this->container['impersonation_level'] = $impersonation_level;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\PIWebAPI\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\PIWebAPI\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

