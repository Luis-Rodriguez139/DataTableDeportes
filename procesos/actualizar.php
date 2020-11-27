<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['nombreU'],
		$_POST['anioU'],
		$_POST['TipoDeporte'],
		$_POST['iddeporte']
				);

	echo $obj->actualizar($datos);
	

 ?>