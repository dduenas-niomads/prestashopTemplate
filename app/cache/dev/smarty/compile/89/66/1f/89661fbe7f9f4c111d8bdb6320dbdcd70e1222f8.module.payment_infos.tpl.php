<?php /* Smarty version Smarty-3.1.19, created on 2021-02-24 10:55:41
         compiled from "module:ps_wirepayment/views/templates/hook/_partials/payment_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:394969079603676fd2091c0-86704245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89661fbe7f9f4c111d8bdb6320dbdcd70e1222f8' => 
    array (
      0 => 'module:ps_wirepayment/views/templates/hook/_partials/payment_infos.tpl',
      1 => 1614111129,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '394969079603676fd2091c0-86704245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total' => 0,
    'bankwireOwner' => 0,
    'bankwireDetails' => 0,
    'bankwireAddress' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_603676fd20d664_63773118',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_603676fd20d664_63773118')) {function content_603676fd20d664_63773118($_smarty_tpl) {?><!-- begin /var/www/html/modules/ps_wirepayment/views/templates/hook/_partials/payment_infos.tpl -->


<dl>
    <dt><?php echo smartyTranslate(array('s'=>'Amount','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl);?>
</dt>
    <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['total']->value, ENT_QUOTES, 'UTF-8');?>
</dd>
    <dt><?php echo smartyTranslate(array('s'=>'Name of account owner','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl);?>
</dt>
    <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bankwireOwner']->value, ENT_QUOTES, 'UTF-8');?>
</dd>
    <dt><?php echo smartyTranslate(array('s'=>'Please include these details','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl);?>
</dt>
    <dd><?php echo $_smarty_tpl->tpl_vars['bankwireDetails']->value;?>
</dd>
    <dt><?php echo smartyTranslate(array('s'=>'Bank name','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl);?>
</dt>
    <dd><?php echo $_smarty_tpl->tpl_vars['bankwireAddress']->value;?>
</dd>
</dl>
<!-- end /var/www/html/modules/ps_wirepayment/views/templates/hook/_partials/payment_infos.tpl --><?php }} ?>
