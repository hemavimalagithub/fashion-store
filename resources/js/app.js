import './bootstrap';



document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll('.slide');
    let currentIndex = 0;

    function showSlide(index) {
      slides.forEach((slide, i) => {
        slide.style.opacity = i === index ? '1' : '0';
        slide.style.transform = i === index ? 'translatex(0)' : 'translatex(-100%)';
      });
    }

    function nextSlide() {
      currentIndex = (currentIndex + 1) % slides.length;
      showSlide(currentIndex);
    }

    // Set the interval for auto sliding (adjust the time in milliseconds)
    const slideInterval = setInterval(nextSlide, 5000); // 5000 milliseconds (5 seconds)

    // Stop auto sliding when the page is not visible
    document.addEventListener('visibilitychange', function() {
      if (document.hidden) {
        clearInterval(slideInterval);
      } else {
        slideInterval = setInterval(nextSlide, 5000); // Restart auto sliding
      }
    });

    // Add click event listeners for radio buttons
    const radioButtons = document.querySelectorAll('[type="radio"]');
    radioButtons.forEach((radioButton, index) => {
      radioButton.addEventListener('click', () => {
        clearInterval(slideInterval); // Stop auto sliding when manually selecting a slide
        currentIndex = index;
        showSlide(currentIndex);
      });
    });
  });
