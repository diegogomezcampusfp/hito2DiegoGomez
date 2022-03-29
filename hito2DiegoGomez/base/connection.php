<?php
//Declaración de variables (asignando características de la conexión) para usarlas en la conexión
$databaseHost = 'localhost';
$databaseName = 'crud';
$databaseUsername = 'root';
$databasePassword = '';

//Mysqi connect usando las variables 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
	
?>
