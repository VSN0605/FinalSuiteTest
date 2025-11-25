<?php
/* Smarty version 4.5.5, created on 2025-11-25 08:09:20
  from 'C:\wamp64\www\crm_folder\suiteCRM_finalTest\modules\ACLRoles\EditAllBody.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6925643024c8f4_42596237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25cc1c1bdf721d3680c4dd05ad27ad0570c8ff57' => 
    array (
      0 => 'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\modules\\ACLRoles\\EditAllBody.tpl',
      1 => 1763526386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6925643024c8f4_42596237 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\include\\Smarty\\plugins\\function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),1=>array('file'=>'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\include\\Smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
echo '<script'; ?>
 type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file'=>'include/javascript/yui/build/selector/selector-min.js'),$_smarty_tpl);?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="Javascript" type="text/javascript">

function cascadeAccessOption(action,selectEle) {
	var accessOption = selectEle.options[selectEle.selectedIndex].value;
	var accessLabel = selectEle.options[selectEle.selectedIndex].text;
	var nodes = YAHOO.util.Selector.query('.'+action);
	var selectId = '';
	for(i=0; i < nodes.length; i++) {
		selectId = nodes[i].id.substring(8);
//alert('selectId: '+selectId);
		nodes[i].value = accessOption;
		var roleCell = document.getElementById(selectId+'link');
		if(roleCell != undefined) {
			roleCell.innerHTML = accessLabel;
		}
	}
}

<?php echo '</script'; ?>
>
<form method='POST' name='EditView' id='ACLEditView'>
<input type='hidden' name='record' value='<?php echo $_smarty_tpl->tpl_vars['ROLE']->value['id'];?>
'>
<input type='hidden' name='module' value='ACLRoles'>
<input type='hidden' name='action' value='Save'>
<input type='hidden' name='return_record' value='<?php echo $_smarty_tpl->tpl_vars['RETURN']->value['record'];?>
'>
<input type='hidden' name='return_action' value='<?php echo $_smarty_tpl->tpl_vars['RETURN']->value['action'];?>
'>
<input type='hidden' name='return_module' value='<?php echo $_smarty_tpl->tpl_vars['RETURN']->value['module'];?>
'>
<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_KEY'];?>
" class="button" onclick="this.form.action.value='Save';aclviewer.save('ACLEditView');return false;" type="button" name="button" value="  <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
  " id="SAVE_HEADER"> &nbsp;
<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
"   class='button' accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" type='button' name='save' value="  <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
 " class='button' onclick='aclviewer.view("<?php echo $_smarty_tpl->tpl_vars['ROLE']->value['id'];?>
", "All");'>
</p>
<p>
</p>
<TABLE width='100%' class='detail view' border='0' cellpadding=0 cellspacing = 1  >
<TR id="ACLEditView_Access_Header">
<td id="ACLEditView_Access_Header_category"></td>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIES']->value, 'TYPES', false, 'CATEGORY_NAME');
$_smarty_tpl->tpl_vars['TYPES']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CATEGORY_NAME']->value => $_smarty_tpl->tpl_vars['TYPES']->value) {
$_smarty_tpl->tpl_vars['TYPES']->do_else = false;
if ($_smarty_tpl->tpl_vars['CATEGORY_NAME']->value == 'Accounts') {?>

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ACTION_NAMES']->value, 'ACTION_LABEL', false, 'ACTION_NAME');
$_smarty_tpl->tpl_vars['ACTION_LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ACTION_NAME']->value => $_smarty_tpl->tpl_vars['ACTION_LABEL']->value) {
$_smarty_tpl->tpl_vars['ACTION_LABEL']->do_else = false;
?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TYPES']->value, 'ACTIONS');
$_smarty_tpl->tpl_vars['ACTIONS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ACTIONS']->value) {
$_smarty_tpl->tpl_vars['ACTIONS']->do_else = false;
?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ACTIONS']->value, 'ACTION', false, 'ACTION_NAME_ACTIVE');
$_smarty_tpl->tpl_vars['ACTION']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ACTION_NAME_ACTIVE']->value => $_smarty_tpl->tpl_vars['ACTION']->value) {
$_smarty_tpl->tpl_vars['ACTION']->do_else = false;
?>
			<?php if ($_smarty_tpl->tpl_vars['ACTION_NAME']->value == $_smarty_tpl->tpl_vars['ACTION_NAME_ACTIVE']->value) {?>

			<td align='center'>
				<div align='center' id="<?php echo $_smarty_tpl->tpl_vars['ACTION_NAME']->value;?>
link" onclick="aclviewer.toggleDisplay('<?php echo $_smarty_tpl->tpl_vars['ACTION_NAME']->value;?>
')"><b><?php echo $_smarty_tpl->tpl_vars['ACTION_LABEL']->value;?>
</b></div>
				<div  style="all: initial; display: none; text-align: center;" id="<?php echo $_smarty_tpl->tpl_vars['ACTION_NAME']->value;?>
">
					<select name='act_guid<?php echo $_smarty_tpl->tpl_vars['ACTION_NAME']->value;?>
' id='act_guid<?php echo $_smarty_tpl->tpl_vars['ACTION_NAME']->value;?>
' onblur="cascadeAccessOption('<?php echo $_smarty_tpl->tpl_vars['ACTION_NAME']->value;?>
',this); aclviewer.toggleDisplay('<?php echo $_smarty_tpl->tpl_vars['ACTION_NAME']->value;?>
');" >
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['ACTION']->value['accessOptions'],'selected'=>$_smarty_tpl->tpl_vars['ACTION']->value['aclaccess']),$_smarty_tpl);?>

					</select>
				</div>
			</td>
						<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if ($_smarty_tpl->tpl_vars['ACTION_LABEL']->do_else) {
?>

          <td colspan="2">&nbsp;</td>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</TR>


	
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIES']->value, 'TYPES', false, 'CATEGORY_NAME');
$_smarty_tpl->tpl_vars['TYPES']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CATEGORY_NAME']->value => $_smarty_tpl->tpl_vars['TYPES']->value) {
$_smarty_tpl->tpl_vars['TYPES']->do_else = false;
?>


	<?php if ($_smarty_tpl->tpl_vars['APP_LIST']->value['moduleList'][$_smarty_tpl->tpl_vars['CATEGORY_NAME']->value] != 'Users') {?>

	<TR id="ACLEditView_Access_<?php echo $_smarty_tpl->tpl_vars['CATEGORY_NAME']->value;?>
">
	<td nowrap width='1%' id="ACLEditView_Access_<?php echo $_smarty_tpl->tpl_vars['CATEGORY_NAME']->value;?>
_category"><b>
	<?php if ($_smarty_tpl->tpl_vars['APP_LIST']->value['moduleList'][$_smarty_tpl->tpl_vars['CATEGORY_NAME']->value] == 'Users') {?>
	   <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_USER_NAME_FOR_ROLE'];?>

	<?php } elseif (!empty($_smarty_tpl->tpl_vars['APP_LIST']->value['moduleList'][$_smarty_tpl->tpl_vars['CATEGORY_NAME']->value])) {?>
	   <?php echo $_smarty_tpl->tpl_vars['APP_LIST']->value['moduleList'][$_smarty_tpl->tpl_vars['CATEGORY_NAME']->value];?>

	<?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['CATEGORY_NAME']->value;?>

	<?php }?>
	</b></td>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ACTION_NAMES']->value, 'ACTION_LABEL', false, 'ACTION_NAME');
$_smarty_tpl->tpl_vars['ACTION_LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ACTION_NAME']->value => $_smarty_tpl->tpl_vars['ACTION_LABEL']->value) {
$_smarty_tpl->tpl_vars['ACTION_LABEL']->do_else = false;
?>
		<?php $_smarty_tpl->_assignInScope('ACTION_FIND', 'false');?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TYPES']->value, 'ACTIONS');
$_smarty_tpl->tpl_vars['ACTIONS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ACTIONS']->value) {
$_smarty_tpl->tpl_vars['ACTIONS']->do_else = false;
?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ACTIONS']->value, 'ACTION', false, 'ACTION_NAME_ACTIVE');
$_smarty_tpl->tpl_vars['ACTION']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ACTION_NAME_ACTIVE']->value => $_smarty_tpl->tpl_vars['ACTION']->value) {
$_smarty_tpl->tpl_vars['ACTION']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['ACTION_NAME']->value == $_smarty_tpl->tpl_vars['ACTION_NAME_ACTIVE']->value) {?>
					<td nowrap width='<?php echo $_smarty_tpl->tpl_vars['TDWIDTH']->value;?>
%' style="text-align: center;" id="ACLEditView_Access_<?php echo $_smarty_tpl->tpl_vars['CATEGORY_NAME']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['ACTION_NAME']->value;?>
">
					<div  style="display: none" id="<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
">
					<?php if ($_smarty_tpl->tpl_vars['APP_LIST']->value['moduleList'][$_smarty_tpl->tpl_vars['CATEGORY_NAME']->value] == $_smarty_tpl->tpl_vars['APP_LIST']->value['moduleList']['Users'] && $_smarty_tpl->tpl_vars['ACTION_LABEL']->value != $_smarty_tpl->tpl_vars['MOD']->value['LBL_ACTION_ADMIN']) {?>
					<select DISABLED name='act_guid<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
' id = 'act_guid<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
' onblur="document.getElementById('<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
link').innerHTML=this.options[this.selectedIndex].text; aclviewer.toggleDisplay('<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
');" >
                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['ACTION']->value['accessOptions'],'selected'=>$_smarty_tpl->tpl_vars['ACTION']->value['aclaccess']),$_smarty_tpl);?>

                    </select>
					<?php } else { ?>
                        <select class='<?php echo $_smarty_tpl->tpl_vars['ACTION_NAME']->value;?>
' style="all: initial" name='act_guid<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
' id = 'act_guid<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
' onblur="document.getElementById('<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
link').innerHTML=this.options[this.selectedIndex].text; aclviewer.toggleDisplay('<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
');" >
 										<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['ACTION']->value['accessOptions'],'selected'=>$_smarty_tpl->tpl_vars['ACTION']->value['aclaccess']),$_smarty_tpl);?>

					</select>
					<?php }?>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['ACTION']->value['accessLabel'] == 'dev' || $_smarty_tpl->tpl_vars['ACTION']->value['accessLabel'] == 'admin_dev') {?>
					   <div class="aclAdmin"  id="<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
link" onclick="aclviewer.toggleDisplay('<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
')"><?php echo $_smarty_tpl->tpl_vars['ACTION']->value['accessName'];?>
</div>
					<?php } else { ?>
                       <div class="acl<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['accessName'];?>
"  id="<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
link" onclick="aclviewer.toggleDisplay('<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
')"><?php echo $_smarty_tpl->tpl_vars['ACTION']->value['accessName'];?>
</div>
                    <?php }?>
					</td>
					<?php $_smarty_tpl->_assignInScope('ACTION_FIND', 'true');?>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php if ($_smarty_tpl->tpl_vars['ACTION_FIND']->value == 'false') {?>
			<td nowrap width='<?php echo $_smarty_tpl->tpl_vars['TDWIDTH']->value;?>
%' style="text-align: center;" id="ACLEditView_Access_<?php echo $_smarty_tpl->tpl_vars['CATEGORY_NAME']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['ACTION_NAME']->value;?>
">
			<div><font color='red'>N/A</font></div>
			</td>
		<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</TR>


    <?php }?>


<?php
}
if ($_smarty_tpl->tpl_vars['TYPES']->do_else) {
?>
    <tr> <td colspan="2">No Actions Defined</td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</TABLE>
<div style="padding-top:10px;">
&nbsp;<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
" class="button" onclick="this.form.action.value='Save';aclviewer.save('ACLEditView');return false;" type="button" name="button" value="  <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
  " id="SAVE_FOOTER"> &nbsp;
<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
"   class='button' type='button' name='save' value="  <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
 " class='button' onclick='aclviewer.view("<?php echo $_smarty_tpl->tpl_vars['ROLE']->value['id'];?>
", "All");'>
</div>
</form>
<?php }
}
