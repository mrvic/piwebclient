# Swagger\Client\StreamSetApi

All URIs are relative to *https://proghackuc2017.osisoft.com/piwebapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**streamSetGetChannel**](StreamSetApi.md#streamSetGetChannel) | **GET** /streamsets/{webId}/channel | Opens a channel that will send messages about any value changes for the attributes of an Element, Event Frame, or Attribute.
[**streamSetGetChannelAdHoc**](StreamSetApi.md#streamSetGetChannelAdHoc) | **GET** /streamsets/channel | Opens a channel that will send messages about any value changes for the specified streams.
[**streamSetGetEnd**](StreamSetApi.md#streamSetGetEnd) | **GET** /streamsets/{webId}/end | Returns End of stream values of the attributes for an Element, Event Frame or Attribute
[**streamSetGetEndAdHoc**](StreamSetApi.md#streamSetGetEndAdHoc) | **GET** /streamsets/end | Returns End Of Stream values for attributes of the specified streams
[**streamSetGetInterpolated**](StreamSetApi.md#streamSetGetInterpolated) | **GET** /streamsets/{webId}/interpolated | Returns interpolated values of attributes for an element, event frame or attribute over the specified time range at the specified sampling interval.
[**streamSetGetInterpolatedAdHoc**](StreamSetApi.md#streamSetGetInterpolatedAdHoc) | **GET** /streamsets/interpolated | Returns interpolated values of the specified streams over the specified time range at the specified sampling interval.
[**streamSetGetInterpolatedAtTimes**](StreamSetApi.md#streamSetGetInterpolatedAtTimes) | **GET** /streamsets/{webId}/interpolatedattimes | Returns interpolated values of attributes for an element, event frame or attribute at the specified times.
[**streamSetGetInterpolatedAtTimesAdHoc**](StreamSetApi.md#streamSetGetInterpolatedAtTimesAdHoc) | **GET** /streamsets/interpolatedattimes | Returns interpolated values of the specified streams at the specified times.
[**streamSetGetPlot**](StreamSetApi.md#streamSetGetPlot) | **GET** /streamsets/{webId}/plot | Returns values of attributes for an element, event frame or attribute over the specified time range suitable for plotting over the number of intervals (typically represents pixels).
[**streamSetGetPlotAdHoc**](StreamSetApi.md#streamSetGetPlotAdHoc) | **GET** /streamsets/plot | Returns values of attributes for the specified streams over the specified time range suitable for plotting over the number of intervals (typically represents pixels).
[**streamSetGetRecorded**](StreamSetApi.md#streamSetGetRecorded) | **GET** /streamsets/{webId}/recorded | Returns recorded values of the attributes for an element, event frame, or attribute.
[**streamSetGetRecordedAdHoc**](StreamSetApi.md#streamSetGetRecordedAdHoc) | **GET** /streamsets/recorded | Returns recorded values of the specified streams.
[**streamSetGetRecordedAtTime**](StreamSetApi.md#streamSetGetRecordedAtTime) | **GET** /streamsets/{webId}/recordedattime | Returns recorded values of the attributes for an element, event frame, or attribute.
[**streamSetGetRecordedAtTimeAdHoc**](StreamSetApi.md#streamSetGetRecordedAtTimeAdHoc) | **GET** /streamsets/recordedattime | Returns recorded values based on the passed time and retrieval mode.
[**streamSetGetRecordedAtTimes**](StreamSetApi.md#streamSetGetRecordedAtTimes) | **GET** /streamsets/{webId}/recordedattimes | Returns recorded values of attributes for an element, event frame or attribute at the specified times.
[**streamSetGetRecordedAtTimesAdHoc**](StreamSetApi.md#streamSetGetRecordedAtTimesAdHoc) | **GET** /streamsets/recordedattimes | Returns recorded values of the specified streams at the specified times.
[**streamSetGetSummaries**](StreamSetApi.md#streamSetGetSummaries) | **GET** /streamsets/{webId}/summary | Returns summary values of the attributes for an element, event frame or attribute.
[**streamSetGetSummariesAdHoc**](StreamSetApi.md#streamSetGetSummariesAdHoc) | **GET** /streamsets/summary | Returns summary values of the specified streams.
[**streamSetGetValues**](StreamSetApi.md#streamSetGetValues) | **GET** /streamsets/{webId}/value | Returns values of the attributes for an Element, Event Frame or Attribute at the specified time.
[**streamSetGetValuesAdHoc**](StreamSetApi.md#streamSetGetValuesAdHoc) | **GET** /streamsets/value | Returns values of the specified streams.
[**streamSetUpdateValue**](StreamSetApi.md#streamSetUpdateValue) | **POST** /streamsets/{webId}/value | Updates a single value for the specified streams.
[**streamSetUpdateValueAdHoc**](StreamSetApi.md#streamSetUpdateValueAdHoc) | **POST** /streamsets/value | Updates a single value for the specified streams.
[**streamSetUpdateValues**](StreamSetApi.md#streamSetUpdateValues) | **POST** /streamsets/{webId}/recorded | Updates multiple values for the specified streams.
[**streamSetUpdateValuesAdHoc**](StreamSetApi.md#streamSetUpdateValuesAdHoc) | **POST** /streamsets/recorded | Updates multiple values for the specified streams.


# **streamSetGetChannel**
> streamSetGetChannel($web_id, $category_name, $include_initial_values, $name_filter, $search_full_hierarchy, $show_excluded, $show_hidden, $template_name)

Opens a channel that will send messages about any value changes for the attributes of an Element, Event Frame, or Attribute.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamSetApi();
$web_id = "web_id_example"; // string | The ID of an Element, Event Frame or Attribute, which is the base element or parent of all the stream attributes.
$category_name = "category_name_example"; // string | Specify that included attributes must have this category. The default is no category filter.
$include_initial_values = true; // bool | Specified if the channel should send a message with the current values of all the streams after the connection is opened. The default is 'false'.
$name_filter = "name_filter_example"; // string | The name query string used for filtering attributes. The default is no filter.
$search_full_hierarchy = true; // bool | Specifies if the search should include attributes nested further than the immediate attributes of the searchRoot. The default is 'false'.
$show_excluded = true; // bool | Specified if the search should include attributes with the Excluded property set. The default is 'false'.
$show_hidden = true; // bool | Specified if the search should include attributes with the Hidden property set. The default is 'false'.
$template_name = "template_name_example"; // string | Specify that included attributes must be members of this template. The default is no template filter.

try {
    $api_instance->streamSetGetChannel($web_id, $category_name, $include_initial_values, $name_filter, $search_full_hierarchy, $show_excluded, $show_hidden, $template_name);
} catch (Exception $e) {
    echo 'Exception when calling StreamSetApi->streamSetGetChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of an Element, Event Frame or Attribute, which is the base element or parent of all the stream attributes. |
 **category_name** | **string**| Specify that included attributes must have this category. The default is no category filter. | [optional]
 **include_initial_values** | **bool**| Specified if the channel should send a message with the current values of all the streams after the connection is opened. The default is &#39;false&#39;. | [optional]
 **name_filter** | **string**| The name query string used for filtering attributes. The default is no filter. | [optional]
 **search_full_hierarchy** | **bool**| Specifies if the search should include attributes nested further than the immediate attributes of the searchRoot. The default is &#39;false&#39;. | [optional]
 **show_excluded** | **bool**| Specified if the search should include attributes with the Excluded property set. The default is &#39;false&#39;. | [optional]
 **show_hidden** | **bool**| Specified if the search should include attributes with the Hidden property set. The default is &#39;false&#39;. | [optional]
 **template_name** | **string**| Specify that included attributes must be members of this template. The default is no template filter. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamSetGetChannelAdHoc**
> streamSetGetChannelAdHoc($web_id, $include_initial_values)

Opens a channel that will send messages about any value changes for the specified streams.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamSetApi();
$web_id = array("web_id_example"); // string[] | The ID of a stream.  Multiple streams may be specified with multiple instances of the parameter.
$include_initial_values = true; // bool | Specified if the channel should send a message with the current values of all the streams after the connection is opened. The default is 'false'.

try {
    $api_instance->streamSetGetChannelAdHoc($web_id, $include_initial_values);
} catch (Exception $e) {
    echo 'Exception when calling StreamSetApi->streamSetGetChannelAdHoc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | [**string[]**](../Model/string.md)| The ID of a stream.  Multiple streams may be specified with multiple instances of the parameter. |
 **include_initial_values** | **bool**| Specified if the channel should send a message with the current values of all the streams after the connection is opened. The default is &#39;false&#39;. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamSetGetEnd**
> \osisoft.pidevclub.piwebapi.models\ItemsStreamValue streamSetGetEnd($web_id, $category_name, $name_filter, $search_full_hierarchy, $selected_fields, $show_excluded, $show_hidden, $template_name)

Returns End of stream values of the attributes for an Element, Event Frame or Attribute

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamSetApi();
$web_id = "web_id_example"; // string | The ID of an Element, Event Frame or Attribute, which is the base element or parent of all the stream attributes.
$category_name = "category_name_example"; // string | Specify that included attributes must have this category. The default is no category filter.
$name_filter = "name_filter_example"; // string | The name query string used for filtering attributes. The default is no filter.
$search_full_hierarchy = true; // bool | Specifies if the search should include attributes nested further than the immediate attributes of the searchRoot. The default is 'false'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$show_excluded = true; // bool | Specified if the search should include attributes with the Excluded property set. The default is 'false'.
$show_hidden = true; // bool | Specified if the search should include attributes with the Hidden property set. The default is 'false'.
$template_name = "template_name_example"; // string | Specify that included attributes must be members of this template. The default is no template filter.

try {
    $result = $api_instance->streamSetGetEnd($web_id, $category_name, $name_filter, $search_full_hierarchy, $selected_fields, $show_excluded, $show_hidden, $template_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamSetApi->streamSetGetEnd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of an Element, Event Frame or Attribute, which is the base element or parent of all the stream attributes. |
 **category_name** | **string**| Specify that included attributes must have this category. The default is no category filter. | [optional]
 **name_filter** | **string**| The name query string used for filtering attributes. The default is no filter. | [optional]
 **search_full_hierarchy** | **bool**| Specifies if the search should include attributes nested further than the immediate attributes of the searchRoot. The default is &#39;false&#39;. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **show_excluded** | **bool**| Specified if the search should include attributes with the Excluded property set. The default is &#39;false&#39;. | [optional]
 **show_hidden** | **bool**| Specified if the search should include attributes with the Hidden property set. The default is &#39;false&#39;. | [optional]
 **template_name** | **string**| Specify that included attributes must be members of this template. The default is no template filter. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsStreamValue**](../Model/ItemsStreamValue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamSetGetEndAdHoc**
> \osisoft.pidevclub.piwebapi.models\ItemsStreamValues streamSetGetEndAdHoc($web_id, $selected_fields)

Returns End Of Stream values for attributes of the specified streams

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamSetApi();
$web_id = array("web_id_example"); // string[] | The ID of a stream.  Multiple streams may be specified with multiple instances of the parameter.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->streamSetGetEndAdHoc($web_id, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamSetApi->streamSetGetEndAdHoc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | [**string[]**](../Model/string.md)| The ID of a stream.  Multiple streams may be specified with multiple instances of the parameter. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsStreamValues**](../Model/ItemsStreamValues.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamSetGetInterpolated**
> \osisoft.pidevclub.piwebapi.models\ItemsStreamValues streamSetGetInterpolated($web_id, $category_name, $end_time, $filter_expression, $include_filtered_values, $interval, $name_filter, $search_full_hierarchy, $selected_fields, $show_excluded, $show_hidden, $start_time, $template_name, $time_zone)

Returns interpolated values of attributes for an element, event frame or attribute over the specified time range at the specified sampling interval.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamSetApi();
$web_id = "web_id_example"; // string | The ID of an element, event frame or attribute, which is the base element or parent of all the stream attributes.
$category_name = "category_name_example"; // string | Specify that included attributes must have this category. The default is no category filter.
$end_time = "end_time_example"; // string | An optional end time. The default is '*' for element attributes and points. For event frame attributes, the default is the event frame's end time, or '*' if that is not set. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order.
$filter_expression = "filter_expression_example"; // string | An optional string containing a filter expression. Expression variables are relative to the data point. Use '.' to reference the containing attribute. If the attribute does not support filtering, the filter will be ignored. The default is no filtering.
$include_filtered_values = true; // bool | Specify 'true' to indicate that values which fail the filter criteria are present in the returned data at the times where they occurred with a value set to a 'Filtered' enumeration value with bad status. Repeated consecutive failures are omitted.
$interval = "interval_example"; // string | The sampling interval, in AFTimeSpan format.
$name_filter = "name_filter_example"; // string | The name query string used for filtering attributes. The default is no filter.
$search_full_hierarchy = true; // bool | Specifies if the search should include attributes nested further than the immediate attributes of the searchRoot. The default is 'false'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$show_excluded = true; // bool | Specified if the search should include attributes with the Excluded property set. The default is 'false'.
$show_hidden = true; // bool | Specified if the search should include attributes with the Hidden property set. The default is 'false'.
$start_time = "start_time_example"; // string | An optional start time. The default is '*-1d' for element attributes and points. For event frame attributes, the default is the event frame's start time, or '*-1d' if that is not set.
$template_name = "template_name_example"; // string | Specify that included attributes must be members of this template. The default is no template filter.
$time_zone = "time_zone_example"; // string | The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used.

try {
    $result = $api_instance->streamSetGetInterpolated($web_id, $category_name, $end_time, $filter_expression, $include_filtered_values, $interval, $name_filter, $search_full_hierarchy, $selected_fields, $show_excluded, $show_hidden, $start_time, $template_name, $time_zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamSetApi->streamSetGetInterpolated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of an element, event frame or attribute, which is the base element or parent of all the stream attributes. |
 **category_name** | **string**| Specify that included attributes must have this category. The default is no category filter. | [optional]
 **end_time** | **string**| An optional end time. The default is &#39;*&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s end time, or &#39;*&#39; if that is not set. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order. | [optional]
 **filter_expression** | **string**| An optional string containing a filter expression. Expression variables are relative to the data point. Use &#39;.&#39; to reference the containing attribute. If the attribute does not support filtering, the filter will be ignored. The default is no filtering. | [optional]
 **include_filtered_values** | **bool**| Specify &#39;true&#39; to indicate that values which fail the filter criteria are present in the returned data at the times where they occurred with a value set to a &#39;Filtered&#39; enumeration value with bad status. Repeated consecutive failures are omitted. | [optional]
 **interval** | **string**| The sampling interval, in AFTimeSpan format. | [optional]
 **name_filter** | **string**| The name query string used for filtering attributes. The default is no filter. | [optional]
 **search_full_hierarchy** | **bool**| Specifies if the search should include attributes nested further than the immediate attributes of the searchRoot. The default is &#39;false&#39;. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **show_excluded** | **bool**| Specified if the search should include attributes with the Excluded property set. The default is &#39;false&#39;. | [optional]
 **show_hidden** | **bool**| Specified if the search should include attributes with the Hidden property set. The default is &#39;false&#39;. | [optional]
 **start_time** | **string**| An optional start time. The default is &#39;*-1d&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s start time, or &#39;*-1d&#39; if that is not set. | [optional]
 **template_name** | **string**| Specify that included attributes must be members of this template. The default is no template filter. | [optional]
 **time_zone** | **string**| The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsStreamValues**](../Model/ItemsStreamValues.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamSetGetInterpolatedAdHoc**
> \osisoft.pidevclub.piwebapi.models\ItemsStreamValues streamSetGetInterpolatedAdHoc($web_id, $end_time, $filter_expression, $include_filtered_values, $interval, $selected_fields, $start_time, $time_zone)

Returns interpolated values of the specified streams over the specified time range at the specified sampling interval.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamSetApi();
$web_id = array("web_id_example"); // string[] | The ID of a stream. Multiple streams may be specified with multiple instances of the parameter.
$end_time = "end_time_example"; // string | An optional end time. The default is '*'. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order.
$filter_expression = "filter_expression_example"; // string | An optional string containing a filter expression. Expression variables are relative to the data point. Use '.' to reference the containing attribute. If the attribute does not support filtering, the filter will be ignored. The default is no filtering.
$include_filtered_values = true; // bool | Specify 'true' to indicate that values which fail the filter criteria are present in the returned data at the times where they occurred with a value set to a 'Filtered' enumeration value with bad status. Repeated consecutive failures are omitted.
$interval = "interval_example"; // string | The sampling interval, in AFTimeSpan format.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$start_time = "start_time_example"; // string | An optional start time. The default is '*-1d'.
$time_zone = "time_zone_example"; // string | The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used.

try {
    $result = $api_instance->streamSetGetInterpolatedAdHoc($web_id, $end_time, $filter_expression, $include_filtered_values, $interval, $selected_fields, $start_time, $time_zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamSetApi->streamSetGetInterpolatedAdHoc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | [**string[]**](../Model/string.md)| The ID of a stream. Multiple streams may be specified with multiple instances of the parameter. |
 **end_time** | **string**| An optional end time. The default is &#39;*&#39;. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order. | [optional]
 **filter_expression** | **string**| An optional string containing a filter expression. Expression variables are relative to the data point. Use &#39;.&#39; to reference the containing attribute. If the attribute does not support filtering, the filter will be ignored. The default is no filtering. | [optional]
 **include_filtered_values** | **bool**| Specify &#39;true&#39; to indicate that values which fail the filter criteria are present in the returned data at the times where they occurred with a value set to a &#39;Filtered&#39; enumeration value with bad status. Repeated consecutive failures are omitted. | [optional]
 **interval** | **string**| The sampling interval, in AFTimeSpan format. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **start_time** | **string**| An optional start time. The default is &#39;*-1d&#39;. | [optional]
 **time_zone** | **string**| The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsStreamValues**](../Model/ItemsStreamValues.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamSetGetInterpolatedAtTimes**
> \osisoft.pidevclub.piwebapi.models\ItemsStreamValues streamSetGetInterpolatedAtTimes($web_id, $time, $category_name, $filter_expression, $include_filtered_values, $name_filter, $search_full_hierarchy, $selected_fields, $show_excluded, $show_hidden, $sort_order, $template_name, $time_zone)

Returns interpolated values of attributes for an element, event frame or attribute at the specified times.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamSetApi();
$web_id = "web_id_example"; // string | The ID of an element, event frame or attribute, which is the base element or parent of all the stream attributes.
$time = array("time_example"); // string[] | The timestamp at which to retrieve a interpolated value. Multiple timestamps may be specified with multiple instances of the parameter.
$category_name = "category_name_example"; // string | Specify that included attributes must have this category. The default is no category filter.
$filter_expression = "filter_expression_example"; // string | An optional string containing a filter expression. Expression variables are relative to the data point. Use '.' to reference the containing attribute. If the attribute does not support filtering, the filter will be ignored. The default is no filtering.
$include_filtered_values = true; // bool | Specify 'true' to indicate that values which fail the filter criteria are present in the returned data at the times where they occurred with a value set to a 'Filtered' enumeration value with bad status. Repeated consecutive failures are omitted.
$name_filter = "name_filter_example"; // string | The name query string used for filtering attributes. The default is no filter.
$search_full_hierarchy = true; // bool | Specifies if the search should include attributes nested further than the immediate attributes of the searchRoot. The default is 'false'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$show_excluded = true; // bool | Specified if the search should include attributes with the Excluded property set. The default is 'false'.
$show_hidden = true; // bool | Specified if the search should include attributes with the Hidden property set. The default is 'false'.
$sort_order = "sort_order_example"; // string | The order that the returned collection is sorted. The default is 'Ascending'.
$template_name = "template_name_example"; // string | Specify that included attributes must be members of this template. The default is no template filter.
$time_zone = "time_zone_example"; // string | The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used.

try {
    $result = $api_instance->streamSetGetInterpolatedAtTimes($web_id, $time, $category_name, $filter_expression, $include_filtered_values, $name_filter, $search_full_hierarchy, $selected_fields, $show_excluded, $show_hidden, $sort_order, $template_name, $time_zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamSetApi->streamSetGetInterpolatedAtTimes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of an element, event frame or attribute, which is the base element or parent of all the stream attributes. |
 **time** | [**string[]**](../Model/string.md)| The timestamp at which to retrieve a interpolated value. Multiple timestamps may be specified with multiple instances of the parameter. |
 **category_name** | **string**| Specify that included attributes must have this category. The default is no category filter. | [optional]
 **filter_expression** | **string**| An optional string containing a filter expression. Expression variables are relative to the data point. Use &#39;.&#39; to reference the containing attribute. If the attribute does not support filtering, the filter will be ignored. The default is no filtering. | [optional]
 **include_filtered_values** | **bool**| Specify &#39;true&#39; to indicate that values which fail the filter criteria are present in the returned data at the times where they occurred with a value set to a &#39;Filtered&#39; enumeration value with bad status. Repeated consecutive failures are omitted. | [optional]
 **name_filter** | **string**| The name query string used for filtering attributes. The default is no filter. | [optional]
 **search_full_hierarchy** | **bool**| Specifies if the search should include attributes nested further than the immediate attributes of the searchRoot. The default is &#39;false&#39;. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **show_excluded** | **bool**| Specified if the search should include attributes with the Excluded property set. The default is &#39;false&#39;. | [optional]
 **show_hidden** | **bool**| Specified if the search should include attributes with the Hidden property set. The default is &#39;false&#39;. | [optional]
 **sort_order** | **string**| The order that the returned collection is sorted. The default is &#39;Ascending&#39;. | [optional]
 **template_name** | **string**| Specify that included attributes must be members of this template. The default is no template filter. | [optional]
 **time_zone** | **string**| The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsStreamValues**](../Model/ItemsStreamValues.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamSetGetInterpolatedAtTimesAdHoc**
> \osisoft.pidevclub.piwebapi.models\ItemsStreamValues streamSetGetInterpolatedAtTimesAdHoc($time, $web_id, $filter_expression, $include_filtered_values, $selected_fields, $sort_order, $time_zone)

Returns interpolated values of the specified streams at the specified times.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamSetApi();
$time = array("time_example"); // string[] | The timestamp at which to retrieve a interpolated value. Multiple timestamps may be specified with multiple instances of the parameter.
$web_id = array("web_id_example"); // string[] | The ID of a stream. Multiple streams may be specified with multiple instances of the parameter.
$filter_expression = "filter_expression_example"; // string | An optional string containing a filter expression. Expression variables are relative to the data point. Use '.' to reference the containing attribute. If the attribute does not support filtering, the filter will be ignored. The default is no filtering.
$include_filtered_values = true; // bool | Specify 'true' to indicate that values which fail the filter criteria are present in the returned data at the times where they occurred with a value set to a 'Filtered' enumeration value with bad status. Repeated consecutive failures are omitted.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$sort_order = "sort_order_example"; // string | The order that the returned collection is sorted. The default is 'Ascending'.
$time_zone = "time_zone_example"; // string | The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used.

try {
    $result = $api_instance->streamSetGetInterpolatedAtTimesAdHoc($time, $web_id, $filter_expression, $include_filtered_values, $selected_fields, $sort_order, $time_zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamSetApi->streamSetGetInterpolatedAtTimesAdHoc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **time** | [**string[]**](../Model/string.md)| The timestamp at which to retrieve a interpolated value. Multiple timestamps may be specified with multiple instances of the parameter. |
 **web_id** | [**string[]**](../Model/string.md)| The ID of a stream. Multiple streams may be specified with multiple instances of the parameter. |
 **filter_expression** | **string**| An optional string containing a filter expression. Expression variables are relative to the data point. Use &#39;.&#39; to reference the containing attribute. If the attribute does not support filtering, the filter will be ignored. The default is no filtering. | [optional]
 **include_filtered_values** | **bool**| Specify &#39;true&#39; to indicate that values which fail the filter criteria are present in the returned data at the times where they occurred with a value set to a &#39;Filtered&#39; enumeration value with bad status. Repeated consecutive failures are omitted. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **sort_order** | **string**| The order that the returned collection is sorted. The default is &#39;Ascending&#39;. | [optional]
 **time_zone** | **string**| The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsStreamValues**](../Model/ItemsStreamValues.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamSetGetPlot**
> \osisoft.pidevclub.piwebapi.models\ItemsStreamValues streamSetGetPlot($web_id, $category_name, $end_time, $intervals, $name_filter, $search_full_hierarchy, $selected_fields, $show_excluded, $show_hidden, $start_time, $template_name, $time_zone)

Returns values of attributes for an element, event frame or attribute over the specified time range suitable for plotting over the number of intervals (typically represents pixels).

For each interval, the data available is examined and significant values are returned. Each interval can produce up to 5 values if they are unique, the first value in the interval, the last value, the highest value, the lowest value and at most one exceptional point (bad status or digital state).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamSetApi();
$web_id = "web_id_example"; // string | The ID of an element, event frame or attribute, which is the base element or parent of all the stream attributes.
$category_name = "category_name_example"; // string | Specify that included attributes must have this category. The default is no category filter.
$end_time = "end_time_example"; // string | An optional end time. The default is '*' for element attributes and points. For event frame attributes, the default is the event frame's end time, or '*' if that is not set. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order.
$intervals = 56; // int | The number of intervals to plot over. Typically, this would be the number of horizontal pixels in the trend. The default is '24'. For each interval, the data available is examined and significant values are returned. Each interval can produce up to 5 values if they are unique, the first value in the interval, the last value, the highest value, the lowest value and at most one exceptional point (bad status or digital state).
$name_filter = "name_filter_example"; // string | The name query string used for filtering attributes. The default is no filter.
$search_full_hierarchy = true; // bool | Specifies if the search should include attributes nested further than the immediate attributes of the searchRoot. The default is 'false'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$show_excluded = true; // bool | Specified if the search should include attributes with the Excluded property set. The default is 'false'.
$show_hidden = true; // bool | Specified if the search should include attributes with the Hidden property set. The default is 'false'.
$start_time = "start_time_example"; // string | An optional start time. The default is '*-1d' for element attributes and points. For event frame attributes, the default is the event frame's start time, or '*-1d' if that is not set.
$template_name = "template_name_example"; // string | Specify that included attributes must be members of this template. The default is no template filter.
$time_zone = "time_zone_example"; // string | The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used.

try {
    $result = $api_instance->streamSetGetPlot($web_id, $category_name, $end_time, $intervals, $name_filter, $search_full_hierarchy, $selected_fields, $show_excluded, $show_hidden, $start_time, $template_name, $time_zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamSetApi->streamSetGetPlot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of an element, event frame or attribute, which is the base element or parent of all the stream attributes. |
 **category_name** | **string**| Specify that included attributes must have this category. The default is no category filter. | [optional]
 **end_time** | **string**| An optional end time. The default is &#39;*&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s end time, or &#39;*&#39; if that is not set. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order. | [optional]
 **intervals** | **int**| The number of intervals to plot over. Typically, this would be the number of horizontal pixels in the trend. The default is &#39;24&#39;. For each interval, the data available is examined and significant values are returned. Each interval can produce up to 5 values if they are unique, the first value in the interval, the last value, the highest value, the lowest value and at most one exceptional point (bad status or digital state). | [optional]
 **name_filter** | **string**| The name query string used for filtering attributes. The default is no filter. | [optional]
 **search_full_hierarchy** | **bool**| Specifies if the search should include attributes nested further than the immediate attributes of the searchRoot. The default is &#39;false&#39;. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **show_excluded** | **bool**| Specified if the search should include attributes with the Excluded property set. The default is &#39;false&#39;. | [optional]
 **show_hidden** | **bool**| Specified if the search should include attributes with the Hidden property set. The default is &#39;false&#39;. | [optional]
 **start_time** | **string**| An optional start time. The default is &#39;*-1d&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s start time, or &#39;*-1d&#39; if that is not set. | [optional]
 **template_name** | **string**| Specify that included attributes must be members of this template. The default is no template filter. | [optional]
 **time_zone** | **string**| The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsStreamValues**](../Model/ItemsStreamValues.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamSetGetPlotAdHoc**
> \osisoft.pidevclub.piwebapi.models\ItemsStreamValues streamSetGetPlotAdHoc($web_id, $end_time, $intervals, $selected_fields, $start_time, $time_zone)

Returns values of attributes for the specified streams over the specified time range suitable for plotting over the number of intervals (typically represents pixels).

For each interval, the data available is examined and significant values are returned. Each interval can produce up to 5 values if they are unique, the first value in the interval, the last value, the highest value, the lowest value and at most one exceptional point (bad status or digital state).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamSetApi();
$web_id = array("web_id_example"); // string[] | The ID of a stream.  Multiple streams may be specified with multiple instances of the parameter.
$end_time = "end_time_example"; // string | An optional end time. The default is '*'. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order.
$intervals = 56; // int | The number of intervals to plot over. Typically, this would be the number of horizontal pixels in the trend. The default is '24'. For each interval, the data available is examined and significant values are returned. Each interval can produce up to 5 values if they are unique, the first value in the interval, the last value, the highest value, the lowest value and at most one exceptional point (bad status or digital state).
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$start_time = "start_time_example"; // string | An optional start time. The default is '*-1d'.
$time_zone = "time_zone_example"; // string | The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used.

try {
    $result = $api_instance->streamSetGetPlotAdHoc($web_id, $end_time, $intervals, $selected_fields, $start_time, $time_zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamSetApi->streamSetGetPlotAdHoc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | [**string[]**](../Model/string.md)| The ID of a stream.  Multiple streams may be specified with multiple instances of the parameter. |
 **end_time** | **string**| An optional end time. The default is &#39;*&#39;. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order. | [optional]
 **intervals** | **int**| The number of intervals to plot over. Typically, this would be the number of horizontal pixels in the trend. The default is &#39;24&#39;. For each interval, the data available is examined and significant values are returned. Each interval can produce up to 5 values if they are unique, the first value in the interval, the last value, the highest value, the lowest value and at most one exceptional point (bad status or digital state). | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **start_time** | **string**| An optional start time. The default is &#39;*-1d&#39;. | [optional]
 **time_zone** | **string**| The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsStreamValues**](../Model/ItemsStreamValues.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamSetGetRecorded**
> \osisoft.pidevclub.piwebapi.models\ItemsStreamValues streamSetGetRecorded($web_id, $boundary_type, $category_name, $end_time, $filter_expression, $include_filtered_values, $max_count, $name_filter, $search_full_hierarchy, $selected_fields, $show_excluded, $show_hidden, $start_time, $template_name, $time_zone)

Returns recorded values of the attributes for an element, event frame, or attribute.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamSetApi();
$web_id = "web_id_example"; // string | The ID of an element, event frame or attribute, which is the base element or parent of all the stream attributes.
$boundary_type = "boundary_type_example"; // string | An optional value that determines how the times and values of the returned end points are determined. The default is 'Inside'.
$category_name = "category_name_example"; // string | Specify that included attributes must have this category. The default is no category filter.
$end_time = "end_time_example"; // string | An optional end time. The default is '*' for element attributes and points. For event frame attributes, the default is the event frame's end time, or '*' if that is not set. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order.
$filter_expression = "filter_expression_example"; // string | An optional string containing a filter expression. Expression variables are relative to the data point. Use '.' to reference the containing attribute. The default is no filtering.
$include_filtered_values = true; // bool | Specify 'true' to indicate that values which fail the filter criteria are present in the returned data at the times where they occurred with a value set to a 'Filtered' enumeration value with bad status. Repeated consecutive failures are omitted.
$max_count = 56; // int | The maximum number of values to be returned. The default is 1000.
$name_filter = "name_filter_example"; // string | The name query string used for filtering attributes. The default is no filter.
$search_full_hierarchy = true; // bool | Specifies if the search should include attributes nested further than the immediate attributes of the searchRoot. The default is 'false'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$show_excluded = true; // bool | Specified if the search should include attributes with the Excluded property set. The default is 'false'.
$show_hidden = true; // bool | Specified if the search should include attributes with the Hidden property set. The default is 'false'.
$start_time = "start_time_example"; // string | An optional start time. The default is '*-1d' for element attributes and points. For event frame attributes, the default is the event frame's start time, or '*-1d' if that is not set.
$template_name = "template_name_example"; // string | Specify that included attributes must be members of this template. The default is no template filter.
$time_zone = "time_zone_example"; // string | The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used.

try {
    $result = $api_instance->streamSetGetRecorded($web_id, $boundary_type, $category_name, $end_time, $filter_expression, $include_filtered_values, $max_count, $name_filter, $search_full_hierarchy, $selected_fields, $show_excluded, $show_hidden, $start_time, $template_name, $time_zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamSetApi->streamSetGetRecorded: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of an element, event frame or attribute, which is the base element or parent of all the stream attributes. |
 **boundary_type** | **string**| An optional value that determines how the times and values of the returned end points are determined. The default is &#39;Inside&#39;. | [optional]
 **category_name** | **string**| Specify that included attributes must have this category. The default is no category filter. | [optional]
 **end_time** | **string**| An optional end time. The default is &#39;*&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s end time, or &#39;*&#39; if that is not set. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order. | [optional]
 **filter_expression** | **string**| An optional string containing a filter expression. Expression variables are relative to the data point. Use &#39;.&#39; to reference the containing attribute. The default is no filtering. | [optional]
 **include_filtered_values** | **bool**| Specify &#39;true&#39; to indicate that values which fail the filter criteria are present in the returned data at the times where they occurred with a value set to a &#39;Filtered&#39; enumeration value with bad status. Repeated consecutive failures are omitted. | [optional]
 **max_count** | **int**| The maximum number of values to be returned. The default is 1000. | [optional]
 **name_filter** | **string**| The name query string used for filtering attributes. The default is no filter. | [optional]
 **search_full_hierarchy** | **bool**| Specifies if the search should include attributes nested further than the immediate attributes of the searchRoot. The default is &#39;false&#39;. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **show_excluded** | **bool**| Specified if the search should include attributes with the Excluded property set. The default is &#39;false&#39;. | [optional]
 **show_hidden** | **bool**| Specified if the search should include attributes with the Hidden property set. The default is &#39;false&#39;. | [optional]
 **start_time** | **string**| An optional start time. The default is &#39;*-1d&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s start time, or &#39;*-1d&#39; if that is not set. | [optional]
 **template_name** | **string**| Specify that included attributes must be members of this template. The default is no template filter. | [optional]
 **time_zone** | **string**| The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsStreamValues**](../Model/ItemsStreamValues.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamSetGetRecordedAdHoc**
> \osisoft.pidevclub.piwebapi.models\ItemsStreamValues streamSetGetRecordedAdHoc($web_id, $boundary_type, $end_time, $filter_expression, $include_filtered_values, $max_count, $selected_fields, $start_time, $time_zone)

Returns recorded values of the specified streams.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamSetApi();
$web_id = array("web_id_example"); // string[] | The ID of a stream.  Multiple streams may be specified with multiple instances of the parameter.
$boundary_type = "boundary_type_example"; // string | An optional value that determines how the times and values of the returned end points are determined. The default is 'Inside'.
$end_time = "end_time_example"; // string | An optional end time. The default is '*'. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order.
$filter_expression = "filter_expression_example"; // string | An optional string containing a filter expression. Expression variables are relative to the data point. Use '.' to reference the containing attribute. The default is no filtering.
$include_filtered_values = true; // bool | Specify 'true' to indicate that values which fail the filter criteria are present in the returned data at the times where they occurred with a value set to a 'Filtered' enumeration value with bad status. Repeated consecutive failures are omitted.
$max_count = 56; // int | The maximum number of values to be returned. The default is 1000.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$start_time = "start_time_example"; // string | An optional start time. The default is '*-1d'.
$time_zone = "time_zone_example"; // string | The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used.

try {
    $result = $api_instance->streamSetGetRecordedAdHoc($web_id, $boundary_type, $end_time, $filter_expression, $include_filtered_values, $max_count, $selected_fields, $start_time, $time_zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamSetApi->streamSetGetRecordedAdHoc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | [**string[]**](../Model/string.md)| The ID of a stream.  Multiple streams may be specified with multiple instances of the parameter. |
 **boundary_type** | **string**| An optional value that determines how the times and values of the returned end points are determined. The default is &#39;Inside&#39;. | [optional]
 **end_time** | **string**| An optional end time. The default is &#39;*&#39;. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order. | [optional]
 **filter_expression** | **string**| An optional string containing a filter expression. Expression variables are relative to the data point. Use &#39;.&#39; to reference the containing attribute. The default is no filtering. | [optional]
 **include_filtered_values** | **bool**| Specify &#39;true&#39; to indicate that values which fail the filter criteria are present in the returned data at the times where they occurred with a value set to a &#39;Filtered&#39; enumeration value with bad status. Repeated consecutive failures are omitted. | [optional]
 **max_count** | **int**| The maximum number of values to be returned. The default is 1000. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **start_time** | **string**| An optional start time. The default is &#39;*-1d&#39;. | [optional]
 **time_zone** | **string**| The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsStreamValues**](../Model/ItemsStreamValues.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamSetGetRecordedAtTime**
> \osisoft.pidevclub.piwebapi.models\ItemsStreamValues streamSetGetRecordedAtTime($web_id, $time, $category_name, $name_filter, $retrieval_mode, $search_full_hierarchy, $selected_fields, $show_excluded, $show_hidden, $template_name, $time_zone)

Returns recorded values of the attributes for an element, event frame, or attribute.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamSetApi();
$web_id = "web_id_example"; // string | The ID of an element, event frame or attribute, which is the base element or parent of all the stream attributes.
$time = "time_example"; // string | The timestamp at which the values are desired.
$category_name = "category_name_example"; // string | Specify that included attributes must have this category. The default is no category filter.
$name_filter = "name_filter_example"; // string | The name query string used for filtering attributes. The default is no filter.
$retrieval_mode = "retrieval_mode_example"; // string | An optional value that determines the values to return when values don't exist at the exact time specified. The default is 'Auto'.
$search_full_hierarchy = true; // bool | Specifies if the search should include attributes nested further than the immediate attributes of the searchRoot. The default is 'false'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$show_excluded = true; // bool | Specified if the search should include attributes with the Excluded property set. The default is 'false'.
$show_hidden = true; // bool | Specified if the search should include attributes with the Hidden property set. The default is 'false'.
$template_name = "template_name_example"; // string | Specify that included attributes must be members of this template. The default is no template filter.
$time_zone = "time_zone_example"; // string | The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used.

try {
    $result = $api_instance->streamSetGetRecordedAtTime($web_id, $time, $category_name, $name_filter, $retrieval_mode, $search_full_hierarchy, $selected_fields, $show_excluded, $show_hidden, $template_name, $time_zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamSetApi->streamSetGetRecordedAtTime: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of an element, event frame or attribute, which is the base element or parent of all the stream attributes. |
 **time** | **string**| The timestamp at which the values are desired. |
 **category_name** | **string**| Specify that included attributes must have this category. The default is no category filter. | [optional]
 **name_filter** | **string**| The name query string used for filtering attributes. The default is no filter. | [optional]
 **retrieval_mode** | **string**| An optional value that determines the values to return when values don&#39;t exist at the exact time specified. The default is &#39;Auto&#39;. | [optional]
 **search_full_hierarchy** | **bool**| Specifies if the search should include attributes nested further than the immediate attributes of the searchRoot. The default is &#39;false&#39;. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **show_excluded** | **bool**| Specified if the search should include attributes with the Excluded property set. The default is &#39;false&#39;. | [optional]
 **show_hidden** | **bool**| Specified if the search should include attributes with the Hidden property set. The default is &#39;false&#39;. | [optional]
 **template_name** | **string**| Specify that included attributes must be members of this template. The default is no template filter. | [optional]
 **time_zone** | **string**| The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsStreamValues**](../Model/ItemsStreamValues.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamSetGetRecordedAtTimeAdHoc**
> \osisoft.pidevclub.piwebapi.models\ItemsStreamValue streamSetGetRecordedAtTimeAdHoc($time, $web_id, $retrieval_mode, $selected_fields, $time_zone)

Returns recorded values based on the passed time and retrieval mode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamSetApi();
$time = "time_example"; // string | The timestamp at which the values are desired.
$web_id = array("web_id_example"); // string[] | The ID of a stream.  Multiple streams may be specified with multiple instances of the parameter.
$retrieval_mode = "retrieval_mode_example"; // string | An optional value that determines the values to return when values don't exist at the exact time specified. The default is 'Auto'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$time_zone = "time_zone_example"; // string | The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used.

try {
    $result = $api_instance->streamSetGetRecordedAtTimeAdHoc($time, $web_id, $retrieval_mode, $selected_fields, $time_zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamSetApi->streamSetGetRecordedAtTimeAdHoc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **time** | **string**| The timestamp at which the values are desired. |
 **web_id** | [**string[]**](../Model/string.md)| The ID of a stream.  Multiple streams may be specified with multiple instances of the parameter. |
 **retrieval_mode** | **string**| An optional value that determines the values to return when values don&#39;t exist at the exact time specified. The default is &#39;Auto&#39;. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **time_zone** | **string**| The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsStreamValue**](../Model/ItemsStreamValue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamSetGetRecordedAtTimes**
> \osisoft.pidevclub.piwebapi.models\ItemsStreamValues streamSetGetRecordedAtTimes($web_id, $time, $category_name, $name_filter, $retrieval_mode, $search_full_hierarchy, $selected_fields, $show_excluded, $show_hidden, $sort_order, $template_name, $time_zone)

Returns recorded values of attributes for an element, event frame or attribute at the specified times.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamSetApi();
$web_id = "web_id_example"; // string | The ID of an element, event frame or attribute, which is the base element or parent of all the stream attributes.
$time = array("time_example"); // string[] | The timestamp at which to retrieve a recorded value. Multiple timestamps may be specified with multiple instances of the parameter.
$category_name = "category_name_example"; // string | Specify that included attributes must have this category. The default is no category filter.
$name_filter = "name_filter_example"; // string | The name query string used for filtering attributes. The default is no filter.
$retrieval_mode = "retrieval_mode_example"; // string | An optional value that determines the values to return when values don't exist at the exact time specified. The default is 'Auto'.
$search_full_hierarchy = true; // bool | Specifies if the search should include attributes nested further than the immediate attributes of the searchRoot. The default is 'false'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$show_excluded = true; // bool | Specified if the search should include attributes with the Excluded property set. The default is 'false'.
$show_hidden = true; // bool | Specified if the search should include attributes with the Hidden property set. The default is 'false'.
$sort_order = "sort_order_example"; // string | The order that the returned collection is sorted. The default is 'Ascending'.
$template_name = "template_name_example"; // string | Specify that included attributes must be members of this template. The default is no template filter.
$time_zone = "time_zone_example"; // string | The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used.

try {
    $result = $api_instance->streamSetGetRecordedAtTimes($web_id, $time, $category_name, $name_filter, $retrieval_mode, $search_full_hierarchy, $selected_fields, $show_excluded, $show_hidden, $sort_order, $template_name, $time_zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamSetApi->streamSetGetRecordedAtTimes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of an element, event frame or attribute, which is the base element or parent of all the stream attributes. |
 **time** | [**string[]**](../Model/string.md)| The timestamp at which to retrieve a recorded value. Multiple timestamps may be specified with multiple instances of the parameter. |
 **category_name** | **string**| Specify that included attributes must have this category. The default is no category filter. | [optional]
 **name_filter** | **string**| The name query string used for filtering attributes. The default is no filter. | [optional]
 **retrieval_mode** | **string**| An optional value that determines the values to return when values don&#39;t exist at the exact time specified. The default is &#39;Auto&#39;. | [optional]
 **search_full_hierarchy** | **bool**| Specifies if the search should include attributes nested further than the immediate attributes of the searchRoot. The default is &#39;false&#39;. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **show_excluded** | **bool**| Specified if the search should include attributes with the Excluded property set. The default is &#39;false&#39;. | [optional]
 **show_hidden** | **bool**| Specified if the search should include attributes with the Hidden property set. The default is &#39;false&#39;. | [optional]
 **sort_order** | **string**| The order that the returned collection is sorted. The default is &#39;Ascending&#39;. | [optional]
 **template_name** | **string**| Specify that included attributes must be members of this template. The default is no template filter. | [optional]
 **time_zone** | **string**| The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsStreamValues**](../Model/ItemsStreamValues.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamSetGetRecordedAtTimesAdHoc**
> \osisoft.pidevclub.piwebapi.models\ItemsStreamValues streamSetGetRecordedAtTimesAdHoc($time, $web_id, $retrieval_mode, $selected_fields, $sort_order, $time_zone)

Returns recorded values of the specified streams at the specified times.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamSetApi();
$time = array("time_example"); // string[] | The timestamp at which to retrieve a recorded value. Multiple timestamps may be specified with multiple instances of the parameter.
$web_id = array("web_id_example"); // string[] | The ID of a stream. Multiple streams may be specified with multiple instances of the parameter.
$retrieval_mode = "retrieval_mode_example"; // string | An optional value that determines the values to return when values don't exist at the exact time specified. The default is 'Auto'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$sort_order = "sort_order_example"; // string | The order that the returned collection is sorted. The default is 'Ascending'.
$time_zone = "time_zone_example"; // string | The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used.

try {
    $result = $api_instance->streamSetGetRecordedAtTimesAdHoc($time, $web_id, $retrieval_mode, $selected_fields, $sort_order, $time_zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamSetApi->streamSetGetRecordedAtTimesAdHoc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **time** | [**string[]**](../Model/string.md)| The timestamp at which to retrieve a recorded value. Multiple timestamps may be specified with multiple instances of the parameter. |
 **web_id** | [**string[]**](../Model/string.md)| The ID of a stream. Multiple streams may be specified with multiple instances of the parameter. |
 **retrieval_mode** | **string**| An optional value that determines the values to return when values don&#39;t exist at the exact time specified. The default is &#39;Auto&#39;. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **sort_order** | **string**| The order that the returned collection is sorted. The default is &#39;Ascending&#39;. | [optional]
 **time_zone** | **string**| The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsStreamValues**](../Model/ItemsStreamValues.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamSetGetSummaries**
> \osisoft.pidevclub.piwebapi.models\ItemsStreamSummaries streamSetGetSummaries($web_id, $calculation_basis, $category_name, $end_time, $filter_expression, $name_filter, $sample_interval, $sample_type, $search_full_hierarchy, $selected_fields, $show_excluded, $show_hidden, $start_time, $summary_duration, $summary_type, $template_name, $time_type, $time_zone)

Returns summary values of the attributes for an element, event frame or attribute.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamSetApi();
$web_id = "web_id_example"; // string | The ID of an element, event frame or attribute, which is the base element or parent of all the stream attributes.
$calculation_basis = "calculation_basis_example"; // string | Specifies the method of evaluating the data over the time range. The default is 'TimeWeighted'.
$category_name = "category_name_example"; // string | Specify that included attributes must have this category. The default is no category filter.
$end_time = "end_time_example"; // string | An optional end time. The default is '*' for element attributes and points. For event frame attributes, the default is the event frame's end time, or '*' if that is not set. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order.
$filter_expression = "filter_expression_example"; // string | A string containing a filter expression. Expression variables are relative to the attribute. Use '.' to reference the containing attribute. The default is no filtering.
$name_filter = "name_filter_example"; // string | The name query string used for filtering attributes. The default is no filter.
$sample_interval = "sample_interval_example"; // string | A time span specifies how often the filter expression is evaluated when computing the summary for an interval, if the sampleType is 'Interval'.
$sample_type = "sample_type_example"; // string | A flag which specifies one or more summaries to compute for each interval over the time range. The default is 'ExpressionRecordedValues'.
$search_full_hierarchy = true; // bool | Specifies if the search should include attributes nested further than the immediate attributes of the searchRoot. The default is 'false'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$show_excluded = true; // bool | Specified if the search should include attributes with the Excluded property set. The default is 'false'.
$show_hidden = true; // bool | Specified if the search should include attributes with the Hidden property set. The default is 'false'.
$start_time = "start_time_example"; // string | An optional start time. The default is '*-1d' for element attributes and points. For event frame attributes, the default is the event frame's start time, or '*-1d' if that is not set.
$summary_duration = "summary_duration_example"; // string | The duration of each summary interval.
$summary_type = array("summary_type_example"); // string[] | Specifies the kinds of summaries to produce over the range. The default is 'Total'. Multiple summary types may be specified by using multiple instances of summaryType.
$template_name = "template_name_example"; // string | Specify that included attributes must be members of this template. The default is no template filter.
$time_type = "time_type_example"; // string | Specifies how to calculate the timestamp for each interval. The default is 'Auto'.
$time_zone = "time_zone_example"; // string | The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used.

try {
    $result = $api_instance->streamSetGetSummaries($web_id, $calculation_basis, $category_name, $end_time, $filter_expression, $name_filter, $sample_interval, $sample_type, $search_full_hierarchy, $selected_fields, $show_excluded, $show_hidden, $start_time, $summary_duration, $summary_type, $template_name, $time_type, $time_zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamSetApi->streamSetGetSummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of an element, event frame or attribute, which is the base element or parent of all the stream attributes. |
 **calculation_basis** | **string**| Specifies the method of evaluating the data over the time range. The default is &#39;TimeWeighted&#39;. | [optional]
 **category_name** | **string**| Specify that included attributes must have this category. The default is no category filter. | [optional]
 **end_time** | **string**| An optional end time. The default is &#39;*&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s end time, or &#39;*&#39; if that is not set. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order. | [optional]
 **filter_expression** | **string**| A string containing a filter expression. Expression variables are relative to the attribute. Use &#39;.&#39; to reference the containing attribute. The default is no filtering. | [optional]
 **name_filter** | **string**| The name query string used for filtering attributes. The default is no filter. | [optional]
 **sample_interval** | **string**| A time span specifies how often the filter expression is evaluated when computing the summary for an interval, if the sampleType is &#39;Interval&#39;. | [optional]
 **sample_type** | **string**| A flag which specifies one or more summaries to compute for each interval over the time range. The default is &#39;ExpressionRecordedValues&#39;. | [optional]
 **search_full_hierarchy** | **bool**| Specifies if the search should include attributes nested further than the immediate attributes of the searchRoot. The default is &#39;false&#39;. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **show_excluded** | **bool**| Specified if the search should include attributes with the Excluded property set. The default is &#39;false&#39;. | [optional]
 **show_hidden** | **bool**| Specified if the search should include attributes with the Hidden property set. The default is &#39;false&#39;. | [optional]
 **start_time** | **string**| An optional start time. The default is &#39;*-1d&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s start time, or &#39;*-1d&#39; if that is not set. | [optional]
 **summary_duration** | **string**| The duration of each summary interval. | [optional]
 **summary_type** | [**string[]**](../Model/string.md)| Specifies the kinds of summaries to produce over the range. The default is &#39;Total&#39;. Multiple summary types may be specified by using multiple instances of summaryType. | [optional]
 **template_name** | **string**| Specify that included attributes must be members of this template. The default is no template filter. | [optional]
 **time_type** | **string**| Specifies how to calculate the timestamp for each interval. The default is &#39;Auto&#39;. | [optional]
 **time_zone** | **string**| The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsStreamSummaries**](../Model/ItemsStreamSummaries.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamSetGetSummariesAdHoc**
> \osisoft.pidevclub.piwebapi.models\ItemsStreamSummaries streamSetGetSummariesAdHoc($web_id, $calculation_basis, $end_time, $filter_expression, $sample_interval, $sample_type, $selected_fields, $start_time, $summary_duration, $summary_type, $time_type, $time_zone)

Returns summary values of the specified streams.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamSetApi();
$web_id = array("web_id_example"); // string[] | The ID of a stream.  Multiple streams may be specified with multiple instances of the parameter.
$calculation_basis = "calculation_basis_example"; // string | Specifies the method of evaluating the data over the time range. The default is 'TimeWeighted'.
$end_time = "end_time_example"; // string | An optional end time. The default is '*'. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order.
$filter_expression = "filter_expression_example"; // string | A string containing a filter expression. Expression variables are relative to the attribute. Use '.' to reference the containing attribute. The default is no filtering.
$sample_interval = "sample_interval_example"; // string | A time span specifies how often the filter expression is evaluated when computing the summary for an interval, if the sampleType is 'Interval'.
$sample_type = "sample_type_example"; // string | A flag which specifies one or more summaries to compute for each interval over the time range. The default is 'ExpressionRecordedValues'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$start_time = "start_time_example"; // string | An optional start time. The default is '*-1d'.
$summary_duration = "summary_duration_example"; // string | The duration of each summary interval.
$summary_type = array("summary_type_example"); // string[] | Specifies the kinds of summaries to produce over the range. The default is 'Total'. Multiple summary types may be specified by using multiple instances of summaryType.
$time_type = "time_type_example"; // string | Specifies how to calculate the timestamp for each interval. The default is 'Auto'.
$time_zone = "time_zone_example"; // string | The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used.

try {
    $result = $api_instance->streamSetGetSummariesAdHoc($web_id, $calculation_basis, $end_time, $filter_expression, $sample_interval, $sample_type, $selected_fields, $start_time, $summary_duration, $summary_type, $time_type, $time_zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamSetApi->streamSetGetSummariesAdHoc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | [**string[]**](../Model/string.md)| The ID of a stream.  Multiple streams may be specified with multiple instances of the parameter. |
 **calculation_basis** | **string**| Specifies the method of evaluating the data over the time range. The default is &#39;TimeWeighted&#39;. | [optional]
 **end_time** | **string**| An optional end time. The default is &#39;*&#39;. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order. | [optional]
 **filter_expression** | **string**| A string containing a filter expression. Expression variables are relative to the attribute. Use &#39;.&#39; to reference the containing attribute. The default is no filtering. | [optional]
 **sample_interval** | **string**| A time span specifies how often the filter expression is evaluated when computing the summary for an interval, if the sampleType is &#39;Interval&#39;. | [optional]
 **sample_type** | **string**| A flag which specifies one or more summaries to compute for each interval over the time range. The default is &#39;ExpressionRecordedValues&#39;. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **start_time** | **string**| An optional start time. The default is &#39;*-1d&#39;. | [optional]
 **summary_duration** | **string**| The duration of each summary interval. | [optional]
 **summary_type** | [**string[]**](../Model/string.md)| Specifies the kinds of summaries to produce over the range. The default is &#39;Total&#39;. Multiple summary types may be specified by using multiple instances of summaryType. | [optional]
 **time_type** | **string**| Specifies how to calculate the timestamp for each interval. The default is &#39;Auto&#39;. | [optional]
 **time_zone** | **string**| The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsStreamSummaries**](../Model/ItemsStreamSummaries.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamSetGetValues**
> \osisoft.pidevclub.piwebapi.models\ItemsStreamValue streamSetGetValues($web_id, $category_name, $name_filter, $search_full_hierarchy, $selected_fields, $show_excluded, $show_hidden, $template_name, $time, $time_zone)

Returns values of the attributes for an Element, Event Frame or Attribute at the specified time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamSetApi();
$web_id = "web_id_example"; // string | The ID of an Element, Event Frame or Attribute, which is the base element or parent of all the stream attributes.
$category_name = "category_name_example"; // string | Specify that included attributes must have this category. The default is no category filter.
$name_filter = "name_filter_example"; // string | The name query string used for filtering attributes. The default is no filter.
$search_full_hierarchy = true; // bool | Specifies if the search should include attributes nested further than the immediate attributes of the searchRoot. The default is 'false'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$show_excluded = true; // bool | Specified if the search should include attributes with the Excluded property set. The default is 'false'.
$show_hidden = true; // bool | Specified if the search should include attributes with the Hidden property set. The default is 'false'.
$template_name = "template_name_example"; // string | Specify that included attributes must be members of this template. The default is no template filter.
$time = "time_example"; // string | An AF time string, which is used as the time context to get stream values if it is provided. By default, it is not specified, and the default time context of the AF object will be used.
$time_zone = "time_zone_example"; // string | The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used.

try {
    $result = $api_instance->streamSetGetValues($web_id, $category_name, $name_filter, $search_full_hierarchy, $selected_fields, $show_excluded, $show_hidden, $template_name, $time, $time_zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamSetApi->streamSetGetValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of an Element, Event Frame or Attribute, which is the base element or parent of all the stream attributes. |
 **category_name** | **string**| Specify that included attributes must have this category. The default is no category filter. | [optional]
 **name_filter** | **string**| The name query string used for filtering attributes. The default is no filter. | [optional]
 **search_full_hierarchy** | **bool**| Specifies if the search should include attributes nested further than the immediate attributes of the searchRoot. The default is &#39;false&#39;. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **show_excluded** | **bool**| Specified if the search should include attributes with the Excluded property set. The default is &#39;false&#39;. | [optional]
 **show_hidden** | **bool**| Specified if the search should include attributes with the Hidden property set. The default is &#39;false&#39;. | [optional]
 **template_name** | **string**| Specify that included attributes must be members of this template. The default is no template filter. | [optional]
 **time** | **string**| An AF time string, which is used as the time context to get stream values if it is provided. By default, it is not specified, and the default time context of the AF object will be used. | [optional]
 **time_zone** | **string**| The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsStreamValue**](../Model/ItemsStreamValue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamSetGetValuesAdHoc**
> \osisoft.pidevclub.piwebapi.models\ItemsStreamValue streamSetGetValuesAdHoc($web_id, $selected_fields, $time, $time_zone)

Returns values of the specified streams.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamSetApi();
$web_id = array("web_id_example"); // string[] | The ID of a stream.  Multiple streams may be specified with multiple instances of the parameter.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$time = "time_example"; // string | An AF time string, which is used as the time context to get stream values if it is provided. By default, it is not specified, and the default time context of the AF object will be used.
$time_zone = "time_zone_example"; // string | The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used.

try {
    $result = $api_instance->streamSetGetValuesAdHoc($web_id, $selected_fields, $time, $time_zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamSetApi->streamSetGetValuesAdHoc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | [**string[]**](../Model/string.md)| The ID of a stream.  Multiple streams may be specified with multiple instances of the parameter. |
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **time** | **string**| An AF time string, which is used as the time context to get stream values if it is provided. By default, it is not specified, and the default time context of the AF object will be used. | [optional]
 **time_zone** | **string**| The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsStreamValue**](../Model/ItemsStreamValue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamSetUpdateValue**
> \osisoft.pidevclub.piwebapi.models\ItemsSubstatus streamSetUpdateValue($web_id, $values, $buffer_option, $update_option)

Updates a single value for the specified streams.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamSetApi();
$web_id = "web_id_example"; // string | The ID of the parent element, event frame, or attribute. Attributes specified in the body must be descendants of the specified object.
$values = array(new StreamValue()); // \osisoft.pidevclub.piwebapi.models\StreamValue[] | The values to add or update.
$buffer_option = "buffer_option_example"; // string | The desired AFBufferOption. The default is 'BufferIfPossible'.
$update_option = "update_option_example"; // string | The desired AFUpdateOption. The default is 'Replace'.

try {
    $result = $api_instance->streamSetUpdateValue($web_id, $values, $buffer_option, $update_option);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamSetApi->streamSetUpdateValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the parent element, event frame, or attribute. Attributes specified in the body must be descendants of the specified object. |
 **values** | [**\osisoft.pidevclub.piwebapi.models\StreamValue[]**](../Model/StreamValue.md)| The values to add or update. |
 **buffer_option** | **string**| The desired AFBufferOption. The default is &#39;BufferIfPossible&#39;. | [optional]
 **update_option** | **string**| The desired AFUpdateOption. The default is &#39;Replace&#39;. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsSubstatus**](../Model/ItemsSubstatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamSetUpdateValueAdHoc**
> \osisoft.pidevclub.piwebapi.models\ItemsSubstatus streamSetUpdateValueAdHoc($values, $buffer_option, $update_option)

Updates a single value for the specified streams.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamSetApi();
$values = array(new StreamValues()); // \osisoft.pidevclub.piwebapi.models\StreamValues[] | The values to add or update.
$buffer_option = "buffer_option_example"; // string | The desired AFBufferOption. The default is 'BufferIfPossible'.
$update_option = "update_option_example"; // string | The desired AFUpdateOption. The default is 'Replace'.

try {
    $result = $api_instance->streamSetUpdateValueAdHoc($values, $buffer_option, $update_option);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamSetApi->streamSetUpdateValueAdHoc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **values** | [**\osisoft.pidevclub.piwebapi.models\StreamValues[]**](../Model/StreamValues.md)| The values to add or update. |
 **buffer_option** | **string**| The desired AFBufferOption. The default is &#39;BufferIfPossible&#39;. | [optional]
 **update_option** | **string**| The desired AFUpdateOption. The default is &#39;Replace&#39;. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsSubstatus**](../Model/ItemsSubstatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamSetUpdateValues**
> \osisoft.pidevclub.piwebapi.models\ItemsItemsSubstatus streamSetUpdateValues($web_id, $values, $buffer_option, $update_option)

Updates multiple values for the specified streams.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamSetApi();
$web_id = "web_id_example"; // string | The ID of the parent element, event frame, or attribute. Attributes specified in the body must be descendants of the specified object.
$values = array(new StreamValues()); // \osisoft.pidevclub.piwebapi.models\StreamValues[] | The values to add or update.
$buffer_option = "buffer_option_example"; // string | The desired AFBufferOption. The default is 'BufferIfPossible'.
$update_option = "update_option_example"; // string | The desired AFUpdateOption. The default is 'Replace'.

try {
    $result = $api_instance->streamSetUpdateValues($web_id, $values, $buffer_option, $update_option);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamSetApi->streamSetUpdateValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the parent element, event frame, or attribute. Attributes specified in the body must be descendants of the specified object. |
 **values** | [**\osisoft.pidevclub.piwebapi.models\StreamValues[]**](../Model/StreamValues.md)| The values to add or update. |
 **buffer_option** | **string**| The desired AFBufferOption. The default is &#39;BufferIfPossible&#39;. | [optional]
 **update_option** | **string**| The desired AFUpdateOption. The default is &#39;Replace&#39;. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsItemsSubstatus**](../Model/ItemsItemsSubstatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamSetUpdateValuesAdHoc**
> \osisoft.pidevclub.piwebapi.models\ItemsItemsSubstatus streamSetUpdateValuesAdHoc($values, $buffer_option, $update_option)

Updates multiple values for the specified streams.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamSetApi();
$values = array(new StreamValues()); // \osisoft.pidevclub.piwebapi.models\StreamValues[] | The values to add or update.
$buffer_option = "buffer_option_example"; // string | The desired AFBufferOption. The default is 'BufferIfPossible'.
$update_option = "update_option_example"; // string | The desired AFUpdateOption. The default is 'Replace'.

try {
    $result = $api_instance->streamSetUpdateValuesAdHoc($values, $buffer_option, $update_option);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamSetApi->streamSetUpdateValuesAdHoc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **values** | [**\osisoft.pidevclub.piwebapi.models\StreamValues[]**](../Model/StreamValues.md)| The values to add or update. |
 **buffer_option** | **string**| The desired AFBufferOption. The default is &#39;BufferIfPossible&#39;. | [optional]
 **update_option** | **string**| The desired AFUpdateOption. The default is &#39;Replace&#39;. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsItemsSubstatus**](../Model/ItemsItemsSubstatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

