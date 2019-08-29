<?php
/**
 * PolyLine
 *
 * PHP version 5
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
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;

/**
 * PolyLine Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PolyLine implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'polyLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'x1' => 'string',
        'x2' => 'string',
        'y1' => 'string',
        'y2' => 'string'
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
        'x1' => 'x1',
        'x2' => 'x2',
        'y1' => 'y1',
        'y2' => 'y2'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'x1' => 'setX1',
        'x2' => 'setX2',
        'y1' => 'setY1',
        'y2' => 'setY2'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'x1' => 'getX1',
        'x2' => 'getX2',
        'y1' => 'getY1',
        'y2' => 'getY2'
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
        $this->container['x1'] = isset($data['x1']) ? $data['x1'] : null;
        $this->container['x2'] = isset($data['x2']) ? $data['x2'] : null;
        $this->container['y1'] = isset($data['y1']) ? $data['y1'] : null;
        $this->container['y2'] = isset($data['y2']) ? $data['y2'] : null;
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
     * Gets x1
     * @return string
     */
    public function getX1()
    {
        return $this->container['x1'];
    }

    /**
     * Sets x1
     * @param string $x1 
     * @return $this
     */
    public function setX1($x1)
    {
        $this->container['x1'] = $x1;

        return $this;
    }

    /**
     * Gets x2
     * @return string
     */
    public function getX2()
    {
        return $this->container['x2'];
    }

    /**
     * Sets x2
     * @param string $x2 
     * @return $this
     */
    public function setX2($x2)
    {
        $this->container['x2'] = $x2;

        return $this;
    }

    /**
     * Gets y1
     * @return string
     */
    public function getY1()
    {
        return $this->container['y1'];
    }

    /**
     * Sets y1
     * @param string $y1 
     * @return $this
     */
    public function setY1($y1)
    {
        $this->container['y1'] = $y1;

        return $this;
    }

    /**
     * Gets y2
     * @return string
     */
    public function getY2()
    {
        return $this->container['y2'];
    }

    /**
     * Sets y2
     * @param string $y2 
     * @return $this
     */
    public function setY2($y2)
    {
        $this->container['y2'] = $y2;

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
            return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this));
    }
}


