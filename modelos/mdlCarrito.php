<?php 

require_once "conexion.php";
/*
class EmailCompra {
    public $nombre;
    public $precio;
    public $talle;
    public $cantidad;

    public function __construct($nombre_producto, $precio_producto, $talle_producto, $cantidad_producto) {
        $this->nombre = $nombre_producto;
        $this->precio = $precio_producto;
        $this->talle = $talle_producto;
        $this->cantidad = $cantidad_producto;
    }

    //Envio de Email
    public function enviarCorreo() {
        $cuerpo_email = "Nombre: " . $this->nombre . "\nPrecio: " . $this->precio . "\nTalle: " . $this->talle . "\nCantidad: " . $this->cantidad;
        mail("jonnhydev@gmail.com", "Nueva Compra !", $cuerpo_email);
    }
}


// Datos del Formulario de Newsletter
$nombre_producto = $_POST['nombre_producto'];
$precio_producto = $_POST['precio_producto'];
$talle_producto = $_POST['talle_producto'];
$cantidad_producto = $_POST['cantidad_producto'];

// Crear objeto Email y llamar al método enviarCorreo()
if (isset ($_POST ['nombre_producto'])) {
    $email = new Email($nombre_producto, $precio_producto, $talle_producto, $cantidad_producto);
    $email->enviarCorreo();
}
*/

class ModeloCarrito {
    
    static public function mdlCarrito ($tabla, $producto_id) {
        $query = "SELECT nombre, precio, imagen, transicion, ruta FROM $tabla WHERE id = $producto_id";
        
        $stmt = Conexion::conectar()->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

        $stmt->closeCursor();

        $stmt = null;
    }
}

