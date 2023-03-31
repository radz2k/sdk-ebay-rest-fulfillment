# ContestPaymentDisputeRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**note** | **string** | This field shows information that the seller provides about the dispute, such as the basis for the dispute, any relevant evidence, tracking numbers, and so forth.&lt;br&gt;&lt;br&gt;This field is limited to 1000 characters. | [optional] 
**return_address** | [**\Swagger\Client\Model\ReturnAddress**](ReturnAddress.md) |  | [optional] 
**revision** | **int** | This integer value indicates the revision number of the payment dispute. This field is required. The current &lt;strong&gt;revision&lt;/strong&gt; number for a payment dispute can be retrieved with the &lt;strong&gt;getPaymentDispute&lt;/strong&gt; method. Each time an action is taken against a payment dispute, this integer value increases by 1. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

