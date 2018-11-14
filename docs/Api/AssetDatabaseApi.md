# Swagger\Client\AssetDatabaseApi

All URIs are relative to *https://proghackuc2017.osisoft.com/piwebapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**assetDatabaseAddReferencedElement**](AssetDatabaseApi.md#assetDatabaseAddReferencedElement) | **POST** /assetdatabases/{webId}/referencedelements | Add a reference to an existing element to the specified database.
[**assetDatabaseCreateAnalysisCategory**](AssetDatabaseApi.md#assetDatabaseCreateAnalysisCategory) | **POST** /assetdatabases/{webId}/analysiscategories | Create an analysis category at the Asset Database root.
[**assetDatabaseCreateAnalysisTemplate**](AssetDatabaseApi.md#assetDatabaseCreateAnalysisTemplate) | **POST** /assetdatabases/{webId}/analysistemplates | Create an analysis template at the Asset Database root.
[**assetDatabaseCreateAttributeCategory**](AssetDatabaseApi.md#assetDatabaseCreateAttributeCategory) | **POST** /assetdatabases/{webId}/attributecategories | Create an attribute category at the Asset Database root.
[**assetDatabaseCreateElement**](AssetDatabaseApi.md#assetDatabaseCreateElement) | **POST** /assetdatabases/{webId}/elements | Create a child element.
[**assetDatabaseCreateElementCategory**](AssetDatabaseApi.md#assetDatabaseCreateElementCategory) | **POST** /assetdatabases/{webId}/elementcategories | Create an element category at the Asset Database root.
[**assetDatabaseCreateElementTemplate**](AssetDatabaseApi.md#assetDatabaseCreateElementTemplate) | **POST** /assetdatabases/{webId}/elementtemplates | Create a template at the Asset Database root. Specify InstanceType of \&quot;Element\&quot; or \&quot;EventFrame\&quot; to create element or event frame template respectively. Only these two types of templates can be created.
[**assetDatabaseCreateEnumerationSet**](AssetDatabaseApi.md#assetDatabaseCreateEnumerationSet) | **POST** /assetdatabases/{webId}/enumerationsets | Create an enumeration set at the Asset Database.
[**assetDatabaseCreateEventFrame**](AssetDatabaseApi.md#assetDatabaseCreateEventFrame) | **POST** /assetdatabases/{webId}/eventframes | Create an event frame.
[**assetDatabaseCreateSecurityEntry**](AssetDatabaseApi.md#assetDatabaseCreateSecurityEntry) | **POST** /assetdatabases/{webId}/securityentries | Create a security entry owned by the asset database.
[**assetDatabaseCreateTable**](AssetDatabaseApi.md#assetDatabaseCreateTable) | **POST** /assetdatabases/{webId}/tables | Create a table on the Asset Database.
[**assetDatabaseCreateTableCategory**](AssetDatabaseApi.md#assetDatabaseCreateTableCategory) | **POST** /assetdatabases/{webId}/tablecategories | Create a table category on the Asset Database.
[**assetDatabaseDelete**](AssetDatabaseApi.md#assetDatabaseDelete) | **DELETE** /assetdatabases/{webId} | Delete an asset database.
[**assetDatabaseDeleteSecurityEntry**](AssetDatabaseApi.md#assetDatabaseDeleteSecurityEntry) | **DELETE** /assetdatabases/{webId}/securityentries/{name} | Delete a security entry owned by the asset database.
[**assetDatabaseExport**](AssetDatabaseApi.md#assetDatabaseExport) | **GET** /assetdatabases/{webId}/export | Export the asset database.
[**assetDatabaseFindAnalyses**](AssetDatabaseApi.md#assetDatabaseFindAnalyses) | **GET** /assetdatabases/{webId}/analyses | Retrieve analyses based on the specified conditions.
[**assetDatabaseFindElementAttributes**](AssetDatabaseApi.md#assetDatabaseFindElementAttributes) | **GET** /assetdatabases/{webId}/elementattributes | Retrieves a list of element attributes matching the specified filters from the specified asset database.
[**assetDatabaseFindEventFrameAttributes**](AssetDatabaseApi.md#assetDatabaseFindEventFrameAttributes) | **GET** /assetdatabases/{webId}/eventframeattributes | Retrieves a list of event frame attributes matching the specified filters from the specified asset database.
[**assetDatabaseGet**](AssetDatabaseApi.md#assetDatabaseGet) | **GET** /assetdatabases/{webId} | Retrieve an Asset Database.
[**assetDatabaseGetAnalysisCategories**](AssetDatabaseApi.md#assetDatabaseGetAnalysisCategories) | **GET** /assetdatabases/{webId}/analysiscategories | Retrieve analysis categories for a given Asset Database.
[**assetDatabaseGetAnalysisTemplates**](AssetDatabaseApi.md#assetDatabaseGetAnalysisTemplates) | **GET** /assetdatabases/{webId}/analysistemplates | Retrieve analysis templates based on the specified criteria. By default, all analysis templates in the specified Asset Database are returned.
[**assetDatabaseGetAttributeCategories**](AssetDatabaseApi.md#assetDatabaseGetAttributeCategories) | **GET** /assetdatabases/{webId}/attributecategories | Retrieve attribute categories for a given Asset Database.
[**assetDatabaseGetByPath**](AssetDatabaseApi.md#assetDatabaseGetByPath) | **GET** /assetdatabases | Retrieve an Asset Database by path.
[**assetDatabaseGetElementCategories**](AssetDatabaseApi.md#assetDatabaseGetElementCategories) | **GET** /assetdatabases/{webId}/elementcategories | Retrieve element categories for a given Asset Database.
[**assetDatabaseGetElementTemplates**](AssetDatabaseApi.md#assetDatabaseGetElementTemplates) | **GET** /assetdatabases/{webId}/elementtemplates | Retrieve element templates based on the specified criteria. Only templates of instance type \&quot;Element\&quot; and \&quot;EventFrame\&quot; are returned. By default, all element and event frame templates in the specified Asset Database are returned.
[**assetDatabaseGetElements**](AssetDatabaseApi.md#assetDatabaseGetElements) | **GET** /assetdatabases/{webId}/elements | Retrieve elements based on the specified conditions. By default, this method selects immediate children of the specified asset database.
[**assetDatabaseGetEnumerationSets**](AssetDatabaseApi.md#assetDatabaseGetEnumerationSets) | **GET** /assetdatabases/{webId}/enumerationsets | Retrieve enumeration sets for given asset database.
[**assetDatabaseGetEventFrames**](AssetDatabaseApi.md#assetDatabaseGetEventFrames) | **GET** /assetdatabases/{webId}/eventframes | Retrieve event frames based on the specified conditions. By default, returns all children of the specified root resource with a start time in the past 8 hours.
[**assetDatabaseGetReferencedElements**](AssetDatabaseApi.md#assetDatabaseGetReferencedElements) | **GET** /assetdatabases/{webId}/referencedelements | Retrieve referenced elements based on the specified conditions. By default, this method selects all referenced elements at the root level of the asset database.
[**assetDatabaseGetSecurity**](AssetDatabaseApi.md#assetDatabaseGetSecurity) | **GET** /assetdatabases/{webId}/security | Get the security information of the specified security item associated with the asset database for a specified user.
[**assetDatabaseGetSecurityEntries**](AssetDatabaseApi.md#assetDatabaseGetSecurityEntries) | **GET** /assetdatabases/{webId}/securityentries | Retrieve the security entries of the specified security item associated with the asset database based on the specified criteria. By default, all security entries for this asset database are returned.
[**assetDatabaseGetSecurityEntryByName**](AssetDatabaseApi.md#assetDatabaseGetSecurityEntryByName) | **GET** /assetdatabases/{webId}/securityentries/{name} | Retrieve the security entry of the specified security item associated with the asset database with the specified name.
[**assetDatabaseGetTableCategories**](AssetDatabaseApi.md#assetDatabaseGetTableCategories) | **GET** /assetdatabases/{webId}/tablecategories | Retrieve table categories for a given Asset Database.
[**assetDatabaseGetTables**](AssetDatabaseApi.md#assetDatabaseGetTables) | **GET** /assetdatabases/{webId}/tables | Retrieve tables for given Asset Database.
[**assetDatabaseImport**](AssetDatabaseApi.md#assetDatabaseImport) | **POST** /assetdatabases/{webId}/import | Import an asset database.
[**assetDatabaseRemoveReferencedElement**](AssetDatabaseApi.md#assetDatabaseRemoveReferencedElement) | **DELETE** /assetdatabases/{webId}/referencedelements | Remove a reference to an existing element from the specified database.
[**assetDatabaseUpdate**](AssetDatabaseApi.md#assetDatabaseUpdate) | **PATCH** /assetdatabases/{webId} | Update an asset database by replacing items in its definition.
[**assetDatabaseUpdateSecurityEntry**](AssetDatabaseApi.md#assetDatabaseUpdateSecurityEntry) | **PUT** /assetdatabases/{webId}/securityentries/{name} | Update a security entry owned by the asset database.


# **assetDatabaseAddReferencedElement**
> assetDatabaseAddReferencedElement($web_id, $referenced_element_web_id, $reference_type)

Add a reference to an existing element to the specified database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the database which the referenced element will be added to.
$referenced_element_web_id = array("referenced_element_web_id_example"); // string[] | The ID of the referenced element. Multiple referenced elements may be specified with multiple instances of the parameter.
$reference_type = "reference_type_example"; // string | The name of the reference type between the parent and the referenced element. This must be a \"strong\" reference type. The default is \"parent-child\".

try {
    $api_instance->assetDatabaseAddReferencedElement($web_id, $referenced_element_web_id, $reference_type);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseAddReferencedElement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the database which the referenced element will be added to. |
 **referenced_element_web_id** | [**string[]**](../Model/string.md)| The ID of the referenced element. Multiple referenced elements may be specified with multiple instances of the parameter. |
 **reference_type** | **string**| The name of the reference type between the parent and the referenced element. This must be a \&quot;strong\&quot; reference type. The default is \&quot;parent-child\&quot;. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetDatabaseCreateAnalysisCategory**
> assetDatabaseCreateAnalysisCategory($web_id, $analysis_category)

Create an analysis category at the Asset Database root.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the database in which to create the analysis category.
$analysis_category = new \osisoft.pidevclub.piwebapi.models\AnalysisCategory(); // \osisoft.pidevclub.piwebapi.models\AnalysisCategory | The new analysis category definition.

try {
    $api_instance->assetDatabaseCreateAnalysisCategory($web_id, $analysis_category);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseCreateAnalysisCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the database in which to create the analysis category. |
 **analysis_category** | [**\osisoft.pidevclub.piwebapi.models\AnalysisCategory**](../Model/\osisoft.pidevclub.piwebapi.models\AnalysisCategory.md)| The new analysis category definition. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetDatabaseCreateAnalysisTemplate**
> assetDatabaseCreateAnalysisTemplate($web_id, $template)

Create an analysis template at the Asset Database root.

Analyses that are based on an analysis template will inherit characteristics defined in the template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the database in which to create the analysis template.
$template = new \osisoft.pidevclub.piwebapi.models\AnalysisTemplate(); // \osisoft.pidevclub.piwebapi.models\AnalysisTemplate | The new analysis template definition.

try {
    $api_instance->assetDatabaseCreateAnalysisTemplate($web_id, $template);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseCreateAnalysisTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the database in which to create the analysis template. |
 **template** | [**\osisoft.pidevclub.piwebapi.models\AnalysisTemplate**](../Model/\osisoft.pidevclub.piwebapi.models\AnalysisTemplate.md)| The new analysis template definition. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetDatabaseCreateAttributeCategory**
> assetDatabaseCreateAttributeCategory($web_id, $attribute_category)

Create an attribute category at the Asset Database root.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the database in which to create the attribute category.
$attribute_category = new \osisoft.pidevclub.piwebapi.models\AttributeCategory(); // \osisoft.pidevclub.piwebapi.models\AttributeCategory | The new attribute category definition.

try {
    $api_instance->assetDatabaseCreateAttributeCategory($web_id, $attribute_category);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseCreateAttributeCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the database in which to create the attribute category. |
 **attribute_category** | [**\osisoft.pidevclub.piwebapi.models\AttributeCategory**](../Model/\osisoft.pidevclub.piwebapi.models\AttributeCategory.md)| The new attribute category definition. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetDatabaseCreateElement**
> assetDatabaseCreateElement($web_id, $element)

Create a child element.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the asset database on which to create the element.
$element = new \osisoft.pidevclub.piwebapi.models\Element(); // \osisoft.pidevclub.piwebapi.models\Element | The new element definition.

try {
    $api_instance->assetDatabaseCreateElement($web_id, $element);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseCreateElement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the asset database on which to create the element. |
 **element** | [**\osisoft.pidevclub.piwebapi.models\Element**](../Model/\osisoft.pidevclub.piwebapi.models\Element.md)| The new element definition. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetDatabaseCreateElementCategory**
> assetDatabaseCreateElementCategory($web_id, $element_category)

Create an element category at the Asset Database root.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the database in which to create the element category.
$element_category = new \osisoft.pidevclub.piwebapi.models\ElementCategory(); // \osisoft.pidevclub.piwebapi.models\ElementCategory | The new element category definition.

try {
    $api_instance->assetDatabaseCreateElementCategory($web_id, $element_category);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseCreateElementCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the database in which to create the element category. |
 **element_category** | [**\osisoft.pidevclub.piwebapi.models\ElementCategory**](../Model/\osisoft.pidevclub.piwebapi.models\ElementCategory.md)| The new element category definition. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetDatabaseCreateElementTemplate**
> assetDatabaseCreateElementTemplate($web_id, $template)

Create a template at the Asset Database root. Specify InstanceType of \"Element\" or \"EventFrame\" to create element or event frame template respectively. Only these two types of templates can be created.

Elements and event frames that are based on an element template will inherit characteristics defined in the template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the database in which to create the element template.
$template = new \osisoft.pidevclub.piwebapi.models\ElementTemplate(); // \osisoft.pidevclub.piwebapi.models\ElementTemplate | The new element template definition.

try {
    $api_instance->assetDatabaseCreateElementTemplate($web_id, $template);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseCreateElementTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the database in which to create the element template. |
 **template** | [**\osisoft.pidevclub.piwebapi.models\ElementTemplate**](../Model/\osisoft.pidevclub.piwebapi.models\ElementTemplate.md)| The new element template definition. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetDatabaseCreateEnumerationSet**
> assetDatabaseCreateEnumerationSet($web_id, $enumeration_set)

Create an enumeration set at the Asset Database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the database in which to create the enumeration set.
$enumeration_set = new \osisoft.pidevclub.piwebapi.models\EnumerationSet(); // \osisoft.pidevclub.piwebapi.models\EnumerationSet | The new enumeration set definition.

try {
    $api_instance->assetDatabaseCreateEnumerationSet($web_id, $enumeration_set);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseCreateEnumerationSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the database in which to create the enumeration set. |
 **enumeration_set** | [**\osisoft.pidevclub.piwebapi.models\EnumerationSet**](../Model/\osisoft.pidevclub.piwebapi.models\EnumerationSet.md)| The new enumeration set definition. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetDatabaseCreateEventFrame**
> assetDatabaseCreateEventFrame($web_id, $event_frame)

Create an event frame.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the database on which to create the event frame.
$event_frame = new \osisoft.pidevclub.piwebapi.models\EventFrame(); // \osisoft.pidevclub.piwebapi.models\EventFrame | The new event frame definition.

try {
    $api_instance->assetDatabaseCreateEventFrame($web_id, $event_frame);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseCreateEventFrame: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the database on which to create the event frame. |
 **event_frame** | [**\osisoft.pidevclub.piwebapi.models\EventFrame**](../Model/\osisoft.pidevclub.piwebapi.models\EventFrame.md)| The new event frame definition. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetDatabaseCreateSecurityEntry**
> assetDatabaseCreateSecurityEntry($web_id, $security_entry, $apply_to_children, $security_item)

Create a security entry owned by the asset database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the asset database where the security entry will be created.
$security_entry = new \osisoft.pidevclub.piwebapi.models\SecurityEntry(); // \osisoft.pidevclub.piwebapi.models\SecurityEntry | The new security entry definition. The full list of allow and deny rights must be supplied.
$apply_to_children = true; // bool | If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change.
$security_item = "security_item_example"; // string | The security item of the desired security entries to be created. If the parameter is not specified, security entries of the 'Default' security item will be created.

try {
    $api_instance->assetDatabaseCreateSecurityEntry($web_id, $security_entry, $apply_to_children, $security_item);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseCreateSecurityEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the asset database where the security entry will be created. |
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

# **assetDatabaseCreateTable**
> assetDatabaseCreateTable($web_id, $table)

Create a table on the Asset Database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the database in which to create the table.
$table = new \osisoft.pidevclub.piwebapi.models\Table(); // \osisoft.pidevclub.piwebapi.models\Table | The new table definition.

try {
    $api_instance->assetDatabaseCreateTable($web_id, $table);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseCreateTable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the database in which to create the table. |
 **table** | [**\osisoft.pidevclub.piwebapi.models\Table**](../Model/\osisoft.pidevclub.piwebapi.models\Table.md)| The new table definition. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetDatabaseCreateTableCategory**
> assetDatabaseCreateTableCategory($web_id, $table_category)

Create a table category on the Asset Database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the database in which to create the table category.
$table_category = new \osisoft.pidevclub.piwebapi.models\TableCategory(); // \osisoft.pidevclub.piwebapi.models\TableCategory | The new table category definition.

try {
    $api_instance->assetDatabaseCreateTableCategory($web_id, $table_category);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseCreateTableCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the database in which to create the table category. |
 **table_category** | [**\osisoft.pidevclub.piwebapi.models\TableCategory**](../Model/\osisoft.pidevclub.piwebapi.models\TableCategory.md)| The new table category definition. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetDatabaseDelete**
> assetDatabaseDelete($web_id)

Delete an asset database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the database.

try {
    $api_instance->assetDatabaseDelete($web_id);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the database. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetDatabaseDeleteSecurityEntry**
> assetDatabaseDeleteSecurityEntry($name, $web_id, $apply_to_children, $security_item)

Delete a security entry owned by the asset database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$name = "name_example"; // string | The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username.
$web_id = "web_id_example"; // string | The ID of the asset database where the security entry will be deleted.
$apply_to_children = true; // bool | If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change.
$security_item = "security_item_example"; // string | The security item of the desired security entries to be deleted. If the parameter is not specified, security entries of the 'Default' security item will be deleted.

try {
    $api_instance->assetDatabaseDeleteSecurityEntry($name, $web_id, $apply_to_children, $security_item);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseDeleteSecurityEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username. |
 **web_id** | **string**| The ID of the asset database where the security entry will be deleted. |
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

# **assetDatabaseExport**
> assetDatabaseExport($web_id, $end_time, $export_mode, $start_time)

Export the asset database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the database.
$end_time = "end_time_example"; // string | The latest ending time for AFEventFrame, AFTransfer, and AFCase objects that may be part of the export. The default is '*'.
$export_mode = array("export_mode_example"); // string[] | Indicates the type of export to perform. The default is 'StrongReferences'. Multiple export modes may be specified by using multiple instances of exportMode.
$start_time = "start_time_example"; // string | The earliest starting time for AFEventFrame, AFTransfer, and AFCase objects that may be part of the export. The default is '*-30d'.

try {
    $api_instance->assetDatabaseExport($web_id, $end_time, $export_mode, $start_time);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the database. |
 **end_time** | **string**| The latest ending time for AFEventFrame, AFTransfer, and AFCase objects that may be part of the export. The default is &#39;*&#39;. | [optional]
 **export_mode** | [**string[]**](../Model/string.md)| Indicates the type of export to perform. The default is &#39;StrongReferences&#39;. Multiple export modes may be specified by using multiple instances of exportMode. | [optional]
 **start_time** | **string**| The earliest starting time for AFEventFrame, AFTransfer, and AFCase objects that may be part of the export. The default is &#39;*-30d&#39;. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetDatabaseFindAnalyses**
> \osisoft.pidevclub.piwebapi.models\ItemsAnalysis assetDatabaseFindAnalyses($web_id, $field, $max_count, $query, $selected_fields, $sort_field, $sort_order, $start_index)

Retrieve analyses based on the specified conditions.

Users can search for the analyses based on specific search parameters. If no parameters are specified in the search, the default values for each parameter will be used and will return the analyses that match the default search.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the database to search for the analyses.
$field = array("field_example"); // string[] | Specifies which of the object's properties are searched. Multiple search fields may be specified with multiple instances of the parameter. The default is 'Name'.
$max_count = 56; // int | The maximum number of objects to be returned per call (page size). The default is 1000.
$query = "query_example"; // string | The query string used for finding analyses. The default is null.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$sort_field = "sort_field_example"; // string | The field or property of the object used to sort the returned collection. The default is 'Name'.
$sort_order = "sort_order_example"; // string | The order that the returned collection is sorted. The default is 'Ascending'.
$start_index = 56; // int | The starting index (zero based) of the items to be returned. The default is 0.

try {
    $result = $api_instance->assetDatabaseFindAnalyses($web_id, $field, $max_count, $query, $selected_fields, $sort_field, $sort_order, $start_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseFindAnalyses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the database to search for the analyses. |
 **field** | [**string[]**](../Model/string.md)| Specifies which of the object&#39;s properties are searched. Multiple search fields may be specified with multiple instances of the parameter. The default is &#39;Name&#39;. |
 **max_count** | **int**| The maximum number of objects to be returned per call (page size). The default is 1000. | [optional]
 **query** | **string**| The query string used for finding analyses. The default is null. | [optional]
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

# **assetDatabaseFindElementAttributes**
> \osisoft.pidevclub.piwebapi.models\ItemsAttribute assetDatabaseFindElementAttributes($web_id, $attribute_category, $attribute_description_filter, $attribute_name_filter, $attribute_type, $element_category, $element_description_filter, $element_name_filter, $element_template, $element_type, $max_count, $search_full_hierarchy, $selected_fields, $sort_field, $sort_order, $start_index)

Retrieves a list of element attributes matching the specified filters from the specified asset database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the asset database to use as the root of the search.
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
    $result = $api_instance->assetDatabaseFindElementAttributes($web_id, $attribute_category, $attribute_description_filter, $attribute_name_filter, $attribute_type, $element_category, $element_description_filter, $element_name_filter, $element_template, $element_type, $max_count, $search_full_hierarchy, $selected_fields, $sort_field, $sort_order, $start_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseFindElementAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the asset database to use as the root of the search. |
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

# **assetDatabaseFindEventFrameAttributes**
> \osisoft.pidevclub.piwebapi.models\ItemsAttribute assetDatabaseFindEventFrameAttributes($web_id, $attribute_category, $attribute_description_filter, $attribute_name_filter, $attribute_type, $end_time, $event_frame_category, $event_frame_description_filter, $event_frame_name_filter, $event_frame_template, $max_count, $referenced_element_name_filter, $search_full_hierarchy, $search_mode, $selected_fields, $sort_field, $sort_order, $start_index, $start_time)

Retrieves a list of event frame attributes matching the specified filters from the specified asset database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the asset database to use as the root of the search.
$attribute_category = "attribute_category_example"; // string | Specify that returned attributes must have this category. The default is no filter.
$attribute_description_filter = "attribute_description_filter_example"; // string | The attribute description filter string used for finding objects. Only the first 440 characters of the description will be searched. For Asset Servers older than 2.7, a 400 status code (Bad Request) will be returned if this parameter is specified. The default is no filter.
$attribute_name_filter = "attribute_name_filter_example"; // string | The attribute name filter string used for finding objects. The default is no filter.
$attribute_type = "attribute_type_example"; // string | Specify that returned attributes' value type must be this value type. The default is no filter.
$end_time = "end_time_example"; // string | A string representing the latest ending time for the event frames to be matched. The endTime must be greater than or equal to the startTime. The default is '*'.
$event_frame_category = "event_frame_category_example"; // string | Specify that the owner of the returned attributes must have this category. The default is no filter.
$event_frame_description_filter = "event_frame_description_filter_example"; // string | The event frame description filter string used for finding objects. Only the first 440 characters of the description will be searched. For Asset Servers older than 2.7, a 400 status code (Bad Request) will be returned if this parameter is specified. The default is no filter.
$event_frame_name_filter = "event_frame_name_filter_example"; // string | The event frame name filter string used for finding objects. The default is no filter.
$event_frame_template = "event_frame_template_example"; // string | Specify that the owner of the returned attributes must have this template or a template derived from this template. The default is no filter.
$max_count = 56; // int | The maximum number of objects to be returned (the page size). The default is 1000.
$referenced_element_name_filter = "referenced_element_name_filter_example"; // string | The name query string which must match the name of a referenced element. The default is no filter.
$search_full_hierarchy = true; // bool | Specifies if the search should include objects nested further than immediate children of the given resource. The default is 'false'.
$search_mode = "search_mode_example"; // string | Determines how the startTime and endTime parameters are treated when searching for event frames.     The default is 'Overlapped'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$sort_field = "sort_field_example"; // string | The field or property of the object used to sort the returned collection. The default is 'Name'.
$sort_order = "sort_order_example"; // string | The order that the returned collection is sorted. The default is 'Ascending'.
$start_index = 56; // int | The starting index (zero based) of the items to be returned. The default is 0.
$start_time = "start_time_example"; // string | A string representing the earliest starting time for the event frames to be matched. startTime must be less than or equal to the endTime. The default is '*-8h'.

try {
    $result = $api_instance->assetDatabaseFindEventFrameAttributes($web_id, $attribute_category, $attribute_description_filter, $attribute_name_filter, $attribute_type, $end_time, $event_frame_category, $event_frame_description_filter, $event_frame_name_filter, $event_frame_template, $max_count, $referenced_element_name_filter, $search_full_hierarchy, $search_mode, $selected_fields, $sort_field, $sort_order, $start_index, $start_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseFindEventFrameAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the asset database to use as the root of the search. |
 **attribute_category** | **string**| Specify that returned attributes must have this category. The default is no filter. | [optional]
 **attribute_description_filter** | **string**| The attribute description filter string used for finding objects. Only the first 440 characters of the description will be searched. For Asset Servers older than 2.7, a 400 status code (Bad Request) will be returned if this parameter is specified. The default is no filter. | [optional]
 **attribute_name_filter** | **string**| The attribute name filter string used for finding objects. The default is no filter. | [optional]
 **attribute_type** | **string**| Specify that returned attributes&#39; value type must be this value type. The default is no filter. | [optional]
 **end_time** | **string**| A string representing the latest ending time for the event frames to be matched. The endTime must be greater than or equal to the startTime. The default is &#39;*&#39;. | [optional]
 **event_frame_category** | **string**| Specify that the owner of the returned attributes must have this category. The default is no filter. | [optional]
 **event_frame_description_filter** | **string**| The event frame description filter string used for finding objects. Only the first 440 characters of the description will be searched. For Asset Servers older than 2.7, a 400 status code (Bad Request) will be returned if this parameter is specified. The default is no filter. | [optional]
 **event_frame_name_filter** | **string**| The event frame name filter string used for finding objects. The default is no filter. | [optional]
 **event_frame_template** | **string**| Specify that the owner of the returned attributes must have this template or a template derived from this template. The default is no filter. | [optional]
 **max_count** | **int**| The maximum number of objects to be returned (the page size). The default is 1000. | [optional]
 **referenced_element_name_filter** | **string**| The name query string which must match the name of a referenced element. The default is no filter. | [optional]
 **search_full_hierarchy** | **bool**| Specifies if the search should include objects nested further than immediate children of the given resource. The default is &#39;false&#39;. | [optional]
 **search_mode** | **string**| Determines how the startTime and endTime parameters are treated when searching for event frames.     The default is &#39;Overlapped&#39;. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **sort_field** | **string**| The field or property of the object used to sort the returned collection. The default is &#39;Name&#39;. | [optional]
 **sort_order** | **string**| The order that the returned collection is sorted. The default is &#39;Ascending&#39;. | [optional]
 **start_index** | **int**| The starting index (zero based) of the items to be returned. The default is 0. | [optional]
 **start_time** | **string**| A string representing the earliest starting time for the event frames to be matched. startTime must be less than or equal to the endTime. The default is &#39;*-8h&#39;. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsAttribute**](../Model/ItemsAttribute.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetDatabaseGet**
> \osisoft.pidevclub.piwebapi.models\AssetDatabase assetDatabaseGet($web_id, $selected_fields)

Retrieve an Asset Database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the database.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->assetDatabaseGet($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the database. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\AssetDatabase**](../Model/AssetDatabase.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetDatabaseGetAnalysisCategories**
> \osisoft.pidevclub.piwebapi.models\ItemsAnalysisCategory assetDatabaseGetAnalysisCategories($web_id, $selected_fields)

Retrieve analysis categories for a given Asset Database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the database.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->assetDatabaseGetAnalysisCategories($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseGetAnalysisCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the database. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsAnalysisCategory**](../Model/ItemsAnalysisCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetDatabaseGetAnalysisTemplates**
> \osisoft.pidevclub.piwebapi.models\ItemsAnalysisTemplate assetDatabaseGetAnalysisTemplates($web_id, $field, $max_count, $query, $selected_fields, $sort_field, $sort_order)

Retrieve analysis templates based on the specified criteria. By default, all analysis templates in the specified Asset Database are returned.

Users can search for the analysis templates based on specific search parameters. If no parameters are specified in the search, the default values for each parameter will be used and will return the templates that match the default search.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the database to search.
$field = array("field_example"); // string[] | Specifies which of the object's properties are searched. Multiple search fields may be specified with multiple instances of the parameter. The default is 'Name'.
$max_count = 56; // int | The maximum number of objects to be returned per call (page size). The default is 1000.
$query = "query_example"; // string | The query string used for finding objects. The default is no query string.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$sort_field = "sort_field_example"; // string | The field or property of the object used to sort the returned collection. The default is 'Name'.
$sort_order = "sort_order_example"; // string | The order that the returned collection is sorted. The default is 'Ascending'.

try {
    $result = $api_instance->assetDatabaseGetAnalysisTemplates($web_id, $field, $max_count, $query, $selected_fields, $sort_field, $sort_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseGetAnalysisTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the database to search. |
 **field** | [**string[]**](../Model/string.md)| Specifies which of the object&#39;s properties are searched. Multiple search fields may be specified with multiple instances of the parameter. The default is &#39;Name&#39;. |
 **max_count** | **int**| The maximum number of objects to be returned per call (page size). The default is 1000. | [optional]
 **query** | **string**| The query string used for finding objects. The default is no query string. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **sort_field** | **string**| The field or property of the object used to sort the returned collection. The default is &#39;Name&#39;. | [optional]
 **sort_order** | **string**| The order that the returned collection is sorted. The default is &#39;Ascending&#39;. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsAnalysisTemplate**](../Model/ItemsAnalysisTemplate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetDatabaseGetAttributeCategories**
> \osisoft.pidevclub.piwebapi.models\ItemsAttributeCategory assetDatabaseGetAttributeCategories($web_id, $selected_fields)

Retrieve attribute categories for a given Asset Database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the database.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->assetDatabaseGetAttributeCategories($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseGetAttributeCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the database. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsAttributeCategory**](../Model/ItemsAttributeCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetDatabaseGetByPath**
> \osisoft.pidevclub.piwebapi.models\AssetDatabase assetDatabaseGetByPath($path, $selected_fields)

Retrieve an Asset Database by path.

This method returns an asset database based on the hierarchical path associated with it, and should be used when a path has been received from a separate part of the PI System for use in the PI Web API. Users should primarily search with the WebID when available.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$path = "path_example"; // string | The path to the database.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->assetDatabaseGetByPath($path, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseGetByPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| The path to the database. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\AssetDatabase**](../Model/AssetDatabase.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetDatabaseGetElementCategories**
> \osisoft.pidevclub.piwebapi.models\ItemsElementCategory assetDatabaseGetElementCategories($web_id, $selected_fields)

Retrieve element categories for a given Asset Database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the database.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->assetDatabaseGetElementCategories($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseGetElementCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the database. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsElementCategory**](../Model/ItemsElementCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetDatabaseGetElementTemplates**
> \osisoft.pidevclub.piwebapi.models\ItemsElementTemplate assetDatabaseGetElementTemplates($web_id, $field, $max_count, $query, $selected_fields, $sort_field, $sort_order)

Retrieve element templates based on the specified criteria. Only templates of instance type \"Element\" and \"EventFrame\" are returned. By default, all element and event frame templates in the specified Asset Database are returned.

Users can search for the element and event frame template based on specific search parameters. If no parameters are specified in the search, the default values for each parameter will be used and will return the templates that match the default search.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the database to search.
$field = array("field_example"); // string[] | Specifies which of the object's properties are searched. Multiple search fields may be specified with multiple instances of the parameter. The default is 'Name'.
$max_count = 56; // int | The maximum number of objects to be returned per call (page size). The default is 1000.
$query = "query_example"; // string | The query string used for finding objects. The default is no query string.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$sort_field = "sort_field_example"; // string | The field or property of the object used to sort the returned collection. The default is 'Name'.
$sort_order = "sort_order_example"; // string | The order that the returned collection is sorted. The default is 'Ascending'.

try {
    $result = $api_instance->assetDatabaseGetElementTemplates($web_id, $field, $max_count, $query, $selected_fields, $sort_field, $sort_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseGetElementTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the database to search. |
 **field** | [**string[]**](../Model/string.md)| Specifies which of the object&#39;s properties are searched. Multiple search fields may be specified with multiple instances of the parameter. The default is &#39;Name&#39;. |
 **max_count** | **int**| The maximum number of objects to be returned per call (page size). The default is 1000. | [optional]
 **query** | **string**| The query string used for finding objects. The default is no query string. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **sort_field** | **string**| The field or property of the object used to sort the returned collection. The default is &#39;Name&#39;. | [optional]
 **sort_order** | **string**| The order that the returned collection is sorted. The default is &#39;Ascending&#39;. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsElementTemplate**](../Model/ItemsElementTemplate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetDatabaseGetElements**
> \osisoft.pidevclub.piwebapi.models\ItemsElement assetDatabaseGetElements($web_id, $category_name, $description_filter, $element_type, $max_count, $name_filter, $search_full_hierarchy, $selected_fields, $sort_field, $sort_order, $start_index, $template_name)

Retrieve elements based on the specified conditions. By default, this method selects immediate children of the specified asset database.

Users can search for the elements based on specific search parameters. If no parameters are specified in the search, the default values for each parameter will be used and will return the elements that match the default search.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the database to use as the root of the search.
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
    $result = $api_instance->assetDatabaseGetElements($web_id, $category_name, $description_filter, $element_type, $max_count, $name_filter, $search_full_hierarchy, $selected_fields, $sort_field, $sort_order, $start_index, $template_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseGetElements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the database to use as the root of the search. |
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

# **assetDatabaseGetEnumerationSets**
> \osisoft.pidevclub.piwebapi.models\ItemsEnumerationSet assetDatabaseGetEnumerationSets($web_id, $selected_fields)

Retrieve enumeration sets for given asset database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the database.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->assetDatabaseGetEnumerationSets($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseGetEnumerationSets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the database. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsEnumerationSet**](../Model/ItemsEnumerationSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetDatabaseGetEventFrames**
> \osisoft.pidevclub.piwebapi.models\ItemsEventFrame assetDatabaseGetEventFrames($web_id, $can_be_acknowledged, $category_name, $end_time, $is_acknowledged, $max_count, $name_filter, $referenced_element_name_filter, $referenced_element_template_name, $search_full_hierarchy, $search_mode, $selected_fields, $severity, $sort_field, $sort_order, $start_index, $start_time, $template_name)

Retrieve event frames based on the specified conditions. By default, returns all children of the specified root resource with a start time in the past 8 hours.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the asset database to use as the root of the search.
$can_be_acknowledged = true; // bool | Specify the returned event frames' canBeAcknowledged property. The default is no canBeAcknowledged filter.
$category_name = "category_name_example"; // string | Specify that returned event frames must have this category. The default is no category filter.
$end_time = "end_time_example"; // string | The ending time for the search. The endTime must be greater than or equal to the startTime. The searchMode parameter will control whether the comparison will be performed against the event frame's startTime or endTime. The default is '*' if searchMode is not one of the 'Backward*' or 'Forward*' values.
$is_acknowledged = true; // bool | Specify the returned event frames' isAcknowledged property. The default no isAcknowledged filter.
$max_count = 56; // int | The maximum number of objects to be returned per call (page size). The default is 1000.
$name_filter = "name_filter_example"; // string | The name query string used for finding event frames. The default is no filter.
$referenced_element_name_filter = "referenced_element_name_filter_example"; // string | The name query string which must match the name of a referenced element. The default is no filter.
$referenced_element_template_name = "referenced_element_template_name_example"; // string | Specify that returned event frames must have an element in the event frame's referenced elements collection that derives from the template. Specify this parameter by name.
$search_full_hierarchy = true; // bool | Specifies whether the search should include objects nested further than the immediate children of the search root. The default is 'false'.
$search_mode = "search_mode_example"; // string | Determines how the startTime and endTime parameters are treated when searching for event frame objects to be included in the returned collection. If this parameter is one of the 'Backward*' or 'Forward*' values, none of endTime, sortField, or sortOrder may be specified. The default is 'Overlapped'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$severity = array("severity_example"); // string[] | Specify that returned event frames must have this severity. Multiple severity values may be specified with multiple instances of the parameter. The default is no severity filter.
$sort_field = "sort_field_example"; // string | The field or property of the object used to sort the returned collection. The default is 'Name' if searchMode is not one of the 'Backward*' or 'Forward*' values.
$sort_order = "sort_order_example"; // string | The order that the returned collection is sorted. The default is 'Ascending' if searchMode is not one of the 'Backward*' or 'Forward*' values.
$start_index = 56; // int | The starting index (zero based) of the items to be returned. The default is 0.
$start_time = "start_time_example"; // string | The starting time for the search. startTime must be less than or equal to the endTime. The searchMode parameter will control whether the comparison will be performed against the event frame's startTime or endTime. The default is '*-8h'.
$template_name = "template_name_example"; // string | Specify that returned event frames must have this template or a template derived from this template. The default is no template filter. Specify this parameter by name.

try {
    $result = $api_instance->assetDatabaseGetEventFrames($web_id, $can_be_acknowledged, $category_name, $end_time, $is_acknowledged, $max_count, $name_filter, $referenced_element_name_filter, $referenced_element_template_name, $search_full_hierarchy, $search_mode, $selected_fields, $severity, $sort_field, $sort_order, $start_index, $start_time, $template_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseGetEventFrames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the asset database to use as the root of the search. |
 **can_be_acknowledged** | **bool**| Specify the returned event frames&#39; canBeAcknowledged property. The default is no canBeAcknowledged filter. | [optional]
 **category_name** | **string**| Specify that returned event frames must have this category. The default is no category filter. | [optional]
 **end_time** | **string**| The ending time for the search. The endTime must be greater than or equal to the startTime. The searchMode parameter will control whether the comparison will be performed against the event frame&#39;s startTime or endTime. The default is &#39;*&#39; if searchMode is not one of the &#39;Backward*&#39; or &#39;Forward*&#39; values. | [optional]
 **is_acknowledged** | **bool**| Specify the returned event frames&#39; isAcknowledged property. The default no isAcknowledged filter. | [optional]
 **max_count** | **int**| The maximum number of objects to be returned per call (page size). The default is 1000. | [optional]
 **name_filter** | **string**| The name query string used for finding event frames. The default is no filter. | [optional]
 **referenced_element_name_filter** | **string**| The name query string which must match the name of a referenced element. The default is no filter. | [optional]
 **referenced_element_template_name** | **string**| Specify that returned event frames must have an element in the event frame&#39;s referenced elements collection that derives from the template. Specify this parameter by name. | [optional]
 **search_full_hierarchy** | **bool**| Specifies whether the search should include objects nested further than the immediate children of the search root. The default is &#39;false&#39;. | [optional]
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

# **assetDatabaseGetReferencedElements**
> \osisoft.pidevclub.piwebapi.models\ItemsElement assetDatabaseGetReferencedElements($web_id, $category_name, $description_filter, $element_type, $max_count, $name_filter, $selected_fields, $sort_field, $sort_order, $start_index, $template_name)

Retrieve referenced elements based on the specified conditions. By default, this method selects all referenced elements at the root level of the asset database.

Users can search for the referenced elements based on specific search parameters. If no parameters are specified in the search, the default values for each parameter will be used and will return the elements that match the default search.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
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
    $result = $api_instance->assetDatabaseGetReferencedElements($web_id, $category_name, $description_filter, $element_type, $max_count, $name_filter, $selected_fields, $sort_field, $sort_order, $start_index, $template_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseGetReferencedElements: ', $e->getMessage(), PHP_EOL;
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

# **assetDatabaseGetSecurity**
> \osisoft.pidevclub.piwebapi.models\ItemsSecurityRights assetDatabaseGetSecurity($web_id, $security_item, $user_identity, $force_refresh, $selected_fields)

Get the security information of the specified security item associated with the asset database for a specified user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the asset database for the security to be checked.
$security_item = array("security_item_example"); // string[] | The security item of the desired security information to be returned. Multiple security items may be specified with multiple instances of the parameter. If the parameter is not specified, only 'Default' security item of the security information will be returned.
$user_identity = array("user_identity_example"); // string[] | The user identity for the security information to be checked. Multiple security identities may be specified with multiple instances of the parameter. If the parameter is not specified, only the current user's security rights will be returned.
$force_refresh = true; // bool | Indicates if the security cache should be refreshed before getting security information. The default is 'false'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->assetDatabaseGetSecurity($web_id, $security_item, $user_identity, $force_refresh, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseGetSecurity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the asset database for the security to be checked. |
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

# **assetDatabaseGetSecurityEntries**
> \osisoft.pidevclub.piwebapi.models\ItemsSecurityEntry assetDatabaseGetSecurityEntries($web_id, $name_filter, $security_item, $selected_fields)

Retrieve the security entries of the specified security item associated with the asset database based on the specified criteria. By default, all security entries for this asset database are returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the asset database.
$name_filter = "name_filter_example"; // string | The name query string used for filtering security entries. The default is no filter.
$security_item = "security_item_example"; // string | The security item of the desired security entries information to be returned. If the parameter is not specified, security entries of the 'Default' security item will be returned.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->assetDatabaseGetSecurityEntries($web_id, $name_filter, $security_item, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseGetSecurityEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the asset database. |
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

# **assetDatabaseGetSecurityEntryByName**
> \osisoft.pidevclub.piwebapi.models\SecurityEntry assetDatabaseGetSecurityEntryByName($name, $web_id, $security_item, $selected_fields)

Retrieve the security entry of the specified security item associated with the asset database with the specified name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$name = "name_example"; // string | The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username.
$web_id = "web_id_example"; // string | The ID of the asset database.
$security_item = "security_item_example"; // string | The security item of the desired security entries information to be returned. If the parameter is not specified, security entries of the 'Default' security item will be returned.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->assetDatabaseGetSecurityEntryByName($name, $web_id, $security_item, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseGetSecurityEntryByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username. |
 **web_id** | **string**| The ID of the asset database. |
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

# **assetDatabaseGetTableCategories**
> \osisoft.pidevclub.piwebapi.models\ItemsTableCategory assetDatabaseGetTableCategories($web_id, $selected_fields)

Retrieve table categories for a given Asset Database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the database.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->assetDatabaseGetTableCategories($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseGetTableCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the database. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsTableCategory**](../Model/ItemsTableCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetDatabaseGetTables**
> \osisoft.pidevclub.piwebapi.models\ItemsTable assetDatabaseGetTables($web_id, $selected_fields)

Retrieve tables for given Asset Database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the database.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->assetDatabaseGetTables($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseGetTables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the database. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsTable**](../Model/ItemsTable.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetDatabaseImport**
> assetDatabaseImport($web_id, $import_mode)

Import an asset database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the asset database.
$import_mode = array("import_mode_example"); // string[] | Indicates the type of import to perform. The default is 'AllowCreate | AllowUpdate | AutoCheckIn'. Multiple import modes may be specified by using multiple instances of importMode.

try {
    $api_instance->assetDatabaseImport($web_id, $import_mode);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseImport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the asset database. |
 **import_mode** | [**string[]**](../Model/string.md)| Indicates the type of import to perform. The default is &#39;AllowCreate | AllowUpdate | AutoCheckIn&#39;. Multiple import modes may be specified by using multiple instances of importMode. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetDatabaseRemoveReferencedElement**
> assetDatabaseRemoveReferencedElement($web_id, $referenced_element_web_id)

Remove a reference to an existing element from the specified database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the database which the referenced element will be removed from.
$referenced_element_web_id = array("referenced_element_web_id_example"); // string[] | The ID of the referenced element. Multiple referenced elements may be specified with multiple instances of the parameter.

try {
    $api_instance->assetDatabaseRemoveReferencedElement($web_id, $referenced_element_web_id);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseRemoveReferencedElement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the database which the referenced element will be removed from. |
 **referenced_element_web_id** | [**string[]**](../Model/string.md)| The ID of the referenced element. Multiple referenced elements may be specified with multiple instances of the parameter. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetDatabaseUpdate**
> assetDatabaseUpdate($web_id, $database)

Update an asset database by replacing items in its definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$web_id = "web_id_example"; // string | The ID of the database.
$database = new \osisoft.pidevclub.piwebapi.models\AssetDatabase(); // \osisoft.pidevclub.piwebapi.models\AssetDatabase | A partial database containing the desired changes.

try {
    $api_instance->assetDatabaseUpdate($web_id, $database);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the database. |
 **database** | [**\osisoft.pidevclub.piwebapi.models\AssetDatabase**](../Model/\osisoft.pidevclub.piwebapi.models\AssetDatabase.md)| A partial database containing the desired changes. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetDatabaseUpdateSecurityEntry**
> assetDatabaseUpdateSecurityEntry($name, $web_id, $security_entry, $apply_to_children, $security_item)

Update a security entry owned by the asset database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssetDatabaseApi();
$name = "name_example"; // string | The name of the security entry.
$web_id = "web_id_example"; // string | The ID of the asset database where the security entry will be updated.
$security_entry = new \osisoft.pidevclub.piwebapi.models\SecurityEntry(); // \osisoft.pidevclub.piwebapi.models\SecurityEntry | The new security entry definition. The full list of allow and deny rights must be supplied or they will be removed.
$apply_to_children = true; // bool | If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change.
$security_item = "security_item_example"; // string | The security item of the desired security entries to be updated. If the parameter is not specified, security entries of the 'Default' security item will be updated.

try {
    $api_instance->assetDatabaseUpdateSecurityEntry($name, $web_id, $security_entry, $apply_to_children, $security_item);
} catch (Exception $e) {
    echo 'Exception when calling AssetDatabaseApi->assetDatabaseUpdateSecurityEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the security entry. |
 **web_id** | **string**| The ID of the asset database where the security entry will be updated. |
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

