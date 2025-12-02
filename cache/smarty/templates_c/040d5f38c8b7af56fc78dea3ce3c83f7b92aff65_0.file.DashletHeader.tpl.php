<?php
/* Smarty version 4.5.5, created on 2025-12-02 11:59:53
  from 'C:\wamp64\www\crm_folder\suiteCRM_finalTest\themes\SuiteP\include\Dashlets\DashletHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_692ed4b97aa931_71907249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '040d5f38c8b7af56fc78dea3ce3c83f7b92aff65' => 
    array (
      0 => 'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\themes\\SuiteP\\include\\Dashlets\\DashletHeader.tpl',
      1 => 1763526435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_692ed4b97aa931_71907249 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\crm_folder\\suiteCRM_finalTest\\include\\Smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<div onmouseover="this.style.cursor = 'move';" id="dashlet_header_<?php echo $_smarty_tpl->tpl_vars['DASHLET_ID']->value;?>
" class="hd dashlet">
    <div class="tl"></div>
    <div class="hd-center">
        <table width="100%" cellpadding="0" cellspacing="0" border="0" class="formHeader h3Row">
            <tr>
                <td class="dashlet-title" colspan="2">
                    <h3>
                        <span class="suitepicon suitepicon-module-<?php echo smarty_modifier_replace(mb_strtolower((string) $_smarty_tpl->tpl_vars['DASHLET_MODULE']->value, 'UTF-8'),'_','-');?>
"></span>
                       <span><?php echo $_smarty_tpl->tpl_vars['DASHLET_TITLE']->value;?>
</span>
                    </h3>
                </td>
                <td style="padding-right: 0px;" nowrap="" width="1%">
                    <div class="dashletToolSet">
                        <a href="javascript:void(0)" title="<?php echo $_smarty_tpl->tpl_vars['DASHLET_BUTTON_ARIA_EDIT']->value;?>
" aria-label="<?php echo $_smarty_tpl->tpl_vars['DASHLET_BUTTON_ARIA_EDIT']->value;?>
" onclick="SUGAR.mySugar.configureDashlet('<?php echo $_smarty_tpl->tpl_vars['DASHLET_ID']->value;?>
'); return false;">
                            <span class="suitepicon suitepicon-action-edit"></span>
                        </a>
    <a href="javascript:void(0)" title="<?php echo $_smarty_tpl->tpl_vars['DASHLET_BUTTON_ARIA_REFRESH']->value;?>
" aria-label="<?php echo $_smarty_tpl->tpl_vars['DASHLET_BUTTON_ARIA_REFRESH']->value;?>
" onclick="SUGAR.mySugar.retrieveDashlet('<?php echo $_smarty_tpl->tpl_vars['DASHLET_ID']->value;?>
'); return false;">
        <span class="suitepicon suitepicon-action-reload"></span>
    </a>
<a href="javascript:void(0)" title="<?php echo $_smarty_tpl->tpl_vars['DASHLET_BUTTON_ARIA_DELETE']->value;?>
" aria-label="<?php echo $_smarty_tpl->tpl_vars['DASHLET_BUTTON_ARIA_DELETE']->value;?>
" onclick="SUGAR.mySugar.deleteDashlet('<?php echo $_smarty_tpl->tpl_vars['DASHLET_ID']->value;?>
'); return false;">
    <span class="suitepicon suitepicon-action-clear"></span>
</a>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="tr"></div>
</div>
<div class="bd">
    <div class="ml"></div>
    <div class="bd-center"><?php }
}
