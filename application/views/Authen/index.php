<div id="authenticate" style="">
	<div id="authen"class="manageruser">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#popupLogin" style="font-size: 12px;">Login</button>
	</div>

	<div class="modal fade" id="popupLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Math Manipulative</h5>
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
						<form id="frmlogin">
							<div class="form-group row">
								<label for="UserName" class="col-12 col-md-3 form-control-label">User Name</label>
								<div class="col-10 col-md-6">
									<input tabindex="1" type="text" class="form-control" id="UserName" name="UserName" required >
								</div>
							</div>
							<div class="form-group row">
								<label for="Password" class="col-12 col-md-3 form-control-label">Password</label>
								<div class="col-10 col-md-6">
									<input tabindex="2" type="password" class="form-control" id="Password" name="Password" required>
								</div>
							</div>
						</form>
						<p class="text-center">NOT REGISTERED? <span style="color: red"><a href="#" id="RegisterHere">REGISTER HERE</a></span></p>
						<div id="footer" class="float-right">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button tabindex="3" type="button" class="btn btn-primary" id="btnLogin">Login</button> 
						</div>
					</div>
					<div id="frmRegister" class="unactive">
						<form>
							<div class="form-group row">
								<label for="EmailRegister" class="col-12 col-md-3 form-control-label">Email</label>
								<div class="col-10 col-md-6">
									<input tabindex="4" type="email" class="form-control" id="EmailRegister" name="EmailRegister" >
								</div>
							</div>
							<div class="form-group row">
								<label for="UserNameRegister" class="col-12 col-md-3 form-control-label">User Name</label>
								<div class="col-10 col-md-6">
									<input tabindex="5" type="text" class="form-control" id="UserNameRegister" name="UserNameRegister" >
								</div>
							</div>
							<div class="form-group row">
								<label for="PasswordRegister" class="col-12 col-md-3 form-control-label">Password</label>
								<div class="col-10 col-md-6">
									<input tabindex="6" type="password" class="form-control" id="PasswordRegister" name="PasswordRegister">
								</div>
							</div>
							<div class="form-group row">
								<label for="PasswordRegister" class="col-12 col-md-3 form-control-label">Confirm Password</label>
								<div class="col-10 col-md-6">
									<input tabindex="7" type="password" class="form-control" id="PasswordConfirmRegister" name="PasswordRegister">
								</div>
							</div>
						</form>
						<p class="text-center">REGISTERED? <span style="color: red"><a href="#" id="LoginHere">Login</a></span></p>
						<div id="footer" class="float-right">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button tabindex="8" type="button" class="btn btn-primary" id="btnRegister">Register</button> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
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
				msg+="Email is required. ";
				isValid=false;
			}
			if ($('#UserNameRegister').val()==="") {
				msg+="UserName is required. ";
				isValid=false;
			}
			if ($('#PasswordRegister').val()==="") {
				msg+="Password is required. ";
				isValid=false;
			}
			if ($('#PasswordConfirmRegister').val()==="") {
				msg+="Password Confirm is required. ";
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
						$('#frmRegister').addClass('unactive');
						$('#frmLogin').removeClass('unactive');
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
				msg+="UserName is required. ";
				isValid=false;
			}
			if ($('#Password').val()==="") {
				msg+="Password is required. ";
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
						debugger;
						$('#popupLogin').modal('hide');
						$('#authenticate').remove();
						$('#processuser').append(resp.data);
						$('.modal-backdrop.fade.show').remove();
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
			$('#frmLogin').addClass('unactive');
			$('#frmRegister').removeClass('unactive');
			return false;
		});
		$('#LoginHere').click(function(event) {
			clearMsg();
			$('#frmRegister').addClass('unactive');
			$('#frmLogin').removeClass('unactive');
			return false;
		});
	</script>
</div>