<?php
/**
 * TimeRulePlugInApi
 * PHP version 5
 *
 * @category Class
 * @package  PIWebAPI\Client
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
 * Do not edit the class manually.
 */

namespace PIWebAPI\Client\Api;

use \PIWebAPI\Client\ApiClient;
use \PIWebAPI\Client\ApiException;
use \PIWebAPI\Client\Configuration;
use \PIWebAPI\Client\ObjectSerializer;

/**
 * TimeRulePlugInApi Class Doc Comment
 *
 * @category Class
 * @package  PIWebAPI\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TimeRulePlugInApi
{
    /**
     * API Client
     *
     * @var \PIWebAPI\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \PIWebAPI\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\PIWebAPI\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://proghackuc2017.osisoft.com/piwebapi');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \PIWebAPI\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \PIWebAPI\Client\ApiClient $apiClient set the API client
     *
     * @return TimeRulePlugInApi
     */
    public function setApiClient(\PIWebAPI\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation timeRulePlugInGet
     *
     * Retrieve a Time Rule Plug-in.
     *
     * @param string $web_id The ID of the Time Rule Plug-in. (required)
     * @param string $selected_fields List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. (optional)
     * @throws \PIWebAPI\Client\ApiException on non-2xx response
     * @return \PIWebAPI\Client\Model\TimeRulePlugIn
     */
    public function timeRulePlugInGet($web_id, $selected_fields = null)
    {
        list($response) = $this->timeRulePlugInGetWithHttpInfo($web_id, $selected_fields);
        return $response;
    }

    /**
     * Operation timeRulePlugInGetWithHttpInfo
     *
     * Retrieve a Time Rule Plug-in.
     *
     * @param string $web_id The ID of the Time Rule Plug-in. (required)
     * @param string $selected_fields List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. (optional)
     * @throws \PIWebAPI\Client\ApiException on non-2xx response
     * @return array of \PIWebAPI\Client\Model\TimeRulePlugIn, HTTP status code, HTTP response headers (array of strings)
     */
    public function timeRulePlugInGetWithHttpInfo($web_id, $selected_fields = null)
    {
        // verify the required parameter 'web_id' is set
        if ($web_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $web_id when calling timeRulePlugInGet');
        }
        // parse inputs
        $resourcePath = "/timeruleplugins/{webId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'text/json', 'text/html', 'application/x-ms-application']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($selected_fields !== null) {
            $queryParams['selectedFields'] = $this->apiClient->getSerializer()->toQueryValue($selected_fields);
        }
        // path params
        if ($web_id !== null) {
            $resourcePath = str_replace(
                "{" . "webId" . "}",
                $this->apiClient->getSerializer()->toPathValue($web_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\PIWebAPI\Client\Model\TimeRulePlugIn',
                '/timeruleplugins/{webId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\PIWebAPI\Client\Model\TimeRulePlugIn', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PIWebAPI\Client\Model\TimeRulePlugIn', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation timeRulePlugInGetByPath
     *
     * Retrieve a Time Rule Plug-in by path.
     *
     * @param string $path The path to the Time Rule Plug-in. (required)
     * @param string $selected_fields List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. (optional)
     * @throws \PIWebAPI\Client\ApiException on non-2xx response
     * @return \PIWebAPI\Client\Model\TimeRulePlugIn
     */
    public function timeRulePlugInGetByPath($path, $selected_fields = null)
    {
        list($response) = $this->timeRulePlugInGetByPathWithHttpInfo($path, $selected_fields);
        return $response;
    }

    /**
     * Operation timeRulePlugInGetByPathWithHttpInfo
     *
     * Retrieve a Time Rule Plug-in by path.
     *
     * @param string $path The path to the Time Rule Plug-in. (required)
     * @param string $selected_fields List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. (optional)
     * @throws \PIWebAPI\Client\ApiException on non-2xx response
     * @return array of \PIWebAPI\Client\Model\TimeRulePlugIn, HTTP status code, HTTP response headers (array of strings)
     */
    public function timeRulePlugInGetByPathWithHttpInfo($path, $selected_fields = null)
    {
        // verify the required parameter 'path' is set
        if ($path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling timeRulePlugInGetByPath');
        }
        // parse inputs
        $resourcePath = "/timeruleplugins";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'text/json', 'text/html', 'application/x-ms-application']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($path !== null) {
            $queryParams['path'] = $this->apiClient->getSerializer()->toQueryValue($path);
        }
        // query params
        if ($selected_fields !== null) {
            $queryParams['selectedFields'] = $this->apiClient->getSerializer()->toQueryValue($selected_fields);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\PIWebAPI\Client\Model\TimeRulePlugIn',
                '/timeruleplugins'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\PIWebAPI\Client\Model\TimeRulePlugIn', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PIWebAPI\Client\Model\TimeRulePlugIn', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
