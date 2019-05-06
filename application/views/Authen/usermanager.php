 <div id="user"class="manageruser" style="">
 	<div class="btn-group">
 		<i class="fas fa-user-circle"style="font-size: 25px;
 		color: #922e40;cursor: pointer;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
 		<div class="dropdown-menu dropdown-menu-right mt-2">
 			<button class="dropdown-item" type="button"><a target="_blank"> href="<?= site_url('ConfigCL') ?>">Hello <?= $this->session->userdata['logged_in'] ?></a></button>
 			<hr/>
 			<button class="dropdown-item" type="button" id="btnLogout">Logout</button>
 		</div>
 	</div>
 	<script type="text/javascript">
 		$('#btnLogout').click(function(event) {
 			clearMsgParent();
 			triggerSpinner();
 			$.ajax({
 				url: '<?php echo site_url('AuthenticateCL/Logout') ?>',
 				type: 'GET',
 				dataType: 'json',
 				success:function (response) {
 					if (response.success) {
 						$('#processuser').append(response.data);
 						$('#user').remove();
 					}else{
 						addMsgErrorParent(response.msg);
 					}
 				},
 				error:function (response) {
 					addMsgErrorParent("Logout error");
 				}
 			}).always(function (argument) {
				removeSpinner();
			});
 			
 			
 		});
 		$('#btnShared').click(function(event) {
 			clearMsgParent();
 			$('#popup-publish .modal-body').empty();
 			triggerSpinner();
 			$.ajax({
 				url: '<?php echo site_url('ShareCL/GetAllOfUser') ?>',
 				type: 'POST',
 				dataType: 'json',
 				success:function (resp) {
 					$('#popup-publish').modal('show');
 					$('#popup-publish .modal-body').append(resp.data);
 				},
 				error:function (resp) {
 					addMsgErrorParent("Error!");
 				}
 			}).always(function (argument) {
				removeSpinner();
			});
 		});
 	</script>
 </div>

