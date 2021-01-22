<?php
/**
 * AccountInformation
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
 * AccountInformation Class Doc Comment
 *
 * @category    Class
 * @description Contains account Information.
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AccountInformation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'accountInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_id_guid' => 'string',
        'account_name' => 'string',
        'allow_transaction_rooms' => 'string',
        'billing_period_days_remaining' => 'string',
        'billing_period_end_date' => 'string',
        'billing_period_envelopes_allowed' => 'string',
        'billing_period_envelopes_sent' => 'string',
        'billing_period_start_date' => 'string',
        'billing_profile' => 'string',
        'can_cancel_renewal' => 'string',
        'can_upgrade' => 'string',
        'connect_permission' => 'string',
        'created_date' => 'string',
        'currency_code' => 'string',
        'current_plan_id' => 'string',
        'distributor_code' => 'string',
        'docu_sign_landing_url' => 'string',
        'envelope_sending_blocked' => 'string',
        'envelope_unit_price' => 'string',
        'external_account_id' => 'string',
        'forgotten_password_questions_count' => 'string',
        'is_downgrade' => 'string',
        'payment_method' => 'string',
        'plan_classification' => 'string',
        'plan_end_date' => 'string',
        'plan_name' => 'string',
        'plan_start_date' => 'string',
        'seats_allowed' => 'string',
        'seats_in_use' => 'string',
        'status21_cfr_part11' => 'string',
        'suspension_date' => 'string',
        'suspension_status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_id_guid' => null,
        'account_name' => null,
        'allow_transaction_rooms' => null,
        'billing_period_days_remaining' => null,
        'billing_period_end_date' => null,
        'billing_period_envelopes_allowed' => null,
        'billing_period_envelopes_sent' => null,
        'billing_period_start_date' => null,
        'billing_profile' => null,
        'can_cancel_renewal' => null,
        'can_upgrade' => null,
        'connect_permission' => null,
        'created_date' => null,
        'currency_code' => null,
        'current_plan_id' => null,
        'distributor_code' => null,
        'docu_sign_landing_url' => null,
        'envelope_sending_blocked' => null,
        'envelope_unit_price' => null,
        'external_account_id' => null,
        'forgotten_password_questions_count' => null,
        'is_downgrade' => null,
        'payment_method' => null,
        'plan_classification' => null,
        'plan_end_date' => null,
        'plan_name' => null,
        'plan_start_date' => null,
        'seats_allowed' => null,
        'seats_in_use' => null,
        'status21_cfr_part11' => null,
        'suspension_date' => null,
        'suspension_status' => null
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
        'account_id_guid' => 'accountIdGuid',
        'account_name' => 'accountName',
        'allow_transaction_rooms' => 'allowTransactionRooms',
        'billing_period_days_remaining' => 'billingPeriodDaysRemaining',
        'billing_period_end_date' => 'billingPeriodEndDate',
        'billing_period_envelopes_allowed' => 'billingPeriodEnvelopesAllowed',
        'billing_period_envelopes_sent' => 'billingPeriodEnvelopesSent',
        'billing_period_start_date' => 'billingPeriodStartDate',
        'billing_profile' => 'billingProfile',
        'can_cancel_renewal' => 'canCancelRenewal',
        'can_upgrade' => 'canUpgrade',
        'connect_permission' => 'connectPermission',
        'created_date' => 'createdDate',
        'currency_code' => 'currencyCode',
        'current_plan_id' => 'currentPlanId',
        'distributor_code' => 'distributorCode',
        'docu_sign_landing_url' => 'docuSignLandingUrl',
        'envelope_sending_blocked' => 'envelopeSendingBlocked',
        'envelope_unit_price' => 'envelopeUnitPrice',
        'external_account_id' => 'externalAccountId',
        'forgotten_password_questions_count' => 'forgottenPasswordQuestionsCount',
        'is_downgrade' => 'isDowngrade',
        'payment_method' => 'paymentMethod',
        'plan_classification' => 'planClassification',
        'plan_end_date' => 'planEndDate',
        'plan_name' => 'planName',
        'plan_start_date' => 'planStartDate',
        'seats_allowed' => 'seatsAllowed',
        'seats_in_use' => 'seatsInUse',
        'status21_cfr_part11' => 'status21CFRPart11',
        'suspension_date' => 'suspensionDate',
        'suspension_status' => 'suspensionStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id_guid' => 'setAccountIdGuid',
        'account_name' => 'setAccountName',
        'allow_transaction_rooms' => 'setAllowTransactionRooms',
        'billing_period_days_remaining' => 'setBillingPeriodDaysRemaining',
        'billing_period_end_date' => 'setBillingPeriodEndDate',
        'billing_period_envelopes_allowed' => 'setBillingPeriodEnvelopesAllowed',
        'billing_period_envelopes_sent' => 'setBillingPeriodEnvelopesSent',
        'billing_period_start_date' => 'setBillingPeriodStartDate',
        'billing_profile' => 'setBillingProfile',
        'can_cancel_renewal' => 'setCanCancelRenewal',
        'can_upgrade' => 'setCanUpgrade',
        'connect_permission' => 'setConnectPermission',
        'created_date' => 'setCreatedDate',
        'currency_code' => 'setCurrencyCode',
        'current_plan_id' => 'setCurrentPlanId',
        'distributor_code' => 'setDistributorCode',
        'docu_sign_landing_url' => 'setDocuSignLandingUrl',
        'envelope_sending_blocked' => 'setEnvelopeSendingBlocked',
        'envelope_unit_price' => 'setEnvelopeUnitPrice',
        'external_account_id' => 'setExternalAccountId',
        'forgotten_password_questions_count' => 'setForgottenPasswordQuestionsCount',
        'is_downgrade' => 'setIsDowngrade',
        'payment_method' => 'setPaymentMethod',
        'plan_classification' => 'setPlanClassification',
        'plan_end_date' => 'setPlanEndDate',
        'plan_name' => 'setPlanName',
        'plan_start_date' => 'setPlanStartDate',
        'seats_allowed' => 'setSeatsAllowed',
        'seats_in_use' => 'setSeatsInUse',
        'status21_cfr_part11' => 'setStatus21CfrPart11',
        'suspension_date' => 'setSuspensionDate',
        'suspension_status' => 'setSuspensionStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id_guid' => 'getAccountIdGuid',
        'account_name' => 'getAccountName',
        'allow_transaction_rooms' => 'getAllowTransactionRooms',
        'billing_period_days_remaining' => 'getBillingPeriodDaysRemaining',
        'billing_period_end_date' => 'getBillingPeriodEndDate',
        'billing_period_envelopes_allowed' => 'getBillingPeriodEnvelopesAllowed',
        'billing_period_envelopes_sent' => 'getBillingPeriodEnvelopesSent',
        'billing_period_start_date' => 'getBillingPeriodStartDate',
        'billing_profile' => 'getBillingProfile',
        'can_cancel_renewal' => 'getCanCancelRenewal',
        'can_upgrade' => 'getCanUpgrade',
        'connect_permission' => 'getConnectPermission',
        'created_date' => 'getCreatedDate',
        'currency_code' => 'getCurrencyCode',
        'current_plan_id' => 'getCurrentPlanId',
        'distributor_code' => 'getDistributorCode',
        'docu_sign_landing_url' => 'getDocuSignLandingUrl',
        'envelope_sending_blocked' => 'getEnvelopeSendingBlocked',
        'envelope_unit_price' => 'getEnvelopeUnitPrice',
        'external_account_id' => 'getExternalAccountId',
        'forgotten_password_questions_count' => 'getForgottenPasswordQuestionsCount',
        'is_downgrade' => 'getIsDowngrade',
        'payment_method' => 'getPaymentMethod',
        'plan_classification' => 'getPlanClassification',
        'plan_end_date' => 'getPlanEndDate',
        'plan_name' => 'getPlanName',
        'plan_start_date' => 'getPlanStartDate',
        'seats_allowed' => 'getSeatsAllowed',
        'seats_in_use' => 'getSeatsInUse',
        'status21_cfr_part11' => 'getStatus21CfrPart11',
        'suspension_date' => 'getSuspensionDate',
        'suspension_status' => 'getSuspensionStatus'
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
        $this->container['account_id_guid'] = isset($data['account_id_guid']) ? $data['account_id_guid'] : null;
        $this->container['account_name'] = isset($data['account_name']) ? $data['account_name'] : null;
        $this->container['allow_transaction_rooms'] = isset($data['allow_transaction_rooms']) ? $data['allow_transaction_rooms'] : null;
        $this->container['billing_period_days_remaining'] = isset($data['billing_period_days_remaining']) ? $data['billing_period_days_remaining'] : null;
        $this->container['billing_period_end_date'] = isset($data['billing_period_end_date']) ? $data['billing_period_end_date'] : null;
        $this->container['billing_period_envelopes_allowed'] = isset($data['billing_period_envelopes_allowed']) ? $data['billing_period_envelopes_allowed'] : null;
        $this->container['billing_period_envelopes_sent'] = isset($data['billing_period_envelopes_sent']) ? $data['billing_period_envelopes_sent'] : null;
        $this->container['billing_period_start_date'] = isset($data['billing_period_start_date']) ? $data['billing_period_start_date'] : null;
        $this->container['billing_profile'] = isset($data['billing_profile']) ? $data['billing_profile'] : null;
        $this->container['can_cancel_renewal'] = isset($data['can_cancel_renewal']) ? $data['can_cancel_renewal'] : null;
        $this->container['can_upgrade'] = isset($data['can_upgrade']) ? $data['can_upgrade'] : null;
        $this->container['connect_permission'] = isset($data['connect_permission']) ? $data['connect_permission'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['current_plan_id'] = isset($data['current_plan_id']) ? $data['current_plan_id'] : null;
        $this->container['distributor_code'] = isset($data['distributor_code']) ? $data['distributor_code'] : null;
        $this->container['docu_sign_landing_url'] = isset($data['docu_sign_landing_url']) ? $data['docu_sign_landing_url'] : null;
        $this->container['envelope_sending_blocked'] = isset($data['envelope_sending_blocked']) ? $data['envelope_sending_blocked'] : null;
        $this->container['envelope_unit_price'] = isset($data['envelope_unit_price']) ? $data['envelope_unit_price'] : null;
        $this->container['external_account_id'] = isset($data['external_account_id']) ? $data['external_account_id'] : null;
        $this->container['forgotten_password_questions_count'] = isset($data['forgotten_password_questions_count']) ? $data['forgotten_password_questions_count'] : null;
        $this->container['is_downgrade'] = isset($data['is_downgrade']) ? $data['is_downgrade'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['plan_classification'] = isset($data['plan_classification']) ? $data['plan_classification'] : null;
        $this->container['plan_end_date'] = isset($data['plan_end_date']) ? $data['plan_end_date'] : null;
        $this->container['plan_name'] = isset($data['plan_name']) ? $data['plan_name'] : null;
        $this->container['plan_start_date'] = isset($data['plan_start_date']) ? $data['plan_start_date'] : null;
        $this->container['seats_allowed'] = isset($data['seats_allowed']) ? $data['seats_allowed'] : null;
        $this->container['seats_in_use'] = isset($data['seats_in_use']) ? $data['seats_in_use'] : null;
        $this->container['status21_cfr_part11'] = isset($data['status21_cfr_part11']) ? $data['status21_cfr_part11'] : null;
        $this->container['suspension_date'] = isset($data['suspension_date']) ? $data['suspension_date'] : null;
        $this->container['suspension_status'] = isset($data['suspension_status']) ? $data['suspension_status'] : null;
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
     * Gets account_id_guid
     *
     * @return string
     */
    public function getAccountIdGuid()
    {
        return $this->container['account_id_guid'];
    }

    /**
     * Sets account_id_guid
     *
     * @param string $account_id_guid The GUID associated with the account ID.
     *
     * @return $this
     */
    public function setAccountIdGuid($account_id_guid)
    {
        $this->container['account_id_guid'] = $account_id_guid;

        return $this;
    }

    /**
     * Gets account_name
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     *
     * @param string $account_name The name of the current account.
     *
     * @return $this
     */
    public function setAccountName($account_name)
    {
        $this->container['account_name'] = $account_name;

        return $this;
    }

    /**
     * Gets allow_transaction_rooms
     *
     * @return string
     */
    public function getAllowTransactionRooms()
    {
        return $this->container['allow_transaction_rooms'];
    }

    /**
     * Sets allow_transaction_rooms
     *
     * @param string $allow_transaction_rooms When set to **true**, the transaction rooms feature exposed through the Workspaces API is enabled.
     *
     * @return $this
     */
    public function setAllowTransactionRooms($allow_transaction_rooms)
    {
        $this->container['allow_transaction_rooms'] = $allow_transaction_rooms;

        return $this;
    }

    /**
     * Gets billing_period_days_remaining
     *
     * @return string
     */
    public function getBillingPeriodDaysRemaining()
    {
        return $this->container['billing_period_days_remaining'];
    }

    /**
     * Sets billing_period_days_remaining
     *
     * @param string $billing_period_days_remaining Reserved: TBD
     *
     * @return $this
     */
    public function setBillingPeriodDaysRemaining($billing_period_days_remaining)
    {
        $this->container['billing_period_days_remaining'] = $billing_period_days_remaining;

        return $this;
    }

    /**
     * Gets billing_period_end_date
     *
     * @return string
     */
    public function getBillingPeriodEndDate()
    {
        return $this->container['billing_period_end_date'];
    }

    /**
     * Sets billing_period_end_date
     *
     * @param string $billing_period_end_date Reserved: TBD
     *
     * @return $this
     */
    public function setBillingPeriodEndDate($billing_period_end_date)
    {
        $this->container['billing_period_end_date'] = $billing_period_end_date;

        return $this;
    }

    /**
     * Gets billing_period_envelopes_allowed
     *
     * @return string
     */
    public function getBillingPeriodEnvelopesAllowed()
    {
        return $this->container['billing_period_envelopes_allowed'];
    }

    /**
     * Sets billing_period_envelopes_allowed
     *
     * @param string $billing_period_envelopes_allowed Reserved: TBD
     *
     * @return $this
     */
    public function setBillingPeriodEnvelopesAllowed($billing_period_envelopes_allowed)
    {
        $this->container['billing_period_envelopes_allowed'] = $billing_period_envelopes_allowed;

        return $this;
    }

    /**
     * Gets billing_period_envelopes_sent
     *
     * @return string
     */
    public function getBillingPeriodEnvelopesSent()
    {
        return $this->container['billing_period_envelopes_sent'];
    }

    /**
     * Sets billing_period_envelopes_sent
     *
     * @param string $billing_period_envelopes_sent Reserved: TBD
     *
     * @return $this
     */
    public function setBillingPeriodEnvelopesSent($billing_period_envelopes_sent)
    {
        $this->container['billing_period_envelopes_sent'] = $billing_period_envelopes_sent;

        return $this;
    }

    /**
     * Gets billing_period_start_date
     *
     * @return string
     */
    public function getBillingPeriodStartDate()
    {
        return $this->container['billing_period_start_date'];
    }

    /**
     * Sets billing_period_start_date
     *
     * @param string $billing_period_start_date Reserved: TBD
     *
     * @return $this
     */
    public function setBillingPeriodStartDate($billing_period_start_date)
    {
        $this->container['billing_period_start_date'] = $billing_period_start_date;

        return $this;
    }

    /**
     * Gets billing_profile
     *
     * @return string
     */
    public function getBillingProfile()
    {
        return $this->container['billing_profile'];
    }

    /**
     * Sets billing_profile
     *
     * @param string $billing_profile Reserved: TBD
     *
     * @return $this
     */
    public function setBillingProfile($billing_profile)
    {
        $this->container['billing_profile'] = $billing_profile;

        return $this;
    }

    /**
     * Gets can_cancel_renewal
     *
     * @return string
     */
    public function getCanCancelRenewal()
    {
        return $this->container['can_cancel_renewal'];
    }

    /**
     * Sets can_cancel_renewal
     *
     * @param string $can_cancel_renewal Reserved: TBD
     *
     * @return $this
     */
    public function setCanCancelRenewal($can_cancel_renewal)
    {
        $this->container['can_cancel_renewal'] = $can_cancel_renewal;

        return $this;
    }

    /**
     * Gets can_upgrade
     *
     * @return string
     */
    public function getCanUpgrade()
    {
        return $this->container['can_upgrade'];
    }

    /**
     * Sets can_upgrade
     *
     * @param string $can_upgrade When set to **true**, specifies that you can upgrade the account through the API.
     *
     * @return $this
     */
    public function setCanUpgrade($can_upgrade)
    {
        $this->container['can_upgrade'] = $can_upgrade;

        return $this;
    }

    /**
     * Gets connect_permission
     *
     * @return string
     */
    public function getConnectPermission()
    {
        return $this->container['connect_permission'];
    }

    /**
     * Sets connect_permission
     *
     * @param string $connect_permission 
     *
     * @return $this
     */
    public function setConnectPermission($connect_permission)
    {
        $this->container['connect_permission'] = $connect_permission;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return string
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param string $created_date 
     *
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code Specifies the ISO currency code for the account.
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets current_plan_id
     *
     * @return string
     */
    public function getCurrentPlanId()
    {
        return $this->container['current_plan_id'];
    }

    /**
     * Sets current_plan_id
     *
     * @param string $current_plan_id Identifies the plan that was used create this account.
     *
     * @return $this
     */
    public function setCurrentPlanId($current_plan_id)
    {
        $this->container['current_plan_id'] = $current_plan_id;

        return $this;
    }

    /**
     * Gets distributor_code
     *
     * @return string
     */
    public function getDistributorCode()
    {
        return $this->container['distributor_code'];
    }

    /**
     * Sets distributor_code
     *
     * @param string $distributor_code The code that identifies the billing plan groups and plans for the new account.
     *
     * @return $this
     */
    public function setDistributorCode($distributor_code)
    {
        $this->container['distributor_code'] = $distributor_code;

        return $this;
    }

    /**
     * Gets docu_sign_landing_url
     *
     * @return string
     */
    public function getDocuSignLandingUrl()
    {
        return $this->container['docu_sign_landing_url'];
    }

    /**
     * Sets docu_sign_landing_url
     *
     * @param string $docu_sign_landing_url 
     *
     * @return $this
     */
    public function setDocuSignLandingUrl($docu_sign_landing_url)
    {
        $this->container['docu_sign_landing_url'] = $docu_sign_landing_url;

        return $this;
    }

    /**
     * Gets envelope_sending_blocked
     *
     * @return string
     */
    public function getEnvelopeSendingBlocked()
    {
        return $this->container['envelope_sending_blocked'];
    }

    /**
     * Sets envelope_sending_blocked
     *
     * @param string $envelope_sending_blocked 
     *
     * @return $this
     */
    public function setEnvelopeSendingBlocked($envelope_sending_blocked)
    {
        $this->container['envelope_sending_blocked'] = $envelope_sending_blocked;

        return $this;
    }

    /**
     * Gets envelope_unit_price
     *
     * @return string
     */
    public function getEnvelopeUnitPrice()
    {
        return $this->container['envelope_unit_price'];
    }

    /**
     * Sets envelope_unit_price
     *
     * @param string $envelope_unit_price 
     *
     * @return $this
     */
    public function setEnvelopeUnitPrice($envelope_unit_price)
    {
        $this->container['envelope_unit_price'] = $envelope_unit_price;

        return $this;
    }

    /**
     * Gets external_account_id
     *
     * @return string
     */
    public function getExternalAccountId()
    {
        return $this->container['external_account_id'];
    }

    /**
     * Sets external_account_id
     *
     * @param string $external_account_id 
     *
     * @return $this
     */
    public function setExternalAccountId($external_account_id)
    {
        $this->container['external_account_id'] = $external_account_id;

        return $this;
    }

    /**
     * Gets forgotten_password_questions_count
     *
     * @return string
     */
    public function getForgottenPasswordQuestionsCount()
    {
        return $this->container['forgotten_password_questions_count'];
    }

    /**
     * Sets forgotten_password_questions_count
     *
     * @param string $forgotten_password_questions_count A complex element that contains up to four Question/Answer pairs for forgotten password information for a user.
     *
     * @return $this
     */
    public function setForgottenPasswordQuestionsCount($forgotten_password_questions_count)
    {
        $this->container['forgotten_password_questions_count'] = $forgotten_password_questions_count;

        return $this;
    }

    /**
     * Gets is_downgrade
     *
     * @return string
     */
    public function getIsDowngrade()
    {
        return $this->container['is_downgrade'];
    }

    /**
     * Sets is_downgrade
     *
     * @param string $is_downgrade 
     *
     * @return $this
     */
    public function setIsDowngrade($is_downgrade)
    {
        $this->container['is_downgrade'] = $is_downgrade;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string $payment_method 
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets plan_classification
     *
     * @return string
     */
    public function getPlanClassification()
    {
        return $this->container['plan_classification'];
    }

    /**
     * Sets plan_classification
     *
     * @param string $plan_classification Identifies the type of plan. Examples include Business, Corporate, Enterprise, Free.
     *
     * @return $this
     */
    public function setPlanClassification($plan_classification)
    {
        $this->container['plan_classification'] = $plan_classification;

        return $this;
    }

    /**
     * Gets plan_end_date
     *
     * @return string
     */
    public function getPlanEndDate()
    {
        return $this->container['plan_end_date'];
    }

    /**
     * Sets plan_end_date
     *
     * @param string $plan_end_date The date that the current plan will end.
     *
     * @return $this
     */
    public function setPlanEndDate($plan_end_date)
    {
        $this->container['plan_end_date'] = $plan_end_date;

        return $this;
    }

    /**
     * Gets plan_name
     *
     * @return string
     */
    public function getPlanName()
    {
        return $this->container['plan_name'];
    }

    /**
     * Sets plan_name
     *
     * @param string $plan_name The name of the Billing Plan.
     *
     * @return $this
     */
    public function setPlanName($plan_name)
    {
        $this->container['plan_name'] = $plan_name;

        return $this;
    }

    /**
     * Gets plan_start_date
     *
     * @return string
     */
    public function getPlanStartDate()
    {
        return $this->container['plan_start_date'];
    }

    /**
     * Sets plan_start_date
     *
     * @param string $plan_start_date The date that the Account started using the current plan.
     *
     * @return $this
     */
    public function setPlanStartDate($plan_start_date)
    {
        $this->container['plan_start_date'] = $plan_start_date;

        return $this;
    }

    /**
     * Gets seats_allowed
     *
     * @return string
     */
    public function getSeatsAllowed()
    {
        return $this->container['seats_allowed'];
    }

    /**
     * Sets seats_allowed
     *
     * @param string $seats_allowed 
     *
     * @return $this
     */
    public function setSeatsAllowed($seats_allowed)
    {
        $this->container['seats_allowed'] = $seats_allowed;

        return $this;
    }

    /**
     * Gets seats_in_use
     *
     * @return string
     */
    public function getSeatsInUse()
    {
        return $this->container['seats_in_use'];
    }

    /**
     * Sets seats_in_use
     *
     * @param string $seats_in_use 
     *
     * @return $this
     */
    public function setSeatsInUse($seats_in_use)
    {
        $this->container['seats_in_use'] = $seats_in_use;

        return $this;
    }

    /**
     * Gets status21_cfr_part11
     *
     * @return string
     */
    public function getStatus21CfrPart11()
    {
        return $this->container['status21_cfr_part11'];
    }

    /**
     * Sets status21_cfr_part11
     *
     * @param string $status21_cfr_part11 
     *
     * @return $this
     */
    public function setStatus21CfrPart11($status21_cfr_part11)
    {
        $this->container['status21_cfr_part11'] = $status21_cfr_part11;

        return $this;
    }

    /**
     * Gets suspension_date
     *
     * @return string
     */
    public function getSuspensionDate()
    {
        return $this->container['suspension_date'];
    }

    /**
     * Sets suspension_date
     *
     * @param string $suspension_date 
     *
     * @return $this
     */
    public function setSuspensionDate($suspension_date)
    {
        $this->container['suspension_date'] = $suspension_date;

        return $this;
    }

    /**
     * Gets suspension_status
     *
     * @return string
     */
    public function getSuspensionStatus()
    {
        return $this->container['suspension_status'];
    }

    /**
     * Sets suspension_status
     *
     * @param string $suspension_status 
     *
     * @return $this
     */
    public function setSuspensionStatus($suspension_status)
    {
        $this->container['suspension_status'] = $suspension_status;

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

