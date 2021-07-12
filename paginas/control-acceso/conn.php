<?php
	$conn = new mysqli('localhost:3306', 'root_mc', '0z@k7iF8', 'gymsoftv1'); ////*/*/*/*/

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
?>