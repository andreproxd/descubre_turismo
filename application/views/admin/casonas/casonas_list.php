<<<<<<< HEAD
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
              Casonas</b>
            <small>Mantenedor</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li><a href="#"><i class="fa fa-home"></i>Casonas</a></li>
            <li class="active"></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
             
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Lista de Casonas</h3>
                </div><!-- /.box-header -->
                <div class="row">
                <div class="col-xs-3 col-xs-offset-2">
                    <a href="<?php echo base_url(); ?>index.php/admin/casonas/create" class="btn btn-block btn-success btn-flat"><img src="<?php echo base_url(); ?>media/img/icon/admin/addadm2.png" align="left">Nueva Casona</a>    
                </div>
                </div>
                <div class="box-body table-responsive">
                  <table id="example1" class=" table-bordered ">
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Vias de Acceso</th>
                        <th>Horario</th>
                        <th>Ingreso</th>
                        <th>Direccion</th>
                        <th>Precio</th>
                        <th>Rese&ntilde;a Historica</th>
                        <th>Departamento</th>
                        <th>Provincia</th>
                        <th>Distrito</th>
                        <th>Imagen</th>
                        <th>Servicios Brindados</th>
                        <th>Activo</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody> 
                      <tr>
                        <td>
                            Casa Bracamonte
                        </td>
                        <td>
                            Casonas
                        </td>
                        <td>
                            Desde Plaza de Armas de Trujillo - Casa 500 m en 3 min aproximadamente.
                        </td>
                        <td>
                            Todos los días de 08:00 a.m - 14:30 p.m
                        </td>
                        <td>
                            Libre
                        </td>
                        <td>
                            Jr. Independencia 441 
                        </td>
                        <td>
                            S/ 0.00
                        </td>
                        <td>
                            Monumento histórico arquitectónico de carácter civil, cuenta con una sola planta simétrica y con ambientes articulados en tres patios. Su fachada es apaisada, con un pórtico con arco adintelado y un cornisamento que descansa sobre columnas de estilo corintio. Cuenta también con una ventana con reja de hierro forjado y un balcón de cajón hecho en madera. 
                        </td>
                        <td>
                            La Libertad
                        </td>
                        <td>
                            Trujillo
                        </td>
                        <td>
                            Trujillo
                        </td>
                        <td>
                            /img/casbeacamonte
                        </td>
                        <td>
                            Servicio de Guiado
                            Servicios Higiénicos  
                        </td>
                        <td>
                            1
                        </td> 
                        <td>
                            <a href="" data-toggle="modal" data-target="#_casonas"<img src="<?php echo base_url(); ?>"/><img src="<?php echo base_url(); ?>media/img/icon/admin/editadm.png"/></a>
                            <a href<img src="<?php echo base_url(); ?>"/><img src="<?php echo base_url(); ?>media/img/icon/admin/deleteadm.png"/></a>
                        </td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Vias de Acceso</th>
                        <th>Horario</th>
                        <th>Ingreso</th>
                        <th>Direccion</th>
                        <th>Precio</th>
                        <th>Rese&ntilde;a Historica</th>
                        <th>Departamento</th>
                        <th>Provincia</th>
                        <th>Distrito</th>
                        <th>Imagen</th>
                        <th>Servicios Brindados</th>
                        <th>Activo</th>
                        <th>Acciones</th>
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
 <?php include("application/views/admin/casonas/_edit.php"); ?>
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
=======
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
              Casonas</b>
            <small>Mantenedor</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li><a href="#"><i class="fa fa-home"></i>Casonas</a></li>
            <li class="active"></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
             
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Lista de Casonas</h3>
                </div><!-- /.box-header -->
                <div class="row">
                <div class="col-xs-3 col-xs-offset-2">
                    <a href="<?php echo base_url(); ?>index.php/admin/casonas/create" class="btn btn-block btn-success btn-flat"><img src="<?php echo base_url(); ?>media/img/icon/admin/addadm2.png" align="left">Nueva Casona</a>    
                </div>
                </div>
                <div class="box-body table-responsive">
                  <table id="example1" class=" table-bordered ">
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Vias de Acceso</th>
                        <th>Horario</th>
                        <th>Ingreso</th>
                        <th>Direccion</th>
                        <th>Precio</th>
                        <th>Rese&ntilde;a Historica</th>
                        <th>Departamento</th>
                        <th>Provincia</th>
                        <th>Distrito</th>
                        <th>Imagen</th>
                        <th>Servicios Brindados</th>
                        <th>Activo</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody> 
                      <tr>
                        <td>
                            Casa Bracamonte
                        </td>
                        <td>
                            Casonas
                        </td>
                        <td>
                            Desde Plaza de Armas de Trujillo - Casa 500 m en 3 min aproximadamente.
                        </td>
                        <td>
                            Todos los días de 08:00 a.m - 14:30 p.m
                        </td>
                        <td>
                            Libre
                        </td>
                        <td>
                            Jr. Independencia 441 
                        </td>
                        <td>
                            S/ 0.00
                        </td>
                        <td>
                            Monumento histórico arquitectónico de carácter civil, cuenta con una sola planta simétrica y con ambientes articulados en tres patios. Su fachada es apaisada, con un pórtico con arco adintelado y un cornisamento que descansa sobre columnas de estilo corintio. Cuenta también con una ventana con reja de hierro forjado y un balcón de cajón hecho en madera. 
                        </td>
                        <td>
                            La Libertad
                        </td>
                        <td>
                            Trujillo
                        </td>
                        <td>
                            Trujillo
                        </td>
                        <td>
                            /img/casbeacamonte
                        </td>
                        <td>
                            Servicio de Guiado
                            Servicios Higiénicos  
                        </td>
                        <td>
                            1
                        </td> 
                        <td>
                            <a href="" data-toggle="modal" data-target="#_casonas"<img src="<?php echo base_url(); ?>"/><img src="<?php echo base_url(); ?>media/img/icon/admin/editadm.png"/></a>
                            <a href<img src="<?php echo base_url(); ?>"/><img src="<?php echo base_url(); ?>media/img/icon/admin/deleteadm.png"/></a>
                        </td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Vias de Acceso</th>
                        <th>Horario</th>
                        <th>Ingreso</th>
                        <th>Direccion</th>
                        <th>Precio</th>
                        <th>Rese&ntilde;a Historica</th>
                        <th>Departamento</th>
                        <th>Provincia</th>
                        <th>Distrito</th>
                        <th>Imagen</th>
                        <th>Servicios Brindados</th>
                        <th>Activo</th>
                        <th>Acciones</th>
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
 <?php include("application/views/admin/casonas/_edit.php"); ?>
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
>>>>>>> f715f51d5f673893028e94a581ed42d7e4a1d48d
  