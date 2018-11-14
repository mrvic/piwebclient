# Swagger\Client\EventFrameApi

All URIs are relative to *https://proghackuc2017.osisoft.com/piwebapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eventFrameAcknowledge**](EventFrameApi.md#eventFrameAcknowledge) | **PATCH** /eventframes/{webId}/acknowledge | Calls the EventFrame&#39;s Acknowledge method.
[**eventFrameCaptureValues**](EventFrameApi.md#eventFrameCaptureValues) | **POST** /eventframes/{webId}/attributes/capture | Calls the EventFrame&#39;s CaptureValues method.
[**eventFrameCreateAnnotation**](EventFrameApi.md#eventFrameCreateAnnotation) | **POST** /eventframes/{webId}/annotations | Create an annotation on an event frame.
[**eventFrameCreateAttribute**](EventFrameApi.md#eventFrameCreateAttribute) | **POST** /eventframes/{webId}/attributes | Create a new attribute of the specified event frame.
[**eventFrameCreateConfig**](EventFrameApi.md#eventFrameCreateConfig) | **POST** /eventframes/{webId}/config | Executes the create configuration function of the data references found within the attributes of the event frame, and optionally, its children.
[**eventFrameCreateEventFrame**](EventFrameApi.md#eventFrameCreateEventFrame) | **POST** /eventframes/{webId}/eventframes | Create an event frame as a child of the specified event frame.
[**eventFrameCreateSearchByAttribute**](EventFrameApi.md#eventFrameCreateSearchByAttribute) | **POST** /eventframes/searchbyattribute | Create a link for a \&quot;Search EventFrames By Attribute Value\&quot; operation, whose queries are specified in the request content. The SearchRoot is specified by the Web Id of the root EventFrame. If the SearchRoot is not specified, then the search starts at the Asset Database. ElementTemplate must be provided as the Web ID of the ElementTemplate, which are used to create the EventFrames. All the attributes in the queries must be defined as AttributeTemplates on the ElementTemplate. An array of attribute value queries are ANDed together to find the desired Element objects. At least one value query must be specified. There are limitations on SearchOperators.
[**eventFrameCreateSecurityEntry**](EventFrameApi.md#eventFrameCreateSecurityEntry) | **POST** /eventframes/{webId}/securityentries | Create a security entry owned by the event frame.
[**eventFrameDelete**](EventFrameApi.md#eventFrameDelete) | **DELETE** /eventframes/{webId} | Delete an event frame.
[**eventFrameDeleteAnnotation**](EventFrameApi.md#eventFrameDeleteAnnotation) | **DELETE** /eventframes/{webId}/annotations/{id} | Delete an annotation on an event frame.
[**eventFrameDeleteSecurityEntry**](EventFrameApi.md#eventFrameDeleteSecurityEntry) | **DELETE** /eventframes/{webId}/securityentries/{name} | Delete a security entry owned by the event frame.
[**eventFrameExecuteSearchByAttribute**](EventFrameApi.md#eventFrameExecuteSearchByAttribute) | **GET** /eventframes/searchbyattribute/{searchId} | Execute a \&quot;Search EventFrames By Attribute Value\&quot; operation.
[**eventFrameFindEventFrameAttributes**](EventFrameApi.md#eventFrameFindEventFrameAttributes) | **GET** /eventframes/{webId}/eventframeattributes | Retrieves a list of event frame attributes matching the specified filters from the specified event frame.
[**eventFrameGet**](EventFrameApi.md#eventFrameGet) | **GET** /eventframes/{webId} | Retrieve an event frame.
[**eventFrameGetAnnotationById**](EventFrameApi.md#eventFrameGetAnnotationById) | **GET** /eventframes/{webId}/annotations/{id} | Get a specific annotation on an event frame.
[**eventFrameGetAnnotations**](EventFrameApi.md#eventFrameGetAnnotations) | **GET** /eventframes/{webId}/annotations | Get an event frame&#39;s annotations.
[**eventFrameGetAttributes**](EventFrameApi.md#eventFrameGetAttributes) | **GET** /eventframes/{webId}/attributes | Get the attributes of the specified event frame.
[**eventFrameGetByPath**](EventFrameApi.md#eventFrameGetByPath) | **GET** /eventframes | Retrieve an event frame by path.
[**eventFrameGetCategories**](EventFrameApi.md#eventFrameGetCategories) | **GET** /eventframes/{webId}/categories | Get an event frame&#39;s categories.
[**eventFrameGetEventFrames**](EventFrameApi.md#eventFrameGetEventFrames) | **GET** /eventframes/{webId}/eventframes | Retrieve event frames based on the specified conditions. By default, returns all children of the specified root event frame with a start time in the past 8 hours.
[**eventFrameGetMultiple**](EventFrameApi.md#eventFrameGetMultiple) | **GET** /eventframes/multiple | Retrieve multiple event frames by web ids or paths.
[**eventFrameGetReferencedElements**](EventFrameApi.md#eventFrameGetReferencedElements) | **GET** /eventframes/{webId}/referencedelements | Retrieve the event frame&#39;s referenced elements.
[**eventFrameGetSecurity**](EventFrameApi.md#eventFrameGetSecurity) | **GET** /eventframes/{webId}/security | Get the security information of the specified security item associated with the event frame for a specified user.
[**eventFrameGetSecurityEntries**](EventFrameApi.md#eventFrameGetSecurityEntries) | **GET** /eventframes/{webId}/securityentries | Retrieve the security entries associated with the event frame based on the specified criteria. By default, all security entries for this event frame are returned.
[**eventFrameGetSecurityEntryByName**](EventFrameApi.md#eventFrameGetSecurityEntryByName) | **GET** /eventframes/{webId}/securityentries/{name} | Retrieve the security entry associated with the event frame with the specified name.
[**eventFrameUpdate**](EventFrameApi.md#eventFrameUpdate) | **PATCH** /eventframes/{webId} | Update an event frame by replacing items in its definition.
[**eventFrameUpdateAnnotation**](EventFrameApi.md#eventFrameUpdateAnnotation) | **PATCH** /eventframes/{webId}/annotations/{id} | Update an annotation on an event frame by replacing items in its definition.
[**eventFrameUpdateSecurityEntry**](EventFrameApi.md#eventFrameUpdateSecurityEntry) | **PUT** /eventframes/{webId}/securityentries/{name} | Update a security entry owned by the event frame.


# **eventFrameAcknowledge**
> eventFrameAcknowledge($web_id)

Calls the EventFrame's Acknowledge method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventFrameApi();
$web_id = "web_id_example"; // string | The ID of the event frame.

try {
    $api_instance->eventFrameAcknowledge($web_id);
} catch (Exception $e) {
    echo 'Exception when calling EventFrameApi->eventFrameAcknowledge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the event frame. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventFrameCaptureValues**
> eventFrameCaptureValues($web_id)

Calls the EventFrame's CaptureValues method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventFrameApi();
$web_id = "web_id_example"; // string | The ID of the event frame.

try {
    $api_instance->eventFrameCaptureValues($web_id);
} catch (Exception $e) {
    echo 'Exception when calling EventFrameApi->eventFrameCaptureValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the event frame. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventFrameCreateAnnotation**
> eventFrameCreateAnnotation($web_id, $annotation)

Create an annotation on an event frame.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventFrameApi();
$web_id = "web_id_example"; // string | The ID of the owner event frame on which to create the annotation.
$annotation = new \osisoft.pidevclub.piwebapi.models\Annotation(); // \osisoft.pidevclub.piwebapi.models\Annotation | The new annotation definition.

try {
    $api_instance->eventFrameCreateAnnotation($web_id, $annotation);
} catch (Exception $e) {
    echo 'Exception when calling EventFrameApi->eventFrameCreateAnnotation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the owner event frame on which to create the annotation. |
 **annotation** | [**\osisoft.pidevclub.piwebapi.models\Annotation**](../Model/\osisoft.pidevclub.piwebapi.models\Annotation.md)| The new annotation definition. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventFrameCreateAttribute**
> eventFrameCreateAttribute($web_id, $attribute)

Create a new attribute of the specified event frame.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventFrameApi();
$web_id = "web_id_example"; // string | The ID of the event frame on which to create the attribute.
$attribute = new \osisoft.pidevclub.piwebapi.models\Attribute(); // \osisoft.pidevclub.piwebapi.models\Attribute | The definition of the new attribute.

try {
    $api_instance->eventFrameCreateAttribute($web_id, $attribute);
} catch (Exception $e) {
    echo 'Exception when calling EventFrameApi->eventFrameCreateAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the event frame on which to create the attribute. |
 **attribute** | [**\osisoft.pidevclub.piwebapi.models\Attribute**](../Model/\osisoft.pidevclub.piwebapi.models\Attribute.md)| The definition of the new attribute. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventFrameCreateConfig**
> eventFrameCreateConfig($web_id, $include_child_elements)

Executes the create configuration function of the data references found within the attributes of the event frame, and optionally, its children.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventFrameApi();
$web_id = "web_id_example"; // string | The ID of the event frame.
$include_child_elements = true; // bool | If true, includes the child event frames of the specified event frame.

try {
    $api_instance->eventFrameCreateConfig($web_id, $include_child_elements);
} catch (Exception $e) {
    echo 'Exception when calling EventFrameApi->eventFrameCreateConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the event frame. |
 **include_child_elements** | **bool**| If true, includes the child event frames of the specified event frame. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventFrameCreateEventFrame**
> eventFrameCreateEventFrame($web_id, $event_frame)

Create an event frame as a child of the specified event frame.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventFrameApi();
$web_id = "web_id_example"; // string | The ID of the parent event frame on which to create the event frame.
$event_frame = new \osisoft.pidevclub.piwebapi.models\EventFrame(); // \osisoft.pidevclub.piwebapi.models\EventFrame | The new event frame definition.

try {
    $api_instance->eventFrameCreateEventFrame($web_id, $event_frame);
} catch (Exception $e) {
    echo 'Exception when calling EventFrameApi->eventFrameCreateEventFrame: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the parent event frame on which to create the event frame. |
 **event_frame** | [**\osisoft.pidevclub.piwebapi.models\EventFrame**](../Model/\osisoft.pidevclub.piwebapi.models\EventFrame.md)| The new event frame definition. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventFrameCreateSearchByAttribute**
> eventFrameCreateSearchByAttribute()

Create a link for a \"Search EventFrames By Attribute Value\" operation, whose queries are specified in the request content. The SearchRoot is specified by the Web Id of the root EventFrame. If the SearchRoot is not specified, then the search starts at the Asset Database. ElementTemplate must be provided as the Web ID of the ElementTemplate, which are used to create the EventFrames. All the attributes in the queries must be defined as AttributeTemplates on the ElementTemplate. An array of attribute value queries are ANDed together to find the desired Element objects. At least one value query must be specified. There are limitations on SearchOperators.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventFrameApi();

try {
    $api_instance->eventFrameCreateSearchByAttribute();
} catch (Exception $e) {
    echo 'Exception when calling EventFrameApi->eventFrameCreateSearchByAttribute: ', $e->getMessage(), PHP_EOL;
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

# **eventFrameCreateSecurityEntry**
> eventFrameCreateSecurityEntry($web_id, $security_entry, $apply_to_children)

Create a security entry owned by the event frame.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventFrameApi();
$web_id = "web_id_example"; // string | The ID of the event frame where the security entry will be created.
$security_entry = new \osisoft.pidevclub.piwebapi.models\SecurityEntry(); // \osisoft.pidevclub.piwebapi.models\SecurityEntry | The new security entry definition. The full list of allow and deny rights must be supplied.
$apply_to_children = true; // bool | If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change.

try {
    $api_instance->eventFrameCreateSecurityEntry($web_id, $security_entry, $apply_to_children);
} catch (Exception $e) {
    echo 'Exception when calling EventFrameApi->eventFrameCreateSecurityEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the event frame where the security entry will be created. |
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

# **eventFrameDelete**
> eventFrameDelete($web_id)

Delete an event frame.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventFrameApi();
$web_id = "web_id_example"; // string | The ID of the event frame to delete.

try {
    $api_instance->eventFrameDelete($web_id);
} catch (Exception $e) {
    echo 'Exception when calling EventFrameApi->eventFrameDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the event frame to delete. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventFrameDeleteAnnotation**
> eventFrameDeleteAnnotation($id, $web_id)

Delete an annotation on an event frame.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventFrameApi();
$id = "id_example"; // string | The Annotation identifier of the annotation to be deleted.
$web_id = "web_id_example"; // string | The ID of the owner event frame of the annotation to delete.

try {
    $api_instance->eventFrameDeleteAnnotation($id, $web_id);
} catch (Exception $e) {
    echo 'Exception when calling EventFrameApi->eventFrameDeleteAnnotation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The Annotation identifier of the annotation to be deleted. |
 **web_id** | **string**| The ID of the owner event frame of the annotation to delete. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventFrameDeleteSecurityEntry**
> eventFrameDeleteSecurityEntry($name, $web_id, $apply_to_children)

Delete a security entry owned by the event frame.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventFrameApi();
$name = "name_example"; // string | The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username.
$web_id = "web_id_example"; // string | The ID of the event frame where the security entry will be deleted.
$apply_to_children = true; // bool | If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change.

try {
    $api_instance->eventFrameDeleteSecurityEntry($name, $web_id, $apply_to_children);
} catch (Exception $e) {
    echo 'Exception when calling EventFrameApi->eventFrameDeleteSecurityEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username. |
 **web_id** | **string**| The ID of the event frame where the security entry will be deleted. |
 **apply_to_children** | **bool**| If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventFrameExecuteSearchByAttribute**
> eventFrameExecuteSearchByAttribute($search_id, $can_be_acknowledged, $end_time, $is_acknowledged, $max_count, $name_filter, $referenced_element_name_filter, $search_full_hierarchy, $search_mode, $selected_fields, $severity, $sort_field, $sort_order, $start_index, $start_time)

Execute a \"Search EventFrames By Attribute Value\" operation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventFrameApi();
$search_id = "search_id_example"; // string | The encoded search Id of the \"Search EventFrames By Attribute Value\" operation.
$can_be_acknowledged = true; // bool | Specify the returned event frames' canBeAcknowledged property. The default is no canBeAcknowledged filter.
$end_time = "end_time_example"; // string | The ending time for the search. endTime must be greater than or equal to the startTime. The searchMode parameter will control whether the comparison will be performed against the event frame's startTime or endTime. The default is '*'.
$is_acknowledged = true; // bool | Specify the returned event frames' isAcknowledged property. The default no isAcknowledged filter.
$max_count = 56; // int | The maximum number of objects to be returned per call (page size). The default is 1000.
$name_filter = "name_filter_example"; // string | The name query string used for finding event frames. The default is no filter.
$referenced_element_name_filter = "referenced_element_name_filter_example"; // string | The name query string which must match the name of a referenced element. The default is no filter.
$search_full_hierarchy = true; // bool | Specifies whether the search should include objects nested further than the immediate children of the search root. The default is 'false'.
$search_mode = "search_mode_example"; // string | Determines how the startTime and endTime parameters are treated when searching for event frame objects to be included in the returned collection. The default is 'Overlapped'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$severity = array("severity_example"); // string[] | Specify that returned event frames must have this severity. Multiple severity values may be specified with multiple instances of the parameter. The default is no severity filter.
$sort_field = "sort_field_example"; // string | The field or property of the object used to sort the returned collection. The default is 'Name'.
$sort_order = "sort_order_example"; // string | The order that the returned collection is sorted. The default is 'Ascending'.
$start_index = 56; // int | The starting index (zero based) of the items to be returned. The default is 0.
$start_time = "start_time_example"; // string | The starting time for the search. startTime must be less than or equal to the endTime. The searchMode parameter will control whether the comparison will be performed against the event frame's startTime or endTime. The default is '*-8h'.

try {
    $api_instance->eventFrameExecuteSearchByAttribute($search_id, $can_be_acknowledged, $end_time, $is_acknowledged, $max_count, $name_filter, $referenced_element_name_filter, $search_full_hierarchy, $search_mode, $selected_fields, $severity, $sort_field, $sort_order, $start_index, $start_time);
} catch (Exception $e) {
    echo 'Exception when calling EventFrameApi->eventFrameExecuteSearchByAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_id** | **string**| The encoded search Id of the \&quot;Search EventFrames By Attribute Value\&quot; operation. |
 **can_be_acknowledged** | **bool**| Specify the returned event frames&#39; canBeAcknowledged property. The default is no canBeAcknowledged filter. | [optional]
 **end_time** | **string**| The ending time for the search. endTime must be greater than or equal to the startTime. The searchMode parameter will control whether the comparison will be performed against the event frame&#39;s startTime or endTime. The default is &#39;*&#39;. | [optional]
 **is_acknowledged** | **bool**| Specify the returned event frames&#39; isAcknowledged property. The default no isAcknowledged filter. | [optional]
 **max_count** | **int**| The maximum number of objects to be returned per call (page size). The default is 1000. | [optional]
 **name_filter** | **string**| The name query string used for finding event frames. The default is no filter. | [optional]
 **referenced_element_name_filter** | **string**| The name query string which must match the name of a referenced element. The default is no filter. | [optional]
 **search_full_hierarchy** | **bool**| Specifies whether the search should include objects nested further than the immediate children of the search root. The default is &#39;false&#39;. | [optional]
 **search_mode** | **string**| Determines how the startTime and endTime parameters are treated when searching for event frame objects to be included in the returned collection. The default is &#39;Overlapped&#39;. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **severity** | [**string[]**](../Model/string.md)| Specify that returned event frames must have this severity. Multiple severity values may be specified with multiple instances of the parameter. The default is no severity filter. | [optional]
 **sort_field** | **string**| The field or property of the object used to sort the returned collection. The default is &#39;Name&#39;. | [optional]
 **sort_order** | **string**| The order that the returned collection is sorted. The default is &#39;Ascending&#39;. | [optional]
 **start_index** | **int**| The starting index (zero based) of the items to be returned. The default is 0. | [optional]
 **start_time** | **string**| The starting time for the search. startTime must be less than or equal to the endTime. The searchMode parameter will control whether the comparison will be performed against the event frame&#39;s startTime or endTime. The default is &#39;*-8h&#39;. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventFrameFindEventFrameAttributes**
> \osisoft.pidevclub.piwebapi.models\ItemsAttribute eventFrameFindEventFrameAttributes($web_id, $attribute_category, $attribute_description_filter, $attribute_name_filter, $attribute_type, $end_time, $event_frame_category, $event_frame_description_filter, $event_frame_name_filter, $event_frame_template, $max_count, $referenced_element_name_filter, $search_full_hierarchy, $search_mode, $selected_fields, $sort_field, $sort_order, $start_index, $start_time)

Retrieves a list of event frame attributes matching the specified filters from the specified event frame.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventFrameApi();
$web_id = "web_id_example"; // string | The ID of the event frame to use as the root of the search.
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
    $result = $api_instance->eventFrameFindEventFrameAttributes($web_id, $attribute_category, $attribute_description_filter, $attribute_name_filter, $attribute_type, $end_time, $event_frame_category, $event_frame_description_filter, $event_frame_name_filter, $event_frame_template, $max_count, $referenced_element_name_filter, $search_full_hierarchy, $search_mode, $selected_fields, $sort_field, $sort_order, $start_index, $start_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventFrameApi->eventFrameFindEventFrameAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the event frame to use as the root of the search. |
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

# **eventFrameGet**
> \osisoft.pidevclub.piwebapi.models\EventFrame eventFrameGet($web_id, $selected_fields)

Retrieve an event frame.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventFrameApi();
$web_id = "web_id_example"; // string | The ID of the event frame.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->eventFrameGet($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventFrameApi->eventFrameGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the event frame. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\EventFrame**](../Model/EventFrame.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventFrameGetAnnotationById**
> \osisoft.pidevclub.piwebapi.models\Annotation eventFrameGetAnnotationById($id, $web_id, $selected_fields)

Get a specific annotation on an event frame.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventFrameApi();
$id = "id_example"; // string | The Annotation identifier of the specific annotation.
$web_id = "web_id_example"; // string | The ID of the owner event frame.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->eventFrameGetAnnotationById($id, $web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventFrameApi->eventFrameGetAnnotationById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The Annotation identifier of the specific annotation. |
 **web_id** | **string**| The ID of the owner event frame. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\Annotation**](../Model/Annotation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventFrameGetAnnotations**
> \osisoft.pidevclub.piwebapi.models\ItemsAnnotation eventFrameGetAnnotations($web_id, $selected_fields)

Get an event frame's annotations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventFrameApi();
$web_id = "web_id_example"; // string | The ID of the owner event frame.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->eventFrameGetAnnotations($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventFrameApi->eventFrameGetAnnotations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the owner event frame. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsAnnotation**](../Model/ItemsAnnotation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventFrameGetAttributes**
> \osisoft.pidevclub.piwebapi.models\ItemsAttribute eventFrameGetAttributes($web_id, $category_name, $max_count, $name_filter, $search_full_hierarchy, $selected_fields, $show_excluded, $show_hidden, $sort_field, $sort_order, $start_index, $template_name, $value_type)

Get the attributes of the specified event frame.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventFrameApi();
$web_id = "web_id_example"; // string | The ID of the event frame.
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
    $result = $api_instance->eventFrameGetAttributes($web_id, $category_name, $max_count, $name_filter, $search_full_hierarchy, $selected_fields, $show_excluded, $show_hidden, $sort_field, $sort_order, $start_index, $template_name, $value_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventFrameApi->eventFrameGetAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the event frame. |
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

# **eventFrameGetByPath**
> \osisoft.pidevclub.piwebapi.models\EventFrame eventFrameGetByPath($path, $selected_fields)

Retrieve an event frame by path.

This method returns an event frame based on the hierarchical path associated with it, and should be used when a path has been received from a separate part of the PI System for use in the PI Web API. Users should primarily search with the WebID when available.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventFrameApi();
$path = "path_example"; // string | The path to the event frame.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->eventFrameGetByPath($path, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventFrameApi->eventFrameGetByPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| The path to the event frame. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\EventFrame**](../Model/EventFrame.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventFrameGetCategories**
> \osisoft.pidevclub.piwebapi.models\ItemsElementCategory eventFrameGetCategories($web_id, $selected_fields)

Get an event frame's categories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventFrameApi();
$web_id = "web_id_example"; // string | The ID of the event frame.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->eventFrameGetCategories($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventFrameApi->eventFrameGetCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the event frame. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsElementCategory**](../Model/ItemsElementCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventFrameGetEventFrames**
> \osisoft.pidevclub.piwebapi.models\ItemsEventFrame eventFrameGetEventFrames($web_id, $can_be_acknowledged, $category_name, $end_time, $is_acknowledged, $max_count, $name_filter, $referenced_element_name_filter, $referenced_element_template_name, $search_full_hierarchy, $search_mode, $selected_fields, $severity, $sort_field, $sort_order, $start_index, $start_time, $template_name)

Retrieve event frames based on the specified conditions. By default, returns all children of the specified root event frame with a start time in the past 8 hours.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventFrameApi();
$web_id = "web_id_example"; // string | The ID of the event frame to use as the root of the search.
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
    $result = $api_instance->eventFrameGetEventFrames($web_id, $can_be_acknowledged, $category_name, $end_time, $is_acknowledged, $max_count, $name_filter, $referenced_element_name_filter, $referenced_element_template_name, $search_full_hierarchy, $search_mode, $selected_fields, $severity, $sort_field, $sort_order, $start_index, $start_time, $template_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventFrameApi->eventFrameGetEventFrames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the event frame to use as the root of the search. |
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

# **eventFrameGetMultiple**
> \osisoft.pidevclub.piwebapi.models\ItemsItemEventFrame eventFrameGetMultiple($as_parallel, $include_mode, $path, $selected_fields, $web_id)

Retrieve multiple event frames by web ids or paths.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventFrameApi();
$as_parallel = true; // bool | Specifies if the retrieval processes should be run in parallel on the server. This may improve the response time for large amounts of requested attributes. The default is 'false'.
$include_mode = "include_mode_example"; // string | The include mode for the return list. The default is 'All'.
$path = array("path_example"); // string[] | The path of an event frame. Multiple event frames may be specified with multiple instances of the parameter.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$web_id = array("web_id_example"); // string[] | The ID of an event frame. Multiple event frames may be specified with multiple instances of the parameter.

try {
    $result = $api_instance->eventFrameGetMultiple($as_parallel, $include_mode, $path, $selected_fields, $web_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventFrameApi->eventFrameGetMultiple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **as_parallel** | **bool**| Specifies if the retrieval processes should be run in parallel on the server. This may improve the response time for large amounts of requested attributes. The default is &#39;false&#39;. | [optional]
 **include_mode** | **string**| The include mode for the return list. The default is &#39;All&#39;. | [optional]
 **path** | [**string[]**](../Model/string.md)| The path of an event frame. Multiple event frames may be specified with multiple instances of the parameter. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **web_id** | [**string[]**](../Model/string.md)| The ID of an event frame. Multiple event frames may be specified with multiple instances of the parameter. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsItemEventFrame**](../Model/ItemsItemEventFrame.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventFrameGetReferencedElements**
> \osisoft.pidevclub.piwebapi.models\ItemsElement eventFrameGetReferencedElements($web_id, $selected_fields)

Retrieve the event frame's referenced elements.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventFrameApi();
$web_id = "web_id_example"; // string | The ID of the event frame whose referenced elements should be retrieved.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->eventFrameGetReferencedElements($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventFrameApi->eventFrameGetReferencedElements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the event frame whose referenced elements should be retrieved. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsElement**](../Model/ItemsElement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventFrameGetSecurity**
> \osisoft.pidevclub.piwebapi.models\ItemsSecurityRights eventFrameGetSecurity($web_id, $user_identity, $force_refresh, $selected_fields)

Get the security information of the specified security item associated with the event frame for a specified user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventFrameApi();
$web_id = "web_id_example"; // string | The ID of the event frame for the security to be checked.
$user_identity = array("user_identity_example"); // string[] | The user identity for the security information to be checked. Multiple security identities may be specified with multiple instances of the parameter. If the parameter is not specified, only the current user's security rights will be returned.
$force_refresh = true; // bool | Indicates if the security cache should be refreshed before getting security information. The default is 'false'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->eventFrameGetSecurity($web_id, $user_identity, $force_refresh, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventFrameApi->eventFrameGetSecurity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the event frame for the security to be checked. |
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

# **eventFrameGetSecurityEntries**
> \osisoft.pidevclub.piwebapi.models\ItemsSecurityEntry eventFrameGetSecurityEntries($web_id, $name_filter, $selected_fields)

Retrieve the security entries associated with the event frame based on the specified criteria. By default, all security entries for this event frame are returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventFrameApi();
$web_id = "web_id_example"; // string | The ID of the event frame.
$name_filter = "name_filter_example"; // string | The name query string used for filtering security entries. The default is no filter.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->eventFrameGetSecurityEntries($web_id, $name_filter, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventFrameApi->eventFrameGetSecurityEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the event frame. |
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

# **eventFrameGetSecurityEntryByName**
> \osisoft.pidevclub.piwebapi.models\SecurityEntry eventFrameGetSecurityEntryByName($name, $web_id, $selected_fields)

Retrieve the security entry associated with the event frame with the specified name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventFrameApi();
$name = "name_example"; // string | The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username.
$web_id = "web_id_example"; // string | The ID of the event frame.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->eventFrameGetSecurityEntryByName($name, $web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventFrameApi->eventFrameGetSecurityEntryByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the security entry. For every backslash character (\\) in the security entry name, replace with asterisk (*). As an example, use domain*username instead of domain\\username. |
 **web_id** | **string**| The ID of the event frame. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\SecurityEntry**](../Model/SecurityEntry.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventFrameUpdate**
> eventFrameUpdate($web_id, $event_frame)

Update an event frame by replacing items in its definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventFrameApi();
$web_id = "web_id_example"; // string | The ID of the event frame to update.
$event_frame = new \osisoft.pidevclub.piwebapi.models\EventFrame(); // \osisoft.pidevclub.piwebapi.models\EventFrame | A partial event frame containing the desired changes.

try {
    $api_instance->eventFrameUpdate($web_id, $event_frame);
} catch (Exception $e) {
    echo 'Exception when calling EventFrameApi->eventFrameUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the event frame to update. |
 **event_frame** | [**\osisoft.pidevclub.piwebapi.models\EventFrame**](../Model/\osisoft.pidevclub.piwebapi.models\EventFrame.md)| A partial event frame containing the desired changes. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventFrameUpdateAnnotation**
> eventFrameUpdateAnnotation($id, $web_id, $annotation)

Update an annotation on an event frame by replacing items in its definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventFrameApi();
$id = "id_example"; // string | The Annotation identifier of the annotation to be updated.
$web_id = "web_id_example"; // string | The ID of the owner event frame of the annotation to update.
$annotation = new \osisoft.pidevclub.piwebapi.models\Annotation(); // \osisoft.pidevclub.piwebapi.models\Annotation | A partial annotation containing the desired changes.

try {
    $api_instance->eventFrameUpdateAnnotation($id, $web_id, $annotation);
} catch (Exception $e) {
    echo 'Exception when calling EventFrameApi->eventFrameUpdateAnnotation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The Annotation identifier of the annotation to be updated. |
 **web_id** | **string**| The ID of the owner event frame of the annotation to update. |
 **annotation** | [**\osisoft.pidevclub.piwebapi.models\Annotation**](../Model/\osisoft.pidevclub.piwebapi.models\Annotation.md)| A partial annotation containing the desired changes. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventFrameUpdateSecurityEntry**
> eventFrameUpdateSecurityEntry($name, $web_id, $security_entry, $apply_to_children)

Update a security entry owned by the event frame.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventFrameApi();
$name = "name_example"; // string | The name of the security entry.
$web_id = "web_id_example"; // string | The ID of the event frame where the security entry will be updated.
$security_entry = new \osisoft.pidevclub.piwebapi.models\SecurityEntry(); // \osisoft.pidevclub.piwebapi.models\SecurityEntry | The new security entry definition. The full list of allow and deny rights must be supplied or they will be removed.
$apply_to_children = true; // bool | If false, the new access permissions are only applied to the associated object. If true, the access permissions of children with any parent-child reference types will change when the permissions on the primary parent change.

try {
    $api_instance->eventFrameUpdateSecurityEntry($name, $web_id, $security_entry, $apply_to_children);
} catch (Exception $e) {
    echo 'Exception when calling EventFrameApi->eventFrameUpdateSecurityEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the security entry. |
 **web_id** | **string**| The ID of the event frame where the security entry will be updated. |
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

