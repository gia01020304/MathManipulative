 <div id="user"class="manageruser">
 	<div class="btn-group">
 		<i class="fas fa-user-circle"style="font-size: 25px;
 		color: #922e40;cursor: pointer;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
 		<div class="dropdown-menu dropdown-menu-right">
 			<b class="dropdown-item">Hello : <?= $this->session->userdata['logged_in'] ?></b>
 			<button class="dropdown-item" type="button">Your Publish</button>
 			<hr/>
 			<button class="dropdown-item" type="button">Logout</button>
 		</div>
 	</div>
 </div>
