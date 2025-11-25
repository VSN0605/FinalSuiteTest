<?php
/* Smarty version 4.5.5, created on 2025-11-25 08:09:10
  from 'C:\wamp64\www\crm_folder\suiteCRM_finalTest\include\SugarFields\Fields\Time\EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69256426715677_69393912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43bdea395b40b1fc1bb10e626325a31bf0f6fd42' => 
    array (
      0 => 'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\include\\SugarFields\\Fields\\Time\\EditView.tpl',
      1 => 1763526429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69256426715677_69393912 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\include\\Smarty\\plugins\\function.sugarvar.php','function'=>'smarty_function_sugarvar',),));
?>
{*
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

*}
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'idname', 'idname', null);
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
$_smarty_tpl->_assignInScope('idname', $_smarty_tpl->tpl_vars['displayParams']->value['idName']);
}?>

<?php $_smarty_tpl->_assignInScope('flag_field', ($_smarty_tpl->tpl_vars['vardef']->value['name']).('_flag'));?>

<table border="0" cellpadding="0" cellspacing="0">
	<tr valign="middle">
		<td nowrap>
			<div id="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_time"></div>
			<?php if ($_smarty_tpl->tpl_vars['displayParams']->value['showFormats']) {?>
			<span class="timeFormat">{$TIME_FORMAT}</span>
			<?php }?>
		</td>
	</tr>
</table>
<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
" value="{$fields[<?php echo smarty_function_sugarvar(array('key'=>'name','stringFormat'=>true),$_smarty_tpl);?>
].value}">
<?php echo '<script'; ?>
 type="text/javascript" src="include/SugarFields/Fields/Time/Time.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	var combo_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
 = new Time("{$fields[<?php echo smarty_function_sugarvar(array('key'=>'name','stringFormat'=>true),$_smarty_tpl);?>
].value}", "<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
", "{$TIME_FORMAT}", "<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
");
	//Render the remaining widget fields
	text = combo_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
.html('<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['updateCallback'];?>
');
	document.getElementById('<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_time').innerHTML = text;
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
	function update_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_available() {ldelim}
		YAHOO.util.Event.onAvailable("<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_time_hours", this.handleOnAvailable, this);
		{rdelim}

	update_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_available.prototype.handleOnAvailable = function(me) {ldelim}
		//Call update for first time to round hours and minute values
		combo_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
.update();
		{rdelim}

	var obj_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
 = new update_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_available();
<?php echo '</script'; ?>
><?php }
}
