# Swagger\Client\AssetServerApi

All URIs are relative to *https://proghackuc2017.osisoft.com/piwebapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**assetServerCreateAssetDatabase**](AssetServerApi.md#assetServerCreateAssetDatabase) | **POST** /assetservers/{webId}/assetdatabases | Create an asset database.
[**assetServerCreateSecurityEntry**](AssetServerApi.md#assetServerCreateSecurityEntry) | **POST** /assetservers/{webId}/securityentries | Create a security entry owned by the asset server.
[**assetServerCreateSecurityIdentity**](AssetServerApi.md#assetServerCreateSecurityIdentity) | **POST** /assetservers/{webId}/securityidentities | Create a security identity.
[**assetServerCreateSecurityMapping**](AssetServerApi.md#assetServerCreateSecurityMapping) | **POST** /assetservers/{webId}/securitymappings | Create a security mapping.
[**assetServerCreateUnitClass**](AssetServerApi.md#assetServerCreateUnitClass) | **POST** /assetservers/{webId}/unitclasses | Create a unit class in the specified Asset Server.
[**assetServerDeleteSecurityEntry**](AssetServerApi.md#assetServerDeleteSecurityEntry) | **DELETE** /assetservers/{webId}/securityentries/{name} | Delete a security entry owned by the asset server.
[**assetServerGet**](AssetServerApi.md#assetServerGet) | **GET** /assetservers/{webId} | Retrieve an Asset Server.
[**assetServerGetAnalysisRulePlugIns**](AssetServerApi.md#assetServerGetAnalysisRulePlugIns) | **GET** /assetservers/{webId}/analysisruleplugins | Retrieve a list of all Analysis Rule Plug-in&#39;s.
[**assetServerGetByName**](AssetServerApi.md#assetServerGetByName) | **GET** /assetservers#name | Retrieve an Asset Server by name.
[**assetServerGetByPath**](AssetServerApi.md#assetServerGetByPath) | **GET** /assetservers#path | Retrieve an Asset Server by path.
[**assetServerGetDatabases**](AssetServerApi.md#assetServerGetDatabases) | **GET** /assetservers/{webId}/assetdatabases | Retrieve a list of all Asset Databases on the specified Asset Server.
[**assetServerGetSecurity**](AssetServerApi.md#assetServerGetSecurity) | **GET** /assetservers/{webId}/security | Get the security information of the specified security item associated with the asset server for a specified user.
[**assetServerGetSecurityEntries**](AssetServerApi.md#assetServerGetSecurityEntries) | **GET** /assetservers/{webId}/securityentries | Retrieve the security entries of the specified security item associated with the asset server based on the specified criteria. By default, all security entries for this asset server are returned.
[**assetServerGetSecurityEntryByName**](AssetServerApi.md#assetServerGetSecurityEntryByName) | **GET** /assetservers/{webId}/securityentries/{name} | Retrieve the security entry of the specified security item associated with the asset server with the specified name.
[**assetServerGetSecurityIdentities**](AssetServerApi.md#assetServerGetSecurityIdentities) | **GET** /assetservers/{webId}/securityidentities | Retrieve security identities based on the specified criteria. By default, all security identities in the specified Asset Server are returned.
[**assetServerGetSecurityIdentitiesForUser**](AssetServerApi.md#assetServerGetSecurityIdentitiesForUser) | **GET** /assetservers/{webId}/securityidentities#userIdentity | Retrieve security identities for a specific user.
[**assetServerGetSecurityMappings**](AssetServerApi.md#assetServerGetSecurityMappings) | **GET** /assetservers/{webId}/securitymappings | Retrieve security mappings based on the specified criteria. By default, all security mappings in the specified Asset Server are returned.
[**assetServerGetTimeRulePlugIns**](AssetServerApi.md#assetServerGetTimeRulePlugIns) | **GET** /assetservers/{webId}/timeruleplugins | Retrieve a list of all Time Rule Plug-in&#39;s.
[**assetServerGetUnitClasses**](AssetServerApi.md#assetServerGetUnitClasses) | **GET** /assetservers/{webId}/unitclasses | Retrieve a list of all unit classes on the specified Asset Server.
[**assetServerList**](AssetServerApi.md#assetServerList) | **GET** /assetservers | Retrieve a list of all Asset Servers known to this service.
[**assetServerUpdateSecurityEntry**](AssetServerApi.md#assetServerUpdateSecurityEntry) | **PUT** /assetservers/{webId}/securityentries/{name} | Update a security entry owned by the asset server.


# **assetServerCreateAssetDatabase**
> assetServerCreateAssetDatabase($web_id, $database)

Create an asset database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetServerApi();
$web_id = "web_id_example"; // string | The ID of the asset server on which to create the database.
$database = new \osisoft.pidevclub.piwebapi.models\AssetDatabase(); // \osisoft.pidevclub.piwebapi.models\AssetDatabase | The new database definition.

try {
    $api_instance->assetServerCreateAssetDatabase($web_id, $database);
} catch (Exception $e) {
    echo 'Exception when calling AssetServerApi->assetServerCreateAssetDatabase: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the asset server on which to create the database. |
 **database** | [**\osisoft.pidevclub.piwebapi.models\AssetDatabase**](../Model/\osisoft.pidevclub.piwebapi.models\AssetDatabase.md)| The new database definition. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetServerCreateSecurityEntry**
> assetServerCreateSecurityEntry($web_id, $security_entry, $apply_to_children, $security_item)

Create a security entry owned by the asset server.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetServerApi();
$web_id = "web_id_example"; // string | The ID of the asset server where the security entry will be created.
$security_entry = new \osisoft.pidevclub.piwebapi.models\SecurityEntry(); // \osisoft.pidevclub.piwebapi.models\SecurityEntry | The new security entry definition. The full list of allow and deny rights must be supplied.
$apply_to_children = true; // bool | If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change.
$security_item = "security_item_example"; // string | The security item of the desired security entries to be created. If the parameter is not specified, security entries of the 'Default' security item will be created.

try {
    $api_instance->assetServerCreateSecurityEntry($web_id, $security_entry, $apply_to_children, $security_item);
} catch (Exception $e) {
    echo 'Exception when calling AssetServerApi->assetServerCreateSecurityEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the asset server where the security entry will be created. |
 **security_entry** | [**\osisoft.pidevclub.piwebapi.models\SecurityEntry**](../Model/\osisoft.pidevclub.piwebapi.models\SecurityEntry.md)| The new security entry definition. The full list of allow and deny rights must be supplied. |
 **apply_to_children** | **bool**| If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change. | [optional]
 **security_item** | **string**| The security item of the desired security entries to be created. If the parameter is not specified, security entries of the &#39;Default&#39; security item will be created. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetServerCreateSecurityIdentity**
> assetServerCreateSecurityIdentity($web_id, $security_identity)

Create a security identity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetServerApi();
$web_id = "web_id_example"; // string | The ID of the asset server on which to create the security identity.
$security_identity = new \osisoft.pidevclub.piwebapi.models\SecurityIdentity(); // \osisoft.pidevclub.piwebapi.models\SecurityIdentity | The new security identity definition.

try {
    $api_instance->assetServerCreateSecurityIdentity($web_id, $security_identity);
} catch (Exception $e) {
    echo 'Exception when calling AssetServerApi->assetServerCreateSecurityIdentity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the asset server on which to create the security identity. |
 **security_identity** | [**\osisoft.pidevclub.piwebapi.models\SecurityIdentity**](../Model/\osisoft.pidevclub.piwebapi.models\SecurityIdentity.md)| The new security identity definition. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetServerCreateSecurityMapping**
> assetServerCreateSecurityMapping($web_id, $security_mapping)

Create a security mapping.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetServerApi();
$web_id = "web_id_example"; // string | The ID of the asset server on which to create the security mapping.
$security_mapping = new \osisoft.pidevclub.piwebapi.models\SecurityMapping(); // \osisoft.pidevclub.piwebapi.models\SecurityMapping | The new security mapping definition.

try {
    $api_instance->assetServerCreateSecurityMapping($web_id, $security_mapping);
} catch (Exception $e) {
    echo 'Exception when calling AssetServerApi->assetServerCreateSecurityMapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the asset server on which to create the security mapping. |
 **security_mapping** | [**\osisoft.pidevclub.piwebapi.models\SecurityMapping**](../Model/\osisoft.pidevclub.piwebapi.models\SecurityMapping.md)| The new security mapping definition. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetServerCreateUnitClass**
> assetServerCreateUnitClass($web_id, $unit_class)

Create a unit class in the specified Asset Server.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetServerApi();
$web_id = "web_id_example"; // string | The ID of the server.
$unit_class = new \osisoft.pidevclub.piwebapi.models\UnitClass(); // \osisoft.pidevclub.piwebapi.models\UnitClass | The new unit class definition.

try {
    $api_instance->assetServerCreateUnitClass($web_id, $unit_class);
} catch (Exception $e) {
    echo 'Exception when calling AssetServerApi->assetServerCreateUnitClass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the server. |
 **unit_class** | [**\osisoft.pidevclub.piwebapi.models\UnitClass**](../Model/\osisoft.pidevclub.piwebapi.models\UnitClass.md)| The new unit class definition. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetServerDeleteSecurityEntry**
> assetServerDeleteSecurityEntry($name, $web_id, $apply_to_children, $security_item)

Delete a security entry owned by the asset server.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetServerApi();
$name = "name_example"; // string | The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username.
$web_id = "web_id_example"; // string | The ID of the asset server where the security entry will be deleted.
$apply_to_children = true; // bool | If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change.
$security_item = "security_item_example"; // string | The security item of the desired security entries to be deleted. If the parameter is not specified, security entries of the 'Default' security item will be deleted.

try {
    $api_instance->assetServerDeleteSecurityEntry($name, $web_id, $apply_to_children, $security_item);
} catch (Exception $e) {
    echo 'Exception when calling AssetServerApi->assetServerDeleteSecurityEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username. |
 **web_id** | **string**| The ID of the asset server where the security entry will be deleted. |
 **apply_to_children** | **bool**| If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change. | [optional]
 **security_item** | **string**| The security item of the desired security entries to be deleted. If the parameter is not specified, security entries of the &#39;Default&#39; security item will be deleted. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetServerGet**
> \osisoft.pidevclub.piwebapi.models\AssetServer assetServerGet($web_id, $selected_fields)

Retrieve an Asset Server.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetServerApi();
$web_id = "web_id_example"; // string | The ID of the server.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->assetServerGet($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetServerApi->assetServerGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the server. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\AssetServer**](../Model/AssetServer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetServerGetAnalysisRulePlugIns**
> \osisoft.pidevclub.piwebapi.models\ItemsAnalysisRulePlugIn assetServerGetAnalysisRulePlugIns($web_id, $selected_fields)

Retrieve a list of all Analysis Rule Plug-in's.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetServerApi();
$web_id = "web_id_example"; // string | The ID of the asset server, where the Analysis Rule Plug-in's are installed.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->assetServerGetAnalysisRulePlugIns($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetServerApi->assetServerGetAnalysisRulePlugIns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the asset server, where the Analysis Rule Plug-in&#39;s are installed. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsAnalysisRulePlugIn**](../Model/ItemsAnalysisRulePlugIn.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetServerGetByName**
> \osisoft.pidevclub.piwebapi.models\AssetServer assetServerGetByName($name, $selected_fields)

Retrieve an Asset Server by name.

This method returns an asset server based on the name associated with it. Users should primarily search with the WebID when available.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetServerApi();
$name = "name_example"; // string | The name of the server.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->assetServerGetByName($name, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetServerApi->assetServerGetByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the server. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\AssetServer**](../Model/AssetServer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetServerGetByPath**
> \osisoft.pidevclub.piwebapi.models\AssetServer assetServerGetByPath($path, $selected_fields)

Retrieve an Asset Server by path.

This method returns an asset server based on the hierarchical path associated with it, and should be used when a path has been received from a separate part of the PI System for use in the PI Web API. Users should primarily search with the WebID when available.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetServerApi();
$path = "path_example"; // string | The path to the server.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->assetServerGetByPath($path, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetServerApi->assetServerGetByPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| The path to the server. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\AssetServer**](../Model/AssetServer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetServerGetDatabases**
> \osisoft.pidevclub.piwebapi.models\ItemsAssetDatabase assetServerGetDatabases($web_id, $selected_fields)

Retrieve a list of all Asset Databases on the specified Asset Server.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetServerApi();
$web_id = "web_id_example"; // string | The ID of the server.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->assetServerGetDatabases($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetServerApi->assetServerGetDatabases: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the server. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsAssetDatabase**](../Model/ItemsAssetDatabase.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetServerGetSecurity**
> \osisoft.pidevclub.piwebapi.models\ItemsSecurityRights assetServerGetSecurity($web_id, $security_item, $user_identity, $force_refresh, $selected_fields)

Get the security information of the specified security item associated with the asset server for a specified user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetServerApi();
$web_id = "web_id_example"; // string | The ID of the asset server for the security to be checked.
$security_item = array("security_item_example"); // string[] | The security item of the desired security information to be returned. Multiple security items may be specified with multiple instances of the parameter. If the parameter is not specified, only 'Default' security item of the security information will be returned.
$user_identity = array("user_identity_example"); // string[] | The user identity for the security information to be checked. Multiple security identities may be specified with multiple instances of the parameter. If the parameter is not specified, only the current user's security rights will be returned.
$force_refresh = true; // bool | Indicates if the security cache should be refreshed before getting security information. The default is 'false'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->assetServerGetSecurity($web_id, $security_item, $user_identity, $force_refresh, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetServerApi->assetServerGetSecurity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the asset server for the security to be checked. |
 **security_item** | [**string[]**](../Model/string.md)| The security item of the desired security information to be returned. Multiple security items may be specified with multiple instances of the parameter. If the parameter is not specified, only &#39;Default&#39; security item of the security information will be returned. |
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

# **assetServerGetSecurityEntries**
> \osisoft.pidevclub.piwebapi.models\ItemsSecurityEntry assetServerGetSecurityEntries($web_id, $name_filter, $security_item, $selected_fields)

Retrieve the security entries of the specified security item associated with the asset server based on the specified criteria. By default, all security entries for this asset server are returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetServerApi();
$web_id = "web_id_example"; // string | The ID of the asset server.
$name_filter = "name_filter_example"; // string | The name query string used for filtering security entries. The default is no filter.
$security_item = "security_item_example"; // string | The security item of the desired security entries information to be returned. If the parameter is not specified, security entries of the 'Default' security item will be returned.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->assetServerGetSecurityEntries($web_id, $name_filter, $security_item, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetServerApi->assetServerGetSecurityEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the asset server. |
 **name_filter** | **string**| The name query string used for filtering security entries. The default is no filter. | [optional]
 **security_item** | **string**| The security item of the desired security entries information to be returned. If the parameter is not specified, security entries of the &#39;Default&#39; security item will be returned. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsSecurityEntry**](../Model/ItemsSecurityEntry.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetServerGetSecurityEntryByName**
> \osisoft.pidevclub.piwebapi.models\SecurityEntry assetServerGetSecurityEntryByName($name, $web_id, $security_item, $selected_fields)

Retrieve the security entry of the specified security item associated with the asset server with the specified name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetServerApi();
$name = "name_example"; // string | The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username.
$web_id = "web_id_example"; // string | The ID of the asset server.
$security_item = "security_item_example"; // string | The security item of the desired security entries information to be returned. If the parameter is not specified, security entries of the 'Default' security item will be returned.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->assetServerGetSecurityEntryByName($name, $web_id, $security_item, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetServerApi->assetServerGetSecurityEntryByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username. |
 **web_id** | **string**| The ID of the asset server. |
 **security_item** | **string**| The security item of the desired security entries information to be returned. If the parameter is not specified, security entries of the &#39;Default&#39; security item will be returned. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\SecurityEntry**](../Model/SecurityEntry.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetServerGetSecurityIdentities**
> \osisoft.pidevclub.piwebapi.models\ItemsSecurityIdentity assetServerGetSecurityIdentities($web_id, $field, $max_count, $query, $selected_fields, $sort_field, $sort_order)

Retrieve security identities based on the specified criteria. By default, all security identities in the specified Asset Server are returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetServerApi();
$web_id = "web_id_example"; // string | The ID of the asset server to search.
$field = "field_example"; // string | Specifies which of the object's properties are searched. The default is 'Name'.
$max_count = 56; // int | The maximum number of objects to be returned. The default is 1000.
$query = "query_example"; // string | The query string used for finding objects. The default is no query string.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$sort_field = "sort_field_example"; // string | The field or property of the object used to sort the returned collection. The default is 'Name'.
$sort_order = "sort_order_example"; // string | The order that the returned collection is sorted. The default is 'Ascending'.

try {
    $result = $api_instance->assetServerGetSecurityIdentities($web_id, $field, $max_count, $query, $selected_fields, $sort_field, $sort_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetServerApi->assetServerGetSecurityIdentities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the asset server to search. |
 **field** | **string**| Specifies which of the object&#39;s properties are searched. The default is &#39;Name&#39;. | [optional]
 **max_count** | **int**| The maximum number of objects to be returned. The default is 1000. | [optional]
 **query** | **string**| The query string used for finding objects. The default is no query string. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **sort_field** | **string**| The field or property of the object used to sort the returned collection. The default is &#39;Name&#39;. | [optional]
 **sort_order** | **string**| The order that the returned collection is sorted. The default is &#39;Ascending&#39;. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsSecurityIdentity**](../Model/ItemsSecurityIdentity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetServerGetSecurityIdentitiesForUser**
> \osisoft.pidevclub.piwebapi.models\ItemsSecurityIdentity assetServerGetSecurityIdentitiesForUser($web_id, $user_identity, $selected_fields)

Retrieve security identities for a specific user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetServerApi();
$web_id = "web_id_example"; // string | The ID of the server.
$user_identity = "user_identity_example"; // string | The user identity to search for.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->assetServerGetSecurityIdentitiesForUser($web_id, $user_identity, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetServerApi->assetServerGetSecurityIdentitiesForUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the server. |
 **user_identity** | **string**| The user identity to search for. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsSecurityIdentity**](../Model/ItemsSecurityIdentity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetServerGetSecurityMappings**
> \osisoft.pidevclub.piwebapi.models\ItemsSecurityMapping assetServerGetSecurityMappings($web_id, $field, $max_count, $query, $selected_fields, $sort_field, $sort_order)

Retrieve security mappings based on the specified criteria. By default, all security mappings in the specified Asset Server are returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetServerApi();
$web_id = "web_id_example"; // string | The ID of the asset server to search.
$field = "field_example"; // string | Specifies which of the object's properties are searched. The default is 'Name'.
$max_count = 56; // int | The maximum number of objects to be returned. The default is 1000.
$query = "query_example"; // string | The query string used for finding objects. The default is no query string.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$sort_field = "sort_field_example"; // string | The field or property of the object used to sort the returned collection. The default is 'Name'.
$sort_order = "sort_order_example"; // string | The order that the returned collection is sorted. The default is 'Ascending'.

try {
    $result = $api_instance->assetServerGetSecurityMappings($web_id, $field, $max_count, $query, $selected_fields, $sort_field, $sort_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetServerApi->assetServerGetSecurityMappings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the asset server to search. |
 **field** | **string**| Specifies which of the object&#39;s properties are searched. The default is &#39;Name&#39;. | [optional]
 **max_count** | **int**| The maximum number of objects to be returned. The default is 1000. | [optional]
 **query** | **string**| The query string used for finding objects. The default is no query string. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **sort_field** | **string**| The field or property of the object used to sort the returned collection. The default is &#39;Name&#39;. | [optional]
 **sort_order** | **string**| The order that the returned collection is sorted. The default is &#39;Ascending&#39;. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsSecurityMapping**](../Model/ItemsSecurityMapping.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetServerGetTimeRulePlugIns**
> \osisoft.pidevclub.piwebapi.models\ItemsTimeRulePlugIn assetServerGetTimeRulePlugIns($web_id, $selected_fields)

Retrieve a list of all Time Rule Plug-in's.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetServerApi();
$web_id = "web_id_example"; // string | The ID of the asset server, where the Time Rule Plug-in's are installed.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->assetServerGetTimeRulePlugIns($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetServerApi->assetServerGetTimeRulePlugIns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the asset server, where the Time Rule Plug-in&#39;s are installed. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsTimeRulePlugIn**](../Model/ItemsTimeRulePlugIn.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetServerGetUnitClasses**
> \osisoft.pidevclub.piwebapi.models\ItemsUnitClass assetServerGetUnitClasses($web_id, $selected_fields)

Retrieve a list of all unit classes on the specified Asset Server.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetServerApi();
$web_id = "web_id_example"; // string | The ID of the server.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->assetServerGetUnitClasses($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetServerApi->assetServerGetUnitClasses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the server. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsUnitClass**](../Model/ItemsUnitClass.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetServerList**
> \osisoft.pidevclub.piwebapi.models\ItemsAssetServer assetServerList($selected_fields)

Retrieve a list of all Asset Servers known to this service.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetServerApi();
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->assetServerList($selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetServerApi->assetServerList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsAssetServer**](../Model/ItemsAssetServer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetServerUpdateSecurityEntry**
> assetServerUpdateSecurityEntry($name, $web_id, $security_entry, $apply_to_children, $security_item)

Update a security entry owned by the asset server.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetServerApi();
$name = "name_example"; // string | The name of the security entry.
$web_id = "web_id_example"; // string | The ID of the asset server where the security entry will be updated.
$security_entry = new \osisoft.pidevclub.piwebapi.models\SecurityEntry(); // \osisoft.pidevclub.piwebapi.models\SecurityEntry | The new security entry definition. The full list of allow and deny rights must be supplied or they will be removed.
$apply_to_children = true; // bool | If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change.
$security_item = "security_item_example"; // string | The security item of the desired security entries to be updated. If the parameter is not specified, security entries of the 'Default' security item will be updated.

try {
    $api_instance->assetServerUpdateSecurityEntry($name, $web_id, $security_entry, $apply_to_children, $security_item);
} catch (Exception $e) {
    echo 'Exception when calling AssetServerApi->assetServerUpdateSecurityEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the security entry. |
 **web_id** | **string**| The ID of the asset server where the security entry will be updated. |
 **security_entry** | [**\osisoft.pidevclub.piwebapi.models\SecurityEntry**](../Model/\osisoft.pidevclub.piwebapi.models\SecurityEntry.md)| The new security entry definition. The full list of allow and deny rights must be supplied or they will be removed. |
 **apply_to_children** | **bool**| If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change. | [optional]
 **security_item** | **string**| The security item of the desired security entries to be updated. If the parameter is not specified, security entries of the &#39;Default&#39; security item will be updated. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

