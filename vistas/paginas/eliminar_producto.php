<?php
if (isset($_POST['eliminar_producto_' . $producto['id'] . ''])) {
    $eliminar_producto_id = $_POST['eliminar_producto_' . $producto['id'] . ''];

    // Buscar el producto en el carrito por su ID y eliminarlo
    foreach ($_SESSION['carrito'] as $key => $producto) {
        if ($producto['id'] == $eliminar_producto_id) {
            unset($_SESSION['carrito'][$key]);
            break; // Detener el bucle después de eliminar el producto
        }
    }

    // Reindexar el array del carrito después de eliminar el producto
    $_SESSION['carrito'] = array_values($_SESSION['carrito']);
}

// Redireccionar de vuelta a la página del carrito
echo '<script>window.location = "index.php?ruta=carrito";</script>';
exit();
?>