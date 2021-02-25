<?php /* Smarty version Smarty-3.1.19, created on 2021-02-24 15:57:26
         compiled from "/var/www/html/admin860x19hwa/themes/default/template/controllers/localization/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8270204566036bdb65fb971-63328562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dda575d19c8cfd7e326e9f943cd3c1e79584ffa' => 
    array (
      0 => '/var/www/html/admin860x19hwa/themes/default/template/controllers/localization/content.tpl',
      1 => 1614111127,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8270204566036bdb65fb971-63328562',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'localization_form' => 0,
    'localization_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6036bdb66007b3_75127599',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6036bdb66007b3_75127599')) {function content_6036bdb66007b3_75127599($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['localization_form']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_form']->value;?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['localization_options']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_options']->value;?>
<?php }?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert("<?php echo smartyTranslate(array('s'=>'Before changing the default currency, we strongly recommend that you enable maintenance mode. Indeed, any change on the default currency requires a manual adjustment of the price of each product and its combinations.','d'=>'Admin.International.Notification','js'=>1),$_smarty_tpl);?>
");
		});
	});
</script>
<?php }} ?>
