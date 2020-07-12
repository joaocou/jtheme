function openNav() {
    document.getElementById("mobile-nav").style.display = "block";
    document.getElementById("mobile-nav-open").style.display = "none";
    document.getElementById("mobile-nav-close").style.display = "block";
}

function closeNav() {
    document.getElementById("mobile-nav").style.display = "none";
    document.getElementById("mobile-nav-close").style.display = "none";
    document.getElementById("mobile-nav-open").style.display = "block";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("carousel-image");

  if (n > slides.length)
    slideIndex = 1

  if (n < 1) 
    slideIndex = slides.length

  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }

  slides[slideIndex-1].style.display = "flex";
}