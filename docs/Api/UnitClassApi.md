# Swagger\Client\UnitClassApi

All URIs are relative to *https://proghackuc2017.osisoft.com/piwebapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**unitClassCreateUnit**](UnitClassApi.md#unitClassCreateUnit) | **POST** /unitclasses/{webId}/units | Create a unit in the specified Unit Class.
[**unitClassDelete**](UnitClassApi.md#unitClassDelete) | **DELETE** /unitclasses/{webId} | Delete a unit class.
[**unitClassGet**](UnitClassApi.md#unitClassGet) | **GET** /unitclasses/{webId} | Retrieve a unit class.
[**unitClassGetByPath**](UnitClassApi.md#unitClassGetByPath) | **GET** /unitclasses | Retrieve a unit class by path.
[**unitClassGetCanonicalUnit**](UnitClassApi.md#unitClassGetCanonicalUnit) | **GET** /unitclasses/{webId}/canonicalunit | Get the canonical unit of a unit class.
[**unitClassGetUnits**](UnitClassApi.md#unitClassGetUnits) | **GET** /unitclasses/{webId}/units | Get a list of all units belonging to the unit class.
[**unitClassUpdate**](UnitClassApi.md#unitClassUpdate) | **PATCH** /unitclasses/{webId} | Update a unit class.


# **unitClassCreateUnit**
> unitClassCreateUnit($web_id, $unit_dto)

Create a unit in the specified Unit Class.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UnitClassApi();
$web_id = "web_id_example"; // string | The ID of the server.
$unit_dto = new \osisoft.pidevclub.piwebapi.models\Unit(); // \osisoft.pidevclub.piwebapi.models\Unit | The new unit definition.

try {
    $api_instance->unitClassCreateUnit($web_id, $unit_dto);
} catch (Exception $e) {
    echo 'Exception when calling UnitClassApi->unitClassCreateUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the server. |
 **unit_dto** | [**\osisoft.pidevclub.piwebapi.models\Unit**](../Model/\osisoft.pidevclub.piwebapi.models\Unit.md)| The new unit definition. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unitClassDelete**
> unitClassDelete($web_id)

Delete a unit class.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UnitClassApi();
$web_id = "web_id_example"; // string | The ID of the unit class.

try {
    $api_instance->unitClassDelete($web_id);
} catch (Exception $e) {
    echo 'Exception when calling UnitClassApi->unitClassDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the unit class. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unitClassGet**
> \osisoft.pidevclub.piwebapi.models\UnitClass unitClassGet($web_id, $selected_fields)

Retrieve a unit class.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UnitClassApi();
$web_id = "web_id_example"; // string | The ID of the unit class.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->unitClassGet($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitClassApi->unitClassGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the unit class. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\UnitClass**](../Model/UnitClass.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unitClassGetByPath**
> \osisoft.pidevclub.piwebapi.models\UnitClass unitClassGetByPath($path, $selected_fields)

Retrieve a unit class by path.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UnitClassApi();
$path = "path_example"; // string | The path to the unit class.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->unitClassGetByPath($path, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitClassApi->unitClassGetByPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| The path to the unit class. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\UnitClass**](../Model/UnitClass.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unitClassGetCanonicalUnit**
> \osisoft.pidevclub.piwebapi.models\Unit unitClassGetCanonicalUnit($web_id, $selected_fields)

Get the canonical unit of a unit class.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UnitClassApi();
$web_id = "web_id_example"; // string | The ID of unit class.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->unitClassGetCanonicalUnit($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitClassApi->unitClassGetCanonicalUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of unit class. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\Unit**](../Model/Unit.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unitClassGetUnits**
> \osisoft.pidevclub.piwebapi.models\Unit unitClassGetUnits($web_id, $selected_fields)

Get a list of all units belonging to the unit class.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UnitClassApi();
$web_id = "web_id_example"; // string | The ID of unit class.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->unitClassGetUnits($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitClassApi->unitClassGetUnits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of unit class. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\Unit**](../Model/Unit.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unitClassUpdate**
> unitClassUpdate($web_id, $unit_class_dto)

Update a unit class.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UnitClassApi();
$web_id = "web_id_example"; // string | The ID of the unit class.
$unit_class_dto = new \osisoft.pidevclub.piwebapi.models\UnitClass(); // \osisoft.pidevclub.piwebapi.models\UnitClass | A partial unit class containing the desired changes.

try {
    $api_instance->unitClassUpdate($web_id, $unit_class_dto);
} catch (Exception $e) {
    echo 'Exception when calling UnitClassApi->unitClassUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the unit class. |
 **unit_class_dto** | [**\osisoft.pidevclub.piwebapi.models\UnitClass**](../Model/\osisoft.pidevclub.piwebapi.models\UnitClass.md)| A partial unit class containing the desired changes. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

