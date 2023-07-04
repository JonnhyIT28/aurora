<?php 

//CONEXION A BASE DE DATOS
require_once "conexion.php";

// -------QUERY------

class ModeloSearch {
    static public function mdlSearch ($tabla, $search) {
        $query = "SELECT nombre, precio, imagen, transicion, ruta FROM $tabla WHERE nombre LIKE '%$search%'";

        $stmt = Conexion::conectar()->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

        $stmt->closeCursor();

        $stmt = null;
    }
}