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
               <h3 >Atendimento</h3>
               <h4 >Se você tem alguma dúvida ou questionamento, podemos lhe ajudar! Temos uma equipe preparada para responder as suas perguntas. Mande uma mensagem, e inclua seus dados para contato que enviaremos um retorno assim que possível.</h4>
                 
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- About Me Box -->
              
            </div><!-- /.col -->
            <div class="col-md-9">
              <div class="nav-tabs-custom">
                
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
             <!-- /. inicio do formulario de cadastro-->  
              <form class="form-horizontal">
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Empresa</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  placeholder="">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">id_usuário</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  placeholder="">
                        </div>
                      </div>
                      
                       <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">telefone</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  placeholder="">
                        </div>
                      </div>

                        <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">E-mail</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  placeholder="">
                        </div>
                      </div>

                       <div class="form-group">
                        <label for="text" class="col-sm-2 control-label ">Sua Mensagem</label>
                        <div class="col-sm-10">
                         <textarea type="text" class="form-control"  placeholder="">
                         </textarea>
                        </div>
                      </div>

                      <div class="form-group">
                     
                      </div>
                      <div class="form-group">
                    
                      </div>
                  
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                       
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                      </div>
                    </form>
              
              <!-- /. fim do formulario de cadastro-->  
                 </div><!-- /.tab-pane -->
                 
           
                  </div><!-- /.tab-pane -->

               




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
