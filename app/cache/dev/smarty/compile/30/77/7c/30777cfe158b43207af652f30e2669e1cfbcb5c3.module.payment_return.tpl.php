<?php /* Smarty version Smarty-3.1.19, created on 2021-02-24 17:37:14
         compiled from "module:ps_cashondelivery/views/templates/hook/payment_return.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9061233126036d51addd017-98037693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30777cfe158b43207af652f30e2669e1cfbcb5c3' => 
    array (
      0 => 'module:ps_cashondelivery/views/templates/hook/payment_return.tpl',
      1 => 1614182586,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '9061233126036d51addd017-98037693',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shop_name' => 0,
    'contact_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6036d51ade1fa1_23251838',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6036d51ade1fa1_23251838')) {function content_6036d51ade1fa1_23251838($_smarty_tpl) {?><!-- begin /var/www/html/modules/ps_cashondelivery/views/templates/hook/payment_return.tpl -->

<p>
  <?php echo smartyTranslate(array('s'=>'Your order on %s is complete.','sprintf'=>array($_smarty_tpl->tpl_vars['shop_name']->value),'d'=>'Modules.Cashondelivery.Shop'),$_smarty_tpl);?>

  <br><br>
  <?php echo smartyTranslate(array('s'=>'You have chosen the cash on delivery method.','d'=>'Modules.Cashondelivery.Shop'),$_smarty_tpl);?>

  <br><br><span><?php echo smartyTranslate(array('s'=>'Your order will be sent very soon.','d'=>'Modules.Cashondelivery.Shop'),$_smarty_tpl);?>
</span>
  <br><br><?php echo smartyTranslate(array('s'=>'For any questions or for further information, please contact our','d'=>'Modules.Cashondelivery.Shop'),$_smarty_tpl);?>
 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'customer support','d'=>'Modules.Cashondelivery.Shop'),$_smarty_tpl);?>
</a>.
</p>
<!-- end /var/www/html/modules/ps_cashondelivery/views/templates/hook/payment_return.tpl --><?php }} ?>
