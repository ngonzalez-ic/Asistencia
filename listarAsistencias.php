<?php
include "home.html";
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
   <link rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
   <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
   <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script><link rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
   <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
   <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">   
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
   <script type="text/javascript">
    $(document).ready(function() {
        //Asegurate que el id que le diste a la tabla sea igual al texto despues del simbolo #
        $('#userList').DataTable();
    } );
      function contar() {
  var checkboxes = document.getElementById("userList").checkbox; //Array que contiene los checkbox
  var cont = 0; //Variable que lleva la cuenta de los checkbox pulsados
  for (var x=0; x < checkboxes.length; x++) {
   if (checkboxes[x].checked) {
    cont = cont + 1;
   }
  }
 
  alert ("El número de checkbox pulsados es " + cont);
 }
</script>
</head>

<body>


   <div class="container-fluid">
      <div class="container">
   <div class="mx-auto col-sm-8 main-section" id="myTab" role="tablist">
      <ul class="nav nav-tabs justify-content-end">
         <li class="nav-item">
         <a class="nav-link active" id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false">List</a>
         </li>
         <li class="nav-item">
         <a class="nav-link" id="form-tab" data-toggle="tab" href="#form" role="tab" aria-controls="form" aria-selected="true">Form</a>                  
         </li>
      </ul>
      <div class="tab-content" id="myTabContent">
         <div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
            <div class="card">
               <div class="card-header">
                  <h4>Asistencias</h4>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table id="userList" class="table table-bordered table-hover table-striped">
                        <thead class="thead-light">
                        <tr>                          
                           <th scope="col">Nombre y apellido</th>                        
                           <th scope="col">1</th>
                           <th scope="col">2</th>
                           <th scope="col">3</th>
                           <th scope="col">4</th>
                           <th scope="col">5</th>
                           <th scope="col">6</th>
                          <th scope="col">Horas Presente</th> 
                           <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>                         
                           <td>Cristian Ruiz</td>                  
                          <td class="check"><input name="checkbox" type="checkbox" onchange="javascript:Contenedorcheck(this)" checked/></td>
                          <td class="check"><input name="checkbox" type="checkbox" onchange="javascript:Contenedorcheck(this)" checked /></td>
                          <td class="check"><input name="checkbox" type="checkbox" onchange="javascript:Contenedorcheck(this)" checked /></td>
                          <td class="check"><input name="checkbox" type="checkbox" onchange="javascript:Contenedorcheck(this)" checked /></td>
                          <td class="check"><input name="checkbox" type="checkbox" onchange="javascript:Contenedorcheck(this)" checked /></td>
                          <td class="check"><input name="checkbox" type="checkbox" onchange="javascript:Contenedorcheck(this)" checked /></td>
                          <td input type="button" name="Submit" value="Contar" onClick="contar()"></td> 
                          <td>
                              <a href="#"><i class="fas fa-edit"></i></a> | <a href="#"><i class="fas fa-user-times"></i></a>
                          </td>
                        </tr>

                        </tbody>
                     </table>
                  </div>

               </div>
            </div>
         </div>
         <div class="tab-pane fade" id="form" role="tabpanel" aria-labelledby="form-tab">
            <div class="card">
               <div class="card-header">
                  <h4>User Information</h4>
               </div>
               <div class="card-body">
                  <form class="form" role="form" autocomplete="off">
                     <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">First name</label>
                        <div class="col-lg-9">
                           <input class="form-control" type="text" >
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Last
                           name</label>
                        <div class="col-lg-9">
                           <input class="form-control" type="text" >
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Email</label>
                        <div class="col-lg-9">
                           <input class="form-control" type="email">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Username</label>
                        <div class="col-lg-9">
                           <input class="form-control" type="text">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Password</label>
                        <div class="col-lg-9">
                           <input class="form-control" type="password">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Confirm</label>
                        <div class="col-lg-9">
                           <input class="form-control" type="password" >
                        </div>
                     </div>
                     <div class="form-group row">
                        <div class="col-lg-12 text-center">
                           <input type="reset" class="btn btn-secondary" value="Cancel">
                           <input type="button" class="btn btn-primary"
                              value="Save Changes">
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>  
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html> 