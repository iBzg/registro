<?php
include_once 'conexion.php';
?>

<!DOCTYPE html> 
<html>
<head> 
<title>Registro de usuarios</title> 
<link href="/css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>

<h2>Registro de usuarios</h2>
<form action="alta_registro.php" method="post">
<p>Ingrese la siguiente información: </p>
    <div>
	<label for="id_usuario">Id usuario:</label>
	<input type="tex" id="id_usuario">
    </div>
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre"/>
    </div>
    <div>
        <label for="paterno">Apellido paterno:</label>
        <input type="text" id="paterno"/>
    </div>
    <div>
	<label for="materno">Apellido materno:</label>
	<input type="text" id="materno"/>
    </div>
    <div>
	<label for="telefono">Teléfono:</label>
	<input type="text" id="telefono"/>
    </div>
    <div>
	<label for="email">Email:</label>
	<input type="text" id="email"/>
    </div>
	<input type="submit" value="Enviar">
</body>
</html>
