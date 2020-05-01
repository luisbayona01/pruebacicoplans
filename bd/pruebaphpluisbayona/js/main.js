var app = angular.module("myApp", []);

app.controller("myCtrl", function($scope,$http) {

$('#datepicker').datepicker({
    format: 'yyyy-mm-dd',
    
});


$scope.listactor=function(){
var url="http://localhost/pruebaphpluisbayona/list";
   $http({
   method  : 'POST',
    url     : url,
   }).success(function(response){
           
    $scope.actor=response;

      //$scope.supervisor=response;
       
        });




}
$scope.saveActor=function(){

var url="http://localhost/pruebaphpluisbayona/save";
var  parametros=$("#saveActor").serialize();
$http({
  method  : 'POST',
  url     : url,
  data    : parametros,  // pass in data as strings
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
 
   }).success(function(response){
           
      alert(response['respuesta']);
  
  $scope.listactor();
      //$scope.supervisor=response;
       
        });

  
}
$scope.editActor=function(idactors){

$("#myModal2").modal();
var url="http://localhost/pruebaphpluisbayona/m";
var  parametros=$.param({'idactors':idactors});
$http({
  method  : 'POST',
  url     : url,
  data    : parametros,  // pass in data as strings
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
 
   }).success(function(response){
           
      //alert(response);

$("#myModal2").modal();
 $("#contenido").html(response); 
  //$scope.listar();
      //$scope.supervisor=response;
       
        });

  
}

$scope.deleteActor=function(idactors){
   var url="http://localhost/pruebaphpluisbayona/deleteactor";
var  parametros=$.param({'idactors':idactors});
$http({
  method  : 'POST',
  url     : url,
  data    : parametros,  // pass in data as strings
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
 
   }).success(function(response){
           
    alert(response['respuesta']);
  
  $scope.listactor();
       
        });


}
  $scope.saveCambios=function(){

var url="http://localhost/pruebaphpluisbayona/actorupdate";
var  parametros=$("#saveCambios").serialize();
$http({
  method  : 'POST',
  url     : url,
  data    : parametros,  // pass in data as strings
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
 
   }).success(function(response){
        console.log(response['respuesta']);     
      alert(response['respuesta']);
  $scope.listactor();
  //$scope.listar();
      //$scope.supervisor=response;
       
        });

  }



	$scope.listactor();
/*=====  movies   =====*/
	
$scope.lismovies=function(){
var url="http://localhost/pruebaphpluisbayona/listM";
   $http({
   method  : 'POST',
    url     : url,
   }).success(function(response){
           
    $scope.movies=response;

      
});

}

$scope.saveMovies=function(){

var url="http://localhost/pruebaphpluisbayona/saveM";
var  parametros=$("#saveMovies").serialize();
$http({
  method  : 'POST',
  url     : url,
  data    : parametros,  // pass in data as strings
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
 
   }).success(function(response){
           
      alert(response['respuesta']);
  
  $scope.lismovies();
      //$scope.supervisor=response;
       
        });

  
}

 //editMovies(x.idmovies)


$scope.editMovies=function(idmovies){

$("#myModal2").modal();
var url="http://localhost/pruebaphpluisbayona/updatesM";
var  parametros=$.param({'idmovies':idmovies});
$http({
  method  : 'POST',
  url     : url,
  data    : parametros,  // pass in data as strings
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
 
   }).success(function(response){
           
      //alert(response);

$("#myModal2").modal();
 $("#contenido").html(response); 
  //$scope.listar();
      //$scope.supervisor=response;
       
        });

  
}

//

$scope.saveCambiosM=function(){

var url="http://localhost/pruebaphpluisbayona/moviesupdate";
var  parametros=$("#saveMoviesC").serialize();
$http({
  method  : 'POST',
  url     : url,
  data    : parametros,  // pass in data as strings
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
 
   }).success(function(response){
        console.log(response['respuesta']);     
      alert(response['respuesta']);
  $scope.lismovies();
  //$scope.listar();
      //$scope.supervisor=response;
       
        });

  }

$scope.deleteMovies=function(idmovies){
   var url="http://localhost/pruebaphpluisbayona/deletemovie";
var  parametros=$.param({'idmovies':idmovies});
$http({
  method  : 'POST',
  url     : url,
  data    : parametros,  // pass in data as strings
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
 
   }).success(function(response){
           
    alert(response['respuesta']);
  
    $scope.lismovies();
       
        });


}


$scope.lismovies();

})




