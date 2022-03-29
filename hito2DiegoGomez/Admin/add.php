<?php session_start(); ?>

<!-- Se comprueba el incio de sesión -->
<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<html>
<head>
	<title>Añadir usuarios</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@2.1.0/build/pure-min.css" integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous">
</head>

<body>
<?php

//Conexión a la base de datos
include_once("../base/connection.php");

if(isset($_POST['Submit'])) {	
	$nom = $_POST['nom'];
	$ape = $_POST['ape'];
	$tel = $_POST['tel'];
	$loginId = $_SESSION['id'];
		
	// Comprobar que no hay campos vacíos
	if(empty($nom) || empty($ape) || empty($tel)) {
				
		if(empty($nom)) {
			echo "<font color='red'>El campo nombre está vacío.</font><br/>";
		}
		
		if(empty($ape)) {
			echo "<font color='red'>El campo apellidos está vacío.</font><br/>";
		}
		
		if(empty($tel)) {
			echo "<font color='red'>El campo teléfono está vacío.</font><br/>";
		}
		
		//Link a la página anterior
		echo "<br/><a href='javascript:self.history.back();'>Volver</a>";
	} else { 	
		//Insertar datos en la tabla usuarios
		$result = mysqli_query($mysqli, "INSERT INTO usuarios(nombre, apellidos, telefono, login_id) VALUES('$nom','$ape','$tel', '$loginId')");
	}
}
?>
</body>
</html>
