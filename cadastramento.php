

<?php include_once ('head.php') ?>
<?php include_once ('header.php') ?>
<?php include_once ('conection.php') ?>





 <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">




 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        
    
        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-md-3">

              <!-- Profile Image -->
              <div class="box box-primary">
                <div class="box-body box-profile">
                  <img class="profile-user-img img-responsive img-circle" src="dist/img/imagem2.png" alt="User profile picture">
                  <h3 class="profile-username text-center">Termo Elátrica-CG </h3>
                  

                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b>N° de Tanque  </b> <a class="pull-right">3</a>
                    </li>
                    <li class="list-group-item">
                      <b>Usuários</b> <a class="pull-right">2</a>
                    </li>
                  </ul>

                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- About Me Box -->
              
            </div><!-- /.col -->
            <div class="col-md-9">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#activity" data-toggle="tab">Tanque</a></li>
                  <li><a href="#settings" data-toggle="tab">Acesso</a></li>
                </ul>
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                  
                  
                  <table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Residencial</th>
      <th scope="col">Agronomia</th>
      <th scope="col" style="border-left:solid; border-right:solid;
   border-top:solid;border-bottom:solid; border-width:1px; border-color:#009;">Industrial</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Modelo A</th>
      <td>100L a 150L</td>
      <td>1000L a 4000L</td>
      <td style="border-left:solid; border-right:solid;
   border-top:solid;border-bottom:solid; border-width:1px; border-color:#009;">15000L a 18000L</td>
      
    </tr>
    <tr>
      <th scope="row">Modelo B</th>
      <td>160L a 310L</td>
      <td>5000L a 8000L</td>
      <td style="border-left:solid; border-right:solid;
   border-top:solid;border-bottom:solid; border-width:1px; border-color:#009;">19000L a 22000L</td>

    </tr>
    <tr>
      <th scope="row">Modelo C</th>
      <td>320L a 500L</td>
      <td>9000L a 12000L</td>
      <td style="border-left:solid; border-right:solid;
   border-top:solid;border-bottom:solid; border-width:1px; border-color:#009;">23000L a 26000L</td>
    </tr>
  </tbody>
</table>
                

                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="settings">

                    <table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Nome</th>
      <th scope="col">Hora</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td>Thiago Moura</td>
      <td>12:20:09</td>
      
    </tr>
    <tr>
      <th scope="row"></th>
      <td>Mariana Cardoso</td>
      <td>08:12:34</td>
     
    </tr>
   
  </tbody>
</table>
                
              
             
           
                  </div><!-- /.tab-pane -->

                 
         <!-- Inicio da tabela de busca -->






         <!-- Fim da tabela de busca-->



                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->




        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

         
    </div><!-- ./wrapper -->
<!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>

    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>

<?php include_once('footer.php');?>