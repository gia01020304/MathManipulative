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
	</div>
	<?php
	if (isset($subview)) {
		$this->load->view($subview);
	}
	?>
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
	<div class="mxPopupMenu geToolbarMenu" id="divUrlShare" style="display: none; z-index: 10006;">
		<table class="mxPopupMenu">
			<tbody>
				<tr class="mxPopupMenuItem"><td class="mxPopupMenuIcon">
					
				</td>
				<td class="mxPopupMenuItem unset-padding" align="left" style="padding: 6px 8px;">
					<div class="input-group unset-padding">
						<input type="text" class="form-control unset-padding" id="inputUrlShare">
						<div class="input-group-append unset-padding">
							<button class="far fa-clipboard" type="button"></button>
						</div>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
</div>
<input type="hidden" name="" value="0" id="divType">
</body>
<script type="text/javascript">
	$('#btnSaveFile').click(function(event) {
		clearMsg('FileName');
		if ($('#FileName').val()==="") {
			addMsgError('File Name is required','FileName');
			return false;
		}
		saveShare(createValue(),true,$('#FileName').val());
	});
</script>
</html>