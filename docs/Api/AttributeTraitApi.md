# Swagger\Client\AttributeTraitApi

All URIs are relative to *https://proghackuc2017.osisoft.com/piwebapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attributeTraitGet**](AttributeTraitApi.md#attributeTraitGet) | **GET** /attributetraits/{name} | Retrieve an attribute trait.
[**attributeTraitGetByCategory**](AttributeTraitApi.md#attributeTraitGetByCategory) | **GET** /attributetraits | Retrieve all attribute traits of the specified category/categories.


# **attributeTraitGet**
> \osisoft.pidevclub.piwebapi.models\AttributeTrait attributeTraitGet($name, $selected_fields)

Retrieve an attribute trait.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AttributeTraitApi();
$name = "name_example"; // string | The name or abbreviation of the attribute trait.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->attributeTraitGet($name, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeTraitApi->attributeTraitGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name or abbreviation of the attribute trait. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\AttributeTrait**](../Model/AttributeTrait.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attributeTraitGetByCategory**
> \osisoft.pidevclub.piwebapi.models\ItemsAttributeTrait attributeTraitGetByCategory($category, $selected_fields)

Retrieve all attribute traits of the specified category/categories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AttributeTraitApi();
$category = array("category_example"); // string[] | The category of the attribute traits. Multiple categories may be specified with multiple instances of the parameter. If the parameter is not specified, or if its value is \"all\", then all attribute traits of all categories will be returned.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->attributeTraitGetByCategory($category, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeTraitApi->attributeTraitGetByCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | [**string[]**](../Model/string.md)| The category of the attribute traits. Multiple categories may be specified with multiple instances of the parameter. If the parameter is not specified, or if its value is \&quot;all\&quot;, then all attribute traits of all categories will be returned. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsAttributeTrait**](../Model/ItemsAttributeTrait.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

