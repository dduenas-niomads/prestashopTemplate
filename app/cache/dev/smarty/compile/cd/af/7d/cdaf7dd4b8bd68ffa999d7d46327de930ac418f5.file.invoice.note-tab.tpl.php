<?php /* Smarty version Smarty-3.1.19, created on 2021-02-24 17:37:10
         compiled from "/var/www/html/pdf/invoice.note-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17655694006036d516b911d8-47341704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdaf7dd4b8bd68ffa999d7d46327de930ac418f5' => 
    array (
      0 => '/var/www/html/pdf/invoice.note-tab.tpl',
      1 => 1614111129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17655694006036d516b911d8-47341704',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6036d516b963b6_55223454',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6036d516b963b6_55223454')) {function content_6036d516b963b6_55223454($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['order_invoice']->value->note)&&$_smarty_tpl->tpl_vars['order_invoice']->value->note) {?>
	<tr>
		<td colspan="12" height="10">&nbsp;</td>
	</tr>

	<tr>
		<td colspan="6" class="left">
			<table id="note-tab" style="width: 100%">
				<tr>
					<td class="grey"><?php echo smartyTranslate(array('s'=>'Note','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</td>
				</tr>
				<tr>
					<td class="note"><?php echo nl2br($_smarty_tpl->tpl_vars['order_invoice']->value->note);?>
</td>
				</tr>
			</table>
		</td>
		<td colspan="1">&nbsp;</td>
	</tr>
<?php }?>
<?php }} ?>
