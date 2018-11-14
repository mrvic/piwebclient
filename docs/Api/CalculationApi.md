# Swagger\Client\CalculationApi

All URIs are relative to *https://proghackuc2017.osisoft.com/piwebapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**calculationGetAtIntervals**](CalculationApi.md#calculationGetAtIntervals) | **GET** /calculation/intervals | Returns results of evaluating the expression over the time range from the start time to the end time at a defined interval.
[**calculationGetAtRecorded**](CalculationApi.md#calculationGetAtRecorded) | **GET** /calculation/recorded | Returns the result of evaluating the expression at each point in time over the time range from the start time to the end time where a recorded value exists for a member of the expression.
[**calculationGetAtTimes**](CalculationApi.md#calculationGetAtTimes) | **GET** /calculation/times | Returns the result of evaluating the expression at the specified timestamps.
[**calculationGetSummary**](CalculationApi.md#calculationGetSummary) | **GET** /calculation/summary | Returns the result of evaluating the expression over the time range from the start time to the end time. The time range is first divided into a number of summary intervals. Then the calculation is performed for the specified summaries over each interval.


# **calculationGetAtIntervals**
> \osisoft.pidevclub.piwebapi.models\TimedValues calculationGetAtIntervals($end_time, $expression, $sample_interval, $selected_fields, $start_time, $web_id)

Returns results of evaluating the expression over the time range from the start time to the end time at a defined interval.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CalculationApi();
$end_time = "end_time_example"; // string | An optional end time. The default is '*' for element attributes and points. For event frame attributes, the default is the event frame's end time, or '*' if that is not set. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order.
$expression = "expression_example"; // string | A string containing the expression to be evaluated. The syntax for the expression generally follows the Performance Equation syntax as described in the PI Server documentation, with the exception that expressions which target AF objects use attribute names in place of tag names in the equation.
$sample_interval = "sample_interval_example"; // string | A time span specifies how often the filter expression is evaluated when computing the summary for an interval.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$start_time = "start_time_example"; // string | An optional start time. The default is '*-1d' for element attributes and points. For event frame attributes, the default is the event frame's start time, or '*-1d' if that is not set.
$web_id = "web_id_example"; // string | The ID of the target object of the expression. A target object can be a Data Server, a database, an element, an event frame or an attribute. References to attributes or points are based on the target. If this parameter is not provided, the target object is set to null.

try {
    $result = $api_instance->calculationGetAtIntervals($end_time, $expression, $sample_interval, $selected_fields, $start_time, $web_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalculationApi->calculationGetAtIntervals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **end_time** | **string**| An optional end time. The default is &#39;*&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s end time, or &#39;*&#39; if that is not set. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order. | [optional]
 **expression** | **string**| A string containing the expression to be evaluated. The syntax for the expression generally follows the Performance Equation syntax as described in the PI Server documentation, with the exception that expressions which target AF objects use attribute names in place of tag names in the equation. | [optional]
 **sample_interval** | **string**| A time span specifies how often the filter expression is evaluated when computing the summary for an interval. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **start_time** | **string**| An optional start time. The default is &#39;*-1d&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s start time, or &#39;*-1d&#39; if that is not set. | [optional]
 **web_id** | **string**| The ID of the target object of the expression. A target object can be a Data Server, a database, an element, an event frame or an attribute. References to attributes or points are based on the target. If this parameter is not provided, the target object is set to null. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\TimedValues**](../Model/TimedValues.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **calculationGetAtRecorded**
> \osisoft.pidevclub.piwebapi.models\TimedValues calculationGetAtRecorded($end_time, $expression, $selected_fields, $start_time, $web_id)

Returns the result of evaluating the expression at each point in time over the time range from the start time to the end time where a recorded value exists for a member of the expression.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CalculationApi();
$end_time = "end_time_example"; // string | An optional end time. The default is '*' for element attributes and points. For event frame attributes, the default is the event frame's end time, or '*' if that is not set. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order.
$expression = "expression_example"; // string | A string containing the expression to be evaluated. The syntax for the expression generally follows the Performance Equation syntax as described in the PI Server documentation, with the exception that expressions which target AF objects use attribute names in place of tag names in the equation.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$start_time = "start_time_example"; // string | An optional start time. The default is '*-1d' for element attributes and points. For event frame attributes, the default is the event frame's start time, or '*-1d' if that is not set.
$web_id = "web_id_example"; // string | The ID of the target object of the expression. A target object can be a Data Server, a database, an element, an event frame or an attribute. References to attributes or points are based on the target. If this parameter is not provided, the target object is set to null.

try {
    $result = $api_instance->calculationGetAtRecorded($end_time, $expression, $selected_fields, $start_time, $web_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalculationApi->calculationGetAtRecorded: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **end_time** | **string**| An optional end time. The default is &#39;*&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s end time, or &#39;*&#39; if that is not set. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order. | [optional]
 **expression** | **string**| A string containing the expression to be evaluated. The syntax for the expression generally follows the Performance Equation syntax as described in the PI Server documentation, with the exception that expressions which target AF objects use attribute names in place of tag names in the equation. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **start_time** | **string**| An optional start time. The default is &#39;*-1d&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s start time, or &#39;*-1d&#39; if that is not set. | [optional]
 **web_id** | **string**| The ID of the target object of the expression. A target object can be a Data Server, a database, an element, an event frame or an attribute. References to attributes or points are based on the target. If this parameter is not provided, the target object is set to null. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\TimedValues**](../Model/TimedValues.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **calculationGetAtTimes**
> \osisoft.pidevclub.piwebapi.models\TimedValues calculationGetAtTimes($expression, $selected_fields, $sort_order, $time, $web_id)

Returns the result of evaluating the expression at the specified timestamps.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CalculationApi();
$expression = "expression_example"; // string | A string containing the expression to be evaluated. The syntax for the expression generally follows the Performance Equation syntax as described in the PI Server documentation, with the exception that expressions which target AF objects use attribute names in place of tag names in the equation.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$sort_order = "sort_order_example"; // string | The order that the returned collection is sorted. The default is 'Ascending'.
$time = array("time_example"); // string[] | A list of timestamps at which to calculate the expression.
$web_id = "web_id_example"; // string | The ID of the target object of the expression. A target object can be a Data Server, a database, an element, an event frame or an attribute. References to attributes or points are based on the target. If this parameter is not provided, the target object is set to null.

try {
    $result = $api_instance->calculationGetAtTimes($expression, $selected_fields, $sort_order, $time, $web_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalculationApi->calculationGetAtTimes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expression** | **string**| A string containing the expression to be evaluated. The syntax for the expression generally follows the Performance Equation syntax as described in the PI Server documentation, with the exception that expressions which target AF objects use attribute names in place of tag names in the equation. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **sort_order** | **string**| The order that the returned collection is sorted. The default is &#39;Ascending&#39;. | [optional]
 **time** | [**string[]**](../Model/string.md)| A list of timestamps at which to calculate the expression. | [optional]
 **web_id** | **string**| The ID of the target object of the expression. A target object can be a Data Server, a database, an element, an event frame or an attribute. References to attributes or points are based on the target. If this parameter is not provided, the target object is set to null. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\TimedValues**](../Model/TimedValues.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **calculationGetSummary**
> \osisoft.pidevclub.piwebapi.models\ItemsSummaryValue calculationGetSummary($calculation_basis, $end_time, $expression, $sample_interval, $sample_type, $selected_fields, $start_time, $summary_duration, $summary_type, $time_type, $web_id)

Returns the result of evaluating the expression over the time range from the start time to the end time. The time range is first divided into a number of summary intervals. Then the calculation is performed for the specified summaries over each interval.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CalculationApi();
$calculation_basis = "calculation_basis_example"; // string | Specifies the method of evaluating the data over the time range. The default is 'TimeWeighted'.
$end_time = "end_time_example"; // string | An optional end time. The default is '*' for element attributes and points. For event frame attributes, the default is the event frame's end time, or '*' if that is not set. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order.
$expression = "expression_example"; // string | A string containing the expression to be evaluated. The syntax for the expression generally follows the Performance Equation syntax as described in the PI Server documentation, with the exception that expressions which target AF objects use attribute names in place of tag names in the equation.
$sample_interval = "sample_interval_example"; // string | A time span specifies how often the filter expression is evaluated when computing the summary for an interval, if the sampleType is 'Interval'.
$sample_type = "sample_type_example"; // string | A flag which specifies one or more summaries to compute for each interval over the time range. The default is 'ExpressionRecordedValues'.
$selected_fields = "selected_fields_example"; // string | List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned.
$start_time = "start_time_example"; // string | An optional start time. The default is '*-1d' for element attributes and points. For event frame attributes, the default is the event frame's start time, or '*-1d' if that is not set.
$summary_duration = "summary_duration_example"; // string | The duration of each summary interval.
$summary_type = array("summary_type_example"); // string[] | Specifies the kinds of summaries to produce over the range. The default is 'Total'. Multiple summary types may be specified by using multiple instances of summaryType.
$time_type = "time_type_example"; // string | Specifies how to calculate the timestamp for each interval. The default is 'Auto'.
$web_id = "web_id_example"; // string | The ID of the target object of the expression. A target object can be a Data Server, a database, an element, an event frame or an attribute. References to attributes or points are based on the target. If this parameter is not provided, the target object is set to null.

try {
    $result = $api_instance->calculationGetSummary($calculation_basis, $end_time, $expression, $sample_interval, $sample_type, $selected_fields, $start_time, $summary_duration, $summary_type, $time_type, $web_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalculationApi->calculationGetSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **calculation_basis** | **string**| Specifies the method of evaluating the data over the time range. The default is &#39;TimeWeighted&#39;. | [optional]
 **end_time** | **string**| An optional end time. The default is &#39;*&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s end time, or &#39;*&#39; if that is not set. Note that if endTime is earlier than startTime, the resulting values will be in time-descending order. | [optional]
 **expression** | **string**| A string containing the expression to be evaluated. The syntax for the expression generally follows the Performance Equation syntax as described in the PI Server documentation, with the exception that expressions which target AF objects use attribute names in place of tag names in the equation. | [optional]
 **sample_interval** | **string**| A time span specifies how often the filter expression is evaluated when computing the summary for an interval, if the sampleType is &#39;Interval&#39;. | [optional]
 **sample_type** | **string**| A flag which specifies one or more summaries to compute for each interval over the time range. The default is &#39;ExpressionRecordedValues&#39;. | [optional]
 **selected_fields** | **string**| List of fields to be returned in the response, separated by semicolons (;). If this parameter is not specified, all available fields will be returned. | [optional]
 **start_time** | **string**| An optional start time. The default is &#39;*-1d&#39; for element attributes and points. For event frame attributes, the default is the event frame&#39;s start time, or &#39;*-1d&#39; if that is not set. | [optional]
 **summary_duration** | **string**| The duration of each summary interval. | [optional]
 **summary_type** | [**string[]**](../Model/string.md)| Specifies the kinds of summaries to produce over the range. The default is &#39;Total&#39;. Multiple summary types may be specified by using multiple instances of summaryType. | [optional]
 **time_type** | **string**| Specifies how to calculate the timestamp for each interval. The default is &#39;Auto&#39;. | [optional]
 **web_id** | **string**| The ID of the target object of the expression. A target object can be a Data Server, a database, an element, an event frame or an attribute. References to attributes or points are based on the target. If this parameter is not provided, the target object is set to null. | [optional]

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsSummaryValue**](../Model/ItemsSummaryValue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

