# Swagger\Client\AnalysisTemplateApi

All URIs are relative to *https://proghackuc2017.osisoft.com/piwebapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**analysisTemplateCreateFromAnalysis**](AnalysisTemplateApi.md#analysisTemplateCreateFromAnalysis) | **POST** /analysistemplates | Create an Analysis template based upon a specified Analysis.
[**analysisTemplateCreateSecurityEntry**](AnalysisTemplateApi.md#analysisTemplateCreateSecurityEntry) | **POST** /analysistemplates/{webId}/securityentries | Create a security entry owned by the analysis template.
[**analysisTemplateDelete**](AnalysisTemplateApi.md#analysisTemplateDelete) | **DELETE** /analysistemplates/{webId} | Delete an analysis template.
[**analysisTemplateDeleteSecurityEntry**](AnalysisTemplateApi.md#analysisTemplateDeleteSecurityEntry) | **DELETE** /analysistemplates/{webId}/securityentries/{name} | Delete a security entry owned by the analysis template.
[**analysisTemplateGet**](AnalysisTemplateApi.md#analysisTemplateGet) | **GET** /analysistemplates/{webId} | Retrieve an analysis template.
[**analysisTemplateGetByPath**](AnalysisTemplateApi.md#analysisTemplateGetByPath) | **GET** /analysistemplates | Retrieve an analysis template by path.
[**analysisTemplateGetCategories**](AnalysisTemplateApi.md#analysisTemplateGetCategories) | **GET** /analysistemplates/{webId}/categories | Get an analysis template&#39;s categories.
[**analysisTemplateGetSecurity**](AnalysisTemplateApi.md#analysisTemplateGetSecurity) | **GET** /analysistemplates/{webId}/security | Get the security information of the specified security item associated with the analysis template for a specified user.
[**analysisTemplateGetSecurityEntries**](AnalysisTemplateApi.md#analysisTemplateGetSecurityEntries) | **GET** /analysistemplates/{webId}/securityentries | Retrieve the security entries associated with the analysis template based on the specified criteria. By default, all security entries for this analysis template are returned.
[**analysisTemplateGetSecurityEntryByName**](AnalysisTemplateApi.md#analysisTemplateGetSecurityEntryByName) | **GET** /analysistemplates/{webId}/securityentries/{name} | Retrieve the security entry associated with the analysis template with the specified name.
[**analysisTemplateUpdate**](AnalysisTemplateApi.md#analysisTemplateUpdate) | **PATCH** /analysistemplates/{webId} | Update an analysis template by replacing items in its definition.
[**analysisTemplateUpdateSecurityEntry**](AnalysisTemplateApi.md#analysisTemplateUpdateSecurityEntry) | **PUT** /analysistemplates/{webId}/securityentries/{name} | Update a security entry owned by the analysis template.


# **analysisTemplateCreateFromAnalysis**
> analysisTemplateCreateFromAnalysis($analysis_web_id, $name)

Create an Analysis template based upon a specified Analysis.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisTemplateApi();
$analysis_web_id = "analysis_web_id_example"; // string | The ID of the Analysis, on which the template is created.
$name = "name_example"; // string | The name for the created template, which must be unique within the database's AnalysisTemplate collection. If the name ends with an asterisk (*), then a unique name will be generated based on the supplied name. The default is the specified Analysis' name suffixed with an asterisk (*).

try {
    $api_instance->analysisTemplateCreateFromAnalysis($analysis_web_id, $name);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisTemplateApi->analysisTemplateCreateFromAnalysis: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **analysis_web_id** | **string**| The ID of the Analysis, on which the template is created. |
 **name** | **string**| The name for the created template, which must be unique within the database&#39;s AnalysisTemplate collection. If the name ends with an asterisk (*), then a unique name will be generated based on the supplied name. The default is the specified Analysis&#39; name suffixed with an asterisk (*). | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analysisTemplateCreateSecurityEntry**
> analysisTemplateCreateSecurityEntry($web_id, $security_entry, $apply_to_children)

Create a security entry owned by the analysis template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisTemplateApi();
$web_id = "web_id_example"; // string | The ID of the analysis template, where the security entry will be created.
$security_entry = new \osisoft.pidevclub.piwebapi.models\SecurityEntry(); // \osisoft.pidevclub.piwebapi.models\SecurityEntry | The new security entry definition. The full list of allow and deny rights must be supplied.
$apply_to_children = true; // bool | If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change.

try {
    $api_instance->analysisTemplateCreateSecurityEntry($web_id, $security_entry, $apply_to_children);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisTemplateApi->analysisTemplateCreateSecurityEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the analysis template, where the security entry will be created. |
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

# **analysisTemplateDelete**
> analysisTemplateDelete($web_id)

Delete an analysis template.

Deleting an analysis template will delete any anlysis which was created from it, unless the analysis is tied to a notification.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisTemplateApi();
$web_id = "web_id_example"; // string | The ID of the analysis template to update.

try {
    $api_instance->analysisTemplateDelete($web_id);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisTemplateApi->analysisTemplateDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the analysis template to update. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analysisTemplateDeleteSecurityEntry**
> analysisTemplateDeleteSecurityEntry($name, $web_id, $apply_to_children)

Delete a security entry owned by the analysis template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisTemplateApi();
$name = "name_example"; // string | The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username.
$web_id = "web_id_example"; // string | The ID of the analysis template, where the security entry will be deleted.
$apply_to_children = true; // bool | If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change.

try {
    $api_instance->analysisTemplateDeleteSecurityEntry($name, $web_id, $apply_to_children);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisTemplateApi->analysisTemplateDeleteSecurityEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username. |
 **web_id** | **string**| The ID of the analysis template, where the security entry will be deleted. |
 **apply_to_children** | **bool**| If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analysisTemplateGet**
> \osisoft.pidevclub.piwebapi.models\AnalysisTemplate analysisTemplateGet($web_id, $selected_fields)

Retrieve an analysis template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisTemplateApi();
$web_id = "web_id_example"; // string | The ID of the analysis template.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->analysisTemplateGet($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisTemplateApi->analysisTemplateGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the analysis template. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\AnalysisTemplate**](../Model/AnalysisTemplate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analysisTemplateGetByPath**
> \osisoft.pidevclub.piwebapi.models\AnalysisTemplate analysisTemplateGetByPath($path, $selected_fields)

Retrieve an analysis template by path.

This method returns an analysis template based on the hierarchical path associated with it, and should be used when a path has been received from a separate part of the PI System for use in the PI Web API. Users should primarily search with the WebID when available.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisTemplateApi();
$path = "path_example"; // string | The path to the analysis template.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->analysisTemplateGetByPath($path, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisTemplateApi->analysisTemplateGetByPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| The path to the analysis template. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\AnalysisTemplate**](../Model/AnalysisTemplate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analysisTemplateGetCategories**
> \osisoft.pidevclub.piwebapi.models\ItemsAnalysisCategory analysisTemplateGetCategories($web_id, $selected_fields)

Get an analysis template's categories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisTemplateApi();
$web_id = "web_id_example"; // string | The ID of the analysis template.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->analysisTemplateGetCategories($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisTemplateApi->analysisTemplateGetCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the analysis template. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsAnalysisCategory**](../Model/ItemsAnalysisCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analysisTemplateGetSecurity**
> \osisoft.pidevclub.piwebapi.models\ItemsSecurityRights analysisTemplateGetSecurity($web_id, $user_identity, $force_refresh, $selected_fields)

Get the security information of the specified security item associated with the analysis template for a specified user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisTemplateApi();
$web_id = "web_id_example"; // string | The ID of the analysis template for the security to be checked.
$user_identity = array("user_identity_example"); // string[] | The user identity for the security information to be checked. Multiple security identities may be specified with multiple instances of the parameter. If the parameter is not specified, only the current user's security rights will be returned.
$force_refresh = true; // bool | Indicates if the security cache should be refreshed before getting security information. The default is 'false'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->analysisTemplateGetSecurity($web_id, $user_identity, $force_refresh, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisTemplateApi->analysisTemplateGetSecurity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the analysis template for the security to be checked. |
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

# **analysisTemplateGetSecurityEntries**
> \osisoft.pidevclub.piwebapi.models\ItemsSecurityEntry analysisTemplateGetSecurityEntries($web_id, $name_filter, $selected_fields)

Retrieve the security entries associated with the analysis template based on the specified criteria. By default, all security entries for this analysis template are returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisTemplateApi();
$web_id = "web_id_example"; // string | The ID of the analysis template.
$name_filter = "name_filter_example"; // string | The name query string used for filtering security entries. The default is no filter.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->analysisTemplateGetSecurityEntries($web_id, $name_filter, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisTemplateApi->analysisTemplateGetSecurityEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the analysis template. |
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

# **analysisTemplateGetSecurityEntryByName**
> \osisoft.pidevclub.piwebapi.models\SecurityEntry analysisTemplateGetSecurityEntryByName($name, $web_id, $selected_fields)

Retrieve the security entry associated with the analysis template with the specified name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisTemplateApi();
$name = "name_example"; // string | The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username.
$web_id = "web_id_example"; // string | The ID of the analysis template.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->analysisTemplateGetSecurityEntryByName($name, $web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisTemplateApi->analysisTemplateGetSecurityEntryByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username. |
 **web_id** | **string**| The ID of the analysis template. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\SecurityEntry**](../Model/SecurityEntry.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analysisTemplateUpdate**
> analysisTemplateUpdate($web_id, $template)

Update an analysis template by replacing items in its definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisTemplateApi();
$web_id = "web_id_example"; // string | The ID of the analysis template to update.
$template = new \osisoft.pidevclub.piwebapi.models\AnalysisTemplate(); // \osisoft.pidevclub.piwebapi.models\AnalysisTemplate | A partial analysis template containing the desired changes.

try {
    $api_instance->analysisTemplateUpdate($web_id, $template);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisTemplateApi->analysisTemplateUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the analysis template to update. |
 **template** | [**\osisoft.pidevclub.piwebapi.models\AnalysisTemplate**](../Model/\osisoft.pidevclub.piwebapi.models\AnalysisTemplate.md)| A partial analysis template containing the desired changes. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analysisTemplateUpdateSecurityEntry**
> analysisTemplateUpdateSecurityEntry($name, $web_id, $security_entry, $apply_to_children)

Update a security entry owned by the analysis template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisTemplateApi();
$name = "name_example"; // string | The name of the security entry.
$web_id = "web_id_example"; // string | The ID of the analysis template, where the security entry will be updated.
$security_entry = new \osisoft.pidevclub.piwebapi.models\SecurityEntry(); // \osisoft.pidevclub.piwebapi.models\SecurityEntry | The new security entry definition. The full list of allow and deny rights must be supplied or they will be removed.
$apply_to_children = true; // bool | If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change.

try {
    $api_instance->analysisTemplateUpdateSecurityEntry($name, $web_id, $security_entry, $apply_to_children);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisTemplateApi->analysisTemplateUpdateSecurityEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the security entry. |
 **web_id** | **string**| The ID of the analysis template, where the security entry will be updated. |
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

