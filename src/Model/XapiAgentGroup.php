<?php
/**
 * XapiAgentGroup
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
 * XapiAgentGroup Class Doc Comment
 *
 * @category Class
 * @description YAML 2.0 does not support oneOf so this is used when object can be an Agent or a Group.
 * @package  RusticiSoftware\Cloud\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class XapiAgentGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'XapiAgentGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'object_type' => 'string',
        'name' => 'string',
        'mbox' => 'string',
        'mbox_sha1sum' => 'string',
        'openid' => 'string',
        'account' => '\RusticiSoftware\Cloud\V2\Model\XapiAccount',
        'member' => '\RusticiSoftware\Cloud\V2\Model\XapiAgentGroup[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'object_type' => null,
        'name' => null,
        'mbox' => null,
        'mbox_sha1sum' => null,
        'openid' => null,
        'account' => null,
        'member' => null
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
        'object_type' => 'objectType',
        'name' => 'name',
        'mbox' => 'mbox',
        'mbox_sha1sum' => 'mbox_sha1sum',
        'openid' => 'openid',
        'account' => 'account',
        'member' => 'member'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'object_type' => 'setObjectType',
        'name' => 'setName',
        'mbox' => 'setMbox',
        'mbox_sha1sum' => 'setMboxSha1sum',
        'openid' => 'setOpenid',
        'account' => 'setAccount',
        'member' => 'setMember'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'object_type' => 'getObjectType',
        'name' => 'getName',
        'mbox' => 'getMbox',
        'mbox_sha1sum' => 'getMboxSha1sum',
        'openid' => 'getOpenid',
        'account' => 'getAccount',
        'member' => 'getMember'
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

    const OBJECT_TYPE_AGENT = 'Agent';
    const OBJECT_TYPE_GROUP = 'Group';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getObjectTypeAllowableValues()
    {
        return [
            self::OBJECT_TYPE_AGENT,
            self::OBJECT_TYPE_GROUP,
        ];
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
        $this->container['object_type'] = isset($data['object_type']) ? $data['object_type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['mbox'] = isset($data['mbox']) ? $data['mbox'] : null;
        $this->container['mbox_sha1sum'] = isset($data['mbox_sha1sum']) ? $data['mbox_sha1sum'] : null;
        $this->container['openid'] = isset($data['openid']) ? $data['openid'] : null;
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['member'] = isset($data['member']) ? $data['member'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['object_type'] === null) {
            $invalidProperties[] = "'object_type' can't be null";
        }
        $allowedValues = $this->getObjectTypeAllowableValues();
        if (!is_null($this->container['object_type']) && !in_array($this->container['object_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'object_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets object_type
     *
     * @return string
     */
    public function getObjectType()
    {
        return $this->container['object_type'];
    }

    /**
     * Sets object_type
     *
     * @param string $object_type object_type
     *
     * @return $this
     */
    public function setObjectType($object_type)
    {
        $allowedValues = $this->getObjectTypeAllowableValues();
        if (!in_array($object_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'object_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['object_type'] = $object_type;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets mbox
     *
     * @return string
     */
    public function getMbox()
    {
        return $this->container['mbox'];
    }

    /**
     * Sets mbox
     *
     * @param string $mbox mbox
     *
     * @return $this
     */
    public function setMbox($mbox)
    {
        $this->container['mbox'] = $mbox;

        return $this;
    }

    /**
     * Gets mbox_sha1sum
     *
     * @return string
     */
    public function getMboxSha1sum()
    {
        return $this->container['mbox_sha1sum'];
    }

    /**
     * Sets mbox_sha1sum
     *
     * @param string $mbox_sha1sum mbox_sha1sum
     *
     * @return $this
     */
    public function setMboxSha1sum($mbox_sha1sum)
    {
        $this->container['mbox_sha1sum'] = $mbox_sha1sum;

        return $this;
    }

    /**
     * Gets openid
     *
     * @return string
     */
    public function getOpenid()
    {
        return $this->container['openid'];
    }

    /**
     * Sets openid
     *
     * @param string $openid openid
     *
     * @return $this
     */
    public function setOpenid($openid)
    {
        $this->container['openid'] = $openid;

        return $this;
    }

    /**
     * Gets account
     *
     * @return \RusticiSoftware\Cloud\V2\Model\XapiAccount
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param \RusticiSoftware\Cloud\V2\Model\XapiAccount $account account
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets member
     *
     * @return \RusticiSoftware\Cloud\V2\Model\XapiAgentGroup[]
     */
    public function getMember()
    {
        return $this->container['member'];
    }

    /**
     * Sets member
     *
     * @param \RusticiSoftware\Cloud\V2\Model\XapiAgentGroup[] $member member
     *
     * @return $this
     */
    public function setMember($member)
    {
        $this->container['member'] = $member;

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


