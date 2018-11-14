# Swagger\Client\ElementCategoryApi

All URIs are relative to *https://proghackuc2017.osisoft.com/piwebapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**elementCategoryCreateSecurityEntry**](ElementCategoryApi.md#elementCategoryCreateSecurityEntry) | **POST** /elementcategories/{webId}/securityentries | Create a security entry owned by the element category.
[**elementCategoryDelete**](ElementCategoryApi.md#elementCategoryDelete) | **DELETE** /elementcategories/{webId} | Delete an element category.
[**elementCategoryDeleteSecurityEntry**](ElementCategoryApi.md#elementCategoryDeleteSecurityEntry) | **DELETE** /elementcategories/{webId}/securityentries/{name} | Delete a security entry owned by the element category.
[**elementCategoryGet**](ElementCategoryApi.md#elementCategoryGet) | **GET** /elementcategories/{webId} | Retrieve an element category.
[**elementCategoryGetByPath**](ElementCategoryApi.md#elementCategoryGetByPath) | **GET** /elementcategories | Retrieve an element category by path.
[**elementCategoryGetSecurity**](ElementCategoryApi.md#elementCategoryGetSecurity) | **GET** /elementcategories/{webId}/security | Get the security information of the specified security item associated with the element category for a specified user.
[**elementCategoryGetSecurityEntries**](ElementCategoryApi.md#elementCategoryGetSecurityEntries) | **GET** /elementcategories/{webId}/securityentries | Retrieve the security entries associated with the element category based on the specified criteria. By default, all security entries for this element category are returned.
[**elementCategoryGetSecurityEntryByName**](ElementCategoryApi.md#elementCategoryGetSecurityEntryByName) | **GET** /elementcategories/{webId}/securityentries/{name} | Retrieve the security entry associated with the element category with the specified name.
[**elementCategoryUpdate**](ElementCategoryApi.md#elementCategoryUpdate) | **PATCH** /elementcategories/{webId} | Update an element category by replacing items in its definition.
[**elementCategoryUpdateSecurityEntry**](ElementCategoryApi.md#elementCategoryUpdateSecurityEntry) | **PUT** /elementcategories/{webId}/securityentries/{name} | Update a security entry owned by the element category.


# **elementCategoryCreateSecurityEntry**
> elementCategoryCreateSecurityEntry($web_id, $security_entry, $apply_to_children)

Create a security entry owned by the element category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementCategoryApi();
$web_id = "web_id_example"; // string | The ID of the element category where the security entry will be created.
$security_entry = new \osisoft.pidevclub.piwebapi.models\SecurityEntry(); // \osisoft.pidevclub.piwebapi.models\SecurityEntry | The new security entry definition. The full list of allow and deny rights must be supplied.
$apply_to_children = true; // bool | If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change.

try {
    $api_instance->elementCategoryCreateSecurityEntry($web_id, $security_entry, $apply_to_children);
} catch (Exception $e) {
    echo 'Exception when calling ElementCategoryApi->elementCategoryCreateSecurityEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the element category where the security entry will be created. |
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

# **elementCategoryDelete**
> elementCategoryDelete($web_id)

Delete an element category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementCategoryApi();
$web_id = "web_id_example"; // string | The ID of the element category to delete.

try {
    $api_instance->elementCategoryDelete($web_id);
} catch (Exception $e) {
    echo 'Exception when calling ElementCategoryApi->elementCategoryDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the element category to delete. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementCategoryDeleteSecurityEntry**
> elementCategoryDeleteSecurityEntry($name, $web_id, $apply_to_children)

Delete a security entry owned by the element category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementCategoryApi();
$name = "name_example"; // string | The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username.
$web_id = "web_id_example"; // string | The ID of the element category where the security entry will be deleted.
$apply_to_children = true; // bool | If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change.

try {
    $api_instance->elementCategoryDeleteSecurityEntry($name, $web_id, $apply_to_children);
} catch (Exception $e) {
    echo 'Exception when calling ElementCategoryApi->elementCategoryDeleteSecurityEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username. |
 **web_id** | **string**| The ID of the element category where the security entry will be deleted. |
 **apply_to_children** | **bool**| If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementCategoryGet**
> \osisoft.pidevclub.piwebapi.models\ElementCategory elementCategoryGet($web_id, $selected_fields)

Retrieve an element category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementCategoryApi();
$web_id = "web_id_example"; // string | The id of the element category.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->elementCategoryGet($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementCategoryApi->elementCategoryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The id of the element category. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ElementCategory**](../Model/ElementCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementCategoryGetByPath**
> \osisoft.pidevclub.piwebapi.models\ElementCategory elementCategoryGetByPath($path, $selected_fields)

Retrieve an element category by path.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementCategoryApi();
$path = "path_example"; // string | The path to the target element category.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->elementCategoryGetByPath($path, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementCategoryApi->elementCategoryGetByPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| The path to the target element category. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ElementCategory**](../Model/ElementCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementCategoryGetSecurity**
> \osisoft.pidevclub.piwebapi.models\ItemsSecurityRights elementCategoryGetSecurity($web_id, $user_identity, $force_refresh, $selected_fields)

Get the security information of the specified security item associated with the element category for a specified user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementCategoryApi();
$web_id = "web_id_example"; // string | The ID of the element category for the security to be checked.
$user_identity = array("user_identity_example"); // string[] | The user identity for the security information to be checked. Multiple security identities may be specified with multiple instances of the parameter. If the parameter is not specified, only the current user's security rights will be returned.
$force_refresh = true; // bool | Indicates if the security cache should be refreshed before getting security information. The default is 'false'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->elementCategoryGetSecurity($web_id, $user_identity, $force_refresh, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementCategoryApi->elementCategoryGetSecurity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the element category for the security to be checked. |
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

# **elementCategoryGetSecurityEntries**
> \osisoft.pidevclub.piwebapi.models\ItemsSecurityEntry elementCategoryGetSecurityEntries($web_id, $name_filter, $selected_fields)

Retrieve the security entries associated with the element category based on the specified criteria. By default, all security entries for this element category are returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementCategoryApi();
$web_id = "web_id_example"; // string | The ID of the element category.
$name_filter = "name_filter_example"; // string | The name query string used for filtering security entries. The default is no filter.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->elementCategoryGetSecurityEntries($web_id, $name_filter, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementCategoryApi->elementCategoryGetSecurityEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the element category. |
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

# **elementCategoryGetSecurityEntryByName**
> \osisoft.pidevclub.piwebapi.models\SecurityEntry elementCategoryGetSecurityEntryByName($name, $web_id, $selected_fields)

Retrieve the security entry associated with the element category with the specified name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementCategoryApi();
$name = "name_example"; // string | The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username.
$web_id = "web_id_example"; // string | The ID of the element category.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->elementCategoryGetSecurityEntryByName($name, $web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementCategoryApi->elementCategoryGetSecurityEntryByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username. |
 **web_id** | **string**| The ID of the element category. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\SecurityEntry**](../Model/SecurityEntry.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementCategoryUpdate**
> elementCategoryUpdate($web_id, $element_category)

Update an element category by replacing items in its definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementCategoryApi();
$web_id = "web_id_example"; // string | The ID of the element category to update.
$element_category = new \osisoft.pidevclub.piwebapi.models\ElementCategory(); // \osisoft.pidevclub.piwebapi.models\ElementCategory | A partial element category containing the desired changes.

try {
    $api_instance->elementCategoryUpdate($web_id, $element_category);
} catch (Exception $e) {
    echo 'Exception when calling ElementCategoryApi->elementCategoryUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the element category to update. |
 **element_category** | [**\osisoft.pidevclub.piwebapi.models\ElementCategory**](../Model/\osisoft.pidevclub.piwebapi.models\ElementCategory.md)| A partial element category containing the desired changes. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementCategoryUpdateSecurityEntry**
> elementCategoryUpdateSecurityEntry($name, $web_id, $security_entry, $apply_to_children)

Update a security entry owned by the element category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementCategoryApi();
$name = "name_example"; // string | The name of the security entry.
$web_id = "web_id_example"; // string | The ID of the element category where the security entry will be updated.
$security_entry = new \osisoft.pidevclub.piwebapi.models\SecurityEntry(); // \osisoft.pidevclub.piwebapi.models\SecurityEntry | The new security entry definition. The full list of allow and deny rights must be supplied or they will be removed.
$apply_to_children = true; // bool | If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change.

try {
    $api_instance->elementCategoryUpdateSecurityEntry($name, $web_id, $security_entry, $apply_to_children);
} catch (Exception $e) {
    echo 'Exception when calling ElementCategoryApi->elementCategoryUpdateSecurityEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the security entry. |
 **web_id** | **string**| The ID of the element category where the security entry will be updated. |
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

