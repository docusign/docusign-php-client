<?php
/**
 * ConsumerDisclosure
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
 * Swagger Codegen version: 2.4.21-SNAPSHOT
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
 * ConsumerDisclosure Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ConsumerDisclosure implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'consumerDisclosure';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_esign_id' => '?string',
        'allow_cd_withdraw' => '?string',
        'allow_cd_withdraw_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'change_email' => '?string',
        'change_email_other' => '?string',
        'company_name' => '?string',
        'company_phone' => '?string',
        'copy_cost_per_page' => '?string',
        'copy_fee_collection_method' => '?string',
        'copy_request_email' => '?string',
        'custom' => '?string',
        'enable_esign' => '?string',
        'esign_agreement' => '?string',
        'esign_text' => '?string',
        'language_code' => '?string',
        'must_agree_to_esign' => '?string',
        'pdf_id' => '?string',
        'use_brand' => '?string',
        'use_consumer_disclosure_within_account' => '?string',
        'use_consumer_disclosure_within_account_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'withdraw_address_line1' => '?string',
        'withdraw_address_line2' => '?string',
        'withdraw_by_email' => '?string',
        'withdraw_by_mail' => '?string',
        'withdraw_by_phone' => '?string',
        'withdraw_city' => '?string',
        'withdraw_consequences' => '?string',
        'withdraw_email' => '?string',
        'withdraw_other' => '?string',
        'withdraw_phone' => '?string',
        'withdraw_postal_code' => '?string',
        'withdraw_state' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_esign_id' => null,
        'allow_cd_withdraw' => null,
        'allow_cd_withdraw_metadata' => null,
        'change_email' => null,
        'change_email_other' => null,
        'company_name' => null,
        'company_phone' => null,
        'copy_cost_per_page' => null,
        'copy_fee_collection_method' => null,
        'copy_request_email' => null,
        'custom' => null,
        'enable_esign' => null,
        'esign_agreement' => null,
        'esign_text' => null,
        'language_code' => null,
        'must_agree_to_esign' => null,
        'pdf_id' => null,
        'use_brand' => null,
        'use_consumer_disclosure_within_account' => null,
        'use_consumer_disclosure_within_account_metadata' => null,
        'withdraw_address_line1' => null,
        'withdraw_address_line2' => null,
        'withdraw_by_email' => null,
        'withdraw_by_mail' => null,
        'withdraw_by_phone' => null,
        'withdraw_city' => null,
        'withdraw_consequences' => null,
        'withdraw_email' => null,
        'withdraw_other' => null,
        'withdraw_phone' => null,
        'withdraw_postal_code' => null,
        'withdraw_state' => null
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
        'account_esign_id' => 'accountEsignId',
        'allow_cd_withdraw' => 'allowCDWithdraw',
        'allow_cd_withdraw_metadata' => 'allowCDWithdrawMetadata',
        'change_email' => 'changeEmail',
        'change_email_other' => 'changeEmailOther',
        'company_name' => 'companyName',
        'company_phone' => 'companyPhone',
        'copy_cost_per_page' => 'copyCostPerPage',
        'copy_fee_collection_method' => 'copyFeeCollectionMethod',
        'copy_request_email' => 'copyRequestEmail',
        'custom' => 'custom',
        'enable_esign' => 'enableEsign',
        'esign_agreement' => 'esignAgreement',
        'esign_text' => 'esignText',
        'language_code' => 'languageCode',
        'must_agree_to_esign' => 'mustAgreeToEsign',
        'pdf_id' => 'pdfId',
        'use_brand' => 'useBrand',
        'use_consumer_disclosure_within_account' => 'useConsumerDisclosureWithinAccount',
        'use_consumer_disclosure_within_account_metadata' => 'useConsumerDisclosureWithinAccountMetadata',
        'withdraw_address_line1' => 'withdrawAddressLine1',
        'withdraw_address_line2' => 'withdrawAddressLine2',
        'withdraw_by_email' => 'withdrawByEmail',
        'withdraw_by_mail' => 'withdrawByMail',
        'withdraw_by_phone' => 'withdrawByPhone',
        'withdraw_city' => 'withdrawCity',
        'withdraw_consequences' => 'withdrawConsequences',
        'withdraw_email' => 'withdrawEmail',
        'withdraw_other' => 'withdrawOther',
        'withdraw_phone' => 'withdrawPhone',
        'withdraw_postal_code' => 'withdrawPostalCode',
        'withdraw_state' => 'withdrawState'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_esign_id' => 'setAccountEsignId',
        'allow_cd_withdraw' => 'setAllowCdWithdraw',
        'allow_cd_withdraw_metadata' => 'setAllowCdWithdrawMetadata',
        'change_email' => 'setChangeEmail',
        'change_email_other' => 'setChangeEmailOther',
        'company_name' => 'setCompanyName',
        'company_phone' => 'setCompanyPhone',
        'copy_cost_per_page' => 'setCopyCostPerPage',
        'copy_fee_collection_method' => 'setCopyFeeCollectionMethod',
        'copy_request_email' => 'setCopyRequestEmail',
        'custom' => 'setCustom',
        'enable_esign' => 'setEnableEsign',
        'esign_agreement' => 'setEsignAgreement',
        'esign_text' => 'setEsignText',
        'language_code' => 'setLanguageCode',
        'must_agree_to_esign' => 'setMustAgreeToEsign',
        'pdf_id' => 'setPdfId',
        'use_brand' => 'setUseBrand',
        'use_consumer_disclosure_within_account' => 'setUseConsumerDisclosureWithinAccount',
        'use_consumer_disclosure_within_account_metadata' => 'setUseConsumerDisclosureWithinAccountMetadata',
        'withdraw_address_line1' => 'setWithdrawAddressLine1',
        'withdraw_address_line2' => 'setWithdrawAddressLine2',
        'withdraw_by_email' => 'setWithdrawByEmail',
        'withdraw_by_mail' => 'setWithdrawByMail',
        'withdraw_by_phone' => 'setWithdrawByPhone',
        'withdraw_city' => 'setWithdrawCity',
        'withdraw_consequences' => 'setWithdrawConsequences',
        'withdraw_email' => 'setWithdrawEmail',
        'withdraw_other' => 'setWithdrawOther',
        'withdraw_phone' => 'setWithdrawPhone',
        'withdraw_postal_code' => 'setWithdrawPostalCode',
        'withdraw_state' => 'setWithdrawState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_esign_id' => 'getAccountEsignId',
        'allow_cd_withdraw' => 'getAllowCdWithdraw',
        'allow_cd_withdraw_metadata' => 'getAllowCdWithdrawMetadata',
        'change_email' => 'getChangeEmail',
        'change_email_other' => 'getChangeEmailOther',
        'company_name' => 'getCompanyName',
        'company_phone' => 'getCompanyPhone',
        'copy_cost_per_page' => 'getCopyCostPerPage',
        'copy_fee_collection_method' => 'getCopyFeeCollectionMethod',
        'copy_request_email' => 'getCopyRequestEmail',
        'custom' => 'getCustom',
        'enable_esign' => 'getEnableEsign',
        'esign_agreement' => 'getEsignAgreement',
        'esign_text' => 'getEsignText',
        'language_code' => 'getLanguageCode',
        'must_agree_to_esign' => 'getMustAgreeToEsign',
        'pdf_id' => 'getPdfId',
        'use_brand' => 'getUseBrand',
        'use_consumer_disclosure_within_account' => 'getUseConsumerDisclosureWithinAccount',
        'use_consumer_disclosure_within_account_metadata' => 'getUseConsumerDisclosureWithinAccountMetadata',
        'withdraw_address_line1' => 'getWithdrawAddressLine1',
        'withdraw_address_line2' => 'getWithdrawAddressLine2',
        'withdraw_by_email' => 'getWithdrawByEmail',
        'withdraw_by_mail' => 'getWithdrawByMail',
        'withdraw_by_phone' => 'getWithdrawByPhone',
        'withdraw_city' => 'getWithdrawCity',
        'withdraw_consequences' => 'getWithdrawConsequences',
        'withdraw_email' => 'getWithdrawEmail',
        'withdraw_other' => 'getWithdrawOther',
        'withdraw_phone' => 'getWithdrawPhone',
        'withdraw_postal_code' => 'getWithdrawPostalCode',
        'withdraw_state' => 'getWithdrawState'
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
        $this->container['account_esign_id'] = isset($data['account_esign_id']) ? $data['account_esign_id'] : null;
        $this->container['allow_cd_withdraw'] = isset($data['allow_cd_withdraw']) ? $data['allow_cd_withdraw'] : null;
        $this->container['allow_cd_withdraw_metadata'] = isset($data['allow_cd_withdraw_metadata']) ? $data['allow_cd_withdraw_metadata'] : null;
        $this->container['change_email'] = isset($data['change_email']) ? $data['change_email'] : null;
        $this->container['change_email_other'] = isset($data['change_email_other']) ? $data['change_email_other'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['company_phone'] = isset($data['company_phone']) ? $data['company_phone'] : null;
        $this->container['copy_cost_per_page'] = isset($data['copy_cost_per_page']) ? $data['copy_cost_per_page'] : null;
        $this->container['copy_fee_collection_method'] = isset($data['copy_fee_collection_method']) ? $data['copy_fee_collection_method'] : null;
        $this->container['copy_request_email'] = isset($data['copy_request_email']) ? $data['copy_request_email'] : null;
        $this->container['custom'] = isset($data['custom']) ? $data['custom'] : null;
        $this->container['enable_esign'] = isset($data['enable_esign']) ? $data['enable_esign'] : null;
        $this->container['esign_agreement'] = isset($data['esign_agreement']) ? $data['esign_agreement'] : null;
        $this->container['esign_text'] = isset($data['esign_text']) ? $data['esign_text'] : null;
        $this->container['language_code'] = isset($data['language_code']) ? $data['language_code'] : null;
        $this->container['must_agree_to_esign'] = isset($data['must_agree_to_esign']) ? $data['must_agree_to_esign'] : null;
        $this->container['pdf_id'] = isset($data['pdf_id']) ? $data['pdf_id'] : null;
        $this->container['use_brand'] = isset($data['use_brand']) ? $data['use_brand'] : null;
        $this->container['use_consumer_disclosure_within_account'] = isset($data['use_consumer_disclosure_within_account']) ? $data['use_consumer_disclosure_within_account'] : null;
        $this->container['use_consumer_disclosure_within_account_metadata'] = isset($data['use_consumer_disclosure_within_account_metadata']) ? $data['use_consumer_disclosure_within_account_metadata'] : null;
        $this->container['withdraw_address_line1'] = isset($data['withdraw_address_line1']) ? $data['withdraw_address_line1'] : null;
        $this->container['withdraw_address_line2'] = isset($data['withdraw_address_line2']) ? $data['withdraw_address_line2'] : null;
        $this->container['withdraw_by_email'] = isset($data['withdraw_by_email']) ? $data['withdraw_by_email'] : null;
        $this->container['withdraw_by_mail'] = isset($data['withdraw_by_mail']) ? $data['withdraw_by_mail'] : null;
        $this->container['withdraw_by_phone'] = isset($data['withdraw_by_phone']) ? $data['withdraw_by_phone'] : null;
        $this->container['withdraw_city'] = isset($data['withdraw_city']) ? $data['withdraw_city'] : null;
        $this->container['withdraw_consequences'] = isset($data['withdraw_consequences']) ? $data['withdraw_consequences'] : null;
        $this->container['withdraw_email'] = isset($data['withdraw_email']) ? $data['withdraw_email'] : null;
        $this->container['withdraw_other'] = isset($data['withdraw_other']) ? $data['withdraw_other'] : null;
        $this->container['withdraw_phone'] = isset($data['withdraw_phone']) ? $data['withdraw_phone'] : null;
        $this->container['withdraw_postal_code'] = isset($data['withdraw_postal_code']) ? $data['withdraw_postal_code'] : null;
        $this->container['withdraw_state'] = isset($data['withdraw_state']) ? $data['withdraw_state'] : null;
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
     * Gets account_esign_id
     *
     * @return ?string
     */
    public function getAccountEsignId()
    {
        return $this->container['account_esign_id'];
    }

    /**
     * Sets account_esign_id
     *
     * @param ?string $account_esign_id A GUID identifying the account associated with the consumer disclosure
     *
     * @return $this
     */
    public function setAccountEsignId($account_esign_id)
    {
        $this->container['account_esign_id'] = $account_esign_id;

        return $this;
    }

    /**
     * Gets allow_cd_withdraw
     *
     * @return ?string
     */
    public function getAllowCdWithdraw()
    {
        return $this->container['allow_cd_withdraw'];
    }

    /**
     * Sets allow_cd_withdraw
     *
     * @param ?string $allow_cd_withdraw Indicates whether the customer can withdraw their acceptance of the consumer disclosure.
     *
     * @return $this
     */
    public function setAllowCdWithdraw($allow_cd_withdraw)
    {
        $this->container['allow_cd_withdraw'] = $allow_cd_withdraw;

        return $this;
    }

    /**
     * Gets allow_cd_withdraw_metadata
     *
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getAllowCdWithdrawMetadata()
    {
        return $this->container['allow_cd_withdraw_metadata'];
    }

    /**
     * Sets allow_cd_withdraw_metadata
     *
     * @param \DocuSign\eSign\Model\SettingsMetadata $allow_cd_withdraw_metadata allow_cd_withdraw_metadata
     *
     * @return $this
     */
    public function setAllowCdWithdrawMetadata($allow_cd_withdraw_metadata)
    {
        $this->container['allow_cd_withdraw_metadata'] = $allow_cd_withdraw_metadata;

        return $this;
    }

    /**
     * Gets change_email
     *
     * @return ?string
     */
    public function getChangeEmail()
    {
        return $this->container['change_email'];
    }

    /**
     * Sets change_email
     *
     * @param ?string $change_email 
     *
     * @return $this
     */
    public function setChangeEmail($change_email)
    {
        $this->container['change_email'] = $change_email;

        return $this;
    }

    /**
     * Gets change_email_other
     *
     * @return ?string
     */
    public function getChangeEmailOther()
    {
        return $this->container['change_email_other'];
    }

    /**
     * Sets change_email_other
     *
     * @param ?string $change_email_other 
     *
     * @return $this
     */
    public function setChangeEmailOther($change_email_other)
    {
        $this->container['change_email_other'] = $change_email_other;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return ?string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param ?string $company_name The name of the company associated with the consumer disclosure.
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets company_phone
     *
     * @return ?string
     */
    public function getCompanyPhone()
    {
        return $this->container['company_phone'];
    }

    /**
     * Sets company_phone
     *
     * @param ?string $company_phone The phone number of the company associated with the consumer disclosure.
     *
     * @return $this
     */
    public function setCompanyPhone($company_phone)
    {
        $this->container['company_phone'] = $company_phone;

        return $this;
    }

    /**
     * Gets copy_cost_per_page
     *
     * @return ?string
     */
    public function getCopyCostPerPage()
    {
        return $this->container['copy_cost_per_page'];
    }

    /**
     * Sets copy_cost_per_page
     *
     * @param ?string $copy_cost_per_page 
     *
     * @return $this
     */
    public function setCopyCostPerPage($copy_cost_per_page)
    {
        $this->container['copy_cost_per_page'] = $copy_cost_per_page;

        return $this;
    }

    /**
     * Gets copy_fee_collection_method
     *
     * @return ?string
     */
    public function getCopyFeeCollectionMethod()
    {
        return $this->container['copy_fee_collection_method'];
    }

    /**
     * Sets copy_fee_collection_method
     *
     * @param ?string $copy_fee_collection_method Specifies the fee collection method for cases in which the customer requires paper copies of the document.  Maximum Length: 255 characters
     *
     * @return $this
     */
    public function setCopyFeeCollectionMethod($copy_fee_collection_method)
    {
        $this->container['copy_fee_collection_method'] = $copy_fee_collection_method;

        return $this;
    }

    /**
     * Gets copy_request_email
     *
     * @return ?string
     */
    public function getCopyRequestEmail()
    {
        return $this->container['copy_request_email'];
    }

    /**
     * Sets copy_request_email
     *
     * @param ?string $copy_request_email 
     *
     * @return $this
     */
    public function setCopyRequestEmail($copy_request_email)
    {
        $this->container['copy_request_email'] = $copy_request_email;

        return $this;
    }

    /**
     * Gets custom
     *
     * @return ?string
     */
    public function getCustom()
    {
        return $this->container['custom'];
    }

    /**
     * Sets custom
     *
     * @param ?string $custom 
     *
     * @return $this
     */
    public function setCustom($custom)
    {
        $this->container['custom'] = $custom;

        return $this;
    }

    /**
     * Gets enable_esign
     *
     * @return ?string
     */
    public function getEnableEsign()
    {
        return $this->container['enable_esign'];
    }

    /**
     * Sets enable_esign
     *
     * @param ?string $enable_esign 
     *
     * @return $this
     */
    public function setEnableEsign($enable_esign)
    {
        $this->container['enable_esign'] = $enable_esign;

        return $this;
    }

    /**
     * Gets esign_agreement
     *
     * @return ?string
     */
    public function getEsignAgreement()
    {
        return $this->container['esign_agreement'];
    }

    /**
     * Sets esign_agreement
     *
     * @param ?string $esign_agreement The Electronic Record and Signature Disclosure text. The disclosure text includes the html formatting.
     *
     * @return $this
     */
    public function setEsignAgreement($esign_agreement)
    {
        $this->container['esign_agreement'] = $esign_agreement;

        return $this;
    }

    /**
     * Gets esign_text
     *
     * @return ?string
     */
    public function getEsignText()
    {
        return $this->container['esign_text'];
    }

    /**
     * Sets esign_text
     *
     * @param ?string $esign_text 
     *
     * @return $this
     */
    public function setEsignText($esign_text)
    {
        $this->container['esign_text'] = $esign_text;

        return $this;
    }

    /**
     * Gets language_code
     *
     * @return ?string
     */
    public function getLanguageCode()
    {
        return $this->container['language_code'];
    }

    /**
     * Sets language_code
     *
     * @param ?string $language_code 
     *
     * @return $this
     */
    public function setLanguageCode($language_code)
    {
        $this->container['language_code'] = $language_code;

        return $this;
    }

    /**
     * Gets must_agree_to_esign
     *
     * @return ?string
     */
    public function getMustAgreeToEsign()
    {
        return $this->container['must_agree_to_esign'];
    }

    /**
     * Sets must_agree_to_esign
     *
     * @param ?string $must_agree_to_esign 
     *
     * @return $this
     */
    public function setMustAgreeToEsign($must_agree_to_esign)
    {
        $this->container['must_agree_to_esign'] = $must_agree_to_esign;

        return $this;
    }

    /**
     * Gets pdf_id
     *
     * @return ?string
     */
    public function getPdfId()
    {
        return $this->container['pdf_id'];
    }

    /**
     * Sets pdf_id
     *
     * @param ?string $pdf_id 
     *
     * @return $this
     */
    public function setPdfId($pdf_id)
    {
        $this->container['pdf_id'] = $pdf_id;

        return $this;
    }

    /**
     * Gets use_brand
     *
     * @return ?string
     */
    public function getUseBrand()
    {
        return $this->container['use_brand'];
    }

    /**
     * Sets use_brand
     *
     * @param ?string $use_brand 
     *
     * @return $this
     */
    public function setUseBrand($use_brand)
    {
        $this->container['use_brand'] = $use_brand;

        return $this;
    }

    /**
     * Gets use_consumer_disclosure_within_account
     *
     * @return ?string
     */
    public function getUseConsumerDisclosureWithinAccount()
    {
        return $this->container['use_consumer_disclosure_within_account'];
    }

    /**
     * Sets use_consumer_disclosure_within_account
     *
     * @param ?string $use_consumer_disclosure_within_account 
     *
     * @return $this
     */
    public function setUseConsumerDisclosureWithinAccount($use_consumer_disclosure_within_account)
    {
        $this->container['use_consumer_disclosure_within_account'] = $use_consumer_disclosure_within_account;

        return $this;
    }

    /**
     * Gets use_consumer_disclosure_within_account_metadata
     *
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getUseConsumerDisclosureWithinAccountMetadata()
    {
        return $this->container['use_consumer_disclosure_within_account_metadata'];
    }

    /**
     * Sets use_consumer_disclosure_within_account_metadata
     *
     * @param \DocuSign\eSign\Model\SettingsMetadata $use_consumer_disclosure_within_account_metadata use_consumer_disclosure_within_account_metadata
     *
     * @return $this
     */
    public function setUseConsumerDisclosureWithinAccountMetadata($use_consumer_disclosure_within_account_metadata)
    {
        $this->container['use_consumer_disclosure_within_account_metadata'] = $use_consumer_disclosure_within_account_metadata;

        return $this;
    }

    /**
     * Gets withdraw_address_line1
     *
     * @return ?string
     */
    public function getWithdrawAddressLine1()
    {
        return $this->container['withdraw_address_line1'];
    }

    /**
     * Sets withdraw_address_line1
     *
     * @param ?string $withdraw_address_line1 Contains the first address line of the postal address to which a customer can send a consent withdrawal notification.  Maximum length: 100 characters.
     *
     * @return $this
     */
    public function setWithdrawAddressLine1($withdraw_address_line1)
    {
        $this->container['withdraw_address_line1'] = $withdraw_address_line1;

        return $this;
    }

    /**
     * Gets withdraw_address_line2
     *
     * @return ?string
     */
    public function getWithdrawAddressLine2()
    {
        return $this->container['withdraw_address_line2'];
    }

    /**
     * Sets withdraw_address_line2
     *
     * @param ?string $withdraw_address_line2 Contains the second address line of the postal address to which a customer can send a consent withdrawal notification.  Maximum length: 100 characters.
     *
     * @return $this
     */
    public function setWithdrawAddressLine2($withdraw_address_line2)
    {
        $this->container['withdraw_address_line2'] = $withdraw_address_line2;

        return $this;
    }

    /**
     * Gets withdraw_by_email
     *
     * @return ?string
     */
    public function getWithdrawByEmail()
    {
        return $this->container['withdraw_by_email'];
    }

    /**
     * Sets withdraw_by_email
     *
     * @param ?string $withdraw_by_email Indicates whether the customer can withdraw consent by email.
     *
     * @return $this
     */
    public function setWithdrawByEmail($withdraw_by_email)
    {
        $this->container['withdraw_by_email'] = $withdraw_by_email;

        return $this;
    }

    /**
     * Gets withdraw_by_mail
     *
     * @return ?string
     */
    public function getWithdrawByMail()
    {
        return $this->container['withdraw_by_mail'];
    }

    /**
     * Sets withdraw_by_mail
     *
     * @param ?string $withdraw_by_mail Indicates whether the customer can withdraw consent by postal mail.
     *
     * @return $this
     */
    public function setWithdrawByMail($withdraw_by_mail)
    {
        $this->container['withdraw_by_mail'] = $withdraw_by_mail;

        return $this;
    }

    /**
     * Gets withdraw_by_phone
     *
     * @return ?string
     */
    public function getWithdrawByPhone()
    {
        return $this->container['withdraw_by_phone'];
    }

    /**
     * Sets withdraw_by_phone
     *
     * @param ?string $withdraw_by_phone Indicates whether the customer can withdraw consent by phone.
     *
     * @return $this
     */
    public function setWithdrawByPhone($withdraw_by_phone)
    {
        $this->container['withdraw_by_phone'] = $withdraw_by_phone;

        return $this;
    }

    /**
     * Gets withdraw_city
     *
     * @return ?string
     */
    public function getWithdrawCity()
    {
        return $this->container['withdraw_city'];
    }

    /**
     * Sets withdraw_city
     *
     * @param ?string $withdraw_city Contains the city of the postal address to which a customer can send a consent withdrawal notification.  Maximum length: 50 characters.
     *
     * @return $this
     */
    public function setWithdrawCity($withdraw_city)
    {
        $this->container['withdraw_city'] = $withdraw_city;

        return $this;
    }

    /**
     * Gets withdraw_consequences
     *
     * @return ?string
     */
    public function getWithdrawConsequences()
    {
        return $this->container['withdraw_consequences'];
    }

    /**
     * Sets withdraw_consequences
     *
     * @param ?string $withdraw_consequences Indicates the consequences of withdrawing consent.
     *
     * @return $this
     */
    public function setWithdrawConsequences($withdraw_consequences)
    {
        $this->container['withdraw_consequences'] = $withdraw_consequences;

        return $this;
    }

    /**
     * Gets withdraw_email
     *
     * @return ?string
     */
    public function getWithdrawEmail()
    {
        return $this->container['withdraw_email'];
    }

    /**
     * Sets withdraw_email
     *
     * @param ?string $withdraw_email Contains the email address to which a customer can send a consent withdrawal notification.  Maximum length: 100 characters.
     *
     * @return $this
     */
    public function setWithdrawEmail($withdraw_email)
    {
        $this->container['withdraw_email'] = $withdraw_email;

        return $this;
    }

    /**
     * Gets withdraw_other
     *
     * @return ?string
     */
    public function getWithdrawOther()
    {
        return $this->container['withdraw_other'];
    }

    /**
     * Sets withdraw_other
     *
     * @param ?string $withdraw_other Indicates other information need to withdraw consent.  Maximum length: 255 characters.
     *
     * @return $this
     */
    public function setWithdrawOther($withdraw_other)
    {
        $this->container['withdraw_other'] = $withdraw_other;

        return $this;
    }

    /**
     * Gets withdraw_phone
     *
     * @return ?string
     */
    public function getWithdrawPhone()
    {
        return $this->container['withdraw_phone'];
    }

    /**
     * Sets withdraw_phone
     *
     * @param ?string $withdraw_phone Contains the phone number which a customer can call to register consent withdrawal notification.  Maximum length: 20 characters.
     *
     * @return $this
     */
    public function setWithdrawPhone($withdraw_phone)
    {
        $this->container['withdraw_phone'] = $withdraw_phone;

        return $this;
    }

    /**
     * Gets withdraw_postal_code
     *
     * @return ?string
     */
    public function getWithdrawPostalCode()
    {
        return $this->container['withdraw_postal_code'];
    }

    /**
     * Sets withdraw_postal_code
     *
     * @param ?string $withdraw_postal_code Contains the postal code of the postal address to which a customer can send a consent withdrawal notification.  Maximum length: 20 characters.
     *
     * @return $this
     */
    public function setWithdrawPostalCode($withdraw_postal_code)
    {
        $this->container['withdraw_postal_code'] = $withdraw_postal_code;

        return $this;
    }

    /**
     * Gets withdraw_state
     *
     * @return ?string
     */
    public function getWithdrawState()
    {
        return $this->container['withdraw_state'];
    }

    /**
     * Sets withdraw_state
     *
     * @param ?string $withdraw_state Contains the state of the postal address to which a customer can send a consent withdrawal notification.
     *
     * @return $this
     */
    public function setWithdrawState($withdraw_state)
    {
        $this->container['withdraw_state'] = $withdraw_state;

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

