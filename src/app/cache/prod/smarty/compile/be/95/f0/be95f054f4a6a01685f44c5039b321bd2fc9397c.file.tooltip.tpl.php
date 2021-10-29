<?php /* Smarty version Smarty-3.1.19, created on 2021-10-29 22:37:42
         compiled from "/var/www/html/modules/welcome/views/templates/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1359980644617c5b96ce77c5-96242167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be95f054f4a6a01685f44c5039b321bd2fc9397c' => 
    array (
      0 => '/var/www/html/modules/welcome/views/templates/tooltip.tpl',
      1 => 1490891256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1359980644617c5b96ce77c5-96242167',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_617c5b96cedc81_98736114',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617c5b96cedc81_98736114')) {function content_617c5b96cedc81_98736114($_smarty_tpl) {?>

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
