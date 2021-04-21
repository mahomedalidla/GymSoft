<!-- Add -->
<div class="modal fade" id="addnew"> 
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Agregar Socio</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="employee_add.php" enctype="multipart/form-data">
          		  <div class="form-group">
                  	<label for="nombre" class="col-sm-3 control-label">Nombre</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="nombre" name="nombre" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="telefono" class="col-sm-3 control-label">Telefono</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="telefono" name="telefono" required>
                  	</div>
                </div>

                <div class="form-group">
                    <label for="gender" class="col-sm-3 control-label">Género</label>

                    <div class="col-sm-9"> 
                      <select class="form-control" name="sexo" id="gender" required>
                        
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="membresia" class="col-sm-3 control-label">Tipo de Membresia</label>

                    <div class="col-sm-9"> 
                      <select class="form-control" name="membresia" id="membresia" required>
                        
                        <option value="General">General</option>
                        <option value="Estudiante">Estudiante</option>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="schedule" class="col-sm-3 control-label">Selecciona Horario</label>

                    <div class="col-sm-9">
                      <select class="form-control" id="id_horario" name="id_horario" required>
                        <option value="" selected>- Seleccionar -</option>
                        <?php
                          $sql = "SELECT * FROM schedules";
                          $query = $conn->query($sql);
                          while($srow = $query->fetch_assoc()){
                            echo "
                              <option value='".$srow['id']."'>".$srow['time_in'].' - '.$srow['time_out']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                  	<label for="datepicker_add" class="col-sm-3 control-label">Fecha de Nacimiento</label>

                  	<div class="col-sm-9"> 
                      <div class="date">
                        <input type="date" class="form-control" id="datepicker_add" name="fechaN">
                      </div>
                  	</div>
                </div>
                
                <div class="form-group">
                    <label for="position" class="col-sm-3 control-label">Cargo</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="description" id="description" required>
                        <option value="" selected>- Seleccionar -</option>
                        <?php
                          $sql = "SELECT * FROM position";
                          $query = $conn->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['id']."'>".$prow['description']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Foto</label>

                    <div class="col-sm-9">
                      <input type="file" name="photo" id="imagen">
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Guardar</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b><span class="employee_id"></span></b></h4>
          	</div>
            	<!--  -->
              <div class="modal-body">
            	<form class="form-horizontal" method="POST" action="employee_edit.php">
            		<input type="hidden" class="empid" name="id"> 
              <div class="form-group">
                  	<label for="edit_firstname" class="col-sm-3 control-label">Nombre</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control del_employee_name" id="edit_firstname" name="nombre" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="edit_telephone" class="col-sm-3 control-label">Telefono</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="edit_telephone" name="telefono" required>
                  	</div>
                </div>

                <div class="form-group">
                    <label for="edit_sexo" class="col-sm-3 control-label">Género</label>

                    <div class="col-sm-9"> 
                      <select class="form-control" name="sexo" id="edit_sexo" required>
                        
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="edit_membresia" class="col-sm-3 control-label">Tipo de Membresia</label>

                    <div class="col-sm-9"> 
                      <select class="form-control" name="membresia" id="edit_membresia" required>
                        
                        <option value="General">General</option>
                        <option value="Estudiante">Estudiante</option>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="edit_horario" class="col-sm-3 control-label">Selecciona Horario</label>

                    <div class="col-sm-9">
                      <select class="form-control" id="edit_horario" name="id_horario" required>
                        <option value="" selected>- Seleccionar -</option>
                        <?php
                          $sql = "SELECT * FROM schedules";
                          $query = $conn->query($sql);
                          while($srow = $query->fetch_assoc()){
                            echo "
                              <option value='".$srow['id']."'>".$srow['time_in'].' - '.$srow['time_out']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                  	<label for="edit_nacimiento" class="col-sm-3 control-label">Fecha de Nacimiento</label>

                  	<div class="col-sm-9"> 
                      <div class="date">
                        <input type="date" class="form-control" id="edit_nacimiento" name="fechaN">
                      </div>
                  	</div>
                </div>

                <!-- vencimiento -->
                <div class="form-group">
                  	<label for="edit_fin" class="col-sm-3 control-label">Fecha de fin</label>

                  	<div class="col-sm-9"> 
                      <div class="date">
                        <input type="date" class="form-control" id="edit_fin" name="fechaV">
                      </div>
                  	</div>
                </div>
                
                <div class="form-group">
                    <label for="edit_position" class="col-sm-3 control-label">Cargo</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="description" id="edit_position" required>
                        <option value="" selected>- Seleccionar -</option>
                        <?php
                          $sql = "SELECT * FROM position";
                          $query = $conn->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['id']."'>".$prow['description']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
            	<button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Actualizar</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b><span class="id"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="employee_delete.php">
            		<input type="hidden" class="empid" name="empid">
            		<div class="text-center">
	                	<p>ELIMINAR SOCIO</p>
	                	<h2 class="bold del_employee_name"></h2>
	            	</div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
            	<button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Eliminar</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="del_employee_name"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="employee_edit_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="empid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Foto</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Actualizar</button>
              </form>
            </div>
        </div>
    </div>
</div>    