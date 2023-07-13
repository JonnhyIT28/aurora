<?php

require ("modelos/mdlCarrito.php");

class ControladorCarrito {
    static public function ctrCarrito ($producto_id){
        $tabla = "productos";
        $respuesta = ModeloCarrito::mdlCarrito($tabla, $producto_id);
        return $respuesta;
    }
}