<?php
/**
 * ConfigurationApi
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
 * ConfigurationApi Class Doc Comment
 *
 * @category Class
 * @package  PIWebAPI\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConfigurationApi
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
     * @return ConfigurationApi
     */
    public function setApiClient(\PIWebAPI\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation configurationDelete
     *
     * Delete a configuration item.
     *
     * @param string $key The key of the configuration item to remove. (required)
     * @throws \PIWebAPI\Client\ApiException on non-2xx response
     * @return void
     */
    public function configurationDelete($key)
    {
        list($response) = $this->configurationDeleteWithHttpInfo($key);
        return $response;
    }

    /**
     * Operation configurationDeleteWithHttpInfo
     *
     * Delete a configuration item.
     *
     * @param string $key The key of the configuration item to remove. (required)
     * @throws \PIWebAPI\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function configurationDeleteWithHttpInfo($key)
    {
        // verify the required parameter 'key' is set
        if ($key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $key when calling configurationDelete');
        }
        // parse inputs
        $resourcePath = "/system/configuration/{key}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'text/json', 'text/html', 'application/x-ms-application']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($key !== null) {
            $resourcePath = str_replace(
                "{" . "key" . "}",
                $this->apiClient->getSerializer()->toPathValue($key),
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/system/configuration/{key}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PIWebAPI\Client\Model\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PIWebAPI\Client\Model\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation configurationGet
     *
     * Get the value of a configuration item.
     *
     * @param string $key The key of the configuration item. (required)
     * @throws \PIWebAPI\Client\ApiException on non-2xx response
     * @return object
     */
    public function configurationGet($key)
    {
        list($response) = $this->configurationGetWithHttpInfo($key);
        return $response;
    }

    /**
     * Operation configurationGetWithHttpInfo
     *
     * Get the value of a configuration item.
     *
     * @param string $key The key of the configuration item. (required)
     * @throws \PIWebAPI\Client\ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function configurationGetWithHttpInfo($key)
    {
        // verify the required parameter 'key' is set
        if ($key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $key when calling configurationGet');
        }
        // parse inputs
        $resourcePath = "/system/configuration/{key}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'text/json', 'text/html', 'application/x-ms-application']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($key !== null) {
            $resourcePath = str_replace(
                "{" . "key" . "}",
                $this->apiClient->getSerializer()->toPathValue($key),
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
                'object',
                '/system/configuration/{key}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\PIWebAPI\Client\Model\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation configurationList
     *
     * Get the current system configuration.
     *
     * @throws \PIWebAPI\Client\ApiException on non-2xx response
     * @return map[string,object]
     */
    public function configurationList()
    {
        list($response) = $this->configurationListWithHttpInfo();
        return $response;
    }

    /**
     * Operation configurationListWithHttpInfo
     *
     * Get the current system configuration.
     *
     * @throws \PIWebAPI\Client\ApiException on non-2xx response
     * @return array of map[string,object], HTTP status code, HTTP response headers (array of strings)
     */
    public function configurationListWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/system/configuration";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'text/json', 'text/html', 'application/x-ms-application']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

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
                'map[string,object]',
                '/system/configuration'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'map[string,object]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'map[string,object]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
