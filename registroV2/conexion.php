<?php
//conexion a la bd

function conectarBd(){
	$conexionBD = pg_connect("host = 127.0.0.1 port=5432 dbname=bdregistro user=registro_user password=1234");

	if(!$conexionBD){
		die('No se puede conectar con la base de datos');
	} else{
		echo 'Conexión estalecida';
	}
	return $conexionBD;
}

function queryBD($sql){
	$conexionBD = conectarBd();
	$resultado = pg_query($conexionBD, $sql);
	pg_close($conexionBD);
	return $resultado;

}

?>
