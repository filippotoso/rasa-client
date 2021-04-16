# FilippoToso\Rasa\ModelApi

All URIs are relative to http://localhost:5005.

Method | HTTP request | Description
------------- | ------------- | -------------
[**parseModelMessage()**](ModelApi.md#parseModelMessage) | **POST** /model/parse | Parse a message using the Rasa model
[**predictModelAction()**](ModelApi.md#predictModelAction) | **POST** /model/predict | Predict an action on a temporary state
[**replaceModel()**](ModelApi.md#replaceModel) | **PUT** /model | Replace the currently loaded model
[**testModelIntent()**](ModelApi.md#testModelIntent) | **POST** /model/test/intents | Perform an intent evaluation
[**testModelStories()**](ModelApi.md#testModelStories) | **POST** /model/test/stories | Evaluate stories
[**trainModel()**](ModelApi.md#trainModel) | **POST** /model/train | Train a Rasa model
[**unloadModel()**](ModelApi.md#unloadModel) | **DELETE** /model | Unload the trained model


## `parseModelMessage()`

```php
parseModelMessage($inlineObject1, $emulationMode): \FilippoToso\Rasa\Model\ParseResult
```

Parse a message using the Rasa model

Predicts the intent and entities of the message posted to this endpoint. No messages will be stored to a conversation and no action will be run. This will just retrieve the NLU parse results.

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


$apiInstance = new FilippoToso\Rasa\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inlineObject1 = new \FilippoToso\Rasa\Model\InlineObject1(); // \FilippoToso\Rasa\Model\InlineObject1
$emulationMode = LUIS; // string | Specify the emulation mode.

try {
    $result = $apiInstance->parseModelMessage($inlineObject1, $emulationMode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->parseModelMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inlineObject1** | [**\FilippoToso\Rasa\Model\InlineObject1**](../Model/InlineObject1.md)|  |
 **emulationMode** | **string**| Specify the emulation mode. | [optional]

### Return type

[**\FilippoToso\Rasa\Model\ParseResult**](../Model/ParseResult.md)

### Authorization

[JWT](../../README.md#JWT), [TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `predictModelAction()`

```php
predictModelAction($event, $includeEvents): \FilippoToso\Rasa\Model\PredictResult
```

Predict an action on a temporary state

Predicts the next action on the tracker state as it is posted to this endpoint. Rasa will create a temporary tracker from the provided events and will use it to predict an action. No messages will be sent and no action will be run.

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


$apiInstance = new FilippoToso\Rasa\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event = array(new \FilippoToso\Rasa\Model\Event()); // \FilippoToso\Rasa\Model\Event[]
$includeEvents = AFTER_RESTART; // string | Specify which events of the tracker the response should contain.

try {
    $result = $apiInstance->predictModelAction($event, $includeEvents);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->predictModelAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event** | [**\FilippoToso\Rasa\Model\Event[]**](../Model/Event.md)|  |
 **includeEvents** | **string**| Specify which events of the tracker the response should contain. | [optional] [default to &#39;AFTER_RESTART&#39;]

### Return type

[**\FilippoToso\Rasa\Model\PredictResult**](../Model/PredictResult.md)

### Authorization

[JWT](../../README.md#JWT), [TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replaceModel()`

```php
replaceModel($modelRequest)
```

Replace the currently loaded model

Updates the currently loaded model. First, tries to load the model from the local storage system. Secondly, tries to load the model from the provided model server configuration. Last, tries to load the model from the provided remote storage.

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


$apiInstance = new FilippoToso\Rasa\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modelRequest = new \FilippoToso\Rasa\Model\ModelRequest(); // \FilippoToso\Rasa\Model\ModelRequest

try {
    $apiInstance->replaceModel($modelRequest);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->replaceModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modelRequest** | [**\FilippoToso\Rasa\Model\ModelRequest**](../Model/ModelRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[JWT](../../README.md#JWT), [TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `testModelIntent()`

```php
testModelIntent($inlineObject, $model, $callbackUrl, $crossValidationFolds): \FilippoToso\Rasa\Model\NLUEvaluationResult
```

Perform an intent evaluation

Evaluates NLU model against a model or using cross-validation.

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


$apiInstance = new FilippoToso\Rasa\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inlineObject = new \FilippoToso\Rasa\Model\InlineObject(); // \FilippoToso\Rasa\Model\InlineObject
$model = rasa-model.tar.gz; // string | Model that should be used for evaluation. If the parameter is set, the model will be fetched with the currently loaded configuration setup. However, the currently loaded model will not be updated. The state of the server will not change. If the parameter is not set, the currently loaded model will be used for the evaluation.
$callbackUrl = https://example.com/rasa_evaluations; // string | If specified the call will return immediately with an empty response and status code 204. The actual result or any errors will be sent to the given callback URL as the body of a post request.
$crossValidationFolds = 56; // int

try {
    $result = $apiInstance->testModelIntent($inlineObject, $model, $callbackUrl, $crossValidationFolds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->testModelIntent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inlineObject** | [**\FilippoToso\Rasa\Model\InlineObject**](../Model/InlineObject.md)|  |
 **model** | **string**| Model that should be used for evaluation. If the parameter is set, the model will be fetched with the currently loaded configuration setup. However, the currently loaded model will not be updated. The state of the server will not change. If the parameter is not set, the currently loaded model will be used for the evaluation. | [optional]
 **callbackUrl** | **string**| If specified the call will return immediately with an empty response and status code 204. The actual result or any errors will be sent to the given callback URL as the body of a post request. | [optional] [default to &#39;None&#39;]
 **crossValidationFolds** | **int**|  | [optional]

### Return type

[**\FilippoToso\Rasa\Model\NLUEvaluationResult**](../Model/NLUEvaluationResult.md)

### Authorization

[JWT](../../README.md#JWT), [TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-yaml`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `testModelStories()`

```php
testModelStories($body, $e2e): \FilippoToso\Rasa\Model\EvaluationStoriesResult
```

Evaluate stories

Evaluates one or multiple stories against the currently loaded Rasa model.

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


$apiInstance = new FilippoToso\Rasa\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string
$e2e = false; // bool | Perform an end-to-end evaluation on the posted stories.

try {
    $result = $apiInstance->testModelStories($body, $e2e);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->testModelStories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**|  |
 **e2e** | **bool**| Perform an end-to-end evaluation on the posted stories. | [optional] [default to false]

### Return type

[**\FilippoToso\Rasa\Model\EvaluationStoriesResult**](../Model/EvaluationStoriesResult.md)

### Authorization

[JWT](../../README.md#JWT), [TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: `text/yml`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `trainModel()`

```php
trainModel($jSONTrainingRequest, $saveToDefaultModelDirectory, $forceTraining, $augmentation, $numThreads, $callbackUrl): \SplFileObject
```

Train a Rasa model

Trains a new Rasa model. Depending on the data given only a dialogue model, only a NLU model, or a model combining a trained dialogue model with an NLU model will be trained. The new model is not loaded by default.

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


$apiInstance = new FilippoToso\Rasa\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jSONTrainingRequest = new \FilippoToso\Rasa\Model\JSONTrainingRequest(); // \FilippoToso\Rasa\Model\JSONTrainingRequest | The training data can either be in YAML format or a JSON which contains Rasa training data in YAML format for each required key.
$saveToDefaultModelDirectory = true; // bool
$forceTraining = false; // bool
$augmentation = '50'; // string
$numThreads = '1'; // string
$callbackUrl = https://example.com/rasa_evaluations; // string | If specified the call will return immediately with an empty response and status code 204. The actual result or any errors will be sent to the given callback URL as the body of a post request.

try {
    $result = $apiInstance->trainModel($jSONTrainingRequest, $saveToDefaultModelDirectory, $forceTraining, $augmentation, $numThreads, $callbackUrl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->trainModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jSONTrainingRequest** | [**\FilippoToso\Rasa\Model\JSONTrainingRequest**](../Model/JSONTrainingRequest.md)| The training data can either be in YAML format or a JSON which contains Rasa training data in YAML format for each required key. |
 **saveToDefaultModelDirectory** | **bool**|  | [optional] [default to true]
 **forceTraining** | **bool**|  | [optional] [default to false]
 **augmentation** | **string**|  | [optional] [default to &#39;50&#39;]
 **numThreads** | **string**|  | [optional] [default to &#39;1&#39;]
 **callbackUrl** | **string**| If specified the call will return immediately with an empty response and status code 204. The actual result or any errors will be sent to the given callback URL as the body of a post request. | [optional] [default to &#39;None&#39;]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[JWT](../../README.md#JWT), [TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-yaml`
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unloadModel()`

```php
unloadModel()
```

Unload the trained model

Unloads the currently loaded trained model from the server.

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


$apiInstance = new FilippoToso\Rasa\Api\ModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->unloadModel();
} catch (Exception $e) {
    echo 'Exception when calling ModelApi->unloadModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[JWT](../../README.md#JWT), [TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
