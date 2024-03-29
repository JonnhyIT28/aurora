<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS -->
    <script src="vistas/js/carousels.js"></script>
    
    <!--CSS DESDE PLANTILLA-->
    <link rel="stylesheet" type="text/css" href="vistas/css/style.css">
    <link rel="stylesheet" type="text/css" href="vistas/css/menu-resp.css">
    <link rel="stylesheet" type="text/css" href="vistas/css/art-resp.css">

    <!--CSS DESDE PAGINAS-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/menu-resp.css">
    <link rel="stylesheet" type="text/css" href="css/art-resp.css">

    <!--SVG ICONS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
        <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
        <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-percent" viewBox="0 0 16 16">
        <path d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
        <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
        <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
    </svg>

    <!--FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Libre+Caslon+Text:wght@700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <title>Aurora</title>
</head>

<!-- MENU RESPONSIVO PARA MOVILES -->
<section class="fixed-top menu-resp d-sm-none">
    <div class="container-fluid bg-color border-bottom">
        <div class="d-flex pt-1 justify-content-center container text-light pl-2">
            <p class="h6 menu-resp">Envios gratis a todo el pais superando los $35.000 + 3 y 6 cuotas sin interés !</p>
        </div>
    </div>
    <div class="container-fluid bg-color">
        <div class="d-flex justify-content-around container pt-2">
            <!--OFFCANVAS MENU-->
            <div class="offcanvas offcanvas-start bg-color w-50" id="menu">
                <div class="offcanvas-header d-flex justify-content-start border-bottom">
                    <a class="white hover-ig" target="_blank" href="https://www.instagram.com/"><i class="bi bi-instagram fs-4"></i></a>
                    <a class="white hover-fb pl-2" target="_blank" href="https://www.facebook.com/"><i class="bi bi-facebook fs-4"></i></a>
                    <a class="white hover-wpp pl-2" target="_blank" href="https://www.whatsapp.com/"><i class="bi bi-whatsapp fs-4"></i></a>
                    <button type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body w-100">
                    <nav class="navbar">
                        <ul class="px-4 d-flex flex-column justify-content-center align-items-center navbar-nav">
                            <li class="nav-item pb-3 mb-3">
                                <a title="Coleccion" href="index.php?ruta=coleccion" class="link-menu hover-op text-decoration-none h4">Shop All</a>
                            </li>
                            <li class="nav-item pb-3 mb-3">
                                <a title="Clothing" href="index.php?ruta=clothing" class="link-menu hover-op text-decoration-none h4">Clothing</a>
                            </li>
                            <li class="nav-item pb-3 mb-3">
                                <a title="Accesorios" href="index.php?ruta=accesorios" class="link-menu hover-op text-decoration-none h4">Accesorios</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <a href="#menu" class="text-decoration-none">
                <div class="p-title white h3 logo-resp" data-bs-toggle="offcanvas" data-bs-target="#menu">
                    <i class="bi bi-list hover-op"></i>
                </div>
            </a>

            <!--LOGO-->
            <p class="logo h2 hover-logo logo-resp"><a class="text-decoration-none text-light" href="index.php">Aurora</a></p>

            <!--OFFCANVAS BUSCADOR-->
            <div class="offcanvas offcanvas-top bg-color w-100" id="search">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body justify-content-center w-100">
                    <form method="POST" action="index.php?ruta=q">
                        <input type="text" class="form-control" id="w" placeholder="Que estas buscando ?" name="q" >
                        <input type="submit" class="form-control mt-2" value="Buscar">
                    </form>
                </div>
            </div>

            <div class="d-flex">
                <a href="#search" class="text-decoration-none">
                    <div class="p-title white h3 logo-resp " data-bs-toggle="offcanvas" data-bs-target="#search">
                        <i class="hover-op bi bi-search"></i>
                    </div>
                </a>
                <!--CARRITO--> 
                <a href="index.php?ruta=carrito" class="text-decoration-none">
                    <div class="p-title white h3 logo-resp">
                        <i class="hover-op bi bi-cart"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- MENU PARA TABLETS Y PC -->
