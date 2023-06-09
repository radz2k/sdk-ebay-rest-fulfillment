<?php
/**
 * TaxIdentifierTest
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
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

/**
 * TaxIdentifierTest Class Doc Comment
 *
 * @category    Class
 * @description This type is used by the &lt;strong&gt;taxIdentifier&lt;/strong&gt; container that is returned in &lt;strong&gt;getOrder&lt;/strong&gt;. The &lt;strong&gt;taxIdentifier&lt;/strong&gt; container consists of taxpayer identification information for buyers from Italy, Spain, or Guatemala. It is currently only returned for orders occurring on the eBay Italy or eBay Spain marketplaces.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; Currently, the &lt;strong&gt;taxIdentifier&lt;/strong&gt; container is only returned in &lt;strong&gt;getOrder&lt;/strong&gt; and not in &lt;strong&gt;getOrders&lt;/strong&gt;. So, if a seller wanted to view a buyer&#x27;s tax information for a particular order returned in &lt;strong&gt;getOrders&lt;/strong&gt;, that seller would need to use the &lt;strong&gt;orderId&lt;/strong&gt; value for that particular order, and then run a &lt;strong&gt;getOrder&lt;/strong&gt; call against that order ID. &lt;/span&gt;
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TaxIdentifierTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "TaxIdentifier"
     */
    public function testTaxIdentifier()
    {
    }

    /**
     * Test attribute "taxpayer_id"
     */
    public function testPropertyTaxpayerId()
    {
    }

    /**
     * Test attribute "tax_identifier_type"
     */
    public function testPropertyTaxIdentifierType()
    {
    }

    /**
     * Test attribute "issuing_country"
     */
    public function testPropertyIssuingCountry()
    {
    }
}
