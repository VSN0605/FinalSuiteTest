<?php
/* Smarty version 4.5.5, created on 2025-12-02 06:07:01
  from 'C:\wamp64\www\crm_folder\suiteCRM_finalTest\cache\themes\SuiteP\modules\Vehicle\EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_692e82057f5640_19444547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3777a0964f203a35a1a11233591803f7725c7722' => 
    array (
      0 => 'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\cache\\themes\\SuiteP\\modules\\Vehicle\\EditView.tpl',
      1 => 1764655621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_692e82057f5640_19444547 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\include\\Smarty\\plugins\\modifier.escape.php','function'=>'smarty_modifier_escape',),1=>array('file'=>'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\include\\Smarty\\plugins\\function.sugar_include.php','function'=>'smarty_function_sugar_include',),2=>array('file'=>'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),3=>array('file'=>'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\include\\Smarty\\plugins\\block.minify.php','function'=>'smarty_block_minify',),4=>array('file'=>'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\include\\Smarty\\plugins\\modifier.strip_semicolon.php','function'=>'smarty_modifier_strip_semicolon',),5=>array('file'=>'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\include\\Smarty\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
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
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Vehicle'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
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
&module_name=Vehicle", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
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
<?php echo smarty_function_sugar_translate(array('label'=>'DEFAULT','module'=>'Vehicle'),$_smarty_tpl);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="DEFAULT">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="name">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_NAME">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'Vehicle'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="name" colspan='3' >
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
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="model">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_MODEL">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_MODEL','module'=>'Vehicle'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="model" colspan='3' >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['model']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['model']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['model']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['model']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['model']['name'];?>
' size='30'
maxlength='100'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="color">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_COLOR">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_COLOR','module'=>'Vehicle'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="color" colspan='3' >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['color']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['color']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['color']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['color']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['color']['name'];?>
' size='30'
maxlength='20'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="">
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
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Vehicle'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
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
&module_name=Vehicle", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
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
addForm('EditView');addToValidate('EditView', 'deleted', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DELETED','module'=>'Vehicle','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'name', 'varchar', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'Vehicle','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'model', 'varchar', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MODEL','module'=>'Vehicle','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'color', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_COLOR','module'=>'Vehicle','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Date Modified' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'<?php echo smarty_function_sugar_translate(array('label'=>'ERR_SQS_NO_MATCH_FIELD','module'=>'Vehicle','for_js'=>true),$_smarty_tpl);?>
: <?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO','module'=>'Vehicle','for_js'=>true),$_smarty_tpl);?>
', 'assigned_user_id' );
<?php echo '</script'; ?>
>
<?php }
}
