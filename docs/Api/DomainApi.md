# FilippoToso\Rasa\DomainApi

All URIs are relative to http://localhost:5005.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDomain()**](DomainApi.md#getDomain) | **GET** /domain | Retrieve the loaded domain


## `getDomain()`

```php
getDomain(): \FilippoToso\Rasa\Model\Domain
```

Retrieve the loaded domain

Returns the domain specification the currently loaded model is using.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = FilippoToso\Rasa\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: TokenAuth
$config = FilippoToso\Rasa\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FilippoToso\Rasa\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new FilippoToso\Rasa\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDomain();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->getDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FilippoToso\Rasa\Model\Domain**](../Model/Domain.md)

### Authorization

[JWT](../../README.md#JWT), [TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/yaml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
