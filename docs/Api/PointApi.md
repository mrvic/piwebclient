# Swagger\Client\PointApi

All URIs are relative to *https://proghackuc2017.osisoft.com/piwebapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pointDelete**](PointApi.md#pointDelete) | **DELETE** /points/{webId} | Delete a point.
[**pointGet**](PointApi.md#pointGet) | **GET** /points/{webId} | Get a point.
[**pointGetAttributeByName**](PointApi.md#pointGetAttributeByName) | **GET** /points/{webId}/attributes/{name} | Get a point attribute by name.
[**pointGetAttributes**](PointApi.md#pointGetAttributes) | **GET** /points/{webId}/attributes | Get point attributes.
[**pointGetByPath**](PointApi.md#pointGetByPath) | **GET** /points | Get a point by path.
[**pointGetMultiple**](PointApi.md#pointGetMultiple) | **GET** /points/multiple | Retrieve multiple points by web id or path.
[**pointUpdate**](PointApi.md#pointUpdate) | **PATCH** /points/{webId} | Update a point.


# **pointDelete**
> pointDelete($web_id)

Delete a point.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PointApi();
$web_id = "web_id_example"; // string | The ID of the point.

try {
    $api_instance->pointDelete($web_id);
} catch (Exception $e) {
    echo 'Exception when calling PointApi->pointDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the point. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pointGet**
> \osisoft.pidevclub.piwebapi.models\Point pointGet($web_id, $selected_fields)

Get a point.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PointApi();
$web_id = "web_id_example"; // string | The ID of the point.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->pointGet($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointApi->pointGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the point. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\Point**](../Model/Point.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pointGetAttributeByName**
> \osisoft.pidevclub.piwebapi.models\PointAttribute pointGetAttributeByName($name, $web_id, $selected_fields)

Get a point attribute by name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PointApi();
$name = "name_example"; // string | The name of the attribute.
$web_id = "web_id_example"; // string | The ID of the point.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->pointGetAttributeByName($name, $web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointApi->pointGetAttributeByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the attribute. |
 **web_id** | **string**| The ID of the point. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\PointAttribute**](../Model/PointAttribute.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pointGetAttributes**
> \osisoft.pidevclub.piwebapi.models\ItemsPointAttribute pointGetAttributes($web_id, $name, $name_filter, $selected_fields)

Get point attributes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PointApi();
$web_id = "web_id_example"; // string | The ID of the point.
$name = array("name_example"); // string[] | The name of a point attribute to be returned. Multiple attributes may be specified with multiple instances of the parameter.
$name_filter = "name_filter_example"; // string | The filter to the names of the list of point attributes to be returned. The default is no filter.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->pointGetAttributes($web_id, $name, $name_filter, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointApi->pointGetAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the point. |
 **name** | [**string[]**](../Model/string.md)| The name of a point attribute to be returned. Multiple attributes may be specified with multiple instances of the parameter. | [optional]
 **name_filter** | **string**| The filter to the names of the list of point attributes to be returned. The default is no filter. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsPointAttribute**](../Model/ItemsPointAttribute.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pointGetByPath**
> \osisoft.pidevclub.piwebapi.models\Point pointGetByPath($path, $selected_fields)

Get a point by path.

This method returns a PI Point based on the hierarchical path associated with it, and should be used when a path has been received from a separate part of the PI System for use in the PI Web API. Users should primarily search with the WebID when available.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PointApi();
$path = "path_example"; // string | The path to the point.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->pointGetByPath($path, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointApi->pointGetByPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| The path to the point. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\Point**](../Model/Point.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pointGetMultiple**
> \osisoft.pidevclub.piwebapi.models\ItemsItemPoint pointGetMultiple($as_parallel, $include_mode, $path, $selected_fields, $web_id)

Retrieve multiple points by web id or path.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PointApi();
$as_parallel = true; // bool | Specifies if the retrieval processes should be run in parallel on the server. This may improve the response time for large amounts of requested points. The default is 'false'.
$include_mode = "include_mode_example"; // string | The include mode for the return list. The default is 'All'.
$path = array("path_example"); // string[] | The path of a point. Multiple points may be specified with multiple instances of the parameter.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$web_id = array("web_id_example"); // string[] | The ID of a point. Multiple points may be specified with multiple instances of the parameter.

try {
    $result = $api_instance->pointGetMultiple($as_parallel, $include_mode, $path, $selected_fields, $web_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointApi->pointGetMultiple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **as_parallel** | **bool**| Specifies if the retrieval processes should be run in parallel on the server. This may improve the response time for large amounts of requested points. The default is &#39;false&#39;. | [optional]
 **include_mode** | **string**| The include mode for the return list. The default is &#39;All&#39;. | [optional]
 **path** | [**string[]**](../Model/string.md)| The path of a point. Multiple points may be specified with multiple instances of the parameter. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **web_id** | [**string[]**](../Model/string.md)| The ID of a point. Multiple points may be specified with multiple instances of the parameter. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsItemPoint**](../Model/ItemsItemPoint.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pointUpdate**
> pointUpdate($web_id, $point_dto)

Update a point.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PointApi();
$web_id = "web_id_example"; // string | The ID of the point.
$point_dto = new \osisoft.pidevclub.piwebapi.models\Point(); // \osisoft.pidevclub.piwebapi.models\Point | A partial point containing the desired changes.

try {
    $api_instance->pointUpdate($web_id, $point_dto);
} catch (Exception $e) {
    echo 'Exception when calling PointApi->pointUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the point. |
 **point_dto** | [**\osisoft.pidevclub.piwebapi.models\Point**](../Model/\osisoft.pidevclub.piwebapi.models\Point.md)| A partial point containing the desired changes. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

