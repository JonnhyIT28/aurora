<?php

require ("modelos/search.php");

class ControladorSearch {
    static public function ctrSearch ($search){
        $tabla = "productos";
        $respuesta = ModeloSearch::mdlSearch($tabla, $search);
        return $respuesta;
    }
}