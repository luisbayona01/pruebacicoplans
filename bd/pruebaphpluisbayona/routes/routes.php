<?php
use controlador\Controladoractors;
use controlador\ControladorMovies;

$route->post('/save',function(){
 echo Controladoractors::save();
});

$route->post('/list',function(){
 echo Controladoractors::listar();
});

$route->get('/',function(){
   require $_SERVER["DOCUMENT_ROOT"]."/pruebaphpluisbayona/vista/actors.php";
 
});

$route->post('/m',function(){
  require $_SERVER["DOCUMENT_ROOT"]."/pruebaphpluisbayona/vista/Viewupdateactors.php";
});

$route->post('/actorupdate',function(){

echo Controladoractors::update();
});

$route->post('/deleteactor',function(){

echo   Controladoractors::delete();
});

/*====== movies =====*/

$route->post('/saveM',function(){
 echo ControladorMovies::save();
});

$route->post('/listM',function(){
 echo ControladorMovies::listar();
});

$route->get('/movies',function(){
   require $_SERVER["DOCUMENT_ROOT"]."/pruebaphpluisbayona/vista/movies.php";
 
});

$route->post('/updatesM',function(){
  require $_SERVER["DOCUMENT_ROOT"]."/pruebaphpluisbayona/vista/Viewupdatemovies.php";
});

$route->post('/moviesupdate',function(){

echo ControladorMovies::update();
});

$route->post('/deletemovie',function(){

echo   ControladorMovies::delete();
});

?>