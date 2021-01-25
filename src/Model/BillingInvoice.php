<?php
/**
 * BillingInvoice
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
 * BillingInvoice Class Doc Comment
 *
 * @category    Class
 * @description Contains information about a billing invoice.
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BillingInvoice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'billingInvoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => 'string',
        'balance' => 'string',
        'due_date' => 'string',
        'invoice_id' => 'string',
        'invoice_items' => '\DocuSign\eSign\Model\BillingInvoiceItem[]',
        'invoice_number' => 'string',
        'invoice_uri' => 'string',
        'non_taxable_amount' => 'string',
        'pdf_available' => 'string',
        'taxable_amount' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount' => null,
        'balance' => null,
        'due_date' => null,
        'invoice_id' => null,
        'invoice_items' => null,
        'invoice_number' => null,
        'invoice_uri' => null,
        'non_taxable_amount' => null,
        'pdf_available' => null,
        'taxable_amount' => null
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
        'amount' => 'amount',
        'balance' => 'balance',
        'due_date' => 'dueDate',
        'invoice_id' => 'invoiceId',
        'invoice_items' => 'invoiceItems',
        'invoice_number' => 'invoiceNumber',
        'invoice_uri' => 'invoiceUri',
        'non_taxable_amount' => 'nonTaxableAmount',
        'pdf_available' => 'pdfAvailable',
        'taxable_amount' => 'taxableAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'balance' => 'setBalance',
        'due_date' => 'setDueDate',
        'invoice_id' => 'setInvoiceId',
        'invoice_items' => 'setInvoiceItems',
        'invoice_number' => 'setInvoiceNumber',
        'invoice_uri' => 'setInvoiceUri',
        'non_taxable_amount' => 'setNonTaxableAmount',
        'pdf_available' => 'setPdfAvailable',
        'taxable_amount' => 'setTaxableAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'balance' => 'getBalance',
        'due_date' => 'getDueDate',
        'invoice_id' => 'getInvoiceId',
        'invoice_items' => 'getInvoiceItems',
        'invoice_number' => 'getInvoiceNumber',
        'invoice_uri' => 'getInvoiceUri',
        'non_taxable_amount' => 'getNonTaxableAmount',
        'pdf_available' => 'getPdfAvailable',
        'taxable_amount' => 'getTaxableAmount'
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['invoice_id'] = isset($data['invoice_id']) ? $data['invoice_id'] : null;
        $this->container['invoice_items'] = isset($data['invoice_items']) ? $data['invoice_items'] : null;
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
        $this->container['invoice_uri'] = isset($data['invoice_uri']) ? $data['invoice_uri'] : null;
        $this->container['non_taxable_amount'] = isset($data['non_taxable_amount']) ? $data['non_taxable_amount'] : null;
        $this->container['pdf_available'] = isset($data['pdf_available']) ? $data['pdf_available'] : null;
        $this->container['taxable_amount'] = isset($data['taxable_amount']) ? $data['taxable_amount'] : null;
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
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount Reserved: TBD
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return string
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param string $balance Reserved: TBD
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return string
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param string $due_date Reserved: TBD
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets invoice_id
     *
     * @return string
     */
    public function getInvoiceId()
    {
        return $this->container['invoice_id'];
    }

    /**
     * Sets invoice_id
     *
     * @param string $invoice_id Reserved: TBD
     *
     * @return $this
     */
    public function setInvoiceId($invoice_id)
    {
        $this->container['invoice_id'] = $invoice_id;

        return $this;
    }

    /**
     * Gets invoice_items
     *
     * @return \DocuSign\eSign\Model\BillingInvoiceItem[]
     */
    public function getInvoiceItems()
    {
        return $this->container['invoice_items'];
    }

    /**
     * Sets invoice_items
     *
     * @param \DocuSign\eSign\Model\BillingInvoiceItem[] $invoice_items Reserved: TBD
     *
     * @return $this
     */
    public function setInvoiceItems($invoice_items)
    {
        $this->container['invoice_items'] = $invoice_items;

        return $this;
    }

    /**
     * Gets invoice_number
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param string $invoice_number Reserved: TBD
     *
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets invoice_uri
     *
     * @return string
     */
    public function getInvoiceUri()
    {
        return $this->container['invoice_uri'];
    }

    /**
     * Sets invoice_uri
     *
     * @param string $invoice_uri Contains a URI for an endpoint that you can use to retrieve invoice information.
     *
     * @return $this
     */
    public function setInvoiceUri($invoice_uri)
    {
        $this->container['invoice_uri'] = $invoice_uri;

        return $this;
    }

    /**
     * Gets non_taxable_amount
     *
     * @return string
     */
    public function getNonTaxableAmount()
    {
        return $this->container['non_taxable_amount'];
    }

    /**
     * Sets non_taxable_amount
     *
     * @param string $non_taxable_amount 
     *
     * @return $this
     */
    public function setNonTaxableAmount($non_taxable_amount)
    {
        $this->container['non_taxable_amount'] = $non_taxable_amount;

        return $this;
    }

    /**
     * Gets pdf_available
     *
     * @return string
     */
    public function getPdfAvailable()
    {
        return $this->container['pdf_available'];
    }

    /**
     * Sets pdf_available
     *
     * @param string $pdf_available 
     *
     * @return $this
     */
    public function setPdfAvailable($pdf_available)
    {
        $this->container['pdf_available'] = $pdf_available;

        return $this;
    }

    /**
     * Gets taxable_amount
     *
     * @return string
     */
    public function getTaxableAmount()
    {
        return $this->container['taxable_amount'];
    }

    /**
     * Sets taxable_amount
     *
     * @param string $taxable_amount 
     *
     * @return $this
     */
    public function setTaxableAmount($taxable_amount)
    {
        $this->container['taxable_amount'] = $taxable_amount;

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

