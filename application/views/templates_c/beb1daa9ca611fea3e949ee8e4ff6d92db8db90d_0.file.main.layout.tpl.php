<?php
/* Smarty version 4.2.0, created on 2022-08-26 01:34:45
  from 'D:\laragon\www\ecommerce\application\views\templates\layout\main.layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6308233582cda8_98579051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'beb1daa9ca611fea3e949ee8e4ff6d92db8db90d' => 
    array (
      0 => 'D:\\laragon\\www\\ecommerce\\application\\views\\templates\\layout\\main.layout.tpl',
      1 => 1661477679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partial/top_bar.tpl' => 1,
    'file:partial/header.tpl' => 1,
    'file:partial/footer.tpl' => 1,
  ),
),false)) {
function content_6308233582cda8_98579051 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_995877999630823357ffd35_13583830', 'language');
?>
">

<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />
	<link
		href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap"
		rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/style.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/css/magnific-popup.css" type="text/css" />

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15511577336308233580f085_54690100', 'styles');
?>


	<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10527712863082335810180_41087959', 'pageTitle');
?>
</title>

</head>

<body class="stretched">

	<div id="wrapper" class="clearfix">
		<?php if (!(isset($_smarty_tpl->tpl_vars['login']->value))) {?>
			<?php $_smarty_tpl->_subTemplateRender("file:partial/top_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<?php $_smarty_tpl->_subTemplateRender("file:partial/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php }?>

		<section id="content">
			<div class="content-wrap <?php if ((isset($_smarty_tpl->tpl_vars['login']->value))) {?>py-0<?php }?>">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26407882763082335828308_09267895', 'page');
?>

			</div>
		</section>
		<?php if (!(isset($_smarty_tpl->tpl_vars['login']->value))) {?>
			<?php $_smarty_tpl->_subTemplateRender("file:partial/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</div>
		<?php }?>
	<div id="gotoTop" class="icon-angle-up"></div>


	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/js/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/js/plugins.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/js/functions.js"><?php echo '</script'; ?>
>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1798103576308233582ba79_69913468', 'scripts');
?>

</body>

</html>
<?php }
/* {block 'language'} */
class Block_995877999630823357ffd35_13583830 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'language' => 
  array (
    0 => 'Block_995877999630823357ffd35_13583830',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'language'} */
/* {block 'styles'} */
class Block_15511577336308233580f085_54690100 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_15511577336308233580f085_54690100',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'styles'} */
/* {block 'pageTitle'} */
class Block_10527712863082335810180_41087959 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageTitle' => 
  array (
    0 => 'Block_10527712863082335810180_41087959',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'pageTitle'} */
/* {block 'page'} */
class Block_26407882763082335828308_09267895 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_26407882763082335828308_09267895',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page'} */
/* {block 'scripts'} */
class Block_1798103576308233582ba79_69913468 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_1798103576308233582ba79_69913468',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'scripts'} */
}
