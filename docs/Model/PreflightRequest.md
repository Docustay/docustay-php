# PreflightRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | **string** | What you are about to do: &#x60;send_document&#x60;, &#x60;bulk_send&#x60; (with &#x60;documents&#x60;), &#x60;invite_person&#x60; or &#x60;remove_person&#x60; (with &#x60;people&#x60;), &#x60;ai_draft&#x60;, &#x60;ai_edit&#x60;, &#x60;ai_read_file&#x60;, &#x60;create_template&#x60;, &#x60;upload&#x60; (with &#x60;bytes&#x60;), &#x60;use_feature&#x60; (with &#x60;item&#x60;) or &#x60;connect_payments&#x60;. |
**documents** | **int** |  | [optional]
**people** | **int** |  | [optional]
**recipients** | **string[]** | For &#x60;send_document&#x60;: the email addresses you are about to send to, so a Free workspace is told how many of them are new signers this month (anyone already sent to this month, and your own team, do not count). | [optional]
**bytes** | **int** |  | [optional]
**item** | **string** | For &#x60;use_feature&#x60;: the item to ask about, one of &#x60;unlimited_documents&#x60;, &#x60;hide_footer&#x60;, &#x60;auto_reminders&#x60;, &#x60;bulk_send&#x60;, &#x60;team_roles&#x60;, &#x60;signing_groups&#x60;, &#x60;scribe_actions&#x60;, &#x60;ai_bulk&#x60;, &#x60;custom_plays&#x60; (your own plays and playbooks), &#x60;plays_api&#x60;. Any other name is a 400 &#x60;unknown_item&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
