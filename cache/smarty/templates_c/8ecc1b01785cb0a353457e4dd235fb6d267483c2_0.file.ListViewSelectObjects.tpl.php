<?php
/* Smarty version 4.5.5, created on 2025-12-09 09:04:43
  from 'C:\wamp64\www\crm_folder\suiteCRM_finalTest\themes\SuiteP\include\ListView\ListViewSelectObjects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6937e62baaeb71_39974339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ecc1b01785cb0a353457e4dd235fb6d267483c2' => 
    array (
      0 => 'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\themes\\SuiteP\\include\\ListView\\ListViewSelectObjects.tpl',
      1 => 1763526434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6937e62baaeb71_39974339 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="selectedRecords label hidden"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_LISTVIEW_SELECTED_OBJECTS'];?>
</div><div class="selectedRecords value hidden"><?php echo $_smarty_tpl->tpl_vars['TOTAL_ITEMS_SELECTED']->value;?>
</div>
<input type='hidden' id='selectCountTop' name='selectCount[]' value='<?php echo $_smarty_tpl->tpl_vars['TOTAL_ITEMS_SELECTED']->value;?>
' />

<?php echo '<script'; ?>
>

    $(document).ready(function () {
        setInterval(function () {
            sListView.toggleSelected();
        }, 100);
    });

<?php echo '</script'; ?>
><?php }
}
