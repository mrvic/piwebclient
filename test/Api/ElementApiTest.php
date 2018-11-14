<?php
/**
 * ElementApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PI Web API 2017 Swagger Spec
 *
 * Swagger Spec file that describes PI Web API
 *
 * OpenAPI spec version: 1.9.0.235
 * Contact: techsupport@osisoft.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Client;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * ElementApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ElementApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
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
     * Test case for elementAddReferencedElement
     *
     * Add a reference to an existing element to the child elements collection..
     *
     */
    public function testElementAddReferencedElement()
    {

    }

    /**
     * Test case for elementCreateAnalysis
     *
     * Create an Analysis..
     *
     */
    public function testElementCreateAnalysis()
    {

    }

    /**
     * Test case for elementCreateAttribute
     *
     * Create a new attribute of the specified element..
     *
     */
    public function testElementCreateAttribute()
    {

    }

    /**
     * Test case for elementCreateConfig
     *
     * Executes the create configuration function of the data references found within the attributes of the element, and optionally, its children..
     *
     */
    public function testElementCreateConfig()
    {

    }

    /**
     * Test case for elementCreateElement
     *
     * Create a child element..
     *
     */
    public function testElementCreateElement()
    {

    }

    /**
     * Test case for elementCreateSearchByAttribute
     *
     * Create a link for a \"Search Elements By Attribute Value\" operation, whose queries are specified in the request content. The SearchRoot is specified by the Web Id of the root Element. If the SearchRoot is not specified, then the search starts at the Asset Database. ElementTemplate must be provided as the Web ID of the ElementTemplate, which are used to create the Elements. All the attributes in the queries must be defined as AttributeTemplates on the ElementTemplate. An array of attribute value queries are ANDed together to find the desired Element objects. At least one value query must be specified. There are limitations on SearchOperators..
     *
     */
    public function testElementCreateSearchByAttribute()
    {

    }

    /**
     * Test case for elementCreateSecurityEntry
     *
     * Create a security entry owned by the element..
     *
     */
    public function testElementCreateSecurityEntry()
    {

    }

    /**
     * Test case for elementDelete
     *
     * Delete an element..
     *
     */
    public function testElementDelete()
    {

    }

    /**
     * Test case for elementDeleteSecurityEntry
     *
     * Delete a security entry owned by the element..
     *
     */
    public function testElementDeleteSecurityEntry()
    {

    }

    /**
     * Test case for elementExecuteSearchByAttribute
     *
     * Execute a \"Search Elements By Attribute Value\" operation..
     *
     */
    public function testElementExecuteSearchByAttribute()
    {

    }

    /**
     * Test case for elementFindElementAttributes
     *
     * Retrieves a list of element attributes matching the specified filters from the specified element..
     *
     */
    public function testElementFindElementAttributes()
    {

    }

    /**
     * Test case for elementGet
     *
     * Retrieve an element..
     *
     */
    public function testElementGet()
    {

    }

    /**
     * Test case for elementGetAnalyses
     *
     * Retrieve analyses based on the specified conditions..
     *
     */
    public function testElementGetAnalyses()
    {

    }

    /**
     * Test case for elementGetAttributes
     *
     * Get the attributes of the specified element..
     *
     */
    public function testElementGetAttributes()
    {

    }

    /**
     * Test case for elementGetByPath
     *
     * Retrieve an element by path..
     *
     */
    public function testElementGetByPath()
    {

    }

    /**
     * Test case for elementGetCategories
     *
     * Get an element's categories..
     *
     */
    public function testElementGetCategories()
    {

    }

    /**
     * Test case for elementGetElements
     *
     * Retrieve elements based on the specified conditions. By default, this method selects immediate children of the specified element..
     *
     */
    public function testElementGetElements()
    {

    }

    /**
     * Test case for elementGetEventFrames
     *
     * Retrieve event frames that reference this element based on the specified conditions. By default, returns all event frames that reference this element with a start time in the past 8 hours..
     *
     */
    public function testElementGetEventFrames()
    {

    }

    /**
     * Test case for elementGetMultiple
     *
     * Retrieve multiple elements by web id or path..
     *
     */
    public function testElementGetMultiple()
    {

    }

    /**
     * Test case for elementGetReferencedElements
     *
     * Retrieve referenced elements based on the specified conditions. By default, this method selects all referenced elements of the current resource..
     *
     */
    public function testElementGetReferencedElements()
    {

    }

    /**
     * Test case for elementGetSecurity
     *
     * Get the security information of the specified security item associated with the element for a specified user..
     *
     */
    public function testElementGetSecurity()
    {

    }

    /**
     * Test case for elementGetSecurityEntries
     *
     * Retrieve the security entries associated with the element based on the specified criteria. By default, all security entries for this element are returned..
     *
     */
    public function testElementGetSecurityEntries()
    {

    }

    /**
     * Test case for elementGetSecurityEntryByName
     *
     * Retrieve the security entry associated with the element with the specified name..
     *
     */
    public function testElementGetSecurityEntryByName()
    {

    }

    /**
     * Test case for elementRemoveReferencedElement
     *
     * Remove a reference to an existing element from the child elements collection..
     *
     */
    public function testElementRemoveReferencedElement()
    {

    }

    /**
     * Test case for elementUpdate
     *
     * Update an element by replacing items in its definition..
     *
     */
    public function testElementUpdate()
    {

    }

    /**
     * Test case for elementUpdateSecurityEntry
     *
     * Update a security entry owned by the element..
     *
     */
    public function testElementUpdateSecurityEntry()
    {

    }

}
