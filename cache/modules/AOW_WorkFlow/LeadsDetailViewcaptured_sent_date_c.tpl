
{if strval($fields.captured_sent_date_c.value) == "1" || strval($fields.captured_sent_date_c.value) == "yes" || strval($fields.captured_sent_date_c.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.captured_sent_date_c.name}" id="{$fields.captured_sent_date_c.name}" value="$fields.captured_sent_date_c.value" disabled="true" {$checked}>
