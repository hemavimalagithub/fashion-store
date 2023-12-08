<div class="features-86M">
    <p class="kids-fashion-cXK">Kids Fashion</p>
    <div class="discover-everything-you-need-for-your-kids-wJh">Discover everything you need for your kids</div>
  </div>

  <div class="auto-group-svvk-gZ7">
    <img  onclick="showPreviousProduct()"    class="arrowdirectionleftbackicon-1-BEy"    src="home\page-1\assets\arrowdirectionleftbackicon-1.png" alt="">
    <img            class="vector-tfB"           onclick="showNextProduct()"  src="home\page-1\assets\vector.png" alt="">
  </div>






  <div class="features-SXb">
    <div class="features-ACh">
        <div class="feature-W1f">
            <div class="icon-4Yy">
              <img class="vector-bJ1" src="home/page-1/assets/vector-nU1.png" alt="Vector Image 1" onclick="handleImageClick('vector-nU1.png')">
              <img class="vector-XBf" src="home/page-1/assets/vector-DYV.png" alt="Vector Image 2" onclick="handleImageClick('vector-DYV.png')">
            </div>
            <div class="text-Guw">
              <p class="high-quality-ELy">High Quality</p>
              <p class="crafted-from-top-materials-NTB">Crafted from top materials</p>
            </div>
          </div>
      <div class="feature-tgR">
        <img class="icon-eQh" src="home/page-1/assets/icon.png"/>
        <div class="text-b53">
          <p class="warrany-protection-xRP">Warrany Protection</p>
          <p class="over-2-years-HyT">Over 2 years</p>
        </div>
      </div>
      <div class="feature-Edo">
        <img class="vector-18m" src="home/page-1/assets/vector-erD.png"/>
        <div class="text-kMF">
          <p class="free-shipping-X77">Free Shipping</p>
          <p class="order-over-150--4sj">Order over 150 $</p>
        </div>
      </div>
      <div class="feature-bcm">
        <img class="item-2891214031638194523-1-MM3" src="home/page-1/assets/.png"/>
        <div class="text-s4V">
          <p class="support-dJZ">24 / 7 Support</p>
          <p class="dedicated-support-yNR">Dedicated support</p>
        </div>
      </div>
    </div>
  </div>


  <script>
    const productContainer = document.getElementById("productContainer");
  const productWidth = document.querySelector(".group-36-6do").offsetWidth + 10; // Adjust for margin
  const visibleProducts = Math.floor(productContainer.offsetWidth / productWidth);

  function showNextProduct() {
    productContainer.scrollLeft += visibleProducts * productWidth;
  }

  function showPreviousProduct() {
    productContainer.scrollLeft -= visibleProducts * productWidth;
  }

  if (isSliderClosed) {
    productContainer.style.right = "300px";
    sliderButton.style.left = "300px";
    sliderButton.innerHTML = "&#x02192;";
  } else {
    productContainer.style.right = "0";
    sliderButton.style.left = "0";
    sliderButton.innerHTML = "&#x02190;";
  }
  function handleImageClick(imageSrc) {
    // You can perform actions when the image is clicked
    // For example, you can open a new page, show a modal, etc.
    console.log('Image clicked:', imageSrc);
  }
  </script>
