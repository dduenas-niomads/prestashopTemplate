<?php /* Smarty version Smarty-3.1.19, created on 2021-02-24 18:13:16
         compiled from "/var/www/html/admin860x19hwa/themes/default/template/helpers/tree/tree_node_folder_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15892494416036dd8c278d12-17665885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06300ffa60ce8821922c5994694163b2e6dfa1f6' => 
    array (
      0 => '/var/www/html/admin860x19hwa/themes/default/template/helpers/tree/tree_node_folder_radio.tpl',
      1 => 1614111127,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15892494416036dd8c278d12-17665885',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'root_category' => 0,
    'input_name' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6036dd8c283431_94826431',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6036dd8c283431_94826431')) {function content_6036dd8c283431_94826431($_smarty_tpl) {?>
<li class="tree-folder">
	<span class="tree-folder-name<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-folder-name-disable<?php }?>">
		<?php if ($_smarty_tpl->tpl_vars['node']->value['id_category']!=$_smarty_tpl->tpl_vars['root_category']->value) {?>
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<?php }?>
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['node']->value['name'],'html','UTF-8');?>
</label>
	</span>
	<ul class="tree">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['children']->value,'UTF-8');?>

	</ul>
</li>
<?php }} ?>
