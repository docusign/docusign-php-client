<?php
/**
 * ConnectCustomConfiguration
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
 * ConnectCustomConfiguration Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ConnectCustomConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'connectCustomConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allow_envelope_publish' => 'string',
        'all_users' => 'string',
        'configuration_type' => 'string',
        'connect_id' => 'string',
        'enable_log' => 'string',
        'envelope_events' => 'string',
        'include_certificate_of_completion' => 'string',
        'include_cert_soap_header' => 'string',
        'include_document_fields' => 'string',
        'include_documents' => 'string',
        'include_envelope_void_reason' => 'string',
        'include_hmac' => 'string',
        'include_sender_accountas_custom_field' => 'string',
        'include_time_zone_information' => 'string',
        'name' => 'string',
        'recipient_events' => 'string',
        'requires_acknowledgement' => 'string',
        'sign_message_with_x509_certificate' => 'string',
        'soap_namespace' => 'string',
        'url_to_publish_to' => 'string',
        'user_ids' => 'string',
        'use_soap_interface' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allow_envelope_publish' => null,
        'all_users' => null,
        'configuration_type' => null,
        'connect_id' => null,
        'enable_log' => null,
        'envelope_events' => null,
        'include_certificate_of_completion' => null,
        'include_cert_soap_header' => null,
        'include_document_fields' => null,
        'include_documents' => null,
        'include_envelope_void_reason' => null,
        'include_hmac' => null,
        'include_sender_accountas_custom_field' => null,
        'include_time_zone_information' => null,
        'name' => null,
        'recipient_events' => null,
        'requires_acknowledgement' => null,
        'sign_message_with_x509_certificate' => null,
        'soap_namespace' => null,
        'url_to_publish_to' => null,
        'user_ids' => null,
        'use_soap_interface' => null
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
        'allow_envelope_publish' => 'allowEnvelopePublish',
        'all_users' => 'allUsers',
        'configuration_type' => 'configurationType',
        'connect_id' => 'connectId',
        'enable_log' => 'enableLog',
        'envelope_events' => 'envelopeEvents',
        'include_certificate_of_completion' => 'includeCertificateOfCompletion',
        'include_cert_soap_header' => 'includeCertSoapHeader',
        'include_document_fields' => 'includeDocumentFields',
        'include_documents' => 'includeDocuments',
        'include_envelope_void_reason' => 'includeEnvelopeVoidReason',
        'include_hmac' => 'includeHMAC',
        'include_sender_accountas_custom_field' => 'includeSenderAccountasCustomField',
        'include_time_zone_information' => 'includeTimeZoneInformation',
        'name' => 'name',
        'recipient_events' => 'recipientEvents',
        'requires_acknowledgement' => 'requiresAcknowledgement',
        'sign_message_with_x509_certificate' => 'signMessageWithX509Certificate',
        'soap_namespace' => 'soapNamespace',
        'url_to_publish_to' => 'urlToPublishTo',
        'user_ids' => 'userIds',
        'use_soap_interface' => 'useSoapInterface'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_envelope_publish' => 'setAllowEnvelopePublish',
        'all_users' => 'setAllUsers',
        'configuration_type' => 'setConfigurationType',
        'connect_id' => 'setConnectId',
        'enable_log' => 'setEnableLog',
        'envelope_events' => 'setEnvelopeEvents',
        'include_certificate_of_completion' => 'setIncludeCertificateOfCompletion',
        'include_cert_soap_header' => 'setIncludeCertSoapHeader',
        'include_document_fields' => 'setIncludeDocumentFields',
        'include_documents' => 'setIncludeDocuments',
        'include_envelope_void_reason' => 'setIncludeEnvelopeVoidReason',
        'include_hmac' => 'setIncludeHmac',
        'include_sender_accountas_custom_field' => 'setIncludeSenderAccountasCustomField',
        'include_time_zone_information' => 'setIncludeTimeZoneInformation',
        'name' => 'setName',
        'recipient_events' => 'setRecipientEvents',
        'requires_acknowledgement' => 'setRequiresAcknowledgement',
        'sign_message_with_x509_certificate' => 'setSignMessageWithX509Certificate',
        'soap_namespace' => 'setSoapNamespace',
        'url_to_publish_to' => 'setUrlToPublishTo',
        'user_ids' => 'setUserIds',
        'use_soap_interface' => 'setUseSoapInterface'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_envelope_publish' => 'getAllowEnvelopePublish',
        'all_users' => 'getAllUsers',
        'configuration_type' => 'getConfigurationType',
        'connect_id' => 'getConnectId',
        'enable_log' => 'getEnableLog',
        'envelope_events' => 'getEnvelopeEvents',
        'include_certificate_of_completion' => 'getIncludeCertificateOfCompletion',
        'include_cert_soap_header' => 'getIncludeCertSoapHeader',
        'include_document_fields' => 'getIncludeDocumentFields',
        'include_documents' => 'getIncludeDocuments',
        'include_envelope_void_reason' => 'getIncludeEnvelopeVoidReason',
        'include_hmac' => 'getIncludeHmac',
        'include_sender_accountas_custom_field' => 'getIncludeSenderAccountasCustomField',
        'include_time_zone_information' => 'getIncludeTimeZoneInformation',
        'name' => 'getName',
        'recipient_events' => 'getRecipientEvents',
        'requires_acknowledgement' => 'getRequiresAcknowledgement',
        'sign_message_with_x509_certificate' => 'getSignMessageWithX509Certificate',
        'soap_namespace' => 'getSoapNamespace',
        'url_to_publish_to' => 'getUrlToPublishTo',
        'user_ids' => 'getUserIds',
        'use_soap_interface' => 'getUseSoapInterface'
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
        $this->container['allow_envelope_publish'] = isset($data['allow_envelope_publish']) ? $data['allow_envelope_publish'] : null;
        $this->container['all_users'] = isset($data['all_users']) ? $data['all_users'] : null;
        $this->container['configuration_type'] = isset($data['configuration_type']) ? $data['configuration_type'] : null;
        $this->container['connect_id'] = isset($data['connect_id']) ? $data['connect_id'] : null;
        $this->container['enable_log'] = isset($data['enable_log']) ? $data['enable_log'] : null;
        $this->container['envelope_events'] = isset($data['envelope_events']) ? $data['envelope_events'] : null;
        $this->container['include_certificate_of_completion'] = isset($data['include_certificate_of_completion']) ? $data['include_certificate_of_completion'] : null;
        $this->container['include_cert_soap_header'] = isset($data['include_cert_soap_header']) ? $data['include_cert_soap_header'] : null;
        $this->container['include_document_fields'] = isset($data['include_document_fields']) ? $data['include_document_fields'] : null;
        $this->container['include_documents'] = isset($data['include_documents']) ? $data['include_documents'] : null;
        $this->container['include_envelope_void_reason'] = isset($data['include_envelope_void_reason']) ? $data['include_envelope_void_reason'] : null;
        $this->container['include_hmac'] = isset($data['include_hmac']) ? $data['include_hmac'] : null;
        $this->container['include_sender_accountas_custom_field'] = isset($data['include_sender_accountas_custom_field']) ? $data['include_sender_accountas_custom_field'] : null;
        $this->container['include_time_zone_information'] = isset($data['include_time_zone_information']) ? $data['include_time_zone_information'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['recipient_events'] = isset($data['recipient_events']) ? $data['recipient_events'] : null;
        $this->container['requires_acknowledgement'] = isset($data['requires_acknowledgement']) ? $data['requires_acknowledgement'] : null;
        $this->container['sign_message_with_x509_certificate'] = isset($data['sign_message_with_x509_certificate']) ? $data['sign_message_with_x509_certificate'] : null;
        $this->container['soap_namespace'] = isset($data['soap_namespace']) ? $data['soap_namespace'] : null;
        $this->container['url_to_publish_to'] = isset($data['url_to_publish_to']) ? $data['url_to_publish_to'] : null;
        $this->container['user_ids'] = isset($data['user_ids']) ? $data['user_ids'] : null;
        $this->container['use_soap_interface'] = isset($data['use_soap_interface']) ? $data['use_soap_interface'] : null;
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
     * Gets allow_envelope_publish
     *
     * @return string
     */
    public function getAllowEnvelopePublish()
    {
        return $this->container['allow_envelope_publish'];
    }

    /**
     * Sets allow_envelope_publish
     *
     * @param string $allow_envelope_publish When set to **true**, data is sent to the urlToPublishTo web address. This option can be set to false to stop sending data while maintaining the Connect configuration information.
     *
     * @return $this
     */
    public function setAllowEnvelopePublish($allow_envelope_publish)
    {
        $this->container['allow_envelope_publish'] = $allow_envelope_publish;

        return $this;
    }

    /**
     * Gets all_users
     *
     * @return string
     */
    public function getAllUsers()
    {
        return $this->container['all_users'];
    }

    /**
     * Sets all_users
     *
     * @param string $all_users When set to **true**, the tracked envelope and recipient events for all users, including users that are added a later time, are sent through Connect.
     *
     * @return $this
     */
    public function setAllUsers($all_users)
    {
        $this->container['all_users'] = $all_users;

        return $this;
    }

    /**
     * Gets configuration_type
     *
     * @return string
     */
    public function getConfigurationType()
    {
        return $this->container['configuration_type'];
    }

    /**
     * Sets configuration_type
     *
     * @param string $configuration_type If merge field's are being used, specifies the type of the merge field. The only  supported value is **salesforce**.
     *
     * @return $this
     */
    public function setConfigurationType($configuration_type)
    {
        $this->container['configuration_type'] = $configuration_type;

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
     * @param string $connect_id Specifies the DocuSign generated ID for the Connect configuration.
     *
     * @return $this
     */
    public function setConnectId($connect_id)
    {
        $this->container['connect_id'] = $connect_id;

        return $this;
    }

    /**
     * Gets enable_log
     *
     * @return string
     */
    public function getEnableLog()
    {
        return $this->container['enable_log'];
    }

    /**
     * Sets enable_log
     *
     * @param string $enable_log This turns Connect logging on or off. When set to **true**, logging is turned on.
     *
     * @return $this
     */
    public function setEnableLog($enable_log)
    {
        $this->container['enable_log'] = $enable_log;

        return $this;
    }

    /**
     * Gets envelope_events
     *
     * @return string
     */
    public function getEnvelopeEvents()
    {
        return $this->container['envelope_events'];
    }

    /**
     * Sets envelope_events
     *
     * @param string $envelope_events A comma separated list of Ã¯Â¿Â½EnvelopeÃ¯Â¿Â½ related events that are tracked through Connect. The possible event values are: Sent, Delivered, Completed, Declined, and Voided.
     *
     * @return $this
     */
    public function setEnvelopeEvents($envelope_events)
    {
        $this->container['envelope_events'] = $envelope_events;

        return $this;
    }

    /**
     * Gets include_certificate_of_completion
     *
     * @return string
     */
    public function getIncludeCertificateOfCompletion()
    {
        return $this->container['include_certificate_of_completion'];
    }

    /**
     * Sets include_certificate_of_completion
     *
     * @param string $include_certificate_of_completion When set to **true**, the Connect Service includes the Certificate of Completion with completed envelopes.
     *
     * @return $this
     */
    public function setIncludeCertificateOfCompletion($include_certificate_of_completion)
    {
        $this->container['include_certificate_of_completion'] = $include_certificate_of_completion;

        return $this;
    }

    /**
     * Gets include_cert_soap_header
     *
     * @return string
     */
    public function getIncludeCertSoapHeader()
    {
        return $this->container['include_cert_soap_header'];
    }

    /**
     * Sets include_cert_soap_header
     *
     * @param string $include_cert_soap_header 
     *
     * @return $this
     */
    public function setIncludeCertSoapHeader($include_cert_soap_header)
    {
        $this->container['include_cert_soap_header'] = $include_cert_soap_header;

        return $this;
    }

    /**
     * Gets include_document_fields
     *
     * @return string
     */
    public function getIncludeDocumentFields()
    {
        return $this->container['include_document_fields'];
    }

    /**
     * Sets include_document_fields
     *
     * @param string $include_document_fields When set to **true**, the Document Fields associated with envelope documents are included in the data. Document Fields are optional custom name-value pairs added to documents using the API.
     *
     * @return $this
     */
    public function setIncludeDocumentFields($include_document_fields)
    {
        $this->container['include_document_fields'] = $include_document_fields;

        return $this;
    }

    /**
     * Gets include_documents
     *
     * @return string
     */
    public function getIncludeDocuments()
    {
        return $this->container['include_documents'];
    }

    /**
     * Sets include_documents
     *
     * @param string $include_documents When set to **true**, Connect will send the PDF document along with the update XML.
     *
     * @return $this
     */
    public function setIncludeDocuments($include_documents)
    {
        $this->container['include_documents'] = $include_documents;

        return $this;
    }

    /**
     * Gets include_envelope_void_reason
     *
     * @return string
     */
    public function getIncludeEnvelopeVoidReason()
    {
        return $this->container['include_envelope_void_reason'];
    }

    /**
     * Sets include_envelope_void_reason
     *
     * @param string $include_envelope_void_reason When set to **true**, Connect will include the voidedReason for voided envelopes.
     *
     * @return $this
     */
    public function setIncludeEnvelopeVoidReason($include_envelope_void_reason)
    {
        $this->container['include_envelope_void_reason'] = $include_envelope_void_reason;

        return $this;
    }

    /**
     * Gets include_hmac
     *
     * @return string
     */
    public function getIncludeHmac()
    {
        return $this->container['include_hmac'];
    }

    /**
     * Sets include_hmac
     *
     * @param string $include_hmac 
     *
     * @return $this
     */
    public function setIncludeHmac($include_hmac)
    {
        $this->container['include_hmac'] = $include_hmac;

        return $this;
    }

    /**
     * Gets include_sender_accountas_custom_field
     *
     * @return string
     */
    public function getIncludeSenderAccountasCustomField()
    {
        return $this->container['include_sender_accountas_custom_field'];
    }

    /**
     * Sets include_sender_accountas_custom_field
     *
     * @param string $include_sender_accountas_custom_field When set to **true**, Connect will include the sender account as Custom Field in the data.
     *
     * @return $this
     */
    public function setIncludeSenderAccountasCustomField($include_sender_accountas_custom_field)
    {
        $this->container['include_sender_accountas_custom_field'] = $include_sender_accountas_custom_field;

        return $this;
    }

    /**
     * Gets include_time_zone_information
     *
     * @return string
     */
    public function getIncludeTimeZoneInformation()
    {
        return $this->container['include_time_zone_information'];
    }

    /**
     * Sets include_time_zone_information
     *
     * @param string $include_time_zone_information When set to **true**, Connect will include the envelope time zone information.
     *
     * @return $this
     */
    public function setIncludeTimeZoneInformation($include_time_zone_information)
    {
        $this->container['include_time_zone_information'] = $include_time_zone_information;

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
     * @param string $name The name of the Connect configuration. The name helps identify the configuration in the list.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets recipient_events
     *
     * @return string
     */
    public function getRecipientEvents()
    {
        return $this->container['recipient_events'];
    }

    /**
     * Sets recipient_events
     *
     * @param string $recipient_events A comma separated list of Ã¯Â¿Â½RecipientÃ¯Â¿Â½ related events that are tracked through Connect. The possible event values are: Sent, Delivered, Completed, Declined, AuthenticationFailed, and AutoResponded.
     *
     * @return $this
     */
    public function setRecipientEvents($recipient_events)
    {
        $this->container['recipient_events'] = $recipient_events;

        return $this;
    }

    /**
     * Gets requires_acknowledgement
     *
     * @return string
     */
    public function getRequiresAcknowledgement()
    {
        return $this->container['requires_acknowledgement'];
    }

    /**
     * Sets requires_acknowledgement
     *
     * @param string $requires_acknowledgement When set to **true**, and a publication message fails to be acknowledged, the message goes back into the queue and the system will retry delivery after a successful acknowledgement is received. If the delivery fails a second time, the message is not returned to the queue for sending until Connect receives a successful acknowledgement and it has been at least 24 hours since the previous retry. There is a maximum of ten retries Alternately, you can use Republish Connect Information to manually republish the envelope information.
     *
     * @return $this
     */
    public function setRequiresAcknowledgement($requires_acknowledgement)
    {
        $this->container['requires_acknowledgement'] = $requires_acknowledgement;

        return $this;
    }

    /**
     * Gets sign_message_with_x509_certificate
     *
     * @return string
     */
    public function getSignMessageWithX509Certificate()
    {
        return $this->container['sign_message_with_x509_certificate'];
    }

    /**
     * Sets sign_message_with_x509_certificate
     *
     * @param string $sign_message_with_x509_certificate When set to **true**, Connect messages are signed with an X509 certificate. This provides support for 2-way SSL.
     *
     * @return $this
     */
    public function setSignMessageWithX509Certificate($sign_message_with_x509_certificate)
    {
        $this->container['sign_message_with_x509_certificate'] = $sign_message_with_x509_certificate;

        return $this;
    }

    /**
     * Gets soap_namespace
     *
     * @return string
     */
    public function getSoapNamespace()
    {
        return $this->container['soap_namespace'];
    }

    /**
     * Sets soap_namespace
     *
     * @param string $soap_namespace The namespace of the SOAP interface.  The namespace value must be set if useSoapInterface is set to true.
     *
     * @return $this
     */
    public function setSoapNamespace($soap_namespace)
    {
        $this->container['soap_namespace'] = $soap_namespace;

        return $this;
    }

    /**
     * Gets url_to_publish_to
     *
     * @return string
     */
    public function getUrlToPublishTo()
    {
        return $this->container['url_to_publish_to'];
    }

    /**
     * Sets url_to_publish_to
     *
     * @param string $url_to_publish_to This is the web address and name of your listener or Retrieving Service endpoint. You need to include HTTPS:// in the web address.
     *
     * @return $this
     */
    public function setUrlToPublishTo($url_to_publish_to)
    {
        $this->container['url_to_publish_to'] = $url_to_publish_to;

        return $this;
    }

    /**
     * Gets user_ids
     *
     * @return string
     */
    public function getUserIds()
    {
        return $this->container['user_ids'];
    }

    /**
     * Sets user_ids
     *
     * @param string $user_ids A comma separated list of userIds. This sets the users associated with the tracked envelope and recipient events. When one of the event occurs for a set user, the information is sent through Connect.   ###### Note: If allUsers is set to Ã¯Â¿Â½falseÃ¯Â¿Â½ then you must provide a list of user idÃ¯Â¿Â½s.
     *
     * @return $this
     */
    public function setUserIds($user_ids)
    {
        $this->container['user_ids'] = $user_ids;

        return $this;
    }

    /**
     * Gets use_soap_interface
     *
     * @return string
     */
    public function getUseSoapInterface()
    {
        return $this->container['use_soap_interface'];
    }

    /**
     * Sets use_soap_interface
     *
     * @param string $use_soap_interface When set to **true**, indicates that the `urlToPublishTo` property contains a SOAP endpoint.
     *
     * @return $this
     */
    public function setUseSoapInterface($use_soap_interface)
    {
        $this->container['use_soap_interface'] = $use_soap_interface;

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

