<!-- idsocio 	nombreSocio 	fotoSocio 	sexo 	membresiaMembresia 	telefono 	fechaNacimiento -->

<?php

    include('includes/utileria.php');

    if (empty($_POST)) {
        redireccionar('Prohibido', 'index.php');
        return;
    }
    // <!-- id_proveedor 	nombreProveedor 	contacto 	direccion 	telefono 	correo 	 -->
    $nombre = validar ($_POST['nombre']);
    $contacto = validar ($_POST['contacto']);
    $direccion = validar ($_POST['direccion']);
    $telefono = validar ($_POST['telefono']);
    $correo =validar ($_POST['correo']);

    if ($nombre == '' || $contacto == '' || $direccion == '' || $telefono == '' || $correo == '') {
        redireccionar('Error en la conexion', 'registro-proveedor.php');
        return;
    }


    $conexion = conectar();

    if (!$conexion) {
        redireccionar('Error en la conexion', 'registro-proveedor.php');
        return;
    }

    $sql = "insert into proveedores(nombreProveedor, contacto, direccion, telefono, correo) 
    values ('$nombre', '$contacto', '$direccion', '$telefono', '$correo')";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        redireccionar('Datos guardados', 'registro-proveedor.php');
    }
    else {
        redireccionar('Error: ' . mysqli_error($conexion), 'registro-proveedor.php');
    }

    mysqli_close($conexion); 
?>