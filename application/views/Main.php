<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=5,IE=9" ><![endif]-->
<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
	$this->load->view('Head');
	?>
</head>
<body class="geEditor">
	<div class="loading">Loading&#8230;</div>
	<div id="processuser">
		<?php
		if (!isset($this->session->userdata['logged_in'])) {
			$this->load->view('Authen/index');
		}else{
			$this->load->view('Authen/usermanager');
		}
		?>
		<button class="btn btn-primary" id="btnShare" style="z-index: 100;position: absolute;right: 80px;font-size: 12px;">Share</button>
	</div>
	<?php
	if (isset($subview)) {
		$this->load->view($subview);
	}
	?>
	<!-- Modal -->
	<div class="modal fade" id="popup-publish" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Shared</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="nameFile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">File</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="alert alert-danger unactive" role="alert" id="msgerrorFileName">
					</div>
					<div class="alert alert-success unactive" role="alert" id="msgsuccessFileName">
					</div>
					<form id="frmFileName">
						<div class="form-group row">
							<label for="FileName" class="col-12 col-md-3 form-control-label">File Name</label>
							<div class="col-10 col-md-6">
								<input tabindex="1" type="text" class="form-control" id="FileName" name="FileName" required >
							</div>
						</div>
						<button type='button' class="btn btn-primary float-right" id="btnSaveFile">Save</button>

					</form>
				</div>
			</div>
		</div>
	</div>
</body>

<script type="text/javascript">
	$('#btnSaveFile').click(function(event) {
		clearMsg('FileName');
		debugger;
		if ($('#FileName').val()==="") {
			addMsgError('File Name is required','FileName');
			return false;
		}
		triggerSpinner();

		$.ajax({
			url: '<?php echo site_url('ShareCL/SaveShare') ?>',
			type: 'POST',
			dataType: 'json',
			data: {
				FileName: $('#FileName').val(),
				value: createValue()
			},
			success:function (resp) {
				debugger;
				if (resp.success) {
					setNameFile(resp.data);
					$('#nameFile').modal('hide');
				}else {
					addMsgError(resp.msg,'FileName');
				}
			},
			error:function (resp) {
				addMsgError("Save Error",'FileName');
			}
		})
		.always(function() {
			removeSpinner();
		});
		
	});
	$('#btnShare').click(function(event) {
		clearMsgParent();
		$('#popup-publish .modal-body').empty();
		if ($('#user').length==0) {
			$('#popupLogin').modal('show');
			addMsgError("You need to login to use the function!");	
		}else{
			triggerSpinner();
			$.ajax({
				url: '<?php echo site_url('ShareCL/AddShare') ?>',
				type: 'POST',
				dataType: 'json',
				data: {
					value: createValue()
				},
				success:function (resp) {
					debugger;
					if (resp.success) {
						$('#popup-publish').modal('show');
						$('#popup-publish .modal-body').append(resp.data);
					}else {
						addMsgErrorParent("Share Error!");
					}
				},
				error:function (resp) {
					addMsgErrorParent("Share Error!");
				}
			})
			.always(function (argument) {
				removeSpinner();
			})
		}
	});
</script>
</html>