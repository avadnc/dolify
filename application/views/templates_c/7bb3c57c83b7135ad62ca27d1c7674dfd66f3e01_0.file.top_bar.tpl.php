<?php
/* Smarty version 4.2.0, created on 2022-08-26 00:56:22
  from 'D:\laragon\www\ecommerce\application\views\templates\partial\top_bar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63081a365d9c25_30030099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bb3c57c83b7135ad62ca27d1c7674dfd66f3e01' => 
    array (
      0 => 'D:\\laragon\\www\\ecommerce\\application\\views\\templates\\partial\\top_bar.tpl',
      1 => 1661475378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63081a365d9c25_30030099 (Smarty_Internal_Template $_smarty_tpl) {
?>		<!-- Top Bar
		============================================= -->
		<div id="top-bar">
			<div class="container">

				<div class="row justify-content-between align-items-center">
					<div class="col-12 col-md-auto">
							<p class="mb-0 py-2 text-center text-md-start"><strong>Call:</strong> <?php echo $_smarty_tpl->tpl_vars['mysoc']->value->phone;?>
 |
							<strong>Email:</strong> <?php echo $_smarty_tpl->tpl_vars['mysoc']->value->email;?>
</p>
					</div>

					<div class="d-none d-md-block col-12 col-md-auto">

						<!-- Top Links
						============================================= -->
						<div class="top-links on-click">
							<ul class="top-links-container">
								<li class="top-links-item"><a href="/login">Login</a>
																	</li>
							</ul>
						</div><!-- .top-links end -->

					</div>
				</div>

			</div>
</div><!-- #top-bar end -->
<?php }
}
