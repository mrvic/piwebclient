<?php
/**
 * UnitClass
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
 * UnitClass Class Doc Comment
 *
 * @category    Class */
/**
 * @package     PIWebAPI\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UnitClass implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UnitClass';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'web_id' => 'string',
        'id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'canonical_unit_name' => 'string',
        'canonical_unit_abbreviation' => 'string',
        'path' => 'string',
        'links' => '\PIWebAPI\Client\Model\UnitClassLinks'
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
        'web_id' => 'WebId',
        'id' => 'Id',
        'name' => 'Name',
        'description' => 'Description',
        'canonical_unit_name' => 'CanonicalUnitName',
        'canonical_unit_abbreviation' => 'CanonicalUnitAbbreviation',
        'path' => 'Path',
        'links' => 'Links'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'web_id' => 'setWebId',
        'id' => 'setId',
        'name' => 'setName',
        'description' => 'setDescription',
        'canonical_unit_name' => 'setCanonicalUnitName',
        'canonical_unit_abbreviation' => 'setCanonicalUnitAbbreviation',
        'path' => 'setPath',
        'links' => 'setLinks'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'web_id' => 'getWebId',
        'id' => 'getId',
        'name' => 'getName',
        'description' => 'getDescription',
        'canonical_unit_name' => 'getCanonicalUnitName',
        'canonical_unit_abbreviation' => 'getCanonicalUnitAbbreviation',
        'path' => 'getPath',
        'links' => 'getLinks'
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
        $this->container['web_id'] = isset($data['web_id']) ? $data['web_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['canonical_unit_name'] = isset($data['canonical_unit_name']) ? $data['canonical_unit_name'] : null;
        $this->container['canonical_unit_abbreviation'] = isset($data['canonical_unit_abbreviation']) ? $data['canonical_unit_abbreviation'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
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
     * Gets web_id
     * @return string
     */
    public function getWebId()
    {
        return $this->container['web_id'];
    }

    /**
     * Sets web_id
     * @param string $web_id
     * @return $this
     */
    public function setWebId($web_id)
    {
        $this->container['web_id'] = $web_id;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets canonical_unit_name
     * @return string
     */
    public function getCanonicalUnitName()
    {
        return $this->container['canonical_unit_name'];
    }

    /**
     * Sets canonical_unit_name
     * @param string $canonical_unit_name
     * @return $this
     */
    public function setCanonicalUnitName($canonical_unit_name)
    {
        $this->container['canonical_unit_name'] = $canonical_unit_name;

        return $this;
    }

    /**
     * Gets canonical_unit_abbreviation
     * @return string
     */
    public function getCanonicalUnitAbbreviation()
    {
        return $this->container['canonical_unit_abbreviation'];
    }

    /**
     * Sets canonical_unit_abbreviation
     * @param string $canonical_unit_abbreviation
     * @return $this
     */
    public function setCanonicalUnitAbbreviation($canonical_unit_abbreviation)
    {
        $this->container['canonical_unit_abbreviation'] = $canonical_unit_abbreviation;

        return $this;
    }

    /**
     * Gets path
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     * @param string $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets links
     * @return \PIWebAPI\Client\Model\UnitClassLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \PIWebAPI\Client\Model\UnitClassLinks $links
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

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

