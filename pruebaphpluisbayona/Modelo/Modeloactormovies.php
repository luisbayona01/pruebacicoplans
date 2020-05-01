
<?php 

include_once dirname(__FILE__) .'/Main.php';
class Modeloactormovies extends Main{  

public  function Insert_actormovies(){
	$idactormovies=$_POST['idactormovies'];$idactorts=$_POST['idactorts'];$idmovies=$_POST['idmovies'];
	
$sql="insert into actormovies (idactormovies,idactorts,idmovies) values ('".$idactormovies."','".$idactorts."','".$idmovies."')";	
	
} 

public function Actualisar_actormovies(){
$idactormovies=$_POST['idactormovies'];$idactorts=$_POST['idactorts'];$idmovies=$_POST['idmovies'];
$sql="update actormovies set idmoviesidmovies='".$idmovies."'"  ;	
	
	
	
	}

public  function Eliminar_actormovies(){
	$idactormovies=$_POST['idactormovies'];$idactorts=$_POST['idactorts'];$idmovies=$_POST['idmovies'];
$sql="delete   from  actormovies where ";	
	
	
	
	} 
	



	
	} 
   


?>
