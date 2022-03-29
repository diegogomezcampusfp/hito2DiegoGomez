<?php
session_start();
session_destroy();
//Al cerrar sesión volvemos a index.php
header("Location:../index.php");
?>
