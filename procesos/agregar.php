<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['nombre'],
		$_POST['anio'],
		$_POST['TipoDeporte']
				);

	echo $obj->agregar($datos);
	

 ?>