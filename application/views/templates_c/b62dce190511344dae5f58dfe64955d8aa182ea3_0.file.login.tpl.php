<?php
/* Smarty version 4.2.0, created on 2022-08-26 01:47:09
  from 'D:\laragon\www\ecommerce\application\views\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6308261dec1e18_51751017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b62dce190511344dae5f58dfe64955d8aa182ea3' => 
    array (
      0 => 'D:\\laragon\\www\\ecommerce\\application\\views\\templates\\login.tpl',
      1 => 1661478419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6308261dec1e18_51751017 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1072001216308261deb4d47_82126618', 'pageTitle');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18737799956308261debabe3_67577626', 'page');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/main.layout.tpl");
}
/* {block 'pageTitle'} */
class Block_1072001216308261deb4d47_82126618 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageTitle' => 
  array (
    0 => 'Block_1072001216308261deb4d47_82126618',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['mysoc']->value->name;?>
 | Login <?php
}
}
/* {/block 'pageTitle'} */
/* {block 'page'} */
class Block_18737799956308261debabe3_67577626 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_18737799956308261debabe3_67577626',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



	<div class="section p-0 m-0 h-100 position-absolute"
		style="background: url('<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/viewimage.php?cache=1&noalt=1&modulepart=mycompany&file=logos/background_dolibarr.jpg') center center no-repeat; background-size: cover;">
	</div>

	<div class="section bg-transparent min-vh-100 p-0 m-0">
		<div class="vertical-middle">
			<div class="container-fluid py-5 mx-auto">
				<div class="center">
					<a href="/"><img src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/viewimage.php?modulepart=mycompany&file=logos/<?php echo $_smarty_tpl->tpl_vars['mysoc']->value->logo;?>
"
							alt="Canvas Logo"></a>
				</div>

				<div class="card mx-auto rounded-0 border-0"
					style="max-width: 400px; background-color: rgba(255,255,255,0.93);">
					<div class="card-body" style="padding: 40px;">
												<?php echo $_smarty_tpl->tpl_vars['form_open']->value;?>

							<h3>Login to your Account</h3>

							<div class="row">
								<div class="col-12 form-group">
									<label for="login-form-username">Username:</label>
									<input type="text" id="login-form-username" name="login-form-username" value=""
										class="form-control not-dark" />
								</div>

								<div class="col-12 form-group">
									<label for="login-form-password">Password:</label>
									<input type="password" id="login-form-password" name="login-form-password" value=""
										class="form-control not-dark" />
								</div>

								<div class="col-12 form-group">
									<button class="button button-3d button-black m-0" id="login-form-submit"
										name="login-form-submit" value="login">Login</button>
									<a href="#" class="float-end">Forgot Password?</a>
								</div>
							</div>
						</form>

						<div class="line line-sm"></div>
						<?php if ((isset($_smarty_tpl->tpl_vars['error']->value))) {?>
							<div class="style-msg errormsg">
								<div class="sb-msg"><i class="icon-remove"></i><strong>Error!</strong> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
							</div>
						<?php }?>
					</div>
				</div>

				<div class="text-center dark mt-3"><small>Copyrights &copy; <?php echo $_smarty_tpl->tpl_vars['mysoc']->value->name;?>
.</small></div>
			</div>
		</div>
	</div>
<?php
}
}
/* {/block 'page'} */
}
