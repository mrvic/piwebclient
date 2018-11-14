# Swagger\Client\HomeApi

All URIs are relative to *https://proghackuc2017.osisoft.com/piwebapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**homeGet**](HomeApi.md#homeGet) | **GET** / | Get top level links for this PI System Web API instance.


# **homeGet**
> \osisoft.pidevclub.piwebapi.models\Landing homeGet()

Get top level links for this PI System Web API instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\HomeApi();

try {
    $result = $api_instance->homeGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HomeApi->homeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\osisoft.pidevclub.piwebapi.models\Landing**](../Model/Landing.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

