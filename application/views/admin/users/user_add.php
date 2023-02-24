<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Agregar Nuevo Usuario</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body my-form-body">
          <?php if(isset($msg) || validation_errors() !== ''): ?>
              <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                  <?= validation_errors();?>
                  <?= isset($msg)? $msg: ''; ?>
              </div>
            <?php endif; ?>
           
            <?php echo form_open(base_url('admin/users/add'), 'class="form-horizontal"');  ?> 
            <div class="form-group">
                <label for="Nombre" class="col-sm-2 control-label">Nombre</label>

                <div class="col-sm-9">
                  <input type="text" name="Nombre" class="form-control" id="Nombre" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="ApPaterno" class="col-sm-2 control-label">Apellido Paterno</label>

                <div class="col-sm-9">
                  <input type="text" name="ApPaterno" class="form-control" id="ApPaterno" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="ApMaterno" class="col-sm-2 control-label">Apellido Materno</label>

                <div class="col-sm-9">
                  <input type="text" name="ApMaterno" class="form-control" id="ApMaterno" placeholder="">
                </div>
              </div>
            
            <div class="form-group">
                <label for="Usuario" class="col-sm-2 control-label">Usuario</label>

                <div class="col-sm-9">
                  <input type="text" name="Usuario" class="form-control" id="Usuario" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>

                <div class="col-sm-9">
                  <input type="email" name="email" class="form-control" id="email" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="mobile_no" class="col-sm-2 control-label">Telefono</label>

                <div class="col-sm-9">
                  <input type="number" name="mobile_no" class="form-control" id="mobile_no" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Password</label>

                <div class="col-sm-9">
                  <input type="password" name="password" class="form-control" id="password" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="role" class="col-sm-2 control-label">Selecciona Rol</label>

                <div class="col-sm-9">
                  <select name="user_role" class="form-control">
                    <option value="">Selecciona Rol</option>
                    <option value="1">Admin</option>
                    <option value="0">User</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-11">
                  <input type="submit" name="submit" value="Add User" class="btn btn-info pull-right">
                </div>
              </div>
            <?php echo form_close( ); ?>
          </div>
          <!-- /.box-body -->
      </div>
    </div>
  </div>  

</section> 


<script>
$("#add_user").addClass('active');
</script>    