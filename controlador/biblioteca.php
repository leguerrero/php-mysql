<?php 
/*
print_r($_POST);
var_dump($_POST);
*/
$codigo = filter_input( INPUT_POST ,'codigo', FILTER_SANITIZE_STRING);
$titulo =filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
$autor = filter_input( INPUT_POST, 'autor', FILTER_SANITIZE_STRING);
$fpublicacion = filter_input( INPUT_POST, 'fpublicacion', FILTER_SANITIZE_STRING);
$editorial = filter_input( INPUT_POST, 'editorial',  FILTER_SANITIZE_STRING);

$connection = mysqli_connect('localhost', 'root', '');
 	if(!$connection){
 		die('No hay conexion a la BD');
 	}
//SELECCION DE LA BASE DE DATOS
 	mysqli_select_db($connection,'biblioteca');

 //PREPARAR SENTENCIA SQL
 	$sql = sprintf( "INSERT INTO libros (codigo,titulo,autor,fpublicacion,editorial) VALUES ('%s', '%s', '%s', '%s', '%s')", $codigo, $titulo, $autor, $fpublicacion, $editorial) ;
	$res = mysqli_query($connection, $sql);
	
	//mysqli_free_result($res); //cierra la conexion de datos
	var_dump($res); 

 	echo $sql;

 ?>