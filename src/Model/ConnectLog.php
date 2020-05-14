<?php
/**
 * ConnectLog
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
 * ConnectLog Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ConnectLog implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'connectLog';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_id' => 'string',
        'config_url' => 'string',
        'connect_debug_log' => '\DocuSign\eSign\Model\ConnectDebugLog[]',
        'connect_id' => 'string',
        'created' => 'string',
        'email' => 'string',
        'envelope_id' => 'string',
        'error' => 'string',
        'failure_id' => 'string',
        'failure_uri' => 'string',
        'last_try' => 'string',
        'log_id' => 'string',
        'log_uri' => 'string',
        'retry_count' => 'string',
        'retry_uri' => 'string',
        'status' => 'string',
        'subject' => 'string',
        'user_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_id' => null,
        'config_url' => null,
        'connect_debug_log' => null,
        'connect_id' => null,
        'created' => null,
        'email' => null,
        'envelope_id' => null,
        'error' => null,
        'failure_id' => null,
        'failure_uri' => null,
        'last_try' => null,
        'log_id' => null,
        'log_uri' => null,
        'retry_count' => null,
        'retry_uri' => null,
        'status' => null,
        'subject' => null,
        'user_name' => null
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
        'account_id' => 'accountId',
        'config_url' => 'configUrl',
        'connect_debug_log' => 'connectDebugLog',
        'connect_id' => 'connectId',
        'created' => 'created',
        'email' => 'email',
        'envelope_id' => 'envelopeId',
        'error' => 'error',
        'failure_id' => 'failureId',
        'failure_uri' => 'failureUri',
        'last_try' => 'lastTry',
        'log_id' => 'logId',
        'log_uri' => 'logUri',
        'retry_count' => 'retryCount',
        'retry_uri' => 'retryUri',
        'status' => 'status',
        'subject' => 'subject',
        'user_name' => 'userName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'config_url' => 'setConfigUrl',
        'connect_debug_log' => 'setConnectDebugLog',
        'connect_id' => 'setConnectId',
        'created' => 'setCreated',
        'email' => 'setEmail',
        'envelope_id' => 'setEnvelopeId',
        'error' => 'setError',
        'failure_id' => 'setFailureId',
        'failure_uri' => 'setFailureUri',
        'last_try' => 'setLastTry',
        'log_id' => 'setLogId',
        'log_uri' => 'setLogUri',
        'retry_count' => 'setRetryCount',
        'retry_uri' => 'setRetryUri',
        'status' => 'setStatus',
        'subject' => 'setSubject',
        'user_name' => 'setUserName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'config_url' => 'getConfigUrl',
        'connect_debug_log' => 'getConnectDebugLog',
        'connect_id' => 'getConnectId',
        'created' => 'getCreated',
        'email' => 'getEmail',
        'envelope_id' => 'getEnvelopeId',
        'error' => 'getError',
        'failure_id' => 'getFailureId',
        'failure_uri' => 'getFailureUri',
        'last_try' => 'getLastTry',
        'log_id' => 'getLogId',
        'log_uri' => 'getLogUri',
        'retry_count' => 'getRetryCount',
        'retry_uri' => 'getRetryUri',
        'status' => 'getStatus',
        'subject' => 'getSubject',
        'user_name' => 'getUserName'
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['config_url'] = isset($data['config_url']) ? $data['config_url'] : null;
        $this->container['connect_debug_log'] = isset($data['connect_debug_log']) ? $data['connect_debug_log'] : null;
        $this->container['connect_id'] = isset($data['connect_id']) ? $data['connect_id'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['envelope_id'] = isset($data['envelope_id']) ? $data['envelope_id'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['failure_id'] = isset($data['failure_id']) ? $data['failure_id'] : null;
        $this->container['failure_uri'] = isset($data['failure_uri']) ? $data['failure_uri'] : null;
        $this->container['last_try'] = isset($data['last_try']) ? $data['last_try'] : null;
        $this->container['log_id'] = isset($data['log_id']) ? $data['log_id'] : null;
        $this->container['log_uri'] = isset($data['log_uri']) ? $data['log_uri'] : null;
        $this->container['retry_count'] = isset($data['retry_count']) ? $data['retry_count'] : null;
        $this->container['retry_uri'] = isset($data['retry_uri']) ? $data['retry_uri'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['user_name'] = isset($data['user_name']) ? $data['user_name'] : null;
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
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id The account ID associated with the envelope.
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets config_url
     *
     * @return string
     */
    public function getConfigUrl()
    {
        return $this->container['config_url'];
    }

    /**
     * Sets config_url
     *
     * @param string $config_url The web address of the listener or Retrieving Service end point for Connect.
     *
     * @return $this
     */
    public function setConfigUrl($config_url)
    {
        $this->container['config_url'] = $config_url;

        return $this;
    }

    /**
     * Gets connect_debug_log
     *
     * @return \DocuSign\eSign\Model\ConnectDebugLog[]
     */
    public function getConnectDebugLog()
    {
        return $this->container['connect_debug_log'];
    }

    /**
     * Sets connect_debug_log
     *
     * @param \DocuSign\eSign\Model\ConnectDebugLog[] $connect_debug_log A complex element containing information about the Connect configuration, error details, date/time, description and payload.  This is only included in the response if the query additional_info=true is used.
     *
     * @return $this
     */
    public function setConnectDebugLog($connect_debug_log)
    {
        $this->container['connect_debug_log'] = $connect_debug_log;

        return $this;
    }

    /**
     * Gets connect_id
     *
     * @return string
     */
    public function getConnectId()
    {
        return $this->container['connect_id'];
    }

    /**
     * Sets connect_id
     *
     * @param string $connect_id The identifier for the Connect configuration that failed. If an account has multiple Connect configurations, this value is used to look up the Connect configuration for the failed post.
     *
     * @return $this
     */
    public function setConnectId($connect_id)
    {
        $this->container['connect_id'] = $connect_id;

        return $this;
    }

    /**
     * Gets created
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param string $created The date and time the entry was created.
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

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
     * @param string $email The email that sent the envelope.
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
     * Gets error
     *
     * @return string
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param string $error The error that caused the Connect post to fail.
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets failure_id
     *
     * @return string
     */
    public function getFailureId()
    {
        return $this->container['failure_id'];
    }

    /**
     * Sets failure_id
     *
     * @param string $failure_id The failure log ID for the failure.
     *
     * @return $this
     */
    public function setFailureId($failure_id)
    {
        $this->container['failure_id'] = $failure_id;

        return $this;
    }

    /**
     * Gets failure_uri
     *
     * @return string
     */
    public function getFailureUri()
    {
        return $this->container['failure_uri'];
    }

    /**
     * Sets failure_uri
     *
     * @param string $failure_uri The URI for the failure.
     *
     * @return $this
     */
    public function setFailureUri($failure_uri)
    {
        $this->container['failure_uri'] = $failure_uri;

        return $this;
    }

    /**
     * Gets last_try
     *
     * @return string
     */
    public function getLastTry()
    {
        return $this->container['last_try'];
    }

    /**
     * Sets last_try
     *
     * @param string $last_try The date and time the last attempt to post.
     *
     * @return $this
     */
    public function setLastTry($last_try)
    {
        $this->container['last_try'] = $last_try;

        return $this;
    }

    /**
     * Gets log_id
     *
     * @return string
     */
    public function getLogId()
    {
        return $this->container['log_id'];
    }

    /**
     * Sets log_id
     *
     * @param string $log_id The Connect log ID for the entry.
     *
     * @return $this
     */
    public function setLogId($log_id)
    {
        $this->container['log_id'] = $log_id;

        return $this;
    }

    /**
     * Gets log_uri
     *
     * @return string
     */
    public function getLogUri()
    {
        return $this->container['log_uri'];
    }

    /**
     * Sets log_uri
     *
     * @param string $log_uri The URI for the log item.
     *
     * @return $this
     */
    public function setLogUri($log_uri)
    {
        $this->container['log_uri'] = $log_uri;

        return $this;
    }

    /**
     * Gets retry_count
     *
     * @return string
     */
    public function getRetryCount()
    {
        return $this->container['retry_count'];
    }

    /**
     * Sets retry_count
     *
     * @param string $retry_count The number of times the Connect post has been retried.
     *
     * @return $this
     */
    public function setRetryCount($retry_count)
    {
        $this->container['retry_count'] = $retry_count;

        return $this;
    }

    /**
     * Gets retry_uri
     *
     * @return string
     */
    public function getRetryUri()
    {
        return $this->container['retry_uri'];
    }

    /**
     * Sets retry_uri
     *
     * @param string $retry_uri The UEI to retry to publish the Connect failure.
     *
     * @return $this
     */
    public function setRetryUri($retry_uri)
    {
        $this->container['retry_uri'] = $retry_uri;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The new envelope status for the failed Connect post. The possible values are: Any, Voided, Created, Deleted, Sent, Delivered, Signed, Completed, Declined, TimedOut, Template, or Processing.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject The envelope subject.
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets user_name
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     *
     * @param string $user_name The name of the envelope sender.
     *
     * @return $this
     */
    public function setUserName($user_name)
    {
        $this->container['user_name'] = $user_name;

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

