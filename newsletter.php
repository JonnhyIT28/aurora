<?php
$nombre_form = $_POST['nombre'];
$email_form = $_POST['email'];

$cuerpo_email = "Nombre : ". $nombre_form. "Email : ". $email_form; 

//Conexion a Base de datos
include ("conexion.php");

mail("jonnhydev@gmail.com", "Aurora Newsletter", "$cuerpo_email");

header("Location: index.php?ok");
?>