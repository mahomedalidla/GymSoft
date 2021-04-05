<?php
	include 'includes/session.php';


	if(isset($_POST['add'])){
	
		$nombre =  $_POST['nombre'];
    	$sexo =  $_POST['sexo'];
    	$membresia =  $_POST['membresia'];
    	$telefono =  $_POST['telefono'];
    	$horario =  $_POST['id_horario'];
    	$fechaN = $_POST['fechaN'];
		$posicion = $_POST['description'];
		/*  */
		// $nombre = $_POST['nombreSocio'];
		// $address = $_POST['address'];
		// $birthdate = $_POST['birthdate'];
		// $contact = $_POST['contact'];
		// $gender = $_POST['gender'];
		// $position = $_POST['position'];
		// $schedule = $_POST['schedule'];
		// $filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		//creating employeeid
		$letters = '';
		$numbers = '';
		foreach (range('A', 'Z') as $char) {
		    $letters .= $char;
		}
		for($i = 0; $i < 10; $i++){
			$numbers .= $i;
		}
		$employee_id = substr(str_shuffle($letters), 0, 3).substr(str_shuffle($numbers), 0, 9);
		//
		
		/* base */
		$imagen = subir_imagen($_FILES['imagen']);

    /* Obteniendo fecha actual con funcion date */
    	$fechaActual = date('Y-m-d');

    	/* Obteniendo fecha del sig mes, error al insertar en bd por no ser string */
    	$fechaFin = new DateTime('');
    	$fechaFin->modify( 'next month' );

    	/* Convert DateTime to String */
    	$newDate = $fechaFin->format('Y-m-d');

		/*  */
		// $sql = "INSERT INTO employees (employee_id, firstname, lastname, address, birthdate, contact_info, gender, position_id, schedule_id, photo, created_on) VALUES ('$employee_id', '$firstname', '$lastname', '$address', '$birthdate', '$contact', '$gender', '$position', '$schedule', '$filename', NOW())";
		
		/* uhuhuh */
		$sql = "INSERT INTO socios (nombreSocio, sexo, tipoMembresia, telefono, fechaNacimiento, fechaInicio, fechaFin, id_horario, position_id) 
		VALUES ('$nombre', '$sexo', '$membresia', '$telefono', '$fechaN', '$fechaActual', '$newDate', '$horario', $posicion);";
		
		if($conn->query($sql)){
			$_SESSION['success'] = 'Empleado añadido satisfactoriamente';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	
function subir_imagen ($archivo) {

    if(empty($archivo)) {
        return null;
    }

    $nombre = $archivo['name'];
    $origen = $archivo['tmp_name'];
    $tama = $archivo['size'];
    $tipo = $archivo['type'];
    $error = $archivo['error'];

    $extensiones = array('jpg','jpeg','png');

    $nombre_y_ext = explode('.',$nombre);
    $extension = strtolower(end($nombre_y_ext));

    if (!in_array($extension, $extensiones)) {
        echo 'Es un archivo no valido';
        return null;
    }
    else if ($error > 0) {
        echo 'Ocurrio un error al cargar la imagen';
        return null;
    }
    else if ($tama > 10000000) {
        echo 'El tamaño de la imagen exede 2MB';
        return null;
    }
    else {
        $nombre_nuevo = uniqid('',true) . '.' . $extension;
        $destino = "../img-uploaded/" . $nombre_nuevo;
        move_uploaded_file($origen, $destino);

        return $destino;
    }

}

	header('location: employee.php');
?>