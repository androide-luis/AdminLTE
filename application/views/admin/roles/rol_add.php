<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Agregar Nuevo Rol</h3>
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
           
            <?php echo form_open(base_url('admin/roles/add'), 'class="form-horizontal"');  ?> 
            <div class="form-group">
                <label for="ClaveRol" class="col-sm-2 control-label">Clave</label>

                <div class="col-sm-9">
                  <input type="text" name="ClaveRol" class="form-control" id="ClaveRol" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="NombreRol" class="col-sm-2 control-label">Nombre Rol</label>

                <div class="col-sm-9">
                  <input type="text" name="NombreRol" class="form-control" id="NombreRol" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="DescripcionRol" class="col-sm-2 control-label">Descripción</label>

                <div class="col-sm-9">
                  <input type="text" name="DescripcionRol" class="form-control" id="DescripcionRol" placeholder="">
                </div>
              </div>
            
            <div class="form-group">
                <label for="EstaInactivo" class="col-sm-2 control-label">Inactivo</label>

                <div class="col-sm-9">
                  <input type="checkbox" name="EstaInactivo" class="checkbox" id="EstaInactivo" placeholder="">
                </div>
              </div>

              
             
              <div class="form-group">
                <div class="col-md-11">
                  <input type="submit" name="submit" value="Add Rol" class="btn btn-info pull-right">
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