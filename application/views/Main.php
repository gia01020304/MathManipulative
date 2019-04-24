<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=5,IE=9" ><![endif]-->
<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
	$this->load->view('Head');
	?>
</head>
<body class="geEditor">
	<?php
	if (isset($subview)) {
		$this->load->view($subview);
	}
	?>
</body>
</html>