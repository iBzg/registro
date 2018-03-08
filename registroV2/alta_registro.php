<?php 
include_once 'conexion.php';

if(empty($_POST)){
	die('Error al guardar usuario...');
}

$id_usuario = empty($_POST['id_usuario'] ? $_POST['id_usuario']: '';
$nombre = !empty($_POST['nombre']) ? $_POST['nombre'] : '';
$paterno = !empty($_POST['paterno']) ? $_POST['paterno'] :'';
$materno = !empty($_POST['materno']) ? $_POST['materno'] : '';
$telefono = !empty($_POST['telefono']) ? $_POST['telefono'] : '';
$email = !empty($_POST['email']) ? $_POST['email'] : '';

$sql = "";
if(empty($id_usuario)){
	$sql="INSERT INTO usuarios(id_usuario, nombre,paterno,materno,telefono,email) VALUES ('$id_usuario', '$nombre','$paterno','$materno','$telefono','$email');";
}

$resultado = queryBD($conexionBD, $sql);

if($resultado){
	echo 'Usuario guardado correctamente.';
} else {
	echo 'Error al guardar el ususario.';
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Registro de usuarios</title>
<link href="/css/styles.css" rel= "stylesheet" type="text/css">
</head>
<body>


</body>
</html> 