<section class="fixed-top menu-resp d-none d-sm-block">
    <div class="container-fluid bg-color border-bottom">
        <div class="d-flex pt-1 justify-content-around container text-light pl-2">
            <div>
                <a class="white hover-ig" target="_blank" href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>
                <a class="white hover-fb" target="_blank" href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a>
                <a class="white hover-wpp" target="_blank" href="https://www.whatsapp.com/"><i class="bi bi-whatsapp"></i></a>
            </div>
                
            <p class="h6 menu-resp">Envios gratis a todo el pais superando los $35.000 !</p>
            <p class="h6 menu-resp ">3 y 6 cuotas sin interés</p>
        </div>
    </div>
    <div class="container-fluid bg-color">
        <div class="d-flex justify-content-around container text-light pt-2"> 
            <p class="logo h2 hover-logo logo-resp"><a class="text-decoration-none text-light" href="index.php">Aurora</a></p>
            <nav>
                <ul class="nav nav-pills px-4">
                    <li class="nav-item">
                        <a title="Coleccion" href="index.php?ruta=coleccion" class="link-menu menu-resp hover-op nav-link">Shop All</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a title="Clothing" href="index.php?ruta=clothing" class="link-menu menu-resp hover-op nav-link">Clothing</a>
                    </li>
                    <li class="nav-item">
                        <a title="Accesorios" href="index.php?ruta=accesorios" class="link-menu link-menu-resp hover-op nav-link">Accesorios</a>
                    </li>
                </ul>
            </nav>

            <!--OFFCANVAS BUSCADOR-->
            <div class="offcanvas offcanvas-top bg-color h-25" id="search-lg">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body justify-content-center">
                    <form method="POST" action="index.php?ruta=q">
                        <input type="text" class="form-control mt-2" id="q" placeholder="Que estas buscando ?" name="q" required>
                        <input type="submit" class="form-control mt-2" value="Buscar">
                    </form>
                </div>
            </div>
            
            <div class="d-flex">
                <a href="#search-lg" class="text-decoration-none">
                    <div class="p-title white h3 logo-resp" data-bs-toggle="offcanvas" data-bs-target="#search-lg">
                        <i class="hover-op bi bi-search"></i>
                    </div>
                </a>

                <!--CARRITO--> 
                <a href="index.php?ruta=carrito" class="text-decoration-none">
                    <div class="p-title white h3 logo-resp">
                        <i class="hover-op bi bi-cart"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<body>
    <?php 
    
    if (isset($_GET['ruta'])) {
        if (
            $_GET['ruta'] == "inicio" ||
            $_GET['ruta'] == "coleccion" ||
            $_GET['ruta'] == "clothing" ||
            $_GET['ruta'] == "accesorios" ||
            $_GET['ruta'] == "search" ||
            $_GET['ruta'] == "art1" ||
            $_GET['ruta'] == "art2" ||
            $_GET['ruta'] == "art3" ||
            $_GET['ruta'] == "art4" ||
            $_GET['ruta'] == "art5" ||
            $_GET['ruta'] == "art6" ||
            $_GET['ruta'] == "q" ||
            $_GET['ruta'] == "carrito" ||
            $_GET['ruta'] == "checkout" ||
            $_GET['ruta'] == "eliminar_producto"
        ) {
            include "vistas/paginas/" . $_GET['ruta'] . ".php";
        } else {
            include "vistas/paginas/error404.php";
        }
    } else {
        include "vistas/paginas/inicio.php";
    }
    
    ?>
</body>

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
            <form action="" method="POST" class="col-12 px-4 custom-form">

                <?php
                    require_once 'controladores/ctrNewsletter.php';
                    $registro = ControladorNewsletter::ctrNewsletter();
                ?>

                <div class="mb-2">
                    <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre" name="nombre">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="email" placeholder="Ingresa tu email" name="email">
                </div>
                <div class="d-grid">
                    <button id="" type="submit" class="text-light fw-bold btn btn-custom mb-5">Subscribirse</button>
                </div>
            </form>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-4 d-flex flex-column align-items-center justify-content-center">
                <i class="svg-size bi bi-truck pt-4"></i>
                <p class="h3 pb-3">Envios a todo el pais</p>
                <p class="pb-5">Gratis superando los $35.000</p>
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
                <p class="text-center">PHP Developer - Bootstrap / PHP / MySQL /  Git / Github / AWS Cloud Practitioner</p>
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
                    <p class="px-2 text-center">BUENOS AIRES - DIRECCION 123</p>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex flex-wrap justify-content-center pb-4">
                    <img src="vistas/imagenes/visa.png" width="60px" height="40px" class="px-2 mb-3">
                    <img src="vistas/imagenes/mastercard.png" width="60px" height="40px" class="px-2 mb-3">
                    <img src="vistas/imagenes/amex.png" width="60px" height="40px" class="px-2 mb-3">
                    <img src="vistas/imagenes/banco.png" width="60px" height="40px" class="px-2 mb-3">
                    <img src="vistas/imagenes/banelco.png" width="60px" height="40px" class="px-2 mb-3">
                    <img src="vistas/imagenes/cabal.png" width="60px" height="40px" class="px-2 mb-3">
                    <img src="vistas/imagenes/tarjeta-naranja.png" width="60px" height="40px" class="px-2 mb-3">
                    <img src="vistas/imagenes/tarjeta-shopping.png" width="60px" height="40px" class="px-2 mb-3">
                    <img src="vistas/imagenes/mercadopago.png" width="60px" height="40px" class="px-2 mb-3">
                    <img src="vistas/imagenes/argencard.png" width="60px" height="40px" class="px-2 mb-3">
                    <img src="vistas/imagenes/pagofacil.png" width="60px" height="40px" class="px-2 mb-3">
                    <img src="vistas/imagenes/rapipago.png" width="60px" height="40px" class="px-2 mb-3">
                </div>
            </div>
            <div class="row pb-4">
                <div class="col d-flex justify-content-center">
                    <img src="vistas/imagenes/oca.png" width="60px" height="40px">
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
    </footer>
</html>