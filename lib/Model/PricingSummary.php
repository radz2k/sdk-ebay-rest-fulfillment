<?php
/**
 * PricingSummary
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Fulfillment API
 *
 * Use the Fulfillment API to complete the process of packaging, addressing, handling, and shipping each order on behalf of the seller, in accordance with the payment method and timing specified at checkout.
 *
 * OpenAPI spec version: v1.19.19
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.41
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
 * PricingSummary Class Doc Comment
 *
 * @category Class
 * @description This type contains a summary of cumulative costs and charges for all line items of an order, including item price, price adjustments, sales taxes, delivery costs, and order discounts.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PricingSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PricingSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'adjustment' => '\Swagger\Client\Model\Amount',
'delivery_cost' => '\Swagger\Client\Model\Amount',
'delivery_discount' => '\Swagger\Client\Model\Amount',
'fee' => '\Swagger\Client\Model\Amount',
'price_discount' => '\Swagger\Client\Model\Amount',
'price_subtotal' => '\Swagger\Client\Model\Amount',
'tax' => '\Swagger\Client\Model\Amount',
'total' => '\Swagger\Client\Model\Amount'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'adjustment' => null,
'delivery_cost' => null,
'delivery_discount' => null,
'fee' => null,
'price_discount' => null,
'price_subtotal' => null,
'tax' => null,
'total' => null    ];

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
        'adjustment' => 'adjustment',
'delivery_cost' => 'deliveryCost',
'delivery_discount' => 'deliveryDiscount',
'fee' => 'fee',
'price_discount' => 'priceDiscount',
'price_subtotal' => 'priceSubtotal',
'tax' => 'tax',
'total' => 'total'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adjustment' => 'setAdjustment',
'delivery_cost' => 'setDeliveryCost',
'delivery_discount' => 'setDeliveryDiscount',
'fee' => 'setFee',
'price_discount' => 'setPriceDiscount',
'price_subtotal' => 'setPriceSubtotal',
'tax' => 'setTax',
'total' => 'setTotal'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adjustment' => 'getAdjustment',
'delivery_cost' => 'getDeliveryCost',
'delivery_discount' => 'getDeliveryDiscount',
'fee' => 'getFee',
'price_discount' => 'getPriceDiscount',
'price_subtotal' => 'getPriceSubtotal',
'tax' => 'getTax',
'total' => 'getTotal'    ];

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
        $this->container['adjustment'] = isset($data['adjustment']) ? $data['adjustment'] : null;
        $this->container['delivery_cost'] = isset($data['delivery_cost']) ? $data['delivery_cost'] : null;
        $this->container['delivery_discount'] = isset($data['delivery_discount']) ? $data['delivery_discount'] : null;
        $this->container['fee'] = isset($data['fee']) ? $data['fee'] : null;
        $this->container['price_discount'] = isset($data['price_discount']) ? $data['price_discount'] : null;
        $this->container['price_subtotal'] = isset($data['price_subtotal']) ? $data['price_subtotal'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
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
     * Gets adjustment
     *
     * @return \Swagger\Client\Model\Amount
     */
    public function getAdjustment()
    {
        return $this->container['adjustment'];
    }

    /**
     * Sets adjustment
     *
     * @param \Swagger\Client\Model\Amount $adjustment adjustment
     *
     * @return $this
     */
    public function setAdjustment($adjustment)
    {
        $this->container['adjustment'] = $adjustment;

        return $this;
    }

    /**
     * Gets delivery_cost
     *
     * @return \Swagger\Client\Model\Amount
     */
    public function getDeliveryCost()
    {
        return $this->container['delivery_cost'];
    }

    /**
     * Sets delivery_cost
     *
     * @param \Swagger\Client\Model\Amount $delivery_cost delivery_cost
     *
     * @return $this
     */
    public function setDeliveryCost($delivery_cost)
    {
        $this->container['delivery_cost'] = $delivery_cost;

        return $this;
    }

    /**
     * Gets delivery_discount
     *
     * @return \Swagger\Client\Model\Amount
     */
    public function getDeliveryDiscount()
    {
        return $this->container['delivery_discount'];
    }

    /**
     * Sets delivery_discount
     *
     * @param \Swagger\Client\Model\Amount $delivery_discount delivery_discount
     *
     * @return $this
     */
    public function setDeliveryDiscount($delivery_discount)
    {
        $this->container['delivery_discount'] = $delivery_discount;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return \Swagger\Client\Model\Amount
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param \Swagger\Client\Model\Amount $fee fee
     *
     * @return $this
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets price_discount
     *
     * @return \Swagger\Client\Model\Amount
     */
    public function getPriceDiscount()
    {
        return $this->container['price_discount'];
    }

    /**
     * Sets price_discount
     *
     * @param \Swagger\Client\Model\Amount $price_discount price_discount
     *
     * @return $this
     */
    public function setPriceDiscount($price_discount)
    {
        $this->container['price_discount'] = $price_discount;

        return $this;
    }

    /**
     * Gets price_subtotal
     *
     * @return \Swagger\Client\Model\Amount
     */
    public function getPriceSubtotal()
    {
        return $this->container['price_subtotal'];
    }

    /**
     * Sets price_subtotal
     *
     * @param \Swagger\Client\Model\Amount $price_subtotal price_subtotal
     *
     * @return $this
     */
    public function setPriceSubtotal($price_subtotal)
    {
        $this->container['price_subtotal'] = $price_subtotal;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return \Swagger\Client\Model\Amount
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param \Swagger\Client\Model\Amount $tax tax
     *
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets total
     *
     * @return \Swagger\Client\Model\Amount
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param \Swagger\Client\Model\Amount $total total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
