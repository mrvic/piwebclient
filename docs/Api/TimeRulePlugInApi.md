# Swagger\Client\TimeRulePlugInApi

All URIs are relative to *https://proghackuc2017.osisoft.com/piwebapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**timeRulePlugInGet**](TimeRulePlugInApi.md#timeRulePlugInGet) | **GET** /timeruleplugins/{webId} | Retrieve a Time Rule Plug-in.
[**timeRulePlugInGetByPath**](TimeRulePlugInApi.md#timeRulePlugInGetByPath) | **GET** /timeruleplugins | Retrieve a Time Rule Plug-in by path.


# **timeRulePlugInGet**
> \osisoft.pidevclub.piwebapi.models\TimeRulePlugIn timeRulePlugInGet($web_id, $selected_fields)

Retrieve a Time Rule Plug-in.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TimeRulePlugInApi();
$web_id = "web_id_example"; // string | The ID of the Time Rule Plug-in.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->timeRulePlugInGet($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeRulePlugInApi->timeRulePlugInGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the Time Rule Plug-in. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\TimeRulePlugIn**](../Model/TimeRulePlugIn.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timeRulePlugInGetByPath**
> \osisoft.pidevclub.piwebapi.models\TimeRulePlugIn timeRulePlugInGetByPath($path, $selected_fields)

Retrieve a Time Rule Plug-in by path.

This method returns a Time Rule Plug-in based on the hierarchical path associated with it, and should be used when a path has been received from a separate part of the PI System for use in the PI Web API. Users should primarily search with the WebID when available.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TimeRulePlugInApi();
$path = "path_example"; // string | The path to the Time Rule Plug-in.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->timeRulePlugInGetByPath($path, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeRulePlugInApi->timeRulePlugInGetByPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| The path to the Time Rule Plug-in. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\TimeRulePlugIn**](../Model/TimeRulePlugIn.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

