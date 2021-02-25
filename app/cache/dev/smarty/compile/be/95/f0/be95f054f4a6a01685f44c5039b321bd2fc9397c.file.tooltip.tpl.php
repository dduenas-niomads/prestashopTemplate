<?php /* Smarty version Smarty-3.1.19, created on 2021-02-23 15:59:55
         compiled from "/var/www/html/modules/welcome/views/templates/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130528633360356ccbc4c195-54263849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be95f054f4a6a01685f44c5039b321bd2fc9397c' => 
    array (
      0 => '/var/www/html/modules/welcome/views/templates/tooltip.tpl',
      1 => 1614111129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130528633360356ccbc4c195-54263849',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60356ccbc4e867_61173732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60356ccbc4e867_61173732')) {function content_60356ccbc4e867_61173732($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
