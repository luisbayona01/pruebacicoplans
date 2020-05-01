

		  <h2> updatemovies</h2>
            <?php 
           use controlador\ControladorMovies;
		   $movies=ControladorMovies::mostrarupdate();
          //Array ( [idmovies] => 1 [nombre] => grantorino [fechalanzamiento] => 2019-04-02 )
           
          ?>
           
		  <form id="saveMoviesC">
		  <div class="form-group">
		  	<input type="hidden" name="idmovies" value=<?php echo $movies['idmovies']   ?>>
		      <label for="nombre">nombre:</label>
		      <input type="text" class="form-control" id="nombre" placeholder="Enter nombre" name="nombre" value=<?php echo $movies['nombre']?>>
		    </div>
		    <div class="form-group">
		      <label for="identificacion">fechalanzamiento:</label>
		      <input type="text"  id="datepicker"  class="form-control" id="fecha"placeholder="Enter fecha" name="fechalanzamiento"value=<?php echo $movies['fechalanzamiento']?>>
		</div>
		</body>
		</html>