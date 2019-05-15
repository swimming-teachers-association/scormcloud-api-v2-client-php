<?php
/**
 * XapiContext
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

namespace RusticiSoftware\Cloud\V2\Model;

use \ArrayAccess;
use \RusticiSoftware\Cloud\V2\ObjectSerializer;

/**
 * XapiContext Class Doc Comment
 *
 * @category Class
 * @description https://github.com/adlnet/xAPI-Spec/blob/1.0.2/xAPI.md#416-context
 * @package  RusticiSoftware\Cloud\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class XapiContext implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'XapiContext';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'registration' => 'string',
        'instructor' => '\RusticiSoftware\Cloud\V2\Model\XapiAgentGroup',
        'team' => '\RusticiSoftware\Cloud\V2\Model\XapiAgentGroup',
        'context_activities' => '\RusticiSoftware\Cloud\V2\Model\XapiContextActivity',
        'revision' => 'string',
        'platform' => 'string',
        'language' => 'string',
        'statement' => '\RusticiSoftware\Cloud\V2\Model\XapiStatementReference',
        'extensions' => 'map[string,object]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'registration' => null,
        'instructor' => null,
        'team' => null,
        'context_activities' => null,
        'revision' => null,
        'platform' => null,
        'language' => null,
        'statement' => null,
        'extensions' => null
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
        'registration' => 'registration',
        'instructor' => 'instructor',
        'team' => 'team',
        'context_activities' => 'contextActivities',
        'revision' => 'revision',
        'platform' => 'platform',
        'language' => 'language',
        'statement' => 'statement',
        'extensions' => 'extensions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'registration' => 'setRegistration',
        'instructor' => 'setInstructor',
        'team' => 'setTeam',
        'context_activities' => 'setContextActivities',
        'revision' => 'setRevision',
        'platform' => 'setPlatform',
        'language' => 'setLanguage',
        'statement' => 'setStatement',
        'extensions' => 'setExtensions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'registration' => 'getRegistration',
        'instructor' => 'getInstructor',
        'team' => 'getTeam',
        'context_activities' => 'getContextActivities',
        'revision' => 'getRevision',
        'platform' => 'getPlatform',
        'language' => 'getLanguage',
        'statement' => 'getStatement',
        'extensions' => 'getExtensions'
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
        $this->container['registration'] = isset($data['registration']) ? $data['registration'] : null;
        $this->container['instructor'] = isset($data['instructor']) ? $data['instructor'] : null;
        $this->container['team'] = isset($data['team']) ? $data['team'] : null;
        $this->container['context_activities'] = isset($data['context_activities']) ? $data['context_activities'] : null;
        $this->container['revision'] = isset($data['revision']) ? $data['revision'] : null;
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['statement'] = isset($data['statement']) ? $data['statement'] : null;
        $this->container['extensions'] = isset($data['extensions']) ? $data['extensions'] : null;
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
     * Gets registration
     *
     * @return string
     */
    public function getRegistration()
    {
        return $this->container['registration'];
    }

    /**
     * Sets registration
     *
     * @param string $registration registration
     *
     * @return $this
     */
    public function setRegistration($registration)
    {
        $this->container['registration'] = $registration;

        return $this;
    }

    /**
     * Gets instructor
     *
     * @return \RusticiSoftware\Cloud\V2\Model\XapiAgentGroup
     */
    public function getInstructor()
    {
        return $this->container['instructor'];
    }

    /**
     * Sets instructor
     *
     * @param \RusticiSoftware\Cloud\V2\Model\XapiAgentGroup $instructor instructor
     *
     * @return $this
     */
    public function setInstructor($instructor)
    {
        $this->container['instructor'] = $instructor;

        return $this;
    }

    /**
     * Gets team
     *
     * @return \RusticiSoftware\Cloud\V2\Model\XapiAgentGroup
     */
    public function getTeam()
    {
        return $this->container['team'];
    }

    /**
     * Sets team
     *
     * @param \RusticiSoftware\Cloud\V2\Model\XapiAgentGroup $team team
     *
     * @return $this
     */
    public function setTeam($team)
    {
        $this->container['team'] = $team;

        return $this;
    }

    /**
     * Gets context_activities
     *
     * @return \RusticiSoftware\Cloud\V2\Model\XapiContextActivity
     */
    public function getContextActivities()
    {
        return $this->container['context_activities'];
    }

    /**
     * Sets context_activities
     *
     * @param \RusticiSoftware\Cloud\V2\Model\XapiContextActivity $context_activities context_activities
     *
     * @return $this
     */
    public function setContextActivities($context_activities)
    {
        $this->container['context_activities'] = $context_activities;

        return $this;
    }

    /**
     * Gets revision
     *
     * @return string
     */
    public function getRevision()
    {
        return $this->container['revision'];
    }

    /**
     * Sets revision
     *
     * @param string $revision revision
     *
     * @return $this
     */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;

        return $this;
    }

    /**
     * Gets platform
     *
     * @return string
     */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
     * Sets platform
     *
     * @param string $platform platform
     *
     * @return $this
     */
    public function setPlatform($platform)
    {
        $this->container['platform'] = $platform;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets statement
     *
     * @return \RusticiSoftware\Cloud\V2\Model\XapiStatementReference
     */
    public function getStatement()
    {
        return $this->container['statement'];
    }

    /**
     * Sets statement
     *
     * @param \RusticiSoftware\Cloud\V2\Model\XapiStatementReference $statement statement
     *
     * @return $this
     */
    public function setStatement($statement)
    {
        $this->container['statement'] = $statement;

        return $this;
    }

    /**
     * Gets extensions
     *
     * @return map[string,object]
     */
    public function getExtensions()
    {
        return $this->container['extensions'];
    }

    /**
     * Sets extensions
     *
     * @param map[string,object] $extensions extensions
     *
     * @return $this
     */
    public function setExtensions($extensions)
    {
        $this->container['extensions'] = $extensions;

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


