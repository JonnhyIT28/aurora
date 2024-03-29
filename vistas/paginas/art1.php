    <article class="container pt-2">
        <div class="row pt-4">
            <!--CAROUSEL-->
            <div class="col pt-5">
                <div id="demo" class="carousel slide" data-bs-wrap="false" data-bs-interval="3000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="vistas/imagenes/vestidon1.png" alt="Dark Moon - Elegant Dress" class="d-block w-100 rounded">
                        </div>
                        <div class="carousel-item">
                            <img src="vistas/imagenes/vestidon2.png" alt="Dark Moon - Elegant Dress" class="d-block w-100 rounded">
                        </div>
                    </div>
                </div>
                
                <div id="carouselThumbnails" class="d-flex justify-content-center align-items-center p-4 mb-3">
                    <img src="vistas/imagenes/vestidon1.png" alt="Miniatura 1" onclick="changeSlide(0)" class="carousel-tn me-3 rounded active" data-bs-slide-to="0">
                    <img src="vistas/imagenes/vestidon2.png" alt="Miniatura 2" onclick="changeSlide(1)" class="carousel-tn me-3 rounded" data-bs-slide-to="1">
                </div>
            </div>

            <div class="col pt-1">
                <p class="h1 text-dark pt-5 title-resp">Dark Moon - Elegant Dress</p>
                <p class="h2 text-dark fw-bold price-resp">$15.000</p>
                <p class="h5 pt-1 cuotas-resp"><span class="discount-color">6 cuotas sin interes </span>de $2.500</p>
                <form method="POST" action="index.php?ruta=carrito" class="pt-2">
                    <input type="hidden" name="producto_id" value="1">
                    <input type="hidden" name="producto_nombre" value="Dark Moon - Elegant Dress">
                    <input type="hidden" name="producto_precio" value="29500">

                    <label for="producto_cantidad" class="form-label pt-3">CANTIDAD</label>
                    <input id="cantidad" name="producto_cantidad" type="number" placeholder="1" class="form-control" min="1">
                    <button type="submit" class="text-light fw-bold btn btn-custom w-100 mt-4">Agregar al carrito</button>
                </form>
            </div>
        </div>
    </article>

    <section>
        <div class="container border-top mt-5">
            <p class="h1 pt-4 d-flex justify-content-center text-dark">Recomendado para ti</p>
        </div>

        <div class="container">
            <div class="container pt-4">
                <div class="row p-4">

                    <article class="col-12 col-lg-4 px-4 mt-5 border-card">
                        <div class="card">
                            <a class="text-decoration-none" href="index.php?ruta=art4">
                                <div class="card-image-top">
                                    <img class="img-transition-4" width="100%" height="500px">
                                    <img src="imagenes/mochila2.png" style="display: none;">
                                </div>
                                <div class="card-body">
                                    <p class="p-card-title card-title d-flex justify-content-center pt-1">TRAVELLER VINTAGE BAG</p>
                                    <p class="p-price card-text d-flex justify-content-center fw-bold text-dark">$18.000</p>
                                    <p class="p-card-title card-text d-flex justify-content-center"><span class="bold-text-r">6</span> cuotas sin interes de <span class="bold-text-l">$3.000</span></p>
                                </div>
                            </a>
                        </div>
                    </article>

                    <article class="col-12 col-lg-4 px-4 mt-5 border-card">
                        <div class="card">
                            <a class="text-decoration-none" href="index.php?ruta=art2">
                                <div class="card-image-top">
                                    <img class="img-transition-2" height="500px" width="100%">
                                    <img src="imagenes/vestidow2.png" style="display: none;">
                                </div>
                                <div class="card-body">
                                    <p class="p-card-title card-title d-flex justify-content-center pt-1">ANGEL - WHITE FRENCH DRESS</p>
                                    <p class="p-price card-text d-flex justify-content-center fw-bold text-dark">$16.000</p>
                                    <p class="p-card-title card-text d-flex justify-content-center"><span class="bold-text-r">6</span> cuotas sin interes de <span class="bold-text-l">$2.666</span></p>
                                </div>
                            </a>
                        </div>
                    </article>

                    <article class="col-12 col-lg-4 px-4 mt-5 border-card">
                        <div class="card">
                            <a class="text-decoration-none" href="index.php?ruta=art3">
                                <div class="card-image-top">
                                    <img class="img-transition-3" height="500px" width="100%">
                                    <img src="imagenes/vestidoflower2.png" style="display: none;">
                                </div>
                                <div class="card-body">
                                    <p class="p-card-title card-title d-flex justify-content-center pt-1">FLOWER - VINTAGE DRESS</p>
                                    <p class="p-price card-text d-flex justify-content-center fw-bold text-dark">$17.000</p>
                                    <p class="p-card-title card-text d-flex justify-content-center"><span class="bold-text-r">6</span>cuotas sin interes de <span class="bold-text-l">$2.833</span></p>
                                </div>
                            </a>
                        </div>
                    </article>

                </div>
            </div>
        </div>
    </section>
</html>
