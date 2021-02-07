<!-- Navegación del la página -->
<div class="nav-contenedor">
    <nav>
        <div class="logo">
            <img src="../imagenes/logo.png" alt="">
            <h2>Muscle Crew</h2>
        </div>
        <h2 id="menu-boton">&#9776;</h2>
        <ul id="menu">
            <li><a href="index.php">Inicio</a></li>
            <!-- <li><a href="index.php#postres">Postres</a></li>
            <li><a href="index.php#direccion">Dirección</a></li> -->

            <?php 
                if (isset($_SESSION['usuario'])) {
                    $usuario = $_SESSION['usuario'];
                    /* echo '<li><a href="agregar.php">Agregar postre</a></li>';  */

                    echo '<li><a href="registroSocio.php">Añadir Socio</a></li>';
                    echo '<li><a href="#">Socios</a></li>';

                    echo '<li><a href="#">Añadir Proveedor</a></li>';
                    echo '<li><a href="#">Ver Proveedores</a></li>';
                    
                    echo '<li><a href="#">Control de Acceso</a></li>';

                    echo '<li><a href="registro.php">Bienvenido ' . "$usuario". '</a></li>';

                    echo '<li><a href="salir.php">salir</a></li>';
                    
                }
                else {
                    echo '<li><a href="entrada.php">Ingresar</a></li>';
                      
                }
            ?>
      
        </ul>
    </nav>
</div>
<!-- Fin navegación -->


