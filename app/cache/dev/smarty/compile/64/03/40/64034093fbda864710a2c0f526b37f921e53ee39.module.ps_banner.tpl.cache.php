<?php /* Smarty version Smarty-3.1.19, created on 2021-02-23 16:11:03
         compiled from "module:ps_banner/ps_banner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89458121560356f675eac91-58961326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64034093fbda864710a2c0f526b37f921e53ee39' => 
    array (
      0 => 'module:ps_banner/ps_banner.tpl',
      1 => 1614111129,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '89458121560356f675eac91-58961326',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banner_link' => 0,
    'banner_desc' => 0,
    'banner_img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60356f675eec89_82422306',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60356f675eec89_82422306')) {function content_60356f675eec89_82422306($_smarty_tpl) {?><!-- begin /var/www/html/themes/classic/modules/ps_banner/ps_banner.tpl -->
<a class="banner" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_link']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
">
  <?php if (isset($_smarty_tpl->tpl_vars['banner_img']->value)) {?>
    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_img']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" class="img-fluid">
  <?php } else { ?>
    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php }?>
</a>
<!-- end /var/www/html/themes/classic/modules/ps_banner/ps_banner.tpl --><?php }} ?>
