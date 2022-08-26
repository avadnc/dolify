<?php
/* Smarty version 4.2.0, created on 2022-08-26 02:19:54
  from 'D:\laragon\www\ecommerce\application\views\templates\error\error_404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63082dca985c79_26606075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85a6e51df6031e498ec28658c4dc94ff2ea0875d' => 
    array (
      0 => 'D:\\laragon\\www\\ecommerce\\application\\views\\templates\\error\\error_404.tpl',
      1 => 1661480211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63082dca985c79_26606075 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container clearfix">

	<div class="row align-items-center col-mb-80">

		<div class="col-lg-6">
			<div class="error404 center">404</div>
		</div>

		<div class="col-lg-6">

			<div class="heading-block text-center text-lg-start border-bottom-0">
				<h4>Ooopps.! The Page you were looking for, couldn't be found.</h4>
				<span>Try searching for the best match or browse the links below:</span>
			</div>

			<form action="#" method="get" class="mb-5">
				<div class="input-group input-group-lg">
					<input type="text" class="form-control" placeholder="Search for Pages...">
					<button class="btn btn-danger" type="button">Search</button>
				</div>
			</form>

			<div class="row col-mb-30">

				<div class="col-6 col-sm-4 widget_links">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">FAQs</a></li>
					</ul>
				</div>

				<div class="col-6 col-sm-4 widget_links">
					<ul>
						<li><a href="#">Shop</a></li>
						<li><a href="#">Portfolio</a></li>
						<li><a href="#">Blog</a></li>
					</ul>
				</div>

				<div class="col-6 col-sm-4 widget_links">
					<ul>
						<li><a href="#">Support</a></li>
						<li><a href="#">Forums</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
			</div>

		</div>

	</div>

</div>
<?php }
}
