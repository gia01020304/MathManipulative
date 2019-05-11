<?php 
$sql = '';
$error = '';
$filePath="yvcgvgtfsb.sql";
$conn = new mysqli("localhost","yvcgvgtfsb", "3hxfNMW4PC");
if (file_exists($filePath)) {
	$lines = file($filePath);

	foreach ($lines as $line) {
		if (substr($line, 0, 2) == '--' || $line == '') {
			continue;
		}

		$sql .= $line;

		if (substr(trim($line), - 1, 1) == ';') {
			$result = mysqli_query($conn, $sql);
			if (! $result) {
				$error .= mysqli_error($conn) . "\n";
			}
			$sql = '';
		}
	}

	if ($error) {
		$response = array(
			"type" => "error",
			"message" => $error
		);
	} else {
		$response = array(
			"type" => "success",
			"message" => "Database Restore Completed Successfully."
		);
	}
	echo json_encode($response);
} 
?>