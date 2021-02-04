<?php
  include('includes/encabezado.php');
?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

<!-- Main content -->
    <section class="content-center">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Añadir nuevo producto</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Nombre </label>
                <input type="text" id="inputName" class="form-control">
              </div>

              <div class="form-group">
                <label for="inputCantidad">Cantidad </label>
                <input type="number" id="inputCantidad" class="form-control">
              </div>

              <div class="form-group">
                <label for="inputPrecio">Precio </label>
                <input type="number" id="inputPrecio" class="form-control">
              </div>
              
              
              <div class="form-group">
                <label for="inputImg">Añadir imagen</label>
                <input type="file" id="inputImg" class="form-control">
              </div>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>

      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Create new Porject" class="btn btn-success float-right">
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
    include('includes/pie.php');
  ?>
