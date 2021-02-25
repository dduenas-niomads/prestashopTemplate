<?php /* Smarty version Smarty-3.1.19, created on 2021-02-24 17:05:42
         compiled from "/var/www/html/admin860x19hwa/themes/default/template/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5165958156036cdb6bb9089-13521193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac3aa244aeeddef25489eff2d2ff7869d7d6d7cc' => 
    array (
      0 => '/var/www/html/admin860x19hwa/themes/default/template/helpers/tree/tree_toolbar.tpl',
      1 => 1614111127,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5165958156036cdb6bb9089-13521193',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6036cdb6bbfdc5_96235511',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6036cdb6bbfdc5_96235511')) {function content_6036cdb6bbfdc5_96235511($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div>
<?php }} ?>
