 <div id="user"class="manageruser" style="">
 	<div class="btn-group">
 		<i class="fas fa-user-circle"style="font-size: 25px;
 		color: #922e40;cursor: pointer;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
 		<div class="dropdown-menu dropdown-menu-right mt-2">
 			<button class="dropdown-item" type="button"><a target="_blank" href="<?= base_url()."ConfigCL" ?>">My Account</a></button>
 			<hr/>
 			<button class="dropdown-item" type="button" id="btnLogout">Logout</button>
 		</div>
 	</div>
 	<script type="text/javascript">
 		//2019/07/08 gnguyen start add
 		isAuthen=true;
 		$(document).ready(function () {
 			<?php
 			if (isset($this->session->userdata['roler_user'])) {
 				if ($this->session->userdata['roler_user']==1) {
 					echo "$('#btnShare').show();";
 				}
 				
 			}
 			?>
 		})
 		//2019/07/08 gnguyen end add
 		$('#btnLogout').click(function(event) {
 			clearMsgParent();
 			triggerSpinner();
 			$.ajax({
 				url: '<?php echo base_url()."AuthenticateCL/Logout" ?>',
 				type: 'GET',
 				dataType: 'json',
 				success:function (response) {
 					if (response.success) {
 						$('#btn-Save').hide();
 						$('#btnShare').hide();
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
 				url: '<?php echo base_url()."ShareCL/GetAllOfUser" ?>',
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

