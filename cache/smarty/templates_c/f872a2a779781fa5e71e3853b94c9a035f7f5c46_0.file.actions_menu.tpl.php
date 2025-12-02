<?php
/* Smarty version 4.5.5, created on 2025-12-02 11:59:55
  from 'C:\wamp64\www\crm_folder\suiteCRM_finalTest\themes\SuiteP\include\MySugar\tpls\actions_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_692ed4bbf1a675_08146045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f872a2a779781fa5e71e3853b94c9a035f7f5c46' => 
    array (
      0 => 'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\themes\\SuiteP\\include\\MySugar\\tpls\\actions_menu.tpl',
      1 => 1763526434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_692ed4bbf1a675_08146045 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="dropdown-menu tab-actions">
    <?php if (!$_smarty_tpl->tpl_vars['lock_homepage']->value) {?>

        <li>
            <input class="button addDashlets" type="button" name="Edit"  data-toggle="modal" data-target=".modal-add-dashlet" value="<?php echo $_smarty_tpl->tpl_vars['lblAddDashlets']->value;?>
">
        </li>
        <li>
            <input class="button addDashboard" type="button" name="Edit"  data-toggle="modal" data-target=".modal-add-dashboard" value="<?php echo $_smarty_tpl->tpl_vars['lblAddTab']->value;?>
">
        </li>
        <li>
            <input class="button addDashboard" type="button" name="Edit"  data-toggle="modal" data-target=".modal-edit-dashboard" value="<?php echo $_smarty_tpl->tpl_vars['app']->value['LBL_EDIT_TAB'];?>
">
        </li>
    <?php }?>
</ul>
<?php }
}
