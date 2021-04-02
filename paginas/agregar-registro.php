<!-- idsocio 	nombreSocio 	fotoSocio 	sexo 	membresiaMembresia 	telefono 	fechaNacimiento -->
<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM productos;");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<?php

    include('includes/utileria.php');

    if (empty($_POST)) {
        redireccionar('Prohibido', 'index.php');
        return;
    }

    $nombre = validar ($_POST['nombre']);
    $sexo = validar ($_POST['sexo']);
    $membresia = validar ($_POST['membresia']);
    $telefono = validar ($_POST['telefono']);
    $horario = validar($_POST['id_horario']);
    $fechaN =validar ($_POST['fechaN']);

    if ($telefono == "") {
        # code...
        $telefono = 0;
    }

    if ($nombre == '' || $sexo == '' || $membresia == '' || $telefono == '') {
        redireccionar('Error en la conexion', 'registro-socio.php');
        return;
    }


    $conexion = conectar();

    if (!$conexion) {
        redireccionar('Error en la conexion', 'registro-socio.php');
        return;
    }

    $imagen = subir_imagen($_FILES['imagen']);

    /* Obteniendo fecha actual con funcion date */
    $fechaActual = date('Y-m-d');

    /* Obteniendo fecha del sig mes, error al insertar en bd por no ser string */
    $fechaFin = new DateTime('');
    $fechaFin->modify( 'next month' );

    /* Convert DateTime to String */
    $newDate = $fechaFin->format('Y-m-d');

    $sql = "insert into socios(nombreSocio, fotoSocio, sexo, tipoMembresia, telefono, fechaNacimiento, fechaInicio, fechaFin, id_horario) 
    values ('$nombre', '$imagen', '$sexo', '$membresia', '$telefono', '$fechaN', '$fechaActual', '$newDate', '$horario')";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        redireccionar('Datos guardados', 'registro-socio.php');
    }
    else {
        redireccionar('Error: ' . mysqli_error($conexion), 'registro-socio.php');
    }

    mysqli_close($conexion); 
?>