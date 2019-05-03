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
</body>

<script type="text/javascript">
	
	$('#btnShare').click(function(event) {
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
						alert("Share Error!");
					}
				},
				error:function (resp) {
					alert("Share Error!");
				}
			})
			.always(function (argument) {
				removeSpinner();
			})
		}
	});
</script>
</html>