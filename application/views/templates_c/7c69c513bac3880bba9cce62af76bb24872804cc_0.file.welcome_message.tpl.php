<?php
/* Smarty version 4.2.0, created on 2022-08-26 00:53:55
  from 'D:\laragon\www\ecommerce\application\views\templates\welcome_message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_630819a3d2ead1_02737383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c69c513bac3880bba9cce62af76bb24872804cc' => 
    array (
      0 => 'D:\\laragon\\www\\ecommerce\\application\\views\\templates\\welcome_message.tpl',
      1 => 1661475225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630819a3d2ead1_02737383 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_282112178630819a3d25dc6_81004279', 'pageTitle');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1118832867630819a3d26f72_36732575', 'page');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/main.layout.tpl");
}
/* {block 'pageTitle'} */
class Block_282112178630819a3d25dc6_81004279 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageTitle' => 
  array (
    0 => 'Block_282112178630819a3d25dc6_81004279',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Mensaje de prueba<?php
}
}
/* {/block 'pageTitle'} */
/* {block 'page'} */
class Block_1118832867630819a3d26f72_36732575 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_1118832867630819a3d26f72_36732575',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="container clearfix <?php echo $_smarty_tpl->tpl_vars['bs5_extra_class']->value;?>
">
		<div class="container clearfix">

			<div class="row align-items-stretch gutter-20 mb-5 min-vh-60">
				<div class="col-xl-8 min-vh-50">
					<div class="fslider h-100" data-arrows="false">
						<div class="flexslider">
							<div class="slider-wrap">
								<div class="slide">
									<a href="#">
										<img src="images/shop/slider/1.jpg" alt="Shop Image">
									</a>
								</div>
								<div class="slide">
									<a href="#">
										<img src="images/shop/slider/2.jpg" alt="Shop Image">
									</a>
								</div>
								<div class="slide">
									<a href="#">
										<img src="images/shop/slider/3.jpg" alt="Shop Image">
									</a>
								</div>
								<div class="slide">
									<a href="#">
										<img src="images/shop/slider/4.jpg" alt="Shop Image">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-4">
					<div class="row align-items-stretch gutter-20 min-vh-25 h-100">
						<div class="col-12 col-md-6 col-xl-12 min-vh-25 min-vh-md-0">
							<a href="#" class="grid-inner d-block h-100"
								style="background-image: url('images/shop/banners/7.jpg');"></a>
						</div>

						<div class="col-12 col-md-6 col-xl-12 min-vh-25 min-vh-md-0 pb-xl-0">
							<a href="#" class="grid-inner d-block h-100"
								style="background-image: url('images/shop/banners/3.jpg');"></a>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="promo parallax promo-full bottommargin-lg" style="background-image: url('images/parallax/3.jpg');"
			data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
			<div class="container clearfix">
				<div class="row align-items-center">
					<div class="col-12 col-lg">
						<h3>Get <span>30%</span> off on orders of $29 or more. Use Coupon: <span>SHOP30</span></h3>
						<span>Sale available on selected Designer Brands that include Apparels, Footwear, Fashion
							Accessories
							&amp; Watches.</span>
					</div>
					<div class="col-12 col-lg-auto mt-4 mt-lg-0">
						<a href="#" class="button button-large button-circle m-0">Start Shopping</a>
					</div>
				</div>
			</div>
		</div>

		<div class="container">

			<div class="row justify-content-center col-mb-50 mb-0">
				<div class="col-sm-6 col-lg-4">
					<div class="feature-box text-center media-box fbox-bg">
						<div class="fbox-media">
							<img src="images/shop/banners/10.jpg" alt="Image">
						</div>
						<div class="fbox-content">
							<h3>Men's Footwear<span class="subtitle">Flat 50% Off*</span></h3>
							<p><a href="#" class="btn btn-secondary">Shop Now</a></p>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-lg-4">
					<div class="feature-box text-center media-box fbox-bg">
						<div class="fbox-media">
							<img src="images/shop/banners/11.jpg" alt="Image">
						</div>
						<div class="fbox-content">
							<h3>Latest Product Arrivals<span class="subtitle">New Dress Designs Available</span></h3>
							<p><a href="#" class="btn btn-secondary">Check New Arrivals</a></p>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-lg-4">
					<div class="feature-box text-center media-box fbox-bg">
						<div class="fbox-media">
							<img src="images/shop/banners/12.jpg" alt="Image">
						</div>
						<div class="fbox-content">
							<h3>The Style Blog<span class="subtitle">Fashion Tips from Experts</span></h3>
							<p><a href="#" class="btn btn-secondary">Browse Videos</a></p>
						</div>
					</div>
				</div>
			</div>

			<div class="row justify-content-center col-mb-50">
				<div class="col-sm-6 col-lg-4">
					<div class="fancy-title title-border">
						<h4>Recently Arrived</h4>
					</div>

					<div class="posts-sm row col-mb-30" id="recent-shop-list-sidebar">
						<div class="entry col-12">
							<div class="grid-inner row g-0">
								<div class="col-auto">
									<div class="entry-image">
										<a href="#"><img src="images/shop/small/1.jpg" alt="Image"></a>
									</div>
								</div>
								<div class="col ps-3">
									<div class="entry-title">
										<h4><a href="#">Blue Round-Neck T-Shirt</a></h4>
									</div>
									<div class="entry-meta no-separator">
										<ul>
											<li class="color">$29.99</li>
											<li><i class="icon-star3"></i><i class="icon-star3"></i><i
													class="icon-star3"></i><i class="icon-star3"></i><i
													class="icon-star-half-full"></i></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="entry col-12">
							<div class="grid-inner row g-0">
								<div class="col-auto">
									<div class="entry-image">
										<a href="#"><img src="images/shop/small/6.jpg" alt="Image"></a>
									</div>
								</div>
								<div class="col ps-3">
									<div class="entry-title">
										<h4><a href="#">Checked Short Dress</a></h4>
									</div>
									<div class="entry-meta no-separator">
										<ul>
											<li class="color">$23.99</li>
											<li><i class="icon-star3"></i><i class="icon-star3"></i><i
													class="icon-star3"></i><i class="icon-star-half-full"></i><i
													class="icon-star-empty"></i></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="entry col-12">
							<div class="grid-inner row g-0">
								<div class="col-auto">
									<div class="entry-image">
										<a href="#"><img src="images/shop/small/7.jpg" alt="Image"></a>
									</div>
								</div>
								<div class="col ps-3">
									<div class="entry-title">
										<h4><a href="#">Light Blue Denim Dress</a></h4>
									</div>
									<div class="entry-meta no-separator">
										<ul>
											<li class="color">$19.99</li>
											<li><i class="icon-star3"></i><i class="icon-star3"></i><i
													class="icon-star3"></i><i class="icon-star-empty"></i><i
													class="icon-star-empty"></i></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="entry col-12">
							<div class="grid-inner row g-0">
								<div class="col-auto">
									<div class="entry-image">
										<a href="#"><img src="images/shop/small/9.jpg" alt="Image"></a>
									</div>
								</div>
								<div class="col ps-3">
									<div class="entry-title">
										<h4><a href="#">Slim Fat Chinos</a></h4>
									</div>
									<div class="entry-meta no-separator">
										<ul>
											<li class="color">$24.99</li>
											<li><i class="icon-star3"></i><i class="icon-star3"></i><i
													class="icon-star3"></i><i class="icon-star3"></i><i
													class="icon-star-empty"></i></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="col-sm-6 col-lg-4">
					<div class="fancy-title title-border">
						<h4>Popular Products</h4>
					</div>

					<div class="posts-sm row col-mb-30" id="popular-shop-list-sidebar">
						<div class="entry col-12">
							<div class="grid-inner row g-0">
								<div class="col-auto">
									<div class="entry-image">
										<a href="#"><img src="images/shop/small/3.jpg" alt="Image"></a>
									</div>
								</div>
								<div class="col ps-3">
									<div class="entry-title">
										<h4><a href="#">Round-Neck T-Shirt</a></h4>
									</div>
									<div class="entry-meta no-separator">
										<ul>
											<li class="color">$15</li>
											<li><i class="icon-star3"></i><i class="icon-star3"></i><i
													class="icon-star3"></i><i class="icon-star3"></i><i
													class="icon-star3"></i></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="entry col-12">
							<div class="grid-inner row g-0">
								<div class="col-auto">
									<div class="entry-image">
										<a href="#"><img src="images/shop/small/10.jpg" alt="Image"></a>
									</div>
								</div>
								<div class="col ps-3">
									<div class="entry-title">
										<h4><a href="#">Green Trousers</a></h4>
									</div>
									<div class="entry-meta no-separator">
										<ul>
											<li class="color">$19</li>
											<li><i class="icon-star3"></i><i class="icon-star3"></i><i
													class="icon-star-empty"></i><i class="icon-star-empty"></i><i
													class="icon-star-empty"></i></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="entry col-12">
							<div class="grid-inner row g-0">
								<div class="col-auto">
									<div class="entry-image">
										<a href="#"><img src="images/shop/small/11.jpg" alt="Image"></a>
									</div>
								</div>
								<div class="col ps-3">
									<div class="entry-title">
										<h4><a href="#">Silver Chrome Watch</a></h4>
									</div>
									<div class="entry-meta no-separator">
										<ul>
											<li class="color">$34.99</li>
											<li><i class="icon-star3"></i><i class="icon-star3"></i><i
													class="icon-star3"></i><i class="icon-star-half-full"></i><i
													class="icon-star-empty"></i></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="entry col-12">
							<div class="grid-inner row g-0">
								<div class="col-auto">
									<div class="entry-image">
										<a href="#"><img src="images/shop/small/4.jpg" alt="Image"></a>
									</div>
								</div>
								<div class="col ps-3">
									<div class="entry-title">
										<h4><a href="#">Black Polo T-Shirt</a></h4>
									</div>
									<div class="entry-meta no-separator">
										<ul>
											<li class="color">$17.99</li>
											<li><i class="icon-star3"></i><i class="icon-star3"></i><i
													class="icon-star3"></i><i class="icon-star3"></i><i
													class="icon-star-half-full"></i></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="col-sm-6 col-lg-4">
					<div class="fancy-title title-border">
						<h4>Recommended for You</h4>
					</div>

					<div class="posts-sm row col-mb-30" id="recommended-shop-list-sidebar">
						<div class="entry col-12">
							<div class="grid-inner row g-0">
								<div class="col-auto">
									<div class="entry-image">
										<a href="#"><img src="images/shop/small/8.jpg" alt="Image"></a>
									</div>
								</div>
								<div class="col ps-3">
									<div class="entry-title">
										<h4><a href="#">Pink Printed Dress</a></h4>
									</div>
									<div class="entry-meta no-separator">
										<ul>
											<li class="color">$21</li>
											<li><i class="icon-star3"></i><i class="icon-star3"></i><i
													class="icon-star3"></i><i class="icon-star3"></i><i
													class="icon-star-half-full"></i></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="entry col-12">
							<div class="grid-inner row g-0">
								<div class="col-auto">
									<div class="entry-image">
										<a href="#"><img src="images/shop/small/5.jpg" alt="Image"></a>
									</div>
								</div>
								<div class="col ps-3">
									<div class="entry-title">
										<h4><a href="#">Blue Round-Neck T-Shirt</a></h4>
									</div>
									<div class="entry-meta no-separator">
										<ul>
											<li class="color">$19.99</li>
											<li><i class="icon-star3"></i><i class="icon-star3"></i><i
													class="icon-star3"></i><i class="icon-star-empty"></i><i
													class="icon-star-empty"></i></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="entry col-12">
							<div class="grid-inner row g-0">
								<div class="col-auto">
									<div class="entry-image">
										<a href="#"><img src="images/shop/small/12.jpg" alt="Image"></a>
									</div>
								</div>
								<div class="col ps-3">
									<div class="entry-title">
										<h4><a href="#">Men Aviator Sunglasses</a></h4>
									</div>
									<div class="entry-meta no-separator">
										<ul>
											<li class="color">$14.99</li>
											<li><i class="icon-star3"></i><i class="icon-star3"></i><i
													class="icon-star-half-full"></i><i class="icon-star-empty"></i><i
													class="icon-star-empty"></i></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="entry col-12">
							<div class="grid-inner row g-0">
								<div class="col-auto">
									<div class="entry-image">
										<a href="#"><img src="images/shop/small/2.jpg" alt="Image"></a>
									</div>
								</div>
								<div class="col ps-3">
									<div class="entry-title">
										<h4><a href="#">Unisex Sunglasses</a></h4>
									</div>
									<div class="entry-meta no-separator">
										<ul>
											<li class="color">$17.99</li>
											<li><i class="icon-star3"></i><i class="icon-star3"></i><i
													class="icon-star3"></i><i class="icon-star3"></i><i
													class="icon-star-half-full"></i></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="clear"></div>
			<div class="line"></div>

			<div id="oc-clients-full" class="owl-carousel image-carousel carousel-widget" data-margin="30" data-nav="false"
				data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4"
				data-items-lg="5" data-items-xl="7">

				<div class="oc-item"><a href="#"><img src="images/clients/logo/1.png" alt="Clients"></a></div>
				<div class="oc-item"><a href="#"><img src="images/clients/logo/2.png" alt="Clients"></a></div>
				<div class="oc-item"><a href="#"><img src="images/clients/logo/3.png" alt="Clients"></a></div>
				<div class="oc-item"><a href="#"><img src="images/clients/logo/4.png" alt="Clients"></a></div>
				<div class="oc-item"><a href="#"><img src="images/clients/logo/5.png" alt="Clients"></a></div>
				<div class="oc-item"><a href="#"><img src="images/clients/logo/6.png" alt="Clients"></a></div>
				<div class="oc-item"><a href="#"><img src="images/clients/logo/7.png" alt="Clients"></a></div>
				<div class="oc-item"><a href="#"><img src="images/clients/logo/8.png" alt="Clients"></a></div>
				<div class="oc-item"><a href="#"><img src="images/clients/logo/9.png" alt="Clients"></a></div>
				<div class="oc-item"><a href="#"><img src="images/clients/logo/10.png" alt="Clients"></a></div>
				<div class="oc-item"><a href="#"><img src="images/clients/logo/11.png" alt="Clients"></a></div>
				<div class="oc-item"><a href="#"><img src="images/clients/logo/12.png" alt="Clients"></a></div>
				<div class="oc-item"><a href="#"><img src="images/clients/logo/13.png" alt="Clients"></a></div>
				<div class="oc-item"><a href="#"><img src="images/clients/logo/14.png" alt="Clients"></a></div>
				<div class="oc-item"><a href="#"><img src="images/clients/logo/15.png" alt="Clients"></a></div>
				<div class="oc-item"><a href="#"><img src="images/clients/logo/18.png" alt="Clients"></a></div>

			</div>


		</div>
				
		
	</div>
<?php
}
}
/* {/block 'page'} */
}
