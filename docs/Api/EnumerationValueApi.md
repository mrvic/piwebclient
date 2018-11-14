# Swagger\Client\EnumerationValueApi

All URIs are relative to *https://proghackuc2017.osisoft.com/piwebapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**enumerationValueDeleteEnumerationValue**](EnumerationValueApi.md#enumerationValueDeleteEnumerationValue) | **DELETE** /enumerationvalues/{webId} | Delete an enumeration value from an enumeration set.
[**enumerationValueGet**](EnumerationValueApi.md#enumerationValueGet) | **GET** /enumerationvalues/{webId} | Retrieve an enumeration value mapping
[**enumerationValueGetByPath**](EnumerationValueApi.md#enumerationValueGetByPath) | **GET** /enumerationvalues | Retrieve an enumeration value by path.
[**enumerationValueUpdateEnumerationValue**](EnumerationValueApi.md#enumerationValueUpdateEnumerationValue) | **PATCH** /enumerationvalues/{webId} | Update an enumeration value by replacing items in its definition.


# **enumerationValueDeleteEnumerationValue**
> enumerationValueDeleteEnumerationValue($web_id)

Delete an enumeration value from an enumeration set.

Deleting a value will remove it from the enumeration set along with any value references within the PI Web API system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EnumerationValueApi();
$web_id = "web_id_example"; // string | The ID of the enumeration value.

try {
    $api_instance->enumerationValueDeleteEnumerationValue($web_id);
} catch (Exception $e) {
    echo 'Exception when calling EnumerationValueApi->enumerationValueDeleteEnumerationValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the enumeration value. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enumerationValueGet**
> \osisoft.pidevclub.piwebapi.models\EnumerationValue enumerationValueGet($web_id, $selected_fields)

Retrieve an enumeration value mapping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EnumerationValueApi();
$web_id = "web_id_example"; // string | The ID of the enumeration value.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->enumerationValueGet($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnumerationValueApi->enumerationValueGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the enumeration value. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\EnumerationValue**](../Model/EnumerationValue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enumerationValueGetByPath**
> \osisoft.pidevclub.piwebapi.models\EnumerationValue enumerationValueGetByPath($path, $selected_fields)

Retrieve an enumeration value by path.

This method returns a enumeration value based on the hierarchical path associated with it, and should be used when a path has been received from a separate part of the PI System for use in the PI Web API. Users should primarily search with the WebID when available.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EnumerationValueApi();
$path = "path_example"; // string | The path to the target enumeration value.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->enumerationValueGetByPath($path, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnumerationValueApi->enumerationValueGetByPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| The path to the target enumeration value. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\EnumerationValue**](../Model/EnumerationValue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enumerationValueUpdateEnumerationValue**
> enumerationValueUpdateEnumerationValue($web_id, $enumeration_value)

Update an enumeration value by replacing items in its definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EnumerationValueApi();
$web_id = "web_id_example"; // string | The ID of the enumeration value to update.
$enumeration_value = new \osisoft.pidevclub.piwebapi.models\EnumerationValue(); // \osisoft.pidevclub.piwebapi.models\EnumerationValue | A partial enumeration value containing the desired changes.

try {
    $api_instance->enumerationValueUpdateEnumerationValue($web_id, $enumeration_value);
} catch (Exception $e) {
    echo 'Exception when calling EnumerationValueApi->enumerationValueUpdateEnumerationValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the enumeration value to update. |
 **enumeration_value** | [**\osisoft.pidevclub.piwebapi.models\EnumerationValue**](../Model/\osisoft.pidevclub.piwebapi.models\EnumerationValue.md)| A partial enumeration value containing the desired changes. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

