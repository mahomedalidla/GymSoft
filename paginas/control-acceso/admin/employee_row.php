<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT *, socios.id_socio as empid FROM socios LEFT JOIN position ON position.id=socios.position_id LEFT JOIN schedules ON schedules.id=socios.id_horario WHERE socios.id_socio = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>