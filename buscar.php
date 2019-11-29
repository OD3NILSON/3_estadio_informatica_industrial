<?php include_once ('head.php') ?>
<?php include_once ('header.php') ?>
<?php include_once ('conection.php') ?>





 <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">



 <div class="content-wrapper">
   <div class="box box-primary">
     <div class="box-body box-profile">

 <table class="table">
  <thead>
    <tr>
      <th scope="col">Tanque</th>
      <th scope="col">Nivel</th>
      <th scope="col">Bomba d'água</th>
    
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Modelo A</th>
      <td>80%</td>
      <td>  <button type="button" class="btn btn-success btn-sm">Ligar</button>
            <button type="button" class="btn btn-danger btn-sm">Desligar</button>

     </td>
      
      
    </tr>
    <tr>
      <th scope="row">Modelo B</th>
      <td>25%</td>
      <td><button type="button" class="btn btn-success btn-sm">Ligar</button>
            <button type="button" class="btn btn-danger btn-sm">Desligar</button></td>
    

    </tr>
    <tr>
      <th scope="row">Modelo C</th>
      <td>50%</td>
      <td><button type="button" class="btn btn-success btn-sm">Ligar</button>
            <button type="button" class="btn btn-danger btn-sm">Desligar</button></td>
      
    </tr>
  </tbody>
</table>
                




</div>
</div>
 </div>