<?php

function redireccionar ($mensaje, $dir) {
    include('includes/encabezado.php');
    echo '<div class="formulario-div" style="color:brown">';
    echo '<h1 style="text-align:center">' . $mensaje . '</h1>';
    echo '<h4 style="text-align:center"> Redireccionando...</h4>';
    // include('includes/pie.php');
    header('refresh:1,url='. $dir);
}

function validar ($texto) {
    $texto = trim($texto);
    $texto = stripslashes($texto);
    $texto = htmlspecialchars($texto);
    return $texto;
} 

function conexionEntrada () {

    $contraseña = "";
    $usuario = "root";
    $nombre_base_de_datos = "ventas";
    try{
        $base_de_datos = new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario, $contraseña);
         $base_de_datos->query("set names utf8;");
        $base_de_datos->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
        $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base_de_datos->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    }catch(Exception $e){
        echo "Ocurrió algo con la base de datos: " . $e->getMessage();
    }
}



function conectar () {
    DEFINE('SERVIDOR', 'localhost');
    DEFINE('USUARIO', 'root');
    DEFINE('PASSWORD', '');
    DEFINE('BD', 'gymsoft');

    $resultado = mysqli_connect(SERVIDOR, USUARIO, PASSWORD, BD);
    
    return $resultado;
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

?>