<?php
    include('menu.php');
?>

<body>
    <div class="container pt-2">
        <div class="row pt-4">
            <div class="col pt-5">
                <div id="demo" class="carousel slide" data-bs-wrap="false" data-bs-interval="3000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="imagenes/vestidow1.png" alt="Angel - White French Dress" class="d-block w-100 rounded">
                        </div>
                        <div class="carousel-item">
                            <img src="imagenes/vestidow2.png" alt="Angel - White French Dress" class="d-block w-100 rounded">
                        </div>
                    </div>
                </div>
                
                <div id="carouselThumbnails" class="d-flex justify-content-center align-items-center p-4 mb-3">
                    <img src="imagenes/vestidow1.png" alt="Miniatura 1" onclick="changeSlide(0)" class="carousel-tn me-3 rounded active" data-bs-slide-to="0">
                    <img src="imagenes/vestidow2.png" alt="Miniatura 2" onclick="changeSlide(1)" class="carousel-tn me-3 rounded" data-bs-slide-to="1">
                </div>
            </div>

            <div class="col pt-1">
                <p class="h1 text-dark pt-5 title-resp">Angel - White French Dress</p>
                <p class="h2 text-dark fw-bold price-resp">$29.500</p>
                <p class="h5 pt-1 cuotas-resp"><span class="discount-color">6 cuotas sin interes </span>de $4.966,66</p>
                <form method="post" action="" class="pt-2">
                    <label for="talle" class="form-label">TALLE</label>
                    <select class="form-select" id="talle" name="talle">
                        <option value="s">S</option>
                        <option value="m">M</option>
                        <option value="l">L</option>
                        <option value="xl">XL</option>
                    </select>
                    <label for="cantidad" class="form-label pt-3">CANTIDAD</label>
                    <input id="cantidad" name="cantidad" type="number" placeholder="1" class="form-control" min="1">
                    <button id="btn-color" type="submit" class="text-light fw-bold btn w-100 btn-news mt-4">Agregar al carrito</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container border-top mt-5">
        <p class="h1 pt-4 d-flex justify-content-center text-dark">Recomendado para ti</p>
    </div>
    <div class="container">
        <div class="container pt-4">
            <div class="row p-4">
                <div class="col-12 col-lg-4 px-4 mt-5 border-card">
                    <div class="card">
                        <a class="text-decoration-none" href="art1-dm-dress.php">
                            <div class="card-image-top">
                                <img class="img-transition-1" width="100%" height="500px">
                                <img src="imagenes/vestidon2.png" style="display: none;">
                            </div>
                            <div class="card-body">
                                <p class="p-card-title card-title d-flex justify-content-center pt-1">DARK MOON - ELEGANT DRESS</p>
                                <p class="p-price card-text d-flex justify-content-center fw-bold text-dark">$29.500</p>
                                <p class="p-card-title card-text d-flex justify-content-center"><span class="bold-text-r">6</span> cuotas sin interes de <span class="bold-text-l">$1.499,83</span></p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-4 px-4 mt-5 border-card">
                    <div class="card">
                        <a class="text-decoration-none" href="art4-tvb-acc.php">
                            <div class="card-image-top">
                                <img class="img-transition-4" width="100%" height="500px">
                                <img src="imagenes/mochila2.png" style="display: none;">
                            </div>
                            <div class="card-body">
                                <p class="p-card-title card-title d-flex justify-content-center pt-1">TRAVELLER VINTAGE BAG</p>
                                <p class="p-price card-text d-flex justify-content-center fw-bold text-dark">$29.500</p>
                                <p class="p-card-title card-text d-flex justify-content-center"><span class="bold-text-r">6</span> cuotas sin interes de <span class="bold-text-l">$1.499,83</span></p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-4 px-4 mt-5 border-card">
                    <div class="card">
                        <a class="text-decoration-none" href="art3-f-dress.php">
                            <div class="card-image-top">
                                <img class="img-transition-3" height="500px" width="100%">
                                <img src="imagenes/vestidoflower2.png" style="display: none;">
                            </div>
                            <div class="card-body">
                                <p class="p-card-title card-title d-flex justify-content-center pt-1">FLOWER - VINTAGE DRESS</p>
                                <p class="p-price card-text d-flex justify-content-center fw-bold text-dark">$29.500</p>
                                <p class="p-card-title card-text d-flex justify-content-center"><span class="bold-text-r">6</span>cuotas sin interes de <span class="bold-text-l">$1.499,83</span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include('footer.php');
?>
</html>
