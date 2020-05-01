<?php 
 namespace Modelo;
use Config\Main;
class Modeloactors{  
private $idactors;
public $nombre;
public $identificacion;
public $telefono;
public $correo;
 
   public function setIdactors($idactors) {
        $this->idactors = $idactors;
    }

  public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function setIdentificacion($identificacion) {
        $this->identificacion = $identificacion;
    }
    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }
    public function setCorreo($correo) {
        $this->correo = $correo;
    }

public  function Insert_actors(){
	
	$BD=new Main();
	
$sql="insert into actors (nombre,identificacion,telefono,correo) values ('".$this->nombre."','".$this->identificacion."','".$this->telefono."','".$this->correo."')";	
 $query=$BD->abredatabase($sql);
  
  if ($query){
    return 1;

  }	else{
    return 0;

  }
} 

public function Actualisar_actors(){
$BD=new Main();
$sql="update actors set nombre='".$this->nombre."',identificacion='".$this->identificacion."',telefono='".$this->telefono."',correo='".$this->correo."' where idactors='".$this->idactors."'";	
	
	 $query=$BD->abredatabase($sql);
  
  if ($query){
    return 1;

  }	else{
    return 0;

  }
	
	}

public  function Eliminar_actors(){
	$BD=new Main();
   $sql="delete   from  actors where  idactors='".$this->idactors."' ";	
	
	 $query=$BD->abredatabase($sql);
  
  if ($query){
    return 1;

  }	else{
    return 0;

  }
	
	} 
	
  public  function Listar_actors(){
   $BD=new Main();
   $sql="SELECT * FROM actors";
   $query=$BD->abredatabase($sql);
   $data=array();
   while($rows=$BD->dregistro($query)){
   $data[]=$rows;
   
   }
   
    return $data;
   }	
   public  function Mostraractor(){
   $BD=new Main();
   $sql="SELECT * FROM actors where  idactors='".$this->idactors."'  ";
   $query=$BD->abredatabase($sql);
   $data=array();
   $rows=$BD->dregistro($query);   

   return $rows;
   
   
  }

  



	
	} 
   


?>
