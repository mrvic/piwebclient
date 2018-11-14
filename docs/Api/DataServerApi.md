# Swagger\Client\DataServerApi

All URIs are relative to *https://proghackuc2017.osisoft.com/piwebapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataServerCreateEnumerationSet**](DataServerApi.md#dataServerCreateEnumerationSet) | **POST** /dataservers/{webId}/enumerationsets | Create an enumeration set on the Data Server.
[**dataServerCreatePoint**](DataServerApi.md#dataServerCreatePoint) | **POST** /dataservers/{webId}/points | Create a point in the specified Data Server.
[**dataServerGet**](DataServerApi.md#dataServerGet) | **GET** /dataservers/{webId} | Retrieve a Data Server.
[**dataServerGetByName**](DataServerApi.md#dataServerGetByName) | **GET** /dataservers#name | Retrieve a Data Server by name.
[**dataServerGetByPath**](DataServerApi.md#dataServerGetByPath) | **GET** /dataservers#path | Retrieve a Data Server by path.
[**dataServerGetEnumerationSets**](DataServerApi.md#dataServerGetEnumerationSets) | **GET** /dataservers/{webId}/enumerationsets | Retrieve enumeration sets for given Data Server.
[**dataServerGetPoints**](DataServerApi.md#dataServerGetPoints) | **GET** /dataservers/{webId}/points | Retrieve a list of points on a specified Data Server.
[**dataServerList**](DataServerApi.md#dataServerList) | **GET** /dataservers | Retrieve a list of Data Servers known to this service.


# **dataServerCreateEnumerationSet**
> dataServerCreateEnumerationSet($web_id, $enumeration_set)

Create an enumeration set on the Data Server.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataServerApi();
$web_id = "web_id_example"; // string | The ID of the server on which to create the enumeration set.
$enumeration_set = new \osisoft.pidevclub.piwebapi.models\EnumerationSet(); // \osisoft.pidevclub.piwebapi.models\EnumerationSet | The new enumeration set definition.

try {
    $api_instance->dataServerCreateEnumerationSet($web_id, $enumeration_set);
} catch (Exception $e) {
    echo 'Exception when calling DataServerApi->dataServerCreateEnumerationSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the server on which to create the enumeration set. |
 **enumeration_set** | [**\osisoft.pidevclub.piwebapi.models\EnumerationSet**](../Model/\osisoft.pidevclub.piwebapi.models\EnumerationSet.md)| The new enumeration set definition. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataServerCreatePoint**
> dataServerCreatePoint($web_id, $point_dto)

Create a point in the specified Data Server.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataServerApi();
$web_id = "web_id_example"; // string | The ID of the server.
$point_dto = new \osisoft.pidevclub.piwebapi.models\Point(); // \osisoft.pidevclub.piwebapi.models\Point | The new point definition.

try {
    $api_instance->dataServerCreatePoint($web_id, $point_dto);
} catch (Exception $e) {
    echo 'Exception when calling DataServerApi->dataServerCreatePoint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the server. |
 **point_dto** | [**\osisoft.pidevclub.piwebapi.models\Point**](../Model/\osisoft.pidevclub.piwebapi.models\Point.md)| The new point definition. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataServerGet**
> \osisoft.pidevclub.piwebapi.models\DataServer dataServerGet($web_id, $selected_fields)

Retrieve a Data Server.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataServerApi();
$web_id = "web_id_example"; // string | The ID of the server.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->dataServerGet($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataServerApi->dataServerGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the server. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\DataServer**](../Model/DataServer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataServerGetByName**
> \osisoft.pidevclub.piwebapi.models\DataServer dataServerGetByName($name, $selected_fields)

Retrieve a Data Server by name.

This method returns a data server based on the name. Users should primarily search with the WebID when available.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataServerApi();
$name = "name_example"; // string | The name of the server.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->dataServerGetByName($name, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataServerApi->dataServerGetByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the server. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\DataServer**](../Model/DataServer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataServerGetByPath**
> \osisoft.pidevclub.piwebapi.models\DataServer dataServerGetByPath($path, $selected_fields)

Retrieve a Data Server by path.

This method returns a data server based on the hierarchical path associated with it, and should be used when a path has been received from a separate part of the PI System for use in the PI Web API. Users should primarily search with the WebID when available.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataServerApi();
$path = "path_example"; // string | The path to the server. Note that the path supplied to this method must be of the form '\\\\servername'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->dataServerGetByPath($path, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataServerApi->dataServerGetByPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| The path to the server. Note that the path supplied to this method must be of the form &#39;\\\\servername&#39;. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\DataServer**](../Model/DataServer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataServerGetEnumerationSets**
> \osisoft.pidevclub.piwebapi.models\ItemsEnumerationSet dataServerGetEnumerationSets($web_id, $selected_fields)

Retrieve enumeration sets for given Data Server.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataServerApi();
$web_id = "web_id_example"; // string | The ID of the server.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->dataServerGetEnumerationSets($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataServerApi->dataServerGetEnumerationSets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the server. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsEnumerationSet**](../Model/ItemsEnumerationSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataServerGetPoints**
> \osisoft.pidevclub.piwebapi.models\ItemsPoint dataServerGetPoints($web_id, $max_count, $name_filter, $selected_fields, $start_index)

Retrieve a list of points on a specified Data Server.

Users can search for the data servers based on specific search parameters. If no parameters are specified in the search, the default values for each parameter will be used and will return the data servers that match the default search.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataServerApi();
$web_id = "web_id_example"; // string | The ID of the server.
$max_count = 56; // int | The maximum number of objects to be returned per call (page size). The default is 1000.
$name_filter = "name_filter_example"; // string | A query string for filtering by point name. The default is no filter.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$start_index = 56; // int | The starting index (zero based) of the items to be returned. The default is '0'.

try {
    $result = $api_instance->dataServerGetPoints($web_id, $max_count, $name_filter, $selected_fields, $start_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataServerApi->dataServerGetPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the server. |
 **max_count** | **int**| The maximum number of objects to be returned per call (page size). The default is 1000. | [optional]
 **name_filter** | **string**| A query string for filtering by point name. The default is no filter. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **start_index** | **int**| The starting index (zero based) of the items to be returned. The default is &#39;0&#39;. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsPoint**](../Model/ItemsPoint.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataServerList**
> \osisoft.pidevclub.piwebapi.models\ItemsDataServer dataServerList($selected_fields)

Retrieve a list of Data Servers known to this service.

This method returns a list of all available known Data Servers that the user can connect to. Even though a server may be returned in the list, the user may not have permission to access it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DataServerApi();
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->dataServerList($selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataServerApi->dataServerList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsDataServer**](../Model/ItemsDataServer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

