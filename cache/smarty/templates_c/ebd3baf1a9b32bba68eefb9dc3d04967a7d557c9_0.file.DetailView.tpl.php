<?php
/* Smarty version 4.5.5, created on 2025-11-25 08:09:19
  from 'C:\wamp64\www\crm_folder\suiteCRM_finalTest\modules\ACLRoles\DetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6925642fa56aa5_83463206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebd3baf1a9b32bba68eefb9dc3d04967a7d557c9' => 
    array (
      0 => 'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\modules\\ACLRoles\\DetailView.tpl',
      1 => 1763526386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/ACLRoles/EditViewBody.tpl' => 1,
  ),
),false)) {
function content_6925642fa56aa5_83463206 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\include\\Smarty\\plugins\\function.sugar_action_menu.php','function'=>'smarty_function_sugar_action_menu',),));
?>


<div class="actionsContainer">
<form action="index.php" method="post" name="DetailView" id="form">

			<input type="hidden" name="module" value="ACLRoles">
			<input type="hidden" name="user_id" value="">
			<input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['ROLE']->value['id'];?>
">
			<input type="hidden" name="isDuplicate" value=''>
			<input type='hidden' name='return_record' value='<?php echo $_smarty_tpl->tpl_vars['RETURN']->value['record'];?>
'>
			<input type='hidden' name='return_action' value='<?php echo $_smarty_tpl->tpl_vars['RETURN']->value['action'];?>
'>
			<input type='hidden' name='return_module' value='<?php echo $_smarty_tpl->tpl_vars['RETURN']->value['module'];?>
'>
			<input type="hidden" name="action">


		<?php echo smarty_function_sugar_action_menu(array('id'=>"userEditActions",'class'=>"clickMenu fancymenu SugarActionMenu",'buttons'=>$_smarty_tpl->tpl_vars['buttons']->value,'flat'=>true),$_smarty_tpl);?>

		</form>
		</p>
</div>
		<p>
		<TABLE width='100%' class='detail view' border='0' cellpadding=0 cellspacing = 1  >
		<TR>
<td valign='top' width='15%' align='right'><b><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NAME'];?>
:</b></td><td width='85%' colspan='3'><?php echo $_smarty_tpl->tpl_vars['ROLE']->value['name'];?>
</td>
</tr
><TR>
<td valign='top'  width='15%' align='right'><b><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DESCRIPTION'];?>
:</b></td><td colspan='3' valign='top'  width='85%' align='left'><?php echo nl2br((string) $_smarty_tpl->tpl_vars['ROLE']->value['description'], (bool) 1);?>
</td>
</tr></table>
</p>
		<p>

<?php $_smarty_tpl->_subTemplateRender("file:modules/ACLRoles/EditViewBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
