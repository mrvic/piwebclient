# Swagger\Client\AnalysisRuleApi

All URIs are relative to *https://proghackuc2017.osisoft.com/piwebapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**analysisRuleCreateAnalysisRule**](AnalysisRuleApi.md#analysisRuleCreateAnalysisRule) | **POST** /analysisrules/{webId}/analysisrules | Create a new Analysis Rule as a child of an existing Analysis Rule.
[**analysisRuleDelete**](AnalysisRuleApi.md#analysisRuleDelete) | **DELETE** /analysisrules/{webId} | Delete an Analysis Rule.
[**analysisRuleGet**](AnalysisRuleApi.md#analysisRuleGet) | **GET** /analysisrules/{webId} | Retrieve an Analysis Rule.
[**analysisRuleGetAnalysisRules**](AnalysisRuleApi.md#analysisRuleGetAnalysisRules) | **GET** /analysisrules/{webId}/analysisrules | Get the child Analysis Rules of the Analysis Rule.
[**analysisRuleGetByPath**](AnalysisRuleApi.md#analysisRuleGetByPath) | **GET** /analysisrules | Retrieve an Analysis Rule by path.
[**analysisRuleUpdate**](AnalysisRuleApi.md#analysisRuleUpdate) | **PATCH** /analysisrules/{webId} | Update an Analysis Rule by replacing items in its definition.


# **analysisRuleCreateAnalysisRule**
> analysisRuleCreateAnalysisRule($web_id, $analysis_rule)

Create a new Analysis Rule as a child of an existing Analysis Rule.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisRuleApi();
$web_id = "web_id_example"; // string | The ID of the parent Analysis Rule, on which to create the child Analysis Rule.
$analysis_rule = new \osisoft.pidevclub.piwebapi.models\AnalysisRule(); // \osisoft.pidevclub.piwebapi.models\AnalysisRule | The definition of the new Analysis Rule.

try {
    $api_instance->analysisRuleCreateAnalysisRule($web_id, $analysis_rule);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisRuleApi->analysisRuleCreateAnalysisRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the parent Analysis Rule, on which to create the child Analysis Rule. |
 **analysis_rule** | [**\osisoft.pidevclub.piwebapi.models\AnalysisRule**](../Model/\osisoft.pidevclub.piwebapi.models\AnalysisRule.md)| The definition of the new Analysis Rule. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analysisRuleDelete**
> analysisRuleDelete($web_id)

Delete an Analysis Rule.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisRuleApi();
$web_id = "web_id_example"; // string | The ID of the Analysis Rule.

try {
    $api_instance->analysisRuleDelete($web_id);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisRuleApi->analysisRuleDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the Analysis Rule. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analysisRuleGet**
> \osisoft.pidevclub.piwebapi.models\AnalysisRule analysisRuleGet($web_id, $selected_fields)

Retrieve an Analysis Rule.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisRuleApi();
$web_id = "web_id_example"; // string | The ID of the Analysis Rule.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->analysisRuleGet($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisRuleApi->analysisRuleGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the Analysis Rule. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\AnalysisRule**](../Model/AnalysisRule.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analysisRuleGetAnalysisRules**
> \osisoft.pidevclub.piwebapi.models\ItemsAnalysisRule analysisRuleGetAnalysisRules($web_id, $max_count, $name_filter, $search_full_hierarchy, $selected_fields, $sort_field, $sort_order, $start_index)

Get the child Analysis Rules of the Analysis Rule.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisRuleApi();
$web_id = "web_id_example"; // string | The ID of the parent Analysis Rule.
$max_count = 56; // int | The maximum number of objects to be returned per call (page size). The default is 1000.
$name_filter = "name_filter_example"; // string | The name query string used for finding Analysis Rules. The default is no filter.
$search_full_hierarchy = true; // bool | Specifies if the search should include Analysis Rules nested further than the immediate children of the searchRoot. The default is 'false'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$sort_field = "sort_field_example"; // string | The field or property of the object used to sort the returned collection. The default is 'Name'.
$sort_order = "sort_order_example"; // string | The order that the returned collection is sorted. The default is 'Ascending'.
$start_index = 56; // int | The starting index (zero based) of the items to be returned. The default is 0.

try {
    $result = $api_instance->analysisRuleGetAnalysisRules($web_id, $max_count, $name_filter, $search_full_hierarchy, $selected_fields, $sort_field, $sort_order, $start_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisRuleApi->analysisRuleGetAnalysisRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the parent Analysis Rule. |
 **max_count** | **int**| The maximum number of objects to be returned per call (page size). The default is 1000. | [optional]
 **name_filter** | **string**| The name query string used for finding Analysis Rules. The default is no filter. | [optional]
 **search_full_hierarchy** | **bool**| Specifies if the search should include Analysis Rules nested further than the immediate children of the searchRoot. The default is &#39;false&#39;. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **sort_field** | **string**| The field or property of the object used to sort the returned collection. The default is &#39;Name&#39;. | [optional]
 **sort_order** | **string**| The order that the returned collection is sorted. The default is &#39;Ascending&#39;. | [optional]
 **start_index** | **int**| The starting index (zero based) of the items to be returned. The default is 0. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsAnalysisRule**](../Model/ItemsAnalysisRule.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analysisRuleGetByPath**
> \osisoft.pidevclub.piwebapi.models\AnalysisRule analysisRuleGetByPath($path, $selected_fields)

Retrieve an Analysis Rule by path.

This method returns an Analysis Rule based on the hierarchical path associated with it, and should be used when a path has been received from a separate part of the PI System for use in the PI Web API. Users should primarily search with the WebID when available.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisRuleApi();
$path = "path_example"; // string | The path to the Analysis Rule.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->analysisRuleGetByPath($path, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisRuleApi->analysisRuleGetByPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| The path to the Analysis Rule. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\AnalysisRule**](../Model/AnalysisRule.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analysisRuleUpdate**
> analysisRuleUpdate($web_id, $analysis_rule)

Update an Analysis Rule by replacing items in its definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisRuleApi();
$web_id = "web_id_example"; // string | The ID of the Analysis Rule.
$analysis_rule = new \osisoft.pidevclub.piwebapi.models\AnalysisRule(); // \osisoft.pidevclub.piwebapi.models\AnalysisRule | A partial Analysis Rule containing the desired changes.

try {
    $api_instance->analysisRuleUpdate($web_id, $analysis_rule);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisRuleApi->analysisRuleUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the Analysis Rule. |
 **analysis_rule** | [**\osisoft.pidevclub.piwebapi.models\AnalysisRule**](../Model/\osisoft.pidevclub.piwebapi.models\AnalysisRule.md)| A partial Analysis Rule containing the desired changes. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

