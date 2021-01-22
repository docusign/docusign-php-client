<?php
/**
 * PowerForm
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
use DocuSign\eSign\ObjectSerializer;

/**
 * PowerForm Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PowerForm implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'powerForm';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created_by' => 'string',
        'created_date_time' => 'string',
        'email_body' => 'string',
        'email_subject' => 'string',
        'envelopes' => '\DocuSign\eSign\Model\Envelope[]',
        'error_details' => '\DocuSign\eSign\Model\ErrorDetails',
        'instructions' => 'string',
        'is_active' => 'string',
        'last_used' => 'string',
        'limit_use_interval' => 'string',
        'limit_use_interval_enabled' => 'string',
        'limit_use_interval_units' => 'string',
        'max_use_enabled' => 'string',
        'name' => 'string',
        'power_form_id' => 'string',
        'power_form_url' => 'string',
        'recipients' => '\DocuSign\eSign\Model\PowerFormRecipient[]',
        'sender_name' => 'string',
        'sender_user_id' => 'string',
        'signing_mode' => 'string',
        'template_id' => 'string',
        'template_name' => 'string',
        'times_used' => 'string',
        'uri' => 'string',
        'uses_remaining' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created_by' => null,
        'created_date_time' => null,
        'email_body' => null,
        'email_subject' => null,
        'envelopes' => null,
        'error_details' => null,
        'instructions' => null,
        'is_active' => null,
        'last_used' => null,
        'limit_use_interval' => null,
        'limit_use_interval_enabled' => null,
        'limit_use_interval_units' => null,
        'max_use_enabled' => null,
        'name' => null,
        'power_form_id' => null,
        'power_form_url' => null,
        'recipients' => null,
        'sender_name' => null,
        'sender_user_id' => null,
        'signing_mode' => null,
        'template_id' => null,
        'template_name' => null,
        'times_used' => null,
        'uri' => null,
        'uses_remaining' => null
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
        'created_by' => 'createdBy',
        'created_date_time' => 'createdDateTime',
        'email_body' => 'emailBody',
        'email_subject' => 'emailSubject',
        'envelopes' => 'envelopes',
        'error_details' => 'errorDetails',
        'instructions' => 'instructions',
        'is_active' => 'isActive',
        'last_used' => 'lastUsed',
        'limit_use_interval' => 'limitUseInterval',
        'limit_use_interval_enabled' => 'limitUseIntervalEnabled',
        'limit_use_interval_units' => 'limitUseIntervalUnits',
        'max_use_enabled' => 'maxUseEnabled',
        'name' => 'name',
        'power_form_id' => 'powerFormId',
        'power_form_url' => 'powerFormUrl',
        'recipients' => 'recipients',
        'sender_name' => 'senderName',
        'sender_user_id' => 'senderUserId',
        'signing_mode' => 'signingMode',
        'template_id' => 'templateId',
        'template_name' => 'templateName',
        'times_used' => 'timesUsed',
        'uri' => 'uri',
        'uses_remaining' => 'usesRemaining'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_by' => 'setCreatedBy',
        'created_date_time' => 'setCreatedDateTime',
        'email_body' => 'setEmailBody',
        'email_subject' => 'setEmailSubject',
        'envelopes' => 'setEnvelopes',
        'error_details' => 'setErrorDetails',
        'instructions' => 'setInstructions',
        'is_active' => 'setIsActive',
        'last_used' => 'setLastUsed',
        'limit_use_interval' => 'setLimitUseInterval',
        'limit_use_interval_enabled' => 'setLimitUseIntervalEnabled',
        'limit_use_interval_units' => 'setLimitUseIntervalUnits',
        'max_use_enabled' => 'setMaxUseEnabled',
        'name' => 'setName',
        'power_form_id' => 'setPowerFormId',
        'power_form_url' => 'setPowerFormUrl',
        'recipients' => 'setRecipients',
        'sender_name' => 'setSenderName',
        'sender_user_id' => 'setSenderUserId',
        'signing_mode' => 'setSigningMode',
        'template_id' => 'setTemplateId',
        'template_name' => 'setTemplateName',
        'times_used' => 'setTimesUsed',
        'uri' => 'setUri',
        'uses_remaining' => 'setUsesRemaining'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_by' => 'getCreatedBy',
        'created_date_time' => 'getCreatedDateTime',
        'email_body' => 'getEmailBody',
        'email_subject' => 'getEmailSubject',
        'envelopes' => 'getEnvelopes',
        'error_details' => 'getErrorDetails',
        'instructions' => 'getInstructions',
        'is_active' => 'getIsActive',
        'last_used' => 'getLastUsed',
        'limit_use_interval' => 'getLimitUseInterval',
        'limit_use_interval_enabled' => 'getLimitUseIntervalEnabled',
        'limit_use_interval_units' => 'getLimitUseIntervalUnits',
        'max_use_enabled' => 'getMaxUseEnabled',
        'name' => 'getName',
        'power_form_id' => 'getPowerFormId',
        'power_form_url' => 'getPowerFormUrl',
        'recipients' => 'getRecipients',
        'sender_name' => 'getSenderName',
        'sender_user_id' => 'getSenderUserId',
        'signing_mode' => 'getSigningMode',
        'template_id' => 'getTemplateId',
        'template_name' => 'getTemplateName',
        'times_used' => 'getTimesUsed',
        'uri' => 'getUri',
        'uses_remaining' => 'getUsesRemaining'
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
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        $this->container['created_date_time'] = isset($data['created_date_time']) ? $data['created_date_time'] : null;
        $this->container['email_body'] = isset($data['email_body']) ? $data['email_body'] : null;
        $this->container['email_subject'] = isset($data['email_subject']) ? $data['email_subject'] : null;
        $this->container['envelopes'] = isset($data['envelopes']) ? $data['envelopes'] : null;
        $this->container['error_details'] = isset($data['error_details']) ? $data['error_details'] : null;
        $this->container['instructions'] = isset($data['instructions']) ? $data['instructions'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['last_used'] = isset($data['last_used']) ? $data['last_used'] : null;
        $this->container['limit_use_interval'] = isset($data['limit_use_interval']) ? $data['limit_use_interval'] : null;
        $this->container['limit_use_interval_enabled'] = isset($data['limit_use_interval_enabled']) ? $data['limit_use_interval_enabled'] : null;
        $this->container['limit_use_interval_units'] = isset($data['limit_use_interval_units']) ? $data['limit_use_interval_units'] : null;
        $this->container['max_use_enabled'] = isset($data['max_use_enabled']) ? $data['max_use_enabled'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['power_form_id'] = isset($data['power_form_id']) ? $data['power_form_id'] : null;
        $this->container['power_form_url'] = isset($data['power_form_url']) ? $data['power_form_url'] : null;
        $this->container['recipients'] = isset($data['recipients']) ? $data['recipients'] : null;
        $this->container['sender_name'] = isset($data['sender_name']) ? $data['sender_name'] : null;
        $this->container['sender_user_id'] = isset($data['sender_user_id']) ? $data['sender_user_id'] : null;
        $this->container['signing_mode'] = isset($data['signing_mode']) ? $data['signing_mode'] : null;
        $this->container['template_id'] = isset($data['template_id']) ? $data['template_id'] : null;
        $this->container['template_name'] = isset($data['template_name']) ? $data['template_name'] : null;
        $this->container['times_used'] = isset($data['times_used']) ? $data['times_used'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['uses_remaining'] = isset($data['uses_remaining']) ? $data['uses_remaining'] : null;
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
     * Gets created_by
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param string $created_by 
     *
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets created_date_time
     *
     * @return string
     */
    public function getCreatedDateTime()
    {
        return $this->container['created_date_time'];
    }

    /**
     * Sets created_date_time
     *
     * @param string $created_date_time Indicates the date and time the item was created.
     *
     * @return $this
     */
    public function setCreatedDateTime($created_date_time)
    {
        $this->container['created_date_time'] = $created_date_time;

        return $this;
    }

    /**
     * Gets email_body
     *
     * @return string
     */
    public function getEmailBody()
    {
        return $this->container['email_body'];
    }

    /**
     * Sets email_body
     *
     * @param string $email_body Specifies the email body of the message sent to the recipient.   Maximum length: 10000 characters.
     *
     * @return $this
     */
    public function setEmailBody($email_body)
    {
        $this->container['email_body'] = $email_body;

        return $this;
    }

    /**
     * Gets email_subject
     *
     * @return string
     */
    public function getEmailSubject()
    {
        return $this->container['email_subject'];
    }

    /**
     * Sets email_subject
     *
     * @param string $email_subject Specifies the subject of the email that is sent to all recipients.  See [ML:Template Email Subject Merge Fields] for information about adding merge field information to the email subject.
     *
     * @return $this
     */
    public function setEmailSubject($email_subject)
    {
        $this->container['email_subject'] = $email_subject;

        return $this;
    }

    /**
     * Gets envelopes
     *
     * @return \DocuSign\eSign\Model\Envelope[]
     */
    public function getEnvelopes()
    {
        return $this->container['envelopes'];
    }

    /**
     * Sets envelopes
     *
     * @param \DocuSign\eSign\Model\Envelope[] $envelopes 
     *
     * @return $this
     */
    public function setEnvelopes($envelopes)
    {
        $this->container['envelopes'] = $envelopes;

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
     * Gets instructions
     *
     * @return string
     */
    public function getInstructions()
    {
        return $this->container['instructions'];
    }

    /**
     * Sets instructions
     *
     * @param string $instructions 
     *
     * @return $this
     */
    public function setInstructions($instructions)
    {
        $this->container['instructions'] = $instructions;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return string
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param string $is_active 
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets last_used
     *
     * @return string
     */
    public function getLastUsed()
    {
        return $this->container['last_used'];
    }

    /**
     * Sets last_used
     *
     * @param string $last_used 
     *
     * @return $this
     */
    public function setLastUsed($last_used)
    {
        $this->container['last_used'] = $last_used;

        return $this;
    }

    /**
     * Gets limit_use_interval
     *
     * @return string
     */
    public function getLimitUseInterval()
    {
        return $this->container['limit_use_interval'];
    }

    /**
     * Sets limit_use_interval
     *
     * @param string $limit_use_interval 
     *
     * @return $this
     */
    public function setLimitUseInterval($limit_use_interval)
    {
        $this->container['limit_use_interval'] = $limit_use_interval;

        return $this;
    }

    /**
     * Gets limit_use_interval_enabled
     *
     * @return string
     */
    public function getLimitUseIntervalEnabled()
    {
        return $this->container['limit_use_interval_enabled'];
    }

    /**
     * Sets limit_use_interval_enabled
     *
     * @param string $limit_use_interval_enabled 
     *
     * @return $this
     */
    public function setLimitUseIntervalEnabled($limit_use_interval_enabled)
    {
        $this->container['limit_use_interval_enabled'] = $limit_use_interval_enabled;

        return $this;
    }

    /**
     * Gets limit_use_interval_units
     *
     * @return string
     */
    public function getLimitUseIntervalUnits()
    {
        return $this->container['limit_use_interval_units'];
    }

    /**
     * Sets limit_use_interval_units
     *
     * @param string $limit_use_interval_units 
     *
     * @return $this
     */
    public function setLimitUseIntervalUnits($limit_use_interval_units)
    {
        $this->container['limit_use_interval_units'] = $limit_use_interval_units;

        return $this;
    }

    /**
     * Gets max_use_enabled
     *
     * @return string
     */
    public function getMaxUseEnabled()
    {
        return $this->container['max_use_enabled'];
    }

    /**
     * Sets max_use_enabled
     *
     * @param string $max_use_enabled 
     *
     * @return $this
     */
    public function setMaxUseEnabled($max_use_enabled)
    {
        $this->container['max_use_enabled'] = $max_use_enabled;

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
     * Gets power_form_id
     *
     * @return string
     */
    public function getPowerFormId()
    {
        return $this->container['power_form_id'];
    }

    /**
     * Sets power_form_id
     *
     * @param string $power_form_id 
     *
     * @return $this
     */
    public function setPowerFormId($power_form_id)
    {
        $this->container['power_form_id'] = $power_form_id;

        return $this;
    }

    /**
     * Gets power_form_url
     *
     * @return string
     */
    public function getPowerFormUrl()
    {
        return $this->container['power_form_url'];
    }

    /**
     * Sets power_form_url
     *
     * @param string $power_form_url 
     *
     * @return $this
     */
    public function setPowerFormUrl($power_form_url)
    {
        $this->container['power_form_url'] = $power_form_url;

        return $this;
    }

    /**
     * Gets recipients
     *
     * @return \DocuSign\eSign\Model\PowerFormRecipient[]
     */
    public function getRecipients()
    {
        return $this->container['recipients'];
    }

    /**
     * Sets recipients
     *
     * @param \DocuSign\eSign\Model\PowerFormRecipient[] $recipients An array of powerform recipients.
     *
     * @return $this
     */
    public function setRecipients($recipients)
    {
        $this->container['recipients'] = $recipients;

        return $this;
    }

    /**
     * Gets sender_name
     *
     * @return string
     */
    public function getSenderName()
    {
        return $this->container['sender_name'];
    }

    /**
     * Sets sender_name
     *
     * @param string $sender_name 
     *
     * @return $this
     */
    public function setSenderName($sender_name)
    {
        $this->container['sender_name'] = $sender_name;

        return $this;
    }

    /**
     * Gets sender_user_id
     *
     * @return string
     */
    public function getSenderUserId()
    {
        return $this->container['sender_user_id'];
    }

    /**
     * Sets sender_user_id
     *
     * @param string $sender_user_id 
     *
     * @return $this
     */
    public function setSenderUserId($sender_user_id)
    {
        $this->container['sender_user_id'] = $sender_user_id;

        return $this;
    }

    /**
     * Gets signing_mode
     *
     * @return string
     */
    public function getSigningMode()
    {
        return $this->container['signing_mode'];
    }

    /**
     * Sets signing_mode
     *
     * @param string $signing_mode 
     *
     * @return $this
     */
    public function setSigningMode($signing_mode)
    {
        $this->container['signing_mode'] = $signing_mode;

        return $this;
    }

    /**
     * Gets template_id
     *
     * @return string
     */
    public function getTemplateId()
    {
        return $this->container['template_id'];
    }

    /**
     * Sets template_id
     *
     * @param string $template_id The unique identifier of the template. If this is not provided, DocuSign will generate a value.
     *
     * @return $this
     */
    public function setTemplateId($template_id)
    {
        $this->container['template_id'] = $template_id;

        return $this;
    }

    /**
     * Gets template_name
     *
     * @return string
     */
    public function getTemplateName()
    {
        return $this->container['template_name'];
    }

    /**
     * Sets template_name
     *
     * @param string $template_name 
     *
     * @return $this
     */
    public function setTemplateName($template_name)
    {
        $this->container['template_name'] = $template_name;

        return $this;
    }

    /**
     * Gets times_used
     *
     * @return string
     */
    public function getTimesUsed()
    {
        return $this->container['times_used'];
    }

    /**
     * Sets times_used
     *
     * @param string $times_used 
     *
     * @return $this
     */
    public function setTimesUsed($times_used)
    {
        $this->container['times_used'] = $times_used;

        return $this;
    }

    /**
     * Gets uri
     *
     * @return string
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param string $uri 
     *
     * @return $this
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

        return $this;
    }

    /**
     * Gets uses_remaining
     *
     * @return string
     */
    public function getUsesRemaining()
    {
        return $this->container['uses_remaining'];
    }

    /**
     * Sets uses_remaining
     *
     * @param string $uses_remaining 
     *
     * @return $this
     */
    public function setUsesRemaining($uses_remaining)
    {
        $this->container['uses_remaining'] = $uses_remaining;

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

