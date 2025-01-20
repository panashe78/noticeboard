<script>
    
    const carousel = document.querySelector('.carousel');
const carouselInner = carousel.querySelector('.carousel-inner');
const carouselItems = carouselInner.children;
const prevBtn = carousel.querySelector('.prev');
const nextBtn = carousel.querySelector('.next');
let currentIndex = 0;

const slide = (direction) => {
  currentIndex += direction;

  if (currentIndex < 0) {
    currentIndex = carouselItems.length - 1;
  } else if (currentIndex >= carouselItems.length) {
    currentIndex = 0;
  }

  const offset = -currentIndex * 100;
  carouselInner.style.transform = `translateX(${offset}%)`;
};

// Automatic scrolling
const autoSlide = () => {
  slide(1); // Move to the next item
};

// Set interval for automatic scrolling (e.g., every 3 seconds)
let slideInterval = setInterval(autoSlide, 3000);

// Stop automatic scrolling on hover
carousel.addEventListener('mouseenter', () => {
  clearInterval(slideInterval);
});

// Restart automatic scrolling on mouse leave
carousel.addEventListener('mouseleave', () => {
  slideInterval = setInterval(autoSlide, 3000);
});

prevBtn.addEventListener('click', () => {
  clearInterval(slideInterval); // Stop auto-scroll on manual navigation
  slide(-1);
});

nextBtn.addEventListener('click', () => {
  clearInterval(slideInterval); // Stop auto-scroll on manual navigation
  slide(1);
});
</script>