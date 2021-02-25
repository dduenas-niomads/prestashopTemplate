<?php /* Smarty version Smarty-3.1.19, created on 2021-02-23 16:22:56
         compiled from "/var/www/html/admin860x19hwa/themes/new-theme/template/components/layout/confirmation_messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1302754885603572309dee31-78676033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63b90e70912c1b9421ec2506034a1eb798d0b318' => 
    array (
      0 => '/var/www/html/admin860x19hwa/themes/new-theme/template/components/layout/confirmation_messages.tpl',
      1 => 1614111127,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1302754885603572309dee31-78676033',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'confirmations' => 0,
    'conf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_603572309e5b79_39466691',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_603572309e5b79_39466691')) {function content_603572309e5b79_39466691($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['confirmations']->value)&&count($_smarty_tpl->tpl_vars['confirmations']->value)&&$_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php  $_smarty_tpl->tpl_vars['conf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['conf']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['confirmations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->key => $_smarty_tpl->tpl_vars['conf']->value) {
$_smarty_tpl->tpl_vars['conf']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php } ?>
    </div>
  </div>
<?php }?>
<?php }} ?>
