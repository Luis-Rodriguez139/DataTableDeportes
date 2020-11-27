<?php 

	class crud{
		public function agregar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="INSERT into t_deportes (nombre,anio,TipoDeporte)
									values ('$datos[0]',
											'$datos[1]',
											'$datos[2]')";
			return mysqli_query($conexion,$sql);
		}

		public function obtenDatos($idjuego){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT id_deporte,
							nombre,
							anio,
							TipoDeporte
					from t_deportes 
					where id_deporte='$iddeporte'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'id_deporte' => $ver[0],
				'nombre' => $ver[1],
				'anio' => $ver[2],
				'TipoDeporte' => $ver[3]
				);
			return $datos;
		}

		public function actualizar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE t_deportes set nombre='$datos[0]',
										anio='$datos[1]',
										TipoDeporte='$datos[2]'
						where id_deporte='$datos[3]'";
			return mysqli_query($conexion,$sql);
		}
		public function eliminar($idjuego){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="DELETE from t_deportes where id_deporte='$iddeporte'";
			return mysqli_query($conexion,$sql);
		}
	}

 ?>