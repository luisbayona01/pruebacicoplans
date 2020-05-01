<html lang="en">
		<head>
		  <title>actores</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
      <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
		  <script src="js/angular.min.js"></script>
		  <script src="js/main.js"></script>
		</head>
		<body ng-app="myApp" ng-controller="myCtrl">

      <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="http://localhost/pruebaphpluisbayona/">Actors</a></li>
      <li><a href="http://localhost/pruebaphpluisbayona/movies">Movies</a></li>
    
    </ul>
    
  </div>
</nav>
			<div class="container">
		  <h2>listar actors</h2><div class="table-responsive">
   <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">AgregarActor</button>

  <table class="table">
  	<thead>
  		<tr>
  			<th> Nombre</th>
  			<th> Identificacion</th>
  			<th> Telefono</th>
  			<th> Correo</th>
  			<th> Acciones</th>
  		 </tr>
  		</thead>
  		<tbody>
  			<tr ng-repeat="data in actor"> 
  			<td>{{data.nombre}}</td>
  			<td>{{data.identificacion}}</td>
  			<td>{{data.telefono}}</td>
  			<td>{{data.correo}}</td>
  			<td><button class="btn btn-warning"ng-click='editActor(data.idactors)'>Editar</button> 
                 <button class="btn btn-danger" ng-click="deleteActor(data.idactors)">Eliminar</button>
  			</td>
  		  </tr> 
  		</tbody>
  		</table>
		</div> 
		
    <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Editar Actor</h4>
        </div>
        <div class="modal-body"id="contenido">
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default"ng-click='saveCambios()'>guardar</button>
          

        </div>
      </div>
      
    </div>
  </div>

		

    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar Actor</h4>

        </div>
        <div class="modal-body">
          <form id="saveActor">
		  <div class="form-group">
		      <label for="nombre">nombre:</label>
		      <input type="text" class="form-control" id="nombre" placeholder="Enter nombre" name="nombre" value="">
		    </div>
		    <div class="form-group">
		      <label for="identificacion">identificacion:</label>
		      <input type="text" class="form-control" id="identificacion" placeholder="Enter identificacion" name="identificacion"value="">
		    </div><div class="form-group">
		      <label for="telefono">telefono:</label>
		      <input type="text" class="form-control" id="telefono" placeholder="Enter telefono" name="telefono"value="">
		    </div><div class="form-group">
		      <label for="correo">correo:</label>
		      <input type="text" class="form-control" id="correo" placeholder="Enter correo" name="correo"value="">
		    </div>
		
	
		 </form>
		
        </div>
        <div class="modal-footer">
       <button type="button" class="btn btn-default"ng-click='saveActor()'>guardar</button>
        </div>
      </div>
      
    </div>
  </div>



		</div>


		</body>
		</html>