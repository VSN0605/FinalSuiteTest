<?php
/* Smarty version 4.5.5, created on 2025-11-25 08:09:12
  from 'C:\wamp64\www\crm_folder\suiteCRM_finalTest\cache\themes\SuiteP\modules\Schedulers\EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_692564284c5338_48020639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '060665226a85581ddc207191d2d26fccecbc1cb2' => 
    array (
      0 => 'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\cache\\themes\\SuiteP\\modules\\Schedulers\\EditView.tpl',
      1 => 1764058151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_692564284c5338_48020639 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\include\\Smarty\\plugins\\modifier.escape.php','function'=>'smarty_modifier_escape',),1=>array('file'=>'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\include\\Smarty\\plugins\\function.sugar_include.php','function'=>'smarty_function_sugar_include',),2=>array('file'=>'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),3=>array('file'=>'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\include\\Smarty\\plugins\\block.minify.php','function'=>'smarty_block_minify',),4=>array('file'=>'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\include\\Smarty\\plugins\\modifier.strip_semicolon.php','function'=>'smarty_modifier_strip_semicolon',),5=>array('file'=>'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\include\\Smarty\\plugins\\function.counter.php','function'=>'smarty_function_counter',),6=>array('file'=>'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\include\\Smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),7=>array('file'=>'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\include\\Smarty\\plugins\\function.sugar_help.php','function'=>'smarty_function_sugar_help',),8=>array('file'=>'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\include\\Smarty\\plugins\\function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),));
?>


<?php echo '<script'; ?>
>
    
    $(document).ready(function(){
	    $("ul.clickMenu").each(function(index, node){
	        $(node).sugarActionMenu();
	    });

        if($('.edit-view-pagination').children().length == 0) $('.saveAndContinue').remove();
    });
    
<?php echo '</script'; ?>
>
<div class="clear"></div>
<form action="index.php" method="POST" name="<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['enctype']->value;?>
>
<div class="edit-view-pagination-mobile-container">
<div class="edit-view-pagination edit-view-mobile-pagination">
<?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

</div>
</div>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
">
<?php if ((isset($_REQUEST['isDuplicate'])) && $_REQUEST['isDuplicate'] == "true") {?>
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
">
<?php } else { ?>
<input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
">
<?php }?>
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="<?php echo $_REQUEST['return_module'];?>
">
<input type="hidden" name="return_action" value="<?php echo $_REQUEST['return_action'];?>
">
<input type="hidden" name="return_id" value="<?php echo $_REQUEST['return_id'];?>
">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
<?php if ((!empty($_REQUEST['return_module']) || !empty($_REQUEST['relate_to'])) && !((isset($_REQUEST['isDuplicate'])) && $_REQUEST['isDuplicate'] == "true")) {?>
<input type="hidden" name="relate_to" value="<?php if ($_REQUEST['return_relationship']) {
echo $_REQUEST['return_relationship'];
} elseif ($_REQUEST['relate_to'] && empty($_REQUEST['from_dcmenu'])) {
echo $_REQUEST['relate_to'];
} elseif (empty($_smarty_tpl->tpl_vars['isDCForm']->value) && empty($_REQUEST['from_dcmenu'])) {
echo $_REQUEST['return_module'];
}?>">
<input type="hidden" name="relate_id" value="<?php echo $_REQUEST['return_id'];?>
">
<?php }?>
<input type="hidden" name="offset" value="<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
">
<?php $_smarty_tpl->_assignInScope('place', "_HEADER");?> <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
<?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("save")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_KEY'];?>
" class="button primary" onclick="var _form = document.getElementById('EditView'); <?php if ($_smarty_tpl->tpl_vars['isDuplicate']->value) {?>_form.return_id.value=''; <?php }?>_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
" id="SAVE"><?php }?> 
<?php if (!empty($_REQUEST['return_action']) && ($_REQUEST['return_action'] == "DetailView" && !empty($_REQUEST['return_id']))) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
&record=<?php echo smarty_modifier_escape($_REQUEST['return_id'],"url");?>
'); return false;" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" type="button" id="CANCEL"> <?php } elseif (!empty($_REQUEST['return_action']) && ($_REQUEST['return_action'] == "DetailView" && !empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']))) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php } elseif (!empty($_REQUEST['return_action']) && ($_REQUEST['return_action'] == "DetailView" && empty($_smarty_tpl->tpl_vars['fields']->value['id']['value'])) && empty($_REQUEST['return_id'])) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php } elseif (!empty($_REQUEST['return_action']) && !empty($_REQUEST['return_module'])) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=<?php echo $_REQUEST['return_action'];?>
&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php } elseif (empty($_REQUEST['return_action']) || empty($_REQUEST['return_id']) && !empty($_smarty_tpl->tpl_vars['fields']->value['id']['value'])) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Schedulers'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php } else { ?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
&record=<?php echo smarty_modifier_escape($_REQUEST['return_id'],"url");?>
'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php }
if ($_smarty_tpl->tpl_vars['showVCRControl']->value) {?>
<button type="button" id="save_and_continue" class="button saveAndContinue" title="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_SAVE_AND_CONTINUE'];?>
" onClick="SUGAR.saveAndContinue(this);">
<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_AND_CONTINUE'];?>

</button>
<?php }
if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("detail")) {
if (!empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']) && $_smarty_tpl->tpl_vars['isAuditEnabled']->value) {?><input id="btn_view_change_log" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
&module_name=Schedulers", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
"><?php }
}?>
</div>
</td>
<td align='right' class="edit-view-pagination-desktop-container">
<div class="edit-view-pagination edit-view-pagination-desktop">
<?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

</div>
</td>
</tr>
</table>
<?php echo smarty_function_sugar_include(array('include'=>$_smarty_tpl->tpl_vars['includes']->value),$_smarty_tpl);?>

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
<?php echo smarty_function_sugar_translate(array('label'=>'DEFAULT','module'=>'Schedulers'),$_smarty_tpl);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="DEFAULT">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="name">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_NAME">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="name"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['name']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['name']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['name']['name'];?>
' size='30'
maxlength='255'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="status">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_STATUS">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_STATUS','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="status"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<select name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
"
id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
"
title=''              
>
<?php if ((isset($_smarty_tpl->tpl_vars['fields']->value['status']['value']))) {
echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['status']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['status']['value']),$_smarty_tpl);?>

<?php } else {
echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['status']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['status']['default']),$_smarty_tpl);?>

<?php }?>
</select>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="job_function">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_JOB">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_JOB','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="job_function"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<select name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_function']['name'];?>
"
id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_function']['name'];?>
"
title=''              
>
<?php if ((isset($_smarty_tpl->tpl_vars['fields']->value['job_function']['value']))) {
echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['job_function']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['job_function']['value']),$_smarty_tpl);?>

<?php } else {
echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['job_function']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['job_function']['default']),$_smarty_tpl);?>

<?php }?>
</select>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="job_url">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_JOB_URL">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_JOB_URL','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="job_url"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['job_url']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['job_url']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['job_url']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_url']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_url']['name'];?>
' size='30'
maxlength='255'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="adv_interval">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_ADV_OPTIONS">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ADV_OPTIONS','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="bool" field="adv_interval" colspan='3' >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strval($_smarty_tpl->tpl_vars['fields']->value['adv_interval']['value']) == "1" || strval($_smarty_tpl->tpl_vars['fields']->value['adv_interval']['value']) == "yes" || strval($_smarty_tpl->tpl_vars['fields']->value['adv_interval']['value']) == "on") {?> 
<?php $_smarty_tpl->_assignInScope('checked', 'checked="checked"');
} else {
$_smarty_tpl->_assignInScope('checked', '');
}?>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['adv_interval']['name'];?>
" value="0"> 
<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['adv_interval']['name'];?>
" 
name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['adv_interval']['name'];?>
" 
value="1" title='' tabindex="0" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
 >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="job_interval">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_INTERVAL">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_INTERVAL','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="job_interval" colspan='3' >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<div id="job_interval_advanced">
<?php echo '<script'; ?>
>
					var adv_interval = <?php echo $_smarty_tpl->tpl_vars['adv_interval']->value;?>
;
				<?php echo '</script'; ?>
>
<table cellpadding="0" cellspacing="0">
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MINS'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HOURS'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DAY_OF_MONTH'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MONTHS'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DAY_OF_WEEK'];?>
</td>
</tr><tr>
<td><input tabindex="0"  name="mins" maxlength="25" type="text" size="3" value="<?php echo $_smarty_tpl->tpl_vars['mins']->value;?>
"></td>
<td><input tabindex="0"  name="hours" maxlength="25" type="text" size="3" value="<?php echo $_smarty_tpl->tpl_vars['hours']->value;?>
"></td>
<td><input tabindex="0"  name="day_of_month" maxlength="25" type="text" size="3" value="<?php echo $_smarty_tpl->tpl_vars['day_of_month']->value;?>
"></td>
<td><input tabindex="0"  name="months" maxlength="25" type="text" size="3" value="<?php echo $_smarty_tpl->tpl_vars['months']->value;?>
"></td>
<td><input tabindex="0"  name="day_of_week" maxlength="25" type="text" size="3" value="<?php echo $_smarty_tpl->tpl_vars['day_of_week']->value;?>
"></td>
</tr><tr>
<td colspan="5">
<em><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CRONTAB_EXAMPLES'];?>
</em>
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

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_INTERVAL','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="job_interval" colspan='3' >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<div id="job_interval_basic">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td valign="top" width="25%">
&nbsp;<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EVERY'];?>
&nbsp;
<select tabindex="0"  name="basic_interval"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['basic_intervals']->value,'selected'=>$_smarty_tpl->tpl_vars['basic_interval']->value),$_smarty_tpl);?>
</select>&nbsp;
<select tabindex="0"  name="basic_period"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['basic_periods']->value,'selected'=>$_smarty_tpl->tpl_vars['basic_period']->value),$_smarty_tpl);?>
</select>
</td>
<td valign="top" width="25%">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td><span><input tabindex="0"  type="checkbox" name="all" value="true" id="all" <?php echo $_smarty_tpl->tpl_vars['ALL']->value;?>
 onClick="allDays();">&nbsp;<i><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_ALL'];?>
</i></span></td>
</tr>
<tr>
<td><span><input tabindex="0"  type="checkbox" name="mon" value="true" id="mon" <?php echo $_smarty_tpl->tpl_vars['MON']->value;?>
>&nbsp;<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MON'];?>
</span></td>
</tr>
<tr>
<td><span><input tabindex="0"  type="checkbox" name="tue" value="true" id="tue"  <?php echo $_smarty_tpl->tpl_vars['TUE']->value;?>
>&nbsp;<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TUE'];?>
</span></td>
</tr>
<tr>
<td><span><input tabindex="0"  type="checkbox" name="wed" value="true" id="wed"  <?php echo $_smarty_tpl->tpl_vars['WED']->value;?>
>&nbsp;<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WED'];?>
</span></td>
</tr>
</table>
</td>
<td valign="top" width="25%">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td><span><input tabindex="0"  type="checkbox" name="thu" value="true" id="thu"  <?php echo $_smarty_tpl->tpl_vars['THU']->value;?>
>&nbsp;<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_THU'];?>
</span></td>
</tr>
<tr>
<td><span><input tabindex="0"  type="checkbox" name="fri" value="true" id="fri"  <?php echo $_smarty_tpl->tpl_vars['FRI']->value;?>
>&nbsp;<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_FRI'];?>
</span></td>
</tr>
<tr>
<td><span><input tabindex="0"  type="checkbox" name="sat" value="true" id="sat"  <?php echo $_smarty_tpl->tpl_vars['SAT']->value;?>
>&nbsp;<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SAT'];?>
</span></td>
</tr>
<tr>
<td><span><input tabindex="0"  type="checkbox" name="sun" value="true" id="sun"  <?php echo $_smarty_tpl->tpl_vars['SUN']->value;?>
>&nbsp;<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SUN'];?>
</span></td>
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
<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ADV_OPTIONS','module'=>'Schedulers'),$_smarty_tpl);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_0" data-id="LBL_ADV_OPTIONS">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="catch_up">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_CATCH_UP">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_CATCH_UP','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="bool" field="catch_up" colspan='3' >
<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_CATCH_UP_WARNING']),$_smarty_tpl);?>

<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strval($_smarty_tpl->tpl_vars['fields']->value['catch_up']['value']) == "1" || strval($_smarty_tpl->tpl_vars['fields']->value['catch_up']['value']) == "yes" || strval($_smarty_tpl->tpl_vars['fields']->value['catch_up']['value']) == "on") {?> 
<?php $_smarty_tpl->_assignInScope('checked', 'checked="checked"');
} else {
$_smarty_tpl->_assignInScope('checked', '');
}?>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['catch_up']['name'];?>
" value="0"> 
<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['catch_up']['name'];?>
" 
name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['catch_up']['name'];?>
" 
value="1" title='' tabindex="0" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
 >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="date_time_start">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DATE_TIME_START">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DATE_TIME_START','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="datetimecombo" field="date_time_start"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<table border="0" cellpadding="0" cellspacing="0" class="dateTime">
<tr valign="middle">
<td nowrap class="dateTimeComboColumn">
<input autocomplete="off" type="text" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
_date" class="datetimecombo_date" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name']]['value'];?>
" size="11" maxlength="10" title='' tabindex="0" onblur="combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
.update();" onchange="combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
.update(); "    >
<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar"  alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ENTER_DATE'];?>
"></span></button>
</td>
<td nowrap class="dateTimeComboColumn">
<div id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
_time_section" class="datetimecombo_time_section"></div>
</td>
</tr>
</table>
<input type="hidden" class="DateTimeCombo" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name']]['value'];?>
">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>"include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
var combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
 = new Datetimecombo("<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name']]['value'];?>
", "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
", "<?php echo $_smarty_tpl->tpl_vars['TIME_FORMAT']->value;?>
", "0", '', false, true);
//Render the remaining widget fields
text = combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
.html('');
document.getElementById('<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
_time_section').innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
eval(combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
.jsscript(''));

addToValidateBinaryDependency('<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
',"<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
_hours", 'alpha', false, "<?php echo $_smarty_tpl->tpl_vars['APP']->value['ERR_MISSING_REQUIRED_FIELDS'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_HOURS'];?>
" ,"<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
_date");
addToValidateBinaryDependency('<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
', "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
_minutes", 'alpha', false, "<?php echo $_smarty_tpl->tpl_vars['APP']->value['ERR_MISSING_REQUIRED_FIELDS'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MINUTES'];?>
" ,"<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
_date");
addToValidateBinaryDependency('<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
', "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
_meridiem", 'alpha', false, "<?php echo $_smarty_tpl->tpl_vars['APP']->value['ERR_MISSING_REQUIRED_FIELDS'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MERIDIEM'];?>
","<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
_date");

YAHOO.util.Event.onDOMReady(function()
{

	Calendar.setup ({
	onClose : update_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
,
	inputField : "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
_date",
    form : "EditView",
	ifFormat : "<?php echo $_smarty_tpl->tpl_vars['CALENDAR_FORMAT']->value;?>
",
	daFormat : "<?php echo $_smarty_tpl->tpl_vars['CALENDAR_FORMAT']->value;?>
",
	button : "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
_trigger",
	singleClick : true,
	step : 1,
	weekNumbers: false,
        startWeekday: <?php echo (($tmp = $_smarty_tpl->tpl_vars['CALENDAR_FDOW']->value ?? null)===null||$tmp==='' ? '0' ?? null : $tmp);?>
,
	comboObject: combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>

	});

	//Call update for first time to round hours and minute values
	combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
.update(false);

}); 
<?php echo '</script'; ?>
>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="time_from">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_TIME_FROM">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_TIME_FROM','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="time" field="time_from"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<table border="0" cellpadding="0" cellspacing="0">
<tr valign="middle">
<td nowrap>
<div id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_from']['name'];?>
_time"></div>
</td>
</tr>
</table>
<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_from']['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_from']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['fields']->value['time_from']['name']]['value'];?>
">
<?php echo '<script'; ?>
 type="text/javascript" src="include/SugarFields/Fields/Time/Time.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	var combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_from']['name'];?>
 = new Time("<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['fields']->value['time_from']['name']]['value'];?>
", "<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_from']['name'];?>
", "<?php echo $_smarty_tpl->tpl_vars['TIME_FORMAT']->value;?>
", "0");
	//Render the remaining widget fields
	text = combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_from']['name'];?>
.html('');
	document.getElementById('<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_from']['name'];?>
_time').innerHTML = text;
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	function update_<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_from']['name'];?>
_available() {
		YAHOO.util.Event.onAvailable("<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_from']['name'];?>
_time_hours", this.handleOnAvailable, this);
		}

	update_<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_from']['name'];?>
_available.prototype.handleOnAvailable = function(me) {
		//Call update for first time to round hours and minute values
		combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_from']['name'];?>
.update();
		}

	var obj_<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_from']['name'];?>
 = new update_<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_from']['name'];?>
_available();
<?php echo '</script'; ?>
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="date_time_end">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DATE_TIME_END">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DATE_TIME_END','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="datetimecombo" field="date_time_end"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<table border="0" cellpadding="0" cellspacing="0" class="dateTime">
<tr valign="middle">
<td nowrap class="dateTimeComboColumn">
<input autocomplete="off" type="text" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
_date" class="datetimecombo_date" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name']]['value'];?>
" size="11" maxlength="10" title='' tabindex="0" onblur="combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
.update();" onchange="combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
.update(); "    >
<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar"  alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ENTER_DATE'];?>
"></span></button>
</td>
<td nowrap class="dateTimeComboColumn">
<div id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
_time_section" class="datetimecombo_time_section"></div>
</td>
</tr>
</table>
<input type="hidden" class="DateTimeCombo" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name']]['value'];?>
">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>"include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
var combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
 = new Datetimecombo("<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name']]['value'];?>
", "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
", "<?php echo $_smarty_tpl->tpl_vars['TIME_FORMAT']->value;?>
", "0", '', false, true);
//Render the remaining widget fields
text = combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
.html('');
document.getElementById('<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
_time_section').innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
eval(combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
.jsscript(''));

addToValidateBinaryDependency('<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
',"<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
_hours", 'alpha', false, "<?php echo $_smarty_tpl->tpl_vars['APP']->value['ERR_MISSING_REQUIRED_FIELDS'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_HOURS'];?>
" ,"<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
_date");
addToValidateBinaryDependency('<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
', "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
_minutes", 'alpha', false, "<?php echo $_smarty_tpl->tpl_vars['APP']->value['ERR_MISSING_REQUIRED_FIELDS'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MINUTES'];?>
" ,"<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
_date");
addToValidateBinaryDependency('<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
', "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
_meridiem", 'alpha', false, "<?php echo $_smarty_tpl->tpl_vars['APP']->value['ERR_MISSING_REQUIRED_FIELDS'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MERIDIEM'];?>
","<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
_date");

YAHOO.util.Event.onDOMReady(function()
{

	Calendar.setup ({
	onClose : update_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
,
	inputField : "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
_date",
    form : "EditView",
	ifFormat : "<?php echo $_smarty_tpl->tpl_vars['CALENDAR_FORMAT']->value;?>
",
	daFormat : "<?php echo $_smarty_tpl->tpl_vars['CALENDAR_FORMAT']->value;?>
",
	button : "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
_trigger",
	singleClick : true,
	step : 1,
	weekNumbers: false,
        startWeekday: <?php echo (($tmp = $_smarty_tpl->tpl_vars['CALENDAR_FDOW']->value ?? null)===null||$tmp==='' ? '0' ?? null : $tmp);?>
,
	comboObject: combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>

	});

	//Call update for first time to round hours and minute values
	combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
.update(false);

}); 
<?php echo '</script'; ?>
>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="time_to">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_TIME_TO">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_TIME_TO','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="time" field="time_to"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<table border="0" cellpadding="0" cellspacing="0">
<tr valign="middle">
<td nowrap>
<div id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_to']['name'];?>
_time"></div>
</td>
</tr>
</table>
<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_to']['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_to']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['fields']->value['time_to']['name']]['value'];?>
">
<?php echo '<script'; ?>
 type="text/javascript" src="include/SugarFields/Fields/Time/Time.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	var combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_to']['name'];?>
 = new Time("<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['fields']->value['time_to']['name']]['value'];?>
", "<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_to']['name'];?>
", "<?php echo $_smarty_tpl->tpl_vars['TIME_FORMAT']->value;?>
", "0");
	//Render the remaining widget fields
	text = combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_to']['name'];?>
.html('');
	document.getElementById('<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_to']['name'];?>
_time').innerHTML = text;
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	function update_<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_to']['name'];?>
_available() {
		YAHOO.util.Event.onAvailable("<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_to']['name'];?>
_time_hours", this.handleOnAvailable, this);
		}

	update_<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_to']['name'];?>
_available.prototype.handleOnAvailable = function(me) {
		//Call update for first time to round hours and minute values
		combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_to']['name'];?>
.update();
		}

	var obj_<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_to']['name'];?>
 = new update_<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_to']['name'];?>
_available();
<?php echo '</script'; ?>
>
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

<?php echo '<script'; ?>
 language="javascript">
    var _form_id = '<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
';
    
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == '') ? 'EditView' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
    
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_assignInScope('place', "_FOOTER");?> <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
<?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("save")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_KEY'];?>
" class="button primary" onclick="var _form = document.getElementById('EditView'); <?php if ($_smarty_tpl->tpl_vars['isDuplicate']->value) {?>_form.return_id.value=''; <?php }?>_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
" id="SAVE"><?php }?> 
<?php if (!empty($_REQUEST['return_action']) && ($_REQUEST['return_action'] == "DetailView" && !empty($_REQUEST['return_id']))) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
&record=<?php echo smarty_modifier_escape($_REQUEST['return_id'],"url");?>
'); return false;" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" type="button" id="CANCEL"> <?php } elseif (!empty($_REQUEST['return_action']) && ($_REQUEST['return_action'] == "DetailView" && !empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']))) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php } elseif (!empty($_REQUEST['return_action']) && ($_REQUEST['return_action'] == "DetailView" && empty($_smarty_tpl->tpl_vars['fields']->value['id']['value'])) && empty($_REQUEST['return_id'])) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php } elseif (!empty($_REQUEST['return_action']) && !empty($_REQUEST['return_module'])) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=<?php echo $_REQUEST['return_action'];?>
&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php } elseif (empty($_REQUEST['return_action']) || empty($_REQUEST['return_id']) && !empty($_smarty_tpl->tpl_vars['fields']->value['id']['value'])) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Schedulers'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php } else { ?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
&record=<?php echo smarty_modifier_escape($_REQUEST['return_id'],"url");?>
'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php }
if ($_smarty_tpl->tpl_vars['showVCRControl']->value) {?>
<button type="button" id="save_and_continue" class="button saveAndContinue" title="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_SAVE_AND_CONTINUE'];?>
" onClick="SUGAR.saveAndContinue(this);">
<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_AND_CONTINUE'];?>

</button>
<?php }
if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("detail")) {
if (!empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']) && $_smarty_tpl->tpl_vars['isAuditEnabled']->value) {?><input id="btn_view_change_log" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
&module_name=Schedulers", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
"><?php }
}?>
</div>
</form>
<?php echo $_smarty_tpl->tpl_vars['set_focus_block']->value;?>

<?php echo '<script'; ?>
>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){SUGAR.util.buildAccessKeyLabels();});
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
YAHOO.util.Event.onContentReady("EditView",
    function () { initEditView(document.forms.EditView) });
//window.setTimeout(, 100);
window.onbeforeunload = function () { return onUnloadEditView(); };
// bug 55468 -- IE is too aggressive with onUnload event
if ($.browser.msie) {
$(document).ready(function() {
    $(".collapseLink,.expandLink").click(function (e) { e.preventDefault(); });
  });
}
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">

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

    <?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
addForm('EditView');addToValidate('EditView', 'deleted', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DELETED','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'date_entered_date', 'date', true,'Date Created' );
addToValidate('EditView', 'date_modified_date', 'date', true,'Date Modified' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CREATED','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'created_by_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CREATED','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MODIFIED','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MODIFIED_NAME','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'name', 'varchar', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'job', 'varchar', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_JOB','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'job_url', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_JOB_URL','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'job_function', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_JOB','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'date_time_start_date', 'date', true,'Date & Time Start' );
addToValidate('EditView', 'date_time_end_date', 'date', false,'Date & Time End' );
addToValidate('EditView', 'job_interval', 'varchar', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_INTERVAL','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'adv_interval', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ADV_OPTIONS','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'time_from', 'time', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TIME_FROM','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'time_to', 'time', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TIME_TO','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'last_run_date', 'date', false,'Last Successful Run' );
addToValidate('EditView', 'status', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_STATUS','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'catch_up', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CATCH_UP','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'<?php echo smarty_function_sugar_translate(array('label'=>'ERR_SQS_NO_MATCH_FIELD','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
: <?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
', 'assigned_user_id' );
<?php echo '</script'; ?>
>
<?php }
}
