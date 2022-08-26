<?php
/* Smarty version 4.2.0, created on 2022-08-26 00:30:58
  from 'D:\laragon\www\ecommerce\application\views\templates\partial\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63081442074e92_64172788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '970581ee8206c2cdc7b17089b2f30903a657c4ce' => 
    array (
      0 => 'D:\\laragon\\www\\ecommerce\\application\\views\\templates\\partial\\header.tpl',
      1 => 1661473855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63081442074e92_64172788 (Smarty_Internal_Template $_smarty_tpl) {
?>		<!-- Header
		============================================= -->
		<header id="header">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="#" class="standard-logo"
								data-dark-logo="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/viewimage.php?modulepart=mycompany&file=logos/<?php echo $_smarty_tpl->tpl_vars['mysoc']->value->logo;?>
"><img
									src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/viewimage.php?modulepart=mycompany&file=logos/<?php echo $_smarty_tpl->tpl_vars['mysoc']->value->logo;?>
"
									alt="<?php echo $_smarty_tpl->tpl_vars['mysoc']->value->name;?>
"></a>
							<a href="index.html" class="retina-logo"
								data-dark-logo="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/viewimage.php?modulepart=mycompany&file=logos/<?php echo $_smarty_tpl->tpl_vars['mysoc']->value->logo;?>
"><img
									src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/viewimage.php?modulepart=mycompany&file=logos/<?php echo $_smarty_tpl->tpl_vars['mysoc']->value->logo;?>
"
									alt="<?php echo $_smarty_tpl->tpl_vars['mysoc']->value->name;?>
"></a>
						</div><!-- #logo end -->

						<div class="header-misc">

							<!-- Top Search
							============================================= -->
							<div id="top-search" class="header-misc-icon">
								<a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i
										class="icon-line-cross"></i></a>
							</div><!-- #top-search end -->

							<!-- Top Cart
							============================================= -->
							<div id="top-cart" class="header-misc-icon d-none d-sm-block">
								<a href="#" id="top-cart-trigger"><i class="icon-line-bag"></i><span class="top-cart-number">0</span></a>
								<div class="top-cart-content">
																</div>
							</div><!-- #top-cart end -->

						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100">
								<path
									d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
								</path>
								<path d="m 30,50 h 40"></path>
								<path
									d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
								</path>
							</svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">

							<ul class="menu-container">
								<li class="d-md-none menu-item current">
									<a href="/login" class="menu-link">
										Login
									</a>
								</li>


								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value, 'i', false, 'k');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
									<?php if ($_smarty_tpl->tpl_vars['i']->value['fk_parent'] == 31) {?>
										<li class="menu-item">
											<a href="#" class="menu-link">
												<div><?php echo $_smarty_tpl->tpl_vars['i']->value['label'];?>
</div>
											</a>
										</li>
									<?php }?>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

							</ul>

						</nav><!-- #primary-menu end -->

						<form class="top-search-form" action="search.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.."
								autocomplete="off">
						</form>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
</header><!-- #header end -->
<?php }
}
