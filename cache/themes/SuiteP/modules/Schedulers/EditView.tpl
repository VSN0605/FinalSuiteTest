

<script>
    {literal}
    $(document).ready(function(){
	    $("ul.clickMenu").each(function(index, node){
	        $(node).sugarActionMenu();
	    });

        if($('.edit-view-pagination').children().length == 0) $('.saveAndContinue').remove();
    });
    {/literal}
</script>
<div class="clear"></div>
<form action="index.php" method="POST" name="{$form_name}" id="{$form_id}" {$enctype}>
<div class="edit-view-pagination-mobile-container">
<div class="edit-view-pagination edit-view-mobile-pagination">
{$PAGINATION}
</div>
</div>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="{$module}">
{if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="{$fields.id.value}">
{else}
<input type="hidden" name="record" value="{$fields.id.value}">
{/if}
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="{$smarty.request.return_module}">
<input type="hidden" name="return_action" value="{$smarty.request.return_action}">
<input type="hidden" name="return_id" value="{$smarty.request.return_id}">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
{if (!empty($smarty.request.return_module) || !empty($smarty.request.relate_to)) && !(isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true")}
<input type="hidden" name="relate_to" value="{if $smarty.request.return_relationship}{$smarty.request.return_relationship}{elseif $smarty.request.relate_to && empty($smarty.request.from_dcmenu)}{$smarty.request.relate_to}{elseif empty($isDCForm) && empty($smarty.request.from_dcmenu)}{$smarty.request.return_module}{/if}">
<input type="hidden" name="relate_id" value="{$smarty.request.return_id}">
{/if}
<input type="hidden" name="offset" value="{$offset}">
{assign var='place' value="_HEADER"} <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('EditView'); {if $isDuplicate}_form.return_id.value=''; {/if}_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && empty($fields.id.value)) && empty($smarty.request.return_id)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && !empty($smarty.request.return_module)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action={$smarty.request.return_action}&module={$smarty.request.return_module|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Schedulers'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {/if}
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Schedulers", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</td>
<td align='right' class="edit-view-pagination-desktop-container">
<div class="edit-view-pagination edit-view-pagination-desktop">
{$PAGINATION}
</div>
</td>
</tr>
</table>
{sugar_include include=$includes}
<div id="EditView_tabs">

<ul class="nav nav-tabs">
</ul>
<div class="clearfix"></div>
<div class="tab-content" style="padding: 0; border: 0;">

<div class="tab-pane panel-collapse">&nbsp;</div>
</div>

<div class="panel-content">
<div>&nbsp;</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='DEFAULT' module='Schedulers'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="DEFAULT">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="name">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='Schedulers'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="name"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if}
<input type='text' name='{$fields.name.name}'
id='{$fields.name.name}' size='30'
maxlength='255'        value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="status">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_STATUS">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_STATUS' module='Schedulers'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="status"  >
{counter name="panelFieldCount" print=false}

<select name="{$fields.status.name}"
id="{$fields.status.name}"
title=''              
>
{if isset($fields.status.value)}
{html_options options=$fields.status.options selected=$fields.status.value}
{else}
{html_options options=$fields.status.options selected=$fields.status.default}
{/if}
</select>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="job_function">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_JOB">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_JOB' module='Schedulers'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="job_function"  >
{counter name="panelFieldCount" print=false}

<select name="{$fields.job_function.name}"
id="{$fields.job_function.name}"
title=''              
>
{if isset($fields.job_function.value)}
{html_options options=$fields.job_function.options selected=$fields.job_function.value}
{else}
{html_options options=$fields.job_function.options selected=$fields.job_function.default}
{/if}
</select>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="job_url">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_JOB_URL">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_JOB_URL' module='Schedulers'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="job_url"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.job_url.value) <= 0}
{assign var="value" value=$fields.job_url.default_value }
{else}
{assign var="value" value=$fields.job_url.value }
{/if}
<input type='text' name='{$fields.job_url.name}'
id='{$fields.job_url.name}' size='30'
maxlength='255'        value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="adv_interval">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_ADV_OPTIONS">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_ADV_OPTIONS' module='Schedulers'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="bool" field="adv_interval" colspan='3' >
{counter name="panelFieldCount" print=false}

{if strval($fields.adv_interval.value) == "1" || strval($fields.adv_interval.value) == "yes" || strval($fields.adv_interval.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="{$fields.adv_interval.name}" value="0"> 
<input type="checkbox" id="{$fields.adv_interval.name}" 
name="{$fields.adv_interval.name}" 
value="1" title='' tabindex="0" {$checked} >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="job_interval">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_INTERVAL">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_INTERVAL' module='Schedulers'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="job_interval" colspan='3' >
{counter name="panelFieldCount"  print=false}
<div id="job_interval_advanced">
<script>
					var adv_interval = {$adv_interval};
				</script>
<table cellpadding="0" cellspacing="0">
<tr>
<td>{$MOD.LBL_MINS}</td>
<td>{$MOD.LBL_HOURS}</td>
<td>{$MOD.LBL_DAY_OF_MONTH}</td>
<td>{$MOD.LBL_MONTHS}</td>
<td>{$MOD.LBL_DAY_OF_WEEK}</td>
</tr><tr>
<td><input tabindex="0"  name="mins" maxlength="25" type="text" size="3" value="{$mins}"></td>
<td><input tabindex="0"  name="hours" maxlength="25" type="text" size="3" value="{$hours}"></td>
<td><input tabindex="0"  name="day_of_month" maxlength="25" type="text" size="3" value="{$day_of_month}"></td>
<td><input tabindex="0"  name="months" maxlength="25" type="text" size="3" value="{$months}"></td>
<td><input tabindex="0"  name="day_of_week" maxlength="25" type="text" size="3" value="{$day_of_week}"></td>
</tr><tr>
<td colspan="5">
<em>{$MOD.LBL_CRONTAB_EXAMPLES}</em>
</td>
</tr>
</table>
</div>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="job_interval">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_INTERVAL">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_INTERVAL' module='Schedulers'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="job_interval" colspan='3' >
{counter name="panelFieldCount"  print=false}
<div id="job_interval_basic">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td valign="top" width="25%">
&nbsp;{$MOD.LBL_EVERY}&nbsp;
<select tabindex="0"  name="basic_interval">{html_options options=$basic_intervals selected=$basic_interval}</select>&nbsp;
<select tabindex="0"  name="basic_period">{html_options options=$basic_periods selected=$basic_period}</select>
</td>
<td valign="top" width="25%">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td><span><input tabindex="0"  type="checkbox" name="all" value="true" id="all" {$ALL} onClick="allDays();">&nbsp;<i>{$MOD.LBL_ALL}</i></span></td>
</tr>
<tr>
<td><span><input tabindex="0"  type="checkbox" name="mon" value="true" id="mon" {$MON}>&nbsp;{$MOD.LBL_MON}</span></td>
</tr>
<tr>
<td><span><input tabindex="0"  type="checkbox" name="tue" value="true" id="tue"  {$TUE}>&nbsp;{$MOD.LBL_TUE}</span></td>
</tr>
<tr>
<td><span><input tabindex="0"  type="checkbox" name="wed" value="true" id="wed"  {$WED}>&nbsp;{$MOD.LBL_WED}</span></td>
</tr>
</table>
</td>
<td valign="top" width="25%">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td><span><input tabindex="0"  type="checkbox" name="thu" value="true" id="thu"  {$THU}>&nbsp;{$MOD.LBL_THU}</span></td>
</tr>
<tr>
<td><span><input tabindex="0"  type="checkbox" name="fri" value="true" id="fri"  {$FRI}>&nbsp;{$MOD.LBL_FRI}</span></td>
</tr>
<tr>
<td><span><input tabindex="0"  type="checkbox" name="sat" value="true" id="sat"  {$SAT}>&nbsp;{$MOD.LBL_SAT}</span></td>
</tr>
<tr>
<td><span><input tabindex="0"  type="checkbox" name="sun" value="true" id="sun"  {$SUN}>&nbsp;{$MOD.LBL_SUN}</span></td>
</tr>
</table>
</td>
</tr>
</table>
</div>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
</div>
</div>
</div>
</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='LBL_ADV_OPTIONS' module='Schedulers'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_0" data-id="LBL_ADV_OPTIONS">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="catch_up">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_CATCH_UP">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_CATCH_UP' module='Schedulers'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="bool" field="catch_up" colspan='3' >
{sugar_help text=$MOD.LBL_CATCH_UP_WARNING}
{counter name="panelFieldCount" print=false}

{if strval($fields.catch_up.value) == "1" || strval($fields.catch_up.value) == "yes" || strval($fields.catch_up.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="{$fields.catch_up.name}" value="0"> 
<input type="checkbox" id="{$fields.catch_up.name}" 
name="{$fields.catch_up.name}" 
value="1" title='' tabindex="0" {$checked} >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="date_time_start">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DATE_TIME_START">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_TIME_START' module='Schedulers'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="datetimecombo" field="date_time_start"  >
{counter name="panelFieldCount" print=false}

<table border="0" cellpadding="0" cellspacing="0" class="dateTime">
<tr valign="middle">
<td nowrap class="dateTimeComboColumn">
<input autocomplete="off" type="text" id="{$fields.date_time_start.name}_date" class="datetimecombo_date" value="{$fields[$fields.date_time_start.name].value}" size="11" maxlength="10" title='' tabindex="0" onblur="combo_{$fields.date_time_start.name}.update();" onchange="combo_{$fields.date_time_start.name}.update(); "    >
<button type="button" id="{$fields.date_time_start.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar"  alt="{$APP.LBL_ENTER_DATE}"></span></button>
</td>
<td nowrap class="dateTimeComboColumn">
<div id="{$fields.date_time_start.name}_time_section" class="datetimecombo_time_section"></div>
</td>
</tr>
</table>
<input type="hidden" class="DateTimeCombo" id="{$fields.date_time_start.name}" name="{$fields.date_time_start.name}" value="{$fields[$fields.date_time_start.name].value}">
<script type="text/javascript" src="{sugar_getjspath file="include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"}"></script>
<script type="text/javascript">
var combo_{$fields.date_time_start.name} = new Datetimecombo("{$fields[$fields.date_time_start.name].value}", "{$fields.date_time_start.name}", "{$TIME_FORMAT}", "0", '', false, true);
//Render the remaining widget fields
text = combo_{$fields.date_time_start.name}.html('');
document.getElementById('{$fields.date_time_start.name}_time_section').innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
eval(combo_{$fields.date_time_start.name}.jsscript(''));

addToValidateBinaryDependency('{$form_name}',"{$fields.date_time_start.name}_hours", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS} {$APP.LBL_HOURS}" ,"{$fields.date_time_start.name}_date");
addToValidateBinaryDependency('{$form_name}', "{$fields.date_time_start.name}_minutes", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS} {$APP.LBL_MINUTES}" ,"{$fields.date_time_start.name}_date");
addToValidateBinaryDependency('{$form_name}', "{$fields.date_time_start.name}_meridiem", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS} {$APP.LBL_MERIDIEM}","{$fields.date_time_start.name}_date");

YAHOO.util.Event.onDOMReady(function()
{ldelim}

	Calendar.setup ({ldelim}
	onClose : update_{$fields.date_time_start.name},
	inputField : "{$fields.date_time_start.name}_date",
    form : "EditView",
	ifFormat : "{$CALENDAR_FORMAT}",
	daFormat : "{$CALENDAR_FORMAT}",
	button : "{$fields.date_time_start.name}_trigger",
	singleClick : true,
	step : 1,
	weekNumbers: false,
        startWeekday: {$CALENDAR_FDOW|default:'0'},
	comboObject: combo_{$fields.date_time_start.name}
	{rdelim});

	//Call update for first time to round hours and minute values
	combo_{$fields.date_time_start.name}.update(false);

{rdelim}); 
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="time_from">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_TIME_FROM">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_TIME_FROM' module='Schedulers'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="time" field="time_from"  >
{counter name="panelFieldCount" print=false}

<table border="0" cellpadding="0" cellspacing="0">
<tr valign="middle">
<td nowrap>
<div id="{$fields.time_from.name}_time"></div>
</td>
</tr>
</table>
<input type="hidden" id="{$fields.time_from.name}" name="{$fields.time_from.name}" value="{$fields[$fields.time_from.name].value}">
<script type="text/javascript" src="include/SugarFields/Fields/Time/Time.js"></script>
<script type="text/javascript">
	var combo_{$fields.time_from.name} = new Time("{$fields[$fields.time_from.name].value}", "{$fields.time_from.name}", "{$TIME_FORMAT}", "0");
	//Render the remaining widget fields
	text = combo_{$fields.time_from.name}.html('');
	document.getElementById('{$fields.time_from.name}_time').innerHTML = text;
</script>
<script type="text/javascript">
	function update_{$fields.time_from.name}_available() {ldelim}
		YAHOO.util.Event.onAvailable("{$fields.time_from.name}_time_hours", this.handleOnAvailable, this);
		{rdelim}

	update_{$fields.time_from.name}_available.prototype.handleOnAvailable = function(me) {ldelim}
		//Call update for first time to round hours and minute values
		combo_{$fields.time_from.name}.update();
		{rdelim}

	var obj_{$fields.time_from.name} = new update_{$fields.time_from.name}_available();
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="date_time_end">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DATE_TIME_END">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_TIME_END' module='Schedulers'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="datetimecombo" field="date_time_end"  >
{counter name="panelFieldCount" print=false}

<table border="0" cellpadding="0" cellspacing="0" class="dateTime">
<tr valign="middle">
<td nowrap class="dateTimeComboColumn">
<input autocomplete="off" type="text" id="{$fields.date_time_end.name}_date" class="datetimecombo_date" value="{$fields[$fields.date_time_end.name].value}" size="11" maxlength="10" title='' tabindex="0" onblur="combo_{$fields.date_time_end.name}.update();" onchange="combo_{$fields.date_time_end.name}.update(); "    >
<button type="button" id="{$fields.date_time_end.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar"  alt="{$APP.LBL_ENTER_DATE}"></span></button>
</td>
<td nowrap class="dateTimeComboColumn">
<div id="{$fields.date_time_end.name}_time_section" class="datetimecombo_time_section"></div>
</td>
</tr>
</table>
<input type="hidden" class="DateTimeCombo" id="{$fields.date_time_end.name}" name="{$fields.date_time_end.name}" value="{$fields[$fields.date_time_end.name].value}">
<script type="text/javascript" src="{sugar_getjspath file="include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"}"></script>
<script type="text/javascript">
var combo_{$fields.date_time_end.name} = new Datetimecombo("{$fields[$fields.date_time_end.name].value}", "{$fields.date_time_end.name}", "{$TIME_FORMAT}", "0", '', false, true);
//Render the remaining widget fields
text = combo_{$fields.date_time_end.name}.html('');
document.getElementById('{$fields.date_time_end.name}_time_section').innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
eval(combo_{$fields.date_time_end.name}.jsscript(''));

addToValidateBinaryDependency('{$form_name}',"{$fields.date_time_end.name}_hours", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS} {$APP.LBL_HOURS}" ,"{$fields.date_time_end.name}_date");
addToValidateBinaryDependency('{$form_name}', "{$fields.date_time_end.name}_minutes", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS} {$APP.LBL_MINUTES}" ,"{$fields.date_time_end.name}_date");
addToValidateBinaryDependency('{$form_name}', "{$fields.date_time_end.name}_meridiem", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS} {$APP.LBL_MERIDIEM}","{$fields.date_time_end.name}_date");

YAHOO.util.Event.onDOMReady(function()
{ldelim}

	Calendar.setup ({ldelim}
	onClose : update_{$fields.date_time_end.name},
	inputField : "{$fields.date_time_end.name}_date",
    form : "EditView",
	ifFormat : "{$CALENDAR_FORMAT}",
	daFormat : "{$CALENDAR_FORMAT}",
	button : "{$fields.date_time_end.name}_trigger",
	singleClick : true,
	step : 1,
	weekNumbers: false,
        startWeekday: {$CALENDAR_FDOW|default:'0'},
	comboObject: combo_{$fields.date_time_end.name}
	{rdelim});

	//Call update for first time to round hours and minute values
	combo_{$fields.date_time_end.name}.update(false);

{rdelim}); 
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="time_to">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_TIME_TO">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_TIME_TO' module='Schedulers'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="time" field="time_to"  >
{counter name="panelFieldCount" print=false}

<table border="0" cellpadding="0" cellspacing="0">
<tr valign="middle">
<td nowrap>
<div id="{$fields.time_to.name}_time"></div>
</td>
</tr>
</table>
<input type="hidden" id="{$fields.time_to.name}" name="{$fields.time_to.name}" value="{$fields[$fields.time_to.name].value}">
<script type="text/javascript" src="include/SugarFields/Fields/Time/Time.js"></script>
<script type="text/javascript">
	var combo_{$fields.time_to.name} = new Time("{$fields[$fields.time_to.name].value}", "{$fields.time_to.name}", "{$TIME_FORMAT}", "0");
	//Render the remaining widget fields
	text = combo_{$fields.time_to.name}.html('');
	document.getElementById('{$fields.time_to.name}_time').innerHTML = text;
</script>
<script type="text/javascript">
	function update_{$fields.time_to.name}_available() {ldelim}
		YAHOO.util.Event.onAvailable("{$fields.time_to.name}_time_hours", this.handleOnAvailable, this);
		{rdelim}

	update_{$fields.time_to.name}_available.prototype.handleOnAvailable = function(me) {ldelim}
		//Call update for first time to round hours and minute values
		combo_{$fields.time_to.name}.update();
		{rdelim}

	var obj_{$fields.time_to.name} = new update_{$fields.time_to.name}_available();
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>
</div>
</div>
</div>
</div>
</div>
</div>

<script language="javascript">
    var _form_id = '{$form_id}';
    {literal}
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == '') ? 'EditView' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
    {/literal}
</script>
{assign var='place' value="_FOOTER"} <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('EditView'); {if $isDuplicate}_form.return_id.value=''; {/if}_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && empty($fields.id.value)) && empty($smarty.request.return_id)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && !empty($smarty.request.return_module)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action={$smarty.request.return_action}&module={$smarty.request.return_module|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Schedulers'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {/if}
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Schedulers", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}
<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>
<script type="text/javascript">
YAHOO.util.Event.onContentReady("EditView",
    function () {ldelim} initEditView(document.forms.EditView) {rdelim});
//window.setTimeout(, 100);
window.onbeforeunload = function () {ldelim} return onUnloadEditView(); {rdelim};
// bug 55468 -- IE is too aggressive with onUnload event
if ($.browser.msie) {ldelim}
$(document).ready(function() {ldelim}
    $(".collapseLink,.expandLink").click(function (e) {ldelim} e.preventDefault(); {rdelim});
  {rdelim});
{rdelim}
</script>
{literal}
<script type="text/javascript">

    var selectTab = function(tab) {
        $('#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').hide();
        $('#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').eq(tab).show().addClass('active').addClass('in');
        $('#EditView_tabs div.panel-content div.panel').hide();
        $('#EditView_tabs div.panel-content div.panel.tab-panel-' + tab).show()
    };

    var selectTabOnError = function(tab) {
        selectTab(tab);
        $('#EditView_tabs ul.nav.nav-tabs li').removeClass('active');
        $('#EditView_tabs ul.nav.nav-tabs li a').css('color', '');

        $('#EditView_tabs ul.nav.nav-tabs li').eq(tab).find('a').first().css('color', 'red');
        $('#EditView_tabs ul.nav.nav-tabs li').eq(tab).addClass('active');

    };

    var selectTabOnErrorInputHandle = function(inputHandle) {
        var tab = $(inputHandle).closest('.tab-pane-NOBOOTSTRAPTOGGLER').attr('id').match(/^tab-content-(.*)$/)[1];
        selectTabOnError(tab);
    };


    $(function(){
        $('#EditView_tabs ul.nav.nav-tabs li > a[data-toggle="tab"]').click(function(e){
            if(typeof $(this).parent().find('a').first().attr('id') != 'undefined') {
                var tab = parseInt($(this).parent().find('a').first().attr('id').match(/^tab(?<number>(.)*)$/)[1]);
                selectTab(tab);
            }
        });

        $('a[data-toggle="collapse-edit"]').click(function(e){
            if($(this).hasClass('collapsed')) {
              // Expand panel
                // Change style of .panel-header
                $(this).removeClass('collapsed');
                // Expand .panel-body
                $(this).parents('.panel').find('.panel-body').removeClass('in').addClass('in');
            } else {
              // Collapse panel
                // Change style of .panel-header
                $(this).addClass('collapsed');
                // Collapse .panel-body
                $(this).parents('.panel').find('.panel-body').removeClass('in').removeClass('in');
            }
        });
    });

    </script>
{/literal}{literal}
<script type="text/javascript">
addForm('EditView');addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', true,'Date Created' );
addToValidate('EditView', 'date_modified_date', 'date', true,'Date Modified' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'name', 'varchar', true,'{/literal}{sugar_translate label='LBL_NAME' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'job', 'varchar', true,'{/literal}{sugar_translate label='LBL_JOB' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'job_url', 'varchar', false,'{/literal}{sugar_translate label='LBL_JOB_URL' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'job_function', 'enum', false,'{/literal}{sugar_translate label='LBL_JOB' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'date_time_start_date', 'date', true,'Date & Time Start' );
addToValidate('EditView', 'date_time_end_date', 'date', false,'Date & Time End' );
addToValidate('EditView', 'job_interval', 'varchar', true,'{/literal}{sugar_translate label='LBL_INTERVAL' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'adv_interval', 'bool', false,'{/literal}{sugar_translate label='LBL_ADV_OPTIONS' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'time_from', 'time', false,'{/literal}{sugar_translate label='LBL_TIME_FROM' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'time_to', 'time', false,'{/literal}{sugar_translate label='LBL_TIME_TO' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'last_run_date', 'date', false,'Last Successful Run' );
addToValidate('EditView', 'status', 'enum', false,'{/literal}{sugar_translate label='LBL_STATUS' module='Schedulers' for_js=true}{literal}' );
addToValidate('EditView', 'catch_up', 'bool', false,'{/literal}{sugar_translate label='LBL_CATCH_UP' module='Schedulers' for_js=true}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Schedulers' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Schedulers' for_js=true}{literal}', 'assigned_user_id' );
</script>{/literal}
