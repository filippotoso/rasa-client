# # JSONTrainingRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**domain** | **string** | Rasa domain in plain text | [optional]
**config** | **string** | Rasa config in plain text |
**nlu** | **string** | Rasa NLU training data in YAML format | [optional]
**responses** | **string** | Rasa response texts for retrieval intents in YAML format | [optional]
**stories** | **string** | Rasa Core stories in YAML format | [optional]
**force** | **bool** | Force a model training even if the data has not changed | [optional]
**saveToDefaultModelDirectory** | **bool** | If &#x60;true&#x60; (default) the trained model will be saved in the default model directory, if &#x60;false&#x60; it will be saved in a temporary directory | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
