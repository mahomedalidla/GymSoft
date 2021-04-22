<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="border-top-right-radius: 40px;
    border-top-left-radius: 40px; padding: 1%;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Lista de Miembros
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li>Socios</li>
        <li class="active">Lista de Miembros</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i>¡Proceso Exitoso!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
 
            <!-- Studie -->
            <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Nuevo</a>
               <!-- <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Nuevo</a> -->
            </div>
            
            
            <div class="box-body active in">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>ID Socio</th>
                  <th>Foto</th>
                  <th>Nombre</th>
                  <th>Rol</th>
                  <th>Horarios</th>
                  <th>Fecha de Vencimiento</th>
                  <th>Acción</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT *, socios.id_socio AS empid FROM socios LEFT JOIN position ON position.id=socios.position_id LEFT JOIN schedules ON schedules.id=socios.id_horario";
                    $query = $conn->query($sql);
                    $urlImagenBasica = "../img-uploaded/default.png";

                    $fechaActual = date('Y-m-d');

                    while($row = $query->fetch_assoc()){
                      if($row['fotoSocio'] == null) {
                        $row['fotoSocio'] = $urlImagenBasica;
                       }
                       
                      $status = ( $row['fechaFin'] >= $fechaActual )?'<span class="label label-success pull-right">Activo</span>':'<span class="label label-danger pull-right">Vencido</span>';
                       
                      ?>
                        <tr>
                          <td><?php echo $row['empid']; ?></td>
                          
                          <td><img src="../../<?php echo $row['fotoSocio']; ?>" width="40px" height="30px"></a></td>
                          <td><?php echo $row['nombreSocio']; ?></td>
                          <td><?php echo $row['description']; ?></td>
                          <td><?php echo date('h:i A', strtotime($row['time_in'])).' - '.date('h:i A', strtotime($row['time_out'])); ?></td>
                          <td><?php echo date('M d, Y', strtotime($row['fechaFin'])).$status ?></td>
                          <td>
                            <button class="btn btn-success btn-sm edit btn-flat" data-id="<?php echo $row['empid']; ?>"><i class="fa fa-edit"></i> Editar</button>
                            <button class="btn btn-danger btn-sm delete btn-flat" data-id="<?php echo $row['empid']; ?>"><i class="fa fa-trash"></i> Eliminar</button>
                          </td>
                        </tr>
                      <?php
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/employee_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
  $('.edit').click(function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $('.delete').click(function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $('.photo').click(function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

});
 
function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'employee_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.empid').val(response.empid);
      $('.employee_id').html(response.id_socio);
      /* EMPLEADONAME */
      $('.del_employee_name').html(response.nombreSocio);
      /* $('.del_employee_name').html(response.firstname+' '+response.lastname); */
      $('#employee_name').html(response.nombreSocio);
      // $('#edit_firstname').val(response.firstname);
      $('#edit_firstname').val(response.nombreSocio);
      $('#edit_lastname').val(response.lastname);
      $('#edit_telephone').val(response.telefono);
      $('#edit_sexo').val(response.sexo);
      $('#edit_membresia').val(response.tipoMembresia);
      $('#edit_horario').val(response.id_horario);
      $('#edit_fin').val(response.fechaFin);

      $('#edit_nacimiento').val(response.fechaNacimiento);
      $('#edit_position').val(response.position_id);
      $('#edit_address').val(response.address);
      $('#datepicker_edit').val(response.birthdate);
      $('#edit_contact').val(response.contact_info);
      $('#gender_val').val(response.gender).html(response.gender);
      $('#position_val').val(response.position_id).html(response.description);
      $('#schedule_val').val(response.schedule_id).html(response.time_in+' - '+response.time_out);
    }
  });
}
</script>
</body>
</html>
