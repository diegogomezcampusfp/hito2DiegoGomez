<!-- Inicio de sesión -->
<?php session_start(); ?>
<!-- Principio de HTML -->
<html>
<head>
	<title>Página de inicio</title>
	<!-- CSS de Pure CSS -->
	<link rel="stylesheet" href="https://unpkg.com/purecss@2.1.0/build/pure-min.css" integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous">
</head>

<body>
<!-- Header -->
<div id="header">
		<h1>Página principal</h1>
	</div>
<!-- Navbar -->
	<div class="pure-menu pure-menu-horizontal">
    	<ul class="pure-menu-list">
       	 <li class="pure-menu-item">
            <a href="base/login.php" class="pure-menu-link">Iniciar sesión</a>
       	 </li>
        	<li class="pure-menu-item">
            <a href="base/register.php" class="pure-menu-link">Registrarse</a>
        	</li>
   	 </ul>
	</div>
</body>
</html>
