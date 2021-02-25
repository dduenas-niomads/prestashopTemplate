<?php /* Smarty version Smarty-3.1.19, created on 2021-02-23 16:05:31
         compiled from "/var/www/html/admin860x19hwa/themes/default/template/controllers/stats/stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99907545260356e1bd10d01-48225607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e27aa06264e8a14efc23c0c1e1ba343df1342535' => 
    array (
      0 => '/var/www/html/admin860x19hwa/themes/default/template/controllers/stats/stats.tpl',
      1 => 1614111127,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99907545260356e1bd10d01-48225607',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
    'module_instance' => 0,
    'hook' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60356e1bd173c2_23272716',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60356e1bd173c2_23272716')) {function content_60356e1bd173c2_23272716($_smarty_tpl) {?>

		<div class="panel">
			<?php if ($_smarty_tpl->tpl_vars['module_name']->value) {?>
				<?php if ($_smarty_tpl->tpl_vars['module_instance']->value&&$_smarty_tpl->tpl_vars['module_instance']->value->active) {?>
					<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>

				<?php } else { ?>
					<?php echo smartyTranslate(array('s'=>'Module not found','d'=>'Admin.Stats.Notification'),$_smarty_tpl);?>

				<?php }?>
			<?php } else { ?>
				<h3 class="space"><?php echo smartyTranslate(array('s'=>'Please select a module from the left column.','d'=>'Admin.Stats.Notification'),$_smarty_tpl);?>
</h3>
			<?php }?>
		</div>
	</div>
</div>
<?php }} ?>
