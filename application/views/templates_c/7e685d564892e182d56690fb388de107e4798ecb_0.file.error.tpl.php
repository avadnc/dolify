<?php
/* Smarty version 4.2.0, created on 2022-08-26 02:19:54
  from 'D:\laragon\www\ecommerce\application\views\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63082dca957896_06200648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e685d564892e182d56690fb388de107e4798ecb' => 
    array (
      0 => 'D:\\laragon\\www\\ecommerce\\application\\views\\templates\\error.tpl',
      1 => 1661480124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:error/error_401.tpl' => 1,
    'file:error/error_404.tpl' => 1,
    'file:error/error_500.tpl' => 1,
  ),
),false)) {
function content_63082dca957896_06200648 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77126742363082dca94a6a8_57791773', 'pageTitle');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29495696663082dca94e989_13428654', 'page');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/main.layout.tpl");
}
/* {block 'pageTitle'} */
class Block_77126742363082dca94a6a8_57791773 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageTitle' => 
  array (
    0 => 'Block_77126742363082dca94a6a8_57791773',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Error <?php echo $_smarty_tpl->tpl_vars['error']->value;
}
}
/* {/block 'pageTitle'} */
/* {block 'page'} */
class Block_29495696663082dca94e989_13428654 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_29495696663082dca94e989_13428654',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['error']->value == "401") {?>

		<?php $_smarty_tpl->_subTemplateRender("file:error/error_401.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['error']->value == "404") {?>

		<?php $_smarty_tpl->_subTemplateRender("file:error/error_404.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['error']->value == "500") {?>

		<?php $_smarty_tpl->_subTemplateRender("file:error/error_500.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php }
}
}
/* {/block 'page'} */
}
