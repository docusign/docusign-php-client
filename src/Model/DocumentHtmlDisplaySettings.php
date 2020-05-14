<?php
/**
 * DocumentHtmlDisplaySettings
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
 * DocumentHtmlDisplaySettings Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DocumentHtmlDisplaySettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'documentHtmlDisplaySettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cell_style' => 'string',
        'collapsible_settings' => '\DocuSign\eSign\Model\DocumentHtmlCollapsibleDisplaySettings',
        'display' => 'string',
        'display_label' => 'string',
        'display_order' => 'int',
        'display_page_number' => 'int',
        'hide_label_when_opened' => 'bool',
        'inline_outer_style' => 'string',
        'label_when_opened' => 'string',
        'pre_label' => 'string',
        'scroll_to_top_when_opened' => 'bool',
        'table_style' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cell_style' => null,
        'collapsible_settings' => null,
        'display' => null,
        'display_label' => null,
        'display_order' => 'int32',
        'display_page_number' => 'int32',
        'hide_label_when_opened' => null,
        'inline_outer_style' => null,
        'label_when_opened' => null,
        'pre_label' => null,
        'scroll_to_top_when_opened' => null,
        'table_style' => null
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
        'cell_style' => 'cellStyle',
        'collapsible_settings' => 'collapsibleSettings',
        'display' => 'display',
        'display_label' => 'displayLabel',
        'display_order' => 'displayOrder',
        'display_page_number' => 'displayPageNumber',
        'hide_label_when_opened' => 'hideLabelWhenOpened',
        'inline_outer_style' => 'inlineOuterStyle',
        'label_when_opened' => 'labelWhenOpened',
        'pre_label' => 'preLabel',
        'scroll_to_top_when_opened' => 'scrollToTopWhenOpened',
        'table_style' => 'tableStyle'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cell_style' => 'setCellStyle',
        'collapsible_settings' => 'setCollapsibleSettings',
        'display' => 'setDisplay',
        'display_label' => 'setDisplayLabel',
        'display_order' => 'setDisplayOrder',
        'display_page_number' => 'setDisplayPageNumber',
        'hide_label_when_opened' => 'setHideLabelWhenOpened',
        'inline_outer_style' => 'setInlineOuterStyle',
        'label_when_opened' => 'setLabelWhenOpened',
        'pre_label' => 'setPreLabel',
        'scroll_to_top_when_opened' => 'setScrollToTopWhenOpened',
        'table_style' => 'setTableStyle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cell_style' => 'getCellStyle',
        'collapsible_settings' => 'getCollapsibleSettings',
        'display' => 'getDisplay',
        'display_label' => 'getDisplayLabel',
        'display_order' => 'getDisplayOrder',
        'display_page_number' => 'getDisplayPageNumber',
        'hide_label_when_opened' => 'getHideLabelWhenOpened',
        'inline_outer_style' => 'getInlineOuterStyle',
        'label_when_opened' => 'getLabelWhenOpened',
        'pre_label' => 'getPreLabel',
        'scroll_to_top_when_opened' => 'getScrollToTopWhenOpened',
        'table_style' => 'getTableStyle'
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
        $this->container['cell_style'] = isset($data['cell_style']) ? $data['cell_style'] : null;
        $this->container['collapsible_settings'] = isset($data['collapsible_settings']) ? $data['collapsible_settings'] : null;
        $this->container['display'] = isset($data['display']) ? $data['display'] : null;
        $this->container['display_label'] = isset($data['display_label']) ? $data['display_label'] : null;
        $this->container['display_order'] = isset($data['display_order']) ? $data['display_order'] : null;
        $this->container['display_page_number'] = isset($data['display_page_number']) ? $data['display_page_number'] : null;
        $this->container['hide_label_when_opened'] = isset($data['hide_label_when_opened']) ? $data['hide_label_when_opened'] : null;
        $this->container['inline_outer_style'] = isset($data['inline_outer_style']) ? $data['inline_outer_style'] : null;
        $this->container['label_when_opened'] = isset($data['label_when_opened']) ? $data['label_when_opened'] : null;
        $this->container['pre_label'] = isset($data['pre_label']) ? $data['pre_label'] : null;
        $this->container['scroll_to_top_when_opened'] = isset($data['scroll_to_top_when_opened']) ? $data['scroll_to_top_when_opened'] : null;
        $this->container['table_style'] = isset($data['table_style']) ? $data['table_style'] : null;
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
     * Gets cell_style
     *
     * @return string
     */
    public function getCellStyle()
    {
        return $this->container['cell_style'];
    }

    /**
     * Sets cell_style
     *
     * @param string $cell_style 
     *
     * @return $this
     */
    public function setCellStyle($cell_style)
    {
        $this->container['cell_style'] = $cell_style;

        return $this;
    }

    /**
     * Gets collapsible_settings
     *
     * @return \DocuSign\eSign\Model\DocumentHtmlCollapsibleDisplaySettings
     */
    public function getCollapsibleSettings()
    {
        return $this->container['collapsible_settings'];
    }

    /**
     * Sets collapsible_settings
     *
     * @param \DocuSign\eSign\Model\DocumentHtmlCollapsibleDisplaySettings $collapsible_settings collapsible_settings
     *
     * @return $this
     */
    public function setCollapsibleSettings($collapsible_settings)
    {
        $this->container['collapsible_settings'] = $collapsible_settings;

        return $this;
    }

    /**
     * Gets display
     *
     * @return string
     */
    public function getDisplay()
    {
        return $this->container['display'];
    }

    /**
     * Sets display
     *
     * @param string $display 
     *
     * @return $this
     */
    public function setDisplay($display)
    {
        $this->container['display'] = $display;

        return $this;
    }

    /**
     * Gets display_label
     *
     * @return string
     */
    public function getDisplayLabel()
    {
        return $this->container['display_label'];
    }

    /**
     * Sets display_label
     *
     * @param string $display_label 
     *
     * @return $this
     */
    public function setDisplayLabel($display_label)
    {
        $this->container['display_label'] = $display_label;

        return $this;
    }

    /**
     * Gets display_order
     *
     * @return int
     */
    public function getDisplayOrder()
    {
        return $this->container['display_order'];
    }

    /**
     * Sets display_order
     *
     * @param int $display_order 
     *
     * @return $this
     */
    public function setDisplayOrder($display_order)
    {
        $this->container['display_order'] = $display_order;

        return $this;
    }

    /**
     * Gets display_page_number
     *
     * @return int
     */
    public function getDisplayPageNumber()
    {
        return $this->container['display_page_number'];
    }

    /**
     * Sets display_page_number
     *
     * @param int $display_page_number 
     *
     * @return $this
     */
    public function setDisplayPageNumber($display_page_number)
    {
        $this->container['display_page_number'] = $display_page_number;

        return $this;
    }

    /**
     * Gets hide_label_when_opened
     *
     * @return bool
     */
    public function getHideLabelWhenOpened()
    {
        return $this->container['hide_label_when_opened'];
    }

    /**
     * Sets hide_label_when_opened
     *
     * @param bool $hide_label_when_opened 
     *
     * @return $this
     */
    public function setHideLabelWhenOpened($hide_label_when_opened)
    {
        $this->container['hide_label_when_opened'] = $hide_label_when_opened;

        return $this;
    }

    /**
     * Gets inline_outer_style
     *
     * @return string
     */
    public function getInlineOuterStyle()
    {
        return $this->container['inline_outer_style'];
    }

    /**
     * Sets inline_outer_style
     *
     * @param string $inline_outer_style 
     *
     * @return $this
     */
    public function setInlineOuterStyle($inline_outer_style)
    {
        $this->container['inline_outer_style'] = $inline_outer_style;

        return $this;
    }

    /**
     * Gets label_when_opened
     *
     * @return string
     */
    public function getLabelWhenOpened()
    {
        return $this->container['label_when_opened'];
    }

    /**
     * Sets label_when_opened
     *
     * @param string $label_when_opened 
     *
     * @return $this
     */
    public function setLabelWhenOpened($label_when_opened)
    {
        $this->container['label_when_opened'] = $label_when_opened;

        return $this;
    }

    /**
     * Gets pre_label
     *
     * @return string
     */
    public function getPreLabel()
    {
        return $this->container['pre_label'];
    }

    /**
     * Sets pre_label
     *
     * @param string $pre_label 
     *
     * @return $this
     */
    public function setPreLabel($pre_label)
    {
        $this->container['pre_label'] = $pre_label;

        return $this;
    }

    /**
     * Gets scroll_to_top_when_opened
     *
     * @return bool
     */
    public function getScrollToTopWhenOpened()
    {
        return $this->container['scroll_to_top_when_opened'];
    }

    /**
     * Sets scroll_to_top_when_opened
     *
     * @param bool $scroll_to_top_when_opened 
     *
     * @return $this
     */
    public function setScrollToTopWhenOpened($scroll_to_top_when_opened)
    {
        $this->container['scroll_to_top_when_opened'] = $scroll_to_top_when_opened;

        return $this;
    }

    /**
     * Gets table_style
     *
     * @return string
     */
    public function getTableStyle()
    {
        return $this->container['table_style'];
    }

    /**
     * Sets table_style
     *
     * @param string $table_style 
     *
     * @return $this
     */
    public function setTableStyle($table_style)
    {
        $this->container['table_style'] = $table_style;

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

