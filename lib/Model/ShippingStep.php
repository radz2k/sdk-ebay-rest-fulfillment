<?php
/**
 * ShippingStep
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
 * ShippingStep Class Doc Comment
 *
 * @category Class
 * @description This type contains shipping information for a fulfillment, including the shipping carrier, the shipping service option, the shipment destination, and the Global Shipping Program reference ID.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShippingStep implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShippingStep';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipping_carrier_code' => 'string',
'shipping_service_code' => 'string',
'ship_to' => '\Swagger\Client\Model\ExtendedContact',
'ship_to_reference_id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipping_carrier_code' => null,
'shipping_service_code' => null,
'ship_to' => null,
'ship_to_reference_id' => null    ];

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
        'shipping_carrier_code' => 'shippingCarrierCode',
'shipping_service_code' => 'shippingServiceCode',
'ship_to' => 'shipTo',
'ship_to_reference_id' => 'shipToReferenceId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipping_carrier_code' => 'setShippingCarrierCode',
'shipping_service_code' => 'setShippingServiceCode',
'ship_to' => 'setShipTo',
'ship_to_reference_id' => 'setShipToReferenceId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipping_carrier_code' => 'getShippingCarrierCode',
'shipping_service_code' => 'getShippingServiceCode',
'ship_to' => 'getShipTo',
'ship_to_reference_id' => 'getShipToReferenceId'    ];

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
        $this->container['shipping_carrier_code'] = isset($data['shipping_carrier_code']) ? $data['shipping_carrier_code'] : null;
        $this->container['shipping_service_code'] = isset($data['shipping_service_code']) ? $data['shipping_service_code'] : null;
        $this->container['ship_to'] = isset($data['ship_to']) ? $data['ship_to'] : null;
        $this->container['ship_to_reference_id'] = isset($data['ship_to_reference_id']) ? $data['ship_to_reference_id'] : null;
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
     * Gets shipping_carrier_code
     *
     * @return string
     */
    public function getShippingCarrierCode()
    {
        return $this->container['shipping_carrier_code'];
    }

    /**
     * Sets shipping_carrier_code
     *
     * @param string $shipping_carrier_code The unique identifier of the shipping carrier being used to ship the line item. <br><br><span class=\"tablenote\"><strong>Note:</strong> The Trading API's <a href=\"https://developer.ebay.com/devzone/XML/docs/Reference/eBay/GeteBayDetails.html \" target=\"_blank\">GeteBayDetails</a> call can be used to retrieve the latest shipping carrier and shipping service option enumeration values.</span>
     *
     * @return $this
     */
    public function setShippingCarrierCode($shipping_carrier_code)
    {
        $this->container['shipping_carrier_code'] = $shipping_carrier_code;

        return $this;
    }

    /**
     * Gets shipping_service_code
     *
     * @return string
     */
    public function getShippingServiceCode()
    {
        return $this->container['shipping_service_code'];
    }

    /**
     * Sets shipping_service_code
     *
     * @param string $shipping_service_code The unique identifier of the shipping service option being used to ship the line item.<br><br><span class=\"tablenote\"><strong>Note:</strong> Use the Trading API's <a href=\"/devzone/XML/docs/Reference/eBay/GeteBayDetails.html \" target=\"_blank\">GeteBayDetails</a> call to retrieve the latest shipping carrier and shipping service option enumeration values. When making the <a href=\"/devzone/XML/docs/Reference/eBay/GeteBayDetails.html \" target=\"_blank\">GeteBayDetails</a> call, include the <strong>DetailName</strong> field in the request payload and set its value to <code>ShippingServiceDetails</code>. Each valid shipping service option (returned in <strong>ShippingServiceDetails.ShippingService</strong> field) and corresponding shipping carrier (returned in <strong>ShippingServiceDetails.ShippingCarrier</strong> field) is returned in response payload.</span>
     *
     * @return $this
     */
    public function setShippingServiceCode($shipping_service_code)
    {
        $this->container['shipping_service_code'] = $shipping_service_code;

        return $this;
    }

    /**
     * Gets ship_to
     *
     * @return \Swagger\Client\Model\ExtendedContact
     */
    public function getShipTo()
    {
        return $this->container['ship_to'];
    }

    /**
     * Sets ship_to
     *
     * @param \Swagger\Client\Model\ExtendedContact $ship_to ship_to
     *
     * @return $this
     */
    public function setShipTo($ship_to)
    {
        $this->container['ship_to'] = $ship_to;

        return $this;
    }

    /**
     * Gets ship_to_reference_id
     *
     * @return string
     */
    public function getShipToReferenceId()
    {
        return $this->container['ship_to_reference_id'];
    }

    /**
     * Sets ship_to_reference_id
     *
     * @param string $ship_to_reference_id This is the unique identifer of the Global Shipping Program (GSP) shipment. This field is only returned if the line item is being shipped via GSP (the value of the <b>fulfillmentStartInstructions.ebaySupportedFulfillment</b> field will be <code>true</code>. The international shipping provider uses the <b>shipToReferenceId</b> value as the primary reference number to retrieve the relevant details about the buyer, the order, and the fulfillment, so the shipment can be completed. <br><br>Sellers must include this value on the shipping label immediately above the street address of the international shipping provider. <br><br>Example: \"Reference #1234567890123456\" <br><br><span class=\"tablenote\"><strong>Note:</strong> This value is the same as the <b>ShipToAddress.ReferenceID</b> value returned by the Trading API's GetOrders call.</span>
     *
     * @return $this
     */
    public function setShipToReferenceId($ship_to_reference_id)
    {
        $this->container['ship_to_reference_id'] = $ship_to_reference_id;

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
