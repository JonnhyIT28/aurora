<?php
if (isset($_POST['q'])){
    $search = $_POST['q'];
    require_once "controladores/ctrSearch.php";
    $productos = ControladorSearch::ctrSearch($search);
    
    echo '<div class="container pt-4 pb-5">';
    echo '<div class="row p-4">';
    echo '<h1 class="text-center pt-5 mt-2">Resultados de la Busqueda</h1>';
    foreach ($productos as $producto) {
        $cuotas = $producto['precio'] / 6;
        $producto['precio'] = number_format($producto['precio'], 0, ',', '.');
        $cuotas = number_format($cuotas, 2, ',', '.');
        echo '<article class="col-12 col-lg-4 px-4 border-card pt-5">';
        echo '<div class="card">';
        echo '<a class="text-decoration-none" href="index.php?ruta=' . $producto['ruta'] . '">';
        echo '<div class="card-image-top">';
        echo '<img class="img-transition-' . $producto['transicion'] . '" height="500px" width="100%">';
        echo '<img src="imagenes/' . $producto['imagen'] . '" style="display: none;">';
        echo '</div>';
        echo '<div class="card-body">';
        echo '<p class="p-card-title card-title d-flex justify-content-center pt-1 text-center">' . $producto['nombre'] . '</p>';
        echo '<p class="p-price card-text d-flex justify-content-center fw-bold text-dark">$' . $producto['precio'] . '</p>';
        echo '<p class="p-card-title card-text d-flex justify-content-center"><span class="bold-text-r">6</span> cuotas sin interes de <span class="bold-text-l">$' . $cuotas . '</span></p>';
        echo '</div>';
        echo '</a>';
        echo '</div>';
        echo '</article>';
    }

    echo '</div>';
    echo '</div>';
}
?>
