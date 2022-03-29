<html>
<head>
	<title>Registrar usuario</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@2.1.0/build/pure-min.css" integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous">
</head>

<body>
<a href="../index.php"><h3>Volver a inicio</h3></a> <br />
<?php
include("connection.php");

//Asignamos al POST los datos de registro de usuario
if(isset($_POST['submit'])) {
	$name = $_POST['nombre'];
	$email = $_POST['email'];
	$user = $_POST['usuario'];
	$pass = $_POST['contraseña'];

//Si los campos de registro están vacíos ocurre el if
	if($user == "" || $pass == "" || $name == "" || $email == "") {
		echo "Debes rellenar todos los campos.";
		echo "<br/>";
		echo "<a href='register.php'>Volver</a>";
	} else {
		mysqli_query($mysqli, "INSERT INTO admin(nombre, email, usuario, contraseña) VALUES('$name', '$email', '$user', md5('$pass'))")
			or die("No se pudo ejecutar la query.");
			
		echo "Registro con éxito";
		echo "<br/>";
		echo "<a href='login.php'>Iniciar sesión</a>";
	}
} else {
?>

	<p><font size="+2">Registrar usuario</font></p>

	<!-- Formulario de registro de usuario -->
	<form name="form1" method="post" action="">
		<table width="75%" border="0">
			<tr> 
				<td width="10%">Nombre completo</td>
				<td><input type="text" name="nombre"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>			
			<tr> 
				<td>Usuario</td>
				<td><input type="text" name="usuario"></td>
			</tr>
			<tr> 
				<td>Contraseña</td>
				<td><input type="password" name="contraseña"></td>
			</tr>
			<tr> 
				<td>&nbsp;</td>
			</tr>
		</table>
		<input type="submit" name="submit" value="Registrar usuario" class="pure-button">
	</form>
	
<?php
}
?>
</body>
</html>
