# FilippoToso\Rasa\TrackerApi

All URIs are relative to http://localhost:5005.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addConversationMessage()**](TrackerApi.md#addConversationMessage) | **POST** /conversations/{conversation_id}/messages | Add a message to a tracker
[**addConversationTrackerEvents()**](TrackerApi.md#addConversationTrackerEvents) | **POST** /conversations/{conversation_id}/tracker/events | Append events to a tracker
[**executeConversationAction()**](TrackerApi.md#executeConversationAction) | **POST** /conversations/{conversation_id}/execute | Run an action in a conversation
[**getConversationStory()**](TrackerApi.md#getConversationStory) | **GET** /conversations/{conversation_id}/story | Retrieve an end-to-end story corresponding to a conversation
[**getConversationTracker()**](TrackerApi.md#getConversationTracker) | **GET** /conversations/{conversation_id}/tracker | Retrieve a conversations tracker
[**predictConversationAction()**](TrackerApi.md#predictConversationAction) | **POST** /conversations/{conversation_id}/predict | Predict the next action
[**replaceConversationTrackerEvents()**](TrackerApi.md#replaceConversationTrackerEvents) | **PUT** /conversations/{conversation_id}/tracker/events | Replace a trackers events
[**triggerConversationIntent()**](TrackerApi.md#triggerConversationIntent) | **POST** /conversations/{conversation_id}/trigger_intent | Inject an intent into a conversation


## `addConversationMessage()`

```php
addConversationMessage($conversationId, $message, $includeEvents): \FilippoToso\Rasa\Model\Tracker
```

Add a message to a tracker

Adds a message to a tracker. This doesn't trigger the prediction loop. It will log the message on the tracker and return, no actions will be predicted or run. This is often used together with the predict endpoint.

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


$apiInstance = new FilippoToso\Rasa\Api\TrackerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = default; // string | Id of the conversation
$message = new \FilippoToso\Rasa\Model\Message(); // \FilippoToso\Rasa\Model\Message
$includeEvents = AFTER_RESTART; // string | Specify which events of the tracker the response should contain.

try {
    $result = $apiInstance->addConversationMessage($conversationId, $message, $includeEvents);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackerApi->addConversationMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| Id of the conversation |
 **message** | [**\FilippoToso\Rasa\Model\Message**](../Model/Message.md)|  |
 **includeEvents** | **string**| Specify which events of the tracker the response should contain. | [optional] [default to &#39;AFTER_RESTART&#39;]

### Return type

[**\FilippoToso\Rasa\Model\Tracker**](../Model/Tracker.md)

### Authorization

[JWT](../../README.md#JWT), [TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addConversationTrackerEvents()`

```php
addConversationTrackerEvents($conversationId, $uNKNOWNBASETYPE, $includeEvents, $outputChannel, $executeSideEffects): \FilippoToso\Rasa\Model\Tracker
```

Append events to a tracker

Appends one or multiple new events to the tracker state of the conversation. Any existing events will be kept and the new events will be appended, updating the existing state. If events are appended to a new conversation ID, the tracker will be initialised with a new session.

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


$apiInstance = new FilippoToso\Rasa\Api\TrackerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = default; // string | Id of the conversation
$uNKNOWNBASETYPE = new \FilippoToso\Rasa\Model\UNKNOWN_BASE_TYPE(); // \FilippoToso\Rasa\Model\UNKNOWN_BASE_TYPE
$includeEvents = AFTER_RESTART; // string | Specify which events of the tracker the response should contain.
$outputChannel = slack; // string | The bot's utterances will be forwarded to this channel. It uses the credentials listed in `credentials.yml` to connect. In case the channel does not support this, the utterances will be returned in the response body. Use `latest` to try to send the messages to the latest channel the user used. Currently supported channels are listed in the permitted values for the parameter.
$executeSideEffects = false; // bool

try {
    $result = $apiInstance->addConversationTrackerEvents($conversationId, $uNKNOWNBASETYPE, $includeEvents, $outputChannel, $executeSideEffects);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackerApi->addConversationTrackerEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| Id of the conversation |
 **uNKNOWNBASETYPE** | [**\FilippoToso\Rasa\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |
 **includeEvents** | **string**| Specify which events of the tracker the response should contain. | [optional] [default to &#39;AFTER_RESTART&#39;]
 **outputChannel** | **string**| The bot&#39;s utterances will be forwarded to this channel. It uses the credentials listed in &#x60;credentials.yml&#x60; to connect. In case the channel does not support this, the utterances will be returned in the response body. Use &#x60;latest&#x60; to try to send the messages to the latest channel the user used. Currently supported channels are listed in the permitted values for the parameter. | [optional]
 **executeSideEffects** | **bool**|  | [optional] [default to false]

### Return type

[**\FilippoToso\Rasa\Model\Tracker**](../Model/Tracker.md)

### Authorization

[JWT](../../README.md#JWT), [TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `executeConversationAction()`

```php
executeConversationAction($conversationId, $actionRequest, $includeEvents, $outputChannel): \FilippoToso\Rasa\Model\InlineResponse2002
```

Run an action in a conversation

DEPRECATED. Runs the action, calling the action server if necessary. Any responses sent by the executed action will be forwarded to the channel specified in the output_channel parameter. If no output channel is specified, any messages that should be sent to the user will be included in the response of this endpoint.

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


$apiInstance = new FilippoToso\Rasa\Api\TrackerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = default; // string | Id of the conversation
$actionRequest = new \FilippoToso\Rasa\Model\ActionRequest(); // \FilippoToso\Rasa\Model\ActionRequest
$includeEvents = AFTER_RESTART; // string | Specify which events of the tracker the response should contain.
$outputChannel = slack; // string | The bot's utterances will be forwarded to this channel. It uses the credentials listed in `credentials.yml` to connect. In case the channel does not support this, the utterances will be returned in the response body. Use `latest` to try to send the messages to the latest channel the user used. Currently supported channels are listed in the permitted values for the parameter.

try {
    $result = $apiInstance->executeConversationAction($conversationId, $actionRequest, $includeEvents, $outputChannel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackerApi->executeConversationAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| Id of the conversation |
 **actionRequest** | [**\FilippoToso\Rasa\Model\ActionRequest**](../Model/ActionRequest.md)|  |
 **includeEvents** | **string**| Specify which events of the tracker the response should contain. | [optional] [default to &#39;AFTER_RESTART&#39;]
 **outputChannel** | **string**| The bot&#39;s utterances will be forwarded to this channel. It uses the credentials listed in &#x60;credentials.yml&#x60; to connect. In case the channel does not support this, the utterances will be returned in the response body. Use &#x60;latest&#x60; to try to send the messages to the latest channel the user used. Currently supported channels are listed in the permitted values for the parameter. | [optional]

### Return type

[**\FilippoToso\Rasa\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[JWT](../../README.md#JWT), [TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConversationStory()`

```php
getConversationStory($conversationId, $until, $allSessions)
```

Retrieve an end-to-end story corresponding to a conversation

The story represents the whole conversation in end-to-end format. This can be posted to the '/test/stories' endpoint and used as a test.

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


$apiInstance = new FilippoToso\Rasa\Api\TrackerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = default; // string | Id of the conversation
$until = 1559744410; // float | All events previous to the passed timestamp will be replayed. Events that occur exactly at the target time will be included.
$allSessions = false; // bool | Fetch test stories for all conversation sessions

try {
    $apiInstance->getConversationStory($conversationId, $until, $allSessions);
} catch (Exception $e) {
    echo 'Exception when calling TrackerApi->getConversationStory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| Id of the conversation |
 **until** | **float**| All events previous to the passed timestamp will be replayed. Events that occur exactly at the target time will be included. | [optional]
 **allSessions** | **bool**| Fetch test stories for all conversation sessions | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[JWT](../../README.md#JWT), [TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/yml`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConversationTracker()`

```php
getConversationTracker($conversationId, $includeEvents, $until): \FilippoToso\Rasa\Model\Tracker
```

Retrieve a conversations tracker

The tracker represents the state of the conversation. The state of the tracker is created by applying a sequence of events, which modify the state. These events can optionally be included in the response.

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


$apiInstance = new FilippoToso\Rasa\Api\TrackerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = default; // string | Id of the conversation
$includeEvents = AFTER_RESTART; // string | Specify which events of the tracker the response should contain.
$until = 1559744410; // float | All events previous to the passed timestamp will be replayed. Events that occur exactly at the target time will be included.

try {
    $result = $apiInstance->getConversationTracker($conversationId, $includeEvents, $until);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackerApi->getConversationTracker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| Id of the conversation |
 **includeEvents** | **string**| Specify which events of the tracker the response should contain. | [optional] [default to &#39;AFTER_RESTART&#39;]
 **until** | **float**| All events previous to the passed timestamp will be replayed. Events that occur exactly at the target time will be included. | [optional]

### Return type

[**\FilippoToso\Rasa\Model\Tracker**](../Model/Tracker.md)

### Authorization

[JWT](../../README.md#JWT), [TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `predictConversationAction()`

```php
predictConversationAction($conversationId): \FilippoToso\Rasa\Model\PredictResult
```

Predict the next action

Runs the conversations tracker through the model's policies to predict the scores of all actions present in the model's domain. Actions are returned in the 'scores' array, sorted on their 'score' values. The state of the tracker is not modified.

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


$apiInstance = new FilippoToso\Rasa\Api\TrackerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = default; // string | Id of the conversation

try {
    $result = $apiInstance->predictConversationAction($conversationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackerApi->predictConversationAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| Id of the conversation |

### Return type

[**\FilippoToso\Rasa\Model\PredictResult**](../Model/PredictResult.md)

### Authorization

[JWT](../../README.md#JWT), [TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replaceConversationTrackerEvents()`

```php
replaceConversationTrackerEvents($conversationId, $event, $includeEvents): \FilippoToso\Rasa\Model\Tracker
```

Replace a trackers events

Replaces all events of a tracker with the passed list of events. This endpoint should not be used to modify trackers in a production setup, but rather for creating training data.

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


$apiInstance = new FilippoToso\Rasa\Api\TrackerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = default; // string | Id of the conversation
$event = array(new \FilippoToso\Rasa\Model\Event()); // \FilippoToso\Rasa\Model\Event[]
$includeEvents = AFTER_RESTART; // string | Specify which events of the tracker the response should contain.

try {
    $result = $apiInstance->replaceConversationTrackerEvents($conversationId, $event, $includeEvents);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackerApi->replaceConversationTrackerEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| Id of the conversation |
 **event** | [**\FilippoToso\Rasa\Model\Event[]**](../Model/Event.md)|  |
 **includeEvents** | **string**| Specify which events of the tracker the response should contain. | [optional] [default to &#39;AFTER_RESTART&#39;]

### Return type

[**\FilippoToso\Rasa\Model\Tracker**](../Model/Tracker.md)

### Authorization

[JWT](../../README.md#JWT), [TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `triggerConversationIntent()`

```php
triggerConversationIntent($conversationId, $intentTriggerRequest, $includeEvents, $outputChannel): \FilippoToso\Rasa\Model\InlineResponse2002
```

Inject an intent into a conversation

Sends a specified intent and list of entities in place of a user message. The bot then predicts and executes a response action. Any responses sent by the executed action will be forwarded to the channel specified in the ``output_channel`` parameter. If no output channel is specified, any messages that should be sent to the user will be included in the response of this endpoint.

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


$apiInstance = new FilippoToso\Rasa\Api\TrackerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = default; // string | Id of the conversation
$intentTriggerRequest = new \FilippoToso\Rasa\Model\IntentTriggerRequest(); // \FilippoToso\Rasa\Model\IntentTriggerRequest
$includeEvents = AFTER_RESTART; // string | Specify which events of the tracker the response should contain.
$outputChannel = slack; // string | The bot's utterances will be forwarded to this channel. It uses the credentials listed in `credentials.yml` to connect. In case the channel does not support this, the utterances will be returned in the response body. Use `latest` to try to send the messages to the latest channel the user used. Currently supported channels are listed in the permitted values for the parameter.

try {
    $result = $apiInstance->triggerConversationIntent($conversationId, $intentTriggerRequest, $includeEvents, $outputChannel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackerApi->triggerConversationIntent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| Id of the conversation |
 **intentTriggerRequest** | [**\FilippoToso\Rasa\Model\IntentTriggerRequest**](../Model/IntentTriggerRequest.md)|  |
 **includeEvents** | **string**| Specify which events of the tracker the response should contain. | [optional] [default to &#39;AFTER_RESTART&#39;]
 **outputChannel** | **string**| The bot&#39;s utterances will be forwarded to this channel. It uses the credentials listed in &#x60;credentials.yml&#x60; to connect. In case the channel does not support this, the utterances will be returned in the response body. Use &#x60;latest&#x60; to try to send the messages to the latest channel the user used. Currently supported channels are listed in the permitted values for the parameter. | [optional]

### Return type

[**\FilippoToso\Rasa\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[JWT](../../README.md#JWT), [TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
