# Swagger\Client\UnitApi

All URIs are relative to *https://proghackuc2017.osisoft.com/piwebapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**unitDelete**](UnitApi.md#unitDelete) | **DELETE** /units/{webId} | Delete a unit.
[**unitGet**](UnitApi.md#unitGet) | **GET** /units/{webId} | Retrieve a unit.
[**unitGetByPath**](UnitApi.md#unitGetByPath) | **GET** /units | Retrieve a unit by path.
[**unitUpdate**](UnitApi.md#unitUpdate) | **PATCH** /units/{webId} | Update a unit.


# **unitDelete**
> unitDelete($web_id)

Delete a unit.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UnitApi();
$web_id = "web_id_example"; // string | The ID of the unit.

try {
    $api_instance->unitDelete($web_id);
} catch (Exception $e) {
    echo 'Exception when calling UnitApi->unitDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the unit. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unitGet**
> \osisoft.pidevclub.piwebapi.models\Unit unitGet($web_id, $selected_fields)

Retrieve a unit.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UnitApi();
$web_id = "web_id_example"; // string | The ID of the unit.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->unitGet($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitApi->unitGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the unit. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\Unit**](../Model/Unit.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unitGetByPath**
> \osisoft.pidevclub.piwebapi.models\Unit unitGetByPath($path, $selected_fields)

Retrieve a unit by path.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UnitApi();
$path = "path_example"; // string | The path to the unit.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->unitGetByPath($path, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitApi->unitGetByPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| The path to the unit. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\Unit**](../Model/Unit.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unitUpdate**
> unitUpdate($web_id, $unit_dto)

Update a unit.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UnitApi();
$web_id = "web_id_example"; // string | The ID of the unit.
$unit_dto = new \osisoft.pidevclub.piwebapi.models\Unit(); // \osisoft.pidevclub.piwebapi.models\Unit | A partial unit containing the desired changes.

try {
    $api_instance->unitUpdate($web_id, $unit_dto);
} catch (Exception $e) {
    echo 'Exception when calling UnitApi->unitUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the unit. |
 **unit_dto** | [**\osisoft.pidevclub.piwebapi.models\Unit**](../Model/\osisoft.pidevclub.piwebapi.models\Unit.md)| A partial unit containing the desired changes. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

