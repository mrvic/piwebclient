# Swagger\Client\ChannelApi

All URIs are relative to *https://proghackuc2017.osisoft.com/piwebapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**channelInstances**](ChannelApi.md#channelInstances) | **GET** /channels/instances | Retrieves a list of currently running channel instances.


# **channelInstances**
> channelInstances()

Retrieves a list of currently running channel instances.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ChannelApi();

try {
    $api_instance->channelInstances();
} catch (Exception $e) {
    echo 'Exception when calling ChannelApi->channelInstances: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

