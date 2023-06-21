<?php
//Conexion a Base de datos
include ("conexion.php");

//Datos del form Newsletter
$nombre_form = $_POST['nombre'];
$email_form = $_POST['email'];

//Cuerpo del email
$cuerpo_email = "Nombre : ". $nombre_form. "Email : ". $email_form; 

//Funcion mail
mail("jonnhydev@gmail.com", "Aurora Newsletter", "$cuerpo_email");

//Query
$query = "INSERT INTO email VALUES (DEFAULT, '$nombre_form', '$email_form')";

mysqli_query($conexion, $query);

mysqli_close($conexion);

header("Location: index.php?ok");
