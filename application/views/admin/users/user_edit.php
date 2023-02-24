<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Editar Usuario</h3>
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
           
            <?php echo form_open(base_url('admin/users/edit/'.$user['idusuario']), 'class="form-horizontal"' )?> 
            <div class="form-group">
                <label for="Nombre" class="col-sm-2 control-label">Nombre</label>

                <div class="col-sm-9">
                  <input type="text" name="Nombre" value="<?= $user['Nombre']; ?>" class="form-control" id="Nombre" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="ApPaterno" class="col-sm-2 control-label">Apellido Paterno</label>

                <div class="col-sm-9">
                  <input type="text" name="ApPaterno" value="<?= $user['ApPaterno']; ?>" class="form-control" id="ApPaterno" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="ApMaterno" class="col-sm-2 control-label">Apellido Materno</label>

                <div class="col-sm-9">
                  <input type="text" name="ApMaterno" value="<?= $user['ApMaterno']; ?>" class="form-control" id="ApMaterno" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>

                <div class="col-sm-9">
                  <input type="email" name="email" value="<?= $user['email']; ?>" class="form-control" id="email" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="mobile_no" class="col-sm-2 control-label">Mobile No</label>

                <div class="col-sm-9">
                  <input type="number" name="mobile_no" value="<?= $user['mobile_no']; ?>" class="form-control" id="mobile_no" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="IdRol" class="col-sm-2 control-label">Selecciona el Rol del usuario</label>

                <div class="col-sm-9">
                  <select name="IdRol" class="form-control">
                    <option value="">Select Role</option>
                    <option value="1" <?= ($user['IdRol'] == 1)?'selected': '' ?> >Administrador</option>
                    <option value="0" <?= ($user['IdRol'] == 0)?'selected': '' ?>>Usuario</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-11">
                  <input type="submit" name="submit" value="Update User" class="btn btn-info pull-right">
                </div>
              </div>
            <?php echo form_close(); ?>
          </div>
          <!-- /.box-body -->
      </div>
    </div>
  </div>  

</section> 