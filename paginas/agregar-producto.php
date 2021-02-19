<!-- idsocio 	nombreSocio 	fotoSocio 	sexo 	membresiaMembresia 	telefono 	fechaNacimiento -->

<?php

    include('includes/utileria.php');

    if (empty($_POST)) {
        redireccionar('Prohibido', 'index.php');
        return;
    }

    $nombre = validar ($_POST['nombre']);
    $descripcion = validar ($_POST['descripcion']);
    $precioUnidad = validar ($_POST['precioUnidad']);
    $cantidad =validar ($_POST['cantidadProducto']);
    $id_proveedor =validar ($_POST['id_proveedor']);

    $imagen = subir_imagen($_FILES['imagen']);

    if ($nombre == ''  || $descripcion == '' || $precioUnidad == '' || $imagen == '' || $id_proveedor == '' || $cantidad == '') {
        redireccionar('Error en la conexion', 'registro-producto.php');
        return;
    }


    $conexion = conectar();

    if (!$conexion) {
        redireccionar('Error en la conexion', 'registro-producto.php');
        return;
    }

    $sql = "insert into producto(nombreProducto, descripcion, precioUnidad, cantidadProducto, imagen, id_proveedor) 
    values ('$nombre', '$descripcion', '$precioUnidad', $cantidad, '$imagen', '$id_proveedor')";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        redireccionar('Datos guardados', 'registro-producto.php');
    }
    else {
        redireccionar('Error: ' . mysqli_error($conexion), 'registro-producto.php');
    }

    mysqli_close($conexion); 
?>