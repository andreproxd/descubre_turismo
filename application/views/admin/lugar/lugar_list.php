<style>
        thead  th {
            text-align: center;
        }
        tbody  td {
            text-align: center;
        }
        tfoot  th {
            text-align: center;
        }
</style>
        <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>Admin_Descubre/plugins/datatables/dataTables.bootstrap.css">
  <body class="hold-transition skin-blue sidebar-mini">
       <div class="col-md-12 ">
    <div class="wrapper">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1><b>
            Lugares</b>
            <small>Mantenedor</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li><a href="fa-binoculars"><i class="fa fa-user"></i>Lugares</a></li>
            <li class="active"></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Lista de Lugares</h3>
                </div><!-- /.box-header -->
                <div class="row">
                <div class="col-xs-3 col-xs-offset-2">
                    <a href="<?php echo base_url(); ?>index.php/admin/lugar/create" class="btn btn-block btn-success btn-flat"><img src="<?php echo base_url(); ?>media/img/icon/admin/addadm2.png" align="left">Nuevo Lugar</a>
                </div>
                </div>
                <div class="box-body table-responsive">
                  <table id="example1" class=" table-bordered col-md-12 ">
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th>Tipo</th>
                        <th>Subtipo</th>
                        <th>Latitud y longitud</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                            Museo Raimondi
                        </td>
                        <td>
                            Jr Ayacucho 256
                        </td>
                        <td>
                            Museo
                        </td>
                        <td>
                            Museo
                        </td>
                        <td>
                            -755855,-7856655
                        </td>
                        <td>
                            <a href="" data-toggle="modal" data-target="#_lugar"<img src="<?php echo base_url(); ?>"/><img src="<?php echo base_url(); ?>media/img/icon/admin/editadm.png"/></a>
                            <a href<img src="<?php echo base_url(); ?>"/><img src="<?php echo base_url(); ?>media/img/icon/admin/deleteadm.png"/></a>
                        </td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th>Tipo</th>
                        <th>Subtipo</th>
                        <th>Latitud y longitud</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <strong>Copyright &copy; 2015 <a href="http://descubre.descubrelalibertad.com">Descubre La Libertad</a>.</strong>Todos los derechos reservados.
      </footer>
    </div><!-- ./wrapper -->
     <?php include("application/views/admin/lugar/_edit.php"); ?>
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>Admin_Descubre/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url(); ?>Admin_Descubre/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url(); ?>Admin_Descubre/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>Admin_Descubre/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url(); ?>Admin_Descubre/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>Admin_Descubre/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>Admin_Descubre/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>Admin_Descubre/dist/js/demo.js"></script>
    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </body>
            </div>
