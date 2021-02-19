<!-- idsocio 	nombreSocio 	fotoSocio 	sexo 	tipoMembresia 	telefono 	fechaNacimiento -->
<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
        /* $usuario = $_SESSION['username']; */
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muscle Crew - Registrar producto</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&family=Pacifico&family=Patua+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/formulario.css">
    <link rel="stylesheet" type="text/css" href="includes/sidebar/sidebar.css">
    <script type="text/javascript" src="includes/sidebar/sidebar.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link href="includes/tabla/tabla-socios.css" rel="stylesheet" type="text/css" />
    
    <script src="../scripts/menu.js" defer></script>  
    <script src="../scripts/carrito.js" defer></script>
</head>
<body>
<?php include('includes/sidebar/sidebar.php');?>
    <div id ="main">
    <!-- Navegación del la página -->
        <div class="nav-contenedor">
            <nav>
                <div class="logo">
                    <h2>Muscle Crew</h2>
                </div>
                <h2 id="menu-boton">&#9776;</h2>
                <ul id="menu">

                    <?php 
                        if (isset($_SESSION['usuario'])) {
                            $usuario = $_SESSION['usuario'];

                            echo '<li><a href="index.php">Inicio</a></li>';
                            
                        }
                        else {
                            echo ''; 
                        }
                    ?>
              
                </ul>
            </nav>
        </div>
        <!-- Fin navegación -->

    <main>   
        
    <div class="formulario-div">
        <div class="header-form">
            <h2><b>Añadir Producto</b></h2>
        </div> 
        <form action="agregar-producto.php" method="post" enctype="multipart/form-data">

            <label for="nombre" id="lbNombre">Producto:</label>
            <input type="text" placeholder="Producto" id="nombre" name="nombre">

            <label for="descripcion" id="lbDescripcion">Descripción:</label>
            <input type="text" placeholder="Descripcionn" id="descripcion" name="descripcion">

            <label for="precio" id="lbPrecio">Precio:</label>
            <input type="number" alt="por piezas" placeholder="10.00" id="precioUnidad" name="precioUnidad" min="1.00" step="0.5">

            <label for="cantidad" id="lbCantidad">Cantidad:</label>
            <input type="number" placeholder="30" id="cantidadProducto" name="cantidadProducto" min="1" step="1">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" name="imagen">
            
            <label for='proveedor'>Selecciona proveedor:</label>
            <select name='id_proveedor' id='id_proveedor'>
                
            <?php
                include("includes/utileria.php");
                
                $conexion = conectar();

                

			$sql = "select id_proveedor, nombreProveedor from proveedores";
	
			$resultado = mysqli_query($conexion, $sql);
	
			if (mysqli_num_rows($resultado) > 0) {
				
				while ($renglon = mysqli_fetch_assoc($resultado)) {
					$nombre = $renglon['nombreProveedor'];
                    $id_proveedor = $renglon['id_proveedor'];
					
                echo
                "
                    <option value='$id_proveedor'>$nombre</option>
                ";
                }
            }
            mysqli_close($conexion);
            ?>
            </select>
            


                <input type="submit" value="Registrar" class="boton" style="margin: 10px;">            
                <input type="reset" value="Borrar" class="boton" style="margin: 10px;">

        </form>
        </div>    
    </main>
    <?php
        include('includes/pie.php');
    ?>