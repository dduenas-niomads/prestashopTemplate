<?php /* Smarty version Smarty-3.1.19, created on 2021-02-23 15:59:55
         compiled from "/var/www/html/admin860x19hwa/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41053086060356ccbb78031-31581149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a360b9acb6f7294e4744d61c7476baf043b66e0b' => 
    array (
      0 => '/var/www/html/admin860x19hwa/themes/default/template/content.tpl',
      1 => 1614111127,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41053086060356ccbb78031-31581149',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60356ccbb7c5d3_29942726',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60356ccbb7c5d3_29942726')) {function content_60356ccbb7c5d3_29942726($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
