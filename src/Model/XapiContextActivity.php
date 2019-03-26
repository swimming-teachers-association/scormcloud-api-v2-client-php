<?php
/**
 * XapiContextActivity
 *
 * PHP version 5
 *
 * @category Class
 * @package  RusticiSoftware\Cloud\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SCORM Cloud Rest API
 *
 * REST API used for SCORM Cloud integrations.
 *
 * OpenAPI spec version: 2.0 beta
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.3
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace RusticiSoftware\Cloud\V2\RusticiSoftware\Cloud\V2\Model;

use \ArrayAccess;
use \RusticiSoftware\Cloud\V2\ObjectSerializer;

/**
 * XapiContextActivity Class Doc Comment
 *
 * @category Class
 * @description https://github.com/adlnet/xAPI-Spec/blob/1.0.2/xAPI.md#4162-contextactivities-property
 * @package  RusticiSoftware\Cloud\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class XapiContextActivity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'XapiContextActivity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'parent' => '\RusticiSoftware\Cloud\V2\RusticiSoftware\Cloud\V2\Model\XapiActivity[]',
        'grouping' => '\RusticiSoftware\Cloud\V2\RusticiSoftware\Cloud\V2\Model\XapiActivity[]',
        'category' => '\RusticiSoftware\Cloud\V2\RusticiSoftware\Cloud\V2\Model\XapiActivity[]',
        'other' => '\RusticiSoftware\Cloud\V2\RusticiSoftware\Cloud\V2\Model\XapiActivity[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'parent' => null,
        'grouping' => null,
        'category' => null,
        'other' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'parent' => 'parent',
        'grouping' => 'grouping',
        'category' => 'category',
        'other' => 'other'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'parent' => 'setParent',
        'grouping' => 'setGrouping',
        'category' => 'setCategory',
        'other' => 'setOther'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'parent' => 'getParent',
        'grouping' => 'getGrouping',
        'category' => 'getCategory',
        'other' => 'getOther'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['grouping'] = isset($data['grouping']) ? $data['grouping'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['other'] = isset($data['other']) ? $data['other'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets parent
     *
     * @return \RusticiSoftware\Cloud\V2\RusticiSoftware\Cloud\V2\Model\XapiActivity[]
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param \RusticiSoftware\Cloud\V2\RusticiSoftware\Cloud\V2\Model\XapiActivity[] $parent parent
     *
     * @return $this
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets grouping
     *
     * @return \RusticiSoftware\Cloud\V2\RusticiSoftware\Cloud\V2\Model\XapiActivity[]
     */
    public function getGrouping()
    {
        return $this->container['grouping'];
    }

    /**
     * Sets grouping
     *
     * @param \RusticiSoftware\Cloud\V2\RusticiSoftware\Cloud\V2\Model\XapiActivity[] $grouping grouping
     *
     * @return $this
     */
    public function setGrouping($grouping)
    {
        $this->container['grouping'] = $grouping;

        return $this;
    }

    /**
     * Gets category
     *
     * @return \RusticiSoftware\Cloud\V2\RusticiSoftware\Cloud\V2\Model\XapiActivity[]
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \RusticiSoftware\Cloud\V2\RusticiSoftware\Cloud\V2\Model\XapiActivity[] $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets other
     *
     * @return \RusticiSoftware\Cloud\V2\RusticiSoftware\Cloud\V2\Model\XapiActivity[]
     */
    public function getOther()
    {
        return $this->container['other'];
    }

    /**
     * Sets other
     *
     * @param \RusticiSoftware\Cloud\V2\RusticiSoftware\Cloud\V2\Model\XapiActivity[] $other other
     *
     * @return $this
     */
    public function setOther($other)
    {
        $this->container['other'] = $other;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


