<?php 
  namespace Controlador;
 use Modelo\Modeloactors;
  class Controladoractors
     { 
    public static function save(){
    $Modelo=new  Modeloactors();       
	$nombre=$_POST['nombre'];
	$identificacion=$_POST['identificacion'];
	$telefono=$_POST['telefono'];
	$correo=$_POST['correo'];
	  
    
     $Modelo->setNombre($nombre);
     $Modelo->setIdentificacion($identificacion);
     $Modelo->setTelefono($telefono);
     $Modelo->setCorreo($correo);
     if($Modelo->Insert_actors()!=0){

     $respuesta= array("respuesta"=>" operacion exitosa") ;
     }else{
      $respuesta= array("respuesta"=>" operacion fallo") ;

     }
      return json_encode($respuesta);	 
     }
     
    public  static function update(){
     

    $Modelo=new  Modeloactors();
     //print_r($_POST);
    $idactors=$_POST['idactors'];
	  $nombre=$_POST['nombre'];
	  $identificacion=$_POST['identificacion'];
	  $telefono=$_POST['telefono'];
	  $correo=$_POST['correo'];


     $Modelo->setIdactors($idactors);
     $Modelo->setNombre($nombre);
     $Modelo->setIdentificacion($identificacion);
     $Modelo->setTelefono($telefono);
     $Modelo->setCorreo($correo);
         if($Modelo->Actualisar_actors()!=0){

     $respuesta= array("respuesta"=>" operacion exitosa") ;
     }else{
      $respuesta= array("respuesta"=>" operacion fallo") ;

     }
      return json_encode($respuesta);	
    

     	}
     
       public static function delete(){
       $Modelo=new  Modeloactors();
       $idactors=$_POST['idactors'];
       $Modelo->setIdactors($idactors);
    
         if($Modelo->Eliminar_actors()!=0){

         $respuesta= array("respuesta"=>" operacion exitosa") ;
     }else{
           $respuesta= array("respuesta"=>" operacion fallo") ;

     }
      return json_encode($respuesta);	
    
       }
        public  static function mostrarupdate(){
            $idactors=$_POST['idactors'];
           $Modelo=new  Modeloactors();
          
           $Modelo->setIdactors($idactors);
           return $Modelo->Mostraractor(); 
        }

        public  static  function  listar(){
         $Modelo=new  Modeloactors();
         $datos=$Modelo->Listar_actors();
        
          return json_encode($datos); 
        }

     }
  

    




?>