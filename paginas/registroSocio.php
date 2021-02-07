<!-- idsocio 	nombreSocio 	fotoSocio 	sexo 	tipoMembresia 	telefono 	fechaNacimiento -->

<?php
    include('includes/encabezado.php');
    include('includes/menu-navegacion.php');?>
?>

<script src="../scripts/formulario-postre.js" defer> </script>

    <main>   
        
    <div class="formulario-div">
        <form action="agregar-registro.php" method="post" enctype="multipart/form-data">
            <h2>Registro de Socio</h2>

            <label for="Nombre">Nombre</label>
            <input type="text" placeholder="Nombre" id="nombre" name="nombre">

            <label for="imagen">Imagen</label>
            <input type="file" id="imagen" name="imagen">

            <label for="sexo">Sexo</label>
            <select name="sexo" id="sexo">
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            </select>

            <label for="membresia">Tipo de Membresia</label>
            <select name="membresia" id="membresia">
                <option value="General">General</option>
                <option value="Estudiante">Estudiante</option>
            </select>

            <label for="telefono">Telefono</label>
            <input type="text" id="telefono" name="telefono" placeholder="3113001707">

            <label for="fechaN">Fecha de nacimiento</label>
            <input type="date" id="fechaN" name="fechaN">
            
            <hr>

            <!-- <div class="parrafo-terminos">
                <input type="checkbox">
                <p>Recibir ofertas por correo.</p>

                <input type="checkbox">
                <p>Aceptos los términos del servicio.</p>              
            </div>  -->

                <input type="submit" value="Registrar" class="boton" style="margin: 10px;">            
                <input type="reset" value="Borrar" class="boton" style="margin: 10px;">

        </form>
        </div>    
    </main>
    <?php
        include('includes/pie.php');
    ?>