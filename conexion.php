<?php
	$servidor="localhost";
	$usuario="root";
	$clave="";
	$bd="agrofaenas";
	$con =mysqli_connect($servidor,$usuario,$clave);
	if(!$con){
		die("Error al Conectarse al motor");
	}
	$base = mysqli_select_db($con,$bd);
	if(!$base){
		die("Error al seleccionar la BD");
	}
?>