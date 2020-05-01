<?php 
namespace Modelo;
use Config\Main;
class Modelomovies{  

private $idmovies;
public $nombre;
public $fechalanzamiento;


public function  setIdmovies($idmovies){
$this->idmovies = $idmovies;
}

 public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

 public function  setFechalanzamiento($fechalanzamiento){
 	$this->fechalanzamiento=$fechalanzamiento;
 }    

public  function Insert_movies(){
	
$BD=new Main();	
$sql="insert into movies (nombre,fechalanzamiento) values ('".$this->nombre."','".$this->fechalanzamiento."')";	
	 $query=$BD->abredatabase($sql);
  
  if ($query){
    return 1;

  }	else{
    return 0;

  }
} 

public function Actualisar_movies(){

$sql="update movies set fechalanzamiento='".$this->fechalanzamiento."',nombre='".$this->nombre."' where idmovies='".$this->idmovies."' "  ;	
	
	$BD=new Main();	
	 $query=$BD->abredatabase($sql);
  
  if ($query){
    return 1;

  }	else{
    return 0;

  }

	}

public  function Eliminar_movies(){

    $sql="delete   from  movies where  idmovies ='".$this->idmovies."'";	
	
	$BD=new Main();	
	 $query=$BD->abredatabase($sql);
  
   if ($query){
    return 1;

   }	else{
    return 0;

    }
	
	} 
	

public  function Listar_movies(){
   $BD=new Main();
   $sql="SELECT * FROM movies";
   $query=$BD->abredatabase($sql);
   $data=array();
   while($rows=$BD->dregistro($query)){
   $data[]=$rows;
   
   }
   
    return $data;
   }	
   public  function Mostrarmovies(){
   $BD=new Main();
   $sql="SELECT * FROM movies where  idmovies='".$this->idmovies."' ";
   $query=$BD->abredatabase($sql);
   $data=array();
   $rows=$BD->dregistro($query);   

   return $rows;
   
   
  }


	
	} 
   


?>
