<?php
/**
 * TaxIdentifier
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
 * TaxIdentifier Class Doc Comment
 *
 * @category Class
 * @description This type is used by the &lt;strong&gt;taxIdentifier&lt;/strong&gt; container that is returned in &lt;strong&gt;getOrder&lt;/strong&gt;. The &lt;strong&gt;taxIdentifier&lt;/strong&gt; container consists of taxpayer identification information for buyers from Italy, Spain, or Guatemala. It is currently only returned for orders occurring on the eBay Italy or eBay Spain marketplaces.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; Currently, the &lt;strong&gt;taxIdentifier&lt;/strong&gt; container is only returned in &lt;strong&gt;getOrder&lt;/strong&gt; and not in &lt;strong&gt;getOrders&lt;/strong&gt;. So, if a seller wanted to view a buyer&#x27;s tax information for a particular order returned in &lt;strong&gt;getOrders&lt;/strong&gt;, that seller would need to use the &lt;strong&gt;orderId&lt;/strong&gt; value for that particular order, and then run a &lt;strong&gt;getOrder&lt;/strong&gt; call against that order ID. &lt;/span&gt;
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaxIdentifier implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaxIdentifier';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'taxpayer_id' => 'string',
'tax_identifier_type' => 'string',
'issuing_country' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'taxpayer_id' => null,
'tax_identifier_type' => null,
'issuing_country' => null    ];

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
        'taxpayer_id' => 'taxpayerId',
'tax_identifier_type' => 'taxIdentifierType',
'issuing_country' => 'issuingCountry'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'taxpayer_id' => 'setTaxpayerId',
'tax_identifier_type' => 'setTaxIdentifierType',
'issuing_country' => 'setIssuingCountry'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'taxpayer_id' => 'getTaxpayerId',
'tax_identifier_type' => 'getTaxIdentifierType',
'issuing_country' => 'getIssuingCountry'    ];

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
        $this->container['taxpayer_id'] = isset($data['taxpayer_id']) ? $data['taxpayer_id'] : null;
        $this->container['tax_identifier_type'] = isset($data['tax_identifier_type']) ? $data['tax_identifier_type'] : null;
        $this->container['issuing_country'] = isset($data['issuing_country']) ? $data['issuing_country'] : null;
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
     * Gets taxpayer_id
     *
     * @return string
     */
    public function getTaxpayerId()
    {
        return $this->container['taxpayer_id'];
    }

    /**
     * Sets taxpayer_id
     *
     * @param string $taxpayer_id This value is the unique tax ID associated with the buyer. The type of tax identification is shown in the <strong>taxIdentifierType</strong> field.
     *
     * @return $this
     */
    public function setTaxpayerId($taxpayer_id)
    {
        $this->container['taxpayer_id'] = $taxpayer_id;

        return $this;
    }

    /**
     * Gets tax_identifier_type
     *
     * @return string
     */
    public function getTaxIdentifierType()
    {
        return $this->container['tax_identifier_type'];
    }

    /**
     * Sets tax_identifier_type
     *
     * @param string $tax_identifier_type This enumeration value indicates the type of tax identification being used for the buyer. The different tax types are defined in the <strong>TaxIdentifierTypeEnum</strong> type. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:TaxIdentifierTypeEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setTaxIdentifierType($tax_identifier_type)
    {
        $this->container['tax_identifier_type'] = $tax_identifier_type;

        return $this;
    }

    /**
     * Gets issuing_country
     *
     * @return string
     */
    public function getIssuingCountry()
    {
        return $this->container['issuing_country'];
    }

    /**
     * Sets issuing_country
     *
     * @param string $issuing_country This two-letter code indicates the country that issued the buyer's tax ID. The country that the two-letter code represents can be found in the <strong>CountryCodeEnum</strong> type, or in the  <a href=\"https://www.iso.org/iso-3166-country-codes.html \">ISO 3166</a> standard. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/ba:CountryCodeEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setIssuingCountry($issuing_country)
    {
        $this->container['issuing_country'] = $issuing_country;

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
