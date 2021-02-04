<?php
    include('includes/encabezado.php');
    include('includes/utileria.php');
?>

<div class="verpostres">

    
    <?php
        $conexion = conectar();

        ver_postres('pastel', $conexion );
        ver_postres('mostachon', $conexion);
        ver_postres('pay', $conexion);

        mysqli_close($conexion);
    ?> 
    
</div>

<?php
    function ver_postres($postre, $conexion) {
        echo "<h1 class='separador' id='$postre'>" . $postre . "</h1>";
        echo "<div class='contenedor'>";

        $sql = "select * from postre where tipo='$postre'";
        
        $resultado = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($resultado) > 0) {
            
            while ($renglon = mysqli_fetch_assoc($resultado)) {
                $postre = $renglon['postre'];
                $precio = $renglon['precio'];
                $descripcion = $renglon['descripcion'];
                $imagen = $renglon['imagen'];

                echo 
                "<div class='producto-tarjeta'>
                    <h2 class='nombre'>$postre</h2>
                    <h3 class='precio'>$ $precio</h3>
                    <img src='$imagen' class='imagen'>
                    <p class='descripcion'>$descripcion</p>
                    <button class='boton max'>Agregar a carrito</button>
                </div>";
            }
        }
        echo "</div>";
    }
    include('includes/pie.php');
?>