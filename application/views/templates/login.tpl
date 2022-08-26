{extends file="layout/main.layout.tpl"}

{block name=pageTitle}{$mysoc->name} | Login {/block}

{block name=page}

	
	<div class="section p-0 m-0 h-100 position-absolute"
		style="background: url('{$dol_url_root}/viewimage.php?cache=1&noalt=1&modulepart=mycompany&file=logos/background_dolibarr.jpg') center center no-repeat; background-size: cover;">
	</div>

	<div class="section bg-transparent min-vh-100 p-0 m-0">
		<div class="vertical-middle">
			<div class="container-fluid py-5 mx-auto">
				<div class="center">
					<a href="/"><img src="{$dol_url_root}/viewimage.php?modulepart=mycompany&file=logos/{$mysoc->logo}"
							alt="Canvas Logo"></a>
				</div>

				<div class="card mx-auto rounded-0 border-0"
					style="max-width: 400px; background-color: rgba(255,255,255,0.93);">
					<div class="card-body" style="padding: 40px;">
						{* <form id="login-form" name="login-form" class="mb-0" action="/login" method="post"> *}
						{$form_open}
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
						{if isset($error)}
							<div class="style-msg errormsg">
								<div class="sb-msg"><i class="icon-remove"></i><strong>Error!</strong> {$error}</div>
							</div>
						{/if}
					</div>
				</div>

				<div class="text-center dark mt-3"><small>Copyrights &copy; {$mysoc->name}.</small></div>
			</div>
		</div>
	</div>
{/block}
