<?php session_start(); ?>

<!-- Redirección con header -->
<?php
if(!isset($_SESSION['valid'])) {
	header('Location: ../base/login.php');
}
?>

<?php
//Incluir base de datos
include_once("../base/connection.php");

//Ordenarlo en descendente
$result = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE id=".$_SESSION['id']." ORDER BY id DESC");
?>

<html>
<head>
	<title>Añadir usuarios</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@2.1.0/build/pure-min.css" integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous">
</head>

<!-- Navbar -->
<body>
	<a href="../index.php">Inicio</a> | <a href="../Admin/add.html">Añadir usuarios</a> | <a href="../base/logout.php">Cerrar sesión</a>
	<br/><br/>

	<!-- Tabla de usuarios -->
	<table width='80%' border=0>
		<tr bgcolor='#CCCCCC'>
			<td>Nombre</td>
			<td>Apellidos</td>
			<td>Teléfono</td>
		</tr>
		<!-- Fetch array para llenar cada campo -->
		<?php
		while($res = mysqli_fetch_array($result)) {		
			echo "<tr>";
			echo "<td>".$res['nombre']."</td>";
			echo "<td>".$res['apellidos']."</td>";
			echo "<td>".$res['telefono']."</td>";			
		}
		?>
	</table>	
</body>
</html>
