<!-- Datatable style -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">  

<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Usuarios</h3>
        </div>

        <div class="panel-heading">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <a href="<?= base_url('admin/users/add'); ?>" class="btn btn-success btn-custom btn-rounded pull-right"><span class="btn-label-left"><i class="ion-plus"></i><span> &nbsp; Agregar nuevo </span></span></a>

                </div>
            </div> <!-- row close-->
        </div>



        <!-- /.box-header -->
        <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped ">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Usuario</th>
                        <th>Email</th>
                        <th>Mobile No.</th>
                        <th>Role</th>
                        <th style="width: 150px;" class="text-right">Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($all_users as $row): ?>
                        <tr>
                            <td><?= $row['Nombre']; ?></td>
                            <td><?= $row['ApPaterno']; ?></td>
                            <td><?= $row['ApMaterno']; ?></td>
                            <td><?= $row['Usuario']; ?></td>
                            <td><?= $row['Email']; ?></td>
                            <td><?= $row['Telefono']; ?></td>
                            <td><span class="btn btn-primary btn-flat btn-xs"><?= ($row['IdRol'] == 1) ? 'admin' : 'member'; ?><span></td>
                                        <td class="text-right"><a href="<?= base_url('admin/users/edit/' . $row['IdUsuario']); ?>" class="btn btn-info btn-flat">Edit</a><a href="<?= base_url('admin/users/del/' . $row['IdUsuario']); ?>" class="btn btn-danger btn-flat <?= ($row['IdRol'] == 1) ? 'disabled' : '' ?>">Delete</a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>

                                    </table>
                                    </div>
                                    <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                    </section>  

                                    <!-- DataTables -->
                                    <script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
                                    <script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script>
                                    <script>
                                        $(function () {
                                            $("#example1").DataTable();
                                        });
                                    </script> 
                                    <script>
                                        $("#view_users").addClass('active');
                                    </script>        
