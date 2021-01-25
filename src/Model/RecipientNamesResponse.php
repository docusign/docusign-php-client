<?php
/**
 * RecipientNamesResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;
use DocuSign\eSign\ObjectSerializer;

/**
 * RecipientNamesResponse Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RecipientNamesResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'recipientNamesResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'multiple_users' => 'string',
        'recipient_names' => 'string[]',
        'reserved_recipient_email' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'multiple_users' => null,
        'recipient_names' => null,
        'reserved_recipient_email' => null
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
        'multiple_users' => 'multipleUsers',
        'recipient_names' => 'recipientNames',
        'reserved_recipient_email' => 'reservedRecipientEmail'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'multiple_users' => 'setMultipleUsers',
        'recipient_names' => 'setRecipientNames',
        'reserved_recipient_email' => 'setReservedRecipientEmail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'multiple_users' => 'getMultipleUsers',
        'recipient_names' => 'getRecipientNames',
        'reserved_recipient_email' => 'getReservedRecipientEmail'
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
        $this->container['multiple_users'] = isset($data['multiple_users']) ? $data['multiple_users'] : null;
        $this->container['recipient_names'] = isset($data['recipient_names']) ? $data['recipient_names'] : null;
        $this->container['reserved_recipient_email'] = isset($data['reserved_recipient_email']) ? $data['reserved_recipient_email'] : null;
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
     * Gets multiple_users
     *
     * @return string
     */
    public function getMultipleUsers()
    {
        return $this->container['multiple_users'];
    }

    /**
     * Sets multiple_users
     *
     * @param string $multiple_users Indicates whether email address is used by more than one user.
     *
     * @return $this
     */
    public function setMultipleUsers($multiple_users)
    {
        $this->container['multiple_users'] = $multiple_users;

        return $this;
    }

    /**
     * Gets recipient_names
     *
     * @return string[]
     */
    public function getRecipientNames()
    {
        return $this->container['recipient_names'];
    }

    /**
     * Sets recipient_names
     *
     * @param string[] $recipient_names 
     *
     * @return $this
     */
    public function setRecipientNames($recipient_names)
    {
        $this->container['recipient_names'] = $recipient_names;

        return $this;
    }

    /**
     * Gets reserved_recipient_email
     *
     * @return string
     */
    public function getReservedRecipientEmail()
    {
        return $this->container['reserved_recipient_email'];
    }

    /**
     * Sets reserved_recipient_email
     *
     * @param string $reserved_recipient_email 
     *
     * @return $this
     */
    public function setReservedRecipientEmail($reserved_recipient_email)
    {
        $this->container['reserved_recipient_email'] = $reserved_recipient_email;

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

