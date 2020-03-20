<?php
/**
 * OrderFlatPrice
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Shopware Sales-Channel API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.18
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * OrderFlatPrice Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderFlatPrice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'order_flat_price';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'net_price' => 'float',
'total_price' => 'float',
'calculated_taxes' => 'object',
'tax_rules' => 'object',
'position_price' => 'float',
'tax_status' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'net_price' => 'float',
'total_price' => 'float',
'calculated_taxes' => null,
'tax_rules' => null,
'position_price' => 'float',
'tax_status' => null    ];

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
        'net_price' => 'netPrice',
'total_price' => 'totalPrice',
'calculated_taxes' => 'calculatedTaxes',
'tax_rules' => 'taxRules',
'position_price' => 'positionPrice',
'tax_status' => 'taxStatus'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'net_price' => 'setNetPrice',
'total_price' => 'setTotalPrice',
'calculated_taxes' => 'setCalculatedTaxes',
'tax_rules' => 'setTaxRules',
'position_price' => 'setPositionPrice',
'tax_status' => 'setTaxStatus'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'net_price' => 'getNetPrice',
'total_price' => 'getTotalPrice',
'calculated_taxes' => 'getCalculatedTaxes',
'tax_rules' => 'getTaxRules',
'position_price' => 'getPositionPrice',
'tax_status' => 'getTaxStatus'    ];

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
        $this->container['net_price'] = isset($data['net_price']) ? $data['net_price'] : null;
        $this->container['total_price'] = isset($data['total_price']) ? $data['total_price'] : null;
        $this->container['calculated_taxes'] = isset($data['calculated_taxes']) ? $data['calculated_taxes'] : null;
        $this->container['tax_rules'] = isset($data['tax_rules']) ? $data['tax_rules'] : null;
        $this->container['position_price'] = isset($data['position_price']) ? $data['position_price'] : null;
        $this->container['tax_status'] = isset($data['tax_status']) ? $data['tax_status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['net_price'] === null) {
            $invalidProperties[] = "'net_price' can't be null";
        }
        if ($this->container['total_price'] === null) {
            $invalidProperties[] = "'total_price' can't be null";
        }
        if ($this->container['position_price'] === null) {
            $invalidProperties[] = "'position_price' can't be null";
        }
        if ($this->container['tax_status'] === null) {
            $invalidProperties[] = "'tax_status' can't be null";
        }
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
     * Gets net_price
     *
     * @return float
     */
    public function getNetPrice()
    {
        return $this->container['net_price'];
    }

    /**
     * Sets net_price
     *
     * @param float $net_price net_price
     *
     * @return $this
     */
    public function setNetPrice($net_price)
    {
        $this->container['net_price'] = $net_price;

        return $this;
    }

    /**
     * Gets total_price
     *
     * @return float
     */
    public function getTotalPrice()
    {
        return $this->container['total_price'];
    }

    /**
     * Sets total_price
     *
     * @param float $total_price total_price
     *
     * @return $this
     */
    public function setTotalPrice($total_price)
    {
        $this->container['total_price'] = $total_price;

        return $this;
    }

    /**
     * Gets calculated_taxes
     *
     * @return object
     */
    public function getCalculatedTaxes()
    {
        return $this->container['calculated_taxes'];
    }

    /**
     * Sets calculated_taxes
     *
     * @param object $calculated_taxes calculated_taxes
     *
     * @return $this
     */
    public function setCalculatedTaxes($calculated_taxes)
    {
        $this->container['calculated_taxes'] = $calculated_taxes;

        return $this;
    }

    /**
     * Gets tax_rules
     *
     * @return object
     */
    public function getTaxRules()
    {
        return $this->container['tax_rules'];
    }

    /**
     * Sets tax_rules
     *
     * @param object $tax_rules tax_rules
     *
     * @return $this
     */
    public function setTaxRules($tax_rules)
    {
        $this->container['tax_rules'] = $tax_rules;

        return $this;
    }

    /**
     * Gets position_price
     *
     * @return float
     */
    public function getPositionPrice()
    {
        return $this->container['position_price'];
    }

    /**
     * Sets position_price
     *
     * @param float $position_price position_price
     *
     * @return $this
     */
    public function setPositionPrice($position_price)
    {
        $this->container['position_price'] = $position_price;

        return $this;
    }

    /**
     * Gets tax_status
     *
     * @return string
     */
    public function getTaxStatus()
    {
        return $this->container['tax_status'];
    }

    /**
     * Sets tax_status
     *
     * @param string $tax_status tax_status
     *
     * @return $this
     */
    public function setTaxStatus($tax_status)
    {
        $this->container['tax_status'] = $tax_status;

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
