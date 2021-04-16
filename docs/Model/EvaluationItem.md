# # EvaluationItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**report** | **object** | Sklearn classification report, see http://scikit-learn.org/stable/modules/generated/sklearn.metrics.classification_report.html | [optional]
**accuracy** | **float** |  | [optional]
**f1Score** | **float** |  | [optional]
**precision** | **float** |  | [optional]
**predictions** | [**\FilippoToso\Rasa\Model\EvaluationItemPredictions[]**](EvaluationItemPredictions.md) | The predictions for each item in the test set | [optional]
**errors** | [**OneOfIntentTestErrorEntityTestErrorResponseSelectorTestError[]**](OneOfIntentTestErrorEntityTestErrorResponseSelectorTestError.md) | The errors which were made during the testing. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
