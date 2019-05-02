 <div id="user"class="manageruser" style="">
 	<div class="btn-group">
 		<i class="fas fa-user-circle"style="font-size: 25px;
 		color: #922e40;cursor: pointer;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
 		<div class="dropdown-menu dropdown-menu-right">
 			<button class="dropdown-item" type="button">Hello : <?= $this->session->userdata['logged_in'] ?></button>
 			<button class="dropdown-item" type="button">Your Publish</button>
 			<hr/>
 			<button class="dropdown-item" type="button">Logout</button>
 		</div>
 	</div>
 </div>

