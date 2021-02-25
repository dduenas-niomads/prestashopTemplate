<?php /* Smarty version Smarty-3.1.19, created on 2021-02-24 10:55:41
         compiled from "/var/www/html/themes/classic/templates/checkout/checkout-process.tpl" */ ?>
<?php /*%%SmartyHeaderCode:251283086603676fd100bf6-85584477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6e9d9fcd859bf6a1a5bd2b3777acc6f17ee0f75' => 
    array (
      0 => '/var/www/html/themes/classic/templates/checkout/checkout-process.tpl',
      1 => 1614111129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '251283086603676fd100bf6-85584477',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'steps' => 0,
    'step' => 0,
    'index' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_603676fd106859_92292807',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_603676fd106859_92292807')) {function content_603676fd106859_92292807($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars["step"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["step"]->_loop = false;
 $_smarty_tpl->tpl_vars["index"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['steps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["step"]->key => $_smarty_tpl->tpl_vars["step"]->value) {
$_smarty_tpl->tpl_vars["step"]->_loop = true;
 $_smarty_tpl->tpl_vars["index"]->value = $_smarty_tpl->tpl_vars["step"]->key;
?>
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0][0]->smartyRender(array('identifier'=>$_smarty_tpl->tpl_vars['step']->value['identifier'],'position'=>($_smarty_tpl->tpl_vars['index']->value+1),'ui'=>$_smarty_tpl->tpl_vars['step']->value['ui']),$_smarty_tpl);?>

<?php } ?>
<?php }} ?>
