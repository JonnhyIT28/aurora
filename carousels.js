function changeSlide(index) {
    var carouselElement = document.getElementById("demo");
    var carousel = new bootstrap.Carousel(carouselElement);
    carousel.to(index);

    var thumbnails = document.getElementsByClassName("carousel-tn");

    for (var i = 0; i < thumbnails.length; i++) {
        thumbnails[i].classList.remove("active");
    }

    thumbnails[index].classList.add("active");
}

var thumbnails = document.getElementsByClassName("carousel-tn");

for (var i = 0; i < thumbnails.length; i++) {
    thumbnails[i].addEventListener("click", function () {
        var index = parseInt(this.getAttribute("data-bs-slide-to"));
        changeSlide(index);
    });
}

//BLOQUEO DE MINIATURAS

var isTransitioning = false;
var transitionDelay = 500; // Tiempo de bloqueo en milisegundos
var transitionDuration = 300; // Duración de la transición en milisegundos

function changeSlide(index) {
    if (isTransitioning) {
        return;
    }

    isTransitioning = true;

    var carouselElement = document.getElementById("demo");
    var carousel = new bootstrap.Carousel(carouselElement);
    carousel.to(index);

    var thumbnails = document.getElementsByClassName("carousel-tn");

    for (var i = 0; i < thumbnails.length; i++) {
        thumbnails[i].classList.remove("active");
    }

    thumbnails[index].classList.add("active");

    setTimeout(function() {
        isTransitioning = false;
    }, transitionDelay);
    
    setTimeout(function() {
        carousel.pause();
    }, transitionDuration);
}


//FORMS
var cantidadInput = document.getElementById("cantidad");

    cantidadInput.addEventListener("input", function() {
        if (cantidadInput.value < 1) {
        cantidadInput.value = 1;
        }
});