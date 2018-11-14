# Swagger\Client\ElementTemplateApi

All URIs are relative to *https://proghackuc2017.osisoft.com/piwebapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**elementTemplateCreateAttributeTemplate**](ElementTemplateApi.md#elementTemplateCreateAttributeTemplate) | **POST** /elementtemplates/{webId}/attributetemplates | Create an attribute template.
[**elementTemplateCreateSecurityEntry**](ElementTemplateApi.md#elementTemplateCreateSecurityEntry) | **POST** /elementtemplates/{webId}/securityentries | Create a security entry owned by the element template.
[**elementTemplateDelete**](ElementTemplateApi.md#elementTemplateDelete) | **DELETE** /elementtemplates/{webId} | Delete an element template.
[**elementTemplateDeleteSecurityEntry**](ElementTemplateApi.md#elementTemplateDeleteSecurityEntry) | **DELETE** /elementtemplates/{webId}/securityentries/{name} | Delete a security entry owned by the element template.
[**elementTemplateGet**](ElementTemplateApi.md#elementTemplateGet) | **GET** /elementtemplates/{webId} | Retrieve an element template.
[**elementTemplateGetAnalysisTemplates**](ElementTemplateApi.md#elementTemplateGetAnalysisTemplates) | **GET** /elementtemplates/{webId}/analysistemplates | Get analysis templates for an element template.
[**elementTemplateGetAttributeTemplates**](ElementTemplateApi.md#elementTemplateGetAttributeTemplates) | **GET** /elementtemplates/{webId}/attributetemplates | Get child attribute templates for an element template.
[**elementTemplateGetByPath**](ElementTemplateApi.md#elementTemplateGetByPath) | **GET** /elementtemplates | Retrieve an element template by path.
[**elementTemplateGetCategories**](ElementTemplateApi.md#elementTemplateGetCategories) | **GET** /elementtemplates/{webId}/categories | Get an element template&#39;s categories.
[**elementTemplateGetSecurity**](ElementTemplateApi.md#elementTemplateGetSecurity) | **GET** /elementtemplates/{webId}/security | Get the security information of the specified security item associated with the element template for a specified user.
[**elementTemplateGetSecurityEntries**](ElementTemplateApi.md#elementTemplateGetSecurityEntries) | **GET** /elementtemplates/{webId}/securityentries | Retrieve the security entries associated with the element template based on the specified criteria. By default, all security entries for this element template are returned.
[**elementTemplateGetSecurityEntryByName**](ElementTemplateApi.md#elementTemplateGetSecurityEntryByName) | **GET** /elementtemplates/{webId}/securityentries/{name} | Retrieve the security entry associated with the element template with the specified name.
[**elementTemplateUpdate**](ElementTemplateApi.md#elementTemplateUpdate) | **PATCH** /elementtemplates/{webId} | Update an element template by replacing items in its definition.
[**elementTemplateUpdateSecurityEntry**](ElementTemplateApi.md#elementTemplateUpdateSecurityEntry) | **PUT** /elementtemplates/{webId}/securityentries/{name} | Update a security entry owned by the element template.


# **elementTemplateCreateAttributeTemplate**
> elementTemplateCreateAttributeTemplate($web_id, $template)

Create an attribute template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementTemplateApi();
$web_id = "web_id_example"; // string | The ID of the element template on which to create the attribute template.
$template = new \osisoft.pidevclub.piwebapi.models\AttributeTemplate(); // \osisoft.pidevclub.piwebapi.models\AttributeTemplate | The attribute template definition.

try {
    $api_instance->elementTemplateCreateAttributeTemplate($web_id, $template);
} catch (Exception $e) {
    echo 'Exception when calling ElementTemplateApi->elementTemplateCreateAttributeTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the element template on which to create the attribute template. |
 **template** | [**\osisoft.pidevclub.piwebapi.models\AttributeTemplate**](../Model/\osisoft.pidevclub.piwebapi.models\AttributeTemplate.md)| The attribute template definition. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementTemplateCreateSecurityEntry**
> elementTemplateCreateSecurityEntry($web_id, $security_entry, $apply_to_children)

Create a security entry owned by the element template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementTemplateApi();
$web_id = "web_id_example"; // string | The ID of the element template where the security entry will be created.
$security_entry = new \osisoft.pidevclub.piwebapi.models\SecurityEntry(); // \osisoft.pidevclub.piwebapi.models\SecurityEntry | The new security entry definition. The full list of allow and deny rights must be supplied.
$apply_to_children = true; // bool | If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change.

try {
    $api_instance->elementTemplateCreateSecurityEntry($web_id, $security_entry, $apply_to_children);
} catch (Exception $e) {
    echo 'Exception when calling ElementTemplateApi->elementTemplateCreateSecurityEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the element template where the security entry will be created. |
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

# **elementTemplateDelete**
> elementTemplateDelete($web_id)

Delete an element template.

Deleting an element template will delete all associated templated data from elements which were created from it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementTemplateApi();
$web_id = "web_id_example"; // string | The ID of the element template to update.

try {
    $api_instance->elementTemplateDelete($web_id);
} catch (Exception $e) {
    echo 'Exception when calling ElementTemplateApi->elementTemplateDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the element template to update. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementTemplateDeleteSecurityEntry**
> elementTemplateDeleteSecurityEntry($name, $web_id, $apply_to_children)

Delete a security entry owned by the element template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementTemplateApi();
$name = "name_example"; // string | The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username.
$web_id = "web_id_example"; // string | The ID of the element template where the security entry will be deleted.
$apply_to_children = true; // bool | If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change.

try {
    $api_instance->elementTemplateDeleteSecurityEntry($name, $web_id, $apply_to_children);
} catch (Exception $e) {
    echo 'Exception when calling ElementTemplateApi->elementTemplateDeleteSecurityEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username. |
 **web_id** | **string**| The ID of the element template where the security entry will be deleted. |
 **apply_to_children** | **bool**| If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementTemplateGet**
> \osisoft.pidevclub.piwebapi.models\ElementTemplate elementTemplateGet($web_id, $selected_fields)

Retrieve an element template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementTemplateApi();
$web_id = "web_id_example"; // string | The ID of the element template.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->elementTemplateGet($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementTemplateApi->elementTemplateGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the element template. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ElementTemplate**](../Model/ElementTemplate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementTemplateGetAnalysisTemplates**
> \osisoft.pidevclub.piwebapi.models\ItemsAnalysisTemplate elementTemplateGetAnalysisTemplates($web_id, $selected_fields)

Get analysis templates for an element template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementTemplateApi();
$web_id = "web_id_example"; // string | The ID of the element template.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->elementTemplateGetAnalysisTemplates($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementTemplateApi->elementTemplateGetAnalysisTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the element template. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsAnalysisTemplate**](../Model/ItemsAnalysisTemplate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementTemplateGetAttributeTemplates**
> \osisoft.pidevclub.piwebapi.models\ItemsAttributeTemplate elementTemplateGetAttributeTemplates($web_id, $selected_fields, $show_inherited)

Get child attribute templates for an element template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementTemplateApi();
$web_id = "web_id_example"; // string | The ID of the element template.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$show_inherited = true; // bool | Specifies if the result should include attribute templates inherited from base element templates. The default is 'false'.

try {
    $result = $api_instance->elementTemplateGetAttributeTemplates($web_id, $selected_fields, $show_inherited);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementTemplateApi->elementTemplateGetAttributeTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the element template. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **show_inherited** | **bool**| Specifies if the result should include attribute templates inherited from base element templates. The default is &#39;false&#39;. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsAttributeTemplate**](../Model/ItemsAttributeTemplate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementTemplateGetByPath**
> \osisoft.pidevclub.piwebapi.models\ElementTemplate elementTemplateGetByPath($path, $selected_fields)

Retrieve an element template by path.

This method returns an element template based on the hierarchical path associated with it, and should be used when a path has been received from a separate part of the PI System for use in the PI Web API. Users should primarily search with the WebID when available.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementTemplateApi();
$path = "path_example"; // string | The path to the element template.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->elementTemplateGetByPath($path, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementTemplateApi->elementTemplateGetByPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| The path to the element template. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ElementTemplate**](../Model/ElementTemplate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementTemplateGetCategories**
> \osisoft.pidevclub.piwebapi.models\ItemsElementCategory elementTemplateGetCategories($web_id, $selected_fields, $show_inherited)

Get an element template's categories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementTemplateApi();
$web_id = "web_id_example"; // string | The ID of the element template.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$show_inherited = true; // bool | Specifies if the result should include categories inherited from base element templates. The default is 'false'.

try {
    $result = $api_instance->elementTemplateGetCategories($web_id, $selected_fields, $show_inherited);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementTemplateApi->elementTemplateGetCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the element template. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **show_inherited** | **bool**| Specifies if the result should include categories inherited from base element templates. The default is &#39;false&#39;. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsElementCategory**](../Model/ItemsElementCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementTemplateGetSecurity**
> \osisoft.pidevclub.piwebapi.models\ItemsSecurityRights elementTemplateGetSecurity($web_id, $user_identity, $force_refresh, $selected_fields)

Get the security information of the specified security item associated with the element template for a specified user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementTemplateApi();
$web_id = "web_id_example"; // string | The ID of the element template for the security to be checked.
$user_identity = array("user_identity_example"); // string[] | The user identity for the security information to be checked. Multiple security identities may be specified with multiple instances of the parameter. If the parameter is not specified, only the current user's security rights will be returned.
$force_refresh = true; // bool | Indicates if the security cache should be refreshed before getting security information. The default is 'false'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->elementTemplateGetSecurity($web_id, $user_identity, $force_refresh, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementTemplateApi->elementTemplateGetSecurity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the element template for the security to be checked. |
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

# **elementTemplateGetSecurityEntries**
> \osisoft.pidevclub.piwebapi.models\ItemsSecurityEntry elementTemplateGetSecurityEntries($web_id, $name_filter, $selected_fields)

Retrieve the security entries associated with the element template based on the specified criteria. By default, all security entries for this element template are returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementTemplateApi();
$web_id = "web_id_example"; // string | The ID of the element template.
$name_filter = "name_filter_example"; // string | The name query string used for filtering security entries. The default is no filter.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->elementTemplateGetSecurityEntries($web_id, $name_filter, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementTemplateApi->elementTemplateGetSecurityEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the element template. |
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

# **elementTemplateGetSecurityEntryByName**
> \osisoft.pidevclub.piwebapi.models\ItemsSecurityEntry elementTemplateGetSecurityEntryByName($name, $web_id, $selected_fields)

Retrieve the security entry associated with the element template with the specified name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementTemplateApi();
$name = "name_example"; // string | The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username.
$web_id = "web_id_example"; // string | The ID of the element template.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->elementTemplateGetSecurityEntryByName($name, $web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementTemplateApi->elementTemplateGetSecurityEntryByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username. |
 **web_id** | **string**| The ID of the element template. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsSecurityEntry**](../Model/ItemsSecurityEntry.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementTemplateUpdate**
> elementTemplateUpdate($web_id, $template)

Update an element template by replacing items in its definition.

Updating the InstanceType property of an element template will not affect any elements that have already been created from this template; it will only affect any future elements created from this template. All other changes will be propagated to elements based on this template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementTemplateApi();
$web_id = "web_id_example"; // string | The ID of the element template to update.
$template = new \osisoft.pidevclub.piwebapi.models\ElementTemplate(); // \osisoft.pidevclub.piwebapi.models\ElementTemplate | A partial element template containing the desired changes.

try {
    $api_instance->elementTemplateUpdate($web_id, $template);
} catch (Exception $e) {
    echo 'Exception when calling ElementTemplateApi->elementTemplateUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the element template to update. |
 **template** | [**\osisoft.pidevclub.piwebapi.models\ElementTemplate**](../Model/\osisoft.pidevclub.piwebapi.models\ElementTemplate.md)| A partial element template containing the desired changes. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **elementTemplateUpdateSecurityEntry**
> elementTemplateUpdateSecurityEntry($name, $web_id, $security_entry, $apply_to_children)

Update a security entry owned by the element template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ElementTemplateApi();
$name = "name_example"; // string | The name of the security entry.
$web_id = "web_id_example"; // string | The ID of the element template where the security entry will be updated.
$security_entry = new \osisoft.pidevclub.piwebapi.models\SecurityEntry(); // \osisoft.pidevclub.piwebapi.models\SecurityEntry | The new security entry definition. The full list of allow and deny rights must be supplied or they will be removed.
$apply_to_children = true; // bool | If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change.

try {
    $api_instance->elementTemplateUpdateSecurityEntry($name, $web_id, $security_entry, $apply_to_children);
} catch (Exception $e) {
    echo 'Exception when calling ElementTemplateApi->elementTemplateUpdateSecurityEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the security entry. |
 **web_id** | **string**| The ID of the element template where the security entry will be updated. |
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

