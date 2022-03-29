<?php session_start(); ?>

<html>
<head>
	<title>Iniciar sesión</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@2.1.0/build/pure-min.css" integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous">
</head>

<body>
<!-- Enlace de vuelta -->
<a href="../index.php"><h3>Volver a inicio</h3></a> <br />

<?php
include("connection.php");
//POST par avalidar usernmae y password
if(isset($_POST['submit'])) {
	$user = mysqli_real_escape_string($mysqli, $_POST['username']);
	$pass = mysqli_real_escape_string($mysqli, $_POST['password']);
	
// Si el usuario y contraseña están vacíos, ocurre el if
	if($user == "" || $pass == "") {
		echo "Debes llenar todos los campos.";
		echo "<br/>";
		echo "<a href='login.php'>Volver a iniciar sesión</a>";
	} else {
		$result = mysqli_query($mysqli, "SELECT * FROM admin WHERE usuario='$user' AND contraseña=md5('$pass')")
					or die("No se pudo ejecutar la query.");
		
		$row = mysqli_fetch_assoc($result);

		//Si el usuario o contraseña no son correctos, ocurre el else
		if(is_array($row) && !empty($row)) {
			$validuser = $row['usuario'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['nombre'] = $row['nombre'];
			$_SESSION['id'] = $row['id'];
		} else {
			echo "Usuario o contraseña invalido.";
			echo "<br/>";
			echo "<a href='login.php'>Volver a iniciar sesión</a>";
		}
		//Si se inicia sesión correctamente vamos a add.html
		if(isset($_SESSION['valid'])) {
			header('Location: ../Admin/add.html');			
		}
	}
} else {
?>

	<p><font size="+2">Iniciar sesión</font></p>
	<!-- Formulario de inicio de sesión -->
	<form name="form1" method="post" action="">
		<table width="75%" border="0">
			<tr> 
				<td width="10%">Nombre de usuario</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr> 
				<td>Contraseña</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr> 
				<td>&nbsp;</td>
			</tr>
		</table>
		<input type="submit" name="submit" value="Iniciar sesión" class="pure-button">
	</form>
<?php
}
?>
</body>
</html>
