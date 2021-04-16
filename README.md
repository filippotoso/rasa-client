# Rasa Client

A client for [Rasa Open Source](https://rasa.com/docs/rasa/). The Rasa server provides endpoints to retrieve trackers of conversations as well as endpoints to modify them. Additionally, endpoints for training and testing models are provided.

## Installation & Usage

### Requirements

PHP 7.2 and later.

### Installation

You can install the library with composer:

```
composer require filippotoso/rasa-client
```

## Getting Started

```php

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

## Laravel

This library includes multiple facades for Laravel. Start adding the following configuration to the `config/services.php` file:

```php
    'rasa' => [
        'host' => 'http://localhost:5005',
        'token' => null, // Ref. https://rasa.com/docs/rasa/http-api#token-based-auth
    ],
```

Then you can use the facades in your code:

```php
use FilippoToso\Rasa\Laravel\RasaModel;

// ...

$model = RasaModel::parse('Hi');

print_r($model);
```

## API Endpoints

All URIs are relative to *http://localhost:5005*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DomainApi* | [**getDomain**](docs/Api/DomainApi.md#getdomain) | **GET** /domain | Retrieve the loaded domain
*ModelApi* | [**parseModelMessage**](docs/Api/ModelApi.md#parsemodelmessage) | **POST** /model/parse | Parse a message using the Rasa model
*ModelApi* | [**predictModelAction**](docs/Api/ModelApi.md#predictmodelaction) | **POST** /model/predict | Predict an action on a temporary state
*ModelApi* | [**replaceModel**](docs/Api/ModelApi.md#replacemodel) | **PUT** /model | Replace the currently loaded model
*ModelApi* | [**testModelIntent**](docs/Api/ModelApi.md#testmodelintent) | **POST** /model/test/intents | Perform an intent evaluation
*ModelApi* | [**testModelStories**](docs/Api/ModelApi.md#testmodelstories) | **POST** /model/test/stories | Evaluate stories
*ModelApi* | [**trainModel**](docs/Api/ModelApi.md#trainmodel) | **POST** /model/train | Train a Rasa model
*ModelApi* | [**unloadModel**](docs/Api/ModelApi.md#unloadmodel) | **DELETE** /model | Unload the trained model
*ServerInformationApi* | [**getHealth**](docs/Api/ServerInformationApi.md#gethealth) | **GET** / | Health endpoint of Rasa Server
*ServerInformationApi* | [**getStatus**](docs/Api/ServerInformationApi.md#getstatus) | **GET** /status | Status of the Rasa server
*ServerInformationApi* | [**getVersion**](docs/Api/ServerInformationApi.md#getversion) | **GET** /version | Version of Rasa
*TrackerApi* | [**addConversationMessage**](docs/Api/TrackerApi.md#addconversationmessage) | **POST** /conversations/{conversation_id}/messages | Add a message to a tracker
*TrackerApi* | [**addConversationTrackerEvents**](docs/Api/TrackerApi.md#addconversationtrackerevents) | **POST** /conversations/{conversation_id}/tracker/events | Append events to a tracker
*TrackerApi* | [**executeConversationAction**](docs/Api/TrackerApi.md#executeconversationaction) | **POST** /conversations/{conversation_id}/execute | Run an action in a conversation
*TrackerApi* | [**getConversationStory**](docs/Api/TrackerApi.md#getconversationstory) | **GET** /conversations/{conversation_id}/story | Retrieve an end-to-end story corresponding to a conversation
*TrackerApi* | [**getConversationTracker**](docs/Api/TrackerApi.md#getconversationtracker) | **GET** /conversations/{conversation_id}/tracker | Retrieve a conversations tracker
*TrackerApi* | [**predictConversationAction**](docs/Api/TrackerApi.md#predictconversationaction) | **POST** /conversations/{conversation_id}/predict | Predict the next action
*TrackerApi* | [**replaceConversationTrackerEvents**](docs/Api/TrackerApi.md#replaceconversationtrackerevents) | **PUT** /conversations/{conversation_id}/tracker/events | Replace a trackers events
*TrackerApi* | [**triggerConversationIntent**](docs/Api/TrackerApi.md#triggerconversationintent) | **POST** /conversations/{conversation_id}/trigger_intent | Inject an intent into a conversation

## Models

- [ActionRequest](docs/Model/ActionRequest.md)
- [BotMessage](docs/Model/BotMessage.md)
- [BotMessageAttachement](docs/Model/BotMessageAttachement.md)
- [BotMessageButtons](docs/Model/BotMessageButtons.md)
- [CommonExample](docs/Model/CommonExample.md)
- [Domain](docs/Model/Domain.md)
- [DomainConfig](docs/Model/DomainConfig.md)
- [EndpointConfig](docs/Model/EndpointConfig.md)
- [Entity](docs/Model/Entity.md)
- [EntityTestError](docs/Model/EntityTestError.md)
- [Error](docs/Model/Error.md)
- [EvaluationItem](docs/Model/EvaluationItem.md)
- [EvaluationItemPredictions](docs/Model/EvaluationItemPredictions.md)
- [EvaluationStoriesResult](docs/Model/EvaluationStoriesResult.md)
- [EvaluationStoriesResultActions](docs/Model/EvaluationStoriesResultActions.md)
- [Event](docs/Model/Event.md)
- [InlineObject](docs/Model/InlineObject.md)
- [InlineObject1](docs/Model/InlineObject1.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [InlineResponse2001](docs/Model/InlineResponse2001.md)
- [InlineResponse2002](docs/Model/InlineResponse2002.md)
- [Intent](docs/Model/Intent.md)
- [IntentTestError](docs/Model/IntentTestError.md)
- [IntentTriggerRequest](docs/Model/IntentTriggerRequest.md)
- [JSONTrainingRequest](docs/Model/JSONTrainingRequest.md)
- [LatestAction](docs/Model/LatestAction.md)
- [Message](docs/Model/Message.md)
- [ModelRequest](docs/Model/ModelRequest.md)
- [NLUEvaluationResult](docs/Model/NLUEvaluationResult.md)
- [ParseResult](docs/Model/ParseResult.md)
- [PredictResult](docs/Model/PredictResult.md)
- [PredictResultScores](docs/Model/PredictResultScores.md)
- [RasaNLUData](docs/Model/RasaNLUData.md)
- [ResponseSelectorTestError](docs/Model/ResponseSelectorTestError.md)
- [SlotDescription](docs/Model/SlotDescription.md)
- [SlotValue](docs/Model/SlotValue.md)
- [TemplateDescription](docs/Model/TemplateDescription.md)
- [Tracker](docs/Model/Tracker.md)
- [TrackerActiveLoop](docs/Model/TrackerActiveLoop.md)

## Authorization

### JWT

- **Type**: Bearer authentication (JWT)


### TokenAuth

- **Type**: API key
- **API key parameter name**: token
- **Location**: URL query string
