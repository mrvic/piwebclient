# Swagger\Client\StreamApi

All URIs are relative to *https://proghackuc2017.osisoft.com/piwebapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**streamGetChannel**](StreamApi.md#streamGetChannel) | **GET** /streams/{webId}/channel | Opens a channel that will send messages about any value changes for the specified stream.
[**streamGetEnd**](StreamApi.md#streamGetEnd) | **GET** /streams/{webId}/end | Returns the end-of-stream value of the stream.
[**streamGetInterpolated**](StreamApi.md#streamGetInterpolated) | **GET** /streams/{webId}/interpolated | Retrieves interpolated values over the specified time range at the specified sampling interval.
[**streamGetInterpolatedAtTimes**](StreamApi.md#streamGetInterpolatedAtTimes) | **GET** /streams/{webId}/interpolatedattimes | Retrieves interpolated values over the specified time range at the specified sampling interval.
[**streamGetPlot**](StreamApi.md#streamGetPlot) | **GET** /streams/{webId}/plot | Retrieves values over the specified time range suitable for plotting over the number of intervals (typically represents pixels).
[**streamGetRecorded**](StreamApi.md#streamGetRecorded) | **GET** /streams/{webId}/recorded | Returns a list of compressed values for the requested time range from the source provider.
[**streamGetRecordedAtTime**](StreamApi.md#streamGetRecordedAtTime) | **GET** /streams/{webId}/recordedattime | Returns a single recorded value based on the passed time and retrieval mode from the stream.
[**streamGetRecordedAtTimes**](StreamApi.md#streamGetRecordedAtTimes) | **GET** /streams/{webId}/recordedattimes | Retrieves recorded values at the specified times.
[**streamGetSummary**](StreamApi.md#streamGetSummary) | **GET** /streams/{webId}/summary | Returns a summary over the specified time range for the stream.
[**streamGetValue**](StreamApi.md#streamGetValue) | **GET** /streams/{webId}/value | Returns the value of the stream at the specified time. By default, this is usually the current value.
[**streamUpdateValue**](StreamApi.md#streamUpdateValue) | **POST** /streams/{webId}/value | Updates a value for the specified stream.
[**streamUpdateValues**](StreamApi.md#streamUpdateValues) | **POST** /streams/{webId}/recorded | Updates multiple values for the specified stream.


# **streamGetChannel**
> streamGetChannel($web_id, $include_initial_values)

Opens a channel that will send messages about any value changes for the specified stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamApi();
$web_id = "web_id_example"; // string | The ID of the stream.
$include_initial_values = true; // bool | Specified if the channel should send a message with the current value of the stream after the connection is opened. The default is 'false'.

try {
    $api_instance->streamGetChannel($web_id, $include_initial_values);
} catch (Exception $e) {
    echo 'Exception when calling StreamApi->streamGetChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the stream. |
 **include_initial_values** | **bool**| Specified if the channel should send a message with the current value of the stream after the connection is opened. The default is &#39;false&#39;. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamGetEnd**
> \osisoft.pidevclub.piwebapi.models\TimedValue streamGetEnd($web_id, $desired_units, $selected_fields)

Returns the end-of-stream value of the stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamApi();
$web_id = "web_id_example"; // string | The ID of the stream.
$desired_units = "desired_units_example"; // string | The name or abbreviation of the desired units of measure for the returned value, as found in the UOM database associated with the attribute. If not specified for an attribute, the attribute's default unit of measure is used. If the underlying stream is a point, this value may not be specified, as points are not associated with a unit of measure.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.

try {
    $result = $api_instance->streamGetEnd($web_id, $desired_units, $selected_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamApi->streamGetEnd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the stream. |
 **desired_units** | **string**| The name or abbreviation of the desired units of measure for the returned value, as found in the UOM database associated with the attribute. If not specified for an attribute, the attribute&#39;s default unit of measure is used. If the underlying stream is a point, this value may not be specified, as points are not associated with a unit of measure. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\TimedValue**](../Model/TimedValue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamGetInterpolated**
> \osisoft.pidevclub.piwebapi.models\TimedValues streamGetInterpolated($web_id, $desired_units, $end_time, $filter_expression, $include_filtered_values, $interval, $selected_fields, $start_time, $time_zone)

Retrieves interpolated values over the specified time range at the specified sampling interval.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamApi();
$web_id = "web_id_example"; // string | The ID of the stream.
$desired_units = "desired_units_example"; // string | The name or abbreviation of the desired units of measure for the returned value, as found in the UOM database associated with the attribute. If not specified for an attribute, the attribute's default unit of measure is used. If the underlying stream is a point, this value may not be specified, as points are not associated with a unit of measure.
$end_time = "end_time_example"; // string | An optional end time. The default is '*' for element attributes and points. For event frame attributes, the default is the event frame's end time, or '*' if that is not set. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order.
$filter_expression = "filter_expression_example"; // string | An optional string containing a filter expression. Expression variables are relative to the data point. Use '.' to reference the containing attribute. If the attribute does not support filtering, the filter will be ignored. The default is no filtering.
$include_filtered_values = true; // bool | Specify 'true' to indicate that values which fail the filter criteria are present in the returned data at the times where they occurred with a value set to a 'Filtered' enumeration value with bad status. Repeated consecutive failures are omitted.
$interval = "interval_example"; // string | The sampling interval, in AFTimeSpan format.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$start_time = "start_time_example"; // string | An optional start time. The default is '*-1d' for element attributes and points. For event frame attributes, the default is the event frame's start time, or '*-1d' if that is not set.
$time_zone = "time_zone_example"; // string | The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used.

try {
    $result = $api_instance->streamGetInterpolated($web_id, $desired_units, $end_time, $filter_expression, $include_filtered_values, $interval, $selected_fields, $start_time, $time_zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamApi->streamGetInterpolated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the stream. |
 **desired_units** | **string**| The name or abbreviation of the desired units of measure for the returned value, as found in the UOM database associated with the attribute. If not specified for an attribute, the attribute&#39;s default unit of measure is used. If the underlying stream is a point, this value may not be specified, as points are not associated with a unit of measure. | [optional]
 **end_time** | **string**| An optional end time. The default is &#39;*&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s end time, or &#39;*&#39; if that is not set. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order. | [optional]
 **filter_expression** | **string**| An optional string containing a filter expression. Expression variables are relative to the data point. Use &#39;.&#39; to reference the containing attribute. If the attribute does not support filtering, the filter will be ignored. The default is no filtering. | [optional]
 **include_filtered_values** | **bool**| Specify &#39;true&#39; to indicate that values which fail the filter criteria are present in the returned data at the times where they occurred with a value set to a &#39;Filtered&#39; enumeration value with bad status. Repeated consecutive failures are omitted. | [optional]
 **interval** | **string**| The sampling interval, in AFTimeSpan format. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **start_time** | **string**| An optional start time. The default is &#39;*-1d&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s start time, or &#39;*-1d&#39; if that is not set. | [optional]
 **time_zone** | **string**| The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\TimedValues**](../Model/TimedValues.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamGetInterpolatedAtTimes**
> \osisoft.pidevclub.piwebapi.models\TimedValues streamGetInterpolatedAtTimes($web_id, $desired_units, $filter_expression, $include_filtered_values, $selected_fields, $sort_order, $time, $time_zone)

Retrieves interpolated values over the specified time range at the specified sampling interval.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamApi();
$web_id = "web_id_example"; // string | The ID of the stream.
$desired_units = "desired_units_example"; // string | The name or abbreviation of the desired units of measure for the returned value, as found in the UOM database associated with the attribute. If not specified for an attribute, the attribute's default unit of measure is used. If the underlying stream is a point, this value may not be specified, as points are not associated with a unit of measure.
$filter_expression = "filter_expression_example"; // string | An optional string containing a filter expression. Expression variables are relative to the data point. Use '.' to reference the containing attribute. If the attribute does not support filtering, the filter will be ignored. The default is no filtering.
$include_filtered_values = true; // bool | Specify 'true' to indicate that values which fail the filter criteria are present in the returned data at the times where they occurred with a value set to a 'Filtered' enumeration value with bad status. Repeated consecutive failures are omitted.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$sort_order = "sort_order_example"; // string | The order that the returned collection is sorted. The default is 'Ascending'.
$time = array("time_example"); // string[] | The timestamp at which to retrieve an interpolated value. Multiple timestamps may be specified with multiple instances of the parameter.
$time_zone = "time_zone_example"; // string | The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used.

try {
    $result = $api_instance->streamGetInterpolatedAtTimes($web_id, $desired_units, $filter_expression, $include_filtered_values, $selected_fields, $sort_order, $time, $time_zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamApi->streamGetInterpolatedAtTimes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the stream. |
 **desired_units** | **string**| The name or abbreviation of the desired units of measure for the returned value, as found in the UOM database associated with the attribute. If not specified for an attribute, the attribute&#39;s default unit of measure is used. If the underlying stream is a point, this value may not be specified, as points are not associated with a unit of measure. | [optional]
 **filter_expression** | **string**| An optional string containing a filter expression. Expression variables are relative to the data point. Use &#39;.&#39; to reference the containing attribute. If the attribute does not support filtering, the filter will be ignored. The default is no filtering. | [optional]
 **include_filtered_values** | **bool**| Specify &#39;true&#39; to indicate that values which fail the filter criteria are present in the returned data at the times where they occurred with a value set to a &#39;Filtered&#39; enumeration value with bad status. Repeated consecutive failures are omitted. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **sort_order** | **string**| The order that the returned collection is sorted. The default is &#39;Ascending&#39;. | [optional]
 **time** | [**string[]**](../Model/string.md)| The timestamp at which to retrieve an interpolated value. Multiple timestamps may be specified with multiple instances of the parameter. | [optional]
 **time_zone** | **string**| The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\TimedValues**](../Model/TimedValues.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamGetPlot**
> \osisoft.pidevclub.piwebapi.models\TimedValues streamGetPlot($web_id, $desired_units, $end_time, $intervals, $selected_fields, $start_time, $time_zone)

Retrieves values over the specified time range suitable for plotting over the number of intervals (typically represents pixels).

For each interval, the data available is examined and significant values are returned. Each interval can produce up to 5 values if they are unique, the first value in the interval, the last value, the highest value, the lowest value and at most one exceptional point (bad status or digital state).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamApi();
$web_id = "web_id_example"; // string | The ID of the stream.
$desired_units = "desired_units_example"; // string | The name or abbreviation of the desired units of measure for the returned value, as found in the UOM database associated with the attribute. If not specified for an attribute, the attribute's default unit of measure is used. If the underlying stream is a point, this value may not be specified, as points are not associated with a unit of measure.
$end_time = "end_time_example"; // string | An optional end time. The default is '*' for element attributes and points. For event frame attributes, the default is the event frame's end time, or '*' if that is not set. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order.
$intervals = 56; // int | The number of intervals to plot over. Typically, this would be the number of horizontal pixels in the trend. The default is '24'. For each interval, the data available is examined and significant values are returned. Each interval can produce up to 5 values if they are unique, the first value in the interval, the last value, the highest value, the lowest value and at most one exceptional point (bad status or digital state).
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$start_time = "start_time_example"; // string | An optional start time. The default is '*-1d' for element attributes and points. For event frame attributes, the default is the event frame's start time, or '*-1d' if that is not set.
$time_zone = "time_zone_example"; // string | The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used.

try {
    $result = $api_instance->streamGetPlot($web_id, $desired_units, $end_time, $intervals, $selected_fields, $start_time, $time_zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamApi->streamGetPlot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the stream. |
 **desired_units** | **string**| The name or abbreviation of the desired units of measure for the returned value, as found in the UOM database associated with the attribute. If not specified for an attribute, the attribute&#39;s default unit of measure is used. If the underlying stream is a point, this value may not be specified, as points are not associated with a unit of measure. | [optional]
 **end_time** | **string**| An optional end time. The default is &#39;*&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s end time, or &#39;*&#39; if that is not set. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order. | [optional]
 **intervals** | **int**| The number of intervals to plot over. Typically, this would be the number of horizontal pixels in the trend. The default is &#39;24&#39;. For each interval, the data available is examined and significant values are returned. Each interval can produce up to 5 values if they are unique, the first value in the interval, the last value, the highest value, the lowest value and at most one exceptional point (bad status or digital state). | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **start_time** | **string**| An optional start time. The default is &#39;*-1d&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s start time, or &#39;*-1d&#39; if that is not set. | [optional]
 **time_zone** | **string**| The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\TimedValues**](../Model/TimedValues.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamGetRecorded**
> \osisoft.pidevclub.piwebapi.models\TimedValues streamGetRecorded($web_id, $boundary_type, $desired_units, $end_time, $filter_expression, $include_filtered_values, $max_count, $selected_fields, $start_time, $time_zone)

Returns a list of compressed values for the requested time range from the source provider.

Returned times are affected by the specified boundary type. If no values are found for the time range and conditions specified then the HTTP response will be success, with a body containing an empty array of Items. When specifying true for the includeFilteredValues parameter, consecutive filtered events are not returned. The first value that would be filtered out is returned with its time and the enumeration value \"Filtered\". The next value in the collection will be the next compressed value in the specified direction that passes the filter criteria - if any. When both boundaryType and a filterExpression are specified, the events returned for the boundary condition specified are passed through the filter. If the includeFilteredValues parameter is true, the boundary values will be reported at the proper timestamps with the enumeration value \"Filtered\" when the filter conditions are not met at the boundary time. If the includeFilteredValues parameter is false for this case, no event is returned for the boundary time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamApi();
$web_id = "web_id_example"; // string | The ID of the stream.
$boundary_type = "boundary_type_example"; // string | An optional value that determines how the times and values of the returned end points are determined. The default is 'Inside'.
$desired_units = "desired_units_example"; // string | The name or abbreviation of the desired units of measure for the returned value, as found in the UOM database associated with the attribute. If not specified for an attribute, the attribute's default unit of measure is used. If the underlying stream is a point, this value may not be specified, as points are not associated with a unit of measure.
$end_time = "end_time_example"; // string | An optional end time. The default is '*' for element attributes and points. For event frame attributes, the default is the event frame's end time, or '*' if that is not set. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order.
$filter_expression = "filter_expression_example"; // string | An optional string containing a filter expression. Expression variables are relative to the data point. Use '.' to reference the containing attribute. The default is no filtering.
$include_filtered_values = true; // bool | Specify 'true' to indicate that values which fail the filter criteria are present in the returned data at the times where they occurred with a value set to a 'Filtered' enumeration value with bad status. Repeated consecutive failures are omitted.
$max_count = 56; // int | The maximum number of values to be returned. The default is 1000.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$start_time = "start_time_example"; // string | An optional start time. The default is '*-1d' for element attributes and points. For event frame attributes, the default is the event frame's start time, or '*-1d' if that is not set.
$time_zone = "time_zone_example"; // string | The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used.

try {
    $result = $api_instance->streamGetRecorded($web_id, $boundary_type, $desired_units, $end_time, $filter_expression, $include_filtered_values, $max_count, $selected_fields, $start_time, $time_zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamApi->streamGetRecorded: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the stream. |
 **boundary_type** | **string**| An optional value that determines how the times and values of the returned end points are determined. The default is &#39;Inside&#39;. | [optional]
 **desired_units** | **string**| The name or abbreviation of the desired units of measure for the returned value, as found in the UOM database associated with the attribute. If not specified for an attribute, the attribute&#39;s default unit of measure is used. If the underlying stream is a point, this value may not be specified, as points are not associated with a unit of measure. | [optional]
 **end_time** | **string**| An optional end time. The default is &#39;*&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s end time, or &#39;*&#39; if that is not set. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order. | [optional]
 **filter_expression** | **string**| An optional string containing a filter expression. Expression variables are relative to the data point. Use &#39;.&#39; to reference the containing attribute. The default is no filtering. | [optional]
 **include_filtered_values** | **bool**| Specify &#39;true&#39; to indicate that values which fail the filter criteria are present in the returned data at the times where they occurred with a value set to a &#39;Filtered&#39; enumeration value with bad status. Repeated consecutive failures are omitted. | [optional]
 **max_count** | **int**| The maximum number of values to be returned. The default is 1000. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **start_time** | **string**| An optional start time. The default is &#39;*-1d&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s start time, or &#39;*-1d&#39; if that is not set. | [optional]
 **time_zone** | **string**| The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\TimedValues**](../Model/TimedValues.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamGetRecordedAtTime**
> \osisoft.pidevclub.piwebapi.models\TimedValue streamGetRecordedAtTime($web_id, $time, $desired_units, $retrieval_mode, $selected_fields, $time_zone)

Returns a single recorded value based on the passed time and retrieval mode from the stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamApi();
$web_id = "web_id_example"; // string | The ID of the stream.
$time = "time_example"; // string | The timestamp at which the value is desired.
$desired_units = "desired_units_example"; // string | The name or abbreviation of the desired units of measure for the returned value, as found in the UOM database associated with the attribute. If not specified for an attribute, the attribute's default unit of measure is used. If the underlying stream is a point, this value may not be specified, as points are not associated with a unit of measure.
$retrieval_mode = "retrieval_mode_example"; // string | An optional value that determines the value to return when a value doesn't exist at the exact time specified. The default is 'Auto'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$time_zone = "time_zone_example"; // string | The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used.

try {
    $result = $api_instance->streamGetRecordedAtTime($web_id, $time, $desired_units, $retrieval_mode, $selected_fields, $time_zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamApi->streamGetRecordedAtTime: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the stream. |
 **time** | **string**| The timestamp at which the value is desired. |
 **desired_units** | **string**| The name or abbreviation of the desired units of measure for the returned value, as found in the UOM database associated with the attribute. If not specified for an attribute, the attribute&#39;s default unit of measure is used. If the underlying stream is a point, this value may not be specified, as points are not associated with a unit of measure. | [optional]
 **retrieval_mode** | **string**| An optional value that determines the value to return when a value doesn&#39;t exist at the exact time specified. The default is &#39;Auto&#39;. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **time_zone** | **string**| The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\TimedValue**](../Model/TimedValue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamGetRecordedAtTimes**
> \osisoft.pidevclub.piwebapi.models\TimedValues streamGetRecordedAtTimes($web_id, $desired_units, $retrieval_mode, $selected_fields, $sort_order, $time, $time_zone)

Retrieves recorded values at the specified times.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamApi();
$web_id = "web_id_example"; // string | The ID of the stream.
$desired_units = "desired_units_example"; // string | The name or abbreviation of the desired units of measure for the returned value, as found in the UOM database associated with the attribute. If not specified for an attribute, the attribute's default unit of measure is used. If the underlying stream is a point, this value may not be specified, as points are not associated with a unit of measure.
$retrieval_mode = "retrieval_mode_example"; // string | An optional value that determines the value to return when a value doesn't exist at the exact time specified. The default is 'Auto'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$sort_order = "sort_order_example"; // string | The order that the returned collection is sorted. The default is 'Ascending'.
$time = array("time_example"); // string[] | The timestamp at which to retrieve a recorded value. Multiple timestamps may be specified with multiple instances of the parameter.
$time_zone = "time_zone_example"; // string | The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used.

try {
    $result = $api_instance->streamGetRecordedAtTimes($web_id, $desired_units, $retrieval_mode, $selected_fields, $sort_order, $time, $time_zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamApi->streamGetRecordedAtTimes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the stream. |
 **desired_units** | **string**| The name or abbreviation of the desired units of measure for the returned value, as found in the UOM database associated with the attribute. If not specified for an attribute, the attribute&#39;s default unit of measure is used. If the underlying stream is a point, this value may not be specified, as points are not associated with a unit of measure. | [optional]
 **retrieval_mode** | **string**| An optional value that determines the value to return when a value doesn&#39;t exist at the exact time specified. The default is &#39;Auto&#39;. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **sort_order** | **string**| The order that the returned collection is sorted. The default is &#39;Ascending&#39;. | [optional]
 **time** | [**string[]**](../Model/string.md)| The timestamp at which to retrieve a recorded value. Multiple timestamps may be specified with multiple instances of the parameter. | [optional]
 **time_zone** | **string**| The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\TimedValues**](../Model/TimedValues.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamGetSummary**
> \osisoft.pidevclub.piwebapi.models\ItemsSummaryValue streamGetSummary($web_id, $calculation_basis, $end_time, $filter_expression, $sample_interval, $sample_type, $selected_fields, $start_time, $summary_duration, $summary_type, $time_type, $time_zone)

Returns a summary over the specified time range for the stream.

Count is the only summary type supported on non-numeric streams. Requesting a summary for any other type will generate an error. Time-weighted totals are computed by integrating the rate tag values over the requested time range. If some of the data are bad in the time range, the calculated total is divided by the fraction of the time period for which there are good values. This approach is equivalent to assuming that during the period of bad data, the tag takes on the average values for the entire calculation time range. The PercentGood summary may be used to determine if the calculation results are suitable for the application's purposes. For time-weighted totals, if the time unit rate of the stream cannot be determined, then the value will be totaled assuming a unit of \"per day\" and no unit of measure will be assigned to the value. If the measured time component of the tag is not based on a day, the user of the data must convert the totalized value to the correct units.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamApi();
$web_id = "web_id_example"; // string | The ID of the stream.
$calculation_basis = "calculation_basis_example"; // string | Specifies the method of evaluating the data over the time range. The default is 'TimeWeighted'.
$end_time = "end_time_example"; // string | An optional end time. The default is '*' for element attributes and points. For event frame attributes, the default is the event frame's end time, or '*' if that is not set. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order.
$filter_expression = "filter_expression_example"; // string | A string containing a filter expression. Expression variables are relative to the attribute. Use '.' to reference the containing attribute.
$sample_interval = "sample_interval_example"; // string | When the sampleType is Interval, sampleInterval specifies how often the filter expression is evaluated when computing the summary for an interval.
$sample_type = "sample_type_example"; // string | Defines the evaluation of an expression over a time range. The default is 'ExpressionRecordedValues'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$start_time = "start_time_example"; // string | An optional start time. The default is '*-1d' for element attributes and points. For event frame attributes, the default is the event frame's start time, or '*-1d' if that is not set.
$summary_duration = "summary_duration_example"; // string | The duration of each summary interval. If specified in hours, minutes, seconds, or milliseconds, the summary durations will be evenly spaced UTC time intervals. Longer interval types are interpreted using wall clock rules and are time zone dependent.
$summary_type = array("summary_type_example"); // string[] | Specifies the kinds of summaries to produce over the range. The default is 'Total'. Multiple summary types may be specified by using multiple instances of summaryType.
$time_type = "time_type_example"; // string | Specifies how to calculate the timestamp for each interval. The default is 'Auto'.
$time_zone = "time_zone_example"; // string | The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used.

try {
    $result = $api_instance->streamGetSummary($web_id, $calculation_basis, $end_time, $filter_expression, $sample_interval, $sample_type, $selected_fields, $start_time, $summary_duration, $summary_type, $time_type, $time_zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamApi->streamGetSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the stream. |
 **calculation_basis** | **string**| Specifies the method of evaluating the data over the time range. The default is &#39;TimeWeighted&#39;. | [optional]
 **end_time** | **string**| An optional end time. The default is &#39;*&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s end time, or &#39;*&#39; if that is not set. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order. | [optional]
 **filter_expression** | **string**| A string containing a filter expression. Expression variables are relative to the attribute. Use &#39;.&#39; to reference the containing attribute. | [optional]
 **sample_interval** | **string**| When the sampleType is Interval, sampleInterval specifies how often the filter expression is evaluated when computing the summary for an interval. | [optional]
 **sample_type** | **string**| Defines the evaluation of an expression over a time range. The default is &#39;ExpressionRecordedValues&#39;. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **start_time** | **string**| An optional start time. The default is &#39;*-1d&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s start time, or &#39;*-1d&#39; if that is not set. | [optional]
 **summary_duration** | **string**| The duration of each summary interval. If specified in hours, minutes, seconds, or milliseconds, the summary durations will be evenly spaced UTC time intervals. Longer interval types are interpreted using wall clock rules and are time zone dependent. | [optional]
 **summary_type** | [**string[]**](../Model/string.md)| Specifies the kinds of summaries to produce over the range. The default is &#39;Total&#39;. Multiple summary types may be specified by using multiple instances of summaryType. | [optional]
 **time_type** | **string**| Specifies how to calculate the timestamp for each interval. The default is &#39;Auto&#39;. | [optional]
 **time_zone** | **string**| The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsSummaryValue**](../Model/ItemsSummaryValue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamGetValue**
> \osisoft.pidevclub.piwebapi.models\TimedValue streamGetValue($web_id, $desired_units, $selected_fields, $time, $time_zone)

Returns the value of the stream at the specified time. By default, this is usually the current value.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamApi();
$web_id = "web_id_example"; // string | The ID of the stream.
$desired_units = "desired_units_example"; // string | The name or abbreviation of the desired units of measure for the returned value, as found in the UOM database associated with the attribute. If not specified for an attribute, the attribute's default unit of measure is used. If the underlying stream is a point, this value may not be specified, as points are not associated with a unit of measure.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$time = "time_example"; // string | An optional time. The default time context is determined from the owning object - for example, the time range of the event frame or transfer which holds this attribute. Otherwise, the implementation of the Data Reference determines the meaning of no context. For Points or simply configured PI Point Data References, this means the snapshot value of the PI Point on the Data Server.
$time_zone = "time_zone_example"; // string | The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used.

try {
    $result = $api_instance->streamGetValue($web_id, $desired_units, $selected_fields, $time, $time_zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamApi->streamGetValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the stream. |
 **desired_units** | **string**| The name or abbreviation of the desired units of measure for the returned value, as found in the UOM database associated with the attribute. If not specified for an attribute, the attribute&#39;s default unit of measure is used. If the underlying stream is a point, this value may not be specified, as points are not associated with a unit of measure. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **time** | **string**| An optional time. The default time context is determined from the owning object - for example, the time range of the event frame or transfer which holds this attribute. Otherwise, the implementation of the Data Reference determines the meaning of no context. For Points or simply configured PI Point Data References, this means the snapshot value of the PI Point on the Data Server. | [optional]
 **time_zone** | **string**| The time zone in which the time string will be interpreted. This parameter will be ignored if a time zone is specified in the time string. If no time zone is specified in either places, the PI Web API server time zone will be used. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\TimedValue**](../Model/TimedValue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamUpdateValue**
> streamUpdateValue($web_id, $value, $buffer_option, $update_option)

Updates a value for the specified stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamApi();
$web_id = "web_id_example"; // string | The ID of the stream.
$value = new \osisoft.pidevclub.piwebapi.models\TimedValue(); // \osisoft.pidevclub.piwebapi.models\TimedValue | The value to add or update.
$buffer_option = "buffer_option_example"; // string | The desired AFBufferOption. The default is 'BufferIfPossible'.
$update_option = "update_option_example"; // string | The desired AFUpdateOption. The default is 'Replace'. This parameter is ignored if the attribute is a configuration item.

try {
    $api_instance->streamUpdateValue($web_id, $value, $buffer_option, $update_option);
} catch (Exception $e) {
    echo 'Exception when calling StreamApi->streamUpdateValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the stream. |
 **value** | [**\osisoft.pidevclub.piwebapi.models\TimedValue**](../Model/\osisoft.pidevclub.piwebapi.models\TimedValue.md)| The value to add or update. |
 **buffer_option** | **string**| The desired AFBufferOption. The default is &#39;BufferIfPossible&#39;. | [optional]
 **update_option** | **string**| The desired AFUpdateOption. The default is &#39;Replace&#39;. This parameter is ignored if the attribute is a configuration item. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamUpdateValues**
> \osisoft.pidevclub.piwebapi.models\ItemsSubstatus streamUpdateValues($web_id, $values, $buffer_option, $update_option)

Updates multiple values for the specified stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StreamApi();
$web_id = "web_id_example"; // string | The ID of the stream.
$values = array(new TimedValue()); // \osisoft.pidevclub.piwebapi.models\TimedValue[] | The values to add or update.
$buffer_option = "buffer_option_example"; // string | The desired AFBufferOption. The default is 'BufferIfPossible'.
$update_option = "update_option_example"; // string | The desired AFUpdateOption. The default is 'Replace'.

try {
    $result = $api_instance->streamUpdateValues($web_id, $values, $buffer_option, $update_option);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamApi->streamUpdateValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_id** | **string**| The ID of the stream. |
 **values** | [**\osisoft.pidevclub.piwebapi.models\TimedValue[]**](../Model/TimedValue.md)| The values to add or update. |
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

