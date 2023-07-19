<?php
require_once "modelos/newsletter.php";

class ControladorNewsletter {
    static public function ctrNewsletter(){
        if (isset($_POST['nombre']) && isset($_POST['email'])) {

            $tabla = "email";

            // Validar el formato del correo electrónico
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                return "El formato del correo electrónico no es válido.";
            }

            $datos = array(
                "nombre" => $_POST["nombre"],
                "email" => $_POST["email"]
            );

            $respuesta = ModeloNewsletter::mdlNewsletter($tabla, $datos);
            
            return $respuesta;
        }
    }
}