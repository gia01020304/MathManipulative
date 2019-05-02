<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=5,IE=9" ><![endif]-->
<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
	$this->load->view('Head');
	?>
</head>
<body class="geEditor">
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
</body>
</html>