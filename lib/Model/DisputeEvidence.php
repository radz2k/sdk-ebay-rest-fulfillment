<?php
/**
 * DisputeEvidence
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
 * DisputeEvidence Class Doc Comment
 *
 * @category Class
 * @description This type is used by the &lt;strong&gt;evidence&lt;/strong&gt; array that is returned in the &lt;strong&gt;getPaymentDispute&lt;/strong&gt; response if one or more evidential documents are associated with the payment dispute.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DisputeEvidence implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DisputeEvidence';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'evidence_id' => 'string',
'evidence_type' => 'string',
'files' => '\Swagger\Client\Model\FileInfo[]',
'line_items' => '\Swagger\Client\Model\OrderLineItems[]',
'provided_date' => 'string',
'request_date' => 'string',
'respond_by_date' => 'string',
'shipment_tracking' => '\Swagger\Client\Model\TrackingInfo[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'evidence_id' => null,
'evidence_type' => null,
'files' => null,
'line_items' => null,
'provided_date' => null,
'request_date' => null,
'respond_by_date' => null,
'shipment_tracking' => null    ];

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
        'evidence_id' => 'evidenceId',
'evidence_type' => 'evidenceType',
'files' => 'files',
'line_items' => 'lineItems',
'provided_date' => 'providedDate',
'request_date' => 'requestDate',
'respond_by_date' => 'respondByDate',
'shipment_tracking' => 'shipmentTracking'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'evidence_id' => 'setEvidenceId',
'evidence_type' => 'setEvidenceType',
'files' => 'setFiles',
'line_items' => 'setLineItems',
'provided_date' => 'setProvidedDate',
'request_date' => 'setRequestDate',
'respond_by_date' => 'setRespondByDate',
'shipment_tracking' => 'setShipmentTracking'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'evidence_id' => 'getEvidenceId',
'evidence_type' => 'getEvidenceType',
'files' => 'getFiles',
'line_items' => 'getLineItems',
'provided_date' => 'getProvidedDate',
'request_date' => 'getRequestDate',
'respond_by_date' => 'getRespondByDate',
'shipment_tracking' => 'getShipmentTracking'    ];

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
        $this->container['evidence_id'] = isset($data['evidence_id']) ? $data['evidence_id'] : null;
        $this->container['evidence_type'] = isset($data['evidence_type']) ? $data['evidence_type'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['line_items'] = isset($data['line_items']) ? $data['line_items'] : null;
        $this->container['provided_date'] = isset($data['provided_date']) ? $data['provided_date'] : null;
        $this->container['request_date'] = isset($data['request_date']) ? $data['request_date'] : null;
        $this->container['respond_by_date'] = isset($data['respond_by_date']) ? $data['respond_by_date'] : null;
        $this->container['shipment_tracking'] = isset($data['shipment_tracking']) ? $data['shipment_tracking'] : null;
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
     * Gets evidence_id
     *
     * @return string
     */
    public function getEvidenceId()
    {
        return $this->container['evidence_id'];
    }

    /**
     * Sets evidence_id
     *
     * @param string $evidence_id Unique identifier of the evidential file set. Potentially, each evidential file set can have more than one file, that is why there is this file set identifier, and then an identifier for each file within this file set.
     *
     * @return $this
     */
    public function setEvidenceId($evidence_id)
    {
        $this->container['evidence_id'] = $evidence_id;

        return $this;
    }

    /**
     * Gets evidence_type
     *
     * @return string
     */
    public function getEvidenceType()
    {
        return $this->container['evidence_type'];
    }

    /**
     * Sets evidence_type
     *
     * @param string $evidence_type This enumeration value shows the type of evidential file provided. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:EvidenceTypeEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setEvidenceType($evidence_type)
    {
        $this->container['evidence_type'] = $evidence_type;

        return $this;
    }

    /**
     * Gets files
     *
     * @return \Swagger\Client\Model\FileInfo[]
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param \Swagger\Client\Model\FileInfo[] $files This array shows the name, ID, file type, and upload date for each provided file.
     *
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \Swagger\Client\Model\OrderLineItems[]
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \Swagger\Client\Model\OrderLineItems[] $line_items This array shows one or more order line items associated with the evidential document that has been provided.
     *
     * @return $this
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets provided_date
     *
     * @return string
     */
    public function getProvidedDate()
    {
        return $this->container['provided_date'];
    }

    /**
     * Sets provided_date
     *
     * @param string $provided_date The timestamp in this field shows the date/time when the seller provided a requested evidential document to eBay. <br><br>The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     *
     * @return $this
     */
    public function setProvidedDate($provided_date)
    {
        $this->container['provided_date'] = $provided_date;

        return $this;
    }

    /**
     * Gets request_date
     *
     * @return string
     */
    public function getRequestDate()
    {
        return $this->container['request_date'];
    }

    /**
     * Sets request_date
     *
     * @param string $request_date The timestamp in this field shows the date/time when eBay requested the evidential document from the seller in response to a payment dispute. <br><br>The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     *
     * @return $this
     */
    public function setRequestDate($request_date)
    {
        $this->container['request_date'] = $request_date;

        return $this;
    }

    /**
     * Gets respond_by_date
     *
     * @return string
     */
    public function getRespondByDate()
    {
        return $this->container['respond_by_date'];
    }

    /**
     * Sets respond_by_date
     *
     * @param string $respond_by_date The timestamp in this field shows the date/time when the seller was expected to provide a requested evidential document to eBay.  <br><br>The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     *
     * @return $this
     */
    public function setRespondByDate($respond_by_date)
    {
        $this->container['respond_by_date'] = $respond_by_date;

        return $this;
    }

    /**
     * Gets shipment_tracking
     *
     * @return \Swagger\Client\Model\TrackingInfo[]
     */
    public function getShipmentTracking()
    {
        return $this->container['shipment_tracking'];
    }

    /**
     * Sets shipment_tracking
     *
     * @param \Swagger\Client\Model\TrackingInfo[] $shipment_tracking This array shows the shipping carrier and shipment tracking number associated with each shipment package of the order. This array is returned if the seller has provided shipment tracking information as evidence to support <code>PROOF_OF_DELIVERY</code>.
     *
     * @return $this
     */
    public function setShipmentTracking($shipment_tracking)
    {
        $this->container['shipment_tracking'] = $shipment_tracking;

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
