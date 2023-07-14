<?php
if (isset($_POST['eliminar_producto_id'])) {
    $eliminar_producto_id = $_POST['eliminar_producto_id'];

    // Eliminar el producto del carrito utilizando el índice
    if (isset($_SESSION['carrito'][$eliminar_producto_id])) {
        unset($_SESSION['carrito'][$eliminar_producto_id]);
    }
    
    // Reindexar el array del carrito después de eliminar el producto
    $_SESSION['carrito'] = array_values($_SESSION['carrito']);
}


// Redireccionar de vuelta a la página del carrito
echo '<script>window.location = "index.php?ruta=carrito";</script>';
exit();
?>