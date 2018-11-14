# Swagger\Client\TableCategoryApi

All URIs are relative to *https://proghackuc2017.osisoft.com/piwebapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tableCategoryCreateSecurityEntry**](TableCategoryApi.md#tableCategoryCreateSecurityEntry) | **POST** /tablecategories/{webId}/securityentries | Create a security entry owned by the table category.
[**tableCategoryDelete**](TableCategoryApi.md#tableCategoryDelete) | **DELETE** /tablecategories/{webId} | Delete a table category.
[**tableCategoryDeleteSecurityEntry**](TableCategoryApi.md#tableCategoryDeleteSecurityEntry) | **DELETE** /tablecategories/{webId}/securityentries/{name} | Delete a security entry owned by the table category.
[**tableCategoryGet**](TableCategoryApi.md#tableCategoryGet) | **GET** /tablecategories/{webId} | Retrieve a table category.
[**tableCategoryGetByPath**](TableCategoryApi.md#tableCategoryGetByPath) | **GET** /tablecategories | Retrieve a table category by path.
[**tableCategoryGetSecurity**](TableCategoryApi.md#tableCategoryGetSecurity) | **GET** /tablecategories/{webId}/security | Get the security information of the specified security item associated with the table category for a specified user.
[**tableCategoryGetSecurityEntries**](TableCategoryApi.md#tableCategoryGetSecurityEntries) | **GET** /tablecategories/{webId}/securityentries | Retrieve the security entries associated with the table category based on the specified criteria. By default, all security entries for this table category are returned.
[**tableCategoryGetSecurityEntryByName**](TableCategoryApi.md#tableCategoryGetSecurityEntryByName) | **GET** /tablecategories/{webId}/securityentries/{name} | Retrieve the security entry associated with the table category with the specified name.
[**tableCategoryUpdate**](TableCategoryApi.md#tableCategoryUpdate) | **PATCH** /tablecategories/{webId} | Update a table category by replacing items in its definition.
[**tableCategoryUpdateSecurityEntry**](TableCategoryApi.md#tableCategoryUpdateSecurityEntry) | **PUT** /tablecategories/{webId}/securityentries/{name} | Update a security entry owned by the table category.


# **tableCategoryCreateSecurityEntry**
> tableCategoryCreateSecurityEntry($web_id, $security_entry, $apply_to_children)

Create a security entry owned by the table category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TableCategoryApi();
$web_id = "web_id_example"; // string | The ID of the table category where the security entry will be created.
$security_entry = new \osisoft.pidevclub.piwebapi.models\SecurityEntry(); // \osisoft.pidevclub.piwebapi.models\SecurityEntry | The new security entry definition. The full list of allow and deny rights must be supplied.
$apply_to_children = true; // bool | If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change.

try {
    $api_instance->tableCategoryCreateSecurityEntry($web_id, $security_entry, $apply_to_children);
} catch (Exception $e) {
    echo 'Exception when calling TableCategoryApi->tableCategoryCreateSecurityEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the table category where the security entry will be created. |
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

# **tableCategoryDelete**
> tableCategoryDelete($web_id)

Delete a table category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TableCategoryApi();
$web_id = "web_id_example"; // string | The ID of the table category to delete.

try {
    $api_instance->tableCategoryDelete($web_id);
} catch (Exception $e) {
    echo 'Exception when calling TableCategoryApi->tableCategoryDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the table category to delete. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tableCategoryDeleteSecurityEntry**
> tableCategoryDeleteSecurityEntry($name, $web_id, $apply_to_children)

Delete a security entry owned by the table category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TableCategoryApi();
$name = "name_example"; // string | The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username.
$web_id = "web_id_example"; // string | The ID of the table category where the security entry will be deleted.
$apply_to_children = true; // bool | If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change.

try {
    $api_instance->tableCategoryDeleteSecurityEntry($name, $web_id, $apply_to_children);
} catch (Exception $e) {
    echo 'Exception when calling TableCategoryApi->tableCategoryDeleteSecurityEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username. |
 **web_id** | **string**| The ID of the table category where the security entry will be deleted. |
 **apply_to_children** | **bool**| If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tableCategoryGet**
> \osisoft.pidevclub.piwebapi.models\TableCategory tableCategoryGet($web_id, $selected_fields)

Retrieve a table category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TableCategoryApi();
$web_id = "web_id_example"; // string | The id of the table category.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->tableCategoryGet($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TableCategoryApi->tableCategoryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The id of the table category. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\TableCategory**](../Model/TableCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tableCategoryGetByPath**
> \osisoft.pidevclub.piwebapi.models\TableCategory tableCategoryGetByPath($path, $selected_fields)

Retrieve a table category by path.

This method returns a Table Category based on the hierarchical path associated with it, and should be used when a path has been received from a separate part of the PI System for use in the PI Web API. Users should primarily search with the WebID when available.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TableCategoryApi();
$path = "path_example"; // string | The path to the target table category.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->tableCategoryGetByPath($path, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TableCategoryApi->tableCategoryGetByPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| The path to the target table category. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\TableCategory**](../Model/TableCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tableCategoryGetSecurity**
> \osisoft.pidevclub.piwebapi.models\ItemsSecurityRights tableCategoryGetSecurity($web_id, $user_identity, $force_refresh, $selected_fields)

Get the security information of the specified security item associated with the table category for a specified user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TableCategoryApi();
$web_id = "web_id_example"; // string | The ID of the table category for the security to be checked.
$user_identity = array("user_identity_example"); // string[] | The user identity for the security information to be checked. Multiple security identities may be specified with multiple instances of the parameter. If the parameter is not specified, only the current user's security rights will be returned.
$force_refresh = true; // bool | Indicates if the security cache should be refreshed before getting security information. The default is 'false'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->tableCategoryGetSecurity($web_id, $user_identity, $force_refresh, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TableCategoryApi->tableCategoryGetSecurity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the table category for the security to be checked. |
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

# **tableCategoryGetSecurityEntries**
> \osisoft.pidevclub.piwebapi.models\ItemsSecurityEntry tableCategoryGetSecurityEntries($web_id, $name_filter, $selected_fields)

Retrieve the security entries associated with the table category based on the specified criteria. By default, all security entries for this table category are returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TableCategoryApi();
$web_id = "web_id_example"; // string | The ID of the table category.
$name_filter = "name_filter_example"; // string | The name query string used for filtering security entries. The default is no filter.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->tableCategoryGetSecurityEntries($web_id, $name_filter, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TableCategoryApi->tableCategoryGetSecurityEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the table category. |
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

# **tableCategoryGetSecurityEntryByName**
> \osisoft.pidevclub.piwebapi.models\SecurityEntry tableCategoryGetSecurityEntryByName($name, $web_id, $selected_fields)

Retrieve the security entry associated with the table category with the specified name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TableCategoryApi();
$name = "name_example"; // string | The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username.
$web_id = "web_id_example"; // string | The ID of the table category.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->tableCategoryGetSecurityEntryByName($name, $web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TableCategoryApi->tableCategoryGetSecurityEntryByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username. |
 **web_id** | **string**| The ID of the table category. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\SecurityEntry**](../Model/SecurityEntry.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tableCategoryUpdate**
> tableCategoryUpdate($web_id, $table_category)

Update a table category by replacing items in its definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TableCategoryApi();
$web_id = "web_id_example"; // string | The ID of the table category to update.
$table_category = new \osisoft.pidevclub.piwebapi.models\TableCategory(); // \osisoft.pidevclub.piwebapi.models\TableCategory | A partial table category containing the desired changes.

try {
    $api_instance->tableCategoryUpdate($web_id, $table_category);
} catch (Exception $e) {
    echo 'Exception when calling TableCategoryApi->tableCategoryUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the table category to update. |
 **table_category** | [**\osisoft.pidevclub.piwebapi.models\TableCategory**](../Model/\osisoft.pidevclub.piwebapi.models\TableCategory.md)| A partial table category containing the desired changes. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tableCategoryUpdateSecurityEntry**
> tableCategoryUpdateSecurityEntry($name, $web_id, $security_entry, $apply_to_children)

Update a security entry owned by the table category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TableCategoryApi();
$name = "name_example"; // string | The name of the security entry.
$web_id = "web_id_example"; // string | The ID of the table category where the security entry will be updated.
$security_entry = new \osisoft.pidevclub.piwebapi.models\SecurityEntry(); // \osisoft.pidevclub.piwebapi.models\SecurityEntry | The new security entry definition. The full list of allow and deny rights must be supplied or they will be removed.
$apply_to_children = true; // bool | If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change.

try {
    $api_instance->tableCategoryUpdateSecurityEntry($name, $web_id, $security_entry, $apply_to_children);
} catch (Exception $e) {
    echo 'Exception when calling TableCategoryApi->tableCategoryUpdateSecurityEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the security entry. |
 **web_id** | **string**| The ID of the table category where the security entry will be updated. |
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

