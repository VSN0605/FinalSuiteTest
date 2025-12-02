<?php
/* Smarty version 4.5.5, created on 2025-12-02 11:59:54
  from 'C:\wamp64\www\crm_folder\suiteCRM_finalTest\include\SugarFields\Fields\Phone\ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_692ed4ba20a129_21142996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92df9f5199d4f8e7a5437e46915a81164bb326e1' => 
    array (
      0 => 'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\include\\SugarFields\\Fields\\Phone\\ListView.tpl',
      1 => 1763526429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_692ed4ba20a129_21142996 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\include\\Smarty\\plugins\\function.sugar_fetch.php','function'=>'smarty_function_sugar_fetch',),1=>array('file'=>'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\include\\Smarty\\plugins\\function.sugar_phone.php','function'=>'smarty_function_sugar_phone',),));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'getPhone', 'phone', null);
echo smarty_function_sugar_fetch(array('object'=>$_smarty_tpl->tpl_vars['parentFieldArray']->value,'key'=>$_smarty_tpl->tpl_vars['col']->value),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php echo smarty_function_sugar_phone(array('value'=>$_smarty_tpl->tpl_vars['phone']->value,'usa_format'=>$_smarty_tpl->tpl_vars['usa_format']->value),$_smarty_tpl);
}
}
