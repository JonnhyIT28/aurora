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