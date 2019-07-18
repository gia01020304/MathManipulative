<style type="text/css">
	.modal-login .modal-content {
		border-radius: 1px;
		border: none;
	}
	.modal-login .modal-header {
		position: relative;
		justify-content: center;
		background: #f2f2f2;
	}
	.modal-login .modal-body {
		padding: 30px;
	}
	.modal-login .modal-footer {
		background: #f2f2f2;
	}
	
	
	
	.modal-login .hint-text {
		text-align: center;
	}
	.modal-login .close {
		position: absolute;
		top: 15px;
		right: 15px;
	}
	
	
	.modal-login .btn:hover, .modal-login .btn:focus {
		background: #248bd0;
	}
	.modal-login .hint-text a {
		color: #999;
	}
	.trigger-btn {
		display: inline-block;
		margin: 100px auto;
	}
</style>
<div id="authenticate" style="">
	<div id="authen" class="manageruser">
		<a href="#" data-toggle="modal" data-target="#popupLogin" class="login-link" ><i class="fas fa-lock"></i></a>
	</div>

	<div class="modal fade" id="popupLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-login" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="title-login">Login</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="alert alert-danger unactive" role="alert" id="msgerror">
					</div>
					<div class="alert alert-success unactive" role="alert" id="msgsuccess">
					</div>
					<div id="frmLogin" class="">
						<form id="frmlogin" autocomplete="off">
							<input style="display:none" type="text" name="fakeusernameremembered"/>
							<input style="display:none" type="password" name="fakepasswordremembered"/>
							<div class="input-group mb-3">
  								<div class="input-group-prepend">
    								<span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
  								</div>
								  <input tabindex="1" type="text" placeholder="User name" class="form-control" id="UserName" name="UserName" required autoComplete="off">
							</div>
							<div class="input-group mb-3">
  								<div class="input-group-prepend">
    								<span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
  								</div>
								  <input tabindex="2" type="password" placeholder="Password" class="form-control" id="Password" name="Password" required autocomplete="new-password">
							</div>
							<div class="mb-3">
							<button tabindex="3" type="submit" class="form-control btn-login" id="btnLogin">Sign In</button> 
							</div>
						</form>
						
					</div>
					<div id="frmRegister" class="unactive">
						<form autocomplete="off" id="frmregister">
							<input style="display:none" type="text" name="fakeusernameremembered"/>
							<input style="display:none" type="password" name="fakepasswordremembered"/>
							<div class="form-group row">
								<label for="EmailRegister" class="col-12 col-md-3 form-control-label">Email</label>
								<div class="col-10 col-md-6">
									<input tabindex="4" type="email" class="form-control" id="EmailRegister" name="EmailRegister" >
								</div>
							</div>
							<div class="form-group row">
								<label for="UserNameRegister" class="col-12 col-md-3 form-control-label">User Name</label>
								<div class="col-10 col-md-6">
									<input tabindex="5" type="text" class="form-control" id="UserNameRegister" name="UserNameRegister" autoComplete="off">
								</div>
							</div>
							<div class="form-group row">
								<label for="PasswordRegister" class="col-12 col-md-3 form-control-label">Password</label>
								<div class="col-10 col-md-6">
									<input tabindex="6" type="password" class="form-control" id="PasswordRegister" name="PasswordRegister" autoComplete="new-password">
								</div>
							</div>
							<div class="form-group row">
								<label for="PasswordRegister" class="col-12 col-md-3 form-control-label">Confirm Password</label>
								<div class="col-10 col-md-6">
									<input tabindex="7" type="password" class="form-control" id="PasswordConfirmRegister" name="PasswordRegister">
								</div>
							</div>
							<p class="text-center">REGISTERED? <span style="color: red"><a href="#" id="LoginHere">Login</a></span></p>
							<div id="footer" class="float-right">
								<button tabindex="8" type="submit" class="btn btn-primary" id="btnRegister">Sign Up</button> 
							</div>
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#divFileName').text('');
			$('#frmlogin').submit(function(event) {
				event.preventDefault();
			});
			$('#frmregister').submit(function(event) {
				event.preventDefault();
			});
		});
		$('#popupLogin').on('show.bs.modal', function (e) {
			$('#frmRegister').addClass('unactive');
			$('#frmLogin').removeClass('unactive');
			clearMsg();
		})
		$('#btnRegister').click(function(event) {
			clearMsg();
			var isValid=true;
			var msg="";
			if ($('#EmailRegister').val()==="") {
				msg+="Email is required. <br />";
				isValid=false;
			}else{
				if (!isValidEmailAddress($('#EmailRegister').val())) {
					msg+="Email is not valid. <br />";
					isValid=false;
				}
			}

			if ($('#UserNameRegister').val()==="") {
				msg+="UserName is required. <br />";
				isValid=false;
			}
			if ($('#PasswordRegister').val()==="") {
				msg+="Password is required. <br />";
				isValid=false;
			}
			if ($('#PasswordConfirmRegister').val()==="") {
				msg+="Password Confirm is required. <br />";
				isValid=false;
			}
			if (!isValid) {
				addMsgError(msg);
				return false;
			}
			if ($('#PasswordConfirmRegister').val()!==$('#PasswordRegister').val()) {
				msg+="Password confirm doesn't match ";
				addMsgError(msg);
				return false;
			}
			triggerSpinner();
			$.ajax({
				url: '<?php echo site_url('AuthenticateCL/Register') ?>',
				type: 'POST',
				dataType: 'json',
				data: {
					Email: $('#EmailRegister').val(),
					UserName: $('#UserNameRegister').val(),
					Password: $('#PasswordRegister').val(),
					ConfirmPassword: $('#PasswordConfirmRegister').val()

				},
				success:function (resp) {
					if (resp.success) {
						$('#title-login').html('Login');
						$('#frmRegister').addClass('unactive');
						$('#frmLogin').removeClass('unactive');
						$('#UserName').val($('#UserNameRegister').val());
						$('#Password').focus();
						addMsgSuceess(resp.msg);
					}else {
						addMsgError(resp.msg);
					}
				},
				error:function (resp) {
					addMsgError("Register Error!");
				}
			}).always(function (argument) {
				removeSpinner();
			})
		});
		$('#btnLogin').click(function(event) {
			clearMsg();
			var isValid=true;
			var msg="";
			if ($('#UserName').val()==="") {
				msg+="UserName is required. <br />";
				isValid=false;
			}
			if ($('#Password').val()==="") {
				msg+="Password is required. <br />";
				isValid=false;
			}
			if (!isValid) {
				addMsgError(msg);
				return false;
			}
			triggerSpinner();
			$.ajax({
				url: '<?php echo site_url("AuthenticateCL/Login") ?>',
				type: 'POST',
				dataType: 'json',
				data: {
					UserName: $('#UserName').val(),
					Password:$('#Password').val()
				},
				success:function (resp) {
					if (resp.success) {
						
						$('#btn-Save').show();
						$('#popupLogin').modal('hide');
						$('#authenticate').remove();
						$('#processuser').append(resp.data);
						$('.modal-backdrop.fade.show').remove();
						processFeature();
					}else{
						addMsgError(resp.msg);
					}
				},
				error:function (resp) {
					addMsgError("Login Error!");
				}
			}).always(function (argument) {
				removeSpinner();
			})
		});
		$('#RegisterHere').click(function(event) {
			clearMsg();
			$('#title-login').html('Register');
			$('#frmLogin').addClass('unactive');
			$('#frmRegister').removeClass('unactive');
			return false;
		});
		$('#LoginHere').click(function(event) {
			clearMsg();
			$('#title-login').html('Login');
			$('#frmRegister').addClass('unactive');
			$('#frmLogin').removeClass('unactive');
			return false;
		});
	</script>
</div>