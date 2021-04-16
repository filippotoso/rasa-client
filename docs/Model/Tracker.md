# # Tracker

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**conversationId** | **string** | ID of the conversation | [optional]
**slots** | [**\FilippoToso\Rasa\Model\array[]**](array.md) | Slot values | [optional]
**latestMessage** | [**\FilippoToso\Rasa\Model\ParseResult**](ParseResult.md) |  | [optional]
**latestEventTime** | **float** | Most recent event time | [optional]
**followupAction** | **string** | Deterministic scheduled next action | [optional]
**paused** | **bool** | Bot is paused | [optional]
**events** | [**\FilippoToso\Rasa\Model\Event[]**](Event.md) | Event history | [optional]
**latestInputChannel** | **string** | Communication channel | [optional]
**latestActionName** | **string** | Name of last bot action | [optional]
**latestAction** | [**\FilippoToso\Rasa\Model\LatestAction**](LatestAction.md) |  | [optional]
**activeLoop** | [**\FilippoToso\Rasa\Model\TrackerActiveLoop**](TrackerActiveLoop.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
