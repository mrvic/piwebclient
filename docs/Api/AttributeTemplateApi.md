# Swagger\Client\AttributeTemplateApi

All URIs are relative to *https://proghackuc2017.osisoft.com/piwebapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attributeTemplateCreateAttributeTemplate**](AttributeTemplateApi.md#attributeTemplateCreateAttributeTemplate) | **POST** /attributetemplates/{webId}/attributetemplates | Create an attribute template as a child of another attribute template.
[**attributeTemplateDelete**](AttributeTemplateApi.md#attributeTemplateDelete) | **DELETE** /attributetemplates/{webId} | Delete an attribute template.
[**attributeTemplateGet**](AttributeTemplateApi.md#attributeTemplateGet) | **GET** /attributetemplates/{webId} | Retrieve an attribute template.
[**attributeTemplateGetAttributeTemplates**](AttributeTemplateApi.md#attributeTemplateGetAttributeTemplates) | **GET** /attributetemplates/{webId}/attributetemplates | Retrieve an attribute template&#39;s child attribute templates.
[**attributeTemplateGetByPath**](AttributeTemplateApi.md#attributeTemplateGetByPath) | **GET** /attributetemplates | Retrieve an attribute template by path.
[**attributeTemplateGetCategories**](AttributeTemplateApi.md#attributeTemplateGetCategories) | **GET** /attributetemplates/{webId}/categories | Get an attribute template&#39;s categories.
[**attributeTemplateUpdate**](AttributeTemplateApi.md#attributeTemplateUpdate) | **PATCH** /attributetemplates/{webId} | Update an existing attribute template by replacing items in its definition.


# **attributeTemplateCreateAttributeTemplate**
> attributeTemplateCreateAttributeTemplate($web_id, $template)

Create an attribute template as a child of another attribute template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AttributeTemplateApi();
$web_id = "web_id_example"; // string | The ID of the parent attribute template on which to create the attribute template.
$template = new \osisoft.pidevclub.piwebapi.models\AttributeTemplate(); // \osisoft.pidevclub.piwebapi.models\AttributeTemplate | The attribute template definition.

try {
    $api_instance->attributeTemplateCreateAttributeTemplate($web_id, $template);
} catch (Exception $e) {
    echo 'Exception when calling AttributeTemplateApi->attributeTemplateCreateAttributeTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the parent attribute template on which to create the attribute template. |
 **template** | [**\osisoft.pidevclub.piwebapi.models\AttributeTemplate**](../Model/\osisoft.pidevclub.piwebapi.models\AttributeTemplate.md)| The attribute template definition. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attributeTemplateDelete**
> attributeTemplateDelete($web_id)

Delete an attribute template.

Deleting an attribute template will delete the attributes that were created based on the template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AttributeTemplateApi();
$web_id = "web_id_example"; // string | The ID of the attribute template.

try {
    $api_instance->attributeTemplateDelete($web_id);
} catch (Exception $e) {
    echo 'Exception when calling AttributeTemplateApi->attributeTemplateDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the attribute template. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attributeTemplateGet**
> \osisoft.pidevclub.piwebapi.models\AttributeTemplate attributeTemplateGet($web_id, $selected_fields)

Retrieve an attribute template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AttributeTemplateApi();
$web_id = "web_id_example"; // string | The ID of the attribute template.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->attributeTemplateGet($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeTemplateApi->attributeTemplateGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the attribute template. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\AttributeTemplate**](../Model/AttributeTemplate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attributeTemplateGetAttributeTemplates**
> \osisoft.pidevclub.piwebapi.models\ItemsAttributeTemplate attributeTemplateGetAttributeTemplates($web_id, $selected_fields)

Retrieve an attribute template's child attribute templates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AttributeTemplateApi();
$web_id = "web_id_example"; // string | The ID of the attribute template.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->attributeTemplateGetAttributeTemplates($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeTemplateApi->attributeTemplateGetAttributeTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the attribute template. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsAttributeTemplate**](../Model/ItemsAttributeTemplate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attributeTemplateGetByPath**
> \osisoft.pidevclub.piwebapi.models\AttributeTemplate attributeTemplateGetByPath($path, $selected_fields)

Retrieve an attribute template by path.

This method returns an attribute template based on the hierarchical path associated with it, and should be used when a path has been received from a separate part of the PI System for use in the PI Web API. Users should primarily search with the WebID when available.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AttributeTemplateApi();
$path = "path_example"; // string | The path to the attribute template.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->attributeTemplateGetByPath($path, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeTemplateApi->attributeTemplateGetByPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| The path to the attribute template. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\AttributeTemplate**](../Model/AttributeTemplate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attributeTemplateGetCategories**
> \osisoft.pidevclub.piwebapi.models\ItemsAttributeCategory attributeTemplateGetCategories($web_id, $selected_fields)

Get an attribute template's categories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AttributeTemplateApi();
$web_id = "web_id_example"; // string | The ID of the attribute template.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->attributeTemplateGetCategories($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeTemplateApi->attributeTemplateGetCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the attribute template. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsAttributeCategory**](../Model/ItemsAttributeCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attributeTemplateUpdate**
> attributeTemplateUpdate($web_id, $template)

Update an existing attribute template by replacing items in its definition.

Updating an attribute template will propagate changes to the attributes that were created based on the template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AttributeTemplateApi();
$web_id = "web_id_example"; // string | The ID of the attribute template.
$template = new \osisoft.pidevclub.piwebapi.models\AttributeTemplate(); // \osisoft.pidevclub.piwebapi.models\AttributeTemplate | A partial attribute template containing the desired changes.

try {
    $api_instance->attributeTemplateUpdate($web_id, $template);
} catch (Exception $e) {
    echo 'Exception when calling AttributeTemplateApi->attributeTemplateUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the attribute template. |
 **template** | [**\osisoft.pidevclub.piwebapi.models\AttributeTemplate**](../Model/\osisoft.pidevclub.piwebapi.models\AttributeTemplate.md)| A partial attribute template containing the desired changes. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

