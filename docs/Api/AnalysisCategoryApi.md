# Swagger\Client\AnalysisCategoryApi

All URIs are relative to *https://proghackuc2017.osisoft.com/piwebapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**analysisCategoryCreateSecurityEntry**](AnalysisCategoryApi.md#analysisCategoryCreateSecurityEntry) | **POST** /analysiscategories/{webId}/securityentries | Create a security entry owned by the analysis category.
[**analysisCategoryDelete**](AnalysisCategoryApi.md#analysisCategoryDelete) | **DELETE** /analysiscategories/{webId} | Delete an analysis category.
[**analysisCategoryDeleteSecurityEntry**](AnalysisCategoryApi.md#analysisCategoryDeleteSecurityEntry) | **DELETE** /analysiscategories/{webId}/securityentries/{name} | Delete a security entry owned by the analysis category.
[**analysisCategoryGet**](AnalysisCategoryApi.md#analysisCategoryGet) | **GET** /analysiscategories/{webId} | Retrieve an analysis category.
[**analysisCategoryGetByPath**](AnalysisCategoryApi.md#analysisCategoryGetByPath) | **GET** /analysiscategories | Retrieve an analysis category by path.
[**analysisCategoryGetSecurity**](AnalysisCategoryApi.md#analysisCategoryGetSecurity) | **GET** /analysiscategories/{webId}/security | Get the security information of the specified security item associated with the analysis category for a specified user.
[**analysisCategoryGetSecurityEntries**](AnalysisCategoryApi.md#analysisCategoryGetSecurityEntries) | **GET** /analysiscategories/{webId}/securityentries | Retrieve the security entries associated with the analysis category based on the specified criteria. By default, all security entries for this analysis category are returned.
[**analysisCategoryGetSecurityEntryByName**](AnalysisCategoryApi.md#analysisCategoryGetSecurityEntryByName) | **GET** /analysiscategories/{webId}/securityentries/{name} | Retrieve the security entry associated with the analysis category with the specified name.
[**analysisCategoryUpdate**](AnalysisCategoryApi.md#analysisCategoryUpdate) | **PATCH** /analysiscategories/{webId} | Update an analysis category by replacing items in its definition.
[**analysisCategoryUpdateSecurityEntry**](AnalysisCategoryApi.md#analysisCategoryUpdateSecurityEntry) | **PUT** /analysiscategories/{webId}/securityentries/{name} | Update a security entry owned by the analysis category.


# **analysisCategoryCreateSecurityEntry**
> analysisCategoryCreateSecurityEntry($web_id, $security_entry, $apply_to_children)

Create a security entry owned by the analysis category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisCategoryApi();
$web_id = "web_id_example"; // string | The ID of the analysis category, where the security entry will be created.
$security_entry = new \osisoft.pidevclub.piwebapi.models\SecurityEntry(); // \osisoft.pidevclub.piwebapi.models\SecurityEntry | The new security entry definition. The full list of allow and deny rights must be supplied.
$apply_to_children = true; // bool | If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change.

try {
    $api_instance->analysisCategoryCreateSecurityEntry($web_id, $security_entry, $apply_to_children);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisCategoryApi->analysisCategoryCreateSecurityEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the analysis category, where the security entry will be created. |
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

# **analysisCategoryDelete**
> analysisCategoryDelete($web_id)

Delete an analysis category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisCategoryApi();
$web_id = "web_id_example"; // string | The ID of the analysis category to delete.

try {
    $api_instance->analysisCategoryDelete($web_id);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisCategoryApi->analysisCategoryDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the analysis category to delete. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analysisCategoryDeleteSecurityEntry**
> analysisCategoryDeleteSecurityEntry($name, $web_id, $apply_to_children)

Delete a security entry owned by the analysis category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisCategoryApi();
$name = "name_example"; // string | The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username.
$web_id = "web_id_example"; // string | The ID of the analysis category, where the security entry will be deleted.
$apply_to_children = true; // bool | If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change.

try {
    $api_instance->analysisCategoryDeleteSecurityEntry($name, $web_id, $apply_to_children);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisCategoryApi->analysisCategoryDeleteSecurityEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username. |
 **web_id** | **string**| The ID of the analysis category, where the security entry will be deleted. |
 **apply_to_children** | **bool**| If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analysisCategoryGet**
> \osisoft.pidevclub.piwebapi.models\AnalysisCategory analysisCategoryGet($web_id, $selected_fields)

Retrieve an analysis category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisCategoryApi();
$web_id = "web_id_example"; // string | The ID of the analysis category.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->analysisCategoryGet($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisCategoryApi->analysisCategoryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the analysis category. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\AnalysisCategory**](../Model/AnalysisCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analysisCategoryGetByPath**
> \osisoft.pidevclub.piwebapi.models\AnalysisCategory analysisCategoryGetByPath($path, $selected_fields)

Retrieve an analysis category by path.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisCategoryApi();
$path = "path_example"; // string | The path to the target analysis category.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->analysisCategoryGetByPath($path, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisCategoryApi->analysisCategoryGetByPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| The path to the target analysis category. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\AnalysisCategory**](../Model/AnalysisCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analysisCategoryGetSecurity**
> \osisoft.pidevclub.piwebapi.models\ItemsSecurityRights analysisCategoryGetSecurity($web_id, $user_identity, $force_refresh, $selected_fields)

Get the security information of the specified security item associated with the analysis category for a specified user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisCategoryApi();
$web_id = "web_id_example"; // string | The ID of the analysis category for the security to be checked.
$user_identity = array("user_identity_example"); // string[] | The user identity for the security information to be checked. Multiple security identities may be specified with multiple instances of the parameter. If the parameter is not specified, only the current user's security rights will be returned.
$force_refresh = true; // bool | Indicates if the security cache should be refreshed before getting security information. The default is 'false'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->analysisCategoryGetSecurity($web_id, $user_identity, $force_refresh, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisCategoryApi->analysisCategoryGetSecurity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the analysis category for the security to be checked. |
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

# **analysisCategoryGetSecurityEntries**
> \osisoft.pidevclub.piwebapi.models\ItemsSecurityEntry analysisCategoryGetSecurityEntries($web_id, $name_filter, $selected_fields)

Retrieve the security entries associated with the analysis category based on the specified criteria. By default, all security entries for this analysis category are returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisCategoryApi();
$web_id = "web_id_example"; // string | The ID of the analysis category.
$name_filter = "name_filter_example"; // string | The name query string used for filtering security entries. The default is no filter.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->analysisCategoryGetSecurityEntries($web_id, $name_filter, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisCategoryApi->analysisCategoryGetSecurityEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the analysis category. |
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

# **analysisCategoryGetSecurityEntryByName**
> \osisoft.pidevclub.piwebapi.models\SecurityEntry analysisCategoryGetSecurityEntryByName($name, $web_id, $selected_fields)

Retrieve the security entry associated with the analysis category with the specified name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisCategoryApi();
$name = "name_example"; // string | The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username.
$web_id = "web_id_example"; // string | The ID of the analysis category.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->analysisCategoryGetSecurityEntryByName($name, $web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisCategoryApi->analysisCategoryGetSecurityEntryByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username. |
 **web_id** | **string**| The ID of the analysis category. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\SecurityEntry**](../Model/SecurityEntry.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analysisCategoryUpdate**
> analysisCategoryUpdate($web_id, $category)

Update an analysis category by replacing items in its definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisCategoryApi();
$web_id = "web_id_example"; // string | The ID of the analysis category to update.
$category = new \osisoft.pidevclub.piwebapi.models\AnalysisCategory(); // \osisoft.pidevclub.piwebapi.models\AnalysisCategory | A partial analysis category containing the desired changes.

try {
    $api_instance->analysisCategoryUpdate($web_id, $category);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisCategoryApi->analysisCategoryUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the analysis category to update. |
 **category** | [**\osisoft.pidevclub.piwebapi.models\AnalysisCategory**](../Model/\osisoft.pidevclub.piwebapi.models\AnalysisCategory.md)| A partial analysis category containing the desired changes. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analysisCategoryUpdateSecurityEntry**
> analysisCategoryUpdateSecurityEntry($name, $web_id, $security_entry, $apply_to_children)

Update a security entry owned by the analysis category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisCategoryApi();
$name = "name_example"; // string | The name of the security entry.
$web_id = "web_id_example"; // string | The ID of the analysis category, where the security entry will be updated.
$security_entry = new \osisoft.pidevclub.piwebapi.models\SecurityEntry(); // \osisoft.pidevclub.piwebapi.models\SecurityEntry | The new security entry definition. The full list of allow and deny rights must be supplied or they will be removed.
$apply_to_children = true; // bool | If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change.

try {
    $api_instance->analysisCategoryUpdateSecurityEntry($name, $web_id, $security_entry, $apply_to_children);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisCategoryApi->analysisCategoryUpdateSecurityEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the security entry. |
 **web_id** | **string**| The ID of the analysis category, where the security entry will be updated. |
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

