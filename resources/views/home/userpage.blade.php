<!DOCTYPE html>
<html>
<head>
  @include('home.css')
</head>
<body>
<div class="modenteo-web-1-mbF">


 @include('home.topbar')
  @include('home.footer')





    @include('home.browse')


    @include('home.navbar')
     @include('home.fashion_page')

     @include('home.icons')


        @include('home.banner')
  </div>
  <p class="make-your-choice-cwK">Make your choice</p>
     @include('home.explore')


    @include('home.trending')



  @include('home.kids')


  @include('home.subscribe')

<script>

    function changeColor(element) {
        // Reset styles for all categories
        const categoryElements = document.querySelectorAll('.group-16-9YD, .group-13-mZb, .group-14-SQq, .group-15-it9');
        categoryElements.forEach(el => el.classList.remove('selected'));

        // Add a class to the clicked category to indicate it's active
        element.classList.add('selected');

        // You might want to filter and display products based on the selected category here
      }

      const sliderContainer = document.querySelector('.modenteo-web-1-mbF .auto-group-svvk-gZ7');
      const slides = sliderContainer.querySelectorAll('.slide');
      const activeSlideIndex = 0;
      let slideInterval;

      function showNextSlide() {
        const nextSlideIndex = (activeSlideIndex + 1) % slides.length;
        slides[activeSlideIndex].classList.remove('active');
        slides[nextSlideIndex].classList.add('active');
        activeSlideIndex = nextSlideIndex;
      }

      function startAutoplay() {
        slideInterval = setInterval(showNextSlide, 5000); // Set autoplay interval to 5 seconds
      }

      startAutoplay();




  </script>
</body>
