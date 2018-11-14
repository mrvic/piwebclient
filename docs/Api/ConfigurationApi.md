# Swagger\Client\ConfigurationApi

All URIs are relative to *https://proghackuc2017.osisoft.com/piwebapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configurationDelete**](ConfigurationApi.md#configurationDelete) | **DELETE** /system/configuration/{key} | Delete a configuration item.
[**configurationGet**](ConfigurationApi.md#configurationGet) | **GET** /system/configuration/{key} | Get the value of a configuration item.
[**configurationList**](ConfigurationApi.md#configurationList) | **GET** /system/configuration | Get the current system configuration.


# **configurationDelete**
> configurationDelete($key)

Delete a configuration item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ConfigurationApi();
$key = "key_example"; // string | The key of the configuration item to remove.

try {
    $api_instance->configurationDelete($key);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the configuration item to remove. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationGet**
> object configurationGet($key)

Get the value of a configuration item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ConfigurationApi();
$key = "key_example"; // string | The key of the configuration item.

try {
    $result = $api_instance->configurationGet($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the configuration item. |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationList**
> map[string,object] configurationList()

Get the current system configuration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ConfigurationApi();

try {
    $result = $api_instance->configurationList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**map[string,object]**](../Model/map.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

