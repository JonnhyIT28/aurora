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

var carouselElement = document.getElementById("demo");
    carouselElement.addEventListener("slide.bs.carousel", function (event) {
        if (event.relatedTarget.classList.contains("no-transition")) {
    event.preventDefault();
    }
});

var cantidadInput = document.getElementById("cantidad");

    cantidadInput.addEventListener("input", function() {
        if (cantidadInput.value < 1) {
        cantidadInput.value = 1;
        }
});