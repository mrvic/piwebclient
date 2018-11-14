# Swagger\Client\SystemApi

All URIs are relative to *https://proghackuc2017.osisoft.com/piwebapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**systemCacheInstances**](SystemApi.md#systemCacheInstances) | **GET** /system/cacheinstances | Get AF cache instances currently in use by the system. These are caches from which user requests are serviced. The number of instances depends on the number of users connected to the service, the service&#39;s authentication method, and the cache instance configuration.
[**systemLanding**](SystemApi.md#systemLanding) | **GET** /system | Get system links for this PI System Web API instance.
[**systemStatus**](SystemApi.md#systemStatus) | **GET** /system/status | Get the system uptime, the system state and the number of cache instances for this PI System Web API instance.
[**systemUserInfo**](SystemApi.md#systemUserInfo) | **GET** /system/userinfo | Get information about the Windows identity used to fulfill the request. This depends on the service&#39;s authentication method and the credentials passed by the client. The impersonation level of the Windows identity is included.
[**systemVersions**](SystemApi.md#systemVersions) | **GET** /system/versions | Get the current versions of the PI Web API instance and all external plugins.


# **systemCacheInstances**
> \osisoft.pidevclub.piwebapi.models\ItemsCacheInstance systemCacheInstances()

Get AF cache instances currently in use by the system. These are caches from which user requests are serviced. The number of instances depends on the number of users connected to the service, the service's authentication method, and the cache instance configuration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SystemApi();

try {
    $result = $api_instance->systemCacheInstances();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->systemCacheInstances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\osisoft.pidevclub.piwebapi.models\ItemsCacheInstance**](../Model/ItemsCacheInstance.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemLanding**
> \osisoft.pidevclub.piwebapi.models\SystemLanding systemLanding()

Get system links for this PI System Web API instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SystemApi();

try {
    $result = $api_instance->systemLanding();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->systemLanding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\osisoft.pidevclub.piwebapi.models\SystemLanding**](../Model/SystemLanding.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemStatus**
> \osisoft.pidevclub.piwebapi.models\SystemStatus systemStatus()

Get the system uptime, the system state and the number of cache instances for this PI System Web API instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SystemApi();

try {
    $result = $api_instance->systemStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->systemStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\osisoft.pidevclub.piwebapi.models\SystemStatus**](../Model/SystemStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemUserInfo**
> \osisoft.pidevclub.piwebapi.models\UserInfo systemUserInfo()

Get information about the Windows identity used to fulfill the request. This depends on the service's authentication method and the credentials passed by the client. The impersonation level of the Windows identity is included.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SystemApi();

try {
    $result = $api_instance->systemUserInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->systemUserInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\osisoft.pidevclub.piwebapi.models\UserInfo**](../Model/UserInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemVersions**
> map[string,\osisoft.pidevclub.piwebapi.models\Version] systemVersions()

Get the current versions of the PI Web API instance and all external plugins.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SystemApi();

try {
    $result = $api_instance->systemVersions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->systemVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**map[string,\osisoft.pidevclub.piwebapi.models\Version]**](../Model/Version.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/x-ms-application

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

