<?php
  include('includes/encabezado.php');
?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Añadir nuevo socio</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Nombre completo</label>
                <input type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Sexo</label>
                <select id="inpudSex" class="form-control custom-select">
                  <option selected disabled>Selecciona</option>
                  <option>Masculino</option>
                  <option>Femenino</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputStatus">Tipo de membresia</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option selected disabled>Selecciona</option>
                  <option>General</option>
                  <option>Estudiante</option>

                </select>
              </div>
              <div class="form-group">
                <label for="inputNacimiento">Fecha de nacimiento</label>
                <input type="date" id="inputClientCompany" class="form-control">
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
