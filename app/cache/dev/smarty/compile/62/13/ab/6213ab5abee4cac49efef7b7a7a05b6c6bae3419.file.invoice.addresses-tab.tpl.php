<?php /* Smarty version Smarty-3.1.19, created on 2021-02-24 17:37:10
         compiled from "/var/www/html/pdf/invoice.addresses-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12089012136036d516b27188-31863239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6213ab5abee4cac49efef7b7a7a05b6c6bae3419' => 
    array (
      0 => '/var/www/html/pdf/invoice.addresses-tab.tpl',
      1 => 1614111129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12089012136036d516b27188-31863239',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'delivery_address' => 0,
    'invoice_address' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6036d516b2c7c3_05668867',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6036d516b2c7c3_05668867')) {function content_6036d516b2c7c3_05668867($_smarty_tpl) {?>
<table id="addresses-tab" cellspacing="0" cellpadding="0">
	<tr>
		<td width="50%"><?php if ($_smarty_tpl->tpl_vars['delivery_address']->value) {?><span class="bold"><?php echo smartyTranslate(array('s'=>'Delivery Address','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</span><br/><br/>
				<?php echo $_smarty_tpl->tpl_vars['delivery_address']->value;?>

			<?php }?>
		</td>
		<td width="50%"><span class="bold"><?php echo smartyTranslate(array('s'=>'Billing Address','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</span><br/><br/>
				<?php echo $_smarty_tpl->tpl_vars['invoice_address']->value;?>

		</td>
	</tr>
</table>
<?php }} ?>
