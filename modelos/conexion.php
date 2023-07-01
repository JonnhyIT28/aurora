<?php 
/*
$conexion = mysqli_connect("localhost", "id19524165_auroradb", "Admin123$", "id19524165_aurora") 
    or exit ("error en la conexion");
*/

class Conexion {
    static public function conectar (){
        try {
            $link = new PDO("mysql:host=localhost;port=3306;dbname=id19524165_aurora",
            "id19524165_auroradb", 
            "Admin123$");

            $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $link->exec("set names utf8");

            return $link;
        } catch(PDOException $ex) {
            // Manejar el error de conexión
            echo "Error de conexión: " . $ex->getMessage();
            // Puedes realizar alguna acción adicional como registrar el error en un archivo de registro
            // o redirigir a una página de error, dependiendo de tus necesidades.
            return null;
        }
    }
}
?>
