    <footer>
        <div class="container-fluid bg-color pt-1 col-12">
            <div class="p-title d-flex flex-column align-items-center">
                <div class="row d-flex align-items-center pt-5">
                    <p class="h1 text-center">Subscribite a nuestro Newsletter</p>
                </div>
                <div class="row d-flex align-items-center pt-2 pb-3">
                    <p class="h6 text-center">No te pierdas nuestras ofertas y descuentos semanales!</p>
                </div>
            </div>    
            <div class="d-flex justify-content-center align-items-center">
                <form action="newsletter.php" method="POST" class="col-12 px-4 custom-form">
                    <div class="mb-2">
                        <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre" name="nombre">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" placeholder="Ingresa tu email" name="email">
                    </div>
                    <div class="d-grid">
                        <button id="btn-color" type="submit" class="text-light fw-bold btn mb-5 btn-news">Subscribirse</button>
                    </div>
                <?php   
                    if(isset($_GET['ok'])) {
                        echo "<h2 class='text-center white'>Subscripcion exitosa ! </h2>";
                    } 
                ?>
                </form>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-4 d-flex flex-column align-items-center justify-content-center">
                    <i class="svg-size bi bi-truck pt-4"></i>
                    <p class="h3 pb-3">Envios a todo el pais</p>
                    <p class="pb-5">Gratis superando los $18.999</p>
                </div>
                <div class="col-12 col-md-4 d-flex flex-column align-items-center justify-content-center">
                    <i class="svg-size bi bi-credit-card pt-4"></i>
                    <p class="h3 pb-3">Medios de pago</p>
                    <p class="pb-5 text-center">Credito/Debito/Transferencia Bancaria</p>
                </div>
                <div class="col-12 col-md-4 d-flex flex-column align-items-center justify-content-center">
                    <i class="svg-size bi bi-percent pt-4"></i>
                    <p class="h3 pb-3">3 y 6 Cuotas sin interes</p>
                    <p class="pb-5">Con todas las tarjetas de credito</p>
                </div>
            </div>
        </div>


        <div class="bgc container-fluid">
            <div class="d-flex flex-column container text-dark p-5">
                <div class="d-flex col justify-content-center p-1">
                    <p class="text-center">Laravel Developer - Bootstrap / PHP / Laravel / MySQL /  Git / Github / AWS Cloud Practitioner</p>
                </div>
                <div class="row border-bottom">
                    <div class="d-flex col justify-content-center p-2">
                        <a href="https://api.whatsapp.com/send/?phone=5499999999&text&type=phone_number&app_absent=0"><i class="text-success bi bi-whatsapp"></i></a>
                        <p class="px-2"><a class="text-decoration-none text-dark hover-op" href="https://api.whatsapp.com/send/?phone=5499999999&text&type=phone_number&app_absent=0">5499999999</a></p>
                    </div>
                </div>
                <div class="row">  
                    <div class="d-flex col justify-content-center">
                        <i class="bi bi-envelope-at"></i>
                        <p class="px-2"><a class="text-decoration-none text-dark hover-op" href="mailto:JonnhyDev@gmail.com">JonnhyDev@gmail.com</a></p>
                    </div>
                </div>
                <div class="row">  
                    <div class="d-flex col justify-content-center p-2">
                        <i class="bi bi-geo-alt"></i>
                        <p class="px-2 text-center">BUENOS AIRES - CALLE FALSA 123</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex flex-wrap justify-content-center pb-4">
                        <img src="imagenes/visa.png" width="60px" height="40px" class="px-2 mb-3">
                        <img src="imagenes/mastercard.png" width="60px" height="40px" class="px-2 mb-3">
                        <img src="imagenes/amex.png" width="60px" height="40px" class="px-2 mb-3">
                        <img src="imagenes/banco.png" width="60px" height="40px" class="px-2 mb-3">
                        <img src="imagenes/banelco.png" width="60px" height="40px" class="px-2 mb-3">
                        <img src="imagenes/cabal.png" width="60px" height="40px" class="px-2 mb-3">
                        <img src="imagenes/tarjeta-naranja.png" width="60px" height="40px" class="px-2 mb-3">
                        <img src="imagenes/tarjeta-shopping.png" width="60px" height="40px" class="px-2 mb-3">
                        <img src="imagenes/mercadopago.png" width="60px" height="40px" class="px-2 mb-3">
                        <img src="imagenes/argencard.png" width="60px" height="40px" class="px-2 mb-3">
                        <img src="imagenes/pagofacil.png" width="60px" height="40px" class="px-2 mb-3">
                        <img src="imagenes/rapipago.png" width="60px" height="40px" class="px-2 mb-3">
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col d-flex justify-content-center">
                        <img src="imagenes/oca.png" width="60px" height="40px">
                    </div>
                </div>
                <div class="row d-flex justify-content-around">
                    <div class="col-12 col-lg-4 d-flex justify-content-center">
                        <p class="px-1 text-center">Creado por Jonathan Ezequiel Ordoñez</p>
                    </div>
                    <div class="col-12 col-lg-4 d-flex justify-content-center">
                        <p class="px-1"><a target="_blank" class="text-decoration-none text-dark hover-op" href="https://github.com/JonnhyIT28/aurora">Repositorio en Github</a></p>
                        <a target="_blank" class="text-decoration-none" href="https://github.com/JonnhyIT28/aurora">
                            <i class="text-dark bi bi-github"></i>
                        </a>
                    </div>
                    <div class="col-12 col-lg-4 d-flex justify-content-center">
                        <p class="px-1"><a target="_blank" class="text-decoration-none text-dark hover-op" href="https://www.linkedin.com/in/jonathan-ezequiel-webdev/">Mi Linkedin</a></p>
                        <a target="_blank" class="text-decoration-none" href="https://www.linkedin.com/in/jonathan-ezequiel-webdev/">    
                            <i class="bi bi-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</html>