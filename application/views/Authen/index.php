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
						<form>
							<div class="form-group row">
								<label for="UserName" class="col-12 col-md-2 form-control-label">User Name</label>
								<div class="col-10 col-md-6">
									<input type="text" class="form-control" id="UserName" name="UserName" >
								</div>
							</div>
							<div class="form-group row">
								<label for="Password" class="col-12 col-md-2 form-control-label">Password</label>
								<div class="col-10 col-md-6">
									<input type="password" class="form-control" id="Password" name="Password">
								</div>
							</div>
						</form>
						<p class="text-center">NOT REGISTERED? <span style="color: red"><a href="#" id="RegisterHere">REGISTER HERE</a></span></p>
						<div id="footer" class="float-right">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary" id="btnLogin">Login</button> 
						</div>
					</div>
					<div id="frmRegister" class="unactive">
						<form>
							<div class="form-group row">
								<label for="EmailRegister" class="col-12 col-md-2 form-control-label">Email</label>
								<div class="col-10 col-md-6">
									<input type="email" class="form-control" id="EmailRegister" name="EmailRegister" >
								</div>
							</div>
							<div class="form-group row">
								<label for="UserNameRegister" class="col-12 col-md-2 form-control-label">User Name</label>
								<div class="col-10 col-md-6">
									<input type="text" class="form-control" id="UserNameRegister" name="UserNameRegister" >
								</div>
							</div>
							<div class="form-group row">
								<label for="PasswordRegister" class="col-12 col-md-2 form-control-label">Password</label>
								<div class="col-10 col-md-6">
									<input type="password" class="form-control" id="PasswordRegister" name="PasswordRegister">
								</div>
							</div>
						</form>
						<p class="text-center">REGISTERED? <span style="color: red"><a href="#" id="LoginHere">Login</a></span></p>
						<div id="footer" class="float-right">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Register</button> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$('#btnLogin').click(function(event) {
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
						$('#authenticate').addClass('unactive');
						$('#processuser').append(resp.data);
					}else{
						$('#msgerror').removeClass('unactive');
						$('#msgerror').text(resp.msg);
					}
				},
				error:function (resp) {
					$('#msgerror').removeClass('unactive');
					$('#msgerror').text("Login error");
				}
			})
		});
		$('#RegisterHere').click(function(event) {
			$('#frmLogin').addClass('unactive');
			$('#frmRegister').removeClass('unactive');
			return false;
		});
		$('#LoginHere').click(function(event) {
			$('#frmRegister').addClass('unactive');
			$('#frmLogin').removeClass('unactive');
			return false;
		});
	</script>
</div>