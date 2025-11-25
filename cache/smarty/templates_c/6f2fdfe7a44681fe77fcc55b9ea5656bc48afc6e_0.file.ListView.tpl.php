<?php
/* Smarty version 4.5.5, created on 2025-11-25 08:27:31
  from 'C:\wamp64\www\crm_folder\suiteCRM_finalTest\include\SugarFields\Fields\Bool\ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_692568733258a1_93726233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f2fdfe7a44681fe77fcc55b9ea5656bc48afc6e' => 
    array (
      0 => 'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\include\\SugarFields\\Fields\\Bool\\ListView.tpl',
      1 => 1763526428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_692568733258a1_93726233 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <?php if (strval($_smarty_tpl->tpl_vars['parentFieldArray']->value[$_smarty_tpl->tpl_vars['col']->value]) == "1" || strval($_smarty_tpl->tpl_vars['parentFieldArray']->value[$_smarty_tpl->tpl_vars['col']->value]) == "yes" || strval($_smarty_tpl->tpl_vars['parentFieldArray']->value[$_smarty_tpl->tpl_vars['col']->value]) == "on") {
$_smarty_tpl->_assignInScope('checked', 'checked="checked"');
} else {
$_smarty_tpl->_assignInScope('checked', '');
}?>
<input type="checkbox" class="checkbox" disabled="true" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
>
<?php }
}
