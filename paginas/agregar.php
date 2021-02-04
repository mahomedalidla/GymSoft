<?php
    include('includes/encabezado.php');
?>

<script src="../scripts/formulario-postre.js" defer> </script>


<div class="formulario-div">
    
    <form action="agregar-manejo.php" method="post" enctype="multipart/form-data">

        <h3>Nuevo Postre</h3>

        <label for="postre">Postre</label>
        <input type="text" id="postre" name="postre" required placeholder="Nombre">

        <label for="descripcion">Descripción</label>
        <textarea required name="descripcion" id="descripcion" cols="30" rows="3" placeholder="Añadir descripción"></textarea>

        <label for="tipo">Tipo</label>
        <select name="tipo" id="tipo">
            <option value="Pastel">Pastel</option>
            <option value="Mostachon">Mostachon</option>
            <option value="Pay">Pay</option>
        </select>

        <label for="precio">Precio</label>
        <input required type="number" id="precio" name="precio" step=".01" placeholder="10.00">

        <label for="imagen">Imagen</label>
        <input type="file" id="imagen" name="imagen">

        <input type="submit" value="Guardar" name="Guardar" class="boton">
    </form>
</div>

<?php
    include('includes/pie.php');
?>