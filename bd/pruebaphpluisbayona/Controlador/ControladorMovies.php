<?php
 namespace Controlador;
 use Modelo\Modelomovies;
 class ControladorMovies 
 {
 	public  static function save(){
    $Modelo=new  Modelomovies();
    $nombre=$_POST['nombre'];
	$fechalanzamiento=$_POST['fechalanzamiento'];
	$Modelo->setNombre($nombre);
    $Modelo->setFechalanzamiento($fechalanzamiento);

	if($Modelo->Insert_movies()!=0){

	     $respuesta= array("respuesta"=>" operacion exitosa") ;
	     }else{
	      $respuesta= array("respuesta"=>" operacion fallo") ;

	     }
	      return json_encode($respuesta);	 
	    
 	
 	}
  
   public  static  function  update(){

	    $idmovies=$_POST['idmovies'];
		$nombre=$_POST['nombre'];
		$fechalanzamiento=$_POST['fechalanzamiento'];
	    $Modelo=new  Modelomovies();
	    $Modelo->setIdmovies($idmovies);
	    $Modelo->setNombre($nombre);
	    $Modelo->setFechalanzamiento($fechalanzamiento);
	     

	  if($Modelo->Actualisar_movies()!=0){

	     $respuesta= array("respuesta"=>" operacion exitosa") ;
	     }else{
	      
	      $respuesta= array("respuesta"=>" operacion fallo") ;

	    }
	      return json_encode($respuesta);	 
	    
 	
 	
    }

 	public  static function mostrarupdate(){
      
           $idmovies=$_POST['idmovies'];
           $Modelo=new  Modelomovies();
          
           $Modelo->setIdmovies($idmovies);
           return $Modelo->Mostrarmovies();
     
 	}
    
    public static function   listar(){
           $Modelo=new  Modelomovies();
         $datos=$Modelo->Listar_movies();
        
          return json_encode($datos); 
     }
     
    public  static function delete(){
	    $idmovies=$_POST['idmovies'];
		
	    $Modelo=new  Modelomovies();
	    $Modelo->setIdmovies($idmovies);
	    
	    if($Modelo->Eliminar_movies()!=0){

	     $respuesta= array("respuesta"=>" operacion exitosa") ;
	     }else{
	     $respuesta= array("respuesta"=>" operacion fallo") ;

	     }
	     return json_encode($respuesta);	 
	    
 	

      }

 }

?>