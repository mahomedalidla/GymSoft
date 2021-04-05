<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT *, socios.id_socio as empid FROM socios LEFT JOIN position ON position.id=socios.position_id LEFT JOIN schedules ON schedules.id=socios.schedule_id WHERE socios.id_socios = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>