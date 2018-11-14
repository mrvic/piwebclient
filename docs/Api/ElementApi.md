# Swagger\Client\ElementApi

All URIs are relative to *https://proghackuc2017.osisoft.com/piwebapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**elementAddReferencedElement**](ElementApi.md#elementAddReferencedElement) | **POST** /elements/{webId}/referencedelements | Add a reference to an existing element to the child elements collection.
[**elementCreateAnalysis**](ElementApi.md#elementCreateAnalysis) | **POST** /elements/{webId}/analyses | Create an Analysis.
[**elementCreateAttribute**](ElementApi.md#elementCreateAttribute) | **POST** /elements/{webId}/attributes | Create a new attribute of the specified element.
[**elementCreateConfig**](ElementApi.md#elementCreateConfig) | **POST** /elements/{webId}/config | Executes the create configuration function of the data references found within the attributes of the element, and optionally, its children.
[**elementCreateElement**](ElementApi.md#elementCreateElement) | **POST** /elements/{webId}/elements | Create a child element.
[**elementCreateSearchByAttribute**](ElementApi.md#elementCreateSearchByAttribute) | **POST** /elements/searchbyattribute | Create a link for a \&quot;Search Elements By Attribute Value\&quot; operation, whose queries are specified in the request content. The SearchRoot is specified by the Web Id of the root Element. If the SearchRoot is not specified, then the search starts at the Asset Database. ElementTemplate must be provided as the Web ID of the ElementTemplate, which are used to create the Elements. All the attributes in the queries must be defined as AttributeTemplates on the ElementTemplate. An array of attribute value queries are ANDed together to find the desired Element objects. At least one value query must be specified. There are limitations on SearchOperators.
[**elementCreateSecurityEntry**](ElementApi.md#elementCreateSecurityEntry) | **POST** /elements/{webId}/securityentries | Create a security entry owned by the element.
[**elementDelete**](ElementApi.md#elementDelete) | **DELETE** /elements/{webId} | Delete an element.
[**elementDeleteSecurityEntry**](ElementApi.md#elementDeleteSecurityEntry) | **DELETE** /elements/{webId}/securityentries/{name} | Delete a security entry owned by the element.
[**elementExecuteSearchByAttribute**](ElementApi.md#elementExecuteSearchByAttribute) | **GET** /elements/searchbyattribute/{searchId} | Execute a \&quot;Search Elements By Attribute Value\&quot; operation.
[**elementFindElementAttributes**](ElementApi.md#elementFindElementAttributes) | **GET** /elements/{webId}/elementattributes | Retrieves a list of element attributes matching the specified filters from the specified element.
[**elementGet**](ElementApi.md#elementGet) | **GET** /elements/{webId} | Retrieve an element.
[**elementGetAnalyses**](ElementApi.md#elementGetAnalyses) | **GET** /elements/{webId}/analyses | Retrieve analyses based on the specified conditions.
[**elementGetAttributes**](ElementApi.md#elementGetAttributes) | **GET** /elements/{webId}/attributes | Get the attributes of the specified element.
[**elementGetByPath**](ElementApi.md#elementGetByPath) | **GET** /elements | Retrieve an element by path.
[**elementGetCategories**](ElementApi.md#elementGetCategories) | **GET** /elements/{webId}/categories | Get an element&#39;s categories.
[**elementGetElements**](ElementApi.md#elementGetElements) | **GET** /elements/{webId}/elements | Retrieve elements based on the specified conditions. By default, this method selects immediate children of the specified element.
[**elementGetEventFrames**](ElementApi.md#elementGetEventFrames) | **GET** /elements/{webId}/eventframes | Retrieve event frames that reference this element based on the specified conditions. By default, returns all event frames that reference this element with a start time in the past 8 hours.
[**elementGetMultiple**](ElementApi.md#elementGetMultiple) | **GET** /elements/multiple | Retrieve multiple elements by web id or path.
[**elementGetReferencedElements**](ElementApi.md#elementGetReferencedElements) | **GET** /elements/{webId}/referencedelements | Retrieve referenced elements based on the specified conditions. By default, this method selects all referenced elements of the current resource.
[**elementGetSecurity**](ElementApi.md#elementGetSecurity) | **GET** /elements/{webId}/security | Get the security information of the specified security item associated with the element for a specified user.
[**elementGetSecurityEntries**](ElementApi.md#elementGetSecurityEntries) | **GET** /elements/{webId}/securityentries | Retrieve the security entries associated with the element based on the specified criteria. By default, all security entries for this element are returned.
[**elementGetSecurityEntryByName**](ElementApi.md#elementGetSecurityEntryByName) | **GET** /elements/{webId}/securityentries/{name} | Retrieve the security entry associated with the element with the specified name.
[**elementRemoveReferencedElement**](ElementApi.md#elementRemoveReferencedElement) | **DELETE** /elements/{webId}/referencedelements | Remove a reference to an existing element from the child elements collection.
[**elementUpdate**](ElementApi.md#elementUpdate) | **PATCH** /elements/{webId} | Update an element by replacing items in its definition.
[**elementUpdateSecurityEntry**](ElementApi.md#elementUpdateSecurityEntry) | **PUT** /elements/{webId}/securityentries/{name} | Update a security entry owned by the element.


# **elementAddReferencedElement**
> elementAddReferencedElement($web_id, $referenced_element_web_id, $reference_type)

Add a reference to an existing element to the child elements collection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementApi();
$web_id = "web_id_example"; // string | The ID of the element which the referenced element will be added to.
$referenced_element_web_id = array("referenced_element_web_id_example"); // string[] | The ID of the referenced element. Multiple referenced elements may be specified with multiple instances of the parameter.
$reference_type = "reference_type_example"; // string | The name of the reference type between the parent and the referenced element. The default is \"parent-child\".

try {
    $api_instance->elementAddReferencedElement($web_id, $referenced_element_web_id, $reference_type);
} catch (Exception $e) {
    echo 'Exception when calling ElementApi->elementAddReferencedElement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the element which the referenced element will be added to. |
 **referenced_element_web_id** | [**string[]**](../Model/string.md)| The ID of the referenced element. Multiple referenced elements may be specified with multiple instances of the parameter. |
 **reference_type** | **string**| The name of the reference type between the parent and the referenced element. The default is \&quot;parent-child\&quot;. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementCreateAnalysis**
> elementCreateAnalysis($web_id, $analysis)

Create an Analysis.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementApi();
$web_id = "web_id_example"; // string | The ID of the element on which to create the Analysis.
$analysis = new \osisoft.pidevclub.piwebapi.models\Analysis(); // \osisoft.pidevclub.piwebapi.models\Analysis | The new Analysis definition.

try {
    $api_instance->elementCreateAnalysis($web_id, $analysis);
} catch (Exception $e) {
    echo 'Exception when calling ElementApi->elementCreateAnalysis: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the element on which to create the Analysis. |
 **analysis** | [**\osisoft.pidevclub.piwebapi.models\Analysis**](../Model/\osisoft.pidevclub.piwebapi.models\Analysis.md)| The new Analysis definition. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementCreateAttribute**
> elementCreateAttribute($web_id, $attribute)

Create a new attribute of the specified element.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementApi();
$web_id = "web_id_example"; // string | The ID of the element on which to create the attribute.
$attribute = new \osisoft.pidevclub.piwebapi.models\Attribute(); // \osisoft.pidevclub.piwebapi.models\Attribute | The definition of the new attribute.

try {
    $api_instance->elementCreateAttribute($web_id, $attribute);
} catch (Exception $e) {
    echo 'Exception when calling ElementApi->elementCreateAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the element on which to create the attribute. |
 **attribute** | [**\osisoft.pidevclub.piwebapi.models\Attribute**](../Model/\osisoft.pidevclub.piwebapi.models\Attribute.md)| The definition of the new attribute. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementCreateConfig**
> elementCreateConfig($web_id, $include_child_elements)

Executes the create configuration function of the data references found within the attributes of the element, and optionally, its children.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementApi();
$web_id = "web_id_example"; // string | The ID of the element.
$include_child_elements = true; // bool | If true, includes the child elements of the specified element.

try {
    $api_instance->elementCreateConfig($web_id, $include_child_elements);
} catch (Exception $e) {
    echo 'Exception when calling ElementApi->elementCreateConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the element. |
 **include_child_elements** | **bool**| If true, includes the child elements of the specified element. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementCreateElement**
> elementCreateElement($web_id, $element)

Create a child element.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementApi();
$web_id = "web_id_example"; // string | The ID of the parent element on which to create the element.
$element = new \osisoft.pidevclub.piwebapi.models\Element(); // \osisoft.pidevclub.piwebapi.models\Element | The new element definition.

try {
    $api_instance->elementCreateElement($web_id, $element);
} catch (Exception $e) {
    echo 'Exception when calling ElementApi->elementCreateElement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the parent element on which to create the element. |
 **element** | [**\osisoft.pidevclub.piwebapi.models\Element**](../Model/\osisoft.pidevclub.piwebapi.models\Element.md)| The new element definition. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementCreateSearchByAttribute**
> elementCreateSearchByAttribute()

Create a link for a \"Search Elements By Attribute Value\" operation, whose queries are specified in the request content. The SearchRoot is specified by the Web Id of the root Element. If the SearchRoot is not specified, then the search starts at the Asset Database. ElementTemplate must be provided as the Web ID of the ElementTemplate, which are used to create the Elements. All the attributes in the queries must be defined as AttributeTemplates on the ElementTemplate. An array of attribute value queries are ANDed together to find the desired Element objects. At least one value query must be specified. There are limitations on SearchOperators.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementApi();

try {
    $api_instance->elementCreateSearchByAttribute();
} catch (Exception $e) {
    echo 'Exception when calling ElementApi->elementCreateSearchByAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementCreateSecurityEntry**
> elementCreateSecurityEntry($web_id, $security_entry, $apply_to_children)

Create a security entry owned by the element.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementApi();
$web_id = "web_id_example"; // string | The ID of the element where the security entry will be created.
$security_entry = new \osisoft.pidevclub.piwebapi.models\SecurityEntry(); // \osisoft.pidevclub.piwebapi.models\SecurityEntry | The new security entry definition. The full list of allow and deny rights must be supplied.
$apply_to_children = true; // bool | If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change.

try {
    $api_instance->elementCreateSecurityEntry($web_id, $security_entry, $apply_to_children);
} catch (Exception $e) {
    echo 'Exception when calling ElementApi->elementCreateSecurityEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the element where the security entry will be created. |
 **security_entry** | [**\osisoft.pidevclub.piwebapi.models\SecurityEntry**](../Model/\osisoft.pidevclub.piwebapi.models\SecurityEntry.md)| The new security entry definition. The full list of allow and deny rights must be supplied. |
 **apply_to_children** | **bool**| If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementDelete**
> elementDelete($web_id)

Delete an element.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementApi();
$web_id = "web_id_example"; // string | The ID of the element.

try {
    $api_instance->elementDelete($web_id);
} catch (Exception $e) {
    echo 'Exception when calling ElementApi->elementDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the element. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementDeleteSecurityEntry**
> elementDeleteSecurityEntry($name, $web_id, $apply_to_children)

Delete a security entry owned by the element.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementApi();
$name = "name_example"; // string | The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username.
$web_id = "web_id_example"; // string | The ID of the element where the security entry will be deleted.
$apply_to_children = true; // bool | If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change.

try {
    $api_instance->elementDeleteSecurityEntry($name, $web_id, $apply_to_children);
} catch (Exception $e) {
    echo 'Exception when calling ElementApi->elementDeleteSecurityEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username. |
 **web_id** | **string**| The ID of the element where the security entry will be deleted. |
 **apply_to_children** | **bool**| If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementExecuteSearchByAttribute**
> elementExecuteSearchByAttribute($search_id, $category_name, $description_filter, $max_count, $name_filter, $search_full_hierarchy, $selected_fields, $sort_field, $sort_order, $start_index)

Execute a \"Search Elements By Attribute Value\" operation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementApi();
$search_id = "search_id_example"; // string | The encoded search Id of the \"Search Elements By Attribute Value\" operation.
$category_name = "category_name_example"; // string | Specify that the owner of the returned attributes must have this category. For Asset Servers older than 2.7, a 400 status code (Bad Request) will be returned if this parameter is specified. The default is no filter.
$description_filter = "description_filter_example"; // string | The element description filter string used for finding objects. Only the first 440 characters of the description will be searched. For Asset Servers older than 2.7, a 400 status code (Bad Request) will be returned if this parameter is specified. The default is no filter.
$max_count = 56; // int | The maximum number of objects to be returned. The default is 1000.
$name_filter = "name_filter_example"; // string | The name query string used for finding objects. The default is no filter.
$search_full_hierarchy = true; // bool | Specifies if the search should include objects nested further than the immediate children of the searchRoot. The default is 'false'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$sort_field = "sort_field_example"; // string | The field or property of the object used to sort the returned collection. The default is 'Name'.
$sort_order = "sort_order_example"; // string | The order that the returned collection is sorted. The default is 'Ascending'.
$start_index = 56; // int | The starting index (zero based) of the items to be returned. The default is 0.

try {
    $api_instance->elementExecuteSearchByAttribute($search_id, $category_name, $description_filter, $max_count, $name_filter, $search_full_hierarchy, $selected_fields, $sort_field, $sort_order, $start_index);
} catch (Exception $e) {
    echo 'Exception when calling ElementApi->elementExecuteSearchByAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_id** | **string**| The encoded search Id of the \&quot;Search Elements By Attribute Value\&quot; operation. |
 **category_name** | **string**| Specify that the owner of the returned attributes must have this category. For Asset Servers older than 2.7, a 400 status code (Bad Request) will be returned if this parameter is specified. The default is no filter. | [optional]
 **description_filter** | **string**| The element description filter string used for finding objects. Only the first 440 characters of the description will be searched. For Asset Servers older than 2.7, a 400 status code (Bad Request) will be returned if this parameter is specified. The default is no filter. | [optional]
 **max_count** | **int**| The maximum number of objects to be returned. The default is 1000. | [optional]
 **name_filter** | **string**| The name query string used for finding objects. The default is no filter. | [optional]
 **search_full_hierarchy** | **bool**| Specifies if the search should include objects nested further than the immediate children of the searchRoot. The default is &#39;false&#39;. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **sort_field** | **string**| The field or property of the object used to sort the returned collection. The default is &#39;Name&#39;. | [optional]
 **sort_order** | **string**| The order that the returned collection is sorted. The default is &#39;Ascending&#39;. | [optional]
 **start_index** | **int**| The starting index (zero based) of the items to be returned. The default is 0. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementFindElementAttributes**
> \osisoft.pidevclub.piwebapi.models\ItemsAttribute elementFindElementAttributes($web_id, $attribute_category, $attribute_description_filter, $attribute_name_filter, $attribute_type, $element_category, $element_description_filter, $element_name_filter, $element_template, $element_type, $max_count, $search_full_hierarchy, $selected_fields, $sort_field, $sort_order, $start_index)

Retrieves a list of element attributes matching the specified filters from the specified element.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementApi();
$web_id = "web_id_example"; // string | The ID of the element to use as the root of the search.
$attribute_category = "attribute_category_example"; // string | Specify that returned attributes must have this category. The default is no filter.
$attribute_description_filter = "attribute_description_filter_example"; // string | The attribute description filter string used for finding objects. Only the first 440 characters of the description will be searched. For Asset Servers older than 2.7, a 400 status code (Bad Request) will be returned if this parameter is specified. The default is no filter.
$attribute_name_filter = "attribute_name_filter_example"; // string | The attribute name filter string used for finding objects. The default is no filter.
$attribute_type = "attribute_type_example"; // string | Specify that returned attributes' value type must be this value type. The default is no filter.
$element_category = "element_category_example"; // string | Specify that the owner of the returned attributes must have this category. The default is no filter.
$element_description_filter = "element_description_filter_example"; // string | The element description filter string used for finding objects. Only the first 440 characters of the description will be searched. For Asset Servers older than 2.7, a 400 status code (Bad Request) will be returned if this parameter is specified. The default is no filter.
$element_name_filter = "element_name_filter_example"; // string | The element name filter string used for finding objects. The default is no filter.
$element_template = "element_template_example"; // string | Specify that the owner of the returned attributes must have this template or a template derived from this template. The default is no filter.
$element_type = "element_type_example"; // string | Specify that the element of the returned attributes must have this AFElementType. The default is no filter.
$max_count = 56; // int | The maximum number of objects to be returned (the page size). The default is 1000.
$search_full_hierarchy = true; // bool | Specifies if the search should include objects nested further than immediate children of the given resource. The default is 'false'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$sort_field = "sort_field_example"; // string | The field or property of the object used to sort the returned collection. The default is 'Name'.
$sort_order = "sort_order_example"; // string | The order that the returned collection is sorted. The default is 'Ascending'.
$start_index = 56; // int | The starting index (zero based) of the items to be returned. The default is 0.

try {
    $result = $api_instance->elementFindElementAttributes($web_id, $attribute_category, $attribute_description_filter, $attribute_name_filter, $attribute_type, $element_category, $element_description_filter, $element_name_filter, $element_template, $element_type, $max_count, $search_full_hierarchy, $selected_fields, $sort_field, $sort_order, $start_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementApi->elementFindElementAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the element to use as the root of the search. |
 **attribute_category** | **string**| Specify that returned attributes must have this category. The default is no filter. | [optional]
 **attribute_description_filter** | **string**| The attribute description filter string used for finding objects. Only the first 440 characters of the description will be searched. For Asset Servers older than 2.7, a 400 status code (Bad Request) will be returned if this parameter is specified. The default is no filter. | [optional]
 **attribute_name_filter** | **string**| The attribute name filter string used for finding objects. The default is no filter. | [optional]
 **attribute_type** | **string**| Specify that returned attributes&#39; value type must be this value type. The default is no filter. | [optional]
 **element_category** | **string**| Specify that the owner of the returned attributes must have this category. The default is no filter. | [optional]
 **element_description_filter** | **string**| The element description filter string used for finding objects. Only the first 440 characters of the description will be searched. For Asset Servers older than 2.7, a 400 status code (Bad Request) will be returned if this parameter is specified. The default is no filter. | [optional]
 **element_name_filter** | **string**| The element name filter string used for finding objects. The default is no filter. | [optional]
 **element_template** | **string**| Specify that the owner of the returned attributes must have this template or a template derived from this template. The default is no filter. | [optional]
 **element_type** | **string**| Specify that the element of the returned attributes must have this AFElementType. The default is no filter. | [optional]
 **max_count** | **int**| The maximum number of objects to be returned (the page size). The default is 1000. | [optional]
 **search_full_hierarchy** | **bool**| Specifies if the search should include objects nested further than immediate children of the given resource. The default is &#39;false&#39;. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **sort_field** | **string**| The field or property of the object used to sort the returned collection. The default is &#39;Name&#39;. | [optional]
 **sort_order** | **string**| The order that the returned collection is sorted. The default is &#39;Ascending&#39;. | [optional]
 **start_index** | **int**| The starting index (zero based) of the items to be returned. The default is 0. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsAttribute**](../Model/ItemsAttribute.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementGet**
> \osisoft.pidevclub.piwebapi.models\Element elementGet($web_id, $selected_fields)

Retrieve an element.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementApi();
$web_id = "web_id_example"; // string | The ID of the element.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->elementGet($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementApi->elementGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the element. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\Element**](../Model/Element.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementGetAnalyses**
> \osisoft.pidevclub.piwebapi.models\ItemsAnalysis elementGetAnalyses($web_id, $max_count, $selected_fields, $sort_field, $sort_order, $start_index)

Retrieve analyses based on the specified conditions.

Users can search for the analyses based on specific search parameters. If no parameters are specified in the search, the default values for each parameter will be used and will return the analyses that match the default search.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementApi();
$web_id = "web_id_example"; // string | The ID of the element, which is the Target of the analyses.
$max_count = 56; // int | The maximum number of objects to be returned per call (page size). The default is 1000.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$sort_field = "sort_field_example"; // string | The field or property of the object used to sort the returned collection. The default is 'Name'.
$sort_order = "sort_order_example"; // string | The order that the returned collection is sorted. The default is 'Ascending'.
$start_index = 56; // int | The starting index (zero based) of the items to be returned. The default is 0.

try {
    $result = $api_instance->elementGetAnalyses($web_id, $max_count, $selected_fields, $sort_field, $sort_order, $start_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementApi->elementGetAnalyses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the element, which is the Target of the analyses. |
 **max_count** | **int**| The maximum number of objects to be returned per call (page size). The default is 1000. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **sort_field** | **string**| The field or property of the object used to sort the returned collection. The default is &#39;Name&#39;. | [optional]
 **sort_order** | **string**| The order that the returned collection is sorted. The default is &#39;Ascending&#39;. | [optional]
 **start_index** | **int**| The starting index (zero based) of the items to be returned. The default is 0. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsAnalysis**](../Model/ItemsAnalysis.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementGetAttributes**
> \osisoft.pidevclub.piwebapi.models\ItemsAttribute elementGetAttributes($web_id, $category_name, $max_count, $name_filter, $search_full_hierarchy, $selected_fields, $show_excluded, $show_hidden, $sort_field, $sort_order, $start_index, $template_name, $value_type)

Get the attributes of the specified element.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementApi();
$web_id = "web_id_example"; // string | The ID of the element.
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
    $result = $api_instance->elementGetAttributes($web_id, $category_name, $max_count, $name_filter, $search_full_hierarchy, $selected_fields, $show_excluded, $show_hidden, $sort_field, $sort_order, $start_index, $template_name, $value_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementApi->elementGetAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the element. |
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

# **elementGetByPath**
> \osisoft.pidevclub.piwebapi.models\Element elementGetByPath($path, $selected_fields)

Retrieve an element by path.

This method returns an element based on the hierarchical path associated with it, and should be used when a path has been received from a separate part of the PI System for use in the PI Web API. Users should primarily search with the WebID when available.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementApi();
$path = "path_example"; // string | The path to the element.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->elementGetByPath($path, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementApi->elementGetByPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| The path to the element. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\Element**](../Model/Element.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementGetCategories**
> \osisoft.pidevclub.piwebapi.models\ItemsElementCategory elementGetCategories($web_id, $selected_fields)

Get an element's categories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementApi();
$web_id = "web_id_example"; // string | The ID of the element.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->elementGetCategories($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementApi->elementGetCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the element. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsElementCategory**](../Model/ItemsElementCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementGetElements**
> \osisoft.pidevclub.piwebapi.models\ItemsElement elementGetElements($web_id, $category_name, $description_filter, $element_type, $max_count, $name_filter, $search_full_hierarchy, $selected_fields, $sort_field, $sort_order, $start_index, $template_name)

Retrieve elements based on the specified conditions. By default, this method selects immediate children of the specified element.

Users can search for the elements based on specific search parameters. If no parameters are specified in the search, the default values for each parameter will be used and will return the elements that match the default search.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementApi();
$web_id = "web_id_example"; // string | The ID of the element to use as the root of the search.
$category_name = "category_name_example"; // string | Specify that returned elements must have this category. The default is no category filter.
$description_filter = "description_filter_example"; // string | Specify that returned elements must have this description. The default is no description filter.
$element_type = "element_type_example"; // string | Specify that returned elements must have this type. The default type is 'Any'.
$max_count = 56; // int | The maximum number of objects to be returned per call (page size). The default is 1000.
$name_filter = "name_filter_example"; // string | The name query string used for finding objects. The default is no filter.
$search_full_hierarchy = true; // bool | Specifies if the search should include objects nested further than the immediate children of the searchRoot. The default is 'false'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$sort_field = "sort_field_example"; // string | The field or property of the object used to sort the returned collection. The default is 'Name'.
$sort_order = "sort_order_example"; // string | The order that the returned collection is sorted. The default is 'Ascending'.
$start_index = 56; // int | The starting index (zero based) of the items to be returned. The default is 0.
$template_name = "template_name_example"; // string | Specify that returned elements must have this template or a template derived from this template. The default is no template filter.

try {
    $result = $api_instance->elementGetElements($web_id, $category_name, $description_filter, $element_type, $max_count, $name_filter, $search_full_hierarchy, $selected_fields, $sort_field, $sort_order, $start_index, $template_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementApi->elementGetElements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the element to use as the root of the search. |
 **category_name** | **string**| Specify that returned elements must have this category. The default is no category filter. | [optional]
 **description_filter** | **string**| Specify that returned elements must have this description. The default is no description filter. | [optional]
 **element_type** | **string**| Specify that returned elements must have this type. The default type is &#39;Any&#39;. | [optional]
 **max_count** | **int**| The maximum number of objects to be returned per call (page size). The default is 1000. | [optional]
 **name_filter** | **string**| The name query string used for finding objects. The default is no filter. | [optional]
 **search_full_hierarchy** | **bool**| Specifies if the search should include objects nested further than the immediate children of the searchRoot. The default is &#39;false&#39;. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **sort_field** | **string**| The field or property of the object used to sort the returned collection. The default is &#39;Name&#39;. | [optional]
 **sort_order** | **string**| The order that the returned collection is sorted. The default is &#39;Ascending&#39;. | [optional]
 **start_index** | **int**| The starting index (zero based) of the items to be returned. The default is 0. | [optional]
 **template_name** | **string**| Specify that returned elements must have this template or a template derived from this template. The default is no template filter. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsElement**](../Model/ItemsElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementGetEventFrames**
> \osisoft.pidevclub.piwebapi.models\ItemsEventFrame elementGetEventFrames($web_id, $can_be_acknowledged, $category_name, $end_time, $is_acknowledged, $max_count, $name_filter, $search_mode, $selected_fields, $severity, $sort_field, $sort_order, $start_index, $start_time, $template_name)

Retrieve event frames that reference this element based on the specified conditions. By default, returns all event frames that reference this element with a start time in the past 8 hours.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementApi();
$web_id = "web_id_example"; // string | The ID of the element whose related event frames are sought.
$can_be_acknowledged = true; // bool | Specify the returned event frames' canBeAcknowledged property. The default is no canBeAcknowledged filter.
$category_name = "category_name_example"; // string | Specify that returned event frames must have this category. The default is no category filter.
$end_time = "end_time_example"; // string | The ending time for the search. The endTime must be greater than or equal to the startTime. The searchMode parameter will control whether the comparison will be performed against the event frame's startTime or endTime. The default is '*' if searchMode is not one of the 'Backward*' or 'Forward*' values.
$is_acknowledged = true; // bool | Specify the returned event frames' isAcknowledged property. The default no isAcknowledged filter.
$max_count = 56; // int | The maximum number of objects to be returned per call (page size). The default is 1000.
$name_filter = "name_filter_example"; // string | The name query string used for finding event frames. The default is no filter.
$search_mode = "search_mode_example"; // string | Determines how the startTime and endTime parameters are treated when searching for event frame objects to be included in the returned collection. If this parameter is one of the 'Backward*' or 'Forward*' values, none of endTime, sortField, or sortOrder may be specified. The default is 'Overlapped'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$severity = array("severity_example"); // string[] | Specify that returned event frames must have this severity. Multiple severity values may be specified with multiple instances of the parameter. The default is no severity filter.
$sort_field = "sort_field_example"; // string | The field or property of the object used to sort the returned collection. The default is 'Name' if searchMode is not one of the 'Backward*' or 'Forward*' values.
$sort_order = "sort_order_example"; // string | The order that the returned collection is sorted. The default is 'Ascending' if searchMode is not one of the 'Backward*' or 'Forward*' values.
$start_index = 56; // int | The starting index (zero based) of the items to be returned. The default is 0.
$start_time = "start_time_example"; // string | The starting time for the search. startTime must be less than or equal to the endTime. The searchMode parameter will control whether the comparison will be performed against the event frame's startTime or endTime. The default is '*-8h'.
$template_name = "template_name_example"; // string | Specify that returned event frames must have this template or a template derived from this template. The default is no template filter. Specify this parameter by name.

try {
    $result = $api_instance->elementGetEventFrames($web_id, $can_be_acknowledged, $category_name, $end_time, $is_acknowledged, $max_count, $name_filter, $search_mode, $selected_fields, $severity, $sort_field, $sort_order, $start_index, $start_time, $template_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementApi->elementGetEventFrames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the element whose related event frames are sought. |
 **can_be_acknowledged** | **bool**| Specify the returned event frames&#39; canBeAcknowledged property. The default is no canBeAcknowledged filter. | [optional]
 **category_name** | **string**| Specify that returned event frames must have this category. The default is no category filter. | [optional]
 **end_time** | **string**| The ending time for the search. The endTime must be greater than or equal to the startTime. The searchMode parameter will control whether the comparison will be performed against the event frame&#39;s startTime or endTime. The default is &#39;*&#39; if searchMode is not one of the &#39;Backward*&#39; or &#39;Forward*&#39; values. | [optional]
 **is_acknowledged** | **bool**| Specify the returned event frames&#39; isAcknowledged property. The default no isAcknowledged filter. | [optional]
 **max_count** | **int**| The maximum number of objects to be returned per call (page size). The default is 1000. | [optional]
 **name_filter** | **string**| The name query string used for finding event frames. The default is no filter. | [optional]
 **search_mode** | **string**| Determines how the startTime and endTime parameters are treated when searching for event frame objects to be included in the returned collection. If this parameter is one of the &#39;Backward*&#39; or &#39;Forward*&#39; values, none of endTime, sortField, or sortOrder may be specified. The default is &#39;Overlapped&#39;. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **severity** | [**string[]**](../Model/string.md)| Specify that returned event frames must have this severity. Multiple severity values may be specified with multiple instances of the parameter. The default is no severity filter. | [optional]
 **sort_field** | **string**| The field or property of the object used to sort the returned collection. The default is &#39;Name&#39; if searchMode is not one of the &#39;Backward*&#39; or &#39;Forward*&#39; values. | [optional]
 **sort_order** | **string**| The order that the returned collection is sorted. The default is &#39;Ascending&#39; if searchMode is not one of the &#39;Backward*&#39; or &#39;Forward*&#39; values. | [optional]
 **start_index** | **int**| The starting index (zero based) of the items to be returned. The default is 0. | [optional]
 **start_time** | **string**| The starting time for the search. startTime must be less than or equal to the endTime. The searchMode parameter will control whether the comparison will be performed against the event frame&#39;s startTime or endTime. The default is &#39;*-8h&#39;. | [optional]
 **template_name** | **string**| Specify that returned event frames must have this template or a template derived from this template. The default is no template filter. Specify this parameter by name. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsEventFrame**](../Model/ItemsEventFrame.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementGetMultiple**
> \osisoft.pidevclub.piwebapi.models\ItemsItemElement elementGetMultiple($as_parallel, $include_mode, $path, $selected_fields, $web_id)

Retrieve multiple elements by web id or path.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementApi();
$as_parallel = true; // bool | Specifies if the retrieval processes should be run in parallel on the server. This may improve the response time for large amounts of requested attributes. The default is 'false'.
$include_mode = "include_mode_example"; // string | The include mode for the return list. The default is 'All'.
$path = array("path_example"); // string[] | The path of an element. Multiple elements may be specified with multiple instances of the parameter.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$web_id = array("web_id_example"); // string[] | The ID of an element. Multiple elements may be specified with multiple instances of the parameter.

try {
    $result = $api_instance->elementGetMultiple($as_parallel, $include_mode, $path, $selected_fields, $web_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementApi->elementGetMultiple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **as_parallel** | **bool**| Specifies if the retrieval processes should be run in parallel on the server. This may improve the response time for large amounts of requested attributes. The default is &#39;false&#39;. | [optional]
 **include_mode** | **string**| The include mode for the return list. The default is &#39;All&#39;. | [optional]
 **path** | [**string[]**](../Model/string.md)| The path of an element. Multiple elements may be specified with multiple instances of the parameter. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **web_id** | [**string[]**](../Model/string.md)| The ID of an element. Multiple elements may be specified with multiple instances of the parameter. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsItemElement**](../Model/ItemsItemElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementGetReferencedElements**
> \osisoft.pidevclub.piwebapi.models\ItemsElement elementGetReferencedElements($web_id, $category_name, $description_filter, $element_type, $max_count, $name_filter, $selected_fields, $sort_field, $sort_order, $start_index, $template_name)

Retrieve referenced elements based on the specified conditions. By default, this method selects all referenced elements of the current resource.

Users can search for the referenced elements based on specific search parameters. If no parameters are specified in the search, the default values for each parameter will be used and will return the elements that match the default search.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementApi();
$web_id = "web_id_example"; // string | The ID of the resource to use as the root of the search.
$category_name = "category_name_example"; // string | Specify that returned elements must have this category. The default is no category filter.
$description_filter = "description_filter_example"; // string | Specify that returned elements must have this description. The default is no description filter.
$element_type = "element_type_example"; // string | Specify that returned elements must have this type. The default type is 'Any'.
$max_count = 56; // int | The maximum number of objects to be returned per call (page size). The default is 1000.
$name_filter = "name_filter_example"; // string | The name query string used for finding objects. The default is no filter.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$sort_field = "sort_field_example"; // string | The field or property of the object used to sort the returned collection. The default is 'Name'.
$sort_order = "sort_order_example"; // string | The order that the returned collection is sorted. The default is 'Ascending'.
$start_index = 56; // int | The starting index (zero based) of the items to be returned. The default is 0.
$template_name = "template_name_example"; // string | Specify that returned elements must have this template or a template derived from this template. The default is no template filter.

try {
    $result = $api_instance->elementGetReferencedElements($web_id, $category_name, $description_filter, $element_type, $max_count, $name_filter, $selected_fields, $sort_field, $sort_order, $start_index, $template_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementApi->elementGetReferencedElements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the resource to use as the root of the search. |
 **category_name** | **string**| Specify that returned elements must have this category. The default is no category filter. | [optional]
 **description_filter** | **string**| Specify that returned elements must have this description. The default is no description filter. | [optional]
 **element_type** | **string**| Specify that returned elements must have this type. The default type is &#39;Any&#39;. | [optional]
 **max_count** | **int**| The maximum number of objects to be returned per call (page size). The default is 1000. | [optional]
 **name_filter** | **string**| The name query string used for finding objects. The default is no filter. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **sort_field** | **string**| The field or property of the object used to sort the returned collection. The default is &#39;Name&#39;. | [optional]
 **sort_order** | **string**| The order that the returned collection is sorted. The default is &#39;Ascending&#39;. | [optional]
 **start_index** | **int**| The starting index (zero based) of the items to be returned. The default is 0. | [optional]
 **template_name** | **string**| Specify that returned elements must have this template or a template derived from this template. The default is no template filter. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsElement**](../Model/ItemsElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementGetSecurity**
> \osisoft.pidevclub.piwebapi.models\ItemsSecurityRights elementGetSecurity($web_id, $user_identity, $force_refresh, $selected_fields)

Get the security information of the specified security item associated with the element for a specified user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementApi();
$web_id = "web_id_example"; // string | The ID of the element for the security to be checked.
$user_identity = array("user_identity_example"); // string[] | The user identity for the security information to be checked. Multiple security identities may be specified with multiple instances of the parameter. If the parameter is not specified, only the current user's security rights will be returned.
$force_refresh = true; // bool | Indicates if the security cache should be refreshed before getting security information. The default is 'false'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->elementGetSecurity($web_id, $user_identity, $force_refresh, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementApi->elementGetSecurity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the element for the security to be checked. |
 **user_identity** | [**string[]**](../Model/string.md)| The user identity for the security information to be checked. Multiple security identities may be specified with multiple instances of the parameter. If the parameter is not specified, only the current user&#39;s security rights will be returned. |
 **force_refresh** | **bool**| Indicates if the security cache should be refreshed before getting security information. The default is &#39;false&#39;. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsSecurityRights**](../Model/ItemsSecurityRights.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementGetSecurityEntries**
> \osisoft.pidevclub.piwebapi.models\ItemsSecurityEntry elementGetSecurityEntries($web_id, $name_filter, $selected_fields)

Retrieve the security entries associated with the element based on the specified criteria. By default, all security entries for this element are returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementApi();
$web_id = "web_id_example"; // string | The ID of the element.
$name_filter = "name_filter_example"; // string | The name query string used for filtering security entries. The default is no filter.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->elementGetSecurityEntries($web_id, $name_filter, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementApi->elementGetSecurityEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the element. |
 **name_filter** | **string**| The name query string used for filtering security entries. The default is no filter. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsSecurityEntry**](../Model/ItemsSecurityEntry.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementGetSecurityEntryByName**
> \osisoft.pidevclub.piwebapi.models\SecurityEntry elementGetSecurityEntryByName($name, $web_id, $selected_fields)

Retrieve the security entry associated with the element with the specified name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementApi();
$name = "name_example"; // string | The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username.
$web_id = "web_id_example"; // string | The ID of the element.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->elementGetSecurityEntryByName($name, $web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementApi->elementGetSecurityEntryByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username. |
 **web_id** | **string**| The ID of the element. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\SecurityEntry**](../Model/SecurityEntry.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementRemoveReferencedElement**
> elementRemoveReferencedElement($web_id, $referenced_element_web_id)

Remove a reference to an existing element from the child elements collection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementApi();
$web_id = "web_id_example"; // string | The ID of the element which the referenced element will be removed from.
$referenced_element_web_id = array("referenced_element_web_id_example"); // string[] | The ID of the referenced element. Multiple referenced elements may be specified with multiple instances of the parameter.

try {
    $api_instance->elementRemoveReferencedElement($web_id, $referenced_element_web_id);
} catch (Exception $e) {
    echo 'Exception when calling ElementApi->elementRemoveReferencedElement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the element which the referenced element will be removed from. |
 **referenced_element_web_id** | [**string[]**](../Model/string.md)| The ID of the referenced element. Multiple referenced elements may be specified with multiple instances of the parameter. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementUpdate**
> elementUpdate($web_id, $element)

Update an element by replacing items in its definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementApi();
$web_id = "web_id_example"; // string | The ID of the element.
$element = new \osisoft.pidevclub.piwebapi.models\Element(); // \osisoft.pidevclub.piwebapi.models\Element | A partial element containing the desired changes.

try {
    $api_instance->elementUpdate($web_id, $element);
} catch (Exception $e) {
    echo 'Exception when calling ElementApi->elementUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the element. |
 **element** | [**\osisoft.pidevclub.piwebapi.models\Element**](../Model/\osisoft.pidevclub.piwebapi.models\Element.md)| A partial element containing the desired changes. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementUpdateSecurityEntry**
> elementUpdateSecurityEntry($name, $web_id, $security_entry, $apply_to_children)

Update a security entry owned by the element.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementApi();
$name = "name_example"; // string | The name of the security entry.
$web_id = "web_id_example"; // string | The ID of the element where the security entry will be updated.
$security_entry = new \osisoft.pidevclub.piwebapi.models\SecurityEntry(); // \osisoft.pidevclub.piwebapi.models\SecurityEntry | The new security entry definition. The full list of allow and deny rights must be supplied or they will be removed.
$apply_to_children = true; // bool | If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change.

try {
    $api_instance->elementUpdateSecurityEntry($name, $web_id, $security_entry, $apply_to_children);
} catch (Exception $e) {
    echo 'Exception when calling ElementApi->elementUpdateSecurityEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the security entry. |
 **web_id** | **string**| The ID of the element where the security entry will be updated. |
 **security_entry** | [**\osisoft.pidevclub.piwebapi.models\SecurityEntry**](../Model/\osisoft.pidevclub.piwebapi.models\SecurityEntry.md)| The new security entry definition. The full list of allow and deny rights must be supplied or they will be removed. |
 **apply_to_children** | **bool**| If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

