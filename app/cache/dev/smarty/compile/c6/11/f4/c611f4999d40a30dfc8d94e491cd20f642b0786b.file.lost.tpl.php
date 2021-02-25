<?php /* Smarty version Smarty-3.1.19, created on 2021-02-23 15:59:55
         compiled from "/var/www/html/modules/welcome/views/templates/lost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179073478660356ccbc41bb2-12732285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c611f4999d40a30dfc8d94e491cd20f642b0786b' => 
    array (
      0 => '/var/www/html/modules/welcome/views/templates/lost.tpl',
      1 => 1614111129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179073478660356ccbc41bb2-12732285',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60356ccbc467c3_13429996',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60356ccbc467c3_13429996')) {function content_60356ccbc467c3_13429996($_smarty_tpl) {?>

<div class="onboarding onboarding-popup bootstrap">
  <div class="content">
    <p><?php echo smartyTranslate(array('s'=>'Hey! Are you lost?','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <p><?php echo smartyTranslate(array('s'=>'To continue, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-primary onboarding-button-goto-current"><?php echo smartyTranslate(array('s'=>'Continue','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
    <p><?php echo smartyTranslate(array('s'=>'If you want to stop the tutorial for good, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-alert onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Quit the Welcome tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
  </div>
</div>
<?php }} ?>
