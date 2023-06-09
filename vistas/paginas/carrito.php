<?php
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}

if (isset($_POST['producto_id'])){
    $producto_id = $_POST['producto_id'];
    require_once "controladores/ctrCarrito.php";
    $productos = ControladorCarrito::ctrCarrito($producto_id);
    
    foreach ($productos as $producto) {
        $_SESSION['carrito'][] = $producto;
    }
}

    echo '<div class="container pt-4 pb-5">';
    echo '<div class="row p-4">';
    echo '<h1 class="text-center pt-5 mt-2">Tu Carrito</h1>';

// Imprimir productos del carrito desde la sesión
foreach ($_SESSION['carrito'] as $producto) {
    echo '<article class="col-12 col-lg-4 px-4 border-card pt-3">';
    echo '<div class="card">';
    echo '<a class="text-decoration-none" href="index.php?ruta=' . $producto['ruta'] . '">';
    echo '<div class="card-image-top">';
    echo '<img class="img-transition-' . $producto['transicion'] . '" height="500px" width="100%">';
    echo '<img src="imagenes/' . $producto['imagen'] . '" style="display: none;">';
    echo '</div>';
    echo '<div class="card-body">';
    echo '<p class="p-card-title card-title d-flex justify-content-center pt-1 text-center">' . $producto['nombre'] . '</p>';
    echo '<p class="p-price card-text d-flex justify-content-center fw-bold text-dark">$' . $producto['precio'] . '</p>';
    

    echo '<form method="post" action="index.php?ruta=eliminar_producto">';
    echo '<input type="hidden" name="eliminar_producto_' . $producto['id'] . '" value="' . $producto['id'] . '">';
    echo '<button type="submit" class="text-light fw-bold btn btn-custom w-100 mt-4" name="eliminar_producto">Eliminar</button>';
    echo '</form>';
    echo '</div>';
    echo '</a>';
    echo '</div>';
    echo '</article>';
}

    echo '</div>';
    echo '</div>';

    echo '<div class="container pt-4 pb-5">';
    echo '<div class="row p-4">';
    echo '<h1 class="text-center pt-5 mt-2">Precio Total: </h1>';
    echo '</div>';
    echo '</div>';
?>