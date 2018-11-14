# Swagger\Client\AnalysisRulePlugInApi

All URIs are relative to *https://proghackuc2017.osisoft.com/piwebapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**analysisRulePlugInGet**](AnalysisRulePlugInApi.md#analysisRulePlugInGet) | **GET** /analysisruleplugins/{webId} | Retrieve an Analysis Rule Plug-in.
[**analysisRulePlugInGetByPath**](AnalysisRulePlugInApi.md#analysisRulePlugInGetByPath) | **GET** /analysisruleplugins | Retrieve an Analysis Rule Plug-in by path.


# **analysisRulePlugInGet**
> \osisoft.pidevclub.piwebapi.models\AnalysisRulePlugIn analysisRulePlugInGet($web_id, $selected_fields)

Retrieve an Analysis Rule Plug-in.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisRulePlugInApi();
$web_id = "web_id_example"; // string | The ID of the Analysis Rule Plug-in.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->analysisRulePlugInGet($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisRulePlugInApi->analysisRulePlugInGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the Analysis Rule Plug-in. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\AnalysisRulePlugIn**](../Model/AnalysisRulePlugIn.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analysisRulePlugInGetByPath**
> \osisoft.pidevclub.piwebapi.models\AnalysisRulePlugIn analysisRulePlugInGetByPath($path, $selected_fields)

Retrieve an Analysis Rule Plug-in by path.

This method returns an Analysis Rule Plug-in based on the hierarchical path associated with it, and should be used when a path has been received from a separate part of the PI System for use in the PI Web API. Users should primarily search with the WebID when available.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisRulePlugInApi();
$path = "path_example"; // string | The path to the Analysis Rule Plug-in.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->analysisRulePlugInGetByPath($path, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisRulePlugInApi->analysisRulePlugInGetByPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| The path to the Analysis Rule Plug-in. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\AnalysisRulePlugIn**](../Model/AnalysisRulePlugIn.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

