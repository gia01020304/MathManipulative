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
	<div id="processuser" class="m-2">
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
	
	<div id="divEditor"></div>
	<!-- Modal -->
	<div class="modal fade" id="nameFile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Create File</h5>
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
						<div class="input-group mb-3 bottom-border">
							<div class="input-group-prepend">
								<span class="input-group-text none-border-input white-background" id="basic-addon1"><i class="fas fa-file-signature"></i></span>
							</div>
							<input tabindex="1" type="text" class="form-control none-border-input" placeholder="File Name" id="FileName" name="FileName" required >
						</div>
						<button type='submit' class="btn btn-primary form-control btn-login" id="btnSaveFile">Save File</button>
					</form>

				</div>
			</div>
		</div>s
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
							<button class="far fa-copy" type="button" title="Click to copy to clipboard" onclick="copyToClipboard(document.getElementById('inputUrlShare'))"></button>
						</div>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
</div>
<input type="hidden" name="" value="0" id="divType">
</body>
<script>
	$(document).ready(function () {
		<?php
		if (isset($this->session->userdata['roler_user'])) {
			if ($this->session->userdata['roler_user']==1) {
				echo "$('#btnShare').show();";
			}
			
		}
		?>
	})
	$('#frmFileName').submit(function(event) {
		event.preventDefault();
	});
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