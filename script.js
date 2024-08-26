const carousel = document.querySelector('.carousel-inner');
const slides = document.querySelectorAll('.carousel-inner img');
let currentSlide = 0;
let autoSlideInterval;

function showSlide(index) {
  slides.forEach((slide) => {
    slide.classList.remove('active');
  });

  slides[index].classList.add('active');
  currentSlide = index;
}

function startAutoSlide() {
  autoSlideInterval = setInterval(nextSlide, 3000); 
}

function stopAutoSlide() {
  clearInterval(autoSlideInterval);
}

function nextSlide() {
  showSlide((currentSlide + 1) % slides.length);
}

showSlide(currentSlide);

startAutoSlide();