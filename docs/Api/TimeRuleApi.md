# Swagger\Client\TimeRuleApi

All URIs are relative to *https://proghackuc2017.osisoft.com/piwebapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**timeRuleDelete**](TimeRuleApi.md#timeRuleDelete) | **DELETE** /timerules/{webId} | Delete a Time Rule.
[**timeRuleGet**](TimeRuleApi.md#timeRuleGet) | **GET** /timerules/{webId} | Retrieve a Time Rule.
[**timeRuleGetByPath**](TimeRuleApi.md#timeRuleGetByPath) | **GET** /timerules | Retrieve a Time Rule by path.
[**timeRuleUpdate**](TimeRuleApi.md#timeRuleUpdate) | **PATCH** /timerules/{webId} | Update a Time Rule by replacing items in its definition.


# **timeRuleDelete**
> timeRuleDelete($web_id)

Delete a Time Rule.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TimeRuleApi();
$web_id = "web_id_example"; // string | The ID of the Time Rule.

try {
    $api_instance->timeRuleDelete($web_id);
} catch (Exception $e) {
    echo 'Exception when calling TimeRuleApi->timeRuleDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the Time Rule. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timeRuleGet**
> \osisoft.pidevclub.piwebapi.models\TimeRule timeRuleGet($web_id, $selected_fields)

Retrieve a Time Rule.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TimeRuleApi();
$web_id = "web_id_example"; // string | The ID of the Time Rule.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->timeRuleGet($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeRuleApi->timeRuleGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the Time Rule. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\TimeRule**](../Model/TimeRule.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timeRuleGetByPath**
> \osisoft.pidevclub.piwebapi.models\TimeRule timeRuleGetByPath($path, $selected_fields)

Retrieve a Time Rule by path.

This method returns a Time Rule based on the hierarchical path associated with it, and should be used when a path has been received from a separate part of the PI System for use in the PI Web API. Users should primarily search with the WebID when available.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TimeRuleApi();
$path = "path_example"; // string | The path to the Time Rule.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->timeRuleGetByPath($path, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeRuleApi->timeRuleGetByPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| The path to the Time Rule. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\TimeRule**](../Model/TimeRule.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timeRuleUpdate**
> timeRuleUpdate($web_id, $time_rule)

Update a Time Rule by replacing items in its definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TimeRuleApi();
$web_id = "web_id_example"; // string | The ID of the Time Rule.
$time_rule = new \osisoft.pidevclub.piwebapi.models\TimeRule(); // \osisoft.pidevclub.piwebapi.models\TimeRule | A partial Time Rule containing the desired changes.

try {
    $api_instance->timeRuleUpdate($web_id, $time_rule);
} catch (Exception $e) {
    echo 'Exception when calling TimeRuleApi->timeRuleUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the Time Rule. |
 **time_rule** | [**\osisoft.pidevclub.piwebapi.models\TimeRule**](../Model/\osisoft.pidevclub.piwebapi.models\TimeRule.md)| A partial Time Rule containing the desired changes. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

