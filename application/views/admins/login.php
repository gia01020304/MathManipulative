<?php if (isset($isSaveSuccessful)) {?>
<?php if ($isSaveSuccessful === false) {?>
<div class="alert alert-danger" role="alert" id="msgerror">
	User name or password is not correct!
</div>
<?php } else {?>
<div class="alert alert-success" role="alert" id="msgerror">
	Save config successfully!
</div>
<?php }
}
?>
<div
	id="frmLogin"
	class="container-fluid"
	style="margin-left:80px;margin-right:80px;"
>
	<form
		id="frmlogin"
		method="post"
		action="<?=base_url()?>/AuthenticateCL/adminLogin"
	>
		<div class="form-group row">
			<label for="UserName" class="col-12 col-md-3 form-control-label"
				>User Name</label
			>
			<div class="col-10 col-md-6">
				<input
					tabindex="1"
					type="text"
					class="form-control"
					id="UserName"
					name="UserName"
					required
				/>
			</div>
		</div>
		<div class="form-group row">
			<label for="Password" class="col-12 col-md-3 form-control-label"
				>Password</label
			>
			<div class="col-10 col-md-6">
				<input
					tabindex="2"
					type="password"
					class="form-control"
					id="Password"
					name="Password"
					required
				/>
			</div>
		</div>
		<button
			tabindex="3"
			type="submit"
			class="btn btn-primary float-right"
			id="btnLogin"
		>
			Login
		</button>
	</form>
</div>
