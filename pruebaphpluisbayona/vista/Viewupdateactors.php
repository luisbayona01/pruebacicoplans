        <form id="saveCambios">
		  <?php 
           use controlador\Controladoractors;
		   $actors=Controladoractors::mostrarupdate();
           //Array ( [idactors] => 3 [nombre] => luis [identificacion] => 12345 [telefono] => 789566 [correo] => asasas@hgashag )
     
          ?>
		    <input type="hidden" class="form-control" id="idactors"  name="idactors"value=<?php echo  $actors['idactors'];?>>
		    
		    <div class="form-group">
		      <label for="nombre">nombre:</label>
		      <input type="text" class="form-control" id="nombre" placeholder="Enter nombre" name="nombre" value=<?php echo  $actors['nombre'];?>>
		    </div>
		    <div class="form-group">
		      <label for="identificacion">identificacion:</label>
		      <input type="text" class="form-control" id="identificacion" placeholder="Enter identificacion" name="identificacion"value=<?php echo  $actors['identificacion'];?>>
		    </div>
		    <div class="form-group">
		      <label for="telefono">telefono:</label>
		      <input type="text" class="form-control" id="telefono" placeholder="Enter telefono" name="telefono"value=<?php echo  $actors['telefono'];?>>
		    </div>
		    <div class="form-group">
		      <label for="correo">correo:</label>
		      <input type="text" class="form-control" id="correo" placeholder="Enter correo" name="correo"value="<?php echo  $actors['correo'];?>">
		    </div>
		   
		</form>
		