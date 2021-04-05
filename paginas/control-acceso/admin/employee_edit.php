<?php
	include 'includes/session.php';


	if(isset($_POST['edit'])){
		$nombre =  $_POST['nombre'];
    	$sexo =  $_POST['sexo'];
    	$membresia =  $_POST['membresia'];
    	$telefono =  $_POST['telefono'];
    	$horario =  $_POST['id_horario'];
    	$fechaN = $_POST['fechaN'];
		$posicion = $_POST['description'];
		/*  */
		$empid = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$birthdate = $_POST['birthdate'];
		$contact = $_POST['contact'];
		$gender = $_POST['gender'];
		$position = $_POST['position'];
		$schedule = $_POST['schedule'];
		
		$sql = "UPDATE socios SET firstname = '$firstname', lastname = '$lastname', address = '$address', birthdate = '$birthdate', contact_info = '$contact', gender = '$gender', position_id = '$position', schedule_id = '$schedule' WHERE id = '$empid'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Empleado actualizado con éxito';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Seleccionar empleado para editar primero';
	}

	header('location: employee.php');
?>