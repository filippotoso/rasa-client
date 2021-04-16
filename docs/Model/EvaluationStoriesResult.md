# # EvaluationStoriesResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**actions** | [**\FilippoToso\Rasa\Model\EvaluationStoriesResultActions[]**](EvaluationStoriesResultActions.md) | Accuracy of the classification, http://scikit-learn.org/stable/modules/generated/sklearn.metrics.accuracy_score.html | [optional]
**isEndToEndEvaluation** | **bool** | True if evaluation is end-to-end, false otherwise | [optional]
**precision** | **float** | Precision of the classification, see http://scikit-learn.org/stable/modules/generated/sklearn.metrics.precision_score.html | [optional]
**f1** | **float** | F1 score of the classification, http://scikit-learn.org/stable/modules/generated/sklearn.metrics.precision_score.html | [optional]
**accuracy** | **float** | Accuracy of the classification, http://scikit-learn.org/stable/modules/generated/sklearn.metrics.accuracy_score.html | [optional]
**inTrainingDataFraction** | **float** | Fraction of stories that are present in the training data of the model loaded at evaluation time. | [optional]
**report** | **string** | Sklearn classification report, see http://scikit-learn.org/stable/modules/generated/sklearn.metrics.classification_report.html | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
