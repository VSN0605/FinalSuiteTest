<?php
/* Smarty version 4.5.5, created on 2025-11-25 08:09:19
  from 'C:\wamp64\www\crm_folder\suiteCRM_finalTest\modules\ACLRoles\EditViewBody.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6925642fe588e7_56458151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db33ca223a46c2a66b8f7edc819a6e421ef7de53' => 
    array (
      0 => 'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\modules\\ACLRoles\\EditViewBody.tpl',
      1 => 1763526386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/ACLRoles/EditAllBody.tpl' => 1,
  ),
),false)) {
function content_6925642fe588e7_56458151 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\include\\Smarty\\plugins\\function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),));
echo '<script'; ?>
 src="<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/ACLRoles/ACLRoles.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<b><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EDIT_VIEW_DIRECTIONS'];?>
</b>
<table width='100%'><tr>
<td width= '100%'  valign='top'>
<div id='category_data'>
<?php $_smarty_tpl->_subTemplateRender('file:modules/ACLRoles/EditAllBody.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
</td></tr>
</table>


<?php }
}
