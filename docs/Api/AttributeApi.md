# Swagger\Client\AttributeApi

All URIs are relative to *https://proghackuc2017.osisoft.com/piwebapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attributeCreateAttribute**](AttributeApi.md#attributeCreateAttribute) | **POST** /attributes/{webId}/attributes | Create a new attribute as a child of the specified attribute.
[**attributeCreateConfig**](AttributeApi.md#attributeCreateConfig) | **POST** /attributes/{webId}/config | Create or update an attribute&#39;s DataReference configuration (Create/Update PI point for PI Point DataReference).
[**attributeDelete**](AttributeApi.md#attributeDelete) | **DELETE** /attributes/{webId} | Delete an attribute.
[**attributeGet**](AttributeApi.md#attributeGet) | **GET** /attributes/{webId} | Retrieve an attribute.
[**attributeGetAttributes**](AttributeApi.md#attributeGetAttributes) | **GET** /attributes/{webId}/attributes | Get the child attributes of the specified attribute.
[**attributeGetByPath**](AttributeApi.md#attributeGetByPath) | **GET** /attributes | Retrieve an attribute by path.
[**attributeGetCategories**](AttributeApi.md#attributeGetCategories) | **GET** /attributes/{webId}/categories | Get an attribute&#39;s categories.
[**attributeGetMultiple**](AttributeApi.md#attributeGetMultiple) | **GET** /attributes/multiple | Retrieve multiple attributes by web id or path.
[**attributeGetValue**](AttributeApi.md#attributeGetValue) | **GET** /attributes/{webId}/value | Get the attribute&#39;s value. This call is intended for use with attributes that have no data reference only. For attributes with a data reference, consult the documentation for Streams.
[**attributeSetValue**](AttributeApi.md#attributeSetValue) | **PUT** /attributes/{webId}/value | Set the value of a configuration item attribute. For attributes with a data reference or non-configuration item attributes, consult the documentation for streams.
[**attributeUpdate**](AttributeApi.md#attributeUpdate) | **PATCH** /attributes/{webId} | Update an attribute by replacing items in its definition.


# **attributeCreateAttribute**
> attributeCreateAttribute($web_id, $attribute)

Create a new attribute as a child of the specified attribute.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AttributeApi();
$web_id = "web_id_example"; // string | The ID of the parent attribute on which to create the attribute.
$attribute = new \osisoft.pidevclub.piwebapi.models\Attribute(); // \osisoft.pidevclub.piwebapi.models\Attribute | The definition of the new attribute.

try {
    $api_instance->attributeCreateAttribute($web_id, $attribute);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->attributeCreateAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the parent attribute on which to create the attribute. |
 **attribute** | [**\osisoft.pidevclub.piwebapi.models\Attribute**](../Model/\osisoft.pidevclub.piwebapi.models\Attribute.md)| The definition of the new attribute. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attributeCreateConfig**
> attributeCreateConfig($web_id)

Create or update an attribute's DataReference configuration (Create/Update PI point for PI Point DataReference).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AttributeApi();
$web_id = "web_id_example"; // string | The ID of the attribute.

try {
    $api_instance->attributeCreateConfig($web_id);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->attributeCreateConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the attribute. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attributeDelete**
> attributeDelete($web_id)

Delete an attribute.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AttributeApi();
$web_id = "web_id_example"; // string | The ID of the attribute.

try {
    $api_instance->attributeDelete($web_id);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->attributeDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the attribute. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attributeGet**
> \osisoft.pidevclub.piwebapi.models\Attribute attributeGet($web_id, $selected_fields)

Retrieve an attribute.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AttributeApi();
$web_id = "web_id_example"; // string | The ID of the attribute.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->attributeGet($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->attributeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the attribute. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\Attribute**](../Model/Attribute.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attributeGetAttributes**
> \osisoft.pidevclub.piwebapi.models\ItemsAttribute attributeGetAttributes($web_id, $category_name, $max_count, $name_filter, $search_full_hierarchy, $selected_fields, $show_excluded, $show_hidden, $sort_field, $sort_order, $start_index, $template_name, $value_type)

Get the child attributes of the specified attribute.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AttributeApi();
$web_id = "web_id_example"; // string | The ID of the parent attribute.
$category_name = "category_name_example"; // string | Specify that returned attributes must have this category. The default is no category filter.
$max_count = 56; // int | The maximum number of objects to be returned per call (page size). The default is 1000.
$name_filter = "name_filter_example"; // string | The name query string used for finding attributes. The default is no filter.
$search_full_hierarchy = true; // bool | Specifies if the search should include attributes nested further than the immediate attributes of the searchRoot. The default is 'false'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$show_excluded = true; // bool | Specified if the search should include attributes with the Excluded property set. The default is 'false'.
$show_hidden = true; // bool | Specified if the search should include attributes with the Hidden property set. The default is 'false'.
$sort_field = "sort_field_example"; // string | The field or property of the object used to sort the returned collection. The default is 'Name'.
$sort_order = "sort_order_example"; // string | The order that the returned collection is sorted. The default is 'Ascending'.
$start_index = 56; // int | The starting index (zero based) of the items to be returned. The default is 0.
$template_name = "template_name_example"; // string | Specify that returned attributes must be members of this template. The default is no template filter.
$value_type = "value_type_example"; // string | Specify that returned attributes' value type must be the given value type. The default is no value type filter.

try {
    $result = $api_instance->attributeGetAttributes($web_id, $category_name, $max_count, $name_filter, $search_full_hierarchy, $selected_fields, $show_excluded, $show_hidden, $sort_field, $sort_order, $start_index, $template_name, $value_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->attributeGetAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the parent attribute. |
 **category_name** | **string**| Specify that returned attributes must have this category. The default is no category filter. | [optional]
 **max_count** | **int**| The maximum number of objects to be returned per call (page size). The default is 1000. | [optional]
 **name_filter** | **string**| The name query string used for finding attributes. The default is no filter. | [optional]
 **search_full_hierarchy** | **bool**| Specifies if the search should include attributes nested further than the immediate attributes of the searchRoot. The default is &#39;false&#39;. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **show_excluded** | **bool**| Specified if the search should include attributes with the Excluded property set. The default is &#39;false&#39;. | [optional]
 **show_hidden** | **bool**| Specified if the search should include attributes with the Hidden property set. The default is &#39;false&#39;. | [optional]
 **sort_field** | **string**| The field or property of the object used to sort the returned collection. The default is &#39;Name&#39;. | [optional]
 **sort_order** | **string**| The order that the returned collection is sorted. The default is &#39;Ascending&#39;. | [optional]
 **start_index** | **int**| The starting index (zero based) of the items to be returned. The default is 0. | [optional]
 **template_name** | **string**| Specify that returned attributes must be members of this template. The default is no template filter. | [optional]
 **value_type** | **string**| Specify that returned attributes&#39; value type must be the given value type. The default is no value type filter. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsAttribute**](../Model/ItemsAttribute.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attributeGetByPath**
> \osisoft.pidevclub.piwebapi.models\Attribute attributeGetByPath($path, $selected_fields)

Retrieve an attribute by path.

This method returns an attribute based on the hierarchical path associated with it, and should be used when a path has been received from a separate part of the PI System for use in the PI Web API. Users should primarily search with the WebID when available.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AttributeApi();
$path = "path_example"; // string | The path to the attribute.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->attributeGetByPath($path, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->attributeGetByPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| The path to the attribute. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\Attribute**](../Model/Attribute.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attributeGetCategories**
> \osisoft.pidevclub.piwebapi.models\ItemsAttributeCategory attributeGetCategories($web_id, $selected_fields)

Get an attribute's categories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AttributeApi();
$web_id = "web_id_example"; // string | The ID of the attribute.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->attributeGetCategories($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->attributeGetCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the attribute. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsAttributeCategory**](../Model/ItemsAttributeCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attributeGetMultiple**
> \osisoft.pidevclub.piwebapi.models\ItemsItemAttribute attributeGetMultiple($as_parallel, $include_mode, $path, $selected_fields, $web_id)

Retrieve multiple attributes by web id or path.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AttributeApi();
$as_parallel = true; // bool | Specifies if the retrieval processes should be run in parallel on the server. This may improve the response time for large amounts of requested attributes. The default is 'false'.
$include_mode = "include_mode_example"; // string | The include mode for the return list. The default is 'All'.
$path = array("path_example"); // string[] | The path of an attribute. Multiple attributes may be specified with multiple instances of the parameter.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$web_id = array("web_id_example"); // string[] | The ID of an attribute. Multiple attributes may be specified with multiple instances of the parameter.

try {
    $result = $api_instance->attributeGetMultiple($as_parallel, $include_mode, $path, $selected_fields, $web_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->attributeGetMultiple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **as_parallel** | **bool**| Specifies if the retrieval processes should be run in parallel on the server. This may improve the response time for large amounts of requested attributes. The default is &#39;false&#39;. | [optional]
 **include_mode** | **string**| The include mode for the return list. The default is &#39;All&#39;. | [optional]
 **path** | [**string[]**](../Model/string.md)| The path of an attribute. Multiple attributes may be specified with multiple instances of the parameter. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **web_id** | [**string[]**](../Model/string.md)| The ID of an attribute. Multiple attributes may be specified with multiple instances of the parameter. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsItemAttribute**](../Model/ItemsItemAttribute.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attributeGetValue**
> \osisoft.pidevclub.piwebapi.models\TimedValue attributeGetValue($web_id, $selected_fields)

Get the attribute's value. This call is intended for use with attributes that have no data reference only. For attributes with a data reference, consult the documentation for Streams.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AttributeApi();
$web_id = "web_id_example"; // string | The ID of the attribute.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->attributeGetValue($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->attributeGetValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the attribute. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\TimedValue**](../Model/TimedValue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attributeSetValue**
> attributeSetValue($web_id, $value)

Set the value of a configuration item attribute. For attributes with a data reference or non-configuration item attributes, consult the documentation for streams.

Users must be aware of the value type that the attribute takes before changing the value. If a value entered by the user does not match the value type expressed in the attribute, it will not work or it will return an error. Users should also be careful of what the value type means, for instance, if a value type accepts strings and the user enters a number, the attribute will interpret it as a string of characters and not as the integer value that the user may have wanted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AttributeApi();
$web_id = "web_id_example"; // string | The ID of the attribute.
$value = new \osisoft.pidevclub.piwebapi.models\TimedValue(); // \osisoft.pidevclub.piwebapi.models\TimedValue | The value to write.

try {
    $api_instance->attributeSetValue($web_id, $value);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->attributeSetValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the attribute. |
 **value** | [**\osisoft.pidevclub.piwebapi.models\TimedValue**](../Model/\osisoft.pidevclub.piwebapi.models\TimedValue.md)| The value to write. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attributeUpdate**
> attributeUpdate($web_id, $attribute)

Update an attribute by replacing items in its definition.

If an attribute is based on a template, the user must make sure to update the attribute appropriately so that it does not conflict with the template's design. Once a template is applied to an attribute, it can not be changed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AttributeApi();
$web_id = "web_id_example"; // string | The ID of the attribute.
$attribute = new \osisoft.pidevclub.piwebapi.models\Attribute(); // \osisoft.pidevclub.piwebapi.models\Attribute | A partial attribute containing the desired changes.

try {
    $api_instance->attributeUpdate($web_id, $attribute);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->attributeUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the attribute. |
 **attribute** | [**\osisoft.pidevclub.piwebapi.models\Attribute**](../Model/\osisoft.pidevclub.piwebapi.models\Attribute.md)| A partial attribute containing the desired changes. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

