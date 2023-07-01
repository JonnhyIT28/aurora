<?php
require_once "modelos/newsletter.php";

class ControladorNewsletter {
    static public function ctrNewsletter(){
        if (isset ($_POST['nombre'])) {

            $tabla = "email";

            $datos = array(
                "nombre" => $_POST["nombre"],
                "email" => $_POST["email"]
            );

            $respuesta = ModeloNewsletter::mdlNewsletter($tabla, $datos);
            
            return $respuesta;
        }
    }
}