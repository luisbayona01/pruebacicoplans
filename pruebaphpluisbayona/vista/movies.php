<html lang="en">
		<head>
		  <title>movies</title>
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
		<body ng-app="myApp" ng-controller="myCtrl" >
	   		
      <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="http://localhost/pruebaphpluisbayona/">Actors</a></li>
      <li class="active"><a href="http://localhost/pruebaphpluisbayona/movies">Movies</a></li>
    
    </ul>
    
  </div>
</nav>

      <div class="container">
		  <h2>listar movies</h2>
		  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">AgregarMovies</button>
		  <div class="table-responsive">
  <table class="table">
  	<thead>
  		<tr>
  		
  			<th> nombre</th>
  			<th> fechalanzamiento</th>
  			<th> acciones </th>
  		</tr>
  	</thead>
  	<tbody>
  		<tr ng-repeat="x  in movies"> 
  	
  		<td>{{x.nombre}}</td>
  		<td>{{x.fechalanzamiento}}</td>
  		<td><button class="btn btn-warning"ng-click='editMovies(x.idmovies)'>Editar</button> 
          <button class="btn btn-danger" ng-click="deleteMovies(x.idmovies)">Eliminar</button>
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
          <h4 class="modal-title">Editar movies</h4>
        </div>
        <div class="modal-body"id="contenido">
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default"ng-click='saveCambiosM()'>guardar</button>
          

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
          <h4 class="modal-title">Agregar movie</h4>

        </div>
        <div class="modal-body">
          <form id="saveMovies">
		  <div class="form-group">
		      <label for="nombre">nombre:</label>
		      <input type="text" class="form-control" id="nombre" placeholder="Enter nombre" name="nombre" value="">
		    </div>
		    <div class="form-group">
		      <label for="identificacion">fechalanzamiento:</label>
		      <input type="text"  id="datepicker"  class="form-control" id="fecha"placeholder="Enter fecha" name="fechalanzamiento"value="">
		    </div>

		
	
		 </form>
		
        </div>
        <div class="modal-footer">
       <button type="button" class="btn btn-default"ng-click='saveMovies()'>guardar</button>
        </div>
      </div>
      
    </div>
  </div>





</div>
		</body>
		</html>