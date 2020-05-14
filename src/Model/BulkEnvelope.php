<?php
/**
 * BulkEnvelope
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
 * OpenAPI spec version: v2
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
use \DocuSign\eSign\ObjectSerializer;

/**
 * BulkEnvelope Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BulkEnvelope implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'bulkEnvelope';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bulk_recipient_row' => 'string',
        'bulk_status' => 'string',
        'email' => 'string',
        'envelope_id' => 'string',
        'envelope_uri' => 'string',
        'error_details' => '\DocuSign\eSign\Model\ErrorDetails',
        'name' => 'string',
        'submitted_date_time' => 'string',
        'transaction_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bulk_recipient_row' => null,
        'bulk_status' => null,
        'email' => null,
        'envelope_id' => null,
        'envelope_uri' => null,
        'error_details' => null,
        'name' => null,
        'submitted_date_time' => null,
        'transaction_id' => null
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
        'bulk_recipient_row' => 'bulkRecipientRow',
        'bulk_status' => 'bulkStatus',
        'email' => 'email',
        'envelope_id' => 'envelopeId',
        'envelope_uri' => 'envelopeUri',
        'error_details' => 'errorDetails',
        'name' => 'name',
        'submitted_date_time' => 'submittedDateTime',
        'transaction_id' => 'transactionId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bulk_recipient_row' => 'setBulkRecipientRow',
        'bulk_status' => 'setBulkStatus',
        'email' => 'setEmail',
        'envelope_id' => 'setEnvelopeId',
        'envelope_uri' => 'setEnvelopeUri',
        'error_details' => 'setErrorDetails',
        'name' => 'setName',
        'submitted_date_time' => 'setSubmittedDateTime',
        'transaction_id' => 'setTransactionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bulk_recipient_row' => 'getBulkRecipientRow',
        'bulk_status' => 'getBulkStatus',
        'email' => 'getEmail',
        'envelope_id' => 'getEnvelopeId',
        'envelope_uri' => 'getEnvelopeUri',
        'error_details' => 'getErrorDetails',
        'name' => 'getName',
        'submitted_date_time' => 'getSubmittedDateTime',
        'transaction_id' => 'getTransactionId'
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
        $this->container['bulk_recipient_row'] = isset($data['bulk_recipient_row']) ? $data['bulk_recipient_row'] : null;
        $this->container['bulk_status'] = isset($data['bulk_status']) ? $data['bulk_status'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['envelope_id'] = isset($data['envelope_id']) ? $data['envelope_id'] : null;
        $this->container['envelope_uri'] = isset($data['envelope_uri']) ? $data['envelope_uri'] : null;
        $this->container['error_details'] = isset($data['error_details']) ? $data['error_details'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['submitted_date_time'] = isset($data['submitted_date_time']) ? $data['submitted_date_time'] : null;
        $this->container['transaction_id'] = isset($data['transaction_id']) ? $data['transaction_id'] : null;
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
     * Gets bulk_recipient_row
     *
     * @return string
     */
    public function getBulkRecipientRow()
    {
        return $this->container['bulk_recipient_row'];
    }

    /**
     * Sets bulk_recipient_row
     *
     * @param string $bulk_recipient_row Reserved: TBD
     *
     * @return $this
     */
    public function setBulkRecipientRow($bulk_recipient_row)
    {
        $this->container['bulk_recipient_row'] = $bulk_recipient_row;

        return $this;
    }

    /**
     * Gets bulk_status
     *
     * @return string
     */
    public function getBulkStatus()
    {
        return $this->container['bulk_status'];
    }

    /**
     * Sets bulk_status
     *
     * @param string $bulk_status Indicates the status of the bulk send operation. Returned values can be: * queued * processing * sent * failed
     *
     * @return $this
     */
    public function setBulkStatus($bulk_status)
    {
        $this->container['bulk_status'] = $bulk_status;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email 
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets envelope_id
     *
     * @return string
     */
    public function getEnvelopeId()
    {
        return $this->container['envelope_id'];
    }

    /**
     * Sets envelope_id
     *
     * @param string $envelope_id The envelope ID of the envelope status that failed to post.
     *
     * @return $this
     */
    public function setEnvelopeId($envelope_id)
    {
        $this->container['envelope_id'] = $envelope_id;

        return $this;
    }

    /**
     * Gets envelope_uri
     *
     * @return string
     */
    public function getEnvelopeUri()
    {
        return $this->container['envelope_uri'];
    }

    /**
     * Sets envelope_uri
     *
     * @param string $envelope_uri Contains a URI for an endpoint that you can use to retrieve the envelope or envelopes.
     *
     * @return $this
     */
    public function setEnvelopeUri($envelope_uri)
    {
        $this->container['envelope_uri'] = $envelope_uri;

        return $this;
    }

    /**
     * Gets error_details
     *
     * @return \DocuSign\eSign\Model\ErrorDetails
     */
    public function getErrorDetails()
    {
        return $this->container['error_details'];
    }

    /**
     * Sets error_details
     *
     * @param \DocuSign\eSign\Model\ErrorDetails $error_details error_details
     *
     * @return $this
     */
    public function setErrorDetails($error_details)
    {
        $this->container['error_details'] = $error_details;

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
     * @param string $name 
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets submitted_date_time
     *
     * @return string
     */
    public function getSubmittedDateTime()
    {
        return $this->container['submitted_date_time'];
    }

    /**
     * Sets submitted_date_time
     *
     * @param string $submitted_date_time 
     *
     * @return $this
     */
    public function setSubmittedDateTime($submitted_date_time)
    {
        $this->container['submitted_date_time'] = $submitted_date_time;

        return $this;
    }

    /**
     * Gets transaction_id
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param string $transaction_id Used to identify an envelope. The id is a sender-generated value and is valid in the DocuSign system for 7 days. It is recommended that a transaction ID is used for offline signing to ensure that an envelope is not sent multiple times. The `transactionId` property can be used determine an envelope's status (i.e. was it created or not) in cases where the internet connection was lost before the envelope status was returned.
     *
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

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

