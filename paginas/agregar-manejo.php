
<?php

    include('includes/utileria.php');

    if (empty($_POST)) {
        redireccionar('Prohibido', 'index.php');
        return;
    }

    $postre = validar ($_POST['postre']);
    $descripcion = validar ($_POST['descripcion']);
    $tipo = validar ($_POST['tipo']);
    $precio = validar ($_POST['precio']);

    if ($postre == '' || $descripcion == '' || $tipo == '' || $precio == '') {
        redireccionar('Error en la conexion', 'agregar.php');
        return;
    }


    $conexion = conectar();

    if (!$conexion) {
        redireccionar('Error en la conexion', 'agregar.php');
        return;
    }

    $imagen = subir_imagen($_FILES['imagen']);

    $sql = "insert into postre(postre, descripcion, precio, tipo, imagen) 
    values ('$postre', '$descripcion', '$precio', '$tipo', '$imagen')";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        redireccionar('Datos guardados', 'agregar.php');
    }
    else {
        redireccionar('Error: ' . mysqli_error($conexion), 'agregar.php');
    }

    mysqli_close($conexion);
?>