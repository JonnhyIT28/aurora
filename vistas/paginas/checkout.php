<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $transicion = $_POST['transicion'];
    $imagenes = $_POST['imagenes'];
    $precios = $_POST['precios'];
    $nombres = $_POST['nombres'];
    $precio_total = $_POST['precio_total'];
    
    // Mostrar confirmación de compra o resumen de la orden
    
    echo '<div class="container mt-3 pt-5 pb-5">';
    echo '<div class="row p-4">';
    echo '<h1 class="text-center">Confirmación de compra</h1>';
    echo '<h2>Detalles de la orden:</h2>';

    // Verificar si el carrito está vacío
    if (empty($nombres)) {
        echo '<p class="pt-4 text-center text-dark h3">Tu carrito está vacío.</p>';
    } else {
        // Iterar sobre los productos y mostrar la información
        foreach ($nombres as $index => $nombre) {
            echo '<article class="col-12 col-lg-4 px-4 border-card pt-3">';
            echo '<div class="card">';
            echo '<div class="card-image-top">';
            echo '<img class="img-transition-' . $transicion[$index] . '">';
            echo '<img src="imagenes/' . $imagenes[$index] . '" style="display: none;">';
            echo '</div>';
            echo '<div class="card-body">';
            echo '<p class="p-card-title card-title d-flex justify-content-center pt-1 text-center">Nombre: ' . $nombre . '</p>';
            echo '<p class="p-price card-text d-flex justify-content-center fw-bold text-dark">Precio: $' . $precios[$index] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</article>';
        }

        echo '</div>'; 

        echo '<h3 class="text-center pt-5">Precio total: $' . $precio_total . '</h3>';
        echo '<h2 class="text-center pt-2">¡Gracias por tu compra!</h2>';
    }
    
    echo '</div>';
    echo '</div>';


} else {
    // Redireccionar si se accede directamente a checkout.php sin datos de POST
    echo '<script>window.location = "index.php?ruta=carrito";</script>';
    exit();
}
?>