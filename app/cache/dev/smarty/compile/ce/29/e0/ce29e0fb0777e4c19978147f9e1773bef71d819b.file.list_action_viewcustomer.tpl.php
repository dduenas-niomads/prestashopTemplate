<?php /* Smarty version Smarty-3.1.19, created on 2021-02-25 10:31:51
         compiled from "/var/www/html/modules/ps_emailsubscription/views/templates/admin/list_action_viewcustomer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8469695196037c2e7016c72-62706700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce29e0fb0777e4c19978147f9e1773bef71d819b' => 
    array (
      0 => '/var/www/html/modules/ps_emailsubscription/views/templates/admin/list_action_viewcustomer.tpl',
      1 => 1614111129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8469695196037c2e7016c72-62706700',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'disable' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6037c2e701d719_80794138',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6037c2e701d719_80794138')) {function content_6037c2e701d719_80794138($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" class="edit btn btn-default <?php if ($_smarty_tpl->tpl_vars['disable']->value) {?>disabled<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
